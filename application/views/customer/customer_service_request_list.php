<!DOCTYPE html>
<html>
<!-- Css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/searchbuilder/1.3.0/css/searchBuilder.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/searchbuilder/1.3.0/css/searchBuilder.bootstrap4.min.css">
<?php $title = "Customer Request List";
  $nav_page = 3;
  include 'admin_assets/include_customer/header.php';
 ?>
 <style type="text/css">
   @media (min-width: 992px) {
  .modaledit-lg, .modalview-lg{
    max-width: 800px;
  }
}
 </style>
 
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <?php include 'admin_assets/include_customer/navbar.php';?>

  <?php include 'admin_assets/include_customer/sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Custome Service Request List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url()?>customer">Home</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <?php if($this->session->flashdata('msg')): ?>
              <?php echo $this->session->flashdata('msg'); ?>
            <?php endif; ?>

          <div class="card">
            <div class="card-header">
              <a href="<?= base_url('customer/customer_service_request') ?>"  class="btn btn-gradient-primary pull-right">Add Request</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="customer_datatable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>info</th>
                  <th>name</th>
                  <th>address</th>
                  <th>city</th>
                  <th>state</th>
                  <th>zip</th>
                  <th>mobile</th>
                  
                  <th>Manage</th>
                </tr>
                </thead>
                <tbody>

                  <?php foreach($requests as $key => $val): ?>
                  <tr>
                    <td><?= ++$key ?></td>
                    <td><?= $val->r_info ?></td>
                    <td><?= $val->r_user_name ?></td>
                    <td><?= $val->r_user_address ?></td>
                    <td><?= $val->r_user_city ?></td>
                    <td><?= $val->r_user_state ?></td>
                    <td><?= $val->r_user_zip ?></td>
                    <td><?= $val->r_mobile ?></td>
                    
                    <td>
                      <a href="javascript::"   class="btn  <?= ($val->r_status == 'rejected')?'bg-gradient-danger':'bg-gradient-warning' ?>"><?= ucwords($val->r_status) ?></a>
                      &emsp;|&emsp; <a href="#" data-toggle="modal" data-target="#modalview-lg<?= $val->r_id?>"><i class="fa fa-eye text-info" title="View"></i></a> 
                      &emsp;|&emsp;<a href="#" data-toggle="modal" data-target="#modal-sm<?= $val->r_id?>"><i class="fa fa-trash text-danger" title="Delete"></i></a>
                    </td>
                  </tr>


      <!-- View Staff -->
          <div class="modal fade" id="modalview-lg<?= $val->r_id ?>"> 
        <div class="modal-dialog modalview-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Service Request Detail</h4>
              <div id="msg"></div>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- form start -->
                <div class="row p-2">
                  <div class="col-md-3">
                    <b>Request info</b>
                  </div>
                  <div class="col-md-9">
                      <?= $val->r_info ?>
                  </div>
                </div>

                <div class="row p-2">
                  <div class="col-md-3">
                    <b>Title</b>
                  </div>
                  <div class="col-md-9">
                      <?= $val->r_user_name ?>
                      
                  </div>
                </div>

               <div class="row p-2">
                <div class="col-md-3">
                  <b>Main Section</b>
                </div>
                <div class="col-md-9">
                  <p>
                     <?= $val->r_user_address ?>
                    
                  </p>
                </div>
              </div>

              <div class="row p-2">
                <div class="col-md-3">
                  <b>Link Name</b>
                </div>
                <div class="col-md-9">
                  <?= $val->r_user_city ?>
                
                </div>
              </div>

              <div class="row p-2">
                <div class="col-md-3">
                  <b>Link</b>
                </div>
                <div class="col-md-9">
                  <?= $val->r_user_state ?>
                  
                </div>
              </div>


              <div class="row p-2">
                <div class="col-md-3">
                  <b>Description</b>
                </div>
                <div class="col-md-9">
                  <?= $val->r_user_zip ?>
              
                </div>
              </div>  

              <div class="row p-2">
                <div class="col-md-3">
                  <b>Description</b>
                </div>
                <div class="col-md-9">
                      <?= $val->r_mobile ?>
              
                </div>
              </div>
             
         
            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      
      <!-- Delete Staff -->
      <div class="modal fade" id="modal-sm<?= $val->r_id?>">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Delete Service Request</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="<?php echo base_url();?>customer/delete_requests" method="post"> 
            <div class="modal-body">
              <input type="hidden" name="rid" value="<?= $val->r_id?>">
              <p>Are you sure, you want to delete this?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Yes</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
                <?php endforeach; ?>
                </tbody>
                
               
              </table>
              </div>
            </div>
          </div>
          </div>
          <!-- Add Staff -->
          <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Main Section</h4>
              <div id="msg"></div>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- form start -->
              <form  id="ajaxform1" method="post">
                <div class="card-body">
                  <div id="messageForm"></div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="" >
                  
                  </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Mobile" >
                  
                  </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                    <label for="mobile">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" >
                  
                  </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                    <label for="mobile">Gender</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="gender" value="Male" required="">
                          <label class="form-check-label">Male</label>&emsp;&emsp;
                          <input class="form-check-input" type="radio" name="gender" value="Female">
                          <label class="form-check-label">Female</label>&emsp;&emsp;
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                       <div class="form-group">
                    <label for="doj">Date of Joining</label>
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span><input type="text" name="doj" id="doj" class="form-control" >
                   
                    </div>
                    
                  </div>
                    </div>
                    <div class="col-md-6">
                       <div class="form-group">
                    <label for="address">Address</label>
                    <textarea class="form-control" name="address" id="address"></textarea>
                  </div>
                    </div>
                  </div>
            
                  <div class="form-group">
                    <label for="desc">Description</label>
                    <textarea class="form-control" name="desc"  rows="3"></textarea>
                  </div>
                  
                </div>
              
                
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary float-right">Submit</button>
                </div>
              </form>
            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

    
  </div>
  <!-- /.content-wrapper -->
  

  <?php include 'admin_assets/include_customer/footer.php'; ?>
  <!-- //datatable   -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/searchbuilder/1.3.0/js/dataTables.searchBuilder.min.js"></script>
  <script src="https://cdn.datatables.net/searchbuilder/1.3.0/js/searchBuilder.bootstrap4.min.js"></script>
  <script src="https://cdn.datatables.net/searchbuilder/1.3.0/js/searchBuilder.bootstrap4.min.js"></script>
  <script>

    $(document).ready(function() {
        var table = $('#customer_datatable').DataTable({
            searchBuilder: true
        });
        table.searchBuilder.container().prependTo(table.table().container());
    });
    </script>  
  <script>
$(function() {
  $('input[name="doj"]').daterangepicker({
    singleDatePicker: true,
    showDropdowns: true,
    minYear: 1901,
    maxYear: parseInt(moment().format('YYYY'),10)
  });
});
</script>


<script type="text/javascript">
  $(function() {

    $('.main_section_edit').on('submit' , function (e) {
    e.preventDefault();

    for (instance in CKEDITOR.instances) {
    CKEDITOR.instances['desc'].updateElement();
}

let url = $('meta[name=url]').attr("content");
let data = new FormData($(this).get(0));

    console.log(data);
    

    ajax(url+"admin/update-home", data).then(function(result) {
      if(result.result){
        
        window.location.reload()
      }
      else{
        
        window.location.reload()
      
      }
      

    }).catch(function(e) {

      
      console.log(e)

    })

   })
  })

</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#tbl_id').dataTable({
        "aLengthMenu": [[25, 50, 75, -1], [25, 50, 75, "All"]],
        "iDisplayLength": 75
    });
} );
</script>
<script>

// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  // alert(fileName);
  // return false;
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  // var src = $(this).val();
  // $("#imagePreview").html(filename ? "<img src='" + filename + "'>" : "");
});

</script>
</body>
</html>
