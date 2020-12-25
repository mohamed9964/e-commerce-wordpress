<?php
require_once('wp-bootstrap-navwalker.php');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
set_post_thumbnail(50, 50);
function mytheme_add_styles()
{
  //Styles
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/style/css/bootstrap.css');
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style('font-awesome', get_template_directory_uri() . '/style/css/font-awesome.min.css');
  wp_enqueue_style('jquery-ui', get_template_directory_uri() . '/style/css/jquery-ui.css');
  wp_enqueue_style('jquery-selectBoxIt', get_template_directory_uri() . '/style/css/jquery.selectBoxIt.css');
  wp_enqueue_style('font-google', "https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;900&display=swap");


  //Scripts
  wp_enqueue_script('jqueryLib', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js');
  wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/style/js/jquery-ui.js', array(), 'null', true);
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/style/js/bootstrap.min.js', array(), 'null', true);
  wp_enqueue_script('selectBoxIt', get_template_directory_uri() . '/style/js/jquery.selectBoxIt.min.js', array(), 'null', true);
  wp_enqueue_script('plugins', get_template_directory_uri() . '/style/js/frontend.js', array(), 'null', true);
  wp_enqueue_script('html5shiv', get_template_directory_uri() . '/js/html5shiv.min.js');
  wp_script_add_data('html5shiv', 'conditional', 'it IE 9');
  wp_enqueue_script('respond', get_template_directory_uri() . '/js/respond.min.js');
  wp_script_add_data('respond', 'conditional', 'it IE 9');
}
function mytheme_register_custom_menu()
{
  register_nav_menus(array(
    'header-menu' => 'Navigation Bar',
    'footer-menu' => 'Footer Menu'
  ));
}
// function creat_post_type() {
//   $val = array(
//     'public' => true,
//     'labels' => array('name'=>'Prices'),
//     'menu_icon' => 'dashicons-money-alt',
//     'menu_position' => '25',
//     'supports' => array('title')
//   );
//   register_post_type('Prices', $val);
//   // new post type
//   $val = array(
//     'public' => true,
//     'labels' => array('name' => 'teams'),
//     'menu_icon' => 'dashicons-groups',
//     'menu_position' => '25',
//     'supports' => array('title', 'editor', 'thumbnail')
//   );
//   register_post_type('teams', $val);
// }
// function creat_new_taxonomy() {
//   $val = array(
//     'labels' => array('name' => 'groups'),
//     'hierarchical' => true
//   );
//   register_taxonomy('groups', 'teams', $val);
// }
add_action('wp_enqueue_scripts', 'mytheme_add_styles');
add_action('init', 'mytheme_register_custom_menu');
// add_action('init', 'creat_post_type');
// add_action('init', 'creat_new_taxonomy');
function mytheme_add_woocommerce_support()
{
  add_theme_support('woocommerce');
}
add_filter('woocommerce_show_page_title','__return_false');
add_action('after_setup_theme', 'mytheme_add_woocommerce_support');