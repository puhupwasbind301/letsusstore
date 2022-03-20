<style>
  /*ul {overflow: hidden;}
  ul li {float: left;}
  ul li:nth-child(4) {clear: left};*/
  #join_us + div a{
    color: ;
  }
  #join_us + div a:hover {
      padding-left: 10px;
  }


</style>
  <div class="top-header-area business-color">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-lg-3 col-xl-4 col-md-12 jcenter">
          <ul class="top-header-social-links">
            <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://twitter.com/?lang=en" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://in.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-9  col-xl-8 col-md-12">
          <div class="top-header-contact-info text-end">
            <?php 
                $email = explode(' ',$contact_table->cu_email);
                $unempty_email = array_filter($email, function($x) { return !empty($x); });
                $email_value = array_values($unempty_email);
                foreach ($email_value as $key => $value) {
                   if(!empty($value)){ 
                    if($key == 2) {
                      break;
                    }
             ?>
            <a href="mail:<?= $value; ?>" class="email"><i class="far fa-envelope"></i> <span class="__cf_email__"
                data-cfemail=""><?= $value; ?></span></a>
                <?php }
                    } ?>
               <?php  $phone = explode('|',$contact_table->cu_phone); ?>     
            <a href="tel:<?= $phone[0] ?>" class="number"><i class="fas fa-phone-alt"></i> <?= $phone[0] ?></a>

           

            
            <a href="<?= base_url('home/contact-us') ?>" class="mx-3 text-white" >Contact</a>
            <a href="<?= base_url('home/sign-in') ?>" class="mx-3 text-white">Sign In</a>
            <a href="<?= base_url('home/sign-up') ?>" class="mx-3 text-white">Sign Up</a>  
            <!-- <a href="<?= base_url('home/about-us') ?>" class="mx-3 text-white">About Us</a> -->
            <div class="dropdown d-inline navbar-nav">
              <a href="<?= base_url('home/contact-us') ?>" class="mx-3 text-white dropdown-toggle" id="join_us" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Join us.</a>
            
              <div class="dropdown-menu p-3" aria-labelledby="join_us" style="padding-top:-20px;padding-bottom:-20px;">
               <li class="nav-item"> <a class="nav-item" href="<?= base_url('home/sign-up') ?>">Supplier</a></li>
                <li class="nav-item"><a class="nav-item" href="<?= base_url('home/sign-up') ?>">Agent</a></li>
              </div>
            </div>          
          </div>
        </div>
      </div>
    </div>
  </div>


 


  <div class="navbar-area navbar-style-two bg-f9faff business-color ">
   <div class="noke-responsive-nav ">
      <div class="container">
        <div class="noke-responsive-menu">
          <div class="logo">
            <a href="<?= base_url() ?>home"><img class="ds-logo-width" src="<?= base_url() ?>/assets/img/logo/letusstore-logo.png" alt="logo"></a>
          </div>
        </div>
      </div>
    </div> 
    <div class="noke-nav ">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-light "  >
          <a class="navbar-brand" href="<?= base_url() ?>home" ><img class="ds-logo-width" src="<?= base_url() ?>/assets/img/logo/letusstore-logo.png" alt="logo"></a>
          <div class="collapse navbar-collapse mean-menu ">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item megamenu"><a href="<?= base_url('home') ?>" class="nav-link active">Home</a></li>
                <li class="nav-item">
                <a href="<?= base_url('home/about-us') ?>" class=" nav-link">About Us</a>
                <!-- <a href="#" class="dropdown-toggle nav-link">About Us</a> -->
                <!--  <ul class="dropdown-menu">

                  <li class="nav-item"><a href="<?= base_url('home/company-profile') ?>" class="nav-link">Company Profile</a></li>
                  <li class="nav-item"><a href="<?= base_url('home/about-ceo') ?>" class="nav-link">About CEO</a></li>
                  <li class="nav-item"><a href="<?= base_url('home/cri') ?>" class="nav-link">CRI</a></li>
                  <li class="nav-item"><a href="<?= base_url('home/covid-precautions') ?>" class="nav-link">Covid Precautions</a></li>

                </ul> -->
              </li>
              <li class="nav-item"><a href="<?= base_url('home/warehouse') ?>" class="dropdown-toggle nav-link">Warehouse</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a href="<?= base_url('home/shed') ?>" class="nav-link">Shed</a></li>
                  <li class="nav-item"><a href="<?= base_url('home/rcc') ?>" class="nav-link">RCC</a></li>
                  <li class="nav-item"><a href="<?= base_url('home/bts') ?>" class="nav-link">BTS</a></li>
                </ul>
               </li>
             <li class="nav-item megamenu"><a href="<?= base_url('home/land') ?>" class="nav-link">Land</a>
                </li>

            <li class="nav-item megamenu"><a href="<?= base_url('home/page-pl') ?>" class="nav-link">3PL</a></li>

            <li class="nav-item megamenu">
              <a href="<?= base_url('home/waste-management') ?>" class="nav-link">Waste Management</a>
            </li>


              <li class="nav-item">
                <!-- <a href="#" class="dropdown-toggle nav-link">Resources</a> -->
                <a href="<?= base_url('home/manpower') ?>" class="dropdown-toggle nav-link">Manpower</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a href="<?= base_url('home/loaders') ?>" class="nav-link">Loaders</a></li>
                  <li class="nav-item"><a href="<?= base_url('home/pickers-and-packers') ?>" class="nav-link">Pickers&Packers</a></li>
                  <li class="nav-item"><a href="<?= base_url('home/security') ?>" class="nav-link">Security</a></li>
                  <li class="nav-item"><a href="<?= base_url('home/supervisor') ?>" class="nav-link">Supervisor</a></li>
                  <li class="nav-item"><a href="<?= base_url('home/deo') ?>" class="nav-link">DEO</a></li>
                 
                </ul>
              </li>

              <li class="nav-item">
                <!-- <a href="#" class="dropdown-toggle nav-link">Resources</a> -->
                <a href="<?= base_url('home/material-handling') ?>" class="dropdown-toggle nav-link">Material Handling</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a href="<?= base_url('home/forklift') ?>" class="nav-link">Forklift</a></li>
                  <li class="nav-item"><a href="<?= base_url('home/clamper') ?>" class="nav-link">Clamper</a></li>
                  <li class="nav-item"><a href="<?= base_url('home/hpt') ?>" class="nav-link">HPT</a></li>
                  <li class="nav-item"><a href="<?= base_url('home/stackers') ?>" class="nav-link">Stackers</a></li>
                </ul>
              </li>

              <li class="nav-item">
                <!-- <a href="#" class="dropdown-toggle nav-link">Resources</a> -->
                <a href="<?= base_url('home/technology') ?>" class="dropdown-toggle nav-link">Technology</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a href="<?= base_url('home/software') ?>" class="nav-link">Software</a></li>
                  <li class="nav-item"><a href="<?= base_url('home/hardware') ?>" class="nav-link">Hardware</a></li>
                </ul>
              </li>

                      <li class="nav-item">
                   <!-- <a href="#" class="dropdown-toggle nav-link">Resources</a> -->
                   <a href="<?= base_url('home/distribution-services') ?>" class="dropdown-toggle nav-link">Distribution Service</a>
                   <ul class="dropdown-menu">
                     <li class="nav-item"><a href="<?= base_url('home/primary-movement') ?>" class="nav-link">Primary Service</a></li>
                     <li class="nav-item"><a href="<?= base_url('home/secondary-movement') ?>" class="nav-link">Secondary Service</a></li>
                     <li class="nav-item"><a href="<?= base_url('home/d2c-services') ?>" class="nav-link">D2C Services</a></li>
                   </ul>
                 </li>      
               
               <li class="nav-item"><a href="<?= base_url('home/storage') ?>" class="dropdown-toggle nav-link" style="position: relative;">Storage</a>
                 <ul class="dropdown-menu dropdown-menu-right pull-left" style="margin-left:-200px;" >
                   <li class="nav-item"><a href="<?= base_url('home/private-rooms') ?>" class="nav-link">Private Rooms</a></li>
                   <li class="nav-item"><a href="<?= base_url('home/box-storage') ?>" class="nav-link">Box Storage</a></li>
                   <li class="nav-item"><a href="<?= base_url('home/utility-locker') ?>" class="nav-link">Utility Lockers</a></li>
                   <li class="nav-item"><a href="<?= base_url('home/document-storage') ?>" class="nav-link">Document Storage</a></li>
                 </ul>
               </li>

                <li class="nav-item megamenu">
                 <a href="<?= base_url('home/investor') ?>" class="nav-link">Investor</a>
               </li> 



            </ul>



         <!--    <div class="others-option d-flex align-items-center">
              <div class="option-item">
                <div class="search-box">
                  <input type="text" class="input-search" placeholder="Search">
                  <button type="submit"><i class="fas fa-search"></i></button>
                </div>
              </div>
            </div> -->
          </div>
                   
        </nav>
      <!--      <nav class="navbar navbar-expand-md navbar-light pull-left" >
                  <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav">
                      
                <li class="nav-item">
                  <a href="#" class="dropdown-toggle nav-link">Resources</a> 
                   <a href="<?= base_url('home/distribution_services') ?>" class="dropdown-toggle nav-link">Distribution Service</a>
                   <ul class="dropdown-menu">
                     <li class="nav-item"><a href="<?= base_url('home/primary_movement') ?>" class="nav-link">Primary Movement</a></li>
                     <li class="nav-item"><a href="<?= base_url('home/secondary_movement') ?>" class="nav-link">Secondary Movement</a></li>
                     <li class="nav-item"><a href="<?= base_url('home/d2c_services') ?>" class="nav-link">D2C Services</a></li>
                   </ul>
                 </li>      
               
               <li class="nav-item"><a href="#" class="dropdown-toggle nav-link" style="position: relative;">Storage</a>
                 <ul class="dropdown-menu dropdown-menu-right pull-left" style="margin-left:-200px;" >
                   <li class="nav-item"><a href="<?= base_url('home/private-rooms') ?>" class="nav-link">Private Rooms</a></li>
                   <li class="nav-item"><a href="<?= base_url('home/box-storage') ?>" class="nav-link">Box Storage</a></li>
                   <li class="nav-item"><a href="<?= base_url('home/utility-locker') ?>" class="nav-link">Utility Lockers</a></li>
                   <li class="nav-item"><a href="<?= base_url('home/bike-storage') ?>" class="nav-link">Document Storage</a></li>
                 </ul>
               </li>

                <li class="nav-item megamenu">
                 <a href="<?= base_url('home/investor') ?>" class="nav-link">Investor</a>
               </li>      



       
                  <li class="nav-item"><a href="#" class="dropdown-toggle nav-link">WorkLoad</a>
                        <ul class="dropdown-menu">
                          <div class="panel-group">
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h4 class="panel-title text-center">
                                    <a data-toggle="collapse" href="#collapse1" style="margin-right: 20px;">Wherehouse</a>
                                  </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse">
                                   <ul class="list-group">
                                    <li class="nav-item"><a href="#" class="nav-link">Testimonials11</a></li>
                                  <li class="nav-item"><a href="#" class="nav-link">Blogs11</a></li>
                                 
                                    </ul>
                                  
                                </div>
                              </div>
                          </div>
                          <div class="panel-group">
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h4 class="panel-title text-center">
                                    <a data-toggle="collapse" href="#collapse2" style="margin-right: 20px;">Land</a>
                                  </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse">
                                  <ul class="list-group">
                                    <li class="nav-item"><a href="#" class="nav-link">Testimonials22</a></li>
                                  <li class="nav-item"><a href="#" class="nav-link">Blog22s</a></li>
                                 
                                    </ul>
                                  
                                </div>
                              </div>
                          </div>
                          <div class="panel-group">
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h4 class="panel-title text-center">
                                    <a data-toggle="collapse" href="#collapse3" style="margin-right: 20px;">Manpower</a>
                                  </h4>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse">
                                  <ul class="list-group">
                                    <li class="nav-item"><a href="#" class="nav-link">Testimoni33als</a></li>
                                  <li class="nav-item"><a href="#" class="nav-link">Blog33s</a></li>
                                 
                                    </ul>
                                  
                                </div>
                              </div>
                          </div>
                          
                        </ul>
                      </li> -->
                       
                   <!--    <li class="nav-item"><a href="<?= base_url('home/contact-us') ?>" class="nav-link">Contact</a></li>
                      <li class="nav-item"><a href="<?= base_url('home/sign_in') ?>" class="nav-link">Sign In</a></li>
                      <li class="nav-item"><a href="<?= base_url('home/sign_up') ?>" class="nav-link">Sign Up</a></li> -->
                    <!-- </ul> -->
                 <!--    <div class="others-option d-flex align-items-center">
                      <div class="option-item">
                        <div class="search-box">
                          <input type="text" class="input-search" placeholder="Search">
                          <button type="submit"><i class="fas fa-search"></i></button>
                        </div>
                      </div>
                    </div>
                   </ul>   
                  </div>
                </nav>   -->
      </div>
    </div>
    <div class="others-option-for-responsive">
      <div class="container">
      <!--   <div class="dot-menu">
          <div class="inner">
            <div class="circle circle-one"></div>
            <div class="circle circle-two"></div>
            <div class="circle circle-three"></div>
          </div>
        </div> -->
      <!--   <div class="container">
          <div class="option-inner">
            <div class="others-option">
              <div class="search-box">
                <input type="text" class="input-search" placeholder="Search">
                <button type="submit"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </div>
