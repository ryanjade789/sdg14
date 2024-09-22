<?php 
if (isset($_POST['submit'])) {
  // Get form data
  $tnumber = $_POST['tnumber'];
  $title = $_POST['title'];
  $description = $_POST['description'];
  $cost = $_POST['cost'];
  $fund = $_POST['fund'];

  include "includes/config.php";

  // SQL query to insert data
  $sql = "INSERT INTO `tbl14_5_3` ( `tnumber`, `title`, `description`, `cost`, `fund`) 
  VALUES ('$tnumber', '$title','$description','$cost','$fund')";

  if ($conn->query($sql) === TRUE) {
      // The dat was successfully entered
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
<title>14.5.3 Programmes towards good aquatic stewardship practices</title>

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

/* Main content */
.main {
  margin-left: 250px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
  color: #FCF5ED;
  display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: rgb(0, 154, 218);;
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
  color: rgb(0, 154, 218);;
  }
 
  .card{
    margin-left: 350px;
    margin-right: 120px;
    margin-bottom: 70px;
    margin-top: 20px;
    height: 500px;

  }
  .content>p{
    text-align: justify;
    justify-content: justify-content;
  }
  .form-control{
    margin-right: 30px;
    display: block;
    width: 88%;
    height: 30px;
  }
  .form-row{

    height: 30px;
    
  }
  .contentform{
    margin-top: 30px;
    margin-left: 100px;
    margin-bottom:30px;
    justify-content: center;
    align-items: center;
    
  }
.btn{
    margin-bottom: 10px;

}
  /* remove muna pic 
.image{
  width: 50px;
  height: 50px;
}
  */
  .table-container{
    margin-left: 350px;
    margin-right: 50px;
    width:64%;
    overflow-x: auto; 
  }
  .h3text{
    justify-content:center;
    margin-left: 300px;
  }
  .points{
    box-shadow: grey;
  }
.fields{
    border-bottom: solid 1px #e9d6d6;
    margin-right: 25px;
}
/* css for confrim button */
.button-container {
        display: flex;
        align-items: center; /* Align items vertically */
    }

    .btn {
        margin-right: 10px; /* Adjust margin as needed */
    }

    .confirmation-text {
        margin: 0; /* Remove default margin for the paragraph */
    }

/* endddd */
</style>

<body>
<?php include('sidebar.php'); ?>

<!-- START OF HEADER POINTING SYSTEM -->
<div class="main">
  <h2>SDG 14 Life Below Water</h2>
  <div class="input-container">
    <p>Points</p>

    <?php
            include "includes/config.php";
            $query = "SELECT Count(*) AS total FROM `tbl14_5_3`"; // SQL query to fetch all table data
            $result = mysqli_query($conn, $query); // sending the query to the database

            $totalPoints = 0;

            while ($row = mysqli_fetch_assoc($result)) {
                $total = $row['total'];
               $totalno= $total;

                // calculate points by dividing total number of PPAs by 2 and multiply by 5
                $points = ($totalno /2*5);
                
              
                // Add the points  to the total points
                $totalPoints += $points;
            }
            ?>

<input type="text" style="color: black; text-align: center;" class="points" name="points" value="<?php echo min($totalPoints, 5); ?>" readonly>  
</div>
</div>

<!-- END OF HEADER POINTING SYSTEM -->

  <div class="content">
    <br>
    <h3>14.5.3 Programmes towards good aquatic stewardship practices</h3>
  <p>Develop and support programmes and incentives that encourage and maintain good aquatic stewardship practices</p>
    <!--remove muna pic 
    <div class="image" style="width: 50px;"style="height: 50px;">
            <img src="img/rs.png" alt="Image">
        </div>
-->

  </div>
 <div class="card">
<div class="contentform">
  <form method="POST" >

    <!-- FOR Total number of LET passers -->
<!--   <p><?php echo $percentage?>% of graduates who acquired a license have teaching 
qualifications to teach at primary level.</p> -->
<div class="form-group"><i class="fa fa-bookmark"></i>
      <label for="" class="text-center ">Total number of educational programs on sustainable fisheries for the community:</label>
      <textarea class="form-control" id="tnumber" name="tnumber" rows="3" required></textarea>
    </div>
<div class="form-group"><i class="fa fa-bookmark"></i>
      <label for="title" class="text-center ">Title of the PPA</label>
      <textarea class="form-control" id="title" name="title" rows="3" required></textarea>
    </div>
    <div class="form-group"><i class="fa fa-edit"></i>
      <label for="description">Short description of the PPA</label>
      <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
    </div>
    <div class="form-group"><i class="fa fa-dollar"></i>
      <label for="cost">Total cost</label>
      <input type="number" class="form-control" id="" name="cost" required>
    </div>
    <div class="form-group"><i class="	fa fa-group"></i>
      <label for="fund">Fund source</label>
      <input type="text" class="form-control" id="" name="fund" required>
    </div>
 
  <div>
    <button type="submit" class="btn btn-primary  mb-3" id="submit" name="submit" >
      <i class="fa fa-send"></i>Submit</button>
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
    <button type="reset" class="btn btn-danger mb-3" name="cancel"><i class="fa fa-times-circle"></i> Cancel</button>
    </div><br>
  
</form>
  </div>
</div>
<!-- START OF TABLE -->
<div class="table-container">
  <h2>Programmes towards good aquatic stewardship practices</h2>           
  <table class="table table-bordered">
  <thead>
    <tr>
  <!--    <th scope="col" style="width: 30px;">#</th> -->
      <th scope="col" style="width: 10px;">Total number of programs offered towards good aquatic stewardship practices:</th>
      <th scope="col" style="width: 10px;">Title of PPA</th>
      <th scope="col" style="width: 130px;">Description</th>
      <th scope="col" style="width: 50px;">Total Cost</th>
      <th scope="col" style="width: 80px;">Fund Source</th>
   <!--   <th scope="col" style="width: 50px;">Points</th>  -->
      <th scope="col"colspan="2"  style="width: 60px;">Action</th>
    </tr>
  </thead>
    <tbody>
    <?php
            include "includes/config.php";
            $query = "SELECT * FROM `tbl14_5_3`"; // SQL query to fetch all table data
            $result = mysqli_query($conn, $query); // sending the query to the database

            if (!$result) {
                die("Error: " . mysqli_error($conn)); // Output the error message for debugging
            }
            // Displaying all the data retrieved from the database using a while loop
            while ($row = mysqli_fetch_assoc($result)) {
              $id = $row['total_number'];
                $tnumber = $row['tnumber'];
                $title = $row['title'];
                $description = $row['description'];
                $cost = $row['cost'];
                $fund = $row['fund'];
            
          /*   $query = "SELECT Count(*) AS total FROM `tbl14_5_3`"; // SQL query to fetch all table data
                  $result = mysqli_query($conn, $query); // sending the query to the database
      
                  $totalPoints = 0;
      
                  while ($row = mysqli_fetch_assoc($result)) {
                      $total = $row['total'];
                     $totalno= $total;
      
                      // calculate points by dividing total number of PPAs by 2 and multiply by 5
                      $points = number_format(($totalno /2 * 5),2);
                      
                    
                      // Add the points  to the total points
                     
                  }     */         

                echo "<tr>";
               // echo "<td>{$id}</td>";
                echo "<td>{$tnumber}</td>";
                echo "<td>{$title}</td>";
                echo "<td>{$description}</td>";
                echo "<td>Php{$cost}</td>";
                echo "<td>{$fund}</td>";
              //  echo "<td>$points</td>"; 
            

                echo "<td style='width:100px'>
                          <a href='edit/edit_14.5.3.php?update&research_id={$id}' class='btn btn-primary'>
                              <i class='fa fa-edit'></i> 
                          </a>
                          <a href='delete/delete_14.5.3.php?delete={$id}' class='btn btn-danger'>
                          <i class='fa fa-trash'></i>
                      </a>
                      </td>";

            /*    echo "<td class='text-center'>
                          <a href='delete4.3.1.php?delete={$id}' class='btn btn-danger'>
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



<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>

  //this is js for sidebar panel
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
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

