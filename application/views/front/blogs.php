
    <div class="page-title-area style-four bg12" style="background-image: url(<?= base_url().$banner_image ?>);background-size: cover;">
        <div class="container">
            <div class="page-title-content text-start">
                <h2 class="ds-h2">Blogs</h2>
                <ul>
                    <li><a href="<?= base_url() ?>home">Home</a></li>
                    <li>Blogs</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="blog-area ptb-100">
        <div class="container container1">
            <div class="section-title">
                <span class="sub-title">NEWS & ARTICLES</span>
                <h2 class="ds-h2">Learn More From Our Latest Blog</h2>
            </div>

            <!-- <div class="row justify-content-center"> -->
            <div class="row ">
                <?php foreach ($all_rows as $key => $value): ?>
                <div class="col-lg-4 col-md-6" style="float:left;">
                    <div class="single-post-item startup-color">
                        <div class="post-image">
                            <a href="<?= base_url() ?>blog-details-1.php" class="d-block">
                                <img src="<?= base_url() ?><?= $value->blog_image ?>" style="width: 100%;height: 300px;" alt="image">
                            </a>
                        </div>
                        <div class="post-content">
                            <!-- <ul class="meta">
                                <li><i class="far fa-calendar-alt"></i> Dec 02, 2020</li>
                                <li><i class="far fa-user-circle"></i> <a href="<?= base_url() ?>blog-1.php">Shelley Percy</a></li>
                            </ul> -->
                            <h3><a href="<?= base_url() ?>blog-details-1.php">           <?= $value->blog_title ?></a></h3>
                            <?php if(!empty($value->blog_desc)): ?>
                            <p class="text-justify"><?= $value->blog_desc ?></p>
                            <?php endif; ?>
                            <!-- <a href="<?= base_url() ?>blog-details-1.php" class="link-btn">Read More <i
                                    class="fas fa-chevron-right"></i></a> -->
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
<!-- 
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="pagination-area text-center">
                        <span class="page-numbers current" aria-current="page">1</span>
                        <a href="<?= base_url() ?>#" class="page-numbers">2</a>
                        <a href="<?= base_url() ?>#" class="page-numbers">3</a>
                        <a href="<?= base_url() ?>#" class="page-numbers">4</a>
                        <a href="<?= base_url() ?>#" class="next page-numbers"><i class="fas fa-chevron-right"></i></a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    