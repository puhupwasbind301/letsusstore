
    <div class="page-title-area style-four bg9" style="background-image: url(<?= base_url().$banner_image ?>);background-size: cover;">
        <div class="container">
            <div class="page-title-content text-start">
                <h2 class="ds-h2">Corpoate-Responsibility-Initiative</h2>
                <ul>
                    <li><a href="<?= base_url() ?>home">Home</a></li>
                    <li>Corpoate-Responsibility-Initiative</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container container1">
      <?php foreach ($two_row as $key => $value): ?>
        <h2 class="ds-h2"><?= $value->cri_title ?></h2>
        <p class="mt-3 fs-5">
            <?= $value->cri_desc ?>
        </p>
       <?php endforeach ?> 
     
        <h2 class="ds-h2-sub">Environmental Corporate Responsibility Initiative (CRI)
            Initiatives</h2>
        <?php foreach ($other_rows as $key => $value): ?>
        <div class="row row1">
            <?php if($key%2==0): ?>
            <div class="col-lg-6">
                <img src="<?= !empty($value->cri_image)?base_url().$value->cri_image:'https://via.placeholder.com/150' ?>" alt="" class="img1">
            </div>
            <?php endif; ?>
            <div class="col-lg-6">
                <h3 class="ds-h2-small">
                  <?= $value->cri_title ?>
                </h3>
                <p class="mt-4 fs-5">
                    <?= $value->cri_desc ?>
                </p>
            </div>
            <?php if($key%2!==0): ?>
            <div class="col-lg-6">
                <img src="<?= !empty($value->cri_image)?base_url().$value->cri_image:'https://via.placeholder.com/150' ?>" alt="" class="img1">
            </div>
            <?php endif; ?>
        </div>
        <?php endforeach ?>    
     <!--    <div class="pb-4">
            <div class="row row1">
                <div class="col-lg-6">
                    <h3 class="ds-h2-small">
                        Creatives for Air Pollution
                    </h3>
                    <p class="mt-4 fs-5">
                        <b> Care for</b> Air is a not-for-profit organization that aims to create awareness about air
                        pollution.
                        Let Us Store partnered with Care for Air in its endeavor to spread the message about
                        rising
                        air pollution and ways to tackle it. Care for Air undertakes creative, awareness-building
                        strategies. Let Us Store provided the NGO with creatives that can help its progress. These
                        were targeted to New Delhi in order to address the city’s need to be free of pollution.
                    </p>
                </div>
                <div class="col-lg-6">
                    <img src="<?= base_url() ?>assets/img/cri1.jpg" alt="" class="img1 ml-2">
                </div>
            </div>
        </div> -->
    </div>
