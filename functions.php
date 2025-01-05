<?php
/**
 * 
 * Theme Functions.
 */

 /**
  * Theme Setup.
  */


  function my_themes_setup() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo',[
     'header-text' =>  ['site-title-text']
    ]); 
    add_theme_support('custom-background');
  }

  add_action('after_setup_theme','my_themes_setup');





/**
 * Summary of my_themes
 * Theme Script and Styles.
 */
function my_themes() {
    wp_enqueue_style('classic-Themes-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'my_themes');


/**
 * Register
 */

 function my_themes_register() {
    register_nav_menu('primary', 'primary_navigation');
 }

 add_action('init', 'my_themes_register');