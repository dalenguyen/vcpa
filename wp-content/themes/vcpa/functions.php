<?php

/**
 * Theme customizations
 *
 * @package   vcpa
 * @author    Dale Nguyen
 * @link      http://dalenguyen.me
 * @copyright Copyright (c) 2017, Dale Nguyen
 * @license   GPL-3.0+
 */

// Load child theme text domain
load_child_theme_textdomain('vcpa');

add_action('genesis_setup', 'vcpa_setup', 15);
/**
 * Theme setup.
 *
 * Attach all of the site-wide functions to the correct hooks and filters.
 * All the functions themselves are defined below this setup function
 *
 * @since 1.0.0
 */
function vcpa_setup() {

  // Define theme constants
  define('CHILD_THEME_NAME', 'Vcpa');
  define('CHILD_THEME_URL', 'https://github.com/dalenguyen/vcpa');
  define('CHILD_THEME_VERSION', '1.0.0');

  // Add HTML5 markup structure.
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption'  ) );

	// Add viewport meta tag for mobile browsers.
	add_theme_support( 'genesis-responsive-viewport' );

	// Add theme support for accessibility.
	add_theme_support( 'genesis-accessibility', array(
		'404-page',
		'drop-down-menu',
		'headings',
		'rems',
		'search-form',
		'skip-links',
	) );

	// Add theme support for footer widgets.
	add_theme_support( 'genesis-footer-widgets', 3 );

	// Unregister layouts that use secondary sidebar.
	genesis_unregister_layout( 'content-sidebar-sidebar' );
  genesis_unregister_layout( 'sidebar-sidebar-content' );
  genesis_unregister_layout( 'sidebar-content-sidebar' );

  // Unregister secondary sidebar.
	unregister_sidebar( 'sidebar-alt' );

  // Add theme widget areas.
  include_once(get_stylesheet_directory().'/includes/widget-areas.php');
}
