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
              <img class="header-logo" id="header-logo" src="<?php bloginfo('template_directory'); ?>/img/kyoki-logo.svg" alt="logo" />
            </div>
          </div>
        </div>
        <div
          id="carouselExampleIndicators"
          class="carousel slide carousel-fade"
          data-ride="carousel"
        >
          <!-- <ol class="carousel-indicators">
            <li
              data-target="#carouselExampleIndicators"
              data-slide-to="0"
              class="active"
            ></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol> -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                class="d-block w-100"
                src="<?php bloginfo('template_directory'); ?>/img/img-1.jpg"
                alt="First slide"
              />
            </div>
            <div class="carousel-item">
              <img
                class="d-block w-100"
                src="<?php bloginfo('template_directory'); ?>/img/img-2.jpg"
                alt="Second slide"
              />
            </div>
            <div class="carousel-item">
              <img
                class="d-block w-100"
                src="<?php bloginfo('template_directory'); ?>/img/img-3.jpg"
                alt="Third slide"
              />
            </div>
          </div>
          <!-- <a
            class="carousel-control-prev"
            href="#carouselExampleIndicators"
            role="button"
            data-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a
            class="carousel-control-next"
            href="#carouselExampleIndicators"
            role="button"
            data-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a> -->
        </div>
      </header>
      <!-- HEADER END -->
    </div>

    
<?php get_footer(); ?>