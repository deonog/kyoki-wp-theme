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
                <a href="<?php echo get_page_link( get_page_by_title( 'Gallery' )->ID ); ?>" class="logo_global">
                  <img class="logo" src="<?php echo get_theme_mod('logo_global', get_bloginfo('template_url').'/img/kyoki-logo-black.svg'); ?>" alt="logo"
                  />
                </a>
               </span>
            </div>
            <div
              class="col-sm-12 col-lg-10 d-flex align-items-center justify-content-center"
            >
              <div
                id="carouselExampleIndicators"
                class="carousel slide carousel-fade"
                data-ride="carousel"
              >
              <?php if(have_posts()) : ?>
                 <?php while(have_posts()) : the_post(); ?>
                <div class="carousel-inner">
                <?php
                  $args = array(
                    'post_parent' => $post->ID,
                    'post_type' => 'attachment',
                    'posts_per_page' => -1,
                    'orderby' => 'menu_order', // you can also sort images by date or be name
                    'order' => 'ASC',
                    'numberposts' => 5, // number of images (slides)
                    'post_mime_type' => 'image'
                  );

                  $attachments = get_children( $args );

                  $post_count = count ($attachments);

                  

                  if ($attachments) {
                      foreach ($attachments as $attachment) {
                          echo "<div class=\"carousel-item\">";
                          $url = get_attachment_link($attachment->ID);// extraigo la _posturl del attachmnet      
                          $img = wp_get_attachment_url($attachment->ID);
                          echo '<img src="'.$img.'">';
                          echo "</div>";
                          wp_update_attachment_metadata($attachment->ID, true);
                      }   
                  }

                  
                ?>
                </div>
     
                <?php endwhile; ?>
                <?php else : ?>
                    <p><?php __('No Page Found'); ?>
                <?php endif; ?>
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

      <!-- <section class="mt-0">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h1 class="text-uppercase mb-3">
                <?php echo apply_filters( 'the_title', get_the_title( get_option( 'page_for_posts' ) ) ); ?>
              </h1>
              <p>
                <?php echo apply_filters( 'the_content', get_post_field( 'post_content', get_option( 'page_for_posts' ) ) ); ?>
              </p>
            </div>
          </div>
        </div>
      </section> -->
    </div>

    <?php get_footer(); ?>



