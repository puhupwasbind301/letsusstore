

 <div class="page-title-area style-four"
  style="background-image: url(<?= base_url().$banner_image ?>);background-size:cover;"  
  >
    <div class="container">
      <div class="page-title-content text-start">
        <h2 class="ds-h2">Distribution Services</h2>
      <!--   <ul>
          <li><a href="<?= base_url() ?>">Home</a></li>
          <li>Distribution Services</li>
        </ul> -->
      </div>
    </div>
  </div>



  <div class="marketing-about-area ptb-100">
    <div class="container container1">
      <h2 class="ds-h2 text-center"><?= $first_row->d_title ?></h2>
      <div class="row">
        <div class="col-lg-6">
          <div class="marketing-about-image">
            <img src="<?= base_url() ?><?= $first_row->d_image ?>" alt="image" class="ceo-img">
          </div>
        </div>
        <div class="col-lg-6 row1">
          <p>
            <?= nl2br($first_row->d_desc) ?>
           </p> 
        </div>

        <?php foreach ($other_rows as $key => $value): ?>
               <h2 class="ds-h2-sub text-center"><?= $value->d_title ?></h2>
                 <?php if(!empty($value->d_image)): ?>
                 <div class="row">
                   <?php if($key % 2 == 0){ ?>
                   <div class="col-lg-6 row1">
                        <p class="align-justify">
                         <?= nl2br($value->d_desc) ?>
                       </p>
                   </div>
                   <?php } ?>
                   <div class="col-lg-6">
                     <div class="marketing-about-image">
                       <img src="<?= base_url() ?><?= $value->d_image ?>" alt="image" class="ceo-img">
                     </div>
                   </div> 
                   <?php if($key % 2 != 0){ ?>
                   <div class="col-lg-6 row1">
                        <p class="align-justify">
                         <?= nl2br($value->d_desc) ?>
                       </p>
                   </div>
                   <?php } ?>
                 </div>
                 <?php else: ?>    
                 <p><?= nl2br($value->d_desc) ?></p>
                 <?php endif; ?>
             <?php endforeach ?> 
      </div>
    </div>
  </div>

<!--   <div class="marketing-about-area ptb-100">
    <div class="container container1">
      <h2 class="ds-h2 text-center">Distribution Services</h2>
      <div class="row">
        <div class="col-lg-6">
          <div class="marketing-about-image">
            <img src="<?= base_url().'uploads/banner_image/'.'bts.jpg' ?>" alt="image" class="ceo-img">
          </div>
        </div>
        <div class="col-lg-6 row1">
          
          <p>Our  Distribution Services encompass almost all the destinations’ network distribution for the ease of our clients. Our clients will benefit from a wide range of value-added services which include but are not limited to: stock management, bar-coding, co-packing, customization services, pricing/labelling, procurement process, trans-loading & transportation, perpetual inventory management, physical flow/goods flow analysis, post-production services, and domestic transport networks.
          </p>

            <ul>
              <li class="lead">Complete supply change management </li>
              <li class="lead">Pick and Pack</li>
              <li class="lead">Repacking and other services </li>
              <li class="lead">Real time inventory visibility</li>
              <li class="lead">In time delivery</li>
              <li class="lead">Order fulfilment</li>
              <li class="lead">Well maintained distribution logistics</li>
              <li class="lead">Quality check and control , etc.</li>
            </ul>



        </div>

       <h2 class="ds-h2-sub text-center">Primary Service</h2>
          <p>Our primary services consists of

 </p>

 <ul>
   <li class="lead">Interstate transportation
</li>
   <li class="lead">Port to plant movement
</li>
   <li class="lead">Port & terminal to interstate warehouses
</li>
   <li class="lead">Ability to deploy any size of vehicle as per the consignment
</li>
 </ul>


    <h2 class="ds-h2-sub text-center">Secondary Services</h2>
          <p> Our secondary services have


 </p>

 <ul>
   <li class="lead">Plant to distributor point.

</li>
   <li class="lead">Distributor to further stockiest & retailers.

</li>
   <li class="lead">Warehouse to various remote location & on site delivery.

</li>
   <li class="lead">Intra circle & state transportation.

</li>
 </ul>



     <h2 class="ds-h2-sub text-center">D2C Services</h2>
          <p>(DIRECT-TO-CUSTOMER) helps our customers with


 </p>

 <ul>
   <li class="lead">Increased control over brand messaging and consumer engagement.


</li>
   <li class="lead">Direct access to customers and their data. 


</li>
   <li class="lead">Gain higher margins.


</li>
   <li class="lead">Stronger brand loyalty.


</li>
<li>Expands market opportunities.
</li>
 </ul>

      </div>
      

    </div>
  </div>



 -->