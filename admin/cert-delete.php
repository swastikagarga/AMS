<?php 

include 'conn.php';
if(!isset($_GET['id'])){
  header('location: certificates.php');
}
$id = $_GET['id'];
$single_cert= "DELETE FROM certificates WHERE id='$id'";

if(mysqli_query($conn, $single_cert)){
    header('location: certificates.php');
    $_SESSION["cert_delete_success_message"] = "Certificate has been deleted.";
}else{
    header('location: certificates.php');
    $_SESSION["cert_delete_error_message"] = "Unable to delete certificate. Please try again.";
}



?>