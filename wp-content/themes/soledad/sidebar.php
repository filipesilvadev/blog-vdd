<?php
/**
 * Main sidebar of Soledad theme
 * Display all widgets on right sidebar
 *
 * @package Wordpress
 * @since   1.0
 */
$heading_title = get_theme_mod( 'penci_sidebar_heading_style' ) ? get_theme_mod( 'penci_sidebar_heading_style' ) : 'style-1';
$heading_align = get_theme_mod( 'penci_sidebar_heading_align' ) ? get_theme_mod( 'penci_sidebar_heading_align' ) : 'pcalign-center';

$sidebar_portfolio = get_theme_mod( 'penci_sidebar_single_portfolio' );
if ( ! isset( $sidebar_portfolio ) || empty( $sidebar_portfolio ) ):  $sidebar_portfolio = 'main-sidebar'; endif;

$sidebar_home = get_theme_mod( 'penci_sidebar_name_home' );
if ( ! isset( $sidebar_home ) || empty( $sidebar_home ) ):  $sidebar_home = 'main-sidebar'; endif;

$sidebar_category = get_theme_mod( 'penci_sidebar_name_category' );
if ( ! isset( $sidebar_category ) || empty( $sidebar_category ) ):  $sidebar_category = 'main-sidebar'; endif;

$sidebar_single = get_theme_mod( 'penci_sidebar_name_single' );
if ( ! isset( $sidebar_single ) || empty( $sidebar_single ) ):  $sidebar_single = 'main-sidebar'; endif;

$sidebar_pages = get_theme_mod( 'penci_sidebar_name_pages' );
if ( ! isset( $sidebar_pages ) || empty( $sidebar_pages ) ):  $sidebar_pages = 'main-sidebar'; endif;

if( is_page() ) {
	$custom_sidebar_pages = get_post_meta( get_the_ID(), 'penci_custom_sidebar_page_display', true );
	if ( $custom_sidebar_pages ): $sidebar_pages = $custom_sidebar_pages; endif;
} elseif( is_single() ) {
	$custom_sidebar_post = get_post_meta( get_the_ID(), 'penci_custom_sidebar_page_display', true );
	if ( $custom_sidebar_post ): $sidebar_single = $custom_sidebar_post; endif;
} elseif( is_category() ) {
	$category_oj = get_queried_object();
	$fea_cat_id = $category_oj->term_id;
	$cat_meta   = get_option( "category_$fea_cat_id" );
	$cat_sidebar = isset( $cat_meta['cat_sidebar'] ) ? $cat_meta['cat_sidebar'] : '';
	if ( $cat_sidebar ): $sidebar_category = $cat_sidebar; endif;
}
?>

<div id="sidebar" class="penci-sidebar-content <?php echo sanitize_text_field( $heading_title . ' ' . $heading_align ); ?><?php if ( get_theme_mod( 'penci_sidebar_sticky' ) ): echo ' penci-sticky-sidebar'; endif; ?>">
	<div class="theiaStickySidebar">
		<?php /* Display sidebar */
		if ( is_singular( 'portfolio' ) && is_active_sidebar( $sidebar_portfolio ) ) {
			dynamic_sidebar( $sidebar_portfolio );
		}
		else if( function_exists( 'is_shop' ) && function_exists( 'is_product_category' ) && function_exists( 'is_product_tag' ) && function_exists( 'is_product' ) ) {
			if( ( is_shop() || is_product_category() || is_product_tag() ) && is_active_sidebar( 'penci-shop-sidebar' ) ) {
				dynamic_sidebar( 'penci-shop-sidebar' );
			} else if( is_product() && is_active_sidebar( 'penci-shop-single' ) ) {
				dynamic_sidebar( 'penci-shop-single' );
			} else {
				if ( ( is_home() || is_front_page() ) && is_active_sidebar( $sidebar_home ) ) {
					dynamic_sidebar( $sidebar_home );
				}
				else if ( is_category() && is_active_sidebar( $sidebar_category ) ) {
					dynamic_sidebar( $sidebar_category );
				}
				else if ( is_single() && is_active_sidebar( $sidebar_single ) ) {
					dynamic_sidebar( $sidebar_single );
				}
				else if ( is_page() && is_active_sidebar( $sidebar_pages )  ) {
					dynamic_sidebar( $sidebar_pages );
				}
				else {
					dynamic_sidebar( 'main-sidebar' );
				}
			}
		}
		else if ( ( is_home() || is_front_page() ) && is_active_sidebar( $sidebar_home ) ) {
			dynamic_sidebar( $sidebar_home );
		}
		else if ( is_category() && is_active_sidebar( $sidebar_category ) ) {
			dynamic_sidebar( $sidebar_category );
		}
		else if ( is_single() && is_active_sidebar( $sidebar_single ) ) {
			dynamic_sidebar( $sidebar_single );
		}
		else if ( is_page() && is_active_sidebar( $sidebar_pages )  ) {
			dynamic_sidebar( $sidebar_pages );
		}
		else {
			dynamic_sidebar( 'main-sidebar' );
		}
		?>
	</div>
</div>