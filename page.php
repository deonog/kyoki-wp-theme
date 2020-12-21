<?php
get_header();
?>



<div class="wrapper single">
      <!-- HEADER -->
      <section class="padding-top">
        <div class="container h-100">
          <div
            class="row h-100 d-flex align-items-center justify-content-center"
          >
            <div class="col-12 text-center mb-5">
                <span class="logo_global">
                  <img class="logo" id="header-logo" src="<?php echo get_theme_mod('logo_global', get_bloginfo('template_url').'/img/kyoki-logo-black.svg'); ?>" alt="logo"
                  />
               </span>
            </div>
            <div
              class="col-sm-12 col-lg-10 d-flex align-items-center justify-content-center mb-4"
            >
              <div
                id="carouselExampleIndicators"
                class="carousel slide carousel-fade"
                data-ride="carousel"
              >
                <div class="carousel-inner">
                <?php $slider = get_posts(array('post_type' => 'slider', 'posts_per_page' => -1)); ?>
                  <?php $count = 0; ?>
                  <?php foreach($slider as $slide): ?>
                  <div class="carousel-item">
                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($slide->ID)) ?>" class="img-fluid" />
                    <div class="carousel-caption d-none d-md-block">
                      <h5><?php echo get_the_title($slide->ID); ?></h5>
                    </div>
                  </div>
                  <?php $count++; ?>
                <?php endforeach; ?>
                <a
                  class="carousel-control-prev"
                  href="#carouselExampleIndicators"
                  role="button"
                  data-slide="prev"
                >
                  <i class="fas fa-chevron-left"></i>
                  <span class="sr-only">Previous</span>
                </a>
                <a
                  class="carousel-control-next"
                  href="#carouselExampleIndicators"
                  role="button"
                  data-slide="next"
                >
                  <i class="fas fa-chevron-right"></i>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- HEADER END -->
    </div>

    <?php get_footer(); ?>