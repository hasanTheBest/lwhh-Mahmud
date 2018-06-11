<?php

function lwhhwptdp1_bootstraping(){
    load_theme_textdomain( 'lwhhwptdp1' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'lwhhwptdp1_bootstraping' );

function lwhhwptdp1_assets(){
    wp_enqueue_style( 'bootstrap-css', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );
    wp_enqueue_style( 'lwhhwtdp1-stylesheet', get_stylesheet_uri(  ), false );

}
add_action( 'wp_enqueue_scripts', 'lwhhwptdp1_assets' );