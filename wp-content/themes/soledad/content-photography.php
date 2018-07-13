<?php
/**
 * Template loop for typography style
 */
?>
<li class="grid-style grid-2-style typography-style">
	<article id="post-<?php the_ID(); ?>" class="item hentry">

		<div class="thumbnail">
			<?php if( ! get_theme_mod( 'penci_disable_lazyload_layout' ) ) { ?>
			<a class="penci-image-holder penci-lazy" data-src="<?php echo penci_get_featured_image_size( get_the_ID(), penci_featured_images_size() ); ?>" href="<?php the_permalink(); ?>" title="<?php echo wp_strip_all_tags( get_the_title() ); ?>">
			</a>
			<?php } else { ?>
			<a class="penci-image-holder" style="background-image: url('<?php echo penci_get_featured_image_size( get_the_ID(), penci_featured_images_size() ); ?>');" href="<?php the_permalink(); ?>" title="<?php echo wp_strip_all_tags( get_the_title() ); ?>">
			</a>
			<?php } ?>

			<div class="content-typography">
				<a href="<?php the_permalink(); ?>" class="overlay-typography"></a>
				<div class="main-typography">
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
			</div>
		</div>

	</article>
</li>