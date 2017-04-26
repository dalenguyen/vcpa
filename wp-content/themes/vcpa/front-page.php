<?php

/**
 * Front page template
 *
 * @package   vcpa
 * @author    Dale Nguyen
 * @link      http://dalenguyen.me
 * @copyright Copyright (c) 2017, Dale Nguyen
 * @license   GPL-3.0+
 */

add_action('genesis_meta', 'vcpa_home_page_setup');

/**
 * Set up the homepage layout by conditionally loading sections when widgets
 * are active.
 *
 * @since 2.0.0
 */
function vcpa_home_page_setup(){

  $home_sidebars = array(
    'first_home_feature'    => is_active_sidebar('first-home-feature'),
    'call_to_action'  => is_active_sidebar('call-to-action')
  );

  // Return early if no sidebars are active
  if( ! in_array(true, $home_sidebars) ){
    return;
  }

  // Add home welcome area if "First Home Feature" widget is active
  if ( $home_sidebars['first_home_feature'] ) {
    add_action('genesis_after_header', 'vcpa_add_first_home_feature');
  }

  // Add first home feature area if "Call to Action" widget is active
  if ( $home_sidebars['call_to_action'] ) {
    add_action('genesis_after_header', 'vcpa_add_call_to_action');
  }

  // Force full-width-content layout settings.
  add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

  // Remove posts.
  remove_action('genesis_loop', 'genesis_do_loop');
}

/**
 *  Display content for the "First Home Feature" section.
 *
 * @since 1.0.0
 */

function vcpa_add_first_home_feature() {

  // look for widget id 'first-home-feature' and display it.
  genesis_widget_area('first-home-feature',
    array(
      'before'  => '<div class="first-home-feature"><div class="wrap">',
      'after'   => '</div></div>'
    )
  );
}

/**
 *  Display content for the "Call to Action" section.
 *
 * @since 1.0.0
 */

function vcpa_add_call_to_action() {

  // look for widget id 'call-to-action' and display it.
  genesis_widget_area('call-to-action',
    array(
      'before'  => '<div class="call-to-action"><div class="wrap">',
      'after'   => '</div></div>'
    )
  );
}

genesis();
