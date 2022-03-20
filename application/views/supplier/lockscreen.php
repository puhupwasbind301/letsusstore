<!DOCTYPE html>
<html>
<?php $title = "Admin Lockscreen";
  
  include 'admin_assets/include_supplier/header.php';
?>
<body class="hold-transition lockscreen">
<?php $adminDetails = $this->helper->getAdminProfile(); ?>
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <a href="<?php echo base_url('admin-assets/'); ?>index2.html"><b>Admin</b>Lockscreen</a>
  </div>
  <?php if($this->session->flashdata('loginMsg')) : ?>
  <?php echo $this->session->flashdata('loginMsg'); ?>
  <?php endif ?>
  <!-- User name -->
  <div class="lockscreen-name"><?php echo $adminDetails->username ?></div>

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
   <!--  <div class="lockscreen-image">
      <img src="<?php echo $adminDetails->admin_img ?>" alt="User Image">
    </div> -->
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <form class="lockscreen-credentials" autocomplete="off" method="post">
      <div class="input-group">
        <input type="hidden" class="form-control" value="<?php echo $adminDetails->username ?>" name="username">
        <input type="password" class="form-control" placeholder="password" name="password">

        <div class="input-group-append">
          <button type="submit" class="btn"><i class="fas fa-arrow-right text-muted"></i></button>
        </div>
      </div>
    </form>
    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->
  <div class="help-block text-center">
    Enter your password to retrieve your session
  </div>
  <div class="text-center">
    <a href="<?php echo base_url('admin/logout'); ?>">Or sign in as a different user</a>
  </div>
  <?php include 'admin_assets/include_supplier/footer.php';?>
</body>
</html>
