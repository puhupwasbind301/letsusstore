<?php foreach ($main_section as $key => $value): ?>
   <div class="business-banner-area">
         <div class="container">
            <div class="row align-items-center">
          <?php if($key%2!==0): ?>
                    <div class="col-lg-5 col-md-12">
                      <div class="business-banner-image">
                        <img src="<?= base_url().$value->home_image ?>" alt="image">
                        <div class="shape11"><img src="<?= base_url() ?>assets/img/shape/shape11.png" alt="image"></div>
                        <div class="shape12"><img src="<?= base_url() ?>assets/img/shape/shape12.png" alt="image"></div>
                      </div>
                    </div>
        <?php endif; ?>
        <div class="col-lg-7 col-md-12">
          <div class="business-banner-content">
           
                <span class="sub-title">
                  <?= $value->home_title_heading ?>
                  </span>
            
            <?php if($key==0): ?>
                <h1><?= $value->home_title ?></h1>
            <?php else: ?>
                <h2 class="ds-h2"> <?= $value->home_title ?></h2> 
            <?php endif; ?>
            <p><?= $value->home_desc ?></p>

          

            <?php if($value->home_link_name == 'Benefits'){  ?>
            <button data-toggle="collapse" data-target="#benefits" class="default-btn business-color"><?= $value->home_link_name ?> 
               <a href="<?= $value->home_link ?>"><i class="fas fa-chevron-right"></i></a>
             </button>
           <?php } else { ?>
            <a href="<?= $value->home_link ?>"><button  class="default-btn business-color"><?= $value->home_link_name ?> 
               <i class="fas fa-chevron-right"></i>
             </button></a>
           <?php } ?>
            
           <div id="benefits" class="collapse m-3">
           <?php foreach ($benefits as $key2 => $benefit) { ?>
              <h3><?= $benefit->benefit_title ?></h3>
              <p>
                <?= $benefit->benefit_desc ?>
              </p>
            <?php } ?>
           </div>


          </div>
        </div>
        <?php if($key%2==0): ?>
        <div class="col-lg-5 col-md-12">
          <div class="business-banner-image">
            <img src="<?= base_url().$value->home_image ?>" alt="image">
          </div>
        </div>
      <?php endif; ?>
      </div>
    </div>
    <!-- <div class="shape13"><img src="<?= base_url() ?>assets/img/shape/shape13.png" alt="image"></div> -->
  </div>
 <?php endforeach ?> 


