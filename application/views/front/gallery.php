
    <div class="page-title-area style-four bg13" style="background-image: url(<?= base_url().$banner_image ?>);background-size: cover;">
        <div class="container">
            <div class="page-title-content text-start">
                <h2 class="ds-h2">Gallery</h2>
                <!-- <ul>
                    <li><a href="<?= base_url() ?>home">Home</a></li>
                    <li>Gallery</li>
                </ul> -->
            </div>
        </div>
    </div>
    <div class="gallery-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <?php foreach ($all_rows as $key => $value): ?>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-gallery-item left-overlay">
                        <img src="<?= base_url().'uploads/banner_image/'.'1.jpg' ?>" alt="image">
                        <a href="<?= base_url() ?><?= $value->gallery_image ?>" target="_blank" class="popup-image"><i
                                class="fas fa-plus"></i></a>
                    </div>
                </div>
            <?php endforeach; ?>
             <!--    <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-gallery-item left-overlay">
                        <img src="<?= base_url() ?>assets/img/gallery/pexels-cottonbro-4761614.jpg" alt="image">
                        <a href="<?= base_url() ?>assets/img/gallery/pexels-cottonbro-4761614.jpg" class="popup-image"><i
                                class="fas fa-plus"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-gallery-item left-overlay">
                        <img src="<?= base_url() ?>assets/img/gallery/pexels-karolina-grabowska-4498126.jpg" alt="image">
                        <a href="<?= base_url() ?>assets/img/gallery/pexels-karolina-grabowska-4498126.jpg" class="popup-image"><i
                                class="fas fa-plus"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-gallery-item left-overlay">
                        <img src="<?= base_url() ?>assets/img/gallery/pexels-karolina-grabowska-4498136.jpg" alt="image">
                        <a href="<?= base_url() ?>assets/img/gallery/pexels-karolina-grabowska-4498136.jpg" class="popup-image"><i
                                class="fas fa-plus"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-gallery-item left-overlay">
                        <img src="<?= base_url() ?>assets/img/gallery/pexels-milada-vigerova-5990074.jpg" alt="image">
                        <a href="<?= base_url() ?>assets/img/gallery/pexels-milada-vigerova-5990074.jpg" class="popup-image"><i
                                class="fas fa-plus"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-gallery-item left-overlay">
                        <img src="<?= base_url() ?>assets/img/gallery/pexels-thirdman-5981705.jpg" alt="image">
                        <a href="<?= base_url() ?>assets/img/gallery/pexels-thirdman-5981705.jpg" class="popup-image"><i
                                class="fas fa-plus"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-gallery-item left-overlay">
                        <img src="<?= base_url() ?>assets/img/gallery/pexels-tim-mossholder-4515086.jpg" alt="image">
                        <a href="<?= base_url() ?>assets/img/gallery/pexels-tim-mossholder-4515086.jpg" class="popup-image"><i
                                class="fas fa-plus"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-gallery-item left-overlay">
                        <img src="<?= base_url() ?>assets/img/gallery/pexels-charlotte-may-5825586.jpg" alt="image">
                        <a href="<?= base_url() ?>assets/img/gallery/pexels-charlotte-may-5825586.jpg" class="popup-image"><i
                                class="fas fa-plus"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-gallery-item left-overlay">
                        <img src="<?= base_url() ?>assets/img/gallery/pexels-dominika-roseclay-4318198.jpg" alt="image">
                        <a href="<?= base_url() ?>assets/img/gallery/pexels-dominika-roseclay-4318198.jpg" class="popup-image"><i
                                class="fas fa-plus"></i></a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
  
    