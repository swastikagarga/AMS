<?php include 'conn.php'; ?>

<?php

$cert_query = "SELECT *, c.id as cid, s.id as sid FROM certificates as c, students as s WHERE c.student_id=s.id";
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
                                <th>Username</th>
                                <th>Certificate Number</th>
                                <th>Issue Date</th>
                                <th>Certificate Url</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            
                            <?php while($cert_row = mysqli_fetch_array($cert_result)): ?>
                            <tr>
                                <td><?php echo $cert_row['username']; ?></td>
                                <td><?php echo $cert_row['cert_number']; ?></td>
                                <td><?php echo $cert_row['issue_date']; ?></td>
                                <td><img src="<?php echo $cert_row['cert_url']; ?>" width="100" height="100"></td>
                                <th><a class="btn btn-danger" href="cert-delete.php?id=<?php echo $cert_row['cid']; ?>">Delete</a></th>
                            </tr>
                            <?php endwhile; ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Username</th>
                                <th>Certificate Number</th>
                                <th>Issue Date</th>
                                <th>Certificate Url</th>
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