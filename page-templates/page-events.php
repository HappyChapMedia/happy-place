<?php
/*
Template Name: Page Events
*/
get_header(); ?>


<section id="intro" role="banner">
	<div class="section-contain">
		<h1>Event Space Rental</h1>
		<p>Use our space for your thing!</p>
	</div>
</section>

<?php get_template_part( 'template-parts/featured-gallery' ); ?>



<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="entry-content">

	 <?php the_content(); ?>
	
</div> <!-- entry-content -->

<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>

<?php get_footer();
