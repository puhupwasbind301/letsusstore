<!DOCTYPE html>
<html>
<?php $title = "Supplier New Product";
  $nav_page = 3;
  include 'admin_assets/include_supplier/header.php';
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
  <?php include 'admin_assets/include_supplier/navbar.php';?>

  <?php include 'admin_assets/include_supplier/sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Supplier New Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url()?>admin">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?= base_url()?>supplier/supplier_new_product">Supplier New Product</a></li>
              <li class="breadcrumb-item active"><a href="<?= base_url('supplier/supplier_product_list')?>">View</a></li>
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
              <?php 
              // if($no_of_banned_added == 0): 
                ?>
              <!-- <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#modal-lg">Add Banner Image</button> -->
              <?php 
            // endif; 
            ?>
            </div>
            <div class="card-body">
                  <!-- form start -->
                  <form  id="supplier_products" method="post">
                    <div class="card-body">
                      <div id="messageForm"></div>
             
               
                            <div class="row">
                          
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="product_name">Product Name</label>
                                <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Product Name" required="" >
                              </div>
                            </div>
                            <div class="col-md-6">
                               <div class="form-group">
                                 <label for="product_type">Product Type</label>
                                 <select name="product_type" class="form-control" id="">
                                   <option value="warehouse">Rent</option>
                                   <option value="land">Sale</option>
                                 </select>
                               </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="product_price">Product Price</label>
                                <input type="text" class="form-control" id="product_price" name="product_price" placeholder="Product Price" required="" >
                              </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                  <label for="name">Product Image</label>
                                  <div class="custom-file mb-3">
                                      <input type="file" class="custom-file-input" id="customFile" name="filename">
                                      <label class="custom-file-label" for="customFile" style="overflow:hidden;">Choose Image</label>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="desc">Description</label>
                                <textarea class="form-control" name="desc"  ></textarea>
                              </div>
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
                         <input type="hidden" class="custom-file-input" id="image_page" name="image_page" value="about-ceo">
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

  <?php include 'admin_assets/include_supplier/footer.php'; ?>
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
  // function add_more_product(){
  //   $('#more_product_area').append(`<div class="card-body" >
  //                     <div class="row">
  //                     <div class="col-md-4">
  //                        <div class="form-group">
  //                          <label for="name">Request Requirments</label>
  //                          <select name="request[]" class="form-control" id="">
  //                            <option value="warehouse">Warehouse</option>
  //                            <option value="land">Land</option>
  //                            <option value="manpower">Manpower</option>
  //                          </select>
  //                        </div>
  //                     </div>
  //                     <div class="col-md-4">
  //                       <div class="form-group">
  //                         <label for="name">Product Name</label>
  //                         <input type="text" class="form-control" id="product_name" name="product_name[]" placeholder="Product Name" required="" >
  //                       </div>
  //                     </div>
  //                     <div class="col-md-4">
  //                         <div class="form-group">
  //                           <label for="name">Product Image</label>
  //                           <div class="custom-file mb-3">
  //                               <input type="file" class="custom-file-input" id="customFile" name="filename[]">
  //                               <label class="custom-file-label" for="customFile" style="overflow:hidden;">Choose Image</label>
  //                           </div>
  //                         </div>
  //                     </div>
  //                     <div class="col-md-12">
  //                       <div class="form-group">
  //                         <label for="desc">Description</label>
  //                         <textarea class="form-control" name="desc[]"  ></textarea>
  //                       </div>
  //                     </div>
  //                   </div>
  //                   </div>`); 
  // }

  // $('.add_more_product').click(function(event) {
  //  event.preventDefault()
  //  alert('puhupwas');
  // }
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
    
    $('#supplier_products').on('submit' , function (e) {
    e.preventDefault();

    for (instance in CKEDITOR.instances) {
    CKEDITOR.instances['desc'].updateElement();
}

let url = $('meta[name=url]').attr("content");
let data = new FormData($(this).get(0))
    ajax(url+"supplier/insert-supplier-product", data).then(function(result) {      
      if(result.result){
        window.location.reload()
      }
      else{
        $('#messageForm').html('<div class="alert alert-danger">'+result.msg+'</div>');
        // $('#mobileror').html(result);
      }
      // window.location.reload()
    }).catch(function(e){
      console.log(e)
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

<script>
jQuery('#vmap').vectorMap(
{
    map: 'world_en',
    backgroundColor: '#a5bfdd',
    borderColor: '#818181',
    borderOpacity: 0.25,
    borderWidth: 1,
    color: '#f4f3f0',
    enableZoom: true,
    hoverColor: '#c9dfaf',
    hoverOpacity: null,
    normalizeFunction: 'linear',
    scaleColors: ['#b6d6ff', '#005ace'],
    selectedColor: '#c9dfaf',
    selectedRegions: null,
    showTooltip: true,
    onRegionClick: function(element, code, region)
    {
        var message = 'You clicked "'
            + region
            + '" which has the code: '
            + code.toUpperCase();

        alert(message);
    }
});
</script>

</body>
</html>
