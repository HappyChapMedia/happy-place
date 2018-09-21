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
			<p>A flexible event space <span class="amp">&amp;</span> members-only social club <span class="slash">/</span> coworking .</p>
		</div>
		<div class="section-divider"><hr></div>
		<div class="location">
			<p >Located in beautiful<br>Downtown Bellingham, WA<br><span class="at">@</span></p>
			<p class="address"><?php get_template_part('/assets/images/inline', 'happy-place-address.svg') ?></p>
		</div> <!-- location -->
	</div>  <!-- tag-contain -->
</header>


<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="entry-content">

	<section id="events-lead" data-equalizer="events-lead" data-equalize-on="medium">
	    <div class="section-contain">
	        <div class="section-text" data-equalizer-watch="events-lead">
	            <h2>Have your event here.</h2>
	            <p>Rent the Happy Place for your event. Located in the heart of downtown B-ham the Happy Place is perfect for your speaking event, pop-up shop, party or shindig of all sorts.</p>
	            <p class="cta"><a href="/event-rental" class="button">Info / Book Rental</a></p>
	        </div>
	        <div class="section-img" data-equalizer-watch="events-lead">
	        </div>
	    </div> 
	</section><!-- events-lead -->

	<section id="membership-lead" data-equalizer="members-lead" data-equalize-on="medium">
	    <div class="section-contain">
	        <div class="section-img" data-equalizer="members-lead">
	            <div class="img-container">
	            </div>
	        </div>
	        <div class="section-text" data-equalizer="members-lead">
	            <h2>Social / coworking club membership</h2>
	            <p>Find your Happy Place here - apply to join the club and be a part of something that's not too much of a drag.</p>
	            <p class="cta"><a href="/coworking-social-club" class="button">Info / Apply</a></p>
	        </div>
	    </div>
	</section><!-- membership-lead -->
	
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

	<section class="social-feed">
		<div class="section-contain">
			<h2><a href="http://www.instagram.com/happyplacebellingham/" target="_blank" title=" Follow @happyplacebellingham on Instagram "><?php get_template_part('assets/images/inline', 'social-instagram.svg') ?></a></h2>
			<div id="instafeed"></div>
		</div>
	</section>
	
</div> <!-- entry-content -->

<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>

<?php get_footer();
