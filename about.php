<?php 
/*
	Template Name: About
*/
?>
<?php
get_header();
?>
<div class="wrapper about">
      <!-- HEADER -->
      <header
        style="
          background: url(<?php echo get_theme_mod('about_bg', get_bloginfo('template_url').'/img/img-2.jpg'); ?>);
          background-position: center;
          background-size: cover;
          background-repeat: no-repeat;
        "
      >
        <div
          class="container h-100 d-block d-flex align-items-center justify-content-center"
        >
          <div class="row">
          <div class="col-12 text-center mb-5">
                <span class="logo_about">
                  <img class="logo" id="header-logo" src="<?php echo get_theme_mod('logo_about', get_bloginfo('template_url').'/img/kyoki-logo-white.svg'); ?>" alt="logo"
                  />
               </span>
            </div>
            <div class="col-sm-12 col-lg-6 offset-lg-3">
              <p class="mb-3 mb-lg-5">
                  <span class="about_h">
                    <?php echo get_theme_mod('about_h', 'Kyōki /kʲo̞ːkʲi/ japanese noun 1. madness; insanity; lunacy;
                        craziness. 2. The state of being mentally deranged.'); 
                    ?>
                  </span>
              </p>
              <p class="mb-3 mb-lg-5">
                <span class="about_p1">
                  <?php echo get_theme_mod('about_p1', 'Kyōki a young creative, adventures collective based in the city
                of Amsterdam. Always on the quest of exploring and capturing the
                essence of beauty found in the madness of human existence.'); 
                  ?>
                </span>
              </p>
              <p class="mb-0">
                <span class="about_p2">
                  <?php echo get_theme_mod('about_p2', '“So we shall let the reader answer this question for himself:
                who is the happier man, he who has braved the storm of life and
                lived or he who has stayed securely on shore and merely
                existed?” <br> ― Hunter S. Thompson'); 
                  ?>
                </span>
              </p>
            </div>
          </div>
        </div>
      </header>
      <!-- HEADER END -->
    </div>

    <?php get_footer(); ?>