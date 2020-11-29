<?php
function interior_theme_support() {
//adds dynamic title tag support
add_theme_support('title-tag');

//add dynamic logo
add_theme_support( 'custom-logo' );

}

add_action( 'after_setup_theme', 'interior_theme_support' );

function interior_menus(){

    $location =array(
        'main_nav' => 'Main Nav',
    );

    register_nav_menus( $location );
}

add_action( 'after_setup_theme', 'interior_menus' );