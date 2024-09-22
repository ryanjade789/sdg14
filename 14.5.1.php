<!--============================================================================================= 
                      INSERT DATA TO DB ONCE SUBMIT BUTTON WAS CLICKED
============================================================================================= -->

<?php 
if (isset($_POST['submit'])) {
  // Get form data
 // $total_number = $_POST['total_number'];
  $title =  strtoupper($_POST['title']);
  $description = strtoupper( $_POST['description']);
  $yes = $_POST['yes'];

  include "includes/config.php";  // CHANGE THIS WITH YOUR ACTUAL CONNECTION TO DATABASE ex: conn.php

  // SQL query to insert data
  $sql = "INSERT INTO `14.5.1` (`does`,`title`, `description`) VALUES ('$yes','$title','$description')";

  if ($conn->query($sql) === TRUE) {
      // The research was successfully entered
      $successMessage = "You have successfully entered data";
  } else {
      // There was an error in the SQL query
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  // Close the connection
  $conn->close();
}


?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SDG 14.5.1 | Minimizing alteration of aquatic ecosystem (plan)</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href= css/sidebar.css>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- for icons */  -->
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
  <!--- for table __-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
    body {
  font-family: "Lato", sans-serif;
  background-color: white;
}
body, html {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
  overflow-x: auto; 
}
/* Main content */
.main {
  margin-left: 250px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
  color: #FCF5ED;
  display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: rgb(0, 154, 218);
    font-family: Verdana, sans-serif;
    font-weight: bolder;
 
}
.points{
    width: 60px;
    height: 40px;
    border-radius: 15px;
  }
p{
    margin: 20px;
    font-size: 16px;
}
h2 {
    flex: 1; /* Allow h2 to grow to take available space */
  }

  .input-container {
    display: flex;
    align-items: center;
  }

  p {
    margin-right: 10px;
  }
  .content{
    margin-left: 300px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
  color: rgb(0, 154, 218);
  }
 
  .card{
    width: 73%;
    margin-left: 300px;
    margin-right: 50px;
    margin-bottom: 50px;
    margin-top: 20px; 
    height:auto;
  }
  .form-control{
  
    display: block;
    width: 90%;
    height: 30px;
  
  }
  .contentform{
    margin-top: 30px;
    margin-bottom:30px;
    justify-content: center;
    align-items: center;
    margin-left: auto;
    margin-right: 50px;
  width: 80%; 
  }
  .table-container{
    margin-left: 300px;
    margin-right: 50px;
    width:73%;
    overflow-x: auto; 
  }
  .h3text{
    justify-content:center;
    margin: auto;
    align-items: center;

  }
  .points{
    box-shadow: grey;
  }
</style>

<body>
<?php include('sidebar.php'); ?>

<!--============================================================================================= 
                                  START OF HEADER POINTING SYSTEM 
============================================================================================= -->
<div class="main" style="background-color:#C31F33;">
  <h2>SDG 14 LIFE BELOW WATER</h2>
  <div class="input-container">
    <p>Points</p>

    <?php                              //==========================================================       
    include "includes/config.php";   // CHANGE THIS WITH YOUR ACTUAL CONNECTION TO DATABASE
                                     //========================================================== 

    $query = "SELECT Count(*) AS total  FROM `14.5.1`"; // SQL query to fetch all table data
    $result = mysqli_query($conn, $query); // sending the query to the database


    while ($row = mysqli_fetch_assoc($result)) {
        $total = $row['total'];
       $totalno= $total;
       $yes = 0;
       $query = "SELECT * FROM `14.5.1`"; // SQL query to fetch all table data
      $result = mysqli_query($conn, $query); // sending the query to the database
      while ($row = mysqli_fetch_assoc($result)) {
        if ($row['does'] == 'yes'){
          $yes++;
        }
      }
       if (!$result) {
         die("Error: " . mysqli_error($conn)); // Output the error message for debugging
       }
   
 
       // Add the points for the current research to the total points
       $totalPoints = intdiv($total, 2)*4;
       $totalPoints += $yes;
    }

  
    ?>

<input type="text" style="color: black; text-align: center;  " class="points" name="points" value="<?php echo min($totalPoints, 5); ?>" readonly>  
</div>
</div>

<!--============================================================================================= 
                                  END OF HEADER POINTING SYSTEM 
 ============================================================================================= -->

  <div class="content">
    <br>
    <h3>SDG 14.5.1 | Minimizing alteration of aquatic ecosystem (plan)</h3>
    <p>Have a plan to minimize physical, chemical and biological alterations of related aquatic ecosystems</P>

  </div>

  <!--============================================================================================= 
                                  START OF FORM
============================================================================================= -->
 <div class="card">
 <div class="contentform">
  <form method="POST">

  <!-- <div class="mb-2 mt-2"><i class="fa fa-search"></i>
      <label for="total_number">Total number of research on early years and lifelong education</label>
      <input type="number" class="form-control" id="total_number"  name="total_number" required>
    </div>  -->
    <div class="mb-2">
    <i class="fa fa-bookmark"></i>
    <label for="title">Title of the Plan</label>
    <textarea class="form-control" id="title" name="title" rows="5" required></textarea>
</div>
<div class="mb-2 mt-2">
      <label><i class="fa fa-search"></i> Does your campus have a plan to minimize physical, chemical and biological alterations of related aquatic ecosystem?</label><br>
      <input type="radio" id="flexRadioDefault1" class="form-check-input" id="yes" value="yes"  name="yes" required>
      <label class="form-check-label" for="yes">Yes</label>
      <input type="radio" id="flexRadioDefault1" class="form-check-input" id="no"  value= "no"name="yes" required>
      <label class="form-check-label" for="no">No</label>
    </div>
    <div class="mb-2"><i class="fa fa-user"></i>
      <label for="author">Short description</label>
      <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
</div>
    <button type="submit" class="btn btn-primary mt-3 mb-3" name="submit"><i class="fa fa-send"></i>Submit</button>
    <script type="text/javascript">
    <?php
    if (isset($successMessage)) {
        
        echo "swal({
            title: 'Success',
            text: '$successMessage',
            icon: 'success',
            button: 'OK'
        });";
    }
    ?>
