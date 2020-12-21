<?php
    function wpb_customize_register($wp_customize){

    /*----------------------------------------*/
    /*  Social Media
    /*----------------------------------------*/

    $wp_customize->add_section('Social Media', array(
        'title' => __('Social Media', 'kyoki'),
        'description'  => sprintf(__('Bitte Inhalte einfügen','kyoki')),
        'priority'  => 130
    ));

    $wp_customize->add_setting('ig_name', array(
        'default'  => _x('Kyoki Studio', 'kyoki'),
        'type'  => 'theme_mod',
    ));

    $wp_customize->add_control('ig_name', array(
        'label'  => __('Instagram Name', 'kyoki'),
        'section'  => 'Social Media', 
        'priority' => 1
    ));

    $wp_customize->add_setting('ig_url', array(
        'default'  => _x('https://www.instagram.com', 'kyoki'),
        'type'  => 'theme_mod',
    ));

    $wp_customize->add_control('ig_url', array(
        'label'  => __('Instagram URL', 'kyoki'),
        'section'  => 'Social Media', 
        'priority' => 2
    ));

    /*----------------------------------------*/
    /*  Global
    /*----------------------------------------*/

    $wp_customize->add_section('Global', array(
        'title' => __('Global', 'kyoki'),
        'description'  => sprintf(__('Bitte Inhalte einfügen','kyoki')),
        'priority'  => 130
    ));

    $wp_customize->add_setting('logo_global', array(
        'default'  => get_bloginfo('template_directory').'/img/kyoki-logo-black.svg',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo_global', array(
        'label'  => __('Logo', 'kyoki'),
        'section'  => 'Global', 
        'settings'  => 'logo_global',
        'priority' => 1
    )));

    $wp_customize->selective_refresh->add_partial( 'logo_global', array(
        'selector' => '.logo_global',
    ) );


    /*----------------------------------------*/
    /*  Homepage
    /*----------------------------------------*/

    $wp_customize->add_section('Home', array(
        'title' => __('Home', 'kyoki'),
        'description'  => sprintf(__('Bitte Inhalte einfügen','kyoki')),
        'priority'  => 130
    ));

    // Header Image

    $wp_customize->add_setting('home_logo', array(
        'default'  => get_bloginfo('template_directory').'/img/kyoki-logo.svg',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_logo', array(
        'label'  => __('Logo', 'kyoki'),
        'section'  => 'Home', 
        'settings'  => 'home_logo',
        'priority' => 3
    )));

    $wp_customize->selective_refresh->add_partial( 'home_logo', array(
        'selector' => '.home_logo',
    ) );

    // Image 1

    $wp_customize->add_setting('home_carousel_img_1', array(
        'default'  => get_bloginfo('template_directory').'/img/img-1.jpg',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_carousel_img_1', array(
        'label'  => __('Slider Image 1', 'kyoki'),
        'section'  => 'Home', 
        'settings'  => 'home_carousel_img_1',
        'priority' => 4
    )));

    // Image 2

    $wp_customize->add_setting('home_carousel_img_2', array(
        'default'  => get_bloginfo('template_directory').'/img/img-2.jpg',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_carousel_img_2', array(
        'label'  => __('Slider Image 2', 'kyoki'),
        'section'  => 'Home', 
        'settings'  => 'home_carousel_img_2',
        'priority' => 5
    )));

    // Image 3

    $wp_customize->add_setting('home_carousel_img_3', array(
        'default'  => get_bloginfo('template_directory').'/img/img-3.jpg',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_carousel_img_3', array(
        'label'  => __('Slider Image 3', 'kyoki'),
        'section'  => 'Home', 
        'settings'  => 'home_carousel_img_3',
        'priority' => 6
    )));

    // Image 4

    $wp_customize->add_setting('home_carousel_img_4', array(
        'default'  => get_bloginfo('template_directory').'/img/img-4.jpg',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_carousel_img_4', array(
        'label'  => __('Slider Image 4', 'kyoki'),
        'section'  => 'Home', 
        'settings'  => 'home_carousel_img_4',
        'priority' => 7
    )));

    // Image 5

    $wp_customize->add_setting('home_carousel_img_5', array(
        'default'  => get_bloginfo('template_directory').'/img/img-3.jpg',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_carousel_img_5', array(
        'label'  => __('Slider Image 5', 'kyoki'),
        'section'  => 'Home', 
        'settings'  => 'home_carousel_img_5',
        'priority' => 8
    )));

    /*----------------------------------------*/
    /*  About
    /*----------------------------------------*/

    $wp_customize->add_section('About', array(
        'title' => __('About', 'kyoki'),
        'description'  => sprintf(__('Bitte Inhalte einfügen','kyoki')),
        'priority'  => 130
    ));

    $wp_customize->add_setting('about_bg', array(
        'default'  => get_bloginfo('template_directory').'/img/img-2.jpg',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_bg', array(
        'label'  => __('Background Image', 'kyoki'),
        'section'  => 'About', 
        'settings'  => 'about_bg',
        'priority' => 1
    )));

    $wp_customize->add_setting('logo_about', array(
        'default'  => get_bloginfo('template_directory').'/img/kyoki-logo-white.svg',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo_about', array(
        'label'  => __('Logo', 'kyoki'),
        'section'  => 'About', 
        'settings'  => 'logo_about',
        'priority' => 2
    )));

    $wp_customize->selective_refresh->add_partial( 'logo_about', array(
        'selector' => '.logo_about',
    ) );

    $wp_customize->add_setting('about_h', array(
        'default'  => _x('Kyōki /kʲo̞ːkʲi/ japanese noun 1. madness; insanity; lunacy;
        craziness. 2. The state of being mentally deranged.', 'kyoki'),
        'type'  => 'theme_mod',
    ));

    $wp_customize->add_control('about_h', array(
        'label'  => __('Heading', 'kyoki'),
        'section'  => 'About', 
        'priority' => 3
    ));
    
    $wp_customize->selective_refresh->add_partial( 'about_h', array(
        'selector' => '.about_h',
    ) );

    $wp_customize->add_setting('about_p1', array(
        'default'  => _x('Kyōki a young creative, adventures collective based in the city
        of Amsterdam. Always on the quest of exploring and capturing the
        essence of beauty found in the madness of human existence.', 'kyoki'),
        'type'  => 'theme_mod',
    ));

    $wp_customize->add_control('about_p1', array(
        'label'  => __('Paragraph 1', 'kyoki'),
        'section'  => 'About', 
        'priority' => 4
    ));
    
    $wp_customize->selective_refresh->add_partial( 'about_p1', array(
        'selector' => '.about_p1',
    ) );

    $wp_customize->add_setting('about_p2', array(
        'default'  => _x('“So we shall let the reader answer this question for himself:
            who is the happier man, he who has braved the storm of life and
            lived or he who has stayed securely on shore and merely
            existed?” <br> ― Hunter S. Thompson', 'kyoki'),
        'type'  => 'theme_mod',
    ));

    $wp_customize->add_control('about_p2', array(
        'label'  => __('Paragraph 2', 'kyoki'),
        'section'  => 'About', 
        'priority' => 5
    ));
    
    $wp_customize->selective_refresh->add_partial( 'about_p2', array(
        'selector' => '.about_p2',
    ) );

    /*----------------------------------------*/
    /*  Contact
    /*----------------------------------------*/

    $wp_customize->add_section('Contact', array(
        'title' => __('Contact', 'kyoki'),
        'description'  => sprintf(__('Bitte Inhalte einfügen','kyoki')),
        'priority'  => 130
    ));

    $wp_customize->add_setting('contact_bg', array(
        'default'  => get_bloginfo('template_directory').'/img/img-4.jpg',
        'type'  => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'contact_bg', array(
        'label'  => __('Background Image', 'kyoki'),
        'section'  => 'Contact', 
        'settings'  => 'contact_bg',
        'priority' => 1
    )));

}

add_action('customize_register', 'wpb_customize_register');