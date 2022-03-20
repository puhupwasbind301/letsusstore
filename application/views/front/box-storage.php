
    <div class="page-title-area style-four bg7" style="background-image: url(<?= base_url().$banner_image ?>);background-size: cover;">
        <div class="container">
            <div class="page-title-content text-start">
                <h2 class="ds-h2">Box Storage</h2>
                <!-- <ul>
                    <li><a href="<?= base_url() ?>">Home</a></li>
                    <li>Box Storage</li>
                </ul> -->
            </div>
        </div>
    </div>
<!-- 
      <div class="container container1 pb-4">
         <h2 class="ds-h2-sub">Box Storages
</h2>
        <p>We offer self-storage wooden boxes, seaworthy packing boxes, Cargo boxes, Heavy Machinery Packaging boxes,etc . 
</p>
    </div> -->

    <div class="container container1 container2">
       <?php foreach ($all_rows as $key => $value): ?>
       <h2 class="ds-h2"><?= $value->bs_title ?></h2>
           <p class="" style="text-align: justify;">
               <?= $value->bs_desc ?>
           </p>
           <?php if(!empty($value->bs_image)): ?>
               <img class="mt-2 mb-3 img1" src="<?= base_url() ?><?= $value->bs_image ?>" alt="">
           <?php endif; ?>
       <?php endforeach ?> 
    </div> 
  <!--   <div class="container container1">
        <?php foreach ($two_row as $key => $value): ?>
            <?php if($key==0): ?>
        <h2 class="ds-h2">
            <?php else: ?>
        <h2 class="mt-4 mb-2 ds-h2-sub">
            <?php endif; ?>                
            Box Storage
        </h2> -->
       <!--  <p class="mt-3 fs-5 " style="text-align:justify;">
           <?= $value->bs_desc ?>
        </p> -->
           <!--  <?php if(!empty($value->bs_image)): ?>
                <img src="<?= base_url() ?><?= $value->bs_image ?>" alt="" class="img1">
            <?php endif; ?>
        <?php endforeach ?> -->

       <!--  <p class="mt-5 fs-5">
            Here are some tips on stacking things in your box storage unit:
        </p> -->
       <!--  <?php foreach ($other_rows as $key => $value): ?>
        <div class="row left_img">
            <?php if($key%2==0): ?>
            <div class="col-lg-6">
                <img src="<?= base_url() ?><?= $value->bs_image ?>" alt="" class="img2">
            </div>
            <?php endif; ?>

            <div class="col-lg-6">
                <h2 class="ds-h2-sub">
                    1. Place heavy boxes at the bottom
                </h2> 
                <p class="mt-3 fs-5" style="text-align:justify;">
                    <?= nl2br($value->bs_desc) ?>
                </p> 
            </div>   
            <?php if($key%2!==0 ): ?>
                 <div class="col-lg-6">
                    <img src="<?= base_url() ?><?= $value->bs_image ?>" alt="" class="img2">
                </div>
            <?php endif; ?>
        </div>
        <?php endforeach; ?> -->
    


        <!-- <img src="<?= base_url() ?>assets/img/box-storage1.jpg" alt="" class="img1"> -->
    <!--     <h2 class="ds-h2-sub">Box Storage Benefits</h2>
        <p class="mt-2 fs-5">
            When you rent a box storage unit with Let Us Store, you can access a range of amenities. It includes:
        </p>
        <h3 class="ds-h2-small">
            Plastic Pallets
        </h3>
        <p class="mt-3 fs-5">
            To give maximum comfort for your boxes, Let Us Store provides complimentary plastic pallets on which
            you can store your boxes. These pallets ensure that your packages are off the ground and get adequate airing
            under and around them. This prevents moisture from accumulating on them and damaging the contents inside.
        </p>
        <h3 class="ds-h2-small">
            High Security
        </h3>
        <p class="mt-3 fs-5">
            Our warehouses are guarded 24x7 by patrolling watchmen. We also have CCTVs installed everywhere which
            continuously monitor the premises. All the units are secured with the keys only with the lessee and his
            nominee.
        </p>
        <h3 class="ds-h2-small">
            Top-notch Hygiene
        </h3>
        <p class="mt-3 fs-5">
            Our premises are regularly cleaned and sanitized, in keeping with all required SOPs. We also request our
            customers to follow all Covid-19 measures such as sanitizing their hands, maintaining social distancing and
            wearing a mask at all times.
        </p>
        <p class="mt-3 fs-5">
            Get a box storage space for yourself today and get a more fulfilling home environment. To know more about
            rent with Let Us Store, you can WhatsApp, email, or call us. You can even chat with our online
            executives or drop by the FAQ page.
        </p>
 -->
    <!-- </div> -->
   <!--  <hr class="mt-5 mb-3"> -->
  