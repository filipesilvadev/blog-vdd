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

?>

<div id="sidebar" class="penci-sidebar-content <?php echo sanitize_text_field( $heading_title . ' ' . $heading_align ); ?><?php if ( get_theme_mod( 'penci_sidebar_sticky' ) ): echo ' penci-sticky-sidebar'; endif; ?>">
	<div class="theiaStickySidebar">
		<?php
		if (  is_active_sidebar( 'penci-buddypress' ) ) {
			dynamic_sidebar( 'penci-buddypress' );
		}elseif( is_active_sidebar( 'main-sidebar' ) ) {
			dynamic_sidebar( 'main-sidebar' );
		}
		?>
	</div>
</div>