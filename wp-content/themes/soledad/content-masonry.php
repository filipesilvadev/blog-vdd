<?php
/**
 * Template loop for masonry style
 */
?>
<article id="post-<?php the_ID(); ?>" class="item item-masonry grid-masonry hentry">
	<?php if ( has_post_format( 'gallery' ) ) : ?>
		<?php $images = get_post_meta( get_the_ID(), '_format_gallery_images', true ); ?>
		<?php if ( $images ) : ?>
			<div class="thumbnail">
				<div class="penci-owl-carousel penci-owl-carousel-slider penci-nav-visible" data-auto="false" data-lazy="true">
					<?php foreach ( $images as $image ) : ?>
						<?php $the_image = wp_get_attachment_image_src( $image, penci_featured_images_size() ); ?>
						<?php $the_caption = get_post_field( 'post_excerpt', $image ); ?>
						<figure>
							<a class="penci-image-holder penci-lazy<?php echo penci_class_lightbox_enable(); ?>" data-src="<?php echo esc_url( $the_image[0] ); ?>" href="<?php penci_permalink_fix(); ?>" title="<?php echo wp_strip_all_tags( get_the_title() ); ?>"></a>
						</figure>
					<?php endforeach; ?>
				</div>
			</div>
		<?php endif; ?>
	<?php elseif ( has_post_thumbnail() ) : ?>
		<div class="thumbnail">
			<?php
			/* Display Review Piechart  */
			if( function_exists('penci_display_piechart_review_html') ) {
				penci_display_piechart_review_html( get_the_ID() );
			}
			?>
			<a href="<?php penci_permalink_fix() ?>" class="post-thumbnail<?php echo penci_class_lightbox_enable(); ?>">
				<?php the_post_thumbnail( 'penci-masonry-thumb' ); ?>
			</a>
			<?php if( ! get_theme_mod('penci_grid_icon_format') ): ?>
				<?php if ( has_post_format( 'video' ) ) : ?>
					<a href="<?php the_permalink() ?>" class="icon-post-format"><i class="fa fa-play"></i></a>
				<?php endif; ?>
				<?php if ( has_post_format( 'audio' ) ) : ?>
					<a href="<?php the_permalink() ?>" class="icon-post-format"><i class="fa fa-music"></i></a>
				<?php endif; ?>
				<?php if ( has_post_format( 'link' ) ) : ?>
					<a href="<?php the_permalink() ?>" class="icon-post-format"><i class="fa fa-link"></i></a>
				<?php endif; ?>
				<?php if ( has_post_format( 'quote' ) ) : ?>
					<a href="<?php the_permalink() ?>" class="icon-post-format"><i class="fa fa-quote-left"></i></a>
				<?php endif; ?>
			<?php endif; ?>
		</div>
	<?php endif; ?>

	<div class="grid-header-box">
		<?php if ( ! get_theme_mod( 'penci_grid_cat' ) ) : ?>
			<span class="cat"><?php penci_category( '' ); ?></span>
		<?php endif; ?>
		<h2 class="entry-title grid-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php penci_soledad_meta_schema(); ?>
		<?php if ( ! get_theme_mod( 'penci_grid_date' ) || ! get_theme_mod( 'penci_grid_author' ) ) : ?>
			<div class="grid-post-box-meta">
				<?php if ( ! get_theme_mod( 'penci_grid_author' ) ) : ?>
					<span class="author-italic author vcard"><?php echo penci_get_setting('penci_trans_by'); ?> <a class="url fn n" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></span>
				<?php endif; ?>
				<?php if ( ! get_theme_mod( 'penci_grid_date' ) ) : ?>
					<span><?php penci_soledad_time_link(); ?></span>
				<?php endif; ?>
			</div>
		<?php endif; ?>
	</div>

	<?php if( get_the_excerpt() && ! get_theme_mod( 'penci_grid_remove_excerpt' ) ): ?>
		<div class="item-content entry-content">
			<?php the_excerpt(); ?>
		</div>
	<?php endif; ?>

	<?php if( get_theme_mod( 'penci_grid_add_readmore' ) ): ?>
		<div class="penci-readmore-btn">
			<a class="penci-btn-readmore" href="<?php the_permalink(); ?>"><?php echo penci_get_setting( 'penci_trans_read_more' ); ?><i class="fa fa-angle-double-right"></i></a>
		</div>
	<?php endif; ?>

	<?php if ( ! get_theme_mod( 'penci_grid_share_box' ) ) : ?>
		<div class="penci-post-box-meta penci-post-box-grid">
			<div class="penci-post-share-box">
				<?php echo penci_getPostLikeLink( get_the_ID() ); ?>
				<?php penci_soledad_social_share( );  ?>
			</div>
		</div>
	<?php endif; ?>
</article>