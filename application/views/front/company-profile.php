


<div class="page-title-area style-four" style="background-image: url(<?= base_url().$banner_image ?>);background-size: cover;">
    <div class="container">
        <div class="page-title-content text-start">
            <h2 class="ds-h2">Company Profile</h2>
            <ul>
                <li><a href="<?= base_url() ?>">Home</a></li>
                <li>Company Profile</li>
            </ul>
        </div>
    </div>
</div>




<div class="marketing-about-area ptb-100">
    <div class="container container1">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="marketing-about-image">
                    <img src="<?= base_url() ?><?= $first_row->cp_image ?>" alt="" class="row1">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="marketing-about-content">
                    <h2 class="ds-h2-sub"><?= $first_row->cp_title ?></h2>
                    <p>
                    <?= $first_row->cp_desc ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="marketing-about-area ptb-100">
    <div class="container container1">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="marketing-about-content">
                    <?php foreach ($other_rows as $key => $value): ?>
                        <h2 class="ds-h2-sub"><?= $value->cp_title ?></h2>
                        <p><?= $value->cp_desc ?></p>
                    <?php endforeach ?> 
                </div>
            </div>
        </div>
    </div>
</div>

           