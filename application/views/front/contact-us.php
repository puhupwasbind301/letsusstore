
    <div class="page-title-area style-four bg16 jarallax">
        <div class="container">
            <div class="page-title-content text-start">
                <h2 class="ds-h2">Contact Us</h2>
               <!--  <ul>
                    <li><a href="<?= base_url() ?>#">Home</a></li>
                    <li>Contact Us</li>
                </ul> -->
            </div>
        </div>
    </div>

    <section class="contact-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-md-6">
                            <div class="single-contact-info-box">
                                <div class="icon">
                                    <i class='fas fa-map-marker-alt ds-main-clr'></i>
                                </div>
                                <h3>Address</h3>
                                <p> <?= $contact_table->cu_address ?></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-md-6">
                            <div class="single-contact-info-box">
                                <div class="icon">
                                    <i class='fas fa-phone-volume ds-main-clr'></i>
                                </div>
                                <h3>Phone</h3>
                                <?php 
                                       $mobile = explode('|',$contact_table->cu_phone);
                                       foreach ($mobile as $key => $value) {
                                          if(!empty($value)){    
                                 ?>
                                <p><a href="tel:<?= $value ?>">Phone: <span style="font-weight:bolder;"><small><small><small><?= $value ?></small></small></small></span></a></p>
                                       <?php }} ?>
                       
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-md-6">
                            <div class="single-contact-info-box">
                                <div class="icon">
                                    <i class='far fa-envelope ds-main-clr'></i>
                                </div>
                                <h3>Email</h3>
                                <?php 
                                       $email = explode('|',$contact_table->cu_email);
                                       foreach ($email as $key => $value) {
                                          if(!empty($value)){    
                                 ?>
                                <p><a href="mail:<?= $value ?>" style="color:blue"><span class="__cf_email__" data-cfemail=""><?= $value ?></span></a></p>
                                <?php 
                                    }} 
                                 ?>

                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-md-6">
                            <div class="single-contact-info-box">
                                <div class="icon">
                                    <i class='fas fa-hourglass-half ds-main-clr'></i>
                                </div>
                                <h3>Working Hours</h3>
                                <pre><p><?= $contact_table->cu_working_hours ?></p></pre>
                            </div>
                        </div>
                    </div>
                </div>
           <!--      <div class="col-lg-6 col-md-12">
                    <div class="contact-form">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" id="name" required data-error="Please enter your name" placeholder="Full Name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" id="email" required data-error="Please enter your email" placeholder="Email Address">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" class="form-control" id="phone_number" required data-error="Please enter your phone number" placeholder="Mobile no">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="msg_subject" class="form-control" id="msg_subject" placeholder="Subject" required data-error="Please enter your subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control" cols="30" rows="6" required data-error="Please enter your message" placeholder="Message..."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkme">
                                        <label class="form-check-label" for="checkme">
                                            Accept <a href="<?= base_url() ?>terms-conditions.php" class="ds-main-clr">Terms of Services</a> and <a href="<?= base_url() ?>privacy-policy.php" class="ds-main-clr">Privacy Policy</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <button type="submit" class="default-btn ds-main-bg">Send Message</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    