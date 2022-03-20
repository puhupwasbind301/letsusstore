

  <div class="page-title-area style-four bg3" style="background-image: url(<?= base_url().$banner_image ?>);background-size: cover;">
    <div class="container">
      <div class="page-title-content text-start">
        <h2 class="ds-h2">Testimonials</h2>
        <ul>
          <li><a href="<?= base_url() ?>home">Home</a></li>
          <li>Testimonials</li>
        </ul>
      </div>
    </div>
  </div>

  <div class="services-area ds-ptb-100">
    <div class="container">
      <div class="section-title">
        <span class="sub-title mt-3">Our Happy Customers</span>
        <h2 class="ds-h2">Customer Review</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua.</p>
      </div>
      <div class="row justify-content-center">
        <?php foreach ($all_rows as $key => $value): ?>
        <div class="col-md-6 col-sm-6">
          <div class="features-box">
            <iframe width="100%" height="290" src="<?= base_url().$value->t_image ?>"
              title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </div>
        </div>
        <?php endforeach ?>
        <!-- <div class="col-md-6 col-sm-6">
          <div class="features-box">
            <iframe width="100%" height="290" src="https://www.youtube.com/embed/_JXnvYhRwEo"
              title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="features-box">
            <iframe width="100%" height="290" src="https://www.youtube.com/embed/_JXnvYhRwEo"
              title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="features-box">
            <iframe width="100%" height="290" src="https://www.youtube.com/embed/_JXnvYhRwEo"
              title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="features-box">
            <iframe width="100%" height="290" src="https://www.youtube.com/embed/_JXnvYhRwEo"
              title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="features-box">
            <iframe width="100%" height="290" src="https://www.youtube.com/embed/_JXnvYhRwEo"
              title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </div>
        </div> -->
       <!--  <div class="col-lg-12 col-md-12 col-sm-12">
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

    