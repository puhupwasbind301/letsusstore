
    <div class="page-title-area style-four bg10" style="background-image: url(<?= base_url().$banner_image ?>);background-size: cover;">
        <div class="container">
            <div class="page-title-content text-start">
                <h2 class="ds-h2">Covid Precautions</h2>
                <ul>
                    <li><a href="<?= base_url() ?>">Home</a></li>
                    <li>Covid Precautions</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container container1">

        <?php foreach ($all_rows as $key => $value): ?>
        <div class="row mt-5">
            <?php if(!empty($value->cp_image)): ?>
            <div class="col-lg-6">
                <div>
                    <img src="<?= base_url() ?><?= $value->cp_image ?>" alt="image" class="img1 mt-5">
                </div>
            </div>
            <?php endif; ?>
            <!-- <h2 class="ds-h2">Covid-19 Precautionary Measures</h2>
            <p class="mt-3 fs-5"> -->
            <div class="col-lg-<?= !empty($value->cp_image)?'6':'12' ?>">
                <h2 class="ds-h2<?= $key==0?'':'-sub' ?>">
                    <?= $value->cp_title; ?>
                </h2>
                <p class="mt-<?= $key==0?'2':'3' ?> fs-5 " style="text-align: justify;">
                    <?= $value->cp_desc; ?>
                </p>
            </div>
           
        </div>
        <?php endforeach; ?>
        
    </div>
    <hr class="mt-5 mb-3">
    