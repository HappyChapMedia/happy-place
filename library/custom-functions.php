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

	// Change login logo 

	function change_my_wp_login_image() {
	echo "
	<style>
		body.login #login h1 a {
			background: url('".get_bloginfo('template_url')."/assets/images/happy-place-logo-v1.svg') center no-repeat;
			width:90%;
			height: 200px;
			background-size: contain;
		}
		body.login {
			background-color:rgb(84, 194, 182);
		}
		.login #nav a, .login #backtoblog a {
			color: white;
		}
	</style>
	";
	}
	add_action("login_head", "change_my_wp_login_image");

// Custom CF7 loading image
add_filter('wpcf7_ajax_loader', 'my_wpcf7_ajax_loader');
function my_wpcf7_ajax_loader () {
return  get_bloginfo('stylesheet_directory') . '/assets/images/ajax-loader.gif';
}