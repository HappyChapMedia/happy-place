<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
		<script src="https://use.typekit.net/lje1vcb.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

<!-- 	<header id="masthead" class="site-header" role="banner">
			
			<div class="title-bar" data-responsive-toggle="site-navigation">
				<button class="menu-icon" type="button" data-toggle="mobile-menu"></button>
			</div>

	</header> -->

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
