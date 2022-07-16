<?php 

include 'conn.php';
if(!isset($_GET['id'])){
  header('location: aplications.php');
}
$id = $_GET['id'];
$single_cert= "DELETE FROM admission_record WHERE admission_id='$id'";

if(mysqli_query($conn, $single_cert)){
    header('location: aplications.php');
    $_SESSION["student_delete_success_message"] = "Application deleted successfully.";
}else{
    header('location: aplications.php');
    $_SESSION["student_delete_error_message"] = "Unable to delete department. Please try again.";
}



?>