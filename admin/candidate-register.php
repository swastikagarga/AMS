<?php

include 'conn.php';
$system_name= "SELECT * FROM portal_setting WHERE setting_key='system_name'";

$system_result = mysqli_query($conn, $system_name);
$system_row = mysqli_fetch_array($system_result);

$system_logo= "SELECT * FROM portal_setting WHERE setting_key='system_logo'";

$system_logo_result = mysqli_query($conn, $system_logo);
$system_logo_row = mysqli_fetch_array($system_logo_result);

$system_footer= "SELECT * FROM portal_setting WHERE setting_key='system_footer'";

$system_footer_result = mysqli_query($conn, $system_footer);
$system_footer_row = mysqli_fetch_array($system_footer_result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $system_row['setting_value'] ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../index2.html"><?php echo $system_row['setting_value'] ?></a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Candidate Register</p>

      <form action="insert-candidate-register.php" method="post">
        <div class="input-group mb-3">
          <input type="text" name="full_name" class="form-control" placeholder="Full name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-8">
            
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      

      <a href="candidate-login.php" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>

<!-- SweetAlert2 -->
<script src="../plugins/sweetalert2/sweetalert2.min.js"></script>

<script>
$(function() {
var Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000
});
<?php if(isset($_SESSION['student_insert_success_message'])) : ?>
    Toast.fire({
    icon: 'success',
    title: '<?php echo $_SESSION['student_insert_success_message']; ?>'
  })

  <?php unset($_SESSION['student_insert_success_message']); ?>

<?php endif; ?>
<?php if(isset($_SESSION['student_insert_error_message'])) : ?>
    Toast.fire({
    icon: 'error',
    title: '<?php echo $_SESSION['student_insert_error_message']; ?>'
  })

  <?php unset($_SESSION['student_insert_error_message']); ?>

<?php endif; ?>
});
</script>
</body>
</html>
