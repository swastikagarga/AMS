<?php
include('conn.php');


$department_name = $_POST['department_name'];
$department_hod = $_POST['department_hod'];
$department_phone = $_POST['department_phone'];


$sql = "INSERT INTO department (department_name, department_hod, department_phone) 
        VALUES ('$department_name', '$department_hod', '$department_phone')";

if (mysqli_query($conn, $sql)) {
    
    header('location: departments.php');
    $_SESSION["student_insert_success_message"] = "New Department added.";
    
} else {
    header('location: departments.php');
    $_SESSION["student_insert_error_message"] = "Failed to add new department.";
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>