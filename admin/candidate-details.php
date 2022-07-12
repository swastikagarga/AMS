<?php 

include 'conn.php';
if(!isset($_GET['id'])){
  header('location: index.php');
}
$id = $_GET['id'];
$single_student= "SELECT * FROM students WHERE id='$id'";

$student_result = mysqli_query($conn, $single_student);
$student_row = mysqli_fetch_array($student_result);

$cert_count = "SELECT COUNT(*) as count FROM certificates WHERE student_id='$id'";
$count_result = mysqli_query($conn, $cert_count);
$count_row = mysqli_fetch_array($count_result);

$cert_query = "SELECT * FROM certificates WHERE student_id='$id'";
$cert_result = mysqli_query($conn, $cert_query);


?>

<?php include 'nav.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <?php include 'nav-buttons.php'; ?>

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    
                    <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle"
                                src="<?php echo $student_row['profile_picture']; ?>"
                                alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center"><?php echo $student_row['first_name']." ".$student_row['last_name']; ?></h3>

                            <p class="text-muted text-center"><?php echo $student_row['username']; ?></p>

                            <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Total Certificates</b> <a class="float-right"><?php echo $count_row['count']; ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Registration Number</b> <a class="float-right"><?php echo $student_row['registration_number']; ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Email</b> <a class="float-right"><?php echo $student_row['email']; ?></a>
                            </li>
                            </ul>

                            <div class="row">
                            <!-- <div class="col-4">
                                <a href="#" class="btn btn-success btn-block"><b>Edit</b></a>
                            </div> -->
                            <div class="col-4">
                                <a href="new-cert.php?id=<?php echo $id; ?>" class="btn btn-primary btn-block"><b>Add Certificate</b></a>
                            </div>
                            <div class="col-4">
                                <a href="edit-student.php?id=<?php echo $id; ?>" class="btn btn-success btn-block"><b>Update Student</b></a>
                            </div>
                            <div class="col-4">
                                <a href="student-delete.php?id=<?php echo $id; ?>" class="btn btn-danger btn-block"><b>Delete</b></a>
                            </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    
                </div>

                <div class="col-lg-6">
                    <!-- About Me Box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">About</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fas fa-book mr-1"></i> Current Organisation</strong>

                            <p class="text-muted">
                            <?php echo $student_row['current_org']; ?>
                            </p>

                            <hr>

                            <strong><i class="fas fa-pencil-alt mr-1"></i> Current Position</strong>

                            <p class="text-muted">
                            <span class="tag tag-danger"><?php echo $student_row['current_position']; ?></span>

                            </p>

                            <hr>
                            

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                            <p class="text-muted"><?php echo $student_row['city']; ?></p>

                            

                            <hr>

                            <strong><i class="far fa-file-alt mr-1"></i> Bio</strong>

                            <p class="text-muted"><?php echo $student_row['bio']; ?>.</p>
                        </div>
                        <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                </div>


                <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h4 class="card-title">Certificates</h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <?php while($cert_row = mysqli_fetch_array($cert_result)): ?>
                    <div class="col-sm-2">
                      <a href="<?php echo $cert_row['cert_url']; ?>" data-toggle="lightbox" data-title="<?php echo $cert_row['cert_number']; ?>" data-gallery="gallery">
                        <img src="<?php echo $cert_row['cert_url']; ?>" class="img-fluid mb-2" alt="<?php echo $cert_row['cert_number']; ?>"/>
                      </a>
                    </div>

                  <?php endwhile; ?>
                  
                  
                </div>
              </div>
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