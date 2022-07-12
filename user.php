<?php

include 'admin/conn.php';

$username = $_GET['user'];

$student_query= "SELECT * FROM students WHERE username='$username'";

$student_result = mysqli_query($conn, $student_query);
$student_row = mysqli_fetch_array($student_result);
$student_id = $student_row['id'];

$system_name= "SELECT * FROM portal_setting WHERE setting_key='system_name'";

$system_result = mysqli_query($conn, $system_name);
$system_row = mysqli_fetch_array($system_result);

$system_logo= "SELECT * FROM portal_setting WHERE setting_key='system_logo'";

$system_logo_result = mysqli_query($conn, $system_logo);
$system_logo_row = mysqli_fetch_array($system_logo_result);

$certificates_query = "SELECT * FROM certificates WHERE student_id='$student_id'";
$certificate_result = mysqli_query($conn, $certificates_query);





?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- custome css -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- fontawesome icon -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title><?php echo $student_row['first_name']." ".$student_row['last_name']; ?> | <?php echo $system_row['setting_value'] ?> </title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-3 mb-5 bg-body rounded">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?php echo $system_logo_row['setting_value'] ?>" width="100px" height="80px" alt="">
            </a>


            <div class="d-flex  px-5 btn-box ">
                
                <a href="admin/login.php" class="btn btn-success px-3">Sign In</a>
            </div>
        </div>
        </div>
    </nav>

    <div class="container">
        <div class="row ">
            <div class="col-md-6 col-lg-4    image-box">
                <img src="admin/<?php echo $student_row['profile_picture']; ?>" />
            </div>
            <div class="col-md-6 col-lg-8    d-flex align-items-center">
                <div class="profile ">
                    <h2 class="name"><?php echo $student_row['first_name']." ".$student_row['last_name']; ?></h2>
                    <div class="title mt-4"><?php echo $student_row['current_position']; ?> | <?php echo $student_row['current_org']; ?></div>
                    <div class="title"><?php echo $student_row['city']; ?></div>
                    <div class="my-4"><?php echo $student_row['bio']; ?>.</div>
                    <div class="d-flex icons ">
                        <div class="mr-5  px-2 facebook ">
                            <a href="<?php echo $student_row['facebook_url']; ?>">
                                <i class="fab fa-facebook-f "></i>
                            </a>
                        </div>
                        <div style="margin-left: 10px;">
                            <div class="send-message">
                                <i class="far fa-envelope"></i>
                                <a href="<?php echo $student_row['website_url']; ?>" class="send-message" style="margin-left: 2px;">Send a Message</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid badge-header mt-5 mb-5 d-flex justify-content-center">
        <a href="#" class="badge-link">Certificates</a>
    </div>

    <div class="container mb-5">
        <div class="row border-top badge-image-box">
            
            <?php while($row = mysqli_fetch_array($certificate_result)): ?>
            <div class="col-md-6 col-lg-4 micro border border-bottom-0 border-top-0 d-flex py-5">
                <img src="admin/<?php echo $row['cert_url']; ?>" />
                <div class="d-flex align-items-center certificate "><a href="#"><?php echo $row['cert_number']; ?></a>
                </div>
            </div>
            <?php endwhile; ?>
            
        </div>
    </div>

    <div id="footer">
        <div class="footer-nav-link">
            <!-- <ul>
                <li><a>About Credly</a></li>
                <li><a>Request Demo</a></li>
                <li><a>Terms</a></li>
                <li><a>Privacy</a></li>
                <li><a>Developers</a></li>
                <li><a>Support</a></li>
            </ul> -->
            <div class="mb-3">
                © COPYRIGHT 2022
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>