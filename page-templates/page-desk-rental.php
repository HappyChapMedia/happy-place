<?php
/*
Template Name: Page Desk Rental
*/
get_header(); ?>


<section id="intro" role="banner">
	<div class="section-contain">
		<?php if( get_field('headline') ): ?>
            <h1><?php the_field('headline'); ?></h1>
        <?php endif; ?>
        <?php if( get_field('tagline') ): ?>
            <p><?php the_field('tagline'); ?></p>
        <?php endif; ?>
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
