<?php
/**
 *  Template Name:functions.php
 *  Description: Add features to wordpress theme
 */

require_once('templates/helpers/customizer.php');

function theme_supports(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form'));
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'theme_supports');
function CSS_JS(){
    //Css
    wp_enqueue_style('custom-style', get_stylesheet_uri());
    wp_enqueue_style('mh_Style', 'https://mh-style.github.io/mh-style/mh-style.css', null, 'v1.0', 'all');
    wp_enqueue_style('mh_Style_icon', 'https://mh-style.github.io/mh-style/mh-style-icon.css', null, 'v1.0', 'all');
    
    //Javascript
    wp_enqueue_script('jQuery');
    // wp_enqueue_script('mh_style_js','https://mh-style.github.io/mh-style/mh-style.js', 'jQuery','v1.0', )
}
add_action('wp_enqueue_scripts','CSS_JS');
function nav_menu(){
    register_nav_menus(array(
        'primary-menu'  => __('Primary Menu', 'mh_style'),
        'footer-menu'   => __('Footer Menu', 'mh_style')
    ));
}
add_action('init','nav_menu');
function add_link_atts($atts){
    $atts['class'] = 'mh-link mh-color-white';
    return $atts;
}
add_filter('nav_menu_link_attributes','add_link_atts');
?>