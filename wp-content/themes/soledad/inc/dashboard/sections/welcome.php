<?php
/**
 * Welcome section.
 *
 * @package soledad
 */

$soledad_theme = wp_get_theme();
?>
<h1>
	<?php
	// Translators: %1$s - Theme name, %2$s - Theme version.
	echo esc_html( sprintf( __( 'Welcome to %1$s - Version %2$s', 'soledad' ), 'Soledad', $soledad_theme->version ) );
	?>
</h1>
<div class="about-text"><?php echo esc_html( "Thank you for purchasing our theme!
Interested in keeping up to date with PenciDesign's future projects and releases.
Thanks so much!" ); ?>
	
<?php
$admin_wel_page_text = get_theme_mod( 'admin_wel_page_text' );
if( $admin_wel_page_text ) {
	echo do_shortcode( wpautop( $admin_wel_page_text ) );
}
?>	
</div>
<a rel="nofollow" target="_blank" href="<?php echo esc_url( 'http://pencidesign.com/' ); ?>" class="wp-badge">PenciDesign</a>
