<style>
    .ds-h2-sub{
        padding-top: 0rem !important;
    }
</style>

    <div class="page-title-area style-four bg3" style="background-image: url(<?= base_url().$banner_image ?>);background-size: cover;">
        <div class="container">
            <div class="page-title-content text-start">
                <h2 class="ds-h2">Terms and Conditions</h2>
              <!--   <ul>
                    <li><a href="<?= base_url() ?>home">Home</a></li>
                    <li>Terms and Conditions</li>
                </ul> -->
            </div>
        </div>
    </div>

    <div class="services-area pt-4 pb-5">
        <div class="container">
            <div class="section-title">
                <h2 class="ds-h2">Terms and Conditions</h2>
            </div>
            <?php foreach ($all_rows as $key => $value): ?>
            <h2 class="ds-h2<?= ($key==0)?'':'-sub'  ?>">
               <?= $value->tac_title ?>
            </h2>
            <?= $value->tac_desc ?>

            <?php if(!empty($value->tac_image)): ?>
                <img class="mt-2 mb-3 img1" src="<?= base_url() ?><?= $value->tac_image ?>" alt="">
            <?php endif; ?>

            <?php endforeach ?>
            

        </div>
    </div>

    