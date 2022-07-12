<?php include 'conn.php'; ?>

<?php

$cert_query = "SELECT * FROM admission_record";
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
                <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-8">
                                    <h5 class="card-title m-0">Certificates</h5>
                                </div>
                                
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Signature</th>
                                <th>10th Marks</th>
                                <th>12th Marks</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            
                            <?php while($cert_row = mysqli_fetch_array($cert_result)): ?>
                            <tr>
                                <td><?php echo $cert_row['first_name']; ?> <?php echo $cert_row['last_name']; ?></td>
                                <td><?php echo $cert_row['mobile']; ?></td>
                                <td><img src="<?php echo $cert_row['signature']; ?>" width="100" height="100"></td>
                                <td><img src="<?php echo $cert_row['10th_marks']; ?>" width="100" height="100"></td>
                                <td><img src="<?php echo $cert_row['12th_marks']; ?>" width="100" height="100"></td>
                                <td><img src="<?php echo $cert_row['image']; ?>" width="100" height="100"></td>
                                <td><?php echo ($cert_row['admission_status'] == 0)? '<span class="badge badge-primary">Submitted</span>': (($cert_row['admission_status'] == 1)? '<span class="badge badge-success">Accepted</span>': '<span class="badge badge-danger">Declined</span>' ); ?></td>
                                <th>
                                <?php if($cert_row['admission_status'] ==0) : ?>
                                    <a class="btn btn-danger" href="update-admission.php?id=<?php echo $cert_row['admission_id']; ?>&status=2">Reject</a>
                                    <a class="btn btn-success" href="update-admission.php?id=<?php echo $cert_row['admission_id']; ?>&status=1">Accept</a>
                                    <?php endif; ?>
                                    <?php if($cert_row['admission_status'] ==1) : ?>
                                    <a class="btn btn-primary" href="new-student.php?id=<?php echo $cert_row['admission_id']; ?>">Admission</a>
                                    
                                    <?php endif; ?>
                                    <?php if($cert_row['admission_status'] !=0) : ?>
                                    
                                    <a class="btn btn-danger" href="delete-admission.php?id=<?php echo $cert_row['admission_id']; ?>">Delete</a>
                                    <?php endif; ?>
                                </th>
                            </tr>
                            <?php endwhile; ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Signature</th>
                                <th>10th Marks</th>
                                <th>12th Marks</th>
                                <th>Image</th>
                                <th>Status</th>
                                
                                <th>Action</th>
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