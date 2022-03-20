<!DOCTYPE html>
<html>
<?php $title = "Invoice Generate";
  $nav_page = 49;
  include 'admin_assets/include/header.php';
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
  <?php include 'admin_assets/include/navbar.php';?>

  <?php include 'admin_assets/include/sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Invoice Generate</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url() ?>admin">Home</a></li>
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
         <form id="request_invoice" method="post">
          <div id="messageForm"></div>
          <div class="card">
            <div class="card-header text-center">
              INVOICE
            </div>
            <div class="card-body">
                <div class="row">
                   <div class="col-md-7">
                       <div class="card">
                          <div class="card-header text-primary"><h3>Let's us Store</h3></div>
                          <div class="card-body">
                              <address>
                                Mundka Delhi-110081 India
                              </address>
                              <h5>M: 9810298454,9888863160</h5>
                              info@letsusstore.com
                          </div>
                       </div>
                   </div>
                   <div class="col-md-5">
                       <div class="card">
                          <div class="card-header">To,</div>
                          <div class="card-body">
                              <h3><?= !empty($user_detail)?$user_detail->user_company_name:'' ?></h3>  
                              <h3><?= $request_detail->r_user_name ?></h3>  
                              <address><?= $request_detail->r_user_address ?></address>
                          </div>
                       </div> 
                   </div>
                </div>
                <div class="row">
                  <input type="hidden" class="form-control" id="user_id" name="user_id" value="<?= !empty($user_id)?$user_id:NULL ?>" placeholder="User Id" required="">
                    <div class="col-md-2">
                      <div class="form-group">
                    <label for="name">Req No.</label>
                    <input type="text" class="form-control" id="req_no" name="req_no" value="<?= $request_detail->r_id; ?>" placeholder="Req No." required="" readonly>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                    <label for="name">Item Name</label>
                    <input type="text" class="form-control" id="req_name" name="req_name" value="<?= $request_detail->r_info; ?>" placeholder="Request Name" required="" readonly>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                    <label for="mobile">Quantity</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantity" >
                      </div>
                   </div> 
                   <div class="col-md-2">
                      <div class="form-group">
                    <label for="mobile">Price</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="price" >
                      </div>
                   </div> 
                   <div class="col-md-2">
                      <div class="form-group">
                    <label for="mobile">Total</label>
                    <input type="number" class="form-control" id="total" name="total" placeholder="Total" >
                      </div>
                   </div> 
                </div>
            </div>
            <div class="card-footer">
              <div class="card-footer">
                <button class="btn btn-info float-right ml-2" onclick="window.print()" onload="document.preventDefault()">Print</button>
                <button type="submit" class="btn btn-primary float-right" name="submit" <?= ($request_detail->r_status == 'rejected')?'disabled':'' ?>><?= ($request_detail->r_status == 'rejected')?'Rejected':'Generate' ?></button>
              </div>
            </div>
          </div>
        </form> 
          </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

    
  </div>
  <!-- /.content-wrapper -->

  <?php include 'admin_assets/include/footer.php'; ?>
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
  // $(function() {
 

   $('#request_invoice').on('submit' , function (e){
    e.preventDefault();

    for (instance in CKEDITOR.instances) {
    CKEDITOR.instances['desc'].updateElement();
}

let url = $('meta[name=url]').attr("content");
let data = new FormData($(this).get(0));
  
    ajax(url+"admin/request_invoice" ,data).then(function(result) {
      if(result){
        $('#messageForm').html('<div class="alert alert-success">Successfully Generated</div>');
        $(this).attr('disabled','disabled');
        setTimeout(()=>{
          $('#messageForm').hide();
        },3000)
        window.reload();
      }
      else {
        $('#messageForm').html('<div class="alert alert-danger">Failed to Generate</div>');
        setTimeout(()=>{
          $('#messageForm').hide();
        },3000)
      }
    }).catch(function(e) {
      console.log(e)
    })
   })



  // })

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
