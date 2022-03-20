<!DOCTYPE html>
<html>
<?php $title = "Supplier Product List";
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
            <h1>Supplier Product List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url()?>supplier">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?= base_url()?>supplier/supplier_add_product">Supplier Product</a></li>
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
            <!-- <div class="card-header">
              
              <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#modal-lg">Add Staff</button>
            </div> -->
            <div class="card-body">
              <div class="table-responsive">
              <table id="tbl_id" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Product Name</th>
                  <th>Product Type</th>
                  <th>Product Price </th>
                  <th>Product Image </th>
                  <th>Description </th>
                  <th>Manage</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach($data as $key => $val): ?>
                  <tr>
                    <td><?= ++$key?></td>
                    <td><?= $val->sp_name ?></td>
                    <td><?= $val->sp_type ?></td>
                    <td><?= $val->sp_price ?></td>
                    <td><center>
                       <?php if(!empty($val->sp_image)): ?>
                        <img src="<?= base_url().$val->sp_image ?>" width=150 height=150>
                      <?php else: ?>
                        <img src="https://via.placeholder.com/150" alt="works-image" style="height:150px;width:150">
                      <?php endif; ?>
                    </center></td>
                    <td class="text-justify"><?= $val->sp_desc ?></td>
                    <td><a href="#" data-toggle="modal" data-target="#modalview-lg<?= $val->sp_id?>"><i class="fa fa-eye text-info" title="View"></i></a>&emsp;|&emsp;<a href="#" data-toggle="modal" data-target="#modaledit-lg<?= $val->sp_id?>"><i class="fa fa-edit text-success" title="Edit"></i></a>&emsp;|&emsp;<a href="#" data-toggle="modal" data-target="#modal-sm<?= $val->sp_id?>"><i class="fa fa-trash text-danger" title="Delete"></i></a></td>

                  </tr>

                  <!-- Edit Staff -->
          <div class="modal fade" id="modaledit-lg<?= $val->sp_id?>">
        <div class="modal-dialog modaledit-lg">
          <div class="modal-content">
            <div class="modal-header">Edit Supplier Product</h4>
              <div id="msg"></div>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- form start -->
              <form action="" class="supplier_product_edit" method="post">
                <div class="card-body">
                  <input type="hidden" name="spid" value="<?= $val->sp_id ?>">
                    <div class="row">
                  
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="product_name">Product Name</label>
                        <input type="text" class="form-control" id="product_name" value="<?= $val->sp_name ?>" name="product_name" placeholder="Product Name" required="" >
                      </div>
                    </div>
                    <div class="col-md-6">
                       <div class="form-group">
                         <label for="product_type">Product Type</label>
                         <select name="product_type" class="form-control" id="">
                           <option value="rent" <?= ($val->sp_type=='rent')?'selected':'' ?>>Rent</option>
                           <option value="sale" <?= ($val->sp_type=='sale')?'selected':'' ?>>Sale</option>
                         </select>
                       </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="product_price">Product Price</label>
                        <input type="text" class="form-control" id="product_price" value="<?= $val->sp_price ?>" name="product_price" placeholder="Product Price" required="" >
                      </div>
                    </div>
                    
                            
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="name">Product Image</label>
                                  <p>
                                     
                                      <?php if(!empty($val->sp_image)): ?>
                                       <img src="<?= base_url().$val->sp_image ?>" width=150 height=150>
                                     <?php else: ?>
                                       <img src="https://via.placeholder.com/150" alt="works-image" style="height:150px;width:150">
                                     <?php endif; ?>
                                  </p>
                                  <div class="custom-file mb-3">
                                    
                                      <input type="file" class="custom-file-input" id="customFile" name="filename" value="<?= $val->sp_image ?>">
                                      <?php $v =explode('/',$val->sp_image); ?>
                              <label class="custom-file-label" for="customFile" style="overflow:hidden;"><?= end($v); ?></label>
                                  </div>
                                </div>
                                <!-- <div id="imagePreview">
                                  <img src="<?= base_url() ?>photo-1526947425960-945c6e72858f.jpeg">
                                </div> -->

                              </div>
                         

                    
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="desc">Description</label>
                        <textarea class="form-control" name="desc"   rows="10"><?= $val->sp_desc ?></textarea>
                      </div>
                    </div>
                  </div>
    
               <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="name">Meta Title</label>
                                      <input type="text" class="form-control" id="meta_title" name="meta_title" value="<?= $val->s_meta_title ?>" placeholder="Meta Title" required="" >
                                    
                                    </div>
                                  </div> 

                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="name">Meta Keyword</label>
                                      <input type="text" class="form-control" id="meta_keyword" name="meta_keyword" value="<?= $val->s_meta_keyword ?>" placeholder="Meta Keyword" required="" >
                                    
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="desc"> Meta Description</label>
                                    <textarea class="form-control" name="meta_desc"  rows="3"><?= $val->s_meta_description_desc ?></textarea>
                                  </div>
                                  </div>
              </div>   
               </div>
               <div id="messageForm1"></div>
               <!-- /.card-body -->

               <div class="card-footer">
                 <button type="submit" class="btn btn-primary float-right">Update</button>
               </div>
              </form>
            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

      <!-- View Staff -->
          <div class="modal fade" id="modalview-lg<?= $val->sp_id?>">
        <div class="modal-dialog modalview-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Supplier Product Detail</h4>
              <div id="msg"></div>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- form start -->
              <div class="row p-2">
                <div class="col-md-3">
                  <b>Product Name</b>
                </div>
                <div class="col-md-9">
                  <?= $val->sp_name  ?>
                </div>
              </div>

               <div class="row p-2">
                 <div class="col-md-3">
                   <b>Product Type</b>
                 </div>
                 <div class="col-md-9">
                   <?= $val->sp_type  ?>
                 </div>
               </div>

               <div class="row p-2">
                 <div class="col-md-3">
                   <b>Product Price</b>
                 </div>
                 <div class="col-md-9">
                   <?= $val->sp_price  ?>
                 </div>
               </div>

                <div class="row p-2">
                 <div class="col-md-3">
                   <b>Product Image</b>
                 </div>
                 <div class="col-md-9">
                   <p>
                      <img src="<?= base_url().$val->sp_image ?>" width=150 height=150>
                   </p>
                 </div>
               </div>

               <div class="row p-2">
                 <div class="col-md-3">
                   <b>Description</b>
                 </div>
                 <div class="col-md-9">
                   <?= $val->sp_desc  ?>
                 </div>
               </div> 
              
             
            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      
      <!-- Delete Staff -->
      <div class="modal fade" id="modal-sm<?= $val->sp_id?>">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Delete Supplier Product</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="<?php echo base_url();?>supplier/delete-supplier-product" method="post"> 
            <div class="modal-body">
              <input type="hidden" name="spid" value="<?= $val->sp_id?>">
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
              <h4 class="modal-title">Add Supplier Product</h4>
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
                    <textarea class="form-control" name="desc"    rows="3"></textarea>
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
    $('#ajaxform1').on('submit' , function (e) {
    e.preventDefault();

    for (instance in CKEDITOR.instances) {
    CKEDITOR.instances['desc'].updateElement();
}

let url = $('meta[name=url]').attr("content");
let data = new FormData($(this).get(0))

    ajax(url+"supplier/insert-staff", data).then(function(result) {

      
      if(result.result){
        window.location.reload()
      }
      else{
        $('#messageForm').html('<div class="alert alert-danger">'+result.msg+'</div>');
        // $('#mobileror').html(result);
      }
      // window.location.reload()
      

    }).catch(function(e) {

      
      console.log(e)

    })

   })
  })

</script>

<script type="text/javascript">
  $(function() {

    $('.supplier_product_edit').on('submit' , function (e) {
    e.preventDefault();

    for (instance in CKEDITOR.instances) {
    CKEDITOR.instances['desc'].updateElement();
}

let url = $('meta[name=url]').attr("content");
let data = new FormData($(this).get(0));

    console.log(data);
    

    ajax(url+"supplier/update-supplier-product", data).then(function(result) {
      if(result.result){
        window.location.reload()
      } else {
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
