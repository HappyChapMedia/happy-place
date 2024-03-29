<?php
/*
Template Name: Page Membership
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<section id="intro" role="banner">
	<div class="section-contain">
		<?php if( get_field('headline') ): ?>
			<p class="subheader">Members-only</p>
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

<!-- <section id="club-rules">
    <div id="club-rules-anchor" data-magellan-target="club-rules"></div>
    <div class="section-contain">
        <div class="section-text">
            <header>
                <h2></h2>
            </header>
        </div>
    </div>
</section> -->

	
</div> <!-- entry-content -->

<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>

<?php get_footer();
