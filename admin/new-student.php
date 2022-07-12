<?php include 'conn.php'; ?>
<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $admission_record = "SELECT * FROM admission_record WHERE admission_id='$id'";
    $rs = mysqli_query($conn, $admission_record);
    $row = mysqli_fetch_array($rs);
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $mobile = $row['mobile'];
    $email = $row['email'];
}


?>

<?php include 'nav.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <?php include 'nav-buttons.php'; ?>

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-8">
                                    <h5 class="card-title m-0">Add New Student</h5>
                                </div>
                                <div class="col-4">
                                    <a type="button" href="index.php" class="btn btn-primary float-sm-right"><i class="fas fa-backward"></i> Back</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="student-insert.php">
                <div class="card-body">
                    <?php if(isset($_GET['id'])): ?>
                        <div class="form-group">
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="text" name="first_name" value="<?php echo $first_name; ?>" class="form-control" id="exampleInputEmail1" placeholder="Please enter first name">
                    </div>
                    <?php else: ?>
                    <div class="form-group">
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="text" name="first_name" class="form-control" id="exampleInputEmail1" placeholder="Please enter first name">
                    </div>
                    <?php endif; ?>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Last Name</label>
                        <input type="text" name="last_name" value="<?php echo (isset($_GET['id']))? $last_name : '' ?>" class="form-control" id="exampleInputEmail1" placeholder="Please enter last name">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Registration Number</label>
                        <input type="text" name="registration_number" class="form-control" id="exampleInputEmail1" placeholder="Please enter registration number">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Mobile Number</label>
                        <input type="text" name="mobile_number" value="<?php echo (isset($_GET['id']))? $mobile : '' ?>" class="form-control" id="exampleInputEmail1" placeholder="Please enter mobile number">
                    </div>
                  
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" name="email" value="<?php echo (isset($_GET['id']))? $email : '' ?>" class="form-control" id="exampleInputEmail1" placeholder="Please enter mobile number">
                    </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    
                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<?php include 'footer.php'; ?>