<?php
if( ! function_exists( 'penci_soledad_is_activated' ) ){
	function penci_soledad_is_activated(){
		if ( defined('ENVATO_HOSTED_SITE') ) {
		   return true;
		}

		return get_option( 'penci_soledad_is_activated' );
	}
}

if( ! class_exists( 'Penci_Require_Active' ) ) {
	class Penci_Require_Active{
		protected  $time_max = 2592000; // 30 days
		protected  $theme_info;

		public function __construct() {
			// Not run code require active theme on the admin
			if( ! is_admin() ){
				return;
			}

			$this->theme_info = wp_get_theme();
			$this->main();

			add_action( 'wp_ajax_nopriv_penci_check_envato_code', array( $this, 'do_check_envato_code' ) );
			add_action( 'wp_ajax_penci_check_envato_code', array( $this, 'do_check_envato_code' ) );

			add_action( 'admin_enqueue_scripts', array( $this, 'add_admin_scripts' ), 10, 1 );
		}

		public function main(){

			$curent_time  = time();
			$active_status_last_time = get_option( 'soledad_active_status_last_time' );

			add_action('admin_menu', array($this, 'add_submenu_page'), 15);

			if( empty( $active_status_last_time ) ){
				update_option( 'soledad_active_status_last_time',$curent_time  );
			}else{

				if( penci_soledad_is_activated() ){
					return;
				}
				add_action( 'admin_notices', array( $this, 'validation_notice' ) );
			}
		}

		public function add_admin_scripts( $hook ) {
			if( penci_soledad_is_activated() ){
				return;
			}

			$active_status_last_time = get_option( 'soledad_active_status_last_time' );
			$time_delta = time() - $active_status_last_time;
			$time_max   = $this->time_max;

			if ($time_delta < $time_max ) {
				return;
			}

			if ( $hook == 'post-new.php' || $hook == 'post.php' ) {
				wp_enqueue_script( "soledad-editor-script", get_template_directory_uri() . '/inc/dashboard/js/edit-post.js', array( 'jquery' ) );
			}
		}

		function add_submenu_page(){
			if( penci_soledad_is_activated() ){
				return;
			}

			add_submenu_page( 'soledad_dashboard_welcome',
				esc_html__( 'Active theme', 'soledad' ),
				esc_html__( 'Active theme', 'soledad' ),
				'manage_options', 'soledad_active_theme',
				array( $this, 'require_active_page' )
			);
		}

		public function get_server_id(){
			ob_start();
			phpinfo(INFO_GENERAL);
			echo $this->theme_info->name;
			return md5(ob_get_clean());
		}

		/**
		 * Show notice active theme
		 */
		function validation_notice() {
			$soledad_theme = wp_get_theme();
			$link_page_active = admin_url( 'admin.php?page=soledad_active_theme' );
			?>
			<div class="notice notice-success is-dismissible">
				<p>
					<a class="penci-notice-logo" href="<?php echo esc_url( 'http://pencidesign.com/' ); ?>" target="_blank"><?php $this->get_icon_penci(); ?></a>
					<?php echo esc_html( sprintf( __( 'Please activate soledad to use full features of the theme. We\'re sorry about this but we built the activation system to prevent piracy of our themes in the internet, we can do better serve our paying customers.', 'soledad' ), $soledad_theme->name ) ); ?>
				</p>
				<p>
					<strong style="color:red"><?php esc_html_e( 'Please activate the theme!', 'soledad' ); ?></strong> -
					<a href="<?php echo ( $link_page_active ); ?>"><?php esc_html_e( 'Click here to enter your code','soledad' ); ?></a>
					- <?php _e( 'if you have issues with this please contact us via <a rel="nofollow" href="http://pencidesign.ticksy.com/" target="_blank">our support forum</a> or <a rel="nofollow" href="https://themeforest.net/user/pencidesign#contact" target="_blank">our contact form</a>', 'soledad' ); ?> -
					<a href="<?php echo ( $link_page_active ); ?>"><?php esc_html_e( 'Active theme page here', 'soledad' ); ?></a></p>
			</div>
			<?php
		}

		/**
		 * Get icon penci
		 */
		function get_icon_penci() {
			?>
			<svg style="position: relative; top:4px;margin-right: 5px;" version="1.0" xmlns="http://www.w3.org/2000/svg"
			     width="18px" height="18px" viewBox="0 0 26.000000 26.000000"
			     preserveAspectRatio="xMidYMid meet">
				<g transform="translate(0.000000,26.000000) scale(0.100000,-0.100000)"
				   fill="#000000" stroke="none">
					<path d="M72 202 l-62 -60 0 -66 0 -66 125 0 125 0 0 61 0 61 -63 65 -62 64
				-63 -59z m73 28 c3 -5 -3 -10 -15 -10 -12 0 -18 5 -15 10 3 6 10 10 15 10 5 0
				12 -4 15 -10z m57 -57 c34 -33 36 -38 20 -49 -14 -10 -21 -8 -45 12 -36 31
				-62 30 -93 -1 -21 -21 -28 -23 -44 -13 -19 12 -18 14 17 50 51 52 92 52 145 1z
				m-77 -93 c0 -59 -1 -60 -27 -60 -26 0 -28 3 -28 42 0 24 7 49 17 60 28 32 38
				21 38 -42z m49 44 c10 -9 16 -33 16 -60 0 -40 -2 -44 -25 -44 -24 0 -25 3 -25
				60 0 62 7 71 34 44z m-130 -20 c9 -8 16 -31 16 -50 0 -27 -4 -34 -20 -34 -17
				0 -20 7 -20 50 0 28 2 50 4 50 3 0 12 -7 20 -16z m201 -34 c0 -44 -3 -50 -20
				-50 -18 0 -20 5 -17 38 4 35 17 62 31 62 3 0 6 -22 6 -50z"/>
					<path d="M90 70 c0 -5 5 -10 10 -10 6 0 10 5 10 10 0 6 -4 10 -10 10 -5 0 -10
				-4 -10 -10z"/>
				</g>
			</svg>
			<?php
		}

		public function require_active_page(){
			$soledad_theme = wp_get_theme();
			?>
			<div class="wrap about-wrap penci-about-wrap penci-active-theme penci-dashboard-wapper">
				<?php include get_template_directory() . '/inc/dashboard/sections/welcome.php'; ?>
				<h2 class="nav-tab-wrapper">
					<a href="<?php echo admin_url( 'admin.php?page=soledad_dashboard_welcome' ) ?>" class="nav-tab"><?php esc_html_e( 'Getting started', 'soledad' ); ?></a>
					<a href="<?php echo admin_url( 'customize.php' ) ?>" class="nav-tab"><?php esc_html_e( 'Customize Style', 'soledad' ); ?></a>
					<a href="<?php echo admin_url( 'admin.php?page=soledad_custom_fonts' ) ?>" class="nav-tab"><?php esc_html_e( 'Custom Fonts', 'soledad' ); ?></a>
					<a href="<?php echo admin_url( 'admin.php?page=soledad_active_theme' ) ?>" class="nav-tab nav-tab-active"><?php esc_html_e( 'Active theme', 'soledad' ); ?></a>
				</h2>
				<div class="penci-activate-wrap gt-tab-pane gt-is-active">
					<div class="penci-activate-envato-code">
						<div class="penci-activate-code-title"><?php echo esc_html( sprintf( __( 'Active %s', 'soledad' ), $soledad_theme->name ) ); ?></div>
						<p class="penci-activate-desc">
							<?php echo esc_html( sprintf( __( 'Please activate %s to use full features of the theme. We\'re sorry about this but we built the activation system to prevent piracy of our themes in the internet,
							 we can do better serve our paying customers.', 'soledad' ), $soledad_theme->name ) ); ?>
							<br>
							<?php esc_html_e( 'And please note that: With each license - you just can use for one website. If you want to use this theme for multiple sites, please buy more licenses for it. 2 licenses can use for 2 websites, 4 licenses can use for 4 websites, ...','soledad' ); ?>
						</p>
						<form id="penci-check-license" action="<?php echo admin_url( 'admin.php?page=soledad_active_theme' ); ?>">
							<div class="penci-activate-inputs">
								<input name="evato-code" class="penci-form-control evato-code" type="text" placeholder="<?php esc_html_e( 'Your Envato code', 'soledad' ); ?>" value="">
								<input type="hidden" name="server-id" class="server-id" value="<?php echo $this->get_server_id();?>" readonly/>
								<span class="penci-form-control-bar"></span>
								<div class="penci-activate-err">
									<span class="penci-err-missing"><?php esc_html_e( 'Code is required','soledad' ); ?></span>
									<span class="penci-err-length"><?php esc_html_e( 'Code is too short','soledad' ); ?></span>
									<span class="penci-err-invalid"><?php esc_html_e( 'Code is not valid','soledad' ); ?></span>
									<span class="penci-err-check-error"><?php esc_html_e( 'Envato API error, please try again later','soledad' ) ?></span>
								</div>
							</div>
							<button class="soledad-activate-button"><?php esc_html_e( 'Activate theme', 'soledad' ); ?></button>
							<div class="spinner"></div>
							<div class="soledad-find-code">
								<a rel="nofollow" href="<?php echo  esc_url( 'https://help.market.envato.com/hc/en-us/articles/202822600-Where-Is-My-Purchase-Code-' ); ?>" target="_blank">
									<?php esc_html_e( 'Click here to find your Envato code', 'soledad' ); ?>
								</a>
							</div>
						</form>
					</div>

				</div>
			</div>
			<?php
		}

		public function do_check_envato_code(){

			$envato_code = isset( $_POST['envato_code'] ) ? $_POST['envato_code'] : '';


			if ( empty( $envato_code ) ) {
				return;
			}

			$envato_code = preg_replace('/\s+/', '', $envato_code );

			$url = 'http://pennews.pencidesign.com/envato_code/verify-purchase.php';
			$response = wp_remote_post( $url, array (
				'method' => 'POST',
				'body' => array( 'purchase_code' => $envato_code ),
				'timeout' => 15,
				'cookies' => array()
			));
			if ( is_wp_error( $response ) ) {
				wp_send_json_error( array( 'is_wp_error' => 1 ) );
			}else {
				$purchase_data = json_decode( $response['body'] , true );

				if ( isset( $purchase_data['verify-purchase']['buyer'] ) ) {
					update_option( 'penci_soledad_is_activated', 1 );
					wp_send_json_success( array( 'success' => true ) );
				}else{
					wp_send_json_error( array( 'is_wp_error' => 0 ) );
				}
			}
		}
	}
}

new Penci_Require_Active;
