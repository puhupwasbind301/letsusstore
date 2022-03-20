<!DOCTYPE html>
<html>
<?php $title = "User Square Feet View";
  $nav_page = 7;
  include 'admin_assets/include_agent/header.php';
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
  <?php include 'admin_assets/include_agent/navbar.php';?>

  <?php include 'admin_assets/include_agent/sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User Square Feet View</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url() ?>admin">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?= base_url() ?>admin/storage-calculator">User Square Feet</a></li>
              <li class="breadcrumb-item active"><a href="<?= base_url('admin/storage-calculator-view')?>">View</a></li>
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
                  <th>Username</th>
                  <th>Email</th>
                  <th>Mobile Number</th>
                  <th>Square Feet</th>
                  <th>User Products</th>
                  <th>Created Date</th>
                  <th>Manage</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach($user_square_feet_detail as $key => $val): ?>
                  <tr>
                    <td><?= ++$key?></td>
                    <td><?= $val->usfc_username ?></td>
                    <td><?= $val->usfc_email ?></td>
                    <td><?= $val->usfc_mobile_number ?></td>
                    <td><?= $val->usfc_square_feet ?> Sq-Ft</td>
                    <td><?php $calDetailArr = json_decode($val->usfc_user_cal_detail ,true); ?> 
                    
                    <small>
                      <table class="table">
                          <tr>
                            <th>Product Name</th>
                            <th>Square Feet</th>
                          </tr>
                          <?php foreach ($calDetailArr as $key => $value): ?>
                          <tr>
                            <th><?= $value['calName'] ?></th>
                            <th><?= $value['sqFeet'] ?> Sq-Ft</th>
                          </tr>
                          <?php endforeach ?>
                      </table> 
                      </small>
                    </td>
                    <td><?= $val->usfc_created_date ?></td>
                    <td class="text-justify"><?= $val->s_meta_title ?></td>
                    <td class="text-justify"><?= $val->s_meta_keyword ?></td>
                    <td class="text-justify"><?= $val->s_meta_description_desc ?></td>
                    
                    <td><a href="#" data-toggle="modal" data-target="#modalview-lg<?= $val->usfc_id?>"><i class="fa fa-eye text-info" title="View"></i></a>&emsp;|&emsp;<a href="#" data-toggle="modal" data-target="#modal-sm<?= $val->usfc_id?>"><i class="fa fa-trash text-danger" title="Delete"></i></a></td>

                  </tr>

                  <!-- Edit Staff -->
                  
          <div class="modal fade" id="modaledit-lg<?= $val->usfc_id?>">
        <div class="modal-dialog modaledit-lg">
          <div class="modal-content">
            <div class="modal-header">Edit User Square Feet</h4>
              <div id="msg"></div>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- form start -->
              <form action="" class="storage_calculator_edit" method="post">
                <div class="card-body">
                  <input type="hidden" name="scid" value="<?= $val->usfc_id ?>">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
	                    <label for="sname">Product Name</label>
	                    <input type="text" class="form-control" name="title" placeholder="Name" required="" value="<?= $val->usfc_name ?>">
	                    
                  </div>
                    </div>

                  <div class="col-md-6">
                    <div class="form-group beamClass">
                      <label for="">Storage Categories</label>
                      <select name="storage_calculator_categories" id="storage_calculator_categories" class="form-control">
                        <option value="" style="display: none;"></option>
                          <?php foreach ($storage_calculator_categories as $key => $value): ?>
                            <option <?= ($value->scc_id==$val->scc_id)?'selected':''  ?> value="<?= $value->scc_id ?>"><?= $value->scc_name ?></option>
                          <?php endforeach ?>
                      </select>
                    </div>
                  </div>
                    
                  </div>
                      <div class="row">
                          <div class="col-md-6">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="name">Image</label>
                                <p>
                                   <img src="<?= base_url().$val->usfc_image ?>" width=150 height=150>
                                </p>
                                <div class="custom-file mb-3">
                                  
                                    <input type="file" class="custom-file-input" id="customFile" name="filename" value="<?= $val->usfc_image ?>">
                                    <?php $v =explode('/',$val->usfc_image); ?>
                            <label class="custom-file-label" for="customFile" style="overflow:hidden;"><?= end($v); ?></label>
                                </div>
                              </div>
                              <!-- <div id="imagePreview">
                                <img src="<?= base_url() ?>photo-1526947425960-945c6e72858f.jpeg">
                              </div> -->

                            </div>
                      </div>    

                  
                  <div class="col-md-6">
                     <div class="form-group">
                       <label for="sdesc">Product Square Feet</label>
                         <input type="text" class="form-control" name="squarefeet" placeholder="Name" required="" value="<?= $val->usfc_name_price ?>">
                     </div>
                   </div>    
                   </div>  
                   <div id="messageForm1"></div>
                   <!-- /.card-body -->

                   <div class="card-footer">
                     <button type="submit" class="btn btn-primary float-right">Update</button>
                   </div>
                   

            
                </div>
               
              </form>
            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

      <!-- View Staff -->
          <div class="modal fade" id="modalview-lg<?= $val->usfc_id?>">
        <div class="modal-dialog modalview-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">User Square Feet Detail</h4>
              <div id="msg"></div>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- form start -->
              <div class="row p-2">
                <div class="col-md-3">
                  <b>Username</b>
                </div>
                <div class="col-md-9">
                  <?= $val->usfc_username  ?>
                </div>
              </div>

              <div class="row p-2">
                <div class="col-md-3">
                  <b>Email</b>
                </div>
                <div class="col-md-9">
                  <?= $val->usfc_email  ?>
                </div>
              </div>

              <div class="row p-2">
                <div class="col-md-3">
                  <b>Mobile Number</b>
                </div>
                <div class="col-md-9">
                  <?= $val->usfc_mobile_number  ?>
                </div>
              </div>

              <div class="row p-2">
                <div class="col-md-3">
                  <b>Square Feet</b>
                </div>
                <div class="col-md-9">
                  <?= $val->usfc_square_feet  ?> Sq-Ft
                </div>
              </div>
               
                  
              <div class="row p-2">
                <div class="col-md-3">
                  <b>User Products</b>
                </div>   
                <div class="col-md-9">
                      <div class="row" style="border:1px solid black;background-color: gray;color:white;">  
                          <div class="col-md-2">#</div>
                          <div class="col-md-5">Product Name</div>
                          <div class="col-md-5">Square Feet</div>
                      </div>
                      <?php  $calDetailArr = json_decode($val->usfc_user_cal_detail ,true); ?> 
                      <?php foreach ($calDetailArr as $key => $value): ?>
                      <div class="row" style="border:1px solid black;">  
                          <div class="col-md-2"><?= ++$key; ?></div>
                          <div class="col-md-5"><?= $value['calName'] ?></div>
                          <div class="col-md-5"><?= $value['sqFeet'] ?> Sq-Ft</div>
                      </div>
                      <?php endforeach ?>
                 </div>
              </div>

                <?php  //$calDetailArr = json_decode($val->usfc_user_cal_detail ,true); ?> 
                    <!--  <table class="table table-bordered table-responsive" >
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Product Name</th>
                              <th>Square Feet</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach ($calDetailArr as $key => $value): ?>
                            <tr>
                              <td><?= ++$key; ?></td>
                              <td><?= $value['calName'] ?></td>
                              <td><?= $value['sqFeet'] ?> Sq-Ft</td>
                            </tr>
                            <?php endforeach ?>
                          </tbody>
                        </table>  -->

              
             
              
              <div class="row p-2">
                <div class="col-md-3">
                  <b>Created Date</b>
                </div>
                <div class="col-md-9">
                  <?= $val->usfc_created_date  ?>
                </div>
              </div>

              <div class="row p-2">
                <div class="col-md-3">
                  <b>Meta Title</b>
                </div>
                <div class="col-md-9">
                  <?= $val->s_meta_title  ?>
                </div>
              </div>

              <div class="row p-2">
                <div class="col-md-3">
                  <b>Meta Keyword</b>
                </div>
                <div class="col-md-9">
                  <?= $val->s_meta_keyword  ?>
                </div>
              </div>

              <div class="row p-2">
                <div class="col-md-3">
                  <b>Meta Description</b>
                </div>
                <div class="col-md-9">
                  <?= $val->s_meta_description_desc  ?>
                </div>
              </div>

            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      
      <!-- Delete Staff -->
      <div class="modal fade" id="modal-sm<?= $val->usfc_id?>">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Delete User Square Feet</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="<?php echo base_url();?>admin/delete-user-square-feet" method="post"> 
            <div class="modal-body">
              <input type="hidden" name="usfcid" value="<?= $val->usfc_id?>">
              <!-- <input type="hidden" name="scid" value="<?= $val->usfc_id ?>"> -->
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
          <!-- Add Staff -->
      <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add User Square Feet</h4>
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

  <?php include 'admin_assets/include_agent/footer.php'; ?>
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

    $('.storage_calculator_edit').on('submit' , function (e) {
    e.preventDefault();

    for (instance in CKEDITOR.instances) {
    CKEDITOR.instances['desc'].updateElement();
}

let url = $('meta[name=url]').attr("content");
let data = new FormData($(this).get(0));

    console.log(data);
    

    ajax(url+"admin/update-storage-calculator", data).then(function(result) {
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
