
    <div class="page-title-area style-four bg15" style="background-image: url(<?= base_url().$banner_image ?>);background-size: cover;">
        <div class="container">
            <div class="page-title-content text-start">
                <h2 class="ds-h2-sub">News</h2>
                <ul>
                    <li><a href="<?= base_url() ?>#">Home</a></li>
                    <li>News</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <hr>
        <?php foreach ($all_rows as $key => $value): ?>
            <div class="row">
                <div class="col-lg-4">
                    <img src="<?= base_url() ?><?= $value->news_image ?>" alt="" class="news_img" style="widht:300px;height:300px;">
                </div>
                <div class="col-lg-8">
                    <div class="container container1 container2">
                       
                            <h2 class="ds-h2-sub">
                                <?= $value->news_title ?>

                            </h2>
                            <p><?= $value->news_desc ?>
                                <br>
                                <!-- READ MORE -->
                            </p>
                       
                    </div>
                </div>
            </div>
            <hr>
        <?php endforeach ?>
    </div>
    