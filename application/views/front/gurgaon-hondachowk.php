
    <div id="maps">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.6660498998554!2d77.01794971440216!3d28.42933190000077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1805a0d0d251%3A0x4c5d0937e78df4bf!2sHonda%20Chowk%2C%20Sector%2033%2C%20Gurugram%2C%20Haryana%20122022!5e0!3m2!1sen!2sin!4v1626181939121!5m2!1sen!2sin"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class="container container1 container2">
        <?php foreach ($all_rows as $key => $value): ?>
            <?php if($value->ghc_section == 1): ?>
        <h2 class="ds-h2<?= ($key==0)?'':'-sub'  ?>">
            <?= $value->ghc_title ?>
        </h2>
        <p style="text-align: justify;"><?= nl2br($value->ghc_desc) ?></p>
        <?php if(!empty($value->ghc_image)): ?>
            <img class="mt-2 mb-3 img1" src="<?= base_url() ?><?= $value->ghc_image ?>" alt="">
        <?php endif; ?>
            <?php endif; ?>
        <?php endforeach ?>
    </div>
   <!-- <div class="container container1">
        <h2 class="ds-h2-sub">
            Where Can I Find a Let Us Store in Gurgaon- Honda chowk
        </h2>
        <p>Let Us Store Warehouse India’s Gurgaon- Honda chowk warehouse is one out of three gigantic facilities that we
            operate for
            the residents of Delhi NCR. Our immaculately clean Let Us Store in Gurgaon- Honda chowk is conveniently
            located close to
            the Wave City metro station and sits amidst Gurgaon- Honda chowk’s new abode for most businesses.</p>
    </div> -->
    <div class="container container1">
        <p>Here are some advantages of picking a Let Us Store unit with Let Us Store Warehouse India.</p>
           <?php foreach ($all_rows as $key => $value): ?>
               <?php if($value->ghc_section == 2): ?>
           <h3 class="ds-h2-small">
               <?= $value->ghc_title ?>
           </h3>
           <p style="text-align: justify;"><?= nl2br($value->ghc_desc) ?></p>
           <?php if(!empty($value->ghc_image)): ?>
               <img class="mt-2 mb-3 img1" src="<?= base_url() ?><?= $value->ghc_image ?>" alt="" style="width:200px;height:200px;">
           <?php endif; ?>
               <?php endif; ?>
           <?php endforeach ?>    
 

    </div>

   