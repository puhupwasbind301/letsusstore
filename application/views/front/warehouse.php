

 <div class="page-title-area style-four"
  style="background-image: url(<?= base_url().$banner_image ?>);background-size:cover;"  
  >
    <div class="container">
      <div class="page-title-content text-start">
        <h2 class="ds-h2">Warehouse</h2>
        <!-- <ul>
          <li><a href="<?= base_url() ?>">Home</a></li>
          <li>Warehouse</li>
        </ul> -->
      </div>
    </div>
  </div>



  <div class="marketing-about-area ptb-100">
    <div class="container container1">
      <h2 class="ds-h2 text-center"><?= $first_row->w_title ?></h2>
      <div class="row">
        <div class="col-lg-6">
          <div class="marketing-about-image">
            <img src="<?= base_url() ?><?= $first_row->w_image ?>" alt="image" class="ceo-img">
          </div>
        </div>
        <div class="col-lg-6 row1">
          <!-- <h2 c>Helping you De-Clutter your Home and Office</h2> -->
          <!-- <p class="align-justify" >Are you seeking for the ideal location to store your merchandise? With superior <b>warehouse and logistics</b> services and effective inventory management? If that's the case, you've come to the correct spot. Letsusstore is the best place to go for Custom Warehouse Solutions that will meet your shipping needs. We have trained manpower to help and <b>manage warehouses</b> .We provide <b>warehouses on rent</b> ,you can also <b>rent a godown</b>with us.

        </p> -->
         <p class="align-justify">
          <?= nl2br($first_row->w_desc) ?>
        </p>
      <!--   <p>We provide <b>PanIndia warehousing services</b> that are of the highest quality and take the utmost care of your assets.Our services are strengthened by a team of highly experienced experts. Our extensive industry knowledge, in-depth market research, and continuous dedication to quality have resulted in timely and efficient shipping across the country. We're also dedicated to providing you with safe and secure services, including 24-hour security, fire extinguisher, and hydrant, CCTV monitoring, a convenient location, and customer service.
         </p>

          <p>We pledge that we will not make any inaccuracies! With precise and effective inventory management, essential activities and correct handling of goods, optimum selection of items with the best space usage, we will take care of your treasures. We will do all possible to protect and care for your belongings. We have warehouses in a variety of cities, and <b>warehouses near me</b> will show you the closest one to your home.
</p> -->
        </div>

      </div>
      
      <?php foreach ($other_rows as $key => $value): ?>
        <h2 class="ds-h2-sub text-center"><?= $value->w_title ?></h2>
          <?php if(!empty($value->w_image)): ?>
          <div class="row">
            <?php if($key % 2 == 0){ ?>
            <div class="col-lg-6 row1">
                 <p class="align-justify">
                  <?= nl2br($value->w_desc) ?>
                </p>
            </div>
            <?php } ?>
            <div class="col-lg-6">
              <div class="marketing-about-image">
                <img src="<?= base_url() ?><?= $value->w_image ?>" alt="image" class="ceo-img">
              </div>
            </div> 
            <?php if($key % 2 != 0){ ?>
            <div class="col-lg-6 row1">
                 <p class="align-justify">
                  <?= nl2br($value->w_desc) ?>
                </p>
            </div>
            <?php } ?>
          </div>
          <?php else: ?>    
          <p><?= nl2br($value->w_desc) ?></p>
          <?php endif; ?>
      <?php endforeach ?> 
        


        
      

    </div>
  </div>



