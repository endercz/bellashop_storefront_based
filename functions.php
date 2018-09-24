<?php

@ini_set('display_errors', 1);

require_once get_stylesheet_directory().'/inc/bellashop-template-functions.php';
require_once get_stylesheet_directory().'/inc/bellashop-template-hooks.php';

function bellashop_enqueue_styles()
{
    $parent_style = 'parent-style';
    wp_enqueue_style('parent-style', get_template_directory_uri().'/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri().'/style.css', array($parent_style), wp_get_theme()->get('Version'));
    // wp_enqueue_style('unishop-styles', get_stylesheet_directory_uri().'/css/styles.min.css', array($parent_style), wp_get_theme()->get('Version'));
    // wp_enqueue_style('unishop-vendor-style', get_stylesheet_directory_uri().'/css/vendor.min.css', array($parent_style), wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'bellashop_enqueue_styles');

require_once get_stylesheet_directory().'/inc/bellashop_nav_menu_walker.php';

add_action('init', 'replace_storefront_header_container_hook');

// add_action('bellashop_before_header', 'bellashop_topbar');
