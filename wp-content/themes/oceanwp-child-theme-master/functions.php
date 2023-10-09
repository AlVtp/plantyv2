<?php

/**
 * OceanWP Child Theme Functions
 *
 * When running a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions will be used.
 *
 * Text Domain: oceanwp
 * @link http://codex.wordpress.org/Plugin_API
 *
 */

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function oceanwp_child_enqueue_parent_style()
{
	// Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update the theme).
	$theme   = wp_get_theme('OceanWP');
	$version = $theme->get('Version');

	// Load the stylesheet.
	wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('oceanwp-style'), $version);
}

function montheme_supports()
{
	add_theme_support('menus');
	register_nav_menus(array(
		'menu-1' => 'primary',
	));
}

// Adds nav-item class to the li items in the menu
function montheme_menu_class($classes)
{
	$classes[] = 'nav-item';
	return $classes;
}

// loads the parent styling
add_action('wp_enqueue_scripts', 'oceanwp_child_enqueue_parent_style');
// Runs montheme_menu_class to add the nav-item
add_filter('nav_menu_css_class', 'montheme_menu_class');

// Load child styling
function my_theme_enqueue_styles() {
	wp_register_style( 'child-style', get_stylesheet_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style' );
  
  }
  add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );