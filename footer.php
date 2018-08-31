<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
	</section>
		<div id="footer-container">
			<footer id="footer">
				<p class="branding">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php get_template_part('/assets/images/inline', 'happy-place-circle.svg') ?>
					</a>
				</p>
				<p class="tagline">A flexible event space <span class="amp">&amp;</span> members only creative office in downtown Bellingham.</p>
				<p class="address"><a href="https://www.google.com/maps/place/Happy+Place/@48.7496526,-122.4804026,17.75z/data=!4m5!3m4!1s0x0:0x19d7319cc4f17407!8m2!3d48.749432!4d-122.480194" target="_blank" tile="Get directions to the Happy Place via Google Maps.">1215 Cornwall Ave, Suite 101, Bellingham, WA</a></p>
			</footer>
		</div>
		<?php get_template_part('template-parts/hc-colophon') ?>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCn8GawuwjU1ktKiCH8RjNdGCofp32Fczo&callback=initialize">
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-80201603-2', 'auto');
  ga('send', 'pageview');

</script>

<script type="text/javascript">
    var feed = new Instafeed({
        get: 'user',
        target: '#instafeed',
        userID: '8230458451',
        clientId: '37976a488ec9413ca96d7ad46600d0d5'
		accessToken: '175112416.59aee0f.f85d1cd2330140e8b3ff1904fc7b2efe',
        limit: '12',
        template: '<a href="{{link}}" target="_blank"><img class="insta-img" src="{{image}}" title="{{caption}}"/></a>'
    });
    feed.run();
</script>

<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
