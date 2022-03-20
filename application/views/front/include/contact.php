<section class="contact-area pt-100 pb-70">
     <div class="container">
         <div class="row">


             <div class="col-lg-3 col-sm-6 col-md-6">
                 <div class="single-contact-info-box">
                     <div class="icon">
                         <i class='fas fa-map-marker-alt'></i>
                     </div>
                     <h3>Address</h3>
                     <p><?= $contact_table->cu_address ?>
                     </p>
                 </div>
             </div>
             <div class="col-lg-3 col-sm-6 col-md-6">
                 <div class="single-contact-info-box">
                     <div class="icon">
                         <i class='fas fa-phone-volume'></i>
                     </div>
                     <h3>Phone</h3>
                     <?php 
                            $mobile = explode('|',$contact_table->cu_phone);
                            foreach ($mobile as $key => $value) {
                               if(!empty($value)){    
                      ?>
                     <p><a href="tel:<?= $value ?>">Phone: <?= $value ?></a></p>
                     <!-- <p><a href="<?= base_url() ?>tel:+55587154756">Fax: +91 000 000 0000</a></p> -->
                            <?php }} ?>
                 </div>
             </div>
             <div class="col-lg-3 col-sm-6 col-md-6">
                 <div class="single-contact-info-box">
                     <div class="icon">
                         <i class='far fa-envelope'></i>
                     </div>
                     <h3>Email</h3>
                     <?php 
                         $email = explode(' ',$contact_table->cu_email);
                         foreach ($email as $key => $value) {
                            if(!empty($value)){     
                      ?>
                     <p><a
                             href="mail:<?= $value ?>"><span
                                 class="__cf_email__"
                                 data-cfemail="f69e939a9a99b698999d93d895999b"><?= $value ?></span></a>
                     </p>
                     <?php }
                         } ?>
                  <!--    <p><a
                             href="<?= base_url() ?>https://templates.envytheme.com/cdn-cgi/l/email-protection#036d6c6866436b666f6f6c2d606c6e"><span
                                 class="__cf_email__"
                                 data-cfemail="5f3130343a1f373a333330713c3032">[email&#160;protected]</span></a>
                     </p> -->
                 </div>
             </div>
             <div class="col-lg-3 col-sm-6 col-md-6">
                 <div class="single-contact-info-box">
                     <div class="icon">
                         <i class='fas fa-hourglass-half'></i>
                     </div>
                     <h3>Working Hours</h3>
                     <pre><p><?= $contact_table->cu_working_hours ?></p></pre>
                 </div>
             </div>



         </div>
     </div>
 </section>
 <hr class="mt-5 mb-3">
 