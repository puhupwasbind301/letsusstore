
    <div id="maps">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30223.435572824514!2d74.23371778227127!3d18.756688222088997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc329b1b121b91d%3A0x3acc4c303bc3165e!2sRanjangaon%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1626353551834!5m2!1sen!2sin"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class="container container1 container2">

        <?php foreach ($all_rows as $key => $value): ?>
        <h2 class="ds-h2<?= ($key==0)?'':'-sub'  ?>">
            <?= $value->prg_title ?>
        </h2>
        <p style="text-align: justify;"><?= nl2br($value->prg_desc) ?></p>
        <?php if(!empty($value->prg_image)): ?>
            <img class="mt-2 mb-3 img1" src="<?= base_url() ?><?= $value->prg_image ?>" alt="">
        <?php endif; ?>
        <?php endforeach ?>
   
    </div>
   <!--  <div class="container container1">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="ds-h2-sub">
                    Lease Let Us Store in Pune-Ranjangaon
                </h2>
                <p>With our range of amenities and professional help from dedicated staff, leasing a Let Us Store unit
                    around Pune-Ranjangaon has never been easier. Individuals and businesses on the lookout for a
                    suitable
                    Let Us Store unit around Pune-Ranjangaon can head to one of Let Us Store’s warehouses in Gurugram
                    and Noida.</p>
                <p>Visit us at the earliest to find a Let Us Store unit that suits your needs!</p>
            </div>
            <div class="col-lg-6">
                <div class="wp-gr wpac" style="width:100%!important;height: 300px!important;overflow-y:auto!important;">
                    <div class="wp-google-list">
                        <div class="wp-google-place">
                            <div class="products-details-area ptb-100">
                                <div class="container">
                                    <div class="row align-items-center">

                                        <div class="col-lg-12 col-md-12">
                                            <div class="products-details-tabs">


                                                <div class="single-tabs-box">
                                                    <h2 class="ds-h2-sub"><span>Reviews</span></h2>
                                                    <div class="inner-box">
                                                        <div class="products-review-comments">
                                                            <div class="user-review">
                                                                <img src="<?= base_url() ?>assets/img/user/user1.jpg" alt="image">
                                                                <div class="review-rating">
                                                                    <div class="review-stars">
                                                                        <i class='fas fa-star checked'></i>
                                                                        <i class='fas fa-star checked'></i>
                                                                        <i class='fas fa-star checked'></i>
                                                                        <i class='fas fa-star checked'></i>
                                                                        <i class='fas fa-star checked'></i>
                                                                    </div>
                                                                </div>
                                                                <span class="d-block sub-comment">James Anderson</span>
                                                                <p> Perhaps one of the best places for storage. Thanks
                                                                    for safekeeping my stuff properly.</p>
                                                            </div>
                                                            <div class="user-review">
                                                                <img src="<?= base_url() ?>assets/img/user/user2.jpg" alt="image">
                                                                <div class="review-rating">
                                                                    <div class="review-stars">
                                                                        <i class='fas fa-star checked'></i>
                                                                        <i class='fas fa-star checked'></i>
                                                                        <i class='fas fa-star checked'></i>
                                                                        <i class='fas fa-star'></i>
                                                                        <i class='fas fa-star'></i>
                                                                    </div>
                                                                </div>
                                                                <span class="d-block sub-comment">Sarah Taylor</span>
                                                                <p> It's very good
                                                                </p>
                                                            </div>
                                                            <div class="user-review">
                                                                <img src="<?= base_url() ?>assets/img/user/user3.jpg" alt="image">
                                                                <div class="review-rating">
                                                                    <div class="review-stars">
                                                                        <i class='fas fa-star checked'></i>
                                                                        <i class='fas fa-star checked'></i>
                                                                        <i class='fas fa-star checked'></i>
                                                                        <i class='fas fa-star checked'></i>
                                                                        <i class='fas fa-star checked'></i>
                                                                    </div>
                                                                </div>
                                                                <span class="d-block sub-comment">David Warner</span>
                                                                <p> Excellent performance by entire group, promptness &
                                                                    client service is much appreciated</p>
                                                            </div>
                                                            <div class="user-review">
                                                                <img src="<?= base_url() ?>assets/img/user/user4.jpg" alt="image">
                                                                <div class="review-rating">
                                                                    <div class="review-stars">
                                                                        <i class='fas fa-star checked'></i>
                                                                        <i class='fas fa-star checked'></i>
                                                                        <i class='fas fa-star checked'></i>
                                                                        <i class='fas fa-star checked'></i>
                                                                        <i class='fas fa-star'></i>
                                                                    </div>
                                                                </div>
                                                                <span class="d-block sub-comment">King Kong</span>
                                                                <p>Amazing service. I received a call within minutes
                                                                    after placing an online inquiry. </p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <section class="contact-area pt-100 pb-70">
        <div class="container">
            <div class="row">


                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="single-contact-info-box">
                        <div class="icon">
                            <i class='fas fa-map-marker-alt'></i>
                        </div>
                        <h3>Address</h3>
                        <p><a href="<?= base_url() ?>#" target="_blank">Mundka, New Pune, North West Pune, Pune</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="single-contact-info-box">
                        <div class="icon">
                            <i class='fas fa-phone-volume'></i>
                        </div>
                        <h3>Phone</h3>
                        p><a href="<?= base_url() ?>tel:+44587154756">Phone: +91 000 000 0000</a></p>
                        <p><a href="<?= base_url() ?>tel:+55587154756">Fax: +91 000 000 0000</a></p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="single-contact-info-box">
                        <div class="icon">
                            <i class='far fa-envelope'></i>
                        </div>
                        <h3>Email</h3>
                        <p><a
                                href="<?= base_url() ?>https://templates.envytheme.com/cdn-cgi/l/email-protection#8ce4e9e0e0e3cce2e3e7e9a2efe3e1"><span
                                    class="__cf_email__"
                                    data-cfemail="f69e939a9a99b698999d93d895999b">[email&#160;protected]</span></a>
                        </p>
                        <p><a
                                href="<?= base_url() ?>https://templates.envytheme.com/cdn-cgi/l/email-protection#036d6c6866436b666f6f6c2d606c6e"><span
                                    class="__cf_email__"
                                    data-cfemail="5f3130343a1f373a333330713c3032">[email&#160;protected]</span></a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="single-contact-info-box">
                        <div class="icon">
                            <i class='fas fa-hourglass-half'></i>
                        </div>
                        <h3>Working Hours</h3>
                        <p>Sunday - Friday</p>
                        <p>8:00AM - 8:00PM</p>
                    </div>
                </div>



            </div>
        </div>
    </section>
    <hr class="mb-3">
   