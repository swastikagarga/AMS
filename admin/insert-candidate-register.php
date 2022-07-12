<?php
include('conn.php');


$full_name = $_POST['full_name'];
$email = $_POST['email'];
$password = $_POST['password'];



$sql = "INSERT INTO candidate (candidate_name, candidate_email, candidate_password) 
        VALUES ('$full_name', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    
    header('location: candidate-register.php');
    $_SESSION["student_insert_success_message"] = "New student added.";
    
} else {
    header('location: candidate-register.php');
    $_SESSION["student_insert_error_message"] = "Failed to add new students.";
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>