<?php include 'conn.php'; ?>

<?php 

$id = $_GET['id'];
$candidate_id = $_SESSION['id'];

$select_student_query = "SELECT * FROM admission_record WHERE admission_id='$candidate_id'";
$single_student_result = mysqli_query($conn, $select_student_query);
$rowcount=mysqli_num_rows($single_student_result);
$single_student_row = mysqli_fetch_array($single_student_result);

?>

<?php include 'nav.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <?php include 'candidate-nav-buttons.php'; ?>

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-4">
                                    <h5 class="card-title m-0">Admission Form</h5>
                                </div>
                                <?php if($rowcount > 0): ?>
                                <div class="col-4">
                                    <h5 class="card-title m-0">Application Status: <?php echo ($single_student_row['admission_status'] == 0)? '<span class="badge badge-primary">Submitted</span>': (($single_student_row['admission_status'] == 1)? '<span class="badge badge-success">Accepted</span>': '<span class="badge badge-danger">Declined</span>' ); ?></h5>
                                </div>
                                <?php endif; ?>
                                <div class="col-4">
                                    <a type="button" href="candidate-index.php" class="btn btn-primary float-sm-right"><i class="fas fa-backward"></i> Back</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                        <?php if($rowcount > 0): ?>
                                            <div class="card card-primary">
                                        <form method="post" action="admission-update.php">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">First Name</label>
                                                    <input type="hidden" value="<?php echo $id; ?>" name="department_id">
                                                    <input type="hidden" value="<?php echo $candidate_id; ?>" name="candidate_id">
                                                    <input type="text" value="<?php echo $single_student_row['first_name']; ?>" name="first_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Firstname">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Last Name</label>
                                                    <input type="text" value="<?php echo $single_student_row['last_name']; ?>"  name="last_name" class="form-control" id="exampleInputEmail1" placeholder="Enter lastname">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">DOB</label>
                                                    <input type="date" value="<?php echo $single_student_row['dob']; ?>"  name="dob" class="form-control" id="exampleInputEmail1" placeholder="Enter Dob">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Nationality</label>
                                                    <input type="text" value="<?php echo $single_student_row['nationality']; ?>" name="nationality" class="form-control" id="exampleInputEmail1" placeholder="Enter Nationality">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Caste</label>
                                                    <input type="text" value="<?php echo $single_student_row['caste']; ?>"  name="caste" class="form-control" id="exampleInputEmail1" placeholder="Enter caste">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Address</label>
                                                    <input type="text" value="<?php echo $single_student_row['address']; ?>" name="address" class="form-control" id="exampleInputEmail1" placeholder="Enter address">
                                                </div>


                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Mobile Number</label>
                                                    <input type="text" value="<?php echo $single_student_row['mobile']; ?>"  name="mobile" class="form-control" id="exampleInputEmail1" placeholder="Enter Mobile">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email</label>
                                                    <input type="text" value="<?php echo $single_student_row['email']; ?>" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                                </div>
                                            
                                            
                                            </div>
                                            <!-- /.card-body -->

                                            <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                        <?php else: ?>
                                            <div class="card card-primary">
                                        <form method="post" action="admission-insert.php">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">First Name</label>
                                                    <input type="hidden" value="<?php echo $id; ?>" name="department_id">
                                                    <input type="hidden" value="<?php echo $candidate_id; ?>" name="candidate_id">
                                                    <input type="text" name="first_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Firstname">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Last Name</label>
                                                    <input type="text"  name="last_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Lastname">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">DOB</label>
                                                    <input type="date"  name="dob" class="form-control" id="exampleInputEmail1" placeholder="Enter DOB">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Nationality</label>
                                                    <input type="text" name="nationality" class="form-control" id="exampleInputEmail1" placeholder="Enter Nationality">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Caste</label>
                                                    <input type="text"  name="caste" class="form-control" id="exampleInputEmail1" placeholder="Enter Caste">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Address</label>
                                                    <input type="text" name="address" class="form-control" id="exampleInputEmail1" placeholder="Enter Address">
                                                </div>


                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Mobile Number</label>
                                                    <input type="text"  name="mobile" class="form-control" id="exampleInputEmail1" placeholder="Enter Mobile">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email</label>
                                                    <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                                                </div>
                                            
                                            
                                            </div>
                                            <!-- /.card-body -->

                                            <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                        <?php endif; ?>
                                </div>


                                <div class="col-4">
                                    

                                        <!-- Profile Image -->
                                        <div class="card card-primary card-outline">
                                        <div class="card-body box-profile">
                                            <div class="text-center">Signature</div>
                                            <div class="text-center">
                                            <img class="profile-user-img img-fluid img-circle"
                                                src="<?php echo $single_student_row['signature']; ?>"
                                                alt="User signature picture">
                                            </div>
                                            <br>

                                            <ul class="list-group list-group-unbordered mb-3">
                                            
                                            <form method="post" action="signature-upload.php" enctype="multipart/form-data">
                                            <input type="hidden" name="user_id" value="<?php echo $candidate_id; ?>">
                                            <input type="hidden" name="department_id" value="<?php echo $department_id; ?>">
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

                                        <!-- Profile Image -->
                                        <div class="card card-primary card-outline">
                                        <div class="card-body box-profile">
                                            <div class="text-center">Passport Size Photo</div>
                                            <div class="text-center">
                                            <img class="profile-user-img img-fluid img-circle"
                                                src="<?php echo $single_student_row['image']; ?>"
                                                alt="User passport picture">
                                            </div>
                                            <br>

                                            <ul class="list-group list-group-unbordered mb-3">
                                            
                                            <form method="post" action="passport-photo-upload.php" enctype="multipart/form-data">
                                            <input type="hidden" name="user_id" value="<?php echo $candidate_id; ?>">
                                            <input type="hidden" name="department_id" value="<?php echo $department_id; ?>">
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
                                        <!-- Profile Image -->
                                        <div class="card card-primary card-outline">
                                        <div class="card-body box-profile">
                                            <div class="text-center">10th Marksheet</div>
                                            <div class="text-center">
                                            <img class="profile-user-img img-fluid img-circle"
                                                src="<?php echo $single_student_row['10th_marks']; ?>"
                                                alt="User 10th marksheet ">
                                            </div>
                                            <br>

                                            <ul class="list-group list-group-unbordered mb-3">
                                            
                                            <form method="post" action="marksheet-10-upload.php" enctype="multipart/form-data">
                                            <input type="hidden" name="user_id" value="<?php echo $candidate_id; ?>">
                                            <input type="hidden" name="department_id" value="<?php echo $department_id; ?>">
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
                                        <!-- Profile Image -->
                                        <div class="card card-primary card-outline">
                                        <div class="card-body box-profile">
                                            <div class="text-center">12th Marksheet</div>
                                            <div class="text-center">
                                            <img class="profile-user-img img-fluid img-circle"
                                                src="<?php echo $single_student_row['12th_marks']; ?>"
                                                alt="User 12th marksheet ">
                                            </div>
                                            <br>

                                            <ul class="list-group list-group-unbordered mb-3">
                                            
                                            <form method="post" action="marksheet-12-upload.php" enctype="multipart/form-data">
                                            <input type="hidden" name="user_id" value="<?php echo $candidate_id; ?>">
                                            <input type="hidden" name="department_id" value="<?php echo $department_id; ?>">
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