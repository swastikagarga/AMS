<?php include 'conn.php'; ?>

<?php

$select_all_students_query = "SELECT * FROM department";
$students_result = mysqli_query($conn, $select_all_students_query);


?>

<?php include 'candidate-nav.php'; ?>
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
                                <th>Department Name</th>
                                <th>Department Hod Name</th>
                                <th>Hod Phone</th>
                                
                            </tr>
                            </thead>
                            <tbody>
                            
                           <?php while($student_row = mysqli_fetch_array($students_result)): ?>
                            <tr>
                                <td><a href="candidate-admission.php?id=<?php echo $student_row['department_id']; ?>"><?php echo $student_row['department_name']; ?></a></td>
                                <td><?php echo $student_row['department_hod']; ?></td>
                                <td><?php echo $student_row['department_phone']; ?></td>
                            </tr>
                            <?php endwhile; ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Department Name</th>
                                <th>Department Hod Name</th>
                                <th>Hod Phone</th>
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