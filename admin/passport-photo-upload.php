<?php
include('conn.php');

$user_id = $_POST['user_id'];
$department_id = $_POST['department_id'];
$file_name;

$target_dir = "uploads/";
$target_file = $target_dir . time(). "-".basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "pdf" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG, PDF & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

    $file_name = $target_dir.time(). "-".basename( $_FILES["fileToUpload"]["name"]);

    $sql = "UPDATE admission_record SET image='$file_name' WHERE admission_id='$user_id'";

    if (mysqli_query($conn, $sql)) {
		header('location: candidate-admission.php?id=');
        $_SESSION["profile_picture_success_message"] = "Passport photo has been updated.";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


    
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}


?>