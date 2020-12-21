<?php 
/*
	Template Name: Blog
*/
?>
<?php
get_header();
?>

<div class="wrapper blog gallery">
      <section class="padding-top">
        <div
          class="container h-100 d-flex align-items-center justify-content-center"
        >
          <div class="row">
            <div class="col-12 text-center mb-5">
                <span class="logo_global">
                  <img class="logo" id="header-logo" src="<?php echo get_theme_mod('logo_global', get_bloginfo('template_url').'/img/kyoki-logo-black.svg'); ?>" alt="logo"
                  />
              </a>
            </div>
            <div class="col-12 w-100">
              <h1 class="text-center text-uppercase mb-5">gallery</h1>
              <div class="grid">
              <?php
					$args = array(
						'post_type' 			=> 'post',
						'posts_per_page' 		=> -1,
						'ignore_sticky_posts' 	=> true,
					); 

					$blog_posts = new WP_Query( $args );

					if( $blog_posts->have_posts() ):
						while( $blog_posts->have_posts() ): $blog_posts->the_post();
                    ?>

                        <div class="grid-item">
                          <a href="<?php the_permalink() ?>">
                            <?php if(has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail(); ?>
                            <?php endif; ?>
                          </a>
                        <h3 class="mt-2">
                            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                        </h3>
                        </div>
                    


					<?php
						endwhile;
						wp_reset_postdata();
						else: 
					?>
						<p><?php esc_html_e( 'Nothing to display', 'kyoki' ) ?></p>
					<?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>


    <?php
get_footer();
?>

