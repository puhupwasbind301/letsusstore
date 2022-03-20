<div class="container">
    <?php if($error = $this->session->flashdata('msg')){ ?>
         <p style="color: green;"><strong>Success!</strong> <?php echo  $error; ?><p>
    <?php } ?>
  <!-- <form class="contactFormSubmission"> -->
    <form class="" action="<?= base_url('home/contact-form-submission') ?>" method="post">

    <div class="row">
        <div class="col-md-6">
            <h2 class="ds-h2">Contact Us</h2>
            <div class="pb-4">
                <!-- <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                           value="Home Storage">
                    <label class="form-check-label" for="inlineRadio1">Home Storage</label>
                </div> -->
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                           value="Business Storage" required>
                    <label class="form-check-label" for="inlineRadio2">Buisness Storage</label>
                </div>
            </div>
            <div class="">
                <form>
                    <input type="text" id="name" name="name" placeholder="Name" required>
                    <input type="text" id="number" maxlength="10" minlength="10" name="number" placeholder="Phone No" required>
                    <input type="text" id="email" name="email" placeholder="Email ID" required>
                    <input type="text" id="storage_list" name="storage_list" placeholder="Storage List" required>
                    <input type="submit" value="Submit" class="btn-primary">
                </form>
            </div>
        </div>
        
        <div class="col-md-6">
            <h2 class="ds-h2 px-0 mb-4 mb-md-0 px-md-5">Getting Started</h2>
            <div class="row p-0 p-md-5">
                <!-- <div class="col-md-12 pb-3 pb-md-5 d-flex">
                    <i class="fab ds-main-clr fab1 fa-500px"></i>
                    <a href="<?= base_url().$contact_table->cu_brochure ?>" download><p class="text1">DOWNLOAD BROCHURE</p></a>
                    <span><a href="<?= base_url().$contact_table->cu_brochure ?>" ><p class="text1"><small style="color:blue;">(View)</small></p></a></span>
                </div> -->
                <?php 
                    $phone = explode('|',$contact_table->cu_phone);
                      foreach ($phone as $key => $value) {
                       if(!empty($value)){     
                 ?>
                <div class="col-md-12 pb-3 pb-md-5 d-flex">
                    <i class="<?= ($key == 1)?'fab ds-main-clr fab1 fa-whatsapp':'fas ds-main-clr fas1 fa-phone' ?>"></i>
                    <p class="text1"><?= ($key == 1)?'WHATSAPP US':'CALL US AT' ?><a href="tel:<?= $value ?>"> <?= $value ?></a></p>
                </div>
                <?php }
                    } ?>
              
        </div>
    </div>
  </form>
</div>

