
    <div class="page-title-area style-four bg11" style="background-image: url(<?= base_url().$banner_image ?>);background-size: cover;">
        <div class="container">
            <div class="page-title-content text-start">
                <h2 class="ds-h2">Benefits</h2>
                <ul>
                    <li><a href="<?= base_url() ?>">Home</a></li>
                    <li>Benefits</li>
                </ul>
            </div>
        </div>
    </div>



    <div class="services-area ptb-100">
        <div class="container">
            <div class="section-title pt-5 pb-4">
                <!-- <span class="sub-title">Discover Services We're Provided</span> -->
                <!-- <h2>Value Added Services</h2> -->
                <h2 class="ds-h2 text-center">Benefits</h2>
            </div>
            <div class="row justify-content-center">
                <?php foreach ($all_rows as $key => $value): ?>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="features-item bg-6d5fff">
                        <div class="d-flex align-items-center">
                            <img class="ds-benefits" src="<?= base_url() ?><?= $value->benefit_image ?>" alt="">
                            <p><?= $value->benefit_title ?></p>
                        </div>
                        <p><?= $value->benefit_desc ?></p>
                    </div>
                </div>
                <?php endforeach ?>
                <<!-- div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="features-item bg-ff9f07">
                        <div class="d-flex align-items-center">
                            <img class="ds-benefits" src="<?= base_url() ?>assets/img/value-added-services/casino-cctv.png" alt="">
                            <p class="">24 Hour Surveillance</p>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eranori, Suspendisse varius enim in eros elementum tristique.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="features-item bg-2ea7ff">
                        <div class="d-flex align-items-center">
                            <img class="ds-benefits" src="<?= base_url() ?>assets/img/value-added-services/security-1.png" alt="">
                            <p class="">Secure Storage</p>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eranori, Suspendisse varius enim in eros elementum tristique.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="features-item bg-ff9f07">
                        <div class="d-flex align-items-center">
                            <img class="ds-benefits" src="<?= base_url() ?>assets/img/value-added-services/pest1.png" alt="">
                            <p class="">Monthly Pest Control of Entire Premises</p>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eranori, Suspendisse varius enim in eros elementum tristique.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="features-item bg-2ea7ff">
                        <div class="d-flex align-items-center">
                            <img class="ds-benefits" src="<?= base_url() ?>assets/img/value-added-services/enterprise.png" alt="">
                            <p class="">Ease of Access</p>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eranori, Suspendisse varius enim in eros elementum tristique.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="features-item bg-6d5fff">
                        <div class="d-flex align-items-center">
                            <img class="ds-benefits" src="<?= base_url() ?>assets/img/value-added-services/shield-1.png" alt="">
                            <p class="">Secure Units</p>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eranori, Suspendisse varius enim in eros elementum tristique.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="features-item bg-6d5fff">
                        <div class="d-flex align-items-center">
                            <img class="ds-benefits" src="<?= base_url() ?>assets/img/value-added-services/cleaning-1.png" alt="">
                            <p class="">Immaculately Clean Premises</p>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eranori, Suspendisse varius enim in eros elementum tristique.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="features-item bg-ff9f07">
                        <div class="d-flex align-items-center">
                            <img class="ds-benefits" src="<?= base_url() ?>assets/img/value-added-services/route1.png" alt="">
                            <p class="">Convenient Locations</p>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eranori, Suspendisse varius enim in eros elementum tristique.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="features-item bg-2ea7ff">
                        <div class="d-flex align-items-center">
                            <img class="ds-benefits" src="<?= base_url() ?>assets/img/value-added-services/delivery-man.png" alt="">
                            <p class="">Pick-Up and Drop-Off Facilities</p>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eranori, Suspendisse varius enim in eros elementum tristique.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="features-item bg-2ea7ff">
                        <div class="d-flex align-items-center">
                            <img class="ds-benefits" src="<?= base_url() ?>assets/img/value-added-services/fire-extinguisher1.png" alt="">
                            <p class="">Fire Control</p>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eranori, Suspendisse varius enim in eros elementum tristique.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="features-item bg-2ea7ff">
                        <div class="d-flex align-items-center">
                            <img class="ds-benefits" src="<?= base_url() ?>assets/img/value-added-services/insurance.png" alt="">
                            <p class="">Content Insurance</p>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eranori, Suspendisse varius enim in eros elementum tristique.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="features-item bg-2ea7ff">
                        <div class="d-flex align-items-center">
                            <img class="ds-benefits" src="<?= base_url() ?>assets/img/value-added-services/message-on-phone.png" alt="">
                            <p class="">SMS Alerts*</p>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eranori, Suspendisse varius enim in eros elementum tristique.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="features-item bg-2ea7ff">
                        <div class="d-flex align-items-center">
                            <img class="ds-benefits" src="<?= base_url() ?>assets/img/value-added-services/work-team.png" alt="">
                            <p class="">Professional On-Site Management</p>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eranori, Suspendisse varius enim in eros elementum tristique.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="features-item bg-2ea7ff">
                        <div class="d-flex align-items-center">
                            <img class="ds-benefits" src="<?= base_url() ?>assets/img/value-added-services/privacy.png" alt="">
                            <p class="">Guaranteed Privacy</p>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eranori, Suspendisse varius enim in eros elementum tristique.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="features-item bg-2ea7ff">
                        <div class="d-flex align-items-center">
                            <img class="ds-benefits" src="<?= base_url() ?>assets/img/value-added-services/air-conditioner.png" alt="">
                            <p class="">Fans, Air Conditioning and Humidifiers</p>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eranori, Suspendisse varius enim in eros elementum tristique.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="features-item bg-2ea7ff">
                        <div class="d-flex align-items-center">
                            <img class="ds-benefits" src="<?= base_url() ?>assets/img/value-added-services/script.png" alt="">
                            <p class="">Ease of Booking</p>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eranori, Suspendisse varius enim in eros elementum tristique.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="features-item bg-2ea7ff">
                        <div class="d-flex align-items-center">
                            <img class="ds-benefits" src="<?= base_url() ?>assets/img/value-added-services/delivery-man-1.png" alt="">
                            <p class="">Experienced Movers and Packers</p>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eranori, Suspendisse varius enim in eros elementum tristique.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="features-item bg-2ea7ff">
                        <div class="d-flex align-items-center">
                            <img class="ds-benefits" src="<?= base_url() ?>assets/img/value-added-services/social-care.png" alt="">
                            <p class="">Dedicated Staff</p>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eranori, Suspendisse varius enim in eros elementum tristique.</p>
                    </div>
                </div> -->
            </div>
        </div>
    </div>


    <div class="bg-primary">
        <h2 class="mt-5 pt-5 ds-h2 text-white container">Customer Referral Rewards Program*</h2>
        <div class="container">
            <p class="fs-5 ds-h2 text-white pb-5">
                Let Us Store appreciates its existing customers and provides them with an opportunity to earn
                customer referral rewards (a one-time referral fee of one month’s additional rental) for every new
                customer referred to Let Us Store. As soon as the referral completes one month with us, Self
                Storage India will extend the existing customers lease agreement by one month, free of cost! Plus, there
                are no limits to the number of referrals and thus customer referral rewards.

                *T&C's Apply
            </p>
        </div>

    </div>
    