
    <div class="page-title-area style-four bg6" style="background-image: url(<?= base_url().$banner_image ?>);background-size: cover;">
        <div class="container">
            <div class="page-title-content text-start">
                <h2 class="ds-h2">Private Rooms</h2>
              <!--   <ul>
                    <li><a href="<?= base_url() ?>#">Home</a></li>
                    <li>Private Rooms</li>
                </ul> -->
            </div>
        </div>
    </div>

 <!--    <div class="container container1 pb-4">
         <h2 class="ds-h2-sub">Private Rooms
</h2>
        <p>Our private self-storage rooms are positioned in prime area , they offer safety, security, and cleanliness. Our Self-storage private rooms are best for all your business storage requirements.
</p>
    </div> -->
     <div class="container container1 container2">
        <?php foreach ($all_rows as $key => $value): ?>
        <h2 class="ds-h2"><?= $value->pr_title ?></h2>
            <p class="" style="text-align: justify;">
                <?= $value->pr_desc ?>
            </p>
            <?php if(!empty($value->pr_image)): ?>
                <img class="mt-2 mb-3 img1" src="<?= base_url() ?><?= $value->pr_image ?>" alt="">
            <?php endif; ?>
        <?php endforeach ?> 
     </div>   
      <!--   <p class="">
            Whether you’re an individual looking for home solutions or an organization with corporate-level
            requirements, getting your own Let Us Store private rooms can free up not only your living area but also
            your mind.
        </p>
        <p class="">
            Extra space is something we all crave for. We offer the ideal way for you to safely store your items and
            live your life. While your goods are under our care and watch, you can experience life to the fullest.
        </p>

        <h2 class="ds-h2-sub">What Can You Store in Private Rooms</h2>

        <p class="">
            Whether you need to store furniture, precious items, valuables, documents, delicate items, machines,
            equipment, etc., you can enjoy a hassle-free experience when you rent private rooms with us. These rooms are
            spacious and secured so that you can forget all your stress once you drop your items and leave.
        </p>
        <p class="">Depending on your needs, you can decide how you want to use it. If your home is undergoing
            a temporary renovation, you can lease a room. If you wish to keep a room to yourself as a secondary storage
            room, we have long-term plans.</p>
        <img class="mt-2 mb-3 img1" src="<?= base_url() ?>assets//img//private-rooms.jpg" alt="">
        <p class="">Let Us Store’s rooms are the most sought-after in Delhi NCR. Our state-of-the-art
            private rooms are window-less, walled with corrugated metal, and lockable. Each unit comes with a minimum
            5-foot entry providing ease of admittance. With such top-class quality, you never have to fear once you’ve
            stored your items safely.</p>
        <p class="">Our rooms come in various sizes, making it easier for you to find one that suits your needs
            and budget. No matter what room size, all of them have high ceilings. Room sizes vary from 48 sq. ft to 290
            sq. ft.</p>
        <h2 class="ds-h2-sub">Benefits of Renting Private Rooms</h2>
        <p class="">
            Renting with us comes with a host of benefits. Let Us Store’s attempts are at providing the best
            Let Us Store experience for you. We offer several services that will convince you of how seriously we take
            our job.
        </p>
        <h3 class="ds-h2-small">24/7 Security</h3>
        <p class="">
            The security of the premises is one of our main goals. We never compromise on security. Guards, at all
            times, vigilantly patrol the warehouse. We also have CCTV cameras to monitor the area.
        </p>
        <h3 class="ds-h2-small">Restricted Access</h3>
        <p class="">
            Access to our warehouse is tightly controlled. When you sign your agreement, you will be requested to
            nominate another person who can enter the room. Only you and your nominee will be provided entry.
        </p>
        <h3 class="ds-h2-small">Insurance</h3>
        <p class="">
            Let Us Store also provides complimentary insurance when you rent private rooms. Your stock is insured
            against fire risk, RSMD risk, earthquakes, and burglary.
        </p>
        <h3 class="ds-h2-small">Pest Control</h3>
        <p class="">
            The entire facility is treated for pest control (including termites) on an ongoing monthly basis, including
            the exterior of the building perimeter. We also provide complimentary pest and termite spraying inside
            individual private rooms when your visit/renting date coincides with our regularly scheduled pest control
            dates.
        </p>
        <h3 class="ds-h2-small">Prohibited Items</h3>
        <p class="">
            We strictly prohibit the storage of perishable goods, eating, and drinking on-site to reduce infestation
            chances in the warehouses. This ensures that the premises stay clean and your goods are safe from any harm
            or damage. Customers are also not permitted to store any inflammable goods or items prohibited by the law.
        </p>
        <h3 class="ds-h2-small">Plastic Pallets</h3>
        <p class="">
            We also follow a strict policy of placing all goods on plastic pallets to better air your belongings,
            further safeguarding your items when you lease private rooms with us. These pallets can be used to store
            your items so that air can flow around and under them. This ensures that moisture does not cause any damage,
            especially if you are holding items in cardboard boxes or keeping wooden things.
        </p>
        <p class="">Let Us Store has three facilities across Delhi NCR, two in Gurugram and one in Noida.
            You can conveniently locate the one closest to you.</p>
        <p class="">Given below is a chart to guide you on managing the items you want to store. Once you have
            an approximate idea, you can either visit our warehouse or contact us online. We are available via phone,
            email, or WhatsApp. Alternatively, you can even chat with us online. Our Let Us Store executives will be
            happy to assist you.</p>
        <img src="<?= base_url() ?>assets/img/private-rooms1.jpg" alt="" class="img1"> -->
      <!--   <h2 class="ds-h2 pb-3">Private Rooms Size Guide</h2>
    <div class="container container1 container2">
        <h2 class="ds-h2 text-center">
            Size Guide
        </h2>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <?php foreach ($size_guide_categories as $key => $value): ?>
            <li class="nav-item" role="presentation">
                <button class="nav-link <?= ($key == 0)?'active':'' ?>" id="<?= $value->sgl_name_key ?>-tab" data-bs-toggle="tab" data-bs-target="#<?= $value->sgl_name_key ?>" type="button"
                    role="tab" aria-controls="<?= $value->sgl_name_key ?>" aria-selected="true"><?= $value->sgl_name 
            ?></button>
            </li>
        <?php endforeach; ?> -->
           <!--  <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
                    role="tab" aria-controls="profile" aria-selected="false">Gurugram</button>
            </li> -->

      <!--   </ul>
 -->
            
 <!--       <div class="tab-content" id="myTabContent" >
           <?php  foreach($size_guide_categories as $key => $value): ?>
               
           <div class="tab-pane fade show <?= ($key == 0)?$value->sgl_name_key.' active':$value->sgl_name_key ?>" id="<?= $value->sgl_name_key ?>" role="tabpanel" aria-labelledby="<?= $value->sgl_name_key ?>-tab" >
                 
                 
               <table class="table">
               
                   <thead>
                       
                       <tr>
                           <th scope="col">TOTAL SIZE (SQ. FT)</th>
                           <th scope="col">WHAT ITEMS WILL FIT (RECOMMENDED STORAGE)</th>
                           <th scope="col">FLAT SIZE</th>
                       </tr>
                   </thead>
               
                       
                   
                   <tbody>
                       <?php foreach($sample[$value->sgl_name_key] as $key2 => $value2): ?>  
                       <tr>
                           <th scope="row"><?= $value2->sg_total_size ?></th>
                           <td><?= $value2->sg_item ?></td>
                           <td><?= $value2->sg_flat_size ?></td>
                       </tr>
                       <?php endforeach; ?>
                       
                   </tbody>
                   
               </table>
                  

           </div>
          
             <?php endforeach; ?>
       </div>
              -->  
                         
    
    </div>
    
    </div>

   