	<section class="featured-gallery" >
	<?php $images = get_field('featured-gallery'); if( $images ): ?> 
		<?php foreach( $images as $image ): ?>
			<figure class="gallery-image" >
				<?php $srcset = tevkori_get_srcset_string( $image['id'], 'large' ); ?>
				<a class="lightbox-link" href="<?php echo $image['url']; ?>" data-lightbox="featured-gallery">
					<img data-lazy="<?php echo $image['sizes']['medium']; ?>" <?php echo $srcset; ?> alt="<?php echo $image['caption']; ?>" title="<?php echo $image['title']; ?>">
					<figcaption class="title">
						<div class="caption-contain">
							<a class="lightbox-link" href="<?php echo $image['url']; ?>" data-lightbox="featured-gallery"><h3><?php echo $image['title']; ?></h3></a>
							<p><?php echo $image['caption']; ?></p>
						</div>
					</figcaption>
				</a>
			</figure>
		<?php endforeach; ?>
	<?php endif; ?>
	</section> <!-- featured-gallery -->