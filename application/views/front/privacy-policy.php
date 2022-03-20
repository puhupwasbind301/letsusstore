
    <div class="page-title-area style-four bg14" style="background-image: url(<?= base_url().$banner_image ?>);background-size: cover;">
        <div class="container">
            <div class="page-title-content text-start">
                <h2>Privacy Policy</h2>
              <!--   <ul>
                    <li><a href="<?= base_url() ?>">Home</a></li>
                    <li>Privacy Policy</li>
                </ul> -->
            </div>
        </div>
    </div>
    <div class="privacy-policy-area ptb-100">
        <div class="container container1">
         <!--    <div class="section-title">
                <h2 class="ds-h2">Noke Privacy Policy</h2>
                <p>Please read this Privacy Policy carefully before using this website.</p>
            </div> -->
            <div class="privacy-policy-content">
                   <?php foreach ($all_rows as $key => $value): ?>
                    <!-- <h2 class="ds-h2<?= ($key==0)?'':'-sub'  ?>"> -->
                    <h2 class="ds-h2">
                       <?= $value->pp_title ?>
                    </h2>
                    <p style="text-align: justify;"><?= nl2br($value->pp_desc) ?></p>

                    <?php if(!empty($value->pp_image)): ?>
                        <img class="mt-2 mb-3 img1" src="<?= base_url() ?><?= $value->pp_image ?>" alt="">
                    <?php endif; ?>
                    <?php endforeach ?>
           <!--      <h2 class="ds-h2-sub">Collection of Information</h2>
                <p>This site is provided by <strong>Noke</strong>. <strong>Noke</strong> collects information in several
                    ways from different parts of this site.</p>
                <p><strong>1.</strong> Complimentary ground shipping within 1 to 7 business days<br>
                    <strong>2.</strong> In-store collection available within 1 to 7 business days<br>
                    <strong>3.</strong> Next-day and Express delivery options also available<br>
                    <strong>4.</strong> Purchases are delivered in an orange box tied with a Bolduc ribbon, with the
                    exception of certain items<br>
                    <strong>5.</strong> See the delivery FAQs for details on shipping methods, costs and delivery times
                </p>
                <h2 class="ds-h2-sub">Payment Methods</h2>
                <p><strong>Noke</strong> accepts the following payment methods:</p>
                <ul>
                    <li>Credit Card: Visa, MasterCard, Discover, American Express, JCB, Visa Electron. The total will be
                        charged to your card when the order is shipped.</li>
                    <li><strong>Noke</strong> features a Fast Checkout option, allowing you to securely save your credit
                        card details so that you don't have to re-enter them for future purchases.</li>
                    <li>PayPal: Shop easily online without having to enter your credit card details on the website.Your
                        account will be charged once the order is completed. To register for a PayPal account, visit the
                        website <a href="<?= base_url() ?>#" target="_blank">paypal.com.</a></li>
                </ul>
                <h2 class="ds-h2-sub">Exchanges, Returns and Refunds</h2>
                <p>Items returned within 14 days of their original shipment date in same as new condition will be
                    eligible for a full refund or store credit. Refunds will be charged back form of payment used for
                    purchase. Customer is responsible for shipping charges when making returns and shipping/handling
                    fees of original purchase is non-refundable.</p> -->
                <!-- <p>Last updated: January 01, 2021 at 24:00 pm</p>
                <p><strong>Our Locations</strong> <br># 2750 Quadra <br>Street Victoria, <br>Canada</p>
                <p><strong>Enquiry</strong>: <a href="<?= base_url() ?>tel:+44587154756">+445 871 54756</a></p> -->
            </div>
        </div>
    </div>


    