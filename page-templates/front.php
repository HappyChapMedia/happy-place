<?php
/*
Template Name: Front
*/
get_header(); ?>


<header id="front-hero" role="banner">
<?php get_template_part( 'template-parts/featured-gallery' ); ?>
	<div class="marketing">
		<div class="tagline">
		</div>

	</div>

</header>

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<div class="entry-content">
		<?php the_content(); ?>
	</div>

<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>

<?php get_footer();
