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

		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri('') ?>/assets/images/icons/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri('') ?>/assets/images/icons//favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="<?php echo get_stylesheet_directory_uri('') ?>/assets/images/icons//manifest.json">
		<link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri('') ?>/assets/images/icons//safari-pinned-tab.svg" color="#5bbad5">
		<meta name="theme-color" content="#fbf5a9">

		<script>
			 $('#nav-contain').foundation();
		</script>
		<script type="text/javascript">
		    var feed = new Instafeed({
		        get: 'user',
		        target: '#instafeed',
		        userID: '8230458451',
		        clientId: '1db332138012480885782f465daec597'
				accessToken: '175112416.59aee0f.f85d1cd2330140e8b3ff1904fc7b2efe',
		        limit: '12',
		        template: '<a href="{{link}}" target="_blank"><img class="insta-img" src="{{image}}" title="{{caption}}"/></a>'
		    });
		    feed.run();
		</script>

	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header id="masthead" class="site-header" role="banner">
		<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
			<div class="top-bar-left">
				<ul class="menu">
					<li class="home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php get_template_part('/assets/images/inline', 'happy-place-horiz.svg') ?></a></li>
				</ul>
			</div>
			<div class="top-bar-right">
				<?php foundationpress_top_bar_r(); ?>
				<button class="menu-icon" type="button" data-toggle="mobile-menu"></button>
			</div>
<!-- 			<div class="title-bar">
				<button class="menu-icon" type="button" data-toggle="mobile-menu"></button>
			</div> -->
		</nav>
	</header>

	<?php do_action( 'foundationpress_after_header' );
