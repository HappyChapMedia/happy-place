<?php
/**
 * Custom Functions
 
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

	add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
	function wpdocs_theme_setup() {
		add_image_size( 'large', 1900, 300); // (not-cropped)
		add_image_size( 'medium', 800, 800, true , array( 'center', 'bottom' )   ); // (cropped)
		add_image_size( 'small', 480, 640, true , array( 'center', 'bottom' )   ); // (cropped)
	}
