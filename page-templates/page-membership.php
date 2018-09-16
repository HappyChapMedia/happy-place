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

    <div id="sub-nav-contain"><span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" class="mce_SELRES_start"> </span>
    <div id="nav-contain" data-sticky-container>
      <div class="sticky" id="events-page-nav" data-sticky style="width:100%;" data-margin-top="0" data-margin-bottom="0" data-top-anchor="nav-contain:top" >
        <nav data-magellan data-magellan-expedition="fixed">
          <ul class="horizontal menu expanded">
            <li><a href="#mission">Mission</a></li>
            <li><a href="#details">Key Details</a></li>
            <li><a href="#cowork">Cowork</a></li>
            <li><a href="#amenities">Amenities</a></li>
            <li><a href="#apply">Apply</a></li>
          </ul>
        </nav>
      </div>
    </div> 
</div>

<section id="mission">
    <div id="mission-anchor" data-magellan-target="mission"></div>
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
            <i class="fa fa-arrow-down"></i>
        </div>
    </div>
</section> <!-- mission -->

<section id="details">
    <div id="details-anchor" data-magellan-target="details"></div>
    <div class="section-contain">
        <div class="section-text">

            <header>
                <p class="subheader">Happy Place</p>
                <h2>Key Details</h2>
            </header>

            <section class="membership-cost">
                <div class="section-contain">
                    <h3>Membership Cost</h3>
                    <p class="dues">Annual membership dues <br><strong class="cost">$75</strong></p>
                    <p class="plus-token">*Optionally bring one small annual token sacrifice to the keep the space happy - hot sauce, coffee mug, small plant, www.you-get-the-idea.com.</p>
                    <section class="coworking-costs">
                        <h4><strong>Coworking</strong> Pricing</h4>
                        <p class="for-members">For Happy Place members</p>
                        <ul>
                            <li><strong>1-Day Pass</strong> &bullet; 8am-6pm &bullet; M-F <span class="price"><strong>$10</strong>/day</span></li>
                            <li><strong>Drop-in</strong> &bullet; 8am - 6pm &bullet; M-F <span class="price"><strong>$75</strong>/month</span></li>
                            <li><strong>Dedicated Desk</strong> &bullet; 24/7 <span class="price"><strong>$225</strong>/month</span></li>
                        </ul>
                    </section> <!-- coworking-costs -->
                    <section class="event-rental-costs">
                        <h4><strong>Event Rental</strong> Pricing</h4>
                        <p class="for-members">For Happy Place members</p>
                        <ul>
                            <li><strong>Morning Rental</strong> &bullet; 6am &ndash; 8am &bullet; M &ndash; Th <span class="price"><strong>$40</strong>/hr.</span></li>
                            <li><strong>Evening Rental</strong> &bullet; 6pm &ndash; 12am &bullet; M &ndash; Th <span class="price"><strong>$40</strong>/hr.</span></li>
                            <li><strong>Weekend Rental</strong> &bullet; flexible hours &bullet; F &ndash; Su <span class="price"><strong>$60</strong>/hr.</span></li>
                        </ul>
                    </section>
                </div> <!-- section-contain -->
            </section>


            <section class="benefits">
                <h3>Membership Benefits</h3>
                <ul class="benefits-list">
                    <li><p>Access to <strong>coworking</strong> via day pass / monthly subscription / dedicated desk.</p></li>
                    <li><p>Bask in a <strong>community</strong> of like-minded creatives, makers, and doers.</p></li>
                    <li><p>Access to <strong>social</strong> events, game nights & members-only gatherings.</p></li>
                    <li><p><strong>Bring your friends</strong> &ndash; invite up to 2 visitors at a time for coworking or social events.</p></li>
                    <li><p><strong>20% discount on event rentals</strong></p></li>
                </ul>
            </section>

            <section class="profit">
                <h3>Purpose Over <strong>Profit</strong></h3>
                <p>We're a non-penuciary club, meaning our revenue supports improvements to the communal space and functional management of the club. Any additional proceeds generated via club activities will be donated to organizations, creative projects, and causes that advance the ideals we support.</p>
            </section>

            <section class="joining">
                <h3>How to Join</h3>
                <p>To become a member, you must submit a <a href="#apply">written application</a> and be democratically approved by the board of directors. </p>
            </section>

            <section class="criteria">
                <h3>Member Criteria &amp; Review</h3>
                <p>Age, gender, education, political beliefs have no bearing in who can become a HappyPlace member. We only pick folks who are not douchecannons based on a complicated algorithm and gut-instincts. But really though, this should be about how someone needs to be likeminded and willing to contribute and use the space respectfully, etc.</p>
                <p>After a six-month probationary period the board will review your membership and determine if you should be subject to the street-gang bleed-in ritual out back in our alleyway. Goodluck.</p>

            </section>
            <i class="fa fa-arrow-down"></i>
        </div>
    </div>
