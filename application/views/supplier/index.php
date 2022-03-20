<!DOCTYPE html>
<html>
<?php $title = "Admin";
$nav_page = 1;
include 'admin_assets/include_supplier/header.php'; 
 ?>


  <!-- Main Sidebar Container -->
 <?php include 'admin_assets/include_supplier/sidebar.php'; ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <?php include 'admin_assets/include_supplier/navbar.php'; ?>
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php // count($staff)?></h3>

                <!-- <p>Total No. of User Messages</p> -->
                <h1><?php //echo $contact; ?></h1>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <!-- <a href="<?php // base_url()?>admin/staff" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php // count($machine)?></sup></h3>

                <!-- <p>Total No. of Storage Calculator</p> -->
                <h1><?php //echo $storage_calculator; ?></h1>

              </div>
              <div class="icon">
                <i class="fa fa-industry"></i>
              </div>
              <!-- <a href="<?php // base_url()?>admin/machine" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
   
          <!-- ./col -->
          <!-- <div class="col-lg-3 col-6"> -->
            <!-- small box -->
            <!-- <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
      
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div> <?php include 'admin_assets/include_supplier/footer.php'; ?>  
</body>
</html>
