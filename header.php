<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
    <title>
    <?php is_front_page() ? bloginfo('description') : wp_title(); ?> |
      <?php bloginfo('name'); ?>
    </title>
    <?php wp_head(); ?>
  </head>
  <body class="body">
    <!-- NAVBAR -->
    <div class="nav">
      <input type="checkbox" id="toggle" style="display: none" />
      <label class="toggle-btn toggle-btn__cross" id="toggle-btn" for="toggle">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </label>
      <nav id="nav" class="d-flex flex-column align-items-center justify-content-center">
          <a href="<?php echo get_home_url(); ?>">
            <span class="logo_global">
              <img class="mb-3" src="<?php echo get_theme_mod('logo_global', get_bloginfo('template_url').'/img/kyoki-logo-black.svg'); ?>" alt="logo"
              />
          </span>
          </a>
        <?php wp_nav_menu( array(
          'theme_location' => 'main-menu'
        ) ); ?>
        <div class="copyright d-flex text-center">
          <p class="text-center">
            © <span id="current-year"></span>. All images and films on this
            site belong to Kyoki Studios. All work is protected by copyright.
          </p>
        </div>
      </nav>
    </div>
    <!-- NAVBAR END -->