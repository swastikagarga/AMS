<?php 

if(!isset($_SESSION['name'])){
    header('location: login.php');
}

?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-9">
                <div class="row mb-2">
                    <div class="col-sm-2">
                        <a type="button" href="index.php" class="btn btn-primary btn-block"><i class="fas fa-user-graduate"></i> Students</a>
                    </div>
                    <div class="col-sm-2">
                        <a type="button" href="departments.php" class="btn btn-primary btn-block"><i class="fas fa-user-graduate"></i> Department</a>
                    </div>
                    <div class="col-sm-2">
                        <a type="button" href="certificates.php" class="btn btn-primary btn-block"><i class="fas fa-certificate"></i> Certificates</a>
                    </div>
                    <div class="col-sm-2">
                        <a type="button" href="aplications.php" class="btn btn-primary btn-block"><i class="fas fa-certificate"></i> Application</a>
                    </div>
                    
                    <div class="col-sm-2">
                        <a type="button" href="settings.php" class="btn btn-primary btn-block"><i class="fas fa-tools"></i> Settings</a>
                    </div>
                </div>
            </div><!-- /.col -->
            <div class="col-sm-3">
                <ol class="breadcrumb float-sm-right">
                    <a type="button" href="logout.php" class="btn btn-danger btn-block"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->