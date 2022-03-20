<!DOCTYPE html>
<html>
<?php $title = "Customer Service Request";
  $nav_page = 46;
  include 'admin_assets/include_customer/header.php';
 ?>
 <style type="text/css">
   @media (min-width: 992px) {
  .modaledit-lg, .modalview-lg {
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
            <h1>
              <?php 
                // echo '<pre>';
                // print_r($this->session->userdata('authVendorLogin')['user_id']);
               ?>
            </h1>
            <h1>Customer Service Request</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url()?>customer">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?= base_url()?>customer/customer_service_request">Customer Service Request</a></li>
              <!-- <li class="breadcrumb-item active"><a href="<?= base_url('admin/main-section-view')?>">View</a></li> -->
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

            </div>
            <div class="card-body">
                  <!-- form start -->
                  <form  id="customer_service_request" method="post">
                    <div class="card-body">
                      <div id="messageForm"></div>
                      <div class="row">
                       <!--  <div class="col-md-6">
                          <div class="form-group">
                            <label for="name">Request ID</label>
                            <input type="text" class="form-control" id="req_id" name="req_id" placeholder="Request Id" required="" >
                          
                          </div>
                        </div> -->

                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="name">Request Info</label>
                          <!--   <input type="text" class="form-control" id="info" name="info" placeholder="Request Info" required="" > -->
                            <select class="form-control" name="info" id="info" required>
                               <option value="" disabled>Request Info</option>
                               <?php foreach ($services as $key => $value): ?>
                                 <option value="<?= $value->service_name ?>"><?= $value->service_name; ?></option>
                               <?php endforeach ?>
                            </select>
                          </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                               <label for="desc">Request Description</label>
                               <textarea class="form-control" name="desc"  rows="3"></textarea>
                             </div>
                         </div>

                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="user_name" name="user_name" placeholder="User Name" required="" >
                          </div>
                        </div>

                        <div class="col-md-12">
                           <div class="form-group">
                               <label for="desc">Address</label>
                               <textarea class="form-control" name="address" id="address" rows="3"></textarea>
                             </div>
                        </div>


                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="name">City</label>
                            <input type="text" class="form-control" id="city" name="city" placeholder="City" required="" >
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="name">State</label>
                            <input type="text" class="form-control" id="state" name="state" placeholder="State" required="" >
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="name">Zip</label>
                            <input type="number"  class="form-control" id="zip" name="zip" placeholder="Zip" required="" >
                          </div>
                        </div>

                        <div class="col-md-8">
                          <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="email" required="" >
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="name">Mobile</label>
                            <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Mobile" required="" >
                          </div>
                        </div>


                       
                   
                  <!--       <div class="col-md-6">
                          <div class="form-group beamClass">
                            <label for="">Services</label>
                          <select name="service" id="service" class="form-control" >
                              <option value="" style="display: none;">Choose Service</option>
                                <?php foreach ($services as $key => $value): ?>
                                  <option value="<?= $value->s_id ?>"><?= $value->service_name ?></option>
                                <?php endforeach ?>
                            </select>
                          </div>
                        </div>  -->
                      </div>

                      <!--  <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="name">Customer Image</label>
                            <div class="custom-file mb-3">
                              <input type="hidden" class="custom-file-input" id="image_page" name="image_page" value="main-section">
                                <input type="file" class="custom-file-input" id="customFile" name="filename">
                                <label class="custom-file-label" for="customFile" style="overflow:hidden;">Choose Image</label>
                            </div>
                          </div>
                         

                        </div>


                      
                      </div>  --> 
              
                    </div>
                  
                    
                    <!-- /.card-body -->

                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </div>
                  </form>
            </div>
          </div>
          </div>
       
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
         <!-- Add Staff -->
    <div class="modal fade" id="modal-lg">
       <div class="modal-dialog modal-lg">
         <div class="modal-content">
           <div class="modal-header">
             <h4 class="modal-title">Add Banner Image</h4>
             <div id="msg"></div>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <div class="modal-body">
             <!-- form start -->
             <form  class="add_banner_image" method="post">
               <div class="card-body">
                 <div id="messageForm"></div>
                <div class="row">
               

                 <div class="col-md-12">
                   <div class="form-group">
                     <label for="name">Image</label>
                     <div class="custom-file mb-3">
                         <input type="hidden" class="custom-file-input" id="image_page" name="image_page" value="main-section">
                         <input type="file" class="custom-file-input" id="customFile" name="filename">
                         <label class="custom-file-label" for="customFile" style="overflow:hidden;">Choose Image</label>
                     </div>
                   </div>
                   <!-- <div id="imagePreview">
                     <img src="<?= base_url() ?>photo-1526947425960-945c6e72858f.jpeg">
                   </div> -->

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
        <!-- /.content-wrapper -->

             <!-- Add Meta Data -->
        <div class="modal fade" id="modal-lg-meta">
           <div class="modal-dialog modal-lg">
             <div class="modal-content">
               <div class="modal-header">
                 <h4 class="modal-title">Add Meta Data</h4>
                 <div id="msg"></div>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
               </div>
               <div class="modal-body">
                 <!-- form start -->
                 <form  class="add_meta_data" method="post">
                   <div class="card-body">
                     <div id="messageForm"></div>
                    <input type="hidden" class="custom-file-input" id="image_page-meta" name="image_page-meta" value="shed">
                                    <div class="row">
                                                        <div class="col-md-6">
                                                          <div class="form-group">
                                                            <label for="name">Meta Title</label>
                                                            <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="Meta Title" required="" >
                                                          
                                                          </div>
                                                        </div> 

                                                        <div class="col-md-6">
                                                          <div class="form-group">
                                                            <label for="name">Meta Keyword</label>
                                                            <input type="text" class="form-control" id="meta_keyword" name="meta_keyword" placeholder="Meta Keyword" required="" >
                                                          
                                                          </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                        <div class="form-group">
                                                          <label for="desc"> Meta Description</label>
                                                          <textarea class="form-control" name="meta_desc"  rows="3"></textarea>
                                                        </div>
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
  <!-- /.content-wrapper -->

  <?php include 'admin_assets/include_customer/footer.php'; ?>
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
     $('.add_banner_image').on('submit' , function (e) {
     e.preventDefault();
     let url = $('meta[name=url]').attr("content");
     let data = new FormData($(this).get(0))
     ajax(url+"admin/add-banner-image", data).then(function(result) {
       console.log(result);
       // return false; 
       if(result.result){
         window.location.reload()
       }
       else{
         $('#messageForm').html('<div class="alert alert-danger">'+result.msg+'</div>');
         // $('#mobileror').html(result);
       }
       // // window.location.reload()
     }).catch(function(e){
       console.log(e)
     })
    })
    

  $('#customer_service_request').on('submit' , function (e) {
    e.preventDefault();
        let url = $('meta[name=url]').attr("content");
        let data = new FormData($(this).get(0))
        ajax(url+"customer/insert_customer_service_request", data).then(function(result) {
          // console.log(result)
          // return false;
      if(result.result){
        window.location.reload()
      } else {
        $('#messageForm').html('<div class="alert alert-danger">'+result.msg+'</div>');
        // $('#mobileror').html(result);
      }
      // window.location.reload()
    })
   })

  })

</script>

<script type="text/javascript">
  $(function() {
    $('.ajaxform2').on('submit' , function (e) {
    e.preventDefault();
    for (instance in CKEDITOR.instances) {
    CKEDITOR.instances['desc'].updateElement();
}

let url = $('meta[name=url]').attr("content");
let data = new FormData($(this).get(0));
    console.log(data);
    ajax(url+"admin/staff-update", data).then(function(result) {
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
