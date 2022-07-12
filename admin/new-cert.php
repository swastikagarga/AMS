<?php include 'conn.php'; ?>

<?php

$id=$_GET['id'];

$select_all_students_query = "SELECT * FROM students WHERE id='$id'";
$students_result = mysqli_query($conn, $select_all_students_query);
$student_row = mysqli_fetch_array($students_result);


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
                                    <h5 class="card-title m-0">Add certificate for : <?php echo $student_row['first_name']." ".$student_row['last_name']; ?>(<?php echo $student_row['username']; ?>)</h5>
                                </div>
                                <div class="col-4">
                                    <a type="button" href="student-details.php?id=<?php echo $id; ?>" class="btn btn-primary float-sm-right"><i class="fas fa-backward"></i> Back</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="certinsert.php" enctype="multipart/form-data">
                <div class="card-body">

                <input type="hidden" name="user_id" value="<?php echo $id; ?>">
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Certificate Number</label>
                    <input type="text" name="certificate_number" class="form-control" id="exampleInputPassword1" placeholder="Certificate Number">
                  </div>
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