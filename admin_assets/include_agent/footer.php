<!-- Control Sidebar -->
 <!--  <aside class="control-sidebar control-sidebar-dark">
   <div class="p-3">
      <h5><i class="fas fa-cogs"></i> Settings</h5>
      <a class="nav-link <?php if($nav_page === 30) { echo 'active'; } ?>" href="<?= base_url()?>admin/setting"><i class="fas fa-user-cog"></i>&nbsp;&nbsp;&nbsp;Setting</a>
      <a class="nav-link menu-open" href="<?php echo base_url('admin/set-lockscreen') ?>"><i class="fas fa-lock"></i>&emsp;Lockscreen</a>
      <a class="nav-link menu-open" href="<?php echo base_url('admin/logout') ?>"><i class="fas fa-sign-out-alt"></i>&emsp;Logout</a>

    </div>
  </aside> -->
  <!-- /.control-sidebar -->

<footer class="main-footer  d-none">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">Admin</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.1
    </div>
  </footer>

  
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url(); ?>admin_assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url(); ?>admin_assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url(); ?>admin_assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url(); ?>admin_assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url(); ?>admin_assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url(); ?>admin_assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url(); ?>admin_assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url(); ?>admin_assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url(); ?>admin_assets/plugins/moment/moment.min.js"></script>
<script src="<?= base_url(); ?>admin_assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url(); ?>admin_assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url(); ?>admin_assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url(); ?>admin_assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>admin_assets/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url(); ?>admin_assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url(); ?>admin_assets/dist/js/custom.js"></script>


<script src="<?= base_url() ?>admin_assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url() ?>admin_assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script src="<?= base_url() ?>admin_assets/plugins/toastr/toastr.min.js"></script>
<script src="<?= base_url()?>admin_assets/dist/js/jquery.timeselector.js"></script>

<script src="<?= base_url() ?>admin_assets/plugins/ckeditor/ckeditor.js"></script>
 <!-- <script src="<?= base_url() ?>admin_assets/plugins/ckeditor/build-config.js"></script>
 <script src="<?= base_url() ?>admin_assets/plugins/ckeditor/config.js"></script> 
 <script src="<?= base_url() ?>admin_assets/plugins/ckeditor/style.js"></script>  -->


<!-- Puhupwas -->
<!-- <script type="text/javascript" src="<?= base_url() ?>admin_assets/plugins/imageandvideoviewer/html5lightbox/jquery.js"></script>
<script type="text/javascript" src="<?= base_url() ?>admin_assets/plugins/imageandvideoviewer/html5lightbox/html5lightbox.js"></script> -->

<script>CKEDITOR.replace( 'desc' );</script>

  
<script>
   setTimeout(function() {
    $('.alert').fadeOut('fast');
}, 3500);
</script>

<script>
  $(function () {
    $("#example1").DataTable();
    toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}

  <?php if ($this->session->flashdata('success_msg')): ?>
    toastr.success('<?php echo $this->session->flashdata('success_msg'); ?>')
  <?php endif ?>

  <?php if ($this->session->flashdata('warn_msg')): ?>
    toastr.warning('<?php echo $this->session->flashdata('warn_msg'); ?>')
  <?php endif ?>

  <?php if ($this->session->flashdata('error_msg')): ?>
    toastr.danger('<?php echo $this->session->flashdata('error_msg'); ?>')
  <?php endif ?>

  });

</script>

