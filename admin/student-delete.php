<?php 

include 'conn.php';
if(!isset($_GET['id'])){
  header('location: index.php');
}
$id = $_GET['id'];
$single_cert= "DELETE FROM students WHERE id='$id'";

if(mysqli_query($conn, $single_cert)){
    header('location: index.php');
    $_SESSION["student_delete_success_message"] = "Student deleted successfully.";
}else{
    header('location: index.php');
    $_SESSION["student_delete_error_message"] = "Unable to delete student. Please try again.";
}



?>