

 <div class="page-title-area style-four"
  style="background-image: url(<?= base_url().$banner_image ?>);background-size:cover;"  
  >
    <div class="container">
      <div class="page-title-content text-start">
        <h2 class="ds-h2">Storage</h2>
        <!-- <ul>
          <li><a href="<?= base_url() ?>">Home</a></li>
          <li>Software</li>
        </ul> -->
      </div>
    </div>
  </div>


  <div class="marketing-about-area ptb-100">
    <div class="container container1">
      <h2 class="ds-h2 text-center"><?= $first_row->s_title ?></h2>
      <div class="row">
        <div class="col-lg-6">
          <div class="marketing-about-image">
            <img src="<?= base_url() ?><?= $first_row->s_image ?>" alt="image" class="ceo-img">
          </div>
        </div>
        <div class="col-lg-6 row1">
          <p>
            <?= $first_row->s_desc ?>
           </p> 
        </div>

        <?php foreach ($other_rows as $key => $value): ?>
               <h2 class="ds-h2-sub text-center"><?= $value->s_title ?></h2>
                 <?php if(!empty($value->s_image)): ?>
                 <div class="row">
                   <?php if($key % 2 == 0){ ?>
                   <div class="col-lg-6 row1">
                        <p class="align-justify">
                         <?= nl2br($value->s_desc) ?>
                       </p>
                   </div>
                   <?php } ?>
                   <div class="col-lg-6">
                     <div class="marketing-about-image">
                       <img src="<?= base_url() ?><?= $value->s_image ?>" alt="image" class="ceo-img">
                     </div>
                   </div> 
                   <?php if($key % 2 != 0){ ?>
                   <div class="col-lg-6 row1">
                        <p class="align-justify">
                         <?= nl2br($value->s_desc) ?>
                       </p>
                   </div>
                   <?php } ?>
                 </div>
                 <?php else: ?>    
                 <p><?= nl2br($value->s_desc) ?></p>
                 <?php endif; ?>
             <?php endforeach ?>

      </div>
    </div>
  </div>





<!--   <div class="marketing-about-area ptb-100">
    <div class="container container1">
      <h2 class="ds-h2 text-center">Storage</h2>
      <div class="row">
        <div class="col-lg-6">
          <div class="marketing-about-image">
            <img src="<?= base_url().'uploads/banner_image/'.'17.jpg' ?>" alt="image" class="ceo-img">
          </div>
        </div>
       
        <div class="col-lg-6 row1">
          
          <p>At Letusstore storage is one of the most essential components and that is what helps us in smooth functioning. Our warehouse facility is a safe storage option in Delhi , with Delhi being the hub of many big companies helps our clients with easy trading and also save a business a Great Deal of Money.
          </p>
          <p>We have a cold storage unit too that lowers the deterioration rate of perishable products.
          </p>
          <p>For safe storage we have services like 
          </p>

<ul>
  <li>Pickup from Door Step </li>
  <li>Fire management 
</li>
  <li>CCTV observance 
</li>
  <li>24/7 Security ,etc.
</li>
</ul>
        </div>
        <div class="col-lg-12 row1">
         <h2 class="ds-h2-sub text-center">Private Rooms</h2>
          <p>Inventory management system  Our private self-storage rooms are positioned in prime area , they offer safety, security, and cleanliness. Our Self-storage private rooms are best for all your business storage requirements.
</p>
        </div>

          <div class="col-lg-12 row1">
         <h2 class="ds-h2-sub text-center">Box Stroges</h2>
          <p>We offer self-storage wooden boxes, seaworthy packing boxes, Cargo boxes, Heavy Machinery Packaging boxes,etc . 
</p>
        </div>

          <div class="col-lg-12 row1">
         <h2 class="ds-h2-sub text-center">Utility Lockers</h2>
          <p>For the ultimate safety and protection of your belongings trust our Utility lockers. The sturdy cabinets are built with steel and have ideal space.

</p>
        </div>

          <div class="col-lg-12 row1">
         <h2 class="ds-h2-sub text-center">Document Storage</h2>
          <p>Our document management speeds the retrieval and access of paper documents so that staff can answer questions faster and warehouse inventory can move quicker.  With our document storage, you can restrict access as necessary and often find out who has viewed or modified a document at any time.
</p>
        </div>
      </div>


    </div>
  </div> -->



