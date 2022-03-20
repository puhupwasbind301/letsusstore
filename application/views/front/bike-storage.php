
    <div class="page-title-area style-four bg9" style="background-image: url(<?= base_url().$banner_image ?>);background-size: cover;">
        <div class="container">
            <div class="page-title-content text-start">
                <h2 class="ds-h2">Document Storage</h2>
                <!-- <ul>
                    <li><a href="<?= base_url() ?>">Home</a></li>
                    <li>Document Storage</li>
                </ul> -->
            </div>
        </div>
    </div>
     <div class="container container1 container2">
           <?php foreach ($all_rows as $key => $value): ?>
           <h2 class="ds-h2"><?= $value->bks_title ?></h2>
               <p class="" style="text-align: justify;">
                   <?= $value->bks_desc ?>
               </p>
               <?php if(!empty($value->bks_image)): ?>
                   <img class="mt-2 mb-3 img1" src="<?= base_url() ?><?= $value->bks_image ?>" alt="">
               <?php endif; ?>
           <?php endforeach ?> 
    </div> 

<!--     <div class="container container1">
        
        <h2 class="mt-5 ds-h2<?= ($key==0)?'':'-sub' ?>">Document Storage</h2>
        <p class="mt-3 fs-5">
            Our document management speeds the retrieval and access of paper documents so that staff can answer questions faster and warehouse inventory can move quicker.  With our document storage, you can restrict access as necessary and often find out who has viewed or modified a document at any time.
        </p>
        
       <!--  <img src="<?= base_url().'uploads/banner_image/'.$this->session->userdata("page-name").'_old.jpg' ?>" alt="image" class="img1">
         -->
        
        
        
    <!-- </div> -->
    <!-- <hr class="mt-5 mb-3">  -->
   