<!DOCTYPE html>
<html>
<?php $title = "Admin";
$nav_page = 1;
include 'admin_assets/include/header.php'; 
 ?>


  <!-- Main Sidebar Container -->
 <?php include 'admin_assets/include/sidebar.php'; ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <?php include 'admin_assets/include/navbar.php'; ?>
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
                       <a href="<?= base_url('admin/user-contact-detail') ?>">
                       <!-- small box -->
                       <div class="small-box bg-info">
                         <div class="inner">
                           
                           <p>Total No. of User Messages</p>
                           <h1><?php echo $countTable['user_contact_details']; ?></h1>
                         </div>
                         <div class="icon">
                           <i class="fas fa-users"></i>
                         </div>
                         <!-- <a href="<?php // base_url()?>admin/staff" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                       </div>
                         </a>           
                     </div>
                     <!-- ./col -->
                     <div class="col-lg-4 col-6">
                       <a href="<?= base_url('admin/agent_list') ?>">
                       <div class="small-box bg-danger">
                         <div class="inner">
                           <p>Total No. of Agent</p>
                           <h1><?php echo $countTable['agent']; ?></h1>

                         </div>
                         <div class="icon">
                           <i class="fa fa-industry"></i>
                         </div>
                         
                       </div>
                       </a>
                     </div>

                     <div class="col-lg-4 col-6">
                       <a href="<?= base_url('admin/investor_list') ?>">
                       <div class="small-box bg-success">
                         <div class="inner">
                           
                           <p>Total No. of Investor</p>
                           <h1><?php echo $countTable['investor']; ?></h1>

                         </div>
                         <div class="icon">
                           <i class="fa fa-industry"></i>
                         </div>
                         
                       </div>
                         </a>
                     </div>


                     <div class="col-lg-4 col-6">
                       <a href="<?= base_url('admin/customer_list') ?>">
                       <div class="small-box bg-secondary">
                         <div class="inner">
                           
                           <p>Total No. of Registered Customer</p>
                           <h1><?php echo $countTable['customer']; ?></h1>

                         </div>
                         <div class="icon">
                           <i class="fa fa-industry"></i>
                         </div>
                         
                       </div>
                         </a>
                     </div>


                     <div class="col-lg-4 col-6">
                       <a href="<?= base_url('admin/supplier_list') ?>">
                       <div class="small-box bg-warning">
                         <div class="inner">
                           

                           <p>Total No. of Supplier</p>
                           <h1><?php echo $countTable['supplier']; ?></h1>

                         </div>
                         <div class="icon">
                           <i class="fa fa-industry"></i>
                         </div>
                         
                       </div>
                     
                     </div>
    
          
        </div>
        

        </div>
        <div class="container-fluid">

        <div class="row">
                    

                    <div class="col-lg-3 col-6 ">
                        <div class="small-box bg-light ">
                            <div class="inner pl-2">
                                <h3><?php echo $countTable['unregister_customer_requests']; ?></h3>

                                <div class="card-title">Unregistered Customer Requests</div>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="<?= base_url('admin/unautherised_customer_service_request_list') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-light">
                            <div class="inner">
                                <h3><?php echo $countTable['register_customer_requests']; ?></h3>

                                <div class="card-title">Registered Customer Requests</div>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="<?= base_url('admin/customer_service_request_list/').null ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>   
                </div>

        
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  </div>
  <!-- /.content-wrapper -->
 <?php include 'admin_assets/include/footer.php'; ?>  
</body>
</html>
