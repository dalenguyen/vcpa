<?php

/**
 * Register widget areas
 *
 * @package   vcpa
 * @author    Dale Nguyen
 * @link      http://dalenguyen.me
 * @copyright Copyright (c) 2017, Dale Nguyen
 * @license   GPL-3.0+
 */

// Register after post widget area
genesis_register_sidebar( array(
  'id'		=> 'first-home-feature',
  'name'		=> __( 'First Home Feature', 'vcpa' ),
  'description'	=> __( 'This is the first home feature widget area that will show on the front page', 'vcpa' ),
) );

genesis_register_sidebar( array(
  'id'		=> 'second-home-feature',
  'name'		=> __( 'Second Home Feature', 'vcpa' ),
  'description'	=> __( 'This is the second home feature widget area that will show on the front page', 'vcpa' ),
) );
