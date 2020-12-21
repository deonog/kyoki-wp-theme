<?php
get_header();
?>

    <div class="wrapper home">
      <!-- HEADER -->
      <header>
        <div
          class="container h-100 d-flex align-items-center justify-content-center"
        >
          <div class="row">
            <div class="col-12">
              <span class="home_logo">
                <img class="header-logo" id="header-logo" src="<?php echo get_theme_mod('home_logo', get_bloginfo('template_url').'/img/kyoki-logo.svg'); ?>" alt="logo" />
              </span>
            </div>
          </div>
        </div>
        <div
          id="carouselExampleIndicators"
          class="carousel slide carousel-fade"
          data-ride="carousel"
        >
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                class="d-block w-100"
                src="<?php echo get_theme_mod('home_carousel_img_1', get_bloginfo('template_url').'/img/img-1.jpg'); ?>"
                alt="First slide"
              />
            </div>
            <div class="carousel-item">
              <img
                class="d-block w-100"
                src="<?php echo get_theme_mod('home_carousel_img_1', get_bloginfo('template_url').'/img/img-2.jpg'); ?>"
                alt="Second slide"
              />
            </div>
            <div class="carousel-item">
              <img
                class="d-block w-100"
                src="<?php echo get_theme_mod('home_carousel_img_3', get_bloginfo('template_url').'/img/img-3.jpg'); ?>"
                alt="Third slide"
              />
            </div>
            <div class="carousel-item">
              <img
                class="d-block w-100"
                src="<?php echo get_theme_mod('home_carousel_img_4', get_bloginfo('template_url').'/img/img-4.jpg'); ?>"
                alt="Fourth slide"
              />
            </div>
            <div class="carousel-item">
              <img
                class="d-block w-100"
                src="<?php echo get_theme_mod('home_carousel_img_5', get_bloginfo('template_url').'/img/img-3.jpg'); ?>"
                alt="Fifth slide"
              />
            </div>
          </div>
        </div>
      </header>
      <!-- HEADER END -->
    </div>

    
<?php get_footer(); ?>