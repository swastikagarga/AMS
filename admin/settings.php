<?php include 'conn.php'; ?>

<?php

$setting_query = "SELECT * FROM portal_setting";

$setting_result = mysqli_query($conn, $setting_query);


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
                                    <h5 class="card-title m-0">Settings</h5>
                                </div>
                                
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th style="width: 10px">#</th>
                                <th>Key</th>
                                <th>Value</th>
                                <th style="width: 40px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($row = mysqli_fetch_array($setting_result)): ?>
                                <form action='update-setting.php' method='post'>
                                <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td>
                                    <?php echo $row['setting_key']; ?>
                                    <input type="hidden" name="setting_key" value="<?php echo $row['setting_key']; ?>">
                                </td>
                                <td><input type="text" name="setting_value" value="<?php echo $row['setting_value']; ?>"></td>
                                <td><input type="submit" class="btn btn-primary" value="Update"></td>
                                </form>
                                </tr>
                                <?php endwhile; ?>
                                
                                
                            </tbody>
                            </table>

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