<?php 

include 'conn.php';


$setting_key = $_POST['setting_key'];
$setting_value = $_POST['setting_value'];

$setting_update_query = "UPDATE portal_setting SET setting_value='$setting_value' WHERE setting_key='$setting_key'";

if(mysqli_query($conn, $setting_update_query)){
    header('location: settings.php');
    $_SESSION["setting_update_success_message"] = $setting_key." updated successfully.";
}else{
    header('location: certificates.php');
    $_SESSION["setting_update_error_message"] = "Unable to update ".$setting_key;
}



?>