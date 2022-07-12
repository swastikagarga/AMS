<?php
include('conn.php');

$id = $_POST['id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$current_org = $_POST['current_org'];
$current_position = $_POST['current_position'];
$website_url = $_POST['website_url'];
$birth_year = $_POST['birth_year'];
$country = $_POST['country'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$registration_number = $_POST['registration_number'];
$mobile_number = $_POST['mobile_number'];
$password = $_POST['password'];
$facebook_url = $_POST['facebook_url'];
$bio = $_POST['bio'];


$sql = "INSERT INTO students (first_name, last_name, username, registration_number, email, password, profile_picture) 
        VALUES ('$first_name', '$last_name', '$username', '$registration_number', '$mobile_number', '$password', 'https://via.placeholder.com/150')";

$sql = "Update students SET first_name='$first_name', last_name='$last_name', 
        bio='$bio', current_org='$current_org', current_position='$current_position', 
        website_url='$website_url', birth_year='$birth_year', country='$country', city='$city', 
        city='$city', zip='$zip', registration_number='$registration_number', email='$mobile_number', 
        password='$password', facebook_url='$facebook_url' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    
    header('location: edit-student.php?id='.$id);
    $_SESSION["student_update_success_message"] = "Student Updated Successfully.";
    
} else {
    header('location: index.php');
    $_SESSION["student_update_error_message"] = "Unable to update student.";
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>