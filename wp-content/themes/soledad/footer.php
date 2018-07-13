<?php
/**
 * This is footer template of Soledad theme
 *
 * @package Wordpress
 * @since   1.0
 */
?>
<!-- END CONTAINER -->
</div>
<div class="clear-footer"></div>

<?php if ( get_theme_mod( 'penci_footer_adsense' ) ): echo '<div class="container penci-google-adsense penci-google-adsense-footer">'. do_shortcode( get_theme_mod( 'penci_footer_adsense' ) ) .'</div>'; endif; ?>

<?php if ( ! get_theme_mod( 'penci_footer_widget_area' ) ) :
	$footer_layout = get_theme_mod( 'penci_footer_widget_area_layout' ) ? get_theme_mod( 'penci_footer_widget_area_layout' ) : 'style-1';
	if( ( in_array( $footer_layout, array( 'style-2', 'style-3', 'style-8', 'style-9', 'style-10' ) ) && ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) ) ) || ( in_array( $footer_layout, array( 'style-1', 'style-5', 'style-6', 'style-7' ) ) && ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) ) || ( $footer_layout == 'style-4' && ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' ) ) ) ):
		?>
		<div id="widget-area"<?php if( get_theme_mod( 'penci_footer_widget_bg_image' ) ): echo ' class="penci-lazy" data-src="'. get_theme_mod( 'penci_footer_widget_bg_image' ) .'"'; endif; ?>>
			<div class="container">
				<?php if( in_array( $footer_layout, array( 'style-1', 'style-5', 'style-6', 'style-7' ) ) ){ ?>
					<div class="footer-widget-wrapper footer-widget-<?php echo $footer_layout; ?>">
						<?php dynamic_sidebar( 'footer-1' ); ?>
					</div>
					<div class="footer-widget-wrapper footer-widget-<?php echo $footer_layout; ?>">
						<?php dynamic_sidebar( 'footer-2' ); ?>
					</div>
					<div class="footer-widget-wrapper footer-widget-<?php echo $footer_layout; ?> last">
						<?php dynamic_sidebar( 'footer-3' ); ?>
					</div>
				<?php } elseif( in_array( $footer_layout, array( 'style-2', 'style-3', 'style-8', 'style-9', 'style-10' ) ) ) { ?>
					<div class="footer-widget-wrapper footer-widget-<?php echo $footer_layout; ?>">
						<?php dynamic_sidebar( 'footer-1' ); ?>
					</div>
					<div class="footer-widget-wrapper footer-widget-<?php echo $footer_layout; ?> last">
						<?php dynamic_sidebar( 'footer-2' ); ?>
					</div>
				<?php } elseif( $footer_layout == 'style-4' ) { ?>
					<div class="footer-widget-wrapper footer-widget-<?php echo $footer_layout; ?>">
						<?php dynamic_sidebar( 'footer-1' ); ?>
					</div>
					<div class="footer-widget-wrapper footer-widget-<?php echo $footer_layout; ?>">
						<?php dynamic_sidebar( 'footer-2' ); ?>
					</div>
					<div class="footer-widget-wrapper footer-widget-<?php echo $footer_layout; ?>">
						<?php dynamic_sidebar( 'footer-3' ); ?>
					</div>
					<div class="footer-widget-wrapper footer-widget-<?php echo $footer_layout; ?> last">
						<?php dynamic_sidebar( 'footer-4' ); ?>
					</div>
				<?php } ?>
			</div>
		</div>
<?php endif;
endif; /* End check if disable footer widget area */  ?>

<?php if ( is_active_sidebar( 'footer-instagram' ) ): ?>
	<div class="footer-instagram">
		<?php dynamic_sidebar( 'footer-instagram' ); ?>
	</div>
<?php endif; ?>

<?php
/**
 * Display sign-up mailchimp form on the header
 * Check if 'footer-signup-form' has widget, if true display it
 *
 * @since 4.0
 */
if ( is_active_sidebar( 'footer-signup-form' ) ): ?>
	<div class="footer-subscribe">
		<?php dynamic_sidebar( 'footer-signup-form' ); ?>
	</div>
<?php endif; ?>

<footer id="footer-section" class="penci-footer-social-media penci-lazy<?php if( get_theme_mod( 'penci_footer_social_around' ) ): echo ' footer-social-remove-circle'; endif; if( get_theme_mod( 'penci_footer_social_drop_line' ) ): echo ' footer-social-drop-line'; endif; ?>"<?php if( get_theme_mod( 'penci_footer_copyright_bg_image' ) ): echo ' data-src="'. get_theme_mod( 'penci_footer_copyright_bg_image' ) .'"'; endif; ?> itemscope itemtype="http://schema.org/WPFooter">
	<div class="container">
		<?php if ( ! get_theme_mod( 'penci_footer_social' ) ) : ?>
			<?php if ( get_theme_mod( 'penci_email_me' ) || get_theme_mod( 'penci_vk' ) || penci_get_setting( 'penci_facebook' ) || penci_get_setting( 'penci_twitter' ) || get_theme_mod( 'penci_google' ) || get_theme_mod( 'penci_instagram' ) || get_theme_mod( 'penci_pinterest' ) || get_theme_mod( 'penci_linkedin' ) || get_theme_mod( 'penci_flickr' ) || get_theme_mod( 'penci_behance' ) || get_theme_mod( 'penci_tumblr' ) || get_theme_mod( 'penci_youtube' ) || get_theme_mod( 'penci_rss' ) ) : ?>
				<div class="footer-socials-section">
					<ul class="footer-socials">
						<?php if ( penci_get_setting( 'penci_facebook' ) ) : ?>
							<li><a href="<?php echo esc_attr( penci_get_setting( 'penci_facebook' ) ); ?>" target="_blank"><i class="fa fa-facebook"></i><span><?php esc_html_e( 'Facebook', 'soledad' ); ?></span></a></li>
						<?php endif; ?>
						<?php if ( penci_get_setting( 'penci_twitter' ) ) : ?>
							<li><a href="<?php echo esc_attr( penci_get_setting( 'penci_twitter' ) ); ?>" target="_blank"><i class="fa fa-twitter"></i><span><?php esc_html_e( 'Twitter', 'soledad' ); ?></span></a></li>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'penci_google' ) ) : ?>
							<li><a href="<?php echo esc_attr( get_theme_mod( 'penci_google' ) ); ?>" target="_blank"><i class="fa fa-google-plus"></i><span><?php esc_html_e( 'Google +', 'soledad' ); ?></span></a></li>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'penci_instagram' ) ) : ?>
							<li><a href="<?php echo esc_attr( get_theme_mod( 'penci_instagram' ) ); ?>" target="_blank"><i class="fa fa-instagram"></i><span><?php esc_html_e( 'Instagram', 'soledad' ); ?></span></a></li>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'penci_pinterest' ) ) : ?>
							<li><a href="<?php echo esc_attr( get_theme_mod( 'penci_pinterest' ) ); ?>" target="_blank"><i class="fa fa-pinterest"></i><span><?php esc_html_e( 'Pinterest', 'soledad' ); ?></span></a></li>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'penci_linkedin' ) ) : ?>
							<li><a href="<?php echo esc_url( get_theme_mod( 'penci_linkedin' ) ); ?>" target="_blank"><i class="fa fa-linkedin"></i><span><?php esc_html_e( 'Linkedin', 'soledad' ); ?></span></a></li>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'penci_flickr' ) ) : ?>
							<li><a href="<?php echo esc_attr( get_theme_mod( 'penci_flickr' ) ); ?>" target="_blank"><i class="fa fa-flickr"></i><span><?php esc_html_e( 'Flickr', 'soledad' ); ?></span></a></li>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'penci_behance' ) ) : ?>
							<li><a href="<?php echo esc_attr( get_theme_mod( 'penci_behance' ) ); ?>" target="_blank"><i class="fa fa-behance"></i><span><?php esc_html_e( 'Behance', 'soledad' ); ?></span></a></li>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'penci_tumblr' ) ) : ?>
							<li><a href="<?php echo esc_attr( get_theme_mod( 'penci_tumblr' ) ); ?>" target="_blank"><i class="fa fa-tumblr"></i><span><?php esc_html_e( 'Tumblr', 'soledad' ); ?></span></a></li>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'penci_youtube' ) ) : ?>
							<li><a href="<?php echo esc_attr( get_theme_mod( 'penci_youtube' ) ); ?>" target="_blank"><i class="fa fa-youtube-play"></i><span><?php esc_html_e( 'Youtube', 'soledad' ); ?></span></a></li>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'penci_email_me' ) ) : ?>
							<li><a href="<?php echo get_theme_mod( 'penci_email_me' ); ?>"><i class="fa fa-envelope-o"></i><span><?php esc_html_e( 'Email', 'soledad' ); ?></span></a></li>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'penci_vk' ) ) : ?>
							<li><a href="<?php echo esc_attr( get_theme_mod( 'penci_vk' ) ); ?>" target="_blank"><i class="fa fa-vk"></i><span><?php esc_html_e( 'Vk', 'soledad' ); ?></span></a></li>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'penci_bloglovin' ) ) : ?>
							<li><a href="<?php echo esc_attr( get_theme_mod( 'penci_bloglovin' ) ); ?>" target="_blank"><i class="fa fa-heart"></i><span><?php esc_html_e( 'Bloglovin', 'soledad' ); ?></span></a></li>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'penci_vine' ) ) : ?>
							<li><a href="<?php echo esc_attr( get_theme_mod( 'penci_vine' ) ); ?>" target="_blank"><i class="fa fa-vine"></i><span><?php esc_html_e( 'Vine', 'soledad' ); ?></span></a></li>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'penci_soundcloud' ) ) : ?>
							<li><a href="<?php echo esc_attr( get_theme_mod( 'penci_soundcloud' ) ); ?>" target="_blank"><i class="fa fa-soundcloud"></i><span><?php esc_html_e( 'Soundcloud', 'soledad' ); ?></span></a></li>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'penci_snapchat' ) ) : ?>
							<li><a href="<?php echo esc_attr( get_theme_mod( 'penci_snapchat' ) ); ?>" target="_blank"><i class="fa fa-snapchat-ghost"></i><span><?php esc_html_e( 'Snapchat', 'soledad' ); ?></span></a></li>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'penci_spotify' ) ) : ?>
							<li><a href="<?php echo esc_attr( get_theme_mod( 'penci_spotify' ) ); ?>" target="_blank"><i class="fa fa-spotify"></i><span><?php esc_html_e( 'Spotify', 'soledad' ); ?></span></a></li>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'penci_github' ) ) : ?>
							<li><a href="<?php echo esc_attr( get_theme_mod( 'penci_github' ) ); ?>" target="_blank"><i class="fa fa-github"></i><span><?php esc_html_e( 'Github', 'soledad' ); ?></span></a></li>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'penci_stack' ) ) : ?>
							<li><a href="<?php echo esc_attr( get_theme_mod( 'penci_stack' ) ); ?>" target="_blank"><i class="fa fa-stack-overflow"></i><span><?php esc_html_e( 'Stack-Overflow', 'soledad' ); ?></span></a></li>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'penci_twitch' ) ) : ?>
							<li><a href="<?php echo esc_attr( get_theme_mod( 'penci_twitch' ) ); ?>" target="_blank"><i class="fa fa-twitch"></i><span><?php esc_html_e( 'Twitch', 'soledad' ); ?></span></a></li>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'penci_vimeo' ) ) : ?>
							<li><a href="<?php echo esc_attr( get_theme_mod( 'penci_vimeo' ) ); ?>" target="_blank"><i class="fa fa-vimeo"></i><span><?php esc_html_e( 'Vimeo', 'soledad' ); ?></span></a></li>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'penci_steam' ) ) : ?>
							<li><a href="<?php echo esc_attr( get_theme_mod( 'penci_steam' ) ); ?>" target="_blank"><i class="fa fa-steam"></i><span><?php esc_html_e( 'Steam', 'soledad' ); ?></span></a></li>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'penci_xing' ) ) : ?>
							<li><a href="<?php echo esc_attr( get_theme_mod( 'penci_xing' ) ); ?>" target="_blank"><i class="fa fa-xing"></i><span><?php esc_html_e( 'Xing', 'soledad' ); ?></span></a></li>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'penci_whatsapp' ) ) : ?>
							<li><a href="<?php echo esc_attr( get_theme_mod( 'penci_whatsapp' ) ); ?>" target="_blank"><i class="fa fa-whatsapp"></i><span><?php esc_html_e( 'Whatsapp', 'soledad' ); ?></span></a></li>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'penci_telegram' ) ) : ?>
							<li><a href="<?php echo esc_attr( get_theme_mod( 'penci_telegram' ) ); ?>" target="_blank"><i class="fa fa-telegram"></i><span><?php esc_html_e( 'Telegram', 'soledad' ); ?></span></a></li>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'penci_reddit' ) ) : ?>
							<li><a href="<?php echo esc_attr( get_theme_mod( 'penci_reddit' ) ); ?>" target="_blank"><i class="fa fa-reddit-alien"></i><span><?php esc_html_e( 'Reddit', 'soledad' ); ?></span></a></li>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'penci_ok' ) ) : ?>
							<li><a href="<?php echo esc_attr( get_theme_mod( 'penci_ok' ) ); ?>" target="_blank"><i class="fa fa-odnoklassniki"></i><span><?php esc_html_e( 'Ok', 'soledad' ); ?></span></a></li>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'penci_500px' ) ) : ?>
							<li><a href="<?php echo esc_attr( get_theme_mod( 'penci_500px' ) ); ?>" target="_blank"><i class="fa fa-500px"></i><span><?php esc_html_e( '500px', 'soledad' ); ?></span></a></li>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'penci_stumbleupon' ) ) : ?>
							<li><a href="<?php echo esc_attr( get_theme_mod( 'penci_stumbleupon' ) ); ?>" target="_blank"><i class="fa fa-stumbleupon"></i><span><?php esc_html_e( 'StumbleUpon', 'soledad' ); ?></span></a></li>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'penci_wechat' ) ) : ?>
							<li><a href="<?php echo esc_attr( get_theme_mod( 'penci_wechat' ) ); ?>" target="_blank"><i class="fa fa-weixin"></i><span><?php esc_html_e( 'Wechat', 'soledad' ); ?></span></a></li>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'penci_weibo' ) ) : ?>
							<li><a href="<?php echo esc_attr( get_theme_mod( 'penci_weibo' ) ); ?>" target="_blank"><i class="fa fa-weibo"></i><span><?php esc_html_e( 'Weibo', 'soledad' ); ?></span></a></li>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'penci_rss' ) ) : ?>
							<li><a href="<?php echo esc_url( get_theme_mod( 'penci_rss' ) ); ?>" target="_blank"><i class="fa fa-rss"></i><span><?php esc_html_e( 'RSS', 'soledad' ); ?></span></a></li>
						<?php endif; ?>
					</ul>
				</div>
			<?php endif; ?>
		<?php endif; ?>
		<?php if ( ( get_theme_mod( 'penci_footer_logo' ) && ! get_theme_mod( 'penci_hide_footer_logo' ) ) || get_theme_mod( 'penci_footer_copyright' ) || ! get_theme_mod( 'penci_go_to_top' ) || get_theme_mod( 'penci_footer_menu' ) ) : ?>
			<div class="footer-logo-copyright<?php if ( ! get_theme_mod( 'penci_footer_logo' ) || get_theme_mod( 'penci_hide_footer_logo' ) ) : echo ' footer-not-logo'; endif; ?><?php if ( get_theme_mod( 'penci_go_to_top' ) ) : echo ' footer-not-gotop'; endif; ?>">
				<?php if ( get_theme_mod( 'penci_footer_logo' ) && ! get_theme_mod( 'penci_hide_footer_logo' ) ) : ?>
					<div id="footer-logo">
						<a href="<?php echo esc_url( home_url('/') ); ?>">
							<img class="penci-lazy" src="<?php echo get_template_directory_uri(); ?>/images/penci2-holder.png" data-src="<?php echo esc_url( get_theme_mod( 'penci_footer_logo' ) ); ?>" alt="<?php esc_html_e( 'Footer Logo', 'soledad' ); ?>" />
						</a>
					</div>
				<?php endif; ?>

				<?php if( get_theme_mod( 'penci_footer_menu' ) ): ?>
					<div class="footer-menu-wrap" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
					<?php
					/**
					 * Display main navigation
					 */
					wp_nav_menu( array(
						'container'      => false,
						'theme_location' => 'footer-menu',
						'menu_class'     => 'footer-menu'
					) );
					?>
					</div>
				<?php endif; /* End check if enable footer menu */?>

				<?php if ( penci_get_setting( 'penci_footer_copyright' ) ) : ?>
					<div id="footer-copyright">
						<p><?php echo penci_get_setting( 'penci_footer_copyright' ); ?></p>
					</div>
				<?php endif; ?>
				<?php if ( ! get_theme_mod( 'penci_go_to_top' ) ) : ?>
					<div class="go-to-top-parent"><a href="#" class="go-to-top"><span><i class="fa fa-angle-up"></i><br><?php echo penci_get_setting( 'penci_trans_back_to_top' ); ?></span></a></div>
				<?php endif; ?>
			</div>
		<?php endif; ?>
		<?php if ( get_theme_mod( 'penci_go_to_top_floating' ) ) : ?>
			<div class="penci-go-to-top-floating"><i class="fa fa-angle-up"></i></div>
		<?php endif; ?>
	</div>
