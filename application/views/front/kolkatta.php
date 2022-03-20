
    <div id="maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7362.7534668957105!2d88.30413280583771!3d22.67701540897041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f882db4908f667%3A0x43e330e68f6c2cbc!2sKolkata%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1626436357208!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class="container container1 container2">
      <?php foreach ($all_rows as $key => $value): ?>
        <h2 class="ds-h2<?= ($key==0)?'':'-sub'  ?>">
            <?= $value->k_title ?>
        </h2>
        <p style="text-align: justify;"><?= nl2br($value->k_desc) ?></p>
        <?php if(!empty($value->k_image)): ?>
            <img class="mt-2 mb-3 img1" src="<?= base_url() ?><?= $value->k_image ?>" alt="">
        <?php endif; ?>
        <?php endforeach ?>
        <!-- <h2 class="ds-h2">
            Kolkatta
        </h2>
        <p>The concept of Let Us Store is not new in western countries. But in India, not many people were aware of the
            idea. Finding this niche, Let Us Store launched in the country a few years ago. Making the capital our
            center, we made it possible for people to easily find reliable and economical Let Us Store in Pune.</p>
        <p>Let Us Store’s journey started with the vibrant and bustling city of Pune. The first Let Us Store in
            Kolkatta was set up in Gurugram. Since then, we have grown into a huge family of three big warehouses
            and
            thousands of happy customers.</p>
        <p>Two warehouses are located in Gurugram and one is in Noida. The latest addition was the second Gurugram Let
            Us Store in Pune. As we witnessed a burgeoning demand for Let Us Store during the Covid-19 lockdown, we
            were
            able to fulfill people’s needs for extra storage.</p>
        <p>Any home or business that’s looking for Let Us Store in Pune can find a solution within our range of over
            400 Let Us Store rooms.</p>
        <h2 class="ds-h2-sub">
            Locations of Let Us Store in Kolkatta
        </h2>
        <p>All of Let Us Store’s warehouses are located in convenient spots that are easily accessible across the
            greater Pune region. They are located in prime localities and alongside major roadways so that you can find
            and visit them effortlessly.</p>
        <p>Our warehouses in Gurugram are located in prime locations, one in Udyog Vihar and the other adjacent to the
            National Highway at Honda Chowk. They both boast over 100 dedicated rooms in varying sizes in each location.
            Residents in and around Gurugram and nearby New Pune will have no trouble locating and accessing these two
            facilities. Our units are created with the needs of both individuals and businesses in mind.</p>
        <p>The third warehouse in Noida is close to Wave City Metro. If you are considering visiting our Noida
            warehouse, you can choose from over 150 Let Us Store units. Located inside a bustling complex, this Let Us
            Store in Pune is your perfect choice.</p> -->
    </div>
   <!--  <div class="container container1">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="ds-h2-sub">
                    Lease Let Us Store in Kolkatta
                </h2>
                <p>With our range of amenities and professional help from dedicated staff, leasing a Let Us Store unit
                    around Kolkatta has never been easier. Individuals and businesses on the lookout for a
                    suitable
                    Let Us Store unit around Kolkatta can head to one of Let Us Store’s warehouses in Gurugram
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
   