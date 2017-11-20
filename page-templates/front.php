<?php
/*
Template Name: Front
*/
get_header(); ?>




<header id="front-hero" role="banner">
	<div class="branding-contain">
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
			<p>A members only creative office <span class="amp">&amp;</span> flexible event space.</p>
		</div>
		<div class="section-divider"><hr></div>
		<div class="location">
			<p >Located in beautiful<br>Downtown Bellingham, WA<br><span class="at">@</span></p>
			<p class="address"><?php get_template_part('/assets/images/inline', 'happy-place-address.svg') ?></p>
		</div> <!-- location -->
	</div>  <!-- tag-contain -->
</header>

<section id="events-lead">
	<section class="section-contain">
		<h2>Have an event here.</h2>
		<p>Rent the Happy Place for your event. Located in the heart of downtown B-ham the Happy Place is perfect for your speaking event, pop-up shop, party or shindig of all sorts.</p>
		<p class="cta"><a href="/event-rental" class="button">More about event rentals</a></p>
	</section>
</section> <!-- events-lead -->

<section id="membership-lead">
	<section class="section-contain">
		<h2>Join the Happy Place.</h2>
		<p>Find your Happy Place here - apply to join the club and get access to the space along with other mega-perks.</p>
		<p class="cta"><a href="/membership" class="button">About membership</a></p>
	</section>
</section> <!-- membership-lead -->

<section id="desk-lead">
	<section class="section-contain">
		<h2>Rent a desk here.</h2>
		<p>Members can apply to rent a desk on our mezzanine level. Limited availability.</p>
		<p class="cta"><a href="/desk" class="button">Rent a desk</a></p>
	</section>
</section> <!-- desk-lead -->

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

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="entry-content">

	 <?php the_content(); ?>
	
</div> <!-- entry-content -->

<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>

<?php get_footer();
