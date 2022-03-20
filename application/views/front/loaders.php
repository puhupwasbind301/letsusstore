

 <div class="page-title-area style-four"
  style="background-image: url(<?= base_url().$banner_image ?>);background-size:cover;"  
  >
    <div class="container">
      <div class="page-title-content text-start">
        <h2 class="ds-h2">Loaders</h2>
        <!-- <ul>
          <li><a href="<?= base_url() ?>">Home</a></li>
          <li>Loaders</li>
        </ul> -->
      </div>
    </div>
  </div>



  

  <div class="marketing-about-area ptb-100">
    <div class="container container1">
      <h2 class="ds-h2 text-center"><?= $first_row->l_title ?></h2>
      <div class="row">
        <div class="col-lg-6">
          <div class="marketing-about-image">
            <img src="<?= base_url() ?><?= $first_row->l_image ?>" alt="image" class="ceo-img">
          </div>
        </div>
        <div class="col-lg-6 row1">
          <!-- <h2 c>Helping you De-Clutter your Home and Office</h2> -->
          <p class="text-justify">
            <?= nl2br($first_row->l_desc) ?>
        </p>
        </div>
      </div>
      <?php foreach ($other_rows as $key => $value): ?>
             <h2 class="ds-h2-sub text-center"><?= $value->l_title ?></h2>
               <?php if(!empty($value->l_image)): ?>
               <div class="row">
                 <?php if($key % 2 == 0){ ?>
                 <div class="col-lg-6 row1">
                      <p class="align-justify">
                       <?= nl2br($value->l_desc) ?>
                     </p>
                 </div>
                 <?php } ?>
                 <div class="col-lg-6">
                   <div class="marketing-about-image">
                     <img src="<?= base_url() ?><?= $value->l_image ?>" alt="image" class="ceo-img">
                   </div>
                 </div> 
                 <?php if($key % 2 != 0){ ?>
                 <div class="col-lg-6 row1">
                      <p class="align-justify">
                       <?= nl2br($value->l_desc) ?>
                     </p>
                 </div>
                 <?php } ?>
               </div>
               <?php else: ?>    
               <p><?= nl2br($value->l_desc) ?></p>
               <?php endif; ?>
           <?php endforeach ?>
    </div>
  </div>




