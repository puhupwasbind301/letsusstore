<!-- 
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>

  <div class="container">
    <h2>Dynamic Tabs</h2>
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home">Home</a></li>
      <li><a href="#menu1">Menu 1</a></li>
      <li><a href="#menu2">Menu 2</a></li>
      <li><a href="#menu3">Menu 3</a></li>
    </ul>

    <div class="tab-content">
      <div id="home" class="tab-pane fade in active">
        <h3>HOME</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div id="menu1" class="tab-pane fade">
        <h3>Menu 1</h3>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
      <div id="menu2" class="tab-pane fade">
        <h3>Menu 2</h3>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
      </div>
      <div id="menu3" class="tab-pane fade">
        <h3>Menu 3</h3>
        <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
      </div>
    </div>
  </div>
   -->





<!DOCTYPE html>
<html>
<?php $title = "Gurgaon Hondachowk View";
  $nav_page = 25;
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
            <h1>Gurgaon Hondachowk View</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url()?>admin">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?= base_url()?>admin/gurgaon-hondachowk">Gurgaon Hondachowk</a></li>
              <li class="breadcrumb-item active"><a href="<?= base_url('admin/gurgaon-hondachowk-view')?>">View</a></li>
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
          <div class="card p-3">
            <!-- <div class="card-header">
              
              <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#modal-lg">Add Staff</button>
            </div> -->
              
              <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#gurgaon">Gurgaon Hondachowk</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#menu1">Benefite of Renting</a>
                </li>
                
              </ul>

              <div class="tab-content">
                <div id="gurgaon" class="tab-pane show fade in active">
                
          <div class="table-responsive">
              
              <table id="tbl_id" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Image</th>
                  <th>Description</th>
                  <!-- <th>Section</th> -->
                  <th>Manage</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach($data as $key => $val): ?>
                    <?php if($val->ghc_section==1): ?>
                  <tr>
                    <td><?= ++$key?></td>
                    <td><?= $val->ghc_title ?></td>
                    <td><center>
                      
                       <?php if(!empty($val->ghc_image)): ?>
                      <img src="<?= base_url().$val->ghc_image ?>" width=150 height=150 alt="If image is selected only that will be shown on website.">
                     <?php else: ?>
                       <img src="https://via.placeholder.com/150" alt="works-image" style="height:150px;width:150px;">
                     <?php endif; ?>
                    </center></td>
                    <td class="text-justify"><?= $val->ghc_desc ?></td>
                    <!-- <td ><?= ($val->ghc_section==1)?'Gurgaon Hondachowk':'Benefit of Renting' ?></td> -->
                    
                    <td><a href="#" data-toggle="modal" data-target="#modalview-lg<?= $val->ghc_id?>"><i class="fa fa-eye text-info" title="View"></i></a>&emsp;|&emsp;<a href="#" data-toggle="modal" data-target="#modaledit-lg<?= $val->ghc_id?>"><i class="fa fa-edit text-success" title="Edit"></i></a>&emsp;|&emsp;<a href="#" data-toggle="modal" data-target="#modal-sm<?= $val->ghc_id?>"><i class="fa fa-trash text-danger" title="Delete"></i></a></td>
                  </tr>

                  <!-- Edit Staff -->
          <div class="modal fade" id="modaledit-lg<?= $val->ghc_id?>">
        <div class="modal-dialog modaledit-lg">
          <div class="modal-content">
            <div class="modal-header">Edit Gurgaon Hondachowk</h4>
              <div id="msg"></div>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- form start -->
              <form action="" class="gurgaon_hondachowk_edit" method="post">
                <div class="card-body">
                  <input type="hidden" name="ghcid" value="<?= $val->ghc_id ?>">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                    <label for="sname">title</label>
                    <input type="text" class="form-control" name="title" placeholder="Name" required="" value="<?= $val->ghc_title ?>">
                    
                  </div>
                    </div>
                    
                  </div>
           
                      <div class="row">
                          <div class="col-md-12">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="name">Image</label>
                                <p>
                                     <?php if(!empty($val->ghc_image)): ?>
                                    <img src="<?= base_url().$val->ghc_image ?>" width=150 height=150 alt="If image is selected only that will be shown on website.">
                                   <?php else: ?>
                                     <img src="https://via.placeholder.com/150" alt="works-image" style="height:150px;width:150px;">
                                   <?php endif; ?>

                                </p>
                                <div class="custom-file mb-3">
                                  
                                    <input type="file" class="custom-file-input" id="customFile" name="filename" value="<?= $val->ghc_image ?>">
                                    <?php $v =explode('/',$val->ghc_image); ?>
                            <label class="custom-file-label" for="customFile" style="overflow:hidden;"><?= end($v); ?></label>
                                </div>
                              </div>
                              <!-- <div id="imagePreview">
                                <img src="<?= base_url() ?>photo-1526947425960-945c6e72858f.jpeg">
                              </div> -->

                            </div>
                      </div>    

                  </div>
                  <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                        <label for="sdesc">Description</label>
                        <textarea class="form-control" name="desc"  rows="10"><?= $val->ghc_desc ?></textarea>
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
          <div class="modal fade" id="modalview-lg<?= $val->ghc_id?>">
        <div class="modal-dialog modalview-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Gurgaon Hondachowk Detail</h4>
              <div id="msg"></div>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- form start -->
              <div class="row p-2">
                <div class="col-md-3">
                  <b>Name</b>
                </div>
                <div class="col-md-9">
                  <?= $val->ghc_title  ?>
                </div>
              </div>

               <div class="row p-2">
                <div class="col-md-3">
                  <b>About Us Image</b>
                </div>
                <div class="col-md-9">
                  <p>
                     <img src="<?= base_url().$val->ghc_image ?>" width=150 height=150>
                  </p>
                </div>
              </div>
             
              <div class="row p-2">
                <div class="col-md-3">
                  <b>Description</b>
                </div>
                <div class="col-md-9">
                  <?= $val->ghc_desc  ?>
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
      <div class="modal fade" id="modal-sm<?= $val->ghc_id?>">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Delete Gurgaon Hondachowk</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="<?php echo base_url();?>admin/delete-gurgaon-hondachowk" method="post"> 
            <div class="modal-body">
              <input type="hidden" name="ghcid" value="<?= $val->ghc_id?>">
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
                <?php endif; ?>
                <?php endforeach; ?>
                </tbody>
                
               
              </table>
              </div>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                          

                                  <div class="table-responsive">
                                  <table id="tbl_id" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Title</th>
                                      <th>Image</th>
                                      <th>Description</th>
                                      <!-- <th>Section</th> -->
                                      <th>Manage</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                      <?php foreach($data as $key => $val): ?>
                                        <?php if($val->ghc_section!=1): ?>
                                      <tr>
                                        <td><?= ++$key?></td>
                                        <td><?= $val->ghc_title ?></td>
                                        <td><center>
                                           <?php if(!empty($val->ghc_image)): ?>
                                          <img src="<?= base_url().$val->ghc_image ?>" width=150 height=150 alt="If image is selected only that will be shown on website.">
                                         <?php else: ?>
                                           <img src="https://via.placeholder.com/150" alt="works-image" style="height:150px;width:150px;">
                                         <?php endif; ?>
                                        </center></td>
                                        <td class="text-justify"><?= $val->ghc_desc ?></td>
                                         
                                        <td><a href="#" data-toggle="modal" data-target="#modalview-lg<?= $val->ghc_id?>"><i class="fa fa-eye text-info" title="View"></i></a>&emsp;|&emsp;<a href="#" data-toggle="modal" data-target="#modaledit-lg<?= $val->ghc_id?>"><i class="fa fa-edit text-success" title="Edit"></i></a>&emsp;|&emsp;<a href="#" data-toggle="modal" data-target="#modal-sm<?= $val->ghc_id?>"><i class="fa fa-trash text-danger" title="Delete"></i></a></td>
                                      </tr>

                                      <!-- Edit Staff -->
                              <div class="modal fade" id="modaledit-lg<?= $val->ghc_id?>">
                            <div class="modal-dialog modaledit-lg">
                              <div class="modal-content">
                                <div class="modal-header">Edit Gurgaon Hondachowk</h4>
                                  <div id="msg"></div>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <!-- form start -->
                                  <form action="" class="gurgaon_hondachowk_edit" method="post">
                                    <div class="card-body">
                                      <input type="hidden" name="ghcid" value="<?= $val->ghc_id ?>">
                                      <div class="row">
                                        <div class="col-md-12">
                                          <div class="form-group">
                                        <label for="sname">title</label>
                                        <input type="text" class="form-control" name="title" placeholder="Name" required="" value="<?= $val->ghc_title ?>">
                                        
                                      </div>
                                        </div>
                                        
                                      </div>
                               
                                          <div class="row">
                                              <div class="col-md-12">
                                                <div class="col-md-12">
                                                  <div class="form-group">
                                                    <label for="name">Image</label>
                                                    <p>
                                                         <?php if(!empty($val->ghc_image)): ?>
                                                        <img src="<?= base_url().$val->ghc_image ?>" width=150 height=150 alt="If image is selected only that will be shown on website.">
                                                       <?php else: ?>
                                                         <img src="https://via.placeholder.com/150" alt="works-image" style="height:150px;width:150px;">
                                                       <?php endif; ?>

                                                    </p>
                                                    <div class="custom-file mb-3">
                                                      
                                                        <input type="file" class="custom-file-input" id="customFile" name="filename" value="<?= $val->ghc_image ?>">
                                                        <?php $v =explode('/',$val->ghc_image); ?>
                                                <label class="custom-file-label" for="customFile" style="overflow:hidden;"><?= end($v); ?></label>
                                                    </div>
                                                  </div>
                                                  <!-- <div id="imagePreview">
                                                    <img src="<?= base_url() ?>photo-1526947425960-945c6e72858f.jpeg">
                                                  </div> -->

                                                </div>
                                          </div>    

                                      </div>
                                      <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group">
                                            <label for="sdesc">Description</label>
                                            <textarea class="form-control" name="desc"  rows="10"><?= $val->ghc_desc ?></textarea>
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
                              <div class="modal fade" id="modalview-lg<?= $val->ghc_id?>">
                            <div class="modal-dialog modalview-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Gurgaon Hondachowk Detail</h4>
                                  <div id="msg"></div>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <!-- form start -->
                                  <div class="row p-2">
                                    <div class="col-md-3">
                                      <b>Name</b>
                                    </div>
                                    <div class="col-md-9">
                                      <?= $val->ghc_title  ?>
                                    </div>
                                  </div>

                                   <div class="row p-2">
                                    <div class="col-md-3">
                                      <b>About Us Image</b>
                                    </div>
                                    <div class="col-md-9">
                                      <p>
                                         <img src="<?= base_url().$val->ghc_image ?>" width=150 height=150>
                                      </p>
                                    </div>
                                  </div>
                                 
                                  <div class="row p-2">
                                    <div class="col-md-3">
                                      <b>Description</b>
                                    </div>
                                    <div class="col-md-9">
                                      <?= $val->ghc_desc  ?>
                                    </div>
                                  </div>
                                </div>
                                
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
                          
                          <!-- Delete Staff -->
                          <div class="modal fade" id="modal-sm<?= $val->ghc_id?>">
                            <div class="modal-dialog modal-sm">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Delete Gurgaon Hondachowk</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <form action="<?php echo base_url();?>admin/delete-gurgaon-hondachowk" method="post"> 
                                <div class="modal-body">
                                  <input type="hidden" name="ghcid" value="<?= $val->ghc_id?>">
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
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                    </tbody>
                                    
                                   
                                  </table>
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
              <h4 class="modal-title">Add Gurgaon Hondachowk</h4>
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

    $('.gurgaon_hondachowk_edit').on('submit' , function (e) {
    e.preventDefault();

    for (instance in CKEDITOR.instances) {
    CKEDITOR.instances['desc'].updateElement();
}

let url = $('meta[name=url]').attr("content");
let data = new FormData($(this).get(0));

    console.log(data);
    

    ajax(url+"admin/update-gurgaon-hondachowk", data).then(function(result) {
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
$(document).ready(function(){
  $(".nav-tabs a").click(function(){
    $(this).tab('show');
  });
});
</script>
</body>
</html>
