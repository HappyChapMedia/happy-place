<?php
/*
Template Name: Page Desk Rental
*/
get_header(); ?>


<section id="intro" role="banner">
	<div class="section-contain">
		<h1>Desk Rental</h1>
		<p>Use our space for your thing!</p>
	</div>
</section>

<?php get_template_part( 'template-parts/featured-gallery' ); ?>

<div id="test-contain">
	<div id="nav-contain" data-sticky-container>
	  <div class="sticky" id="events-page-nav" data-sticky style="width:100%;" data-margin-top="0" data-margin-bottom="0" data-top-anchor="nav-contain:top" >
	    <nav data-magellan data-magellan-expedition="fixed">
	      <ul class="horizontal menu expanded">
			<li><a href="#amenities">Amenities</a></li>
			<li><a href="#uses">Potential Uses</a></li>
			<li><a href="#floor-map">Floor Map</a></li>
			<li><a href="#rates">Rates</a></li>
			<li><a href="#availability">Availability</a></li>
			<li><a href="#cta">Book It</a></li>
	      </ul>
	    </nav>
	  </div>
	</div> <!-- nav-contain -->
</div> 

<section id="amenities">
	<div id="amenities-anchor" data-magellan-target="amenities"></div>
	<div class="section-contain">
		<h2>Space Amenities</h2>
		    <ul>
		    <li>
		        <h4>What a <strong>location</strong>!</h4>
		        <p>Smack dab in downtown Bellingham's shopping &amp; business district. We're based in an up &amp; coming part of Cornwall and we aim to liven things up around here.</p>
		    </li>
		    <li>
		        <h4>A “Heavenly” Mural &amp; Creative Vibe</h4>
		        <p>Many thanks to our space's former tenants <a href="http://coreyographer.com/innate/">Innate</a> &amp; artist <a href="https://www.yalewolf.com/artworks" target="_blank">Yale Wolf</a> for the mural of B-ham Bay painted on the wall.</p>
		    </li>
		    <li>
		        <h4>Dog-Friendly Environment</h4>
		        <p>Bring your friendly pals in when visiting or sharing the space with us. Our resident mutt, Sammy, needs some company.</p>
		    </li>
		</ul>
	</div>
</section>

<section id="uses">
    <div id="uses-anchor" data-magellan-target="uses"></div>
    <div class="section-contain">
        <h2>What kind of events are a good fit for the Happy Place?</h2>
        <p class="subhead"><strong>A million</strong> Possible Uses</p>
        <ul>
            <li>
                <h4>Pop-up Shop</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam itaque ipsa quod ad quo fugiat inventore accusantium eveniet nesciunt voluptas quis, amet molestiae cupiditate facilis nam tempora reprehenderit est eum.</p>
            </li>
            <li class="cta">
                <h4>Your crazy/brilliant business or idea?</h4>
                <p>We're pretty open-minded. If you are interested in the space, drop us a line! </p>
                <p class="cta-button"><a href="#cta" class="button">Get in touch / come see the space</a></p>
            </li>
        </ul>
    </div><!-- section-contain -->
</section><!-- uses -->


<section id="floor-map">
    <div class="section-contain">
    	<div id="floor-map-anchor" data-magellan-target="floor-map"></div>
    	<h2><strong>Happy Place</strong> Floor Map</h2>
    	<div class="overlay" onClick="style.pointerEvents='none'"></div>
    	<figure id="map-embed">
    	</figure>
    </div>
</section> <!-- floor-map -->

<section id="rates">
   <div class="section-contain">
   		<div id="rates-anchor" data-magellan-target="rates"></div>
   		<h2>Rental Rates</h2>
        <ul>
            <li>
                <h4>Morning Rental</h4>
                <p class="hours">6am &ndash; 9am</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam itaque ipsa quod ad quo fugiat inventore accusantium eveniet nesciunt voluptas quis, amet molestiae cupiditate facilis nam tempora reprehenderit est eum.</p>
                <p class="cost">$50/hr</p>
            </li>
            <li>
                <h4>Evening Rental</h4>
                <p class="hours">5pm &ndash; Midnight</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam itaque ipsa quod ad quo fugiat inventore accusantium eveniet nesciunt voluptas quis, amet molestiae cupiditate facilis nam tempora reprehenderit est eum.</p>
                <p class="cost">$100/hr</p>
            </li>
            <li>
                <h4>Weekend Rental</h4>
                <p class="hours">Saturday &ndash; Sunday</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam itaque ipsa quod ad quo fugiat inventore accusantium eveniet nesciunt voluptas quis, amet molestiae cupiditate facilis nam tempora reprehenderit est eum.</p>
                <p class="cost">$125/hr</p>
            </li>
            <li class="discount">
            	<h4>Non-Profit Discounts</h4>
               	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam itaque ipsa quod ad quo fugiat inventore accusantium eveniet nesciunt voluptas quis, amet molestiae cupiditate facilis nam tempora reprehenderit est eum.</p>
            </li>
            <li class="partner">
            	<h4>Partner Events</h4>
            	<p>Have a great idea? We're open to partnering for events that are a great fit.</p>
            </li>
            <li class="cta">
                <p class="cta-button"><a href="#cta" class="button">Book your event.</a></p>
            </li>
        </ul>
   </div>
</section> <!-- rates -->

<section id="availability">
   <div class="section-contain">
   		<div id="availability-anchor" data-magellan-target="availability"></div>
   		<h2>Space Availability</h2>
   		<p>We currently have several opening for desk rentals. Place is kinda a shit-hole though.</p>
   </div>
</section> <!-- availability -->

<section id="cta">
    <div id="cta-anchor" data-magellan-target="cta"></div>
    <div class="section-contain">
        <h2>Book the Space</h2>
        <ul class="accordion" data-accordion="" data-allow-all-closed="true">
            <li id="tour" class="accordion-item" data-accordion-item="">
                <a href="#" class="accordion-title button cta"><i class="fa fa-calendar"></i>Book the Happy Place!</a>
                <div class="accordion-content" data-tab-content="">
                 [contact-form-7 id="49" title="Tenant Inquiry"]
                </div>
            </li>
        </ul>
    </div>
</section><!-- cta -->

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="entry-content">

	 <?php the_content(); ?>
	
</div> <!-- entry-content -->

<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>

<?php get_footer();
