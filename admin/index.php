<?php include 'conn.php'; ?>

<?php

$select_all_students_query = "SELECT * FROM students";
$students_result = mysqli_query($conn, $select_all_students_query);


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
                                    <h5 class="card-title m-0">Students</h5>
                                </div>
                                <div class="col-4">
                                    <a href="new-student.php" type="button" class="btn btn-primary float-sm-right"><i class="fas fa-user-graduate"></i> Add New</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Birth Year</th>
                                <th>City</th>
                                <th>Registration Number</th>
                            </tr>
                            </thead>
                            <tbody>
                            
                           <?php while($student_row = mysqli_fetch_array($students_result)): ?>
                            <tr>
                                <td><a href="student-details.php?id=<?php echo $student_row['id']; ?>"><?php echo $student_row['first_name']. " ".$student_row['last_name']; ?></a></td>
                                <td><?php echo $student_row['username']; ?></td>
                                <td><?php echo $student_row['birth_year']; ?></td>
                                <td><?php echo $student_row['city']; ?></td>
                                <td><?php echo $student_row['registration_number']; ?></td>
                            </tr>
                            <?php endwhile; ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Birth Year</th>
                                <th>City</th>
                                <th>Registration Number</th>
                            </tr>
                            </tfoot>
                            </table>
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