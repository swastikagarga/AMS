<?php
include('conn.php');

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$sql = "SELECT * FROM candidate WHERE candidate_email='$email' and candidate_password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    // output data of each row
    $_SESSION["id"] = $row['candidate_id'];
    $_SESSION["email"] = $row['candidate_email'];
    $_SESSION["name"] = $row['candidate_name'];

    $_SESSION["login_success_message"] = "Welcome back " . $row['name'];

    header('location: candidate-index.php');
} else {
    $_SESSION["login_error_message"] = "Invalid email or password";
    //mysqli_error($conn);
    header('location: candidate-login.php');
}

mysqli_close($conn);