</script>
    <button type="reset" class="btn btn-danger mt-3 mb-3" name="cancel"><i class="fa fa-times-circle"></i> Cancel</button>
  </form>
  </div>
</div>
<!--============================================================================================= 
                                END OF FORM
============================================================================================= -->

<!--============================================================================================= 
                        START OF TABLE/ DISPLAY ALL RECORDS FROM DATABASE
============================================================================================= -->

<div class="table-container">
  <h2>Action Plans</h2>           
  <table class="table table-bordered">
  <thead>
    <tr>
  <!--    <th scope="col" style="width: 30px;">#</th>
      <th scope="col" style="width: 30px;">Total Research</th>  -->
      <th scope="col" style="width: 200px;">Title</th>
      <th scope="col" style="width: 100px;">Short description</th>
      <th scope="col" style="width: 150px;">Plan</th>
      <th scope="col" style="width: 50px;">Points</th>
      <th scope="col"colspan="2" class ="text-center" style="width: 100px;">Action</th>
    </tr>
  </thead>
    <tbody>
    <?php
            include "includes/config.php";   // CHANGE THIS WITH YOUR ACTUAL CONNECTION TO DATABASE ex: conn.php
            $query = "SELECT * FROM `14.5.1` ORDER BY `total` DESC"; // SQL query to fetch all table data
            $result = mysqli_query($conn, $query); // sending the query to the database

            if (!$result) {
                die("Error: " . mysqli_error($conn)); // Output the error message for debugging
            }
            // Displaying all the data retrieved from the database using a while loop
            $i=0;
            while ($row = mysqli_fetch_assoc($result)) {
              $id = $row['total'];
                $title = $row['title'];
                $description = $row['description'];
                $yes = $row['does'];
                if (fmod($i ,2) != 0){
                  $totalPoints = 4;
                 }else{
                 $totalPoints = 0;
                 }
                 $i++;
                
                  if ($yes=='yes'){
                    $point = 1;
                  }else{
                    $point = 0;
                  }
                  $totalPoints += $point;
                echo "<tr>";
               // echo "<td>{$id}</td>";
               // echo "<td>{$total_number}</td>";
                echo "<td>{$title}</td>";
                echo "<td>{$description}</td>";
                echo "<td>{$yes} </td>";
                echo "<td>$totalPoints</td>"; 
            

                echo "<td class ='text-center' style='width:100px'>
                          <a href='edit/edit_14.5.1.php?update&research_id={$id}' class='btn btn-primary'>
                              <i class='fa fa-edit'></i> 
                          </a>
                          <a href='delete/delete_14.5.1.php?delete={$id}' class='btn btn-danger'>
                          <i class='fa fa-trash'></i>
                      </a>
                      </td>";

            /*    echo "<td class='text-center'>
                          <a href='delete_4.1.php?delete={$id}' class='btn btn-danger'>
                              <i class='fa fa-trash'></i>
                          </a>
                      </td>";
                echo "</tr>"; 
                */
            }
            ?>
    </tbody>
  </table>
</div>
<!--============================================================================================= 
                                END OF TABLE
============================================================================================= -->

<!--============================================================================================= 
//                           this is js for sidebar panel
// DONT REMOVE IT. MAKE SURE TO INCLUDE IT TO ALL YOUR FILES   !!!!!!!!!!
//============================================================================================= -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>

/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>
</body>
</html> 

