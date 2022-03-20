<!DOCTYPE html>
<html>
<?php $title = "Private Rooms";
  $nav_page = 10;
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
            <h1>Private Rooms</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url()?>admin">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?= base_url()?>admin/private-rooms">Private Rooms</a></li>
              <li class="breadcrumb-item active"><a href="<?= base_url('admin/private-rooms-view')?>">View</a></li>
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
              
              <?php if($no_of_banned_added == 0): ?>
                 <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#modal-lg">Add Banner Image</button>
                 <?php endif; ?>
            </div>
            <div class="card-body">
                  <!-- form start -->
                  <form  id="private_rooms" method="post">
                    <div class="card-body">
                      <div id="messageForm"></div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="name">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Page Heading" required="" >
                          
                          </div>
                        </div>

                      
                      </div>
                       <div class="row">
                     

                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="name">Image</label>
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input" id="customFile" name="filename">
                                <label class="custom-file-label" for="customFile" style="overflow:hidden;">Choose Image</label>
                            </div>
                          </div>
                          <!-- <div id="imagePreview">
                            <img src="<?= base_url() ?>photo-1526947425960-945c6e72858f.jpeg">
                          </div> -->

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
                         <input type="hidden" class="custom-file-input" id="image_page" name="image_page" value="private-rooms">
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

    $('#private_rooms').on('submit' , function (e) {
    e.preventDefault();

    for (instance in CKEDITOR.instances) {
    CKEDITOR.instances['desc'].updateElement();
}

let url = $('meta[name=url]').attr("content");
let data = new FormData($(this).get(0))
    ajax(url+"admin/insert-private-rooms", data).then(function(result) {

      
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

</body>
</html>
