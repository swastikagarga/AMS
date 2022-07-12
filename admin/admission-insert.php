<?php
include('conn.php');

$department_id = $_POST['department_id'];
$candidate_id = $_POST['candidate_id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$dob = $_POST['dob'];
$nationality = $_POST['nationality'];
$caste = $_POST['caste'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];


$sql = "INSERT INTO admission_record (admission_id, first_name, last_name, dob, department_id, nationality, caste, address, mobile, email) 
        VALUES ('$candidate_id', '$first_name', '$last_name', '$dob', '$department_id', '$nationality', '$caste', '$address', '$mobile', '$email')";


if (mysqli_query($conn, $sql)) {
    
    header('location: candidate-admission.php?id='.$department_id);
    $_SESSION["student_update_success_message"] = "Student Updated Successfully.";
    
} else {
    header('location: candidate-admission.php?id='.$department_id);
    $_SESSION["student_update_error_message"] = "Unable to update student.";
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>