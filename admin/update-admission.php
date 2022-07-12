<?php 

include 'conn.php';
if(!isset($_GET['id'])){
  header('location: aplications.php');
}
$id = $_GET['id'];
$status = $_GET['status'];
$single_cert= "UPDATE admission_record SET admission_status = '$status' WHERE admission_id='$id'";

if(mysqli_query($conn, $single_cert)){
    header('location: aplications.php');
    $_SESSION["cert_delete_success_message"] = "Application status updated.";
}else{
    header('location: aplications.php');
    $_SESSION["cert_delete_error_message"] = "Unable to delete certificate. Please try again.";
}



?>