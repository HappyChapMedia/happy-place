	<div class="featured-gallery" >
	<?php $images = get_field('featured-gallery'); if( $images ): ?> 
		<?php foreach( $images as $image ): ?>
			<figure class="gallery-image" >
				<?php $srcset = tevkori_get_srcset_string( $image['id'], 'large' ); ?>
				<a class="lightbox-link" href="<?php echo $image['url']; ?>" data-lightbox="featured-gallery">
					<img data-lazy="<?php echo $image['sizes']['medium']; ?>" <?php echo $srcset; ?> alt="<?php echo $image['caption']; ?>" title="<?php echo $image['title']; ?>">
					<!-- <figcaption class="title"><a class="lightbox-link" href="<?php echo $image['url']; ?>"><?php echo $image['title']; ?></a></figcaption> -->
				</a>
			</figure>
		<?php endforeach; ?>
	<?php endif; ?>
	</div> <!-- home-hero-gallery -->