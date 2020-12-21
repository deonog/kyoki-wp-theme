<?php 
/*
	Template Name: Contact
*/
?>
<?php
get_header();
?>


<div class="wrapper about contact">
      <!-- HEADER -->
      <header
        style="
          background: url(<?php echo get_theme_mod('contact_bg', get_bloginfo('template_url').'/img/img-4.jpg'); ?>);
          background-position: center;
          background-size: cover;
          background-repeat: no-repeat;
        "
      >
        <div
          class="container h-100 d-flex align-items-center justify-content-center"
        >
          <div class="row w-100">
          <div class="col-12 text-center mb-5">
                <span class="logo_about">
                  <img class="logo" id="header-logo" src="<?php echo get_theme_mod('logo_about', get_bloginfo('template_url').'/img/kyoki-logo-white.svg'); ?>" alt="logo"
                  />
               </span>
            </div>
            <div class="form-col col-sm-12 col-lg-6 offset-lg-3">
              <?php $contact='[contact-form-7 id="996" title="Contact Form"]'?>
              <?php echo do_shortcode($contact);?>
           </div>
           <div class="col-sm-12 col-lg-6 offset-lg-3 d-flex justify-content-center">
              <div>
                <a href="<?php echo get_theme_mod('ig_url', 'https://www.instagram.com'); ?>">
                  <i class="fab fa-instagram"></i>
                  <p class="mb-0">
                    <?php echo get_theme_mod('ig_name', 'Kyoki Studio'); 
                    ?>
                  </p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- HEADER END -->
    </div>














<?php
get_footer();
?>