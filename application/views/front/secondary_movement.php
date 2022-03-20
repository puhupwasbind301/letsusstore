

 <div class="page-title-area style-four"
  style="background-image: url(<?= base_url().$banner_image ?>);background-size:cover;"  
  >
    <div class="container">
      <div class="page-title-content text-start">
        <h2 class="ds-h2">Secondary Service</h2>
        <!-- <ul>
          <li><a href="<?= base_url() ?>">Home</a></li>
          <li>Secondary Service</li>
        </ul> -->
      </div>
    </div>
  </div>


  <div class="marketing-about-area ptb-100">
    <div class="marketing-about-area ptb-100">
      <div class="container container1">
        <h2 class="ds-h2 text-center"><?= $first_row->p_title ?></h2>
        <div class="row">
          <div class="col-lg-6">
            <div class="marketing-about-image">
              <img src="<?= base_url() ?><?= $first_row->p_image ?>" alt="image" class="ceo-img">
            </div>
          </div>
          <div class="col-lg-6 row1">
            <!-- <h2 c>Helping you De-Clutter your Home and Office</h2> -->
            <p class="text-justify">
              <?= nl2br($first_row->p_desc) ?>
            </p>
          </div>
        </div>
        <?php foreach ($other_rows as $key => $value): ?>
               <h2 class="ds-h2-sub text-center"><?= $value->p_title ?></h2>
                 <?php if(!empty($value->p_image)): ?>
                 <div class="row">
                   <?php if($key % 2 == 0){ ?>
                   <div class="col-lg-6 row1">
                        <p class="align-justify">
                         <?= nl2br($value->p_desc) ?>
                       </p>
                   </div>
                   <?php } ?>
                   <div class="col-lg-6">
                     <div class="marketing-about-image">
                       <img src="<?= base_url() ?><?= $value->p_image ?>" alt="image" class="ceo-img">
                     </div>
                   </div> 
                   <?php if($key % 2 != 0){ ?>
                   <div class="col-lg-6 row1">
                        <p class="align-justify">
                         <?= nl2br($value->p_desc) ?>
                       </p>
                   </div>
                   <?php } ?>
                 </div>
                 <?php else: ?>    
                 <p><?= nl2br($value->p_desc) ?></p>
                 <?php endif; ?>
             <?php endforeach ?>
      </div>
    </div>

<!-- 
  <div class="marketing-about-area ptb-100">
    <div class="container container1">
      <h2 class="ds-h2 text-center">Secondary Service</h2>
      <div class="row">
        <div class="col-lg-6">
          <div class="marketing-about-image">
            <img src="<?= base_url().'uploads/banner_image/'.'3.jpg' ?>" alt="image" class="ceo-img">
          </div>
        </div>
        <div class="col-lg-6 row1">
          
          <p>Secondary Services: Our secondary services have
</p>
<ul>
  <li class="lead">Plant to distributor point. </li>
  <li class="lead">Distributor to further stockiest & retailers.</li>
  <li class="lead">Warehouse to various remote location & on site delivery.</li>
  <li class="lead">Intra circle & state transportation.</li>
</ul>
        </div>
      </div>


    </div>
  </div>



 -->