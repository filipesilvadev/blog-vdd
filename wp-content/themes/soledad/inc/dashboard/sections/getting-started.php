<?php
/**
 * Getting started section.
 *
 * @package soledad
 */

?>
<h2 class="nav-tab-wrapper">
	<a href="<?php echo admin_url( 'admin.php?page=soledad_dashboard_welcome' ) ?>" class="nav-tab nav-tab-active"><?php esc_html_e( 'Getting started', 'soledad' ); ?></a>
	<a href="<?php echo admin_url( 'customize.php' ) ?>" class="nav-tab"><?php esc_html_e( 'Customize Style', 'soledad' ); ?></a>
	<a href="<?php echo admin_url( 'admin.php?page=soledad_custom_fonts' ) ?>" class="nav-tab"><?php esc_html_e( 'Custom Fonts', 'soledad' ); ?></a>
	<?php if( function_exists( 'penci_soledad_is_activated' ) && ! penci_soledad_is_activated() ): ?>
	<a href="<?php echo admin_url( 'admin.php?page=soledad_active_theme' ) ?>" class="nav-tab"><?php esc_html_e( 'Active theme', 'soledad' ); ?></a>
	<?php endif; ?>
</h2>

<div id="getting-started" class="gt-tab-pane gt-is-active penci-dashboard-wapper">
	<div class="feature-section two-col">
		<div class="col">
			<h3><?php esc_html_e( 'Step 1 - Install The Required Plugins', 'soledad' ); ?></h3>
			<p>
				<?php
				/* translators: theme name. */
				esc_html_e( 'Soledad needs some plugins to working properly. Please install and activate our required plugins.', 'soledad' );
				?>
			</p>
			<a class="button button-primary" href="<?php echo esc_url( admin_url( 'themes.php?page=tgmpa-install-plugins&plugin_status=install' ) ) ?>" target="_blank"><?php esc_html_e( 'Install Plugins', 'soledad' ); ?></a>

			<h3><?php esc_html_e( 'Step 2 - Import Demo Data (Optional)', 'soledad' ); ?></h3>
			<p><?php _e( '<strong>Note Important:</strong> Based on your site, have 2 ways to help you can import demo data for the site. 
If your site has old data, please do only <strong>Way 2: Import Only customizer data</strong> like the guide <a rel="nofollow" href="http://soledad.pencidesign.com/soledad-document/#import2" target="_blank">here</a>. If not, click to button bellow to import full a demo.', 'soledad' );
			?></p>
			<a class="button button-primary" href="<?php echo esc_url( admin_url( 'themes.php?page=import-demo-content' ) ) ?>" target="_blank"><?php esc_html_e( 'Import Demo Now', 'soledad' ); ?></a>
			<h3><?php esc_html_e( 'Video tutorials', 'soledad' ); ?></h3>
			<p><?php echo wp_kses_post( 'We believe that the easiest way to learn is watching a video tutorial. We have a growing library of narrated video tutorials to help you do just that.' ); ?></p>
			<a class="button button-primary" rel="nofollow" href="https://www.youtube.com/watch?v=50GwcSu2fPU&list=PL1PBMejQ2VTzaDTvAmzMZp1kLbAl1lqyJ" target="_blank"><?php esc_html_e( 'View tutorials', 'soledad' ); ?></a>

		</div>
		<div class="col">
			<h3><?php esc_html_e( 'Customize The Theme', 'soledad' ); ?></h3>
			<p><?php esc_html_e( 'Using the WordPress Customizer you can easily customize every aspect of the theme.', 'soledad' ); ?></p>
			<p>
				<a href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Start Customize', 'soledad' ); ?></a>
			</p>
			<h3><?php esc_html_e( 'Read Full Documentation', 'soledad' ); ?></h3>
			<p class="about"><?php esc_html_e( 'Need any helps to setup and configure the theme? Please check our full documentation for detailed information on how to use it first.', 'soledad' ); ?></p>
			<p>
				<a rel="nofollow" href="<?php echo esc_url( 'http://soledad.pencidesign.com/soledad-document/' ); ?>" target="_blank" class="button button-secondary"><?php esc_html_e( 'Read Documentation', 'soledad' ); ?></a>
			</p>
		</div>
	</div>
	<hr>
	<h3 class="title-more-items"><?php esc_html_e( 'More items by PenciDesign', 'soledad' ) ?></h3>
	<div class="feature-section products three-col">
		<div class="col product">
			<a target="_blank" rel="nofollow" href="<?php echo esc_url( "https://themeforest.net/item/soledad-multiconcept-blogmagazine-wp-theme/20822517?ref=PenciDesign" ) ?>" title="<?php echo esc_attr( 'PenNews' ) ?>">
				<img class="product__image" src="<?php echo esc_url( get_template_directory_uri() . '/inc/dashboard/images/pennews.jpg' ) ?>" alt="" width="300" height="150">
			</a>
			<div class="product__body">
				<h3 class="product__title">
					<a target="_blank" rel="nofollow" href="<?php echo esc_url( "https://themeforest.net/item/soledad-multiconcept-blogmagazine-wp-theme/20822517?ref=PenciDesign/" ) ?>" title="<?php echo esc_attr( 'PenNews' ) ?>">PenNews - News/ Magazine/ Business/ Portfolio/ Landing AMP WordPress Theme</a>
				</h3>
			</div>
		</div>
		<div class="col product">
			<a target="_blank" rel="nofollow" href="<?php echo esc_url( "https://themeforest.net/item/penshop-multipurpose-ecommerce-wordpress-theme/20469533?ref=PenciDesign" ) ?>" title="<?php echo esc_attr( 'PenShop' ) ?>">
				<img class="product__image" src="<?php echo esc_url( get_template_directory_uri() . '/inc/dashboard/images/penshop.jpg' ) ?>" alt="" width="300" height="150">
			</a>
			<div class="product__body">
				<h3 class="product__title">
					<a target="_blank" rel="nofollow" href="<?php echo esc_url( "https://themeforest.net/item/penshop-multipurpose-ecommerce-wordpress-theme/20469533?ref=PenciDesign" ) ?>" title="<?php echo esc_attr( 'PenShop - Multi-Purpose eCommerce WordPress Theme' ) ?>">PenShop - Multi-Purpose eCommerce WordPress Theme</a>
				</h3>
			</div>
		</div>
		<div class="col product">
			<a target="_blank" rel="nofollow" href="<?php echo esc_url( "https://themeforest.net/item/vancouver-multiple-layouts-wordpress-blog-theme/12180181?ref=PenciDesign" ) ?>" title="<?php echo esc_attr( 'Vancouver' ) ?>">
				<img class="product__image" src="<?php echo esc_url( get_template_directory_uri() . '/inc/dashboard/images/vancouver.jpg' ) ?>" alt="" width="300" height="150">
			</a>
			<div class="product__body">
				<h3 class="product__title">
					<a target="_blank" rel="nofollow" href="<?php echo esc_url( "https://themeforest.net/item/vancouver-multiple-layouts-wordpress-blog-theme/12180181?ref=PenciDesign" ) ?>" title="<?php echo esc_attr( 'Vancouver' ) ?>">Vancouver - Multiple Layouts WordPress Blog Theme</a>
				</h3>
			</div>
		</div>

	</div>
</div>
