<!DOCTYPE html>
<html>
<?php $title = "Setting";
  $nav_page = 48;
  include 'admin_assets/include_supplier/header.php';
 ?>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  
<?php include 'admin_assets/include_supplier/navbar.php'; ?>
  <?php include 'admin_assets/include_supplier/sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Setting</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>Admin">Home</a></li>
              <li class="breadcrumb-item active">Setting</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
          
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item">Change Password</li>
                  
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">

                  <div id="setting">
                    <div class="col-md-5">
                    <form action="" method="post">
                      <div class="form-group">
                        <label class="form-label">Old Password&nbsp;<span class="text-danger font-weight-bold">&ast;</span></label>
                        <input type="password" class="form-control" name="opassword">
                        <small class="text-danger"><?php echo form_error('opassword'); ?></small>
                      </div>
                      <div class="form-group">
                        <label class="form-label">New Password&nbsp;<span class="text-danger font-weight-bold">&ast;</span></label>
                        <input type="password" class="form-control" name="npassword">
                        <small class="text-danger"><?php echo form_error('npassword'); ?></small>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Confirm Password&nbsp;<span class="text-danger font-weight-bold">&ast;</span></label>
                        <input type="password" class="form-control" name="cpassword">
                        <small class="text-danger"><?php echo form_error('cpassword'); ?></small>
                      </div>
                      <div class="form-group">
                        <button class="btn btn-primary float-right" type="submit">Update</button>
                      </div>
                    </form>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include 'admin_assets/include_supplier/footer.php'; ?>
</body>
</html>
