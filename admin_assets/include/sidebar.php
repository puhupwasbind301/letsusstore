

 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4" style="position: fixed;">
  <!-- Brand Logo -->
  <a href="<?= base_url()?>" class="brand-link">
    <img src="<?= base_url() ?>admin_assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
    style="opacity: .8">
    <span class="brand-text font-weight-light">Admin</span>
  </a>


  

  <!-- Sidebar -->
  <div class="sidebar" >
    <!-- Sidebar user panel (optional) -->
     <!--  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>admin_assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2" id="sidebarscroll">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item">
            <a href="<?= base_url() ?>admin" class="nav-link <?php if($nav_page === 1) { echo 'active'; } ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            
          </li>

          <li class="nav-item has-treeview ">
            <a href="<?= base_url('admin/main-section') ?>" class="nav-link <?php if($nav_page === 115) { echo 'active'; } ?>">
              <i class="nav-icon fas fa-boxes"></i>
              <p>
                Home
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview ">
            <a href="<?= base_url('admin/about_us') ?>" class="nav-link <?php if($nav_page === 117) { echo 'active'; } ?>">
              <i class="nav-icon fas fa-boxes"></i>
              <p>
                About us
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview ">
            <a href="<?= base_url('admin/banner-image-view') ?>" class="nav-link <?php if($nav_page === 107) { echo 'active'; } ?>">
              <i class="nav-icon fas fa-boxes"></i>
              <p>
                Banner Image 
              </p>
            </a>
          </li> 

          <li class="nav-item has-treeview ">
            <a href="<?= base_url('admin/meta-data-view') ?>" class="nav-link <?php if($nav_page === 116) { echo 'active'; } ?>">
              <i class="nav-icon fas fa-boxes"></i>
              <p>
                Meta Data
              </p>
            </a>
          </li> 

    <!--   <li class="nav-item has-treeview <?php if(in_array($nav_page, [43,44,45,46]) ) { echo 'menu-open'; } ?>">
            <a href="<?php if(in_array($nav_page, [43,44,45,46]) ) { echo 'active'; } ?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url()?>admin/main-section" class="nav-link <?php if($nav_page === 46) { echo 'active'; } ?>" class="nav-link">
                  <i class="fa fa-list nav-icon"></i>
                  <p>Main Section</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?= base_url()?>admin/our-works" class="nav-link <?php if($nav_page === 43) { echo 'active'; } ?>" class="nav-link">

                  <i class="far fa-clock nav-icon"></i>

                  <p>Our Works</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url()?>admin/meet-the-team" class="nav-link <?php if($nav_page === 44) { echo 'active'; } ?>" class="nav-link">
                  <i class="far fa-clock nav-icon"></i>
                  <p>Meet the Team</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?= base_url()?>admin/news-and-articles" class="nav-link <?php if($nav_page === 45) { echo 'active'; } ?>" class="nav-link">
                  <i class="far fa-clock nav-icon"></i>
                  <p>News and Articles</p>
                </a>
              </li>
        
            </ul>
          </li> -->

          <li class="nav-item has-treeview <?php if(in_array($nav_page, [100,2,3,4]) ) { echo 'menu-open'; } ?>">
            <a href="<?php if(in_array($nav_page, [100,2,3,4]) ) { echo 'active'; } ?>" class="nav-link <?php if(in_array($nav_page, [100,2,3,4]) ) { echo 'active'; } ?>">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                Warehouse
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/warehouse') ?>" class="nav-link <?php if($nav_page === 100) { echo 'active'; } ?>" class="nav-link">
                  <i class="fa fa-list nav-icon"></i>
                  <p>Warehouse</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?= base_url()?>admin/shed" class="nav-link <?php if($nav_page === 2) { echo 'active'; } ?>" class="nav-link">
                  <i class="fa fa-list nav-icon"></i>
                  <p>Shed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url()?>admin/rcc" class="nav-link <?php if($nav_page === 3) { echo 'active'; } ?>" class="nav-link">
                  <i class="far fa-clock nav-icon"></i>
                  <p>RCC</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url()?>admin/bts" class="nav-link <?php if($nav_page === 4) { echo 'active'; } ?>" class="nav-link">
                  <i class="far fa-clock nav-icon"></i>
                  <p>BTS</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview ">
            <a href="<?= base_url('admin/land') ?>" class="nav-link <?php if($nav_page === 108) { echo 'active'; } ?>">
              <i class="nav-icon fas fa-boxes"></i>
              <p>
                Land
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview ">
            <a href="<?= base_url('admin/three_pl') ?>" class="nav-link  <?php if($nav_page === 109) { echo 'active'; } ?>">
              <i class="nav-icon fas fa-boxes"></i>
              <p>
                3PL
              </p>
            </a>
          </li>

           <li class="nav-item has-treeview ">
            <a href="<?= base_url('admin/waste_management') ?>" class="nav-link <?php if($nav_page === 110) { echo 'active'; } ?>">
              <i class="nav-icon fas fa-boxes"></i>
              <p>
                Waste Management
              </p>
            </a>
          </li>


        <li class="nav-item has-treeview <?php if(in_array($nav_page, [101,5,6,7,8,9]) ) { echo 'menu-open'; } ?>">
          <a href="<?php if(in_array($nav_page, [101,5,6,7,8,9]) ) { echo 'active'; } ?>" class="nav-link <?php if(in_array($nav_page, [101,5,6,7,8,9]) ) { echo 'active'; } ?>">
            <i class="nav-icon fas fa-address-card"></i>
            <p>
              Manpower
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/manpower') ?>" class="nav-link <?php if($nav_page === 101) { echo 'active'; } ?>" class="nav-link">
                <i class="fa fa-list nav-icon"></i>
                <p>Manpower</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?= base_url()?>admin/loaders" class="nav-link <?php if($nav_page === 5) { echo 'active'; } ?>" class="nav-link">
                <i class="fa fa-list nav-icon"></i>
                <p>Loader</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url()?>admin/pickers_and_packers" class="nav-link <?php if($nav_page === 6) { echo 'active'; } ?>" class="nav-link">
                <i class="far fa-clock nav-icon"></i>
                <p>Pickers&Packers</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url()?>admin/security" class="nav-link <?php if($nav_page === 7) { echo 'active'; } ?>" class="nav-link">
                <i class="far fa-clock nav-icon"></i>
                <p>Security</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?= base_url()?>admin/supervisor" class="nav-link <?php if($nav_page === 8) { echo 'active'; } ?>" class="nav-link">
                <i class="far fa-clock nav-icon"></i>
                <p>Supervisor</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?= base_url()?>admin/deo" class="nav-link <?php if($nav_page === 9) { echo 'active'; } ?>" class="nav-link">
                <i class="far fa-clock nav-icon"></i>
                <p>DEO</p>
              </a>
            </li>

          </ul>
        </li>  

       <li class="nav-item has-treeview <?php if(in_array($nav_page, [102, 10,11,12,13]) ) { echo 'menu-open'; } ?>">
          <a href="<?php if(in_array($nav_page, [102, 10,11,12,13]) ) { echo 'active'; } ?>" target="_blank" class="nav-link <?php if(in_array($nav_page, [102, 10,11,12,13]) ) { echo 'active'; } ?>">
            <i class="nav-icon fas fa-address-card"></i>
            <p>
              Material Handling
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/material_handling') ?>" class="nav-link <?php if($nav_page === 102) { echo 'active'; } ?>" class="nav-link">
                <i class="fa fa-list nav-icon"></i>
                <p>Material Handling</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url()?>admin/forklift" class="nav-link <?php if($nav_page === 10) { echo 'active'; } ?>" class="nav-link">
                <i class="fa fa-list nav-icon"></i>
                <p>Forklift</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url()?>admin/clamper" class="nav-link <?php if($nav_page === 11) { echo 'active'; } ?>" class="nav-link">
                <i class="far fa-clock nav-icon"></i>
                <p>Clamper</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url()?>admin/hpt" class="nav-link <?php if($nav_page === 12) { echo 'active'; } ?>" class="nav-link">
                <i class="far fa-clock nav-icon"></i>
                <p>HPT</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url()?>admin/stackers" class="nav-link <?php if($nav_page === 13) { echo 'active'; } ?>" class="nav-link">
                <i class="far fa-clock nav-icon"></i>
                <p>Stackers</p>
              </a>
            </li>
          </ul>
        </li>  


        <li class="nav-item has-treeview <?php if(in_array($nav_page, [103,14,15]) ) { echo 'menu-open'; } ?>">
          <a href="<?php if(in_array($nav_page, [103,14,15]) ) { echo 'active'; } ?>" class="nav-link <?php if(in_array($nav_page, [103,14,15]) ) { echo 'active'; } ?>">
            <i class="nav-icon fas fa-address-card"></i>
            <p>
              Technology
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/technology') ?>" class="nav-link <?php if($nav_page === 103) { echo 'active'; } ?>" class="nav-link">
                <i class="fa fa-list nav-icon"></i>
                <p>Technology</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?= base_url()?>admin/software" class="nav-link <?php if($nav_page === 14) { echo 'active'; } ?>" class="nav-link">
                <i class="fa fa-list nav-icon"></i>
                <p>Software</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url()?>admin/hardware" class="nav-link <?php if($nav_page === 15) { echo 'active'; } ?>" class="nav-link">
                <i class="far fa-clock nav-icon"></i>
                <p>Hardware</p>
              </a>
            </li>
          </ul>
        </li>  



       <li class="nav-item has-treeview <?php if(in_array($nav_page, [104,16,17,18]) ) { echo 'menu-open'; } ?>">
         <a href="<?php if(in_array($nav_page, [104,16,17,18]) ) { echo 'active'; } ?>" class="nav-link <?php if(in_array($nav_page, [104,16,17,18]) ) { echo 'active'; } ?>">
           <i class="nav-icon fas fa-address-card"></i>
           <p>
             Distribution Service
             <i class="right fas fa-angle-left"></i>
           </p>
         </a>
         <ul class="nav nav-treeview">
           <li class="nav-item">
             <a href="<?= base_url('admin/distribution_services') ?>" class="nav-link <?php if($nav_page === 104) { echo 'active'; } ?>" class="nav-link">
               <i class="fa fa-list nav-icon"></i>
               <p>Distribution Service</p>
             </a>
           </li>
           <li class="nav-item">
             <a href="<?= base_url()?>admin/primary_service" class="nav-link <?php if($nav_page === 16) { echo 'active'; } ?>" class="nav-link">
               <i class="fa fa-list nav-icon"></i>
               <p>Primary Service</p>
             </a>
           </li>
           <li class="nav-item">
             <a href="<?= base_url()?>admin/secondary_service" class="nav-link <?php if($nav_page === 17) { echo 'active'; } ?>" class="nav-link">
               <i class="far fa-clock nav-icon"></i>
               <p>Secondary Service</p>
             </a>
           </li>
           <li class="nav-item">
             <a href="<?= base_url()?>admin/d2c_services" class="nav-link <?php if($nav_page === 18) { echo 'active'; } ?>" class="nav-link">
               <i class="far fa-clock nav-icon"></i>
               <p>D2C Services</p>
             </a>
           </li>
        
         </ul>
       </li>   


    <li class="nav-item has-treeview <?php if(in_array($nav_page, [105,19,20,21,22]) ) { echo 'menu-open'; } ?>">
         <a href="<?php if(in_array($nav_page, [105,19,20,21,22]) ) { echo 'active'; } ?>" class="nav-link <?php if(in_array($nav_page, [105,19,20,21,22]) ) { echo 'active'; } ?>">
           <i class="nav-icon fas fa-boxes"></i>
           <p>
             Storage Types
             <i class="right fas fa-angle-left"></i>
           </p>
         </a>
         <ul class="nav nav-treeview">
           <li class="nav-item">
             <a href="<?= base_url('admin/storage') ?>" class="nav-link <?php if($nav_page === 105) { echo 'active'; } ?>" class="nav-link">
               <i class="fa fa-list nav-icon"></i>
               <p>Storage</p>
             </a>
           </li>

           <li class="nav-item">
             <a href="<?= base_url()?>admin/private-rooms" class="nav-link <?php if($nav_page === 19) { echo 'active'; } ?>" class="nav-link">
               <i class="fa fa-list nav-icon"></i>
               <p>Private Room</p>
             </a>
           </li>
           <li class="nav-item">
             <a href="<?= base_url()?>admin/box-storage" class="nav-link <?php if($nav_page === 20) { echo 'active'; } ?>" class="nav-link">
               <i class="far fa-clock nav-icon"></i>
               <p>Box Storage</p>
             </a>
           </li>
           <li class="nav-item">
             <a href="<?= base_url()?>admin/utility-locker" class="nav-link <?php if($nav_page === 21) { echo 'active'; } ?>" class="nav-link">
               <i class="far fa-clock nav-icon"></i>
               <p>Utility Lockers</p>
             </a>
           </li>
           <li class="nav-item">
             <a href="<?= base_url()?>admin/document-storage" class="nav-link <?php if($nav_page === 22) { echo 'active'; } ?>" class="nav-link">
               <i class="far fa-clock nav-icon"></i>
               <p>Document Storage</p>
             </a>
           </li>
         </ul>
       </li>
 
      <li class="nav-item has-treeview ">
        <a href="<?= base_url('admin/benefits') ?>" class="nav-link <?php if($nav_page === 111) { echo 'active'; } ?>">
          <i class="nav-icon fas fa-boxes"></i>
          <p>
            Benefits
          </p>
        </a>
      </li> 


     <!--  <li class="nav-item has-treeview <?php if(in_array($nav_page, [23]) ) { echo 'menu-open'; } ?>">
            <a href="<?php if(in_array($nav_page, [23]) ) { echo 'active'; } ?>" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Benefits
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url()?>admin/benefits" class="nav-link <?php if($nav_page === 23) { echo 'active'; } ?>" class="nav-link">
                  <i class="fa fa-list nav-icon"></i>
                  <p>Benefits</p>
                </a>
              </li>
            
            </ul>
       </li> -->




      <li class="nav-item has-treeview <?php if(in_array($nav_page, [37,38]) ) { echo 'menu-open'; } ?>">
        <a href="<?php if(in_array($nav_page, [37,38]) ) { echo 'active'; } ?>" class="nav-link">
          <i class="nav-icon fab fa-sourcetree"></i>
          <p>
            Resources
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
         
          <li class="nav-item">
            <a href="<?= base_url()?>admin/terms-and-conditions" class="nav-link <?php if($nav_page === 37) { echo 'active'; } ?>" class="nav-link">
              <i class="far fa-clock nav-icon"></i>
              <p>T&C's</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url()?>admin/privacy-policy" class="nav-link <?php if($nav_page === 38) { echo 'active'; } ?>" class="nav-link">
              <i class="far fa-clock nav-icon"></i>
              <p>Privacy Policy</p>
            </a>
          </li>
        
        </ul>
      </li>

      <li class="nav-item has-treeview ">
        <a href="<?= base_url('admin/contact-us') ?>" class="nav-link">
          <i class="nav-icon fas fa-boxes"></i>
          <p>
            Contact Us
          </p>
        </a>
      </li> 

     

      <!--  <li class="nav-item has-treeview <?php if(in_array($nav_page, [40,41]) ) { echo 'menu-open'; } ?>">
            <a href="<?php if(in_array($nav_page, [40,41]) ) { echo 'active'; } ?>" class="nav-link">
              <i class="nav-icon far fa-address-book"></i>
              <p>
                Contact us
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url()?>admin/contact-us" class="nav-link <?php if($nav_page === 40) { echo 'active'; } ?>" class="nav-link">
                  <i class="fa fa-list nav-icon"></i>
                  <p>Contact us</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url()?>admin/contact-us-messages" class="nav-link <?php if($nav_page === 41) { echo 'active'; } ?>" class="nav-link">
                  <i class="far fa-clock nav-icon"></i>
                  <p>Contact us messages</p>
                </a>
              </li>
              
            </ul>
          </li>


          <li class="nav-item has-treeview <?php if(in_array($nav_page, [42]) ) { echo 'menu-open'; } ?>">
            <a href="<?php if(in_array($nav_page, [42]) ) { echo 'active'; } ?>" class="nav-link">
              <i class="nav-icon fas fa-images"></i>
              <p>
                Banner Image
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url()?>admin/banner-image-view" class="nav-link <?php if($nav_page === 42) { echo 'active'; } ?>" class="nav-link">
                  <i class="fa fa-list nav-icon"></i>
                  <p>Banner</p>
                </a>
              </li>
            </ul>
          </li> -->



        <!--   <li class="nav-item has-treeview <?php if(in_array($nav_page, [6,7,8,9]) ) { echo 'menu-open'; } ?>">
            <a href="<?php if(in_array($nav_page, [6,7,8,9]) ) { echo 'active'; } ?>" class="nav-link">
              <i class="nav-icon fas fa-calculator"></i>
              <p>
                Storage Calculator
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url()?>admin/storage-calculator" class="nav-link <?php if($nav_page === 6) { echo 'active'; } ?>" class="nav-link">
                  <i class="fa fa-list nav-icon"></i>
                  <p>Storage Calculator Add</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?= base_url('admin/user-square-feet') ?>" class="nav-link <?php if($nav_page === 7) { echo 'active'; } ?>" class="nav-link">
                  <i class="fa fa-list nav-icon"></i>
                  <p>User Square Feet</p>
                </a>
              </li>
            
            </ul>
          </li>
 -->

          <li class="nav-item has-treeview <?php if(in_array($nav_page, [47]) ) { echo 'menu-open'; } ?>">
            <a href="<?php if(in_array($nav_page, [47]) ) { echo 'active'; } ?>" class="nav-link">
              <i class="nav-icon fas fa-id-card-alt"></i>
              <p>
                User Contact Detail
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url()?>admin/user-contact-detail" class="nav-link <?php if($nav_page === 47) { echo 'active'; } ?>" class="nav-link">
                  <i class="fa fa-list nav-icon"></i>
                  <p>User Contact Detail</p>
                </a>
              </li>
            
            </ul>
          </li>

         
          <li class="nav-item has-treeview <?php if(in_array($nav_page, [112]) ) { echo 'menu-open'; } ?>">
            <a href="<?php if(in_array($nav_page, [112]) ) { echo 'active'; } ?>" class="nav-link <?php if(in_array($nav_page, [112]) ) { echo 'active'; } ?>">
              <i class="nav-icon fas fa-id-card-alt"></i>
              <p>
                Agent
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url()?>admin/agent_list" class="nav-link <?php if($nav_page === 112) { echo 'active'; } ?>" class="nav-link">
                  <i class="fa fa-list nav-icon"></i>
                  <p>Registered Agent</p>
                </a>
              </li>
          
            </ul>
          </li>


          <li class="nav-item has-treeview <?php if(in_array($nav_page, [113,114]) ) { echo 'menu-open'; } ?>">
            <a href="<?php if(in_array($nav_page, [114,113]) ) { echo 'active'; } ?>" class="nav-link <?php if(in_array($nav_page, [114,113]) ) { echo 'active'; } ?>">
              <i class="nav-icon fas fa-id-card-alt"></i>
              <p>
                Investor
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/investor') ?>" class="nav-link <?php if($nav_page === 113) { echo 'active'; } ?>" class="nav-link">
                  <i class="fa fa-list nav-icon"></i>
                  <p>Add Investor Detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url()?>admin/investor_list" class="nav-link <?php if($nav_page === 114) { echo 'active'; } ?>" class="nav-link">
                  <i class="fa fa-list nav-icon"></i>
                  <p>Registered Investor</p>
                </a>
              </li>

        
            </ul>
          </li>


          <li class="nav-item has-treeview <?php if(in_array($nav_page, [52,48,49]) ) { echo 'menu-open'; } ?>">
            <a href="<?php if(in_array($nav_page, [52,48,49]) ) { echo 'active'; } ?>" class="nav-link <?php if(in_array($nav_page, [52,48,49]) ) { echo 'active'; } ?>">
              <i class="nav-icon fas fa-id-card-alt"></i>
              <p>
                Customers
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url()?>admin/customer_list" class="nav-link <?php if($nav_page === 52) { echo 'active'; } ?>" class="nav-link">
                  <i class="fa fa-list nav-icon"></i>
                  <p>Registered Customers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url()?>admin/customer_service_request_list/<?= null ?>" class="nav-link <?php if($nav_page === 48) { echo 'active'; } ?>" class="nav-link">
                  <i class="fa fa-list nav-icon"></i>
                  <p>Customers Requests</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url()?>admin/unautherised_customer_service_request_list" class="nav-link <?php if($nav_page === 49) { echo 'active'; } ?>" class="nav-link">
                  <i class="fa fa-list nav-icon"></i>
                  <p>Non-Customers Requests</p>
                </a>
              </li>

            </ul>
          </li>
 
          <li class="nav-item has-treeview?php if(in_array($nav_page, [50]) ) { echo 'menu-open'; } ?>">
            <a href="<?php if(in_array($nav_page, [50]) ) { echo 'active'; } ?>" class="nav-link <?php if(in_array($nav_page, [50]) ) { echo 'active'; } ?>">
              <i class="nav-icon fas fa-id-card-alt"></i>
              <p>
                Supplier
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url()?>admin/supplier_list" class="nav-link <?php if($nav_page === 50) { echo 'active'; } ?>" class="nav-link">
                  <i class="fa fa-list nav-icon"></i>
                  <p>Supplier</p>
                </a>
              </li>
        
            </ul>
          </li>


          
     

