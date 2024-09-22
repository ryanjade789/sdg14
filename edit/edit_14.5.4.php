<!--============================================================================================= 
                                EDIT DATA RETRIEVED FROM DATABASE 
============================================================================================= -->
<?php
include "../includes/config.php";  //REPLACE THE "config.php" WITH YOUR ACTUAL CONNECTION TO DATABASE EX: conn.php
if(isset($_GET['research_id']))
    {
      $research_id = $_GET['research_id']; 
    }
    
      // SQL query to select all the data from the table where researchid = $researchid
     //...
$query = "SELECT * FROM `tbl14_5_4` WHERE `total_number` = $research_id";
$result = mysqli_query($conn, $query);

if (!$result) {
    // Handle query execution error
    die('Error in SQL query: ' . mysqli_error($conn));
}

// Check if any rows were returned
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // Process data
        $tnumber = $row['tnumber'];
        $title = $row['title'];
        $description = $row['description'];
        $cost = $row['cost'];
        $fund = $row['fund'];
    }
} else {
    // Handle case where no rows were returned
    die('No data found for research ID ' . $research_id);
}
//...
             
  //============================================================================================= 
    //                     UPDATE DATA ONCE UPDATE BUTTON WAS CLICKED
//============================================================================================= -->        
 //Processing form data when form is submitted/ when update button is clicked
 if (isset ($_POST['update'])){
    //$total_research = $_POST['total_number'];
    $tnumber = $_POST['tnumber'];
  $title = $_POST['title'];
  $description = $_POST['description'];
  $cost = $_POST['cost'];
  $fund = $_POST['fund'];

      // SQL query to update the data in user table where the id = $userid 
      $query="UPDATE `tbl14_5_4` SET
            `tnumber` = '{$tnumber}',
          `title` = '{$title}', 
          `description` = '{$description}', 
          `cost` = '{$cost}', 
          `fund` = '{$fund}'
      WHERE `total_number` = $research_id";
        $update = mysqli_query($conn, $query);
        $successMessage = "You have successfully updated data";
    }
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SDG 14.2.3 Overfishing (community outreach)</title>

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
.card{
    margin-left: 350px;
    margin-right: 350px;
    margin-bottom: 50px;
    margin-top: 20px;
    background-color: white;
    box-shadow: 0px 20px 20px rgba(0.1, 0.1, 0.1, 0.1);
  }
.form-group{
    margin-left: 50px;
    margin-right: 50px;
    margin-bottom: 10px;
}
h3{
    text-align: center;
}
.btn-primary {
    margin-left: 50px;
}
.btn-danger {
    margin-left: 5px;
}
</style>
</head>
<body>
    <!--============================================================================================= 
                              FORM TO EDIT DATA 
============================================================================================= -->
<div class="card"> 
<form method="POST">
    <div class="form-group"><i class="fa fa-bar-chart"></i>
    <label for="tnumber" class="text-center">Total number of educational programs addressing overfishing:</label>
    <textarea class="form-control" id="tnumber" name="tnumber" rows="3" required><?php echo $tnumber ?></textarea>
</div>
<div class="form-group"><i class="fa fa-area-chart"></i>
    <label for="title">Title of the PPA:</label>
    <textarea class="form-control" id="title" name="title" rows="5" required><?php echo $title ?></textarea>
</div>
<div class="form-group"><i class="fa fa-area-chart"></i>
    <label for="description">Short description:</label>
    <textarea class="form-control" id="description" name="description" rows="5" required><?php echo $description ?></textarea>
</div>
<div class="form-group"><i class="fa fa-area-chart"></i>
    <label for="cost">Total cost:</label>
    <textarea class="form-control" id="cost" name="cost" rows="5" required><?php echo $cost ?></textarea>
</div>
<div class="form-group"><i class="fa fa-area-chart"></i>
    <label for="fund">Fund source:</label>
    <textarea class="form-control" id="fund" name="fund" rows="5" required><?php echo $fund ?></textarea>
</div>
   <button type="submit" class="btn btn-primary mt-6 mb-3" name="update"><i class="far fa-edit"></i>Update</button>
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
<button type="reset" class="btn btn-danger mt-6 mb-3" name="cancel" onclick="window.location.href='../14.5.4.php';">
    <i class="fa fa-times-circle"></i> Cancel
</button>
  <br>

</form>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>