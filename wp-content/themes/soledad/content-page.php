<?php
/**
 * This is content page will display in loop of page.php file
 * Don't edit this file, let create child theme and override it
 *
 * @since 1.0
 */

$pagetitle = get_post_meta( $post->ID, 'penci_page_display_title', true );
$sharebox = get_post_meta( $post->ID, 'penci_page_sharebox', true );
$block_style = get_theme_mod('penci_blockquote_style') ? get_theme_mod('penci_blockquote_style') : 'style-1';
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if( get_the_title() && ( 'no' != $pagetitle ) ): ?>
	<div class="penci-page-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php penci_soledad_meta_schema(); ?>
	</div>
	<?php endif; ?>

	<?php if ( function_exists( 'has_post_thumbnail' ) && has_post_thumbnail() && ! get_theme_mod( 'penci_page_hide_featured_image' ) ) : ?>
		<div class="post-image">
			<a href="<?php the_permalink() ?>">
				<img class="attachment-penci-full-thumb size-penci-full-thumb penci-lazy wp-post-image" src="<?php echo get_template_directory_uri() . '/images/penci2-holder.png'; ?>" alt="<?php wp_strip_all_tags( the_title() ); ?>" data-src="<?php echo penci_get_featured_image_size( get_the_ID(),	'penci-full-thumb' ); ?>">
			</a>
		</div>
	<?php endif; ?>

	<div class="post-entry <?php echo 'blockquote-'. $block_style; ?><?php if( get_theme_mod( 'penci_page_comments' ) && get_theme_mod( 'penci_page_share' ) ): echo ' page-has-margin'; endif; ?>">
		<div class="inner-post-entry entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages(); ?>
		</div>
	</div>

	<?php if ( ! get_theme_mod( 'penci_page_share' ) && ( 'no' != $sharebox ) ) : ?>
		<div class="tags-share-box hide-tags page-share<?php if( ! comments_open() || get_theme_mod( 'penci_page_comments' ) ): echo ' has-line'; endif; ?>">
			<div class="post-share">
				<span class="share-title"><?php echo penci_get_setting( 'penci_trans_share' ); ?></span>
				<div class="list-posts-share">
					<?php penci_soledad_social_share( );  ?>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if ( ! get_theme_mod( 'penci_page_comments' ) ) : ?>
		<?php comments_template( '', true ); ?>
	<?php endif; ?>

</article>