<?php

function interior_load_scripts(){

    //css files
    wp_register_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.css' , array(), 'false','all');
    wp_enqueue_style( 'bootstrap_css');
    wp_register_style('jpre_css', get_template_directory_uri() . '/css/jpreloader.css' , array(), 'false','all');
    wp_enqueue_style( 'jpre_css');
    wp_register_style('animate_css', get_template_directory_uri() . '/css/animate.css' , array(), 'false','all');
    wp_enqueue_style( 'animate_css');
    wp_register_style('plugin_css', get_template_directory_uri() . '/css/plugin.css' , array(), 'false','all');
    wp_enqueue_style( 'plugin_css');
    wp_register_style('owl_css', get_template_directory_uri() . '/css/owl.carousel.css' , array(), 'false','all');
    wp_enqueue_style( 'owl_css');
    wp_register_style('owltheme_css', get_template_directory_uri() . '/css/owl.theme.css' , array(), 'false','all');
    wp_enqueue_style( 'owltheme_css');
    wp_register_style('owltrans_css', get_template_directory_uri() . '/css/owl.transitions.css' , array(), 'false','all');
    wp_enqueue_style( 'owltrans_css');
    wp_register_style('popup_css', get_template_directory_uri() . '/css/magnific-popup.css' , array(), 'false','all');
    wp_enqueue_style( 'popup_css');
    wp_register_style('count_css', get_template_directory_uri() . '/css/jquery.countdown.css' , array(), 'false','all');
    wp_enqueue_style( 'count_css');
    wp_register_style('styles_css', get_template_directory_uri() . '/css/styles.css' , array(), 'false','all');
    wp_enqueue_style( 'styles_css');
    wp_register_style('twenty_css', get_template_directory_uri() . '/css/twentytwenty.css' , array(), 'false','all');
    wp_enqueue_style( 'twenty_css');

    // css custom background
    wp_register_style('bg_css', get_template_directory_uri() . '/css/bg.css' , array(), 'false','all');
    wp_enqueue_style( 'bg_css');

    //css color scheme
    wp_register_style('colorred_css', get_template_directory_uri() . '/css/colors/red.css' , array(), 'false','all');
    wp_enqueue_style( 'colorred_css');
    wp_register_style('color_css', get_template_directory_uri() . '/css/color.css' , array(), 'false','all');
    wp_enqueue_style( 'color_css');

    //css load fonts
    wp_register_style('font_css', get_template_directory_uri() . '/fonts/font-awesome/css/font-awesome.css' , array(), 'false','all');
    wp_enqueue_style( 'font_css');
    wp_register_style('html_css', get_template_directory_uri() . '/fonts/elegant_font/HTML_CSS/style.css' , array(), 'false','all');
    wp_enqueue_style( 'html_css');
    wp_register_style('line_css', get_template_directory_uri() . '/fonts/et-line-font/style.css' , array(), 'false','all');
    wp_enqueue_style( 'line_css');

    //css RS5.0 Stylesheet
    wp_register_style('revolution_css', get_template_directory_uri() . '/revolution/css/settings.css' , array(), 'false','all');
    wp_enqueue_style( 'revolution_css');
    wp_register_style('layers_css', get_template_directory_uri() . '/revolution/css/layers.css' , array(), 'false','all');
    wp_enqueue_style( 'layers_css');
    wp_register_style('nav_css', get_template_directory_uri() . '/revolution/css/navigation.css' , array(), 'false','all');
    wp_enqueue_style( 'nav_css');
    wp_register_style('rev_css', get_template_directory_uri() . '/css/rev-settings.css' , array(), 'false','all');
    wp_enqueue_style( 'rev_css');

    //css custom fonts
    wp_register_style('sytle2_css', get_template_directory_uri() . '/css/font-style-2.css' , array(), 'false','all');
    wp_enqueue_style( 'sytle2_css');

    // Javascript Files===============================================
    wp_register_script( 'min_js', get_template_directory_uri() . '/js/jquery.min.js', array(), 'false', 'true' );
    wp_enqueue_script( 'min_js' );
    wp_register_script( 'preload_js', get_template_directory_uri() . '/js/jpreLoader.js', array(), 'false', 'true' );
    wp_enqueue_script( 'preload_js' );
    wp_register_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), 'false', 'true' );
    wp_enqueue_script( 'bootstrap_js' );
    wp_register_script( 'isotope_js', get_template_directory_uri() . '/js/jquery.isotope.min.js', array('min_js'), 'false', 'true' );
    wp_enqueue_script( 'isotope_js' );
    wp_register_script( 'easing_js', get_template_directory_uri() . '/js/easing.js', array(), 'false', 'true' );
    wp_enqueue_script( 'easing_js' );
    wp_register_script( 'flex_js', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array('min_js'), 'false', 'true' );
    wp_enqueue_script( 'flex_js' );
    wp_register_script( 'scroll_js', get_template_directory_uri() . '/js/jquery.scrollto.js', array('min_js'), 'false', 'true' );
    wp_enqueue_script( 'scroll_js' );
    wp_register_script( 'carousel_js', get_template_directory_uri() . '/js/owl.carousel.js', array(), 'false', 'true' );
    wp_enqueue_script( 'carousel_js' );
    wp_register_script( 'count_js', get_template_directory_uri() . '/js/jquery.countTo.js', array('min_js'), 'false', 'true' );
    wp_enqueue_script( 'count_js' );
    wp_register_script( 'classie_js', get_template_directory_uri() . '/js/classie.js', array(), 'false', 'true' );
    wp_enqueue_script( 'classie_js' );
    wp_register_script( 'resize_js', get_template_directory_uri() . '/js/video.resize.js', array(), 'false', 'true' );
    wp_enqueue_script( 'resize_js' );
    wp_register_script( 'val_js', get_template_directory_uri() . '/js/validation.js', array(), 'false', 'true' );
    wp_enqueue_script( 'val_js' );
    wp_register_script( 'wow_js', get_template_directory_uri() . '/js/wow.min.js', array(), 'false', 'true' );
    wp_enqueue_script( 'wow_js' );
    wp_register_script( 'popup_js', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('min_js'), 'false', 'true' );
    wp_enqueue_script( 'popup_js' );
    wp_register_script( 'stellar_js', get_template_directory_uri() . '/js/jquery.stellar.min.js', array('min_js'), 'false', 'true' );
    wp_enqueue_script( 'stellar_js' );
    wp_register_script( 'enquire_js', get_template_directory_uri() . '/js/enquire.min.js', array(), 'false', 'true' );
    wp_enqueue_script( 'enquire_js' );
    wp_register_script( 'plugin_js', get_template_directory_uri() . '/js/jquery.plugin.js', array('min_js'), 'false', 'true' );
    wp_enqueue_script( 'plugin_js' );
    wp_register_script( 'countdown_js', get_template_directory_uri() . '/js/jquery.countdown.js', array('min_js'), 'false', 'true' );
    wp_enqueue_script( 'countdown_js' );
    wp_register_script( 'countcustom_js', get_template_directory_uri() . '/js/countdown-custom.js', array(), 'false', 'true' );
    wp_enqueue_script( 'countcustom_js' );
    wp_register_script( 'design_js', get_template_directory_uri() . '/js/designesia.js', array(), 'false', 'true' );
    wp_enqueue_script( 'design_js' );
    wp_register_script( 'event_js', get_template_directory_uri() . '/js/jquery.event.move.js', array('min_js'), 'false', 'true' );
    wp_enqueue_script( 'event_js' );
    wp_register_script( 'twenty_js', get_template_directory_uri() . '/js/jquery.twentytwenty.js', array('min_js'), 'false', 'true' );
    wp_enqueue_script( 'twenty_js' );

    //RS5.0 Core JS Files
    wp_register_script( 'themepunch_js', get_template_directory_uri() . '/revolution/js/jquery.themepunch.tools.min838f.js?rev=5.0', array('min_js'), 'false', 'true' );
    wp_enqueue_script( 'themepunch_js' );
    wp_register_script( 'revmin_js', get_template_directory_uri() . '/revolution/js/jquery.themepunch.revolution.min838f.js?rev=5.0', array('min_js'), 'false', 'true' );
    wp_enqueue_script( 'revmin_js' );

    //RS5.0 Extensions Files
    wp_register_script( 'video_js', get_template_directory_uri() . '/revolution/js/extensions/revolution.extension.video.min.js', array(), 'false', 'true' );
    wp_enqueue_script( 'video_js' );
    wp_register_script( 'slide_js', get_template_directory_uri() . '/revolution/js/extensions/revolution.extension.slideanims.min.js', array(), 'false', 'true' );
    wp_enqueue_script( 'slide_js' );
    wp_register_script( 'extension_js', get_template_directory_uri() . '/revolution/js/extensions/revolution.extension.layeranimation.min.js', array(), 'false', 'true' );
    wp_enqueue_script( 'extension_js' );
    wp_register_script( 'revnav_js', get_template_directory_uri() . '/revolution/js/extensions/revolution.extension.navigation.min.js', array(), 'false', 'true' );
    wp_enqueue_script( 'revnav_js' );
    wp_register_script( 'actions_js', get_template_directory_uri() . '/revolution/js/extensions/revolution.extension.actions.min.js', array(), 'false', 'true' );
    wp_enqueue_script( 'actions_js' );
    wp_register_script( 'kenburn_js', get_template_directory_uri() . '/revolution/js/extensions/revolution.extension.kenburn.min.js', array(), 'false', 'true' );
    wp_enqueue_script( 'kenburn_js' );
    wp_register_script( 'migration_js', get_template_directory_uri() . '/revolution/js/extensions/revolution.extension.migration.min.js', array(), 'false', 'true' );
    wp_enqueue_script( 'migration_js' );
    wp_register_script( 'parallax_js', get_template_directory_uri() . '/revolution/js/extensions/revolution.extension.parallax.min.js', array(), 'false', 'true' );
    wp_enqueue_script( 'parallax_js' );

    
}
add_action( 'wp_enqueue_scripts','interior_load_scripts');