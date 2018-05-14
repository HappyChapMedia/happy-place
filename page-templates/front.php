<?php
/*
Template Name: Front
*/
get_header(); ?>

<header id="front-hero" role="banner">
	<?php
		// If a feature image is set, get the id, so it can be injected as a css background property
		if ( has_post_thumbnail( $post->ID ) ) :
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
			$image = $image[0];
	?>
	<div class="branding-contain" style="background-image: url('<?php echo $image ?>');">
	<?php endif; ?>
		<div class="branding">
			<h1 class="logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<?php get_template_part('/assets/images/inline', 'happy-place-circle.svg') ?>
				</a>
			</h1>
		</div>
	</div> <!-- branding-contain -->
	<div class="tag-contain">
		<div class="tag">
			<p>A flexible event space <span class="amp">&amp;</span> members-only creative office.</p>
		</div>
		<div class="section-divider"><hr></div>
		<div class="location">
			<p >Located in beautiful<br>Downtown Bellingham, WA<br><span class="at">@</span></p>
			<p class="address"><?php get_template_part('/assets/images/inline', 'happy-place-address.svg') ?></p>
		</div> <!-- location -->
	</div>  <!-- tag-contain -->
</header>

<?php get_template_part( 'template-parts/featured-gallery' ); ?>



<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="entry-content">

	 <?php the_content(); ?>
	
	<section id="location-map">
	    <div id="location-map-anchor" data-magellan-target="location-map"></div>
	    <div class="section-contain">
	        <div class="address-contain">
	            <a href="https://www.google.com/maps/place/Happy+Place/@48.749432,-122.482388,17z/data=!3m1!4b1!4m5!3m4!1s0x5485a3bc7499a237:0x19d7319cc4f17407!8m2!3d48.749432!4d-122.480194" target="_blank">
	                <p class="address"><?php get_template_part('/assets/images/inline', 'happy-place-address.svg') ?></p>
	            </a>
	            <p class="bham">in Downtown Bellingham, WA</p>
	        </div><!-- address -->
	        <div id="map">
	        </div><!-- map -->
	    </div><!-- section-contain -->
	</section><!-- location-map -->
	
</div> <!-- entry-content -->

<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>

<?php get_footer();
