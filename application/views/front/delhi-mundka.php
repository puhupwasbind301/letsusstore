
    <div id="maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28002.28147891618!2d76.9999137952076!3d28.68111452373008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d05e99a2757a5%3A0x805b990cc78523f6!2sMundka%2C%20New%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1626179116720!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class="container container1 container2">
        <?php foreach ($all_rows as $key => $value): ?>
        <h2 class="ds-h2<?= ($key==0)?'':'-sub'  ?>">
           <?= $value->dm_title ?>
        </h2>
        <p style="text-align: justify;"><?= nl2br($value->dm_desc) ?></p>

        <?php if(!empty($value->dm_image)): ?>
            <img class="mt-2 mb-3 img1" src="<?= base_url() ?><?= $value->dm_image ?>" alt="">
        <?php endif; ?>

        <?php endforeach ?>
        <!-- <h2 class="ds-h2-sub">
            Locations of Let Us Store in Delhi-Mundka
        </h2>
        <p>All of Let Us Store’s warehouses are located in convenient spots that are easily accessible across the
            greater Delhi region. They are located in prime localities and alongside major roadways so that you can find
            and visit them effortlessly.</p>
        <p>Our warehouses in Gurugram are located in prime locations, one in Udyog Vihar and the other adjacent to the
            National Highway at Honda Chowk. They both boast over 100 dedicated rooms in varying sizes in each location.
            Residents in and around Gurugram and nearby New Delhi will have no trouble locating and accessing these two
            facilities. Our units are created with the needs of both individuals and businesses in mind.</p>
        <p>The third warehouse in Noida is close to Wave City Metro. If you are considering visiting our Noida
            warehouse, you can choose from over 150 Let Us Store units. Located inside a bustling complex, this Let Us
            Store in Delhi is your perfect choice.</p> -->
    </div>
  <!--   <div class="container container1">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="ds-h2-sub">
                    Lease Let Us Store in Delhi-Mundka
                </h2>
                <p>With our range of amenities and professional help from dedicated staff, leasing a Let Us Store unit
                    around Delhi-Mundka has never been easier. Individuals and businesses on the lookout for a suitable
                    Let Us Store unit around Delhi-Mundka can head to one of Let Us Store’s warehouses in Gurugram
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
 