</section> <!-- details -->

<section id="cowork">
    <div id="cowork-anchor" data-magellan-target="cowork"></div>
    <div class="section-contain" data-equalizer="cowork" data-equalize-on="medium">
        <div class="section-text">
            <header>
                <p class="subheader">Members Only</p>
                <h2>Coworking</h2>
                <p class="intro">The Happy Place offers a coworking experience unlike anywhere else. We are a dog-friendly space with giraffe-height ceilings, a neon-sign mural, musical ambiance, and occasional ping-pong skirmishes. This is coworking for creative workers and critical thinkers who don’t care about fuddy-duddy office antics. As long as you’re respectful, you can be as comfortable as you damn well please.</p>
            </header>
            <section class="pricing-access">
                <header>
                    <h3>Pricing &amp; Access</h3>
                </header>
                <ul>
                    <li data-equalizer-watch="cowork">
                        <div class="contain">
                            <h4>Day Pass</h4>
                            <p class="hours">8am &ndash; 6pm access</p>
                            <p class="days">Mon. &ndash; Fri.</p>
                            <p class="cost members">$10/day</p>
                            <p class="cost-sub">$15/day for guests</p>
                        </div>
                    </li>
                    <li data-equalizer-watch="cowork">
                        <div class="contain">
                            <h4>Drop-in</h4>
                            <p class="hours">8am &ndash; 6pm access</p>
                            <p class="days">Mon. &ndash; Fri.</p>
                            <p class="cost">$75/mo</p>
                            <p class="cost-sub">Add locker for $10/mo</p>
                        </div>
                    </li>
                    <li data-equalizer-watch="cowork">
                        <div class="contain">
                            <h4>Dedicated Desk</h4>
                            <p class="hours">24/7 Access</p>
                            <p class="days">All Days*</p>
                            <p class="cost">$250/mo</p>
                            <p class="cost-sub">Other perks included.</p>
                        </div>
                    </li>
                </ul>
                <div class="rate-extras">
                    <p>*Dedicated desk renters may have restricted access certain evenings/weekends when private events are scheduled. <br>A calendar of upcoming event bookings will be made available.</p>
                </div>
            </section> <!-- pricing-access -->
            <section id="amenities">
                <div id="amenities-anchor" data-magellan-target="amenities"></div>
                <div class="section-contain">
                    <div class="section-text" data-equalizer="cowork-amenities" data-equalize-on="medium">
                        <header>
                            <h3>Office Amenities</h3>
                        </header>
                        <section class="drop-in-amenities"   data-equalizer-watch="cowork-amenities">
                            <header>
                                <h4><strong>Day Pass / Drop-in</strong> <br> General Space Amenities</h4>
                                <p class="subheader">Use the space for work-related activities during business hours.</p>
                            </header>
                            <ul>
                                <li><p>Downstairs space access.</p></li>
                                <li><p>Wireless internet access.</p></li>
                                <li><p>Indoor bicycle parking.</p></li>
                                <li><p>Bring your well-behaved dog.</p></li>
                                <li><p>Usage of tables/chairs.</p></li>
                                <li><p>Usage of ping-pong table.</p></li>
                                <li><p>Kitchenette w/ mircowave &amp; toaster oven</p></li>
                                <li><p>Free drip coffee.</p></li>
                            </ul>
                        </section> <!-- drop-in-amenities -->
                        <section class="dedicated-amenities" data-equalize-watchr="cowork-amenities">
                            <header>
                                <h4><strong>Dedicated Desk</strong><br>Additional Amenities</h4>
                                <p class="subheader">The perfect desk-away-from-home, available when you need it. All the benefits of daytime access, plus:</p>
                            </header>
                            <ul >
                                <li><p>Your very own desk.</p></li>
                                <li><p>Wired internet access.</p></li>
                                <li><p>Access via personal keycode.</p></li>
                                <li><p>Full-time (24/7) access</p></li>
                                <li><p>Evening / weekend social hosting access*</p></li>
                            </ul>
                        </section> <!-- dedicated-desk -->
                    </div>
                </div>
            </section> <!-- amenities -->
        </div>
    </div>  
</section> <!-- #cowork -->

<section id="apply">
    <div id="apply-anchor" data-magellan-target="apply"></div>
    <div class="section-contain">
        <h2>Apply for membership</h2>
        <p>Use the form below to start the application process.</p>
        <ul class="accordion" data-accordion="" data-allow-all-closed="true">
            <li class="accordion-item" data-accordion-item="">
                <a href="#" class="accordion-title button cta">Join the Happy Place</i></a>
                <div class="accordion-content" data-tab-content="">
                 <script type="text/javascript" src="https://form.jotform.com/jsform/82375349502156"></script>
                </div>
            </li>
        </ul>
    </div>
</section> <!-- apply -->

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
