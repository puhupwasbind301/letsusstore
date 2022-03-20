<!DOCTYPE html>
<html>
<?php $title = "Size Guide View";
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
            <h1>Size Guide View</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url() ?>admin">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?= base_url() ?>admin/size-guide">Size Guide</a></li>
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
          <div class="card">
            <!-- <div class="card-header">
              
              <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#modal-lg">Add Staff</button>
            </div> -->
            <div class="card-body">

              <div class="container container1 container2">
                  <h2 class="ds-h2 text-center">
                      <!-- Size Guide -->
                  </h2>
              <!--     <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                              role="tab" aria-controls="home" aria-selected="true">Noida</button>
                      </li>
                      <li class="nav-item" role="presentation">
                          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
                              role="tab" aria-controls="profile" aria-selected="false">Gurugram</button>
                      </li>

                  </ul> -->
                  <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="table-responsive">
                                  <table id="tbl_id" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Total Size</th>
                                      <th>Items</th>
                                      <th>Location</th>
                                      <th>Flat Size</th>
                                      <th>Product Created Date</th>
                                      <th>Manage</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                      <?php foreach($size_guide_view as $key => $val): ?>
                                      <tr>
                                        <td><?= ++$key?></td>
                                        <td><?= $val->sg_total_size ?></td>
                                        <td><?= $val->sg_item ?></td>
                                        <td><?= $val->sgl_name ?></td>
                                        <td><?= $val->sg_flat_size ?></td>
                                        <td><?= $val->sg_date_created ?></td>
                                        
                                        <td><a href="#" data-toggle="modal" data-target="#modalview-lg<?= $val->sg_id?>"><i class="fa fa-eye text-info" title="View"></i></a>&emsp;|&emsp;<a href="#" data-toggle="modal" data-target="#modaledit-lg<?= $val->sg_id?>"><i class="fa fa-edit text-success" title="Edit"></i></a>&emsp;|&emsp;<a href="#" data-toggle="modal" data-target="#modal-sm<?= $val->sg_id?>"><i class="fa fa-trash text-danger" title="Delete"></i></a></td>

                                      </tr>

                                      <!-- Edit Staff -->
                                      
                              <div class="modal fade" id="modaledit-lg<?= $val->sg_id?>">
                            <div class="modal-dialog modaledit-lg">
                              <div class="modal-content">
                                <div class="modal-header">Edit Size Guide</h4>
                                  <div id="msg"></div>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <!-- form start -->
                                  <form action="" class="size_guide_edit" method="post">
                                    <div class="card-body">
                                      <input type="hidden" name="sgid" value="<?= $val->sg_id ?>">
                                      <div class="row">
                                        <div class="col-md-6">
                                          <div class="form-group">
                                            <label for="name">Total size (Sq. FT)</label>
                                            <input type="text" class="form-control" id="total_size" name="total_size" placeholder="Total Size" required="" value="<?= $val->sg_total_size ?>">
                                          
                                          </div>
                                        </div>

                                      <div class="col-md-6">
                                        <div class="form-group beamClass">
                                          <label for="">Size Guide Location</label>
                                          <select name="size_guide_categories" id="size_guide_categories" class="form-control">
                                            <option value="" style="display: none;"></option>
                                              <?php foreach ($size_guide_categories as $key => $value): ?>
                            <option <?= ($value->sgl_id==$val->sgl_id)?'selected':''  ?> value="<?= $value->sgl_id ?>"><?= $value->sgl_name ?></option>
                                              <?php endforeach ?>
                                          </select>
                                        </div>
                                      </div>


                                      <div class="col-md-6">
                                        <div class="form-group beamClass">
                                          <label for=""><?= ucwords(strtolower('WHAT ITEMS WILL FIT (RECOMMENDED STORAGE)' )) ?></label>
                                          <input type="text" class="form-control" id="item" name="item" placeholder="Item which will fit" required="" value="<?= $val->sg_item ?>">
                                        
                                        </div>
                                      </div>

                                      <div class="col-md-6">
                                        <div class="form-group beamClass">
                                          <label for="">Flat Size</label>
                                          <input type="text" class="form-control" id="flat_size" name="flat_size" placeholder="Flat Size" required="" value="<?= $val->sg_flat_size ?>" >
                                        
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
                              <div class="modal fade" id="modalview-lg<?= $val->sg_id?>">
                            <div class="modal-dialog modalview-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Size Guide Detail</h4>
                                  <div id="msg"></div>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <!-- form start -->
                                  <div class="row p-2">
                                    <div class="col-md-3">
                                      <b>Total Size</b>
                                    </div>
                                    <div class="col-md-9">
                                      <?= $val->sg_total_size  ?>
                                    </div>
                                  </div>
                                 
                                  <div class="row p-2">
                                    <div class="col-md-3">
                                      <b>Location Name</b>
                                    </div>
                                    <div class="col-md-9">
                                      <?= $val->sgl_name  ?>
                                    </div>
                                  </div>

                              

                                  <div class="row p-2">
                                    <div class="col-md-3">
                                      <b>What item should fit</b>
                                    </div>
                                    <div class="col-md-9">
                                      <?= $val->sg_item  ?>
                                    </div>
                                  </div>

                                  <div class="row p-2">
                                    <div class="col-md-3">
                                      <b>Flat Size</b>
                                    </div>
                                    <div class="col-md-9">
                                      <?= $val->sg_flat_size  ?>
                                    </div>
                                  </div>

                                  <div class="row p-2">
                                    <div class="col-md-3">
                                      <b>Created Date</b>
                                    </div>
                                    <div class="col-md-9">
                                      <?= $val->sg_date_created  ?>
                                    </div>
                                  </div>
                                </div>
                                
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
                          
                          <!-- Delete Staff -->
                          <div class="modal fade" id="modal-sm<?= $val->sg_id?>">
                            <div class="modal-dialog modal-sm">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Delete Size Guide</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <form action="<?php echo base_url();?>admin/delete-size-guide" method="post"> 
                                <div class="modal-body">
                                  <input type="hidden" name="sgid" value="<?= $val->sg_id?>">
                                  <!-- <input type="hidden" name="sgid" value="<?= $val->sg_id ?>"> -->
                                  <p>Are you sure, you want to delete this?</p>
                                </div>
                                <div class="modal-footer justify-content-between">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary" name="submit">Yes</button>
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
              


      
            </div>
          </div>
          </div>
          <!-- Add Staff -->
      <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Size Guide</h4>
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

    $('.size_guide_edit').on('submit' , function (e) {
    e.preventDefault();

    for (instance in CKEDITOR.instances) {
    CKEDITOR.instances['desc'].updateElement();
}

let url = $('meta[name=url]').attr("content");
let data = new FormData($(this).get(0));

    console.log(data);
    

    ajax(url+"admin/update-size-guide", data).then(function(result) {
      if(result.status){
        $('#msg').html('<div class="alert alert-success">'+result.msg+'</div>');
        window.location.reload()
        // return false;
      }
      else{
        $('#msg').html('<div class="alert alert-danger">'+result.msg+'</div>');
        window.location.reload()
        // return false;
      
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
