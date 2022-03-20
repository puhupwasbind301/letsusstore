<!DOCTYPE html>
<html>
<?php $title = "Size Guide";
  $nav_page = 35;
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
            <h1>Add New Size Guide</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url()?>admin">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?= base_url()?>admin/size-guide">Size Guide</a></li>
              <li class="breadcrumb-item active"><a href="<?= base_url('admin/size-guide-view')?>">View</a></li>
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
            <div class="alert alert-success d-none stgcat">
              <strong>Success!</strong> Indicates a successful or positive action.
            </div>
            <div class="alert alert-danger d-none stgcatd">
              <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
            </div>

            
          <div class="card">

            <div class="card-header">
              <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#modal-lg">Add Size Guide Location</button>
            </div>

            <div class="card-body">
                  <!-- form start -->
            
                  

                  <form  id="size_guide" method="post">
                    <div class="card-body">
                      <div id="messageForm"></div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="name">Total size (Sq. FT)</label>
                            <input type="text" class="form-control" id="total_size" name="total_size" placeholder="Total Size" required="" >
                          
                          </div>
                        </div>


                        <div class="col-md-6">
                          <div class="form-group beamClass">
                            <label for="">Location</label>
                            <select name="size_guide_categories" id="size_guide_categories" class="form-control" >
                              <option value="" style="display: none;"></option>
                                <?php foreach ($size_guide_categories as $key => $value): ?>
                                  <option value="<?= $value->sgl_id ?>"><?= $value->sgl_name ?></option>
                                <?php endforeach ?>
                            </select>
                          </div>
                        </div>  

                        <div class="col-md-6">
                          <div class="form-group beamClass">
                            <label for=""><?= ucwords(strtolower('WHAT ITEMS WILL FIT (RECOMMENDED STORAGE)' )) ?></label>
                            <input type="text" class="form-control" id="item" name="item" placeholder="Item which will fit" required="" >
                          
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group beamClass">
                            <label for="">Flat Size</label>
                            <input type="text" class="form-control" id="flat_size" name="flat_size" placeholder="Flat Size" required="" >
                          
                          </div>
                        </div>



                      </div>
                
                 
                      
                  
                    
                      
                    </div>
                  
                    
                    <!-- /.card-body -->

                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary float-right" name="submit">Submit</button>
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

    
  </div>
  <!-- /.content-wrapper -->


       <!-- Add Staff -->
  <div class="modal fade" id="modal-lg">
     <div class="modal-dialog modal-lg">
       <div class="modal-content">
         <div class="modal-header">
           <h4 class="modal-title">Add Location</h4>
           <div id="msg"></div>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
           <!-- form start -->
           <form  id="add_location" method="post">
             <div class="card-body">
               <div id="messageForm"></div>
               <div class="row">
                 <div class="col-md-12">
                   <div class="form-group">
                     <label for="name">Location Name</label>
                     <input type="text" class="form-control" id="location_name" name="location_name" placeholder="Location Name" required="" >
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
    $('#add_location').on('submit' , function (e) {
    e.preventDefault();
    // alert('hiii');
    // return false;
    for (instance in CKEDITOR.instances) {
    CKEDITOR.instances['desc'].updateElement();
}

let url = $('meta[name=url]').attr("content");
let data = new FormData($(this).get(0))
    ajax(url+"admin/insert-size-guide-location", data).then(function(result) {
        if(result.status){
         
        window.location.reload();
        } else {
        window.location.reload();
        }
        // if(result === 'true'){
        //   // $(this #messageForm).removeClass('d-none');
        //   $(#add_location #messageForm).html('<strong>Success!</strong> Successfully Added Category');
        //   return false;
        // }
        // else{
          
        //   $(.stgcatd).css('display','block');
        //   $(.stgcatd).html(' <strong>Danger!</strong> Something went Wrong.');
        //  return false; 
        // }    
      
    }).catch(function(e){
      console.log(e)
    })

   })
  })

</script>

<script type="text/javascript">
  $(function() {

    $('#size_guide').on('submit' , function (e) {
    e.preventDefault();
    

    
    for (instance in CKEDITOR.instances) {
    CKEDITOR.instances['desc'].updateElement();
}

let url = $('meta[name=url]').attr("content");
let data = new FormData($(this).get(0));

    console.log(data);

    ajax(url+"admin/insert-size-guide", data).then(function(result) {
        if(result.result){
            window.location.reload()
          }
          else{
            $('#messageForm').html('<div class="alert alert-danger">'+result.msg+'</div>');
            // $('#mobileror').html(result);
          }
     // if(result){

     //   $(.stgcat).css('display','block');
     //   $(.stgcat).html(' <strong>Success!</strong> Successfully Added Calculator');
     //   return false;
     // }
     // else{
       
     //   $(.stgcatd).css('display','block');
     //   $(.stgcatd).html(' <strong>Danger!</strong> Something went Wrong.');
     //  return false; 
     // }
      
      

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
