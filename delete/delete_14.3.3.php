<!--============================================================================================= 
                                DELETE DATA
============================================================================================= -->

<?php
include "../includes/config.php"; //REPLACE THE "config.php" WITH YOUR ACTUAL CONNECTION TO DATABASE EX: conn.php

if (isset($_GET['delete'])) {
    $deleteid = $_GET['delete'];

    // Check if the user has confirmed the deletion
    if (isset($_GET['confirm']) && $_GET['confirm'] == 'true') {
        // SQL query to delete data from the "order" table where id = $userid
        $query = "DELETE FROM `tbl14_3_3` WHERE `total_number` = {$deleteid}";
        $delete_query = mysqli_query($conn, $query);
        echo "<script type='text/javascript'>alert(' data deleted successfully!')</script>";
        header("Location: ../14.3.3.php"); //REPLACE THIS WITH YOUR ACTUAL FILE ONCE DATA IS DELETED
    } else {
        // If not confirmed, show a confirmation dialog using JavaScript
        echo "<script>
              var confirmed = confirm('Are you sure you want to delete this record?');
              if (confirmed) {
                  window.location.href = 'delete_14.3.3.php?delete=$deleteid&confirm=true';
              } else {
                  window.location.href = '../14.3.3.php';
              }
              </script>";
    }
}
?>
