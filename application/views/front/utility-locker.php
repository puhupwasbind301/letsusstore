
    <div class="page-title-area style-four bg8" style="background-image: url(<?= base_url().$banner_image ?>);background-size: cover;">
        <div class="container">
            <div class="page-title-content text-start">
                <h2 class="ds-h2">Utility Locker</h2>
               <!--  <ul>
                    <li><a href="<?= base_url() ?>">Home</a></li>
                    <li>Utility Locker</li>
                </ul> -->
            </div>
        </div>
    </div>

  <!--    <div class="container container1 pb-4">
         <h2 class="ds-h2-sub">Utility Lockers
</h2>
        <p>For the ultimate safety and protection of your belongings trust our Utility lockers. The sturdy cabinets are built with steel and have ideal space
</p>
    </div> -->

    <div class="container container1 container2">
          <?php foreach ($all_rows as $key => $value): ?>
          <h2 class="ds-h2"><?= $value->ul_title ?></h2>
              <p class="" style="text-align: justify;">
                  <?= $value->ul_desc ?>
              </p>
              <?php if(!empty($value->ul_image)): ?>
                  <img class="mt-2 mb-3 img1" src="<?= base_url() ?><?= $value->ul_image ?>" alt="">
              <?php endif; ?>
          <?php endforeach ?> 
   </div> 
   
 <!--    <div class="container container1">
        <?php foreach ($all_rows as $key => $value): ?>
        <h2 class="mt-5 text-center"><?= $value->ul_title ?></h2>
        <div class="row mt-5 rounded">
            <div class="col-lg-6">
                <img src="<?= base_url() ?><?= $value->ul_image ?>" alt="" class="img1">
            </div>
            <div class="col-lg-6 col1">
                <p class="mt-5 fs-5" style="text-align:justify;">
                    <?= $value->ul_desc ?>
                 </p>   
            </div>
        </div>
        <?php endforeach; ?>


    </div> -->
  <!--   <hr class="mt-5 mb-3"> -->
    