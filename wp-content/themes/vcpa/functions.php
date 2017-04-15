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

add_action('genesis_setup', 'vcpa_setup');
/**
 * Theme setup.
 *
 * Attach all of the site-wide functions to the correct hooks and filters.
 * All the functions themselves are defined below this setup function
 *
 * @since 1.0.0
 */
function vcpa_setup() {

}
