<?php
/*
Template Name: Page Membership
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

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
<!-- <div id="test-contain"><span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" class="mce_SELRES_start"> </span>
    <div id="nav-contain" data-sticky-container>
      <div class="sticky" id="events-page-nav" data-sticky style="width:100%;" data-margin-top="0" data-margin-bottom="0" data-top-anchor="nav-contain:top" >
        <nav data-magellan data-magellan-expedition="fixed">
          <ul class="horizontal menu expanded">
            <li><a href="#vision">Vision</a></li>
            <li><a href="#stay-tuned">Stay Tuned</a></li>
            <li><a href="#levels">Member Levels</a></li>
            <li><a href="#cta">Apply</a></li>
          </ul>
        </nav>
      </div>
    </div> 
</div> -->

<section id="vision">
    <div id="vision-anchor" data-magellan-target="vision"></div>
    <div class="section-contain">
        <div class="section-text">
        	<header>
        		<p class="subheader">Happy Place</p>
	            <h2>Club Mission</h2>
        	</header>
            <ol class="mission-list">
            	<li><p>To provide a place for modern remote workers, freelancers, writers, critical thinkers and the like to cowork, socialize &amp; revel.</p></li>
            	<li><p>To share our space through public events and event space rental to members and the public.</p></li>
            	<li><p>To support our downtown Bellingham neighborhood, local arts & artists, human rights and environmental sustainability.</p></li>
            </ol>
        </div>
    </div>
</section>



<section id="cowork">
    <div id="cowork-anchor" data-magellan-target="cowork"></div>
    <div class="section-contain" data-equalizer="cowork" data-equalize-on="medium">
        <div class="section-text">
        	<header>
	            <h2>Coworking</h2>
	            <p class="intro">The Happy Place offers a coworking experience unlike anywhere else. We are a dog-friendly space with giraffe-height ceilings, a neon-sign mural, musical ambiance, and occasional ping-pong skirmishes. This is coworking for creative workers and critical thinkers who don’t care about fuddy-duddy office antics. As long as you’re respectful, you can be as comfortable as you damn well please.</p>
        	</header>
            <section class="pricing-access">
            	<h3>Pricing &amp; Access</h3>
		        <ul>
		            <li data-equalizer-watch="cowork">
		                <div class="contain">
		                	<h4>Day Pass</h4>
		                	<p class="hours">8am &mdash; 6pm access</p>
		                	<p class="days">Mon. &mdash; Fri.</p>
		                	<p class="cost members">$10/day</p>
		                	<p class="cost-sub">$15/day for guests</p>
		                </div>
		            </li>
		            <li data-equalizer-watch="cowork">
		                <div class="contain">
		                	<h4>Monthly Pass</h4>
		                	<p class="hours">8am &mdash; 6pm access</p>
		                	<p class="days">Mon. &mdash; Fri.</p>
		                	<p class="cost">$75/mo</p>
		                	<p class="cost-sub">Add locker for $10/mo</p>
		                </div>
		            </li>
		            <li data-equalizer-watch="cowork">
		                <div class="contain">
		                	<h4>Dedicated Desk</h4>
		                	<p class="hours">24/7 Access</p>
		                	<p class="days">Mon. &mdash; Fri.</p>
		                	<p class="cost">$250/mo</p>
		                	<p class="cost-sub">Other perks included.</p>
		                </div>
		            </li>
		        </ul>
		        <div class="rate-extras">
		        	<p>*Dedicated desk renters may have restricted access certain evenings/weekends when private events are scheduled. A calendar of upcoming event bookings will be made available.</p>
		        </div>
            </section>
        </div>
    </div>	
</section>

<section id="cta">
    <div id="cta-anchor" data-magellan-target="cta"></div>
    <div class="section-contain">
        <h2>Apply for membership</h2>
        <p>Use the form below to start the application process.</p>
        <ul class="accordion" data-accordion="" data-allow-all-closed="true">
            <li class="accordion-item" data-accordion-item="">
                <a href="#" class="accordion-title button cta"><i class="fa fa-hand-o-right"></i>Join the Happy Place</a>
                <div class="accordion-content" data-tab-content="">
                 <script type="text/javascript" src="https://form.jotform.com/jsform/82375349502156"></script>
                </div>
            </li>
        </ul>
    </div>
</section> <!-- cta -->
	
</div> <!-- entry-content -->

<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>

<?php get_footer();
