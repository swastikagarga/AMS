<?php
include 'admin/conn.php';

$system_name= "SELECT * FROM portal_setting WHERE setting_key='system_name'";

$system_result = mysqli_query($conn, $system_name);
$system_row = mysqli_fetch_array($system_result);

$system_logo= "SELECT * FROM portal_setting WHERE setting_key='system_logo'";

$system_logo_result = mysqli_query($conn, $system_logo);
$system_logo_row = mysqli_fetch_array($system_logo_result);

$system_footer= "SELECT * FROM portal_setting WHERE setting_key='system_footer'";

$system_footer_result = mysqli_query($conn, $system_footer);
$system_footer_row = mysqli_fetch_array($system_footer_result);

$student_query = "SELECT * FROM students";
$student_result = mysqli_query($conn, $student_query);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?php echo $system_row['setting_value'] ?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="https://iti-gov.in/"><?php echo $system_row['setting_value'] ?></a>
                <a class="btn btn-success" href="admin/candidate-login.php">Applicant Login</a>
                <a class="btn btn-primary" href="admin/login.php">Admin Login</a>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center text-white">
                            <!-- Page heading-->
                            <h1 class="mb-5">Welcome to <?php echo $system_row['setting_value'] ?></h1>
                            
                            <form action="certificate-display.php" method="get">
                                
                                <div class="row">
                                    <div class="col">
                                        <input class="form-control form-control-lg" name="certificate_number" id="emailAddress" type="text" placeholder="Enter Certificate Number to validate"/>
                                    </div>
                                    <div class="col-auto"><button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        
        <div class="row">
            <?php while($studen_row = mysqli_fetch_array($student_result)): ?>
            <div class="col-3 mt-2">
            <div class="card">
                <img class="card-img-top" src="admin/<?php echo $studen_row['profile_picture']; ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $studen_row['first_name']; ?> <?php echo $studen_row['last_name']; ?></h5>
                    <p class="card-text"><?php echo $studen_row['bio']; ?></p>
                    <a href="user.php?user=<?php echo $studen_row['username']; ?>" class="btn btn-primary">Visit Profile</a>
                </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        
        
        <!-- Footer-->
        <footer class="footer bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                        
                        <p class="text-muted small mb-4 mb-lg-0"><?php echo $system_footer_row['setting_value'] ?></p>
                    </div>
                    
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
       
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
