<?php
/**
 * 
 * Theme Name: Wordpress customizer Settings
 * 
 */
function customizer_settings($wp_customizer){
    $wp_customizer->add_section('header',array(
        'title' => __('Header Settings', 'mh_style'),
        'priority' => 70
    ));

    $wp_customizer->add_setting('header_image',array(
        'capability' => 'edit_theme_options'
    ));

    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer,'header_image', array(
        'label' => __('Header Image', 'mh_style'),
        'section' =>'header'
    )));


}
add_action('customize_register', 'customizer_settings');





?>