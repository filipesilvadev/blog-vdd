<?php
/**
 * Template display for featured category style 11
 *
 * @since 1.0
 */
?>

<div class="mag-photo">
	<div class="magcat-thumb hentry">
		<?php
		/* Display Review Piechart  */
		if( function_exists('penci_display_piechart_review_html') ) {
			penci_display_piechart_review_html( get_the_ID() );
		}
		?>
		<a href="<?php the_permalink(); ?>" class="mag-overlay-photo"></a>
		<?php if( ! get_theme_mod( 'penci_disable_lazyload_layout' ) ) { ?>
		<a class="penci-image-holder penci-lazy<?php echo penci_class_lightbox_enable(); ?>" data-src="<?php echo penci_get_featured_image_size( get_the_ID(), penci_featured_images_size() ); ?>" href="<?php penci_permalink_fix(); ?>" title="<?php echo wp_strip_all_tags( get_the_title() ); ?>">
		</a>
		<?php } else { ?>
		<a class="penci-image-holder<?php echo penci_class_lightbox_enable(); ?>" style="background-image: url('<?php echo penci_get_featured_image_size( get_the_ID(), penci_featured_images_size() ); ?>');" href="<?php penci_permalink_fix(); ?>" title="<?php echo wp_strip_all_tags( get_the_title() ); ?>">
		</a>
		<?php } ?>

		<div class="magcat-detail">
			<h3 class="magcat-titlte entry-title"><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( wp_strip_all_tags( get_the_title() ), 15, '...' ); ?></a></h3>
			<?php if ( ! get_theme_mod( 'penci_home_featured_cat_author' ) || ! get_theme_mod( 'penci_home_featured_cat_date' ) ): ?>
				<div class="grid-post-box-meta mag-meta">
					<?php if ( ! get_theme_mod( 'penci_home_featured_cat_author' ) ) : ?>
						<span class="author vcard"><a class="url fn n" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></span>
					<?php endif; ?>
					<?php if ( ! get_theme_mod( 'penci_home_featured_cat_date' ) ) : ?>
						<span><?php penci_soledad_time_link(); ?></span>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			<?php penci_soledad_meta_schema(); ?>
		</div>
	</div>
</div>