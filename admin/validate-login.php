<?php
include('conn.php');

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$sql = "SELECT * FROM admin WHERE email='$email' and password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    // output data of each row
    $_SESSION["id"] = $row['id'];
    $_SESSION["email"] = $row['email'];
    $_SESSION["name"] = $row['name'];

    $_SESSION["login_success_message"] = "Welcome back " . $row['name'];

    header('location: index.php');
} else {
    $_SESSION["login_error_message"] = "Invalid email or password";
    //mysqli_error($conn);
    header('location: login.php');
}

mysqli_close($conn);
