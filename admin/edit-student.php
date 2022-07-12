<?php include 'conn.php'; ?>

<?php 

$id = $_GET['id'];
$select_student_query = "SELECT * FROM students WHERE id='$id'";
$single_student_result = mysqli_query($conn, $select_student_query);
$single_student_row = mysqli_fetch_array($single_student_result);

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
                                    <h5 class="card-title m-0">Edit Student</h5>
                                </div>
                                <div class="col-4">
                                    <a type="button" href="index.php" class="btn btn-primary float-sm-right"><i class="fas fa-backward"></i> Back</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                        <div class="card card-primary">
                                        <form method="post" action="student-update.php">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">First Name</label>
                                                    <input type="hidden" value="<?php echo $single_student_row['id']; ?>" name="id">
                                                    <input type="text" value="<?php echo $single_student_row['first_name']; ?>" name="first_name" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Last Name</label>
                                                    <input type="text" value="<?php echo $single_student_row['last_name']; ?>" name="last_name" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Bio</label>
                                                    <input type="text" value="<?php echo $single_student_row['bio']; ?>" name="bio" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Current Organasition</label>
                                                    <input type="text" value="<?php echo $single_student_row['current_org']; ?>" name="current_org" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Current Position</label>
                                                    <input type="text" value="<?php echo $single_student_row['current_position']; ?>" name="current_position" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Website Url</label>
                                                    <input type="text" value="<?php echo $single_student_row['website_url']; ?>" name="website_url" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Birth Year</label>
                                                    <input type="text" value="<?php echo $single_student_row['birth_year']; ?>" name="birth_year" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Country</label>
                                                    <input type="text" value="<?php echo $single_student_row['country']; ?>" name="country" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">City</label>
                                                    <input type="text" value="<?php echo $single_student_row['city']; ?>" name="city" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Zip</label>
                                                    <input type="text" value="<?php echo $single_student_row['zip']; ?>" name="zip" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Registration Number</label>
                                                    <input type="text" value="<?php echo $single_student_row['registration_number']; ?>" name="registration_number" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email</label>
                                                    <input type="text" value="<?php echo $single_student_row['email']; ?>" name="mobile_number" class="form-control" id="exampleInputEmail1" placeholder="Enter Mobile">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Password</label>
                                                    <input type="text" value="<?php echo $single_student_row['password']; ?>" name="password" class="form-control" id="exampleInputEmail1" placeholder="Enter Mobile">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Facebook Url</label>
                                                    <input type="text" value="<?php echo $single_student_row['facebook_url']; ?>" name="facebook_url" class="form-control" id="exampleInputEmail1" placeholder="Enter Mobile">
                                                </div>
                                            
                                            
                                            </div>
                                            <!-- /.card-body -->

                                            <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>


                                <div class="col-4">
                                    

                                        <!-- Profile Image -->
                                        <div class="card card-primary card-outline">
                                        <div class="card-body box-profile">
                                            <div class="text-center">
                                            <img class="profile-user-img img-fluid img-circle"
                                                src="<?php echo $single_student_row['profile_picture']; ?>"
                                                alt="User profile picture">
                                            </div>
                                            <br>

                                            <ul class="list-group list-group-unbordered mb-3">
                                            
                                            <form method="post" action="profile-picture.php" enctype="multipart/form-data">
                                            <input type="hidden" name="user_id" value="<?php echo $id; ?>">
                                                <li class="list-group-item">
                                                        <div class="form-group">
                                                            <label for="exampleInputFile">File input</label>
                                                            <div class="input-group">
                                                            <div class="custom-file">
                                                                <input type="file" name="fileToUpload" class="custom-file-input" id="exampleInputFile">
                                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                            </div>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">Upload</span>
                                                            </div>
                                                            </div>
                                                        </div>
                                                </li>
                                            </ul>

                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                        <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->

                                    
                                </div>
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