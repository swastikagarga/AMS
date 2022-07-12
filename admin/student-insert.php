<?php
include('conn.php');

$n=4;
function getName($n) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
  
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
  
    return $randomString;
}
  
$random = getName($n);

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$registration_number = $_POST['registration_number'];
$mobile_number = $_POST['mobile_number'];
$email = $_POST['email'];
$username = $first_name."-".$random;
$password = getName(6);


$sql = "INSERT INTO students (first_name, last_name, username, registration_number, mobile, email, password, profile_picture) 
        VALUES ('$first_name', '$last_name', '$username', '$registration_number', '$mobile_number', '$email', '$password', 'https://via.placeholder.com/150')";

if (mysqli_query($conn, $sql)) {
    
    header('location: index.php');
    $_SESSION["student_insert_success_message"] = "New student added.";
    
} else {
    header('location: index.php');
    $_SESSION["student_insert_error_message"] = "Failed to add new students.";
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>