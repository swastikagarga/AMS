<?php 

if(!isset($_SESSION['name'])){
    header('location: login.php');
}

?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <div class="row mb-2">
                    <div class="col-sm-4">
                        <a type="button" href="candidate-index.php" class="btn btn-primary btn-block"><i class="fas fa-user-graduate"></i> Departments</a>
                    </div>
                    
                </div>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <a type="button" href="candidate-logout.php" class="btn btn-danger btn-block"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->