</footer>

</div><!-- End .wrapper-boxed -->

<div id="fb-root"></div>
<?php
$gprd_desc       = penci_get_setting( 'penci_gprd_desc' );
$gprd_accept     = penci_get_setting( 'penci_gprd_btn_accept' );
$gprd_rmore      = penci_get_setting( 'penci_gprd_rmore' );
$gprd_rmore_link = penci_get_setting( 'penci_gprd_rmore_link' );
$penci_gprd_text = penci_get_setting( 'penci_gprd_policy_text' );
if ( get_theme_mod( 'penci_enable_cookie_law' ) && $gprd_desc && $gprd_accept && $gprd_rmore ) :
	$cookie = isset( $_COOKIE['penci_law_footer'] ) ? $_COOKIE['penci_law_footer'] : 'show';
	$data_url = get_template_directory_uri() . '/cookie.php';
	?>
	<div class="penci-wrap-gprd-law<?php if ( $cookie == 'hide' ): echo ' penci-wrap-gprd-law-close'; endif; ?>">
		<div class="penci-gprd-law">
			<p>
				<?php if ( $gprd_desc ): echo $gprd_desc; endif; ?>
				<?php if ( $gprd_accept ): echo '<a class="penci-gprd-accept" href="#" data-url="'. $data_url .'" data-cookie="' . $cookie . '">' . $gprd_accept . '</a>'; endif; ?>
				<?php if ( $gprd_rmore ): echo '<a class="penci-gprd-more" href="' . $gprd_rmore_link . '">' . $gprd_rmore . '</a>'; endif; ?>
			</p>
		</div>
		<?php if ( ! get_theme_mod( 'penci_show_cookie_law' ) ): ?>
			<a class="penci-gdrd-show" href="#" data-url="<?php echo $data_url; ?>"><?php echo $penci_gprd_text; ?></a>
		<?php endif; ?>
	</div>

<?php endif; ?>
<?php wp_footer(); ?>

<?php if( get_theme_mod('penci_footer_analytics') ):
echo get_theme_mod('penci_footer_analytics');
endif; ?>

</body>
</html>