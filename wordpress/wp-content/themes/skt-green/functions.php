<?php
// Exit if accessed directly
if ( ! defined('ABSPATH')) {
    exit;
}

function skt_green_style(){
    global $wp_styles;

    //get current user.css dependencies
    $user_css_deps = $wp_styles->registered['posterity-a13-user-css']->deps;

    //register child theme style.css and add it with dependencies for user.css, to be sure it will be loaded after all other style files
    //it is useful for doing easier style overwrites
    wp_register_style('skt-green-style', get_stylesheet_directory_uri(). '/style.css', $user_css_deps, wp_get_theme()->get('Version') );
    //add child theme style.css as also needed for user.css
    array_push($wp_styles->registered['posterity-a13-user-css']->deps, 'skt-green-style');
	
	wp_enqueue_script( 'skt-green-navigation', get_stylesheet_directory_uri() . '/js/navigation.js', array('jquery'), '20190715', true );
	wp_enqueue_script( 'skt-green-customscripts', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery') );
	wp_localize_script( 'skt-green-navigation', 'NavigationScreenReaderText', array() );	
}
//register it later then parent theme styles
add_action('wp_enqueue_scripts', 'skt_green_style', 27);