<?php 

include 'conn.php';
if(!isset($_GET['id'])){
  header('location: index.php');
}
$id = $_GET['id'];
$single_cert= "DELETE FROM department WHERE department_id='$id'";

if(mysqli_query($conn, $single_cert)){
    header('location: departments.php');
    $_SESSION["student_delete_success_message"] = "Department deleted successfully.";
}else{
    header('location: departments.php');
    $_SESSION["student_delete_error_message"] = "Unable to delete department. Please try again.";
}



?>