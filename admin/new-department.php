<?php include 'conn.php'; ?>

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
              <form method="post" action="department-insert.php">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Department Name</label>
                        <input type="text" name="department_name" class="form-control" id="exampleInputEmail1" placeholder="Please enter first name">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Department Hod</label>
                        <input type="text" name="department_hod" class="form-control" id="exampleInputEmail1" placeholder="Please enter last name">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Department Phone</label>
                        <input type="text" name="department_phone" class="form-control" id="exampleInputEmail1" placeholder="Please enter registration number">
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