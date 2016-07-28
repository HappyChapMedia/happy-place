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
<?php the_content(); ?>
<div class="entry-content">
	<section class="intro" role="main">
		<div class="section-contain">
			<p>Catering to the needs of liberated creative thinkers, Happy Place is an inspirational shared work environment located in the heart of <br><strong>Bellingham, WA</strong>.</p>
		</div>
	</section>
	<section class="why">
		<div class="section-contain">
			<h2>Why</h2>
			<p>Because we believe that the workplace should be exactly where you want to go in the morning.</p>
		</div>
	</section>
	<section>
		<div class="section-contain">
			<h2>Our Mission</h2>
			<p>Our mission is to support good ideas and good people by providing the perfect context for their success: a work environment which shuns unnecessary formality while encouraging collaboration and stress-free productivity.</p>
		</div>
	</section>
	
</div>

<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>

<?php get_footer();