<!-- 
          <li class="nav-item has-treeview <?php if($nav_page === 10007 || $nav_page === 10008 || $nav_page === 10011 || $nav_page === 10012)  { echo 'menu-open'; } ?>">
            <a href="<?php if($nav_page === 10007 || $nav_page === 10008 || $nav_page === 10011 || $nav_page === 10012) { echo 'active'; } ?>" class="nav-link">
           <i class="fas fa-people-carry nav-icon"></i>
              <p>
                Raw Materials
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url() ?>admin/add-raw-materials" class="nav-link <?php if($nav_page === 10007) { echo 'active'; } ?>" class="nav-link">
                  <i class="fa fa-list nav-icon"></i>
                  <p>Add Raw Materials</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>admin/add-excess-raw-materials" class="nav-link <?php if($nav_page === 10011) { echo 'active'; } ?>" class="nav-link">
                   <i class="fa fa-universal-access nav-icon" aria-hidden="true"></i>
                  <p>Excess</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>admin/add-wastage-raw-materials" class="nav-link <?php if($nav_page === 10012) { echo 'active'; } ?>" class="nav-link">
                  <i class="fas fa-recycle nav-icon"></i>
                  <p>Wastage</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url()?>admin/manage-raw-materials" class="nav-link <?php if($nav_page === 10008) { echo 'active'; } ?>" class="nav-link">
                  <i class="far fa-clock nav-icon"></i>
                  <p>Manage Raw Materials</p>
                </a>
              </li>   
              <li class="nav-item">
                <a href="<?= base_url()?>admin/manage-excess-raw-materials" class="nav-link <?php if($nav_page === 10100) { echo 'active'; } ?>" class="nav-link">
                  <i class="far fa-clock nav-icon"></i>
                  <p>Manage Excess Materials</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url()?>admin/manage-wastage-raw-materials" class="nav-link <?php if($nav_page === 10200) { echo 'active'; } ?>" class="nav-link">
                  <i class="far fa-clock nav-icon"></i>
                  <p>Manage Wastage Materials</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item has-treeview <?php if($nav_page === 10009) { echo 'menu-open'; } ?>">
            <a href="<?php if($nav_page === 10009) { echo 'active'; } ?>" class="nav-link">
             <i class="fas fa-cash-register nav-icon"></i>
              <p>
                Machines
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url() ?>admin/add-new-machines" class="nav-link <?php if($nav_page === 10009) { echo 'active'; } ?>" class="nav-link">
                  <i class="fa fa-list nav-icon"></i>
                  <p>Add machines</p>
                </a>
              </li>
         
            </ul>
          </li>

   
         <li class="nav-item has-treeview <?php if($nav_page === 9991 || $nav_page === 9992 || $nav_page === 10010 || $nav_page === 10013) { echo 'menu-open'; } ?>">
            <a href="<?php if($nav_page === 9991 || $nav_page === 9992 || $nav_page === 10010 || $nav_page === 10013) { echo 'active'; } ?>" class="nav-link">
             <i class="fas fa-draw-polygon nav-icon"></i>
              <p>
                Warping
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url() ?>admin/warping" class="nav-link <?php if($nav_page === 9991) { echo 'active'; } ?>" class="nav-link">
                <i class="fas fa-people-carry"></i>
                  <p>Raw Materials</p>
                </a>
              </li>

              <li class="nav-item has-treeview <?php if($nav_page === 9992 || $nav_page === 10010  || $nav_page === 10013) { echo 'menu-open'; } ?>">
                <a href="<?php if($nav_page === 9992 || $nav_page === 10010 || $nav_page === 10013) { echo 'active'; } ?>" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Beam
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= base_url()?>admin/beam" class="nav-link <?php if($nav_page === 9992) { echo 'active'; } ?>" class="nav-link">
                      <i class="fa fa-list nav-icon"></i>
                      <p>Add Beam</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url()?>admin/beam-created" class="nav-link <?php if($nav_page === 10010) { echo 'active'; } ?>" class="nav-link">
                      <i class="far fa-clock nav-icon"></i>
                      <p>Beam Created</p>
                    </a>
                  </li>
                   <li class="nav-item">
                    <a href="<?= base_url()?>admin/add-warp-beam-report" class="nav-link <?php if($nav_page === 10013) { echo 'active'; } ?>" class="nav-link">
                      <i class="far fa-clock nav-icon"></i>
                      <p>Used Beam Report</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url()?>admin/add-warp-fresh-beam-report" class="nav-link <?php if($nav_page === 10050) { echo 'active'; } ?>" class="nav-link">
                      <i class="far fa-clock nav-icon"></i>
                      <p>Fresh Beam Report</p>
                    </a>
                  </li>

                </ul>
              </li>
            </ul>
          </li>

       

          <li class="nav-item has-treeview <?php if($nav_page === 4 || $nav_page === 5 || $nav_page === 55 || $nav_page === 56 || $nav_page === 57 || $nav_page === 58 || $nav_page === 59) { echo 'menu-open'; } ?>">
            <a href="<?php if($nav_page === 4 || $nav_page === 5 || $nav_page === 55 || $nav_page === 56 || $nav_page === 57 || $nav_page === 58 || $nav_page === 59) { echo 'active'; } ?>" class="nav-link">
              <i class="nav-icon fas fa-dolly-flatbed"></i>
              <p>
                Manufacturing
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url()?>admin/machine" class="nav-link <?php if($nav_page === 4) { echo 'active'; } ?>">
                  <i class="nav-icon fa fa-industry"></i>
                  <p>
                    Machines
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url()?>admin/roll-types" class="nav-link <?php if($nav_page === 55) { echo 'active'; } ?>">
                  <i class="nav-icon fas fa-exclamation-triangle"></i>
                  <p>
                    Create Roll Type
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url()?>admin/work-allocate" class="nav-link <?php if($nav_page === 5) { echo 'active'; } ?>">
                  <i class="nav-icon fas fa-chalkboard-teacher"></i>
                  <p>
                    Work Allocate
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url()?>admin/work-report/all/any/any/1" class="nav-link <?php if($nav_page === 6666) { echo 'active'; } ?>">
                  <i class="nav-icon fas fa-exclamation-triangle"></i>
                  <p>
                    Work Report
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url()?>admin/staff-report" class="nav-link <?php if($nav_page === 56) { echo 'active'; } ?>">
                  <i class="nav-icon fas fa-exclamation-triangle"></i>
                  <p>
                    Staff Report
                  </p>
                </a>
              </li>
              <li class="nav-item">
                    <a href="<?= base_url()?>admin/beam-report" class="nav-link <?php if($nav_page === 10020) { echo 'active'; } ?>" class="nav-link">
                      <i class="far fa-clock nav-icon"></i>
                      <p>Beam Report</p>
                    </a>
              </li>
       
            </ul>
          </li>
          
      

        <li class="nav-item has-treeview <?php if($nav_page === 10014 || $nav_page === 10015 || $nav_page === 10016)  { echo 'menu-open'; } ?>">
            <a href="<?php if($nav_page === 10014 || $nav_page === 10015 || $nav_page === 10016) { echo 'active'; } ?>" class="nav-link">
            
            <i class="fas fa-paint-brush nav-icon"></i>
            <p>Coating  <i class="right fas fa-angle-left"></i></p>
          </a>
          <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url() ?>admin/coating-add-machine" class="nav-link <?php if($nav_page === 10014) { echo 'active'; } ?>" class="nav-link">
                  <i class="fa fa-list nav-icon"></i>
                  <p>Add Machine</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>admin/coating-allocate" class="nav-link <?php if($nav_page === 10015) { echo 'active'; } ?>" class="nav-link">
                   <i class="fa fa-universal-access nav-icon" aria-hidden="true"></i>
                  <p>Allocate</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?= base_url() ?>admin/coating-report" class="nav-link <?php if($nav_page === 10016) { echo 'active'; } ?>" class="nav-link">
                   <i class="far fa-newspaper nav-icon" aria-hidden="true"></i>
                  <p>Coating Report</p>
                </a>
              </li>
              
             
            </ul> 
        </li>

        <li class="nav-item has-treeview <?php if($nav_page === 50 || $nav_page === 51 || $nav_page === 52) { echo 'menu-open '; } ?> 
        ">
          <a href="<?php if($nav_page === 50 || $nav_page === 51 || $nav_page === 52) { echo 'active'; } ?>" class="nav-link">
            <i class="fas fa-cut  nav-icon"></i>
            <p>Cutting  <i class="right fas fa-angle-left"></i></p>
          </a>
           <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url() ?>admin/cutting-add-machine" class="nav-link <?php if($nav_page === 50) { echo 'active'; } ?>" class="nav-link">
                  <i class="fa fa-list nav-icon"></i>
                  <p>Add Machine</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>admin/cutting-allocate" class="nav-link <?php if($nav_page === 51) { echo 'active'; } ?>" class="nav-link">
                   <i class="fa fa-universal-access nav-icon" aria-hidden="true"></i>
                  <p>Allocate</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="<?= base_url() ?>admin/cutting-report" class="nav-link <?php if($nav_page === 52) { echo 'active'; } ?>" class="nav-link">
                   <i class="far fa-clipboard nav-icon" aria-hidden="true"></i>
                  <p>Cutting Report</p>
                </a>
              </li>
             
            </ul>
        </li>

        <li class="nav-item">
          <a href="<?= base_url() ?>admin/customer" class="nav-link <?php if($nav_page === 9993) { echo 'active'; } ?>" class="nav-link">
            <i class="fa fa-list nav-icon"></i>
            <p>Customers manage</p>
          </a>
        </li>

        <li class="nav-item has-treeview <?php if($nav_page === 9994 || $nav_page === 9995 || $nav_page === 9996 || $nav_page === 9997 || $nav_page === 9998 || $nav_page === 9999 || $nav_page === 10000 || $nav_page === 10001 || $nav_page === 10002 || $nav_page === 10003 || $nav_page === 10004) { echo 'menu-open'; } ?>">
          <a href="<?php if($nav_page === 9994 || $nav_page === 9995 || $nav_page === 9996 || $nav_page === 9997 || $nav_page === 9998 || $nav_page === 9999 || $nav_page === 10000 || $nav_page === 10001 || $nav_page === 10002 || $nav_page === 10003 || $nav_page === 10004) { echo 'active'; } ?>" class="nav-link">
          
            <i class="fas fa-funnel-dollar nav-icon"></i>
            <p>
              Stock
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">

            <li class="nav-item has-treeview <?php if($nav_page === 9999 || $nav_page === 10000 || $nav_page === 10001) { echo 'menu-open'; } ?>">
              <a href="<?php if($nav_page === 9999 || $nav_page === 10000 || $nav_page === 10001) { echo 'active'; } ?>" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Rolls
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url() ?>admin/stock-all-rolls" class="nav-link <?php if($nav_page === 9999) { echo 'active'; } ?>" class="nav-link">
                    <i class="fa fa-list nav-icon"></i>
                    <p>All Rolls</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url()?>admin/stock-rolls-sent" class="nav-link <?php if($nav_page === 10000) { echo 'active'; } ?>" class="nav-link">
                    <i class="far fa-clock nav-icon"></i>
                    <p>Rolls went for Coating</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url()?>admin/stock-rolls-not-sent" class="nav-link <?php if($nav_page === 10001) { echo 'active'; } ?>" class="nav-link">
                    <i class="far fa-clock nav-icon"></i>
                    <p>Rolls yet to be <br> sent for Coating</p>
                  </a>
                </li>
              </ul>
            </li>



            <li class="nav-item has-treeview <?php if($nav_page === 9997 || $nav_page === 9998) { echo 'menu-open'; } ?>">
              <a href="<?php if($nav_page === 9997 || $nav_page === 9998) { echo 'active'; } ?>" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Coating
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url() ?>admin/stock-coated" class="nav-link <?php if($nav_page === 9997) { echo 'active'; } ?>" class="nav-link">
                    <i class="fa fa-list nav-icon"></i>
                    <p>Coated</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url()?>admin/stock-not-coated" class="nav-link <?php if($nav_page === 9998) { echo 'active'; } ?>" class="nav-link">
                    <i class="far fa-clock nav-icon"></i>
                    <p>Not Coated</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item has-treeview <?php if($nav_page === 9995 || $nav_page === 9996) { echo 'menu-open'; } ?>">
              <a href="<?php if($nav_page === 9995 || $nav_page === 9996) { echo 'active'; } ?>" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Cutting
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url() ?>admin/cut-stock" class="nav-link <?php if($nav_page === 9995) { echo 'active'; } ?>" class="nav-link">
                    <i class="fa fa-list nav-icon"></i>
                    <p>Cut</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item has-treeview <?php if($nav_page === 10003 || $nav_page === 10004) { echo 'menu-open'; } ?>">
              <a href="<?php if($nav_page === 10003 || $nav_page === 10004) { echo 'active'; } ?>" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Other stock
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url() ?>admin/other-stock" class="nav-link <?php if($nav_page === 10003) { echo 'active'; } ?>" class="nav-link">
                    <i class="fa fa-list nav-icon"></i>
                    <p>Add Stock</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url() ?>admin/other-stock-report" class="nav-link <?php if($nav_page === 10004) { echo 'active'; } ?>" class="nav-link">
                    <i class="fa fa-list nav-icon"></i>
                    <p>Report</p>
                  </a>
                </li>
              </ul>
            </li>

          </ul>
        </li>



        <li class="nav-item has-treeview <?php if($nav_page === 9993 || $nav_page === 10005 || $nav_page === 10006) { echo 'menu-open'; } ?>">
          <a href="<?php if($nav_page === 9993 || $nav_page === 10005 || $nav_page === 10006) { echo 'active'; } ?>" class="nav-link">
          <i class="fas fa-balance-scale nav-icon"></i>
            <p>
              Sales
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url() ?>admin/customer" class="nav-link <?php if($nav_page === 9993) { echo 'active'; } ?>" class="nav-link">
                <i class="fa fa-list nav-icon"></i>
                <p>Customers manage</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url() ?>admin/add-sales" class="nav-link <?php if($nav_page === 10005) { echo 'active'; } ?>">
                <i class="fas fa-user-cog nav-icon"></i>
                <p>Add Sales</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url() ?>admin/sales" class="nav-link <?php if($nav_page === 10006) { echo 'active'; } ?>">
                <i class="fas fa-user-cog nav-icon"></i>
                <p>Sales Report</p>
              </a>
            </li>
          </ul>
        </li> -->




        <li class="nav-item">
          <a href="<?= base_url() ?>admin/setting" class="nav-link <?php if($nav_page === 60) { echo 'active'; } ?>">
            <i class="fas fa-user-cog nav-icon"></i>
            <p>Setting</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url() ?>admin/set-lockscreen" class="nav-link">
            <i class="fas fa-lock nav-icon"></i>
            <p>Lockscreen</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= base_url() ?>admin/logout" class="nav-link <?php if($nav_page === 99) { echo 'active'; } ?>">
            <i class="fas fa-sign-out-alt nav-icon"></i>
            <p>Logout</p>
          </a>
        </li>

         


            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>