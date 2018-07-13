<?php
/**
 * Add theme dashboard page
 *
 * @package EightyDays
 */

/**
 * Dashboard class.
 */
class Penci_Soledad_Dashboard {
	private $theme;
	private $slug;

	public function __construct() {
		$this->theme = wp_get_theme();
		$this->slug  = $this->theme->template;
		$this->load_files();

		add_action( 'admin_menu', array( $this, 'add_menu' ) );
		add_action('admin_bar_menu', array( $this, 'add_bar_menu' ), 999 );
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
		add_action( 'admin_init', array( $this, 'redirect' ) );
		add_filter('upload_mimes', array( $this, 'custom_mime_types' ) );


	}

	function load_files(){
		if( is_admin() ) {
			require_once dirname( __FILE__ ) . '/lib/meta-box/meta-box.php';
			require_once dirname( __FILE__ ) . '/lib/mb-settings-page/mb-settings-page.php';
		}

		require_once dirname( __FILE__ ) . '/inc/custom_fonts.php';
		require_once dirname( __FILE__ ) . '/inc/require-activation.php';
		require_once dirname( __FILE__ ) . '/inc/white-label.php';
	}

	public function custom_mime_types($mime_types){
		$mime_types['woff'] = 'application/x-font-woff';
		$mime_types['svg'] = 'image/svg+xml';
		return $mime_types;
	}

	public function get_wel_page_title(){
		$wel_page_title = get_theme_mod( 'admin_wel_page_title' );
		return $wel_page_title ? $wel_page_title : 'Soledad';
	}

	/**
	 * Add theme dashboard page.
	 */
	public function add_menu() {

		$wel_page_title = $this->get_wel_page_title();
		add_menu_page( $wel_page_title, $wel_page_title, 'manage_options', 'soledad_dashboard_welcome', array( $this, 'dashboard_welcome' ), null, 3 );
		add_submenu_page( 'soledad_dashboard_welcome', esc_html__( 'Custom fonts', 'soledad' ), esc_html__( 'Custom Fonts', 'soledad' ), 'manage_options', 'soledad_custom_fonts', array( $this, 'custom_fonts' ) );

		$this->replace_text_submenu();

		add_action( 'admin_init', array( $this, 'update' ) );
	}

	public function update() {
		if ( ! empty($_POST) && isset( $_POST['_page'] ) && $_POST['_page'] === 'soledad_custom_fonts') {
			$data = $_POST;

			$fonts = array();

			foreach ($_POST as $key => $value) {
				if (strpos($key, 'soledad_') !== false) {
					$fonts[$key] = $value;
				}
			}
			penci_update_option($fonts);

			wp_safe_redirect(admin_url('admin.php?page=soledad_custom_fonts'));
			exit;
		}
	}

	function penci_update_option( $data ) {
		$old = penci_get_option();

		$data = array_merge( $old, (array) $data );

		update_option( 'penci_soledad_options', $data );
	}

	function penci_get_option( $key = null, $default = false ) {
		static $data;

		$data = get_option( 'penci_soledad_options' );

		if ( empty( $data ) ) {
			return array();
		}

		if ( $key === null ) {
			return $data;
		}

		if ( isset( $data[ $key ] ) ) {
			return $data[ $key ];
		}

		return get_option( $key, $default );
	}

	public function replace_text_submenu(){
		global $submenu;
		$submenu['soledad_dashboard_welcome'][0][0] = esc_html__( 'Welcome', 'soledad' );
	}


	public function add_bar_menu() {
		global $wp_admin_bar;
		if ( ! is_super_admin() || ! is_admin_bar_showing() ) {
			return;
		}
		$wp_admin_bar->add_menu(array(
			'parent' => 'site-name',
			'id' => 'soledad-dashboard',
			'title' => $this->get_wel_page_title(),
			'href' => admin_url('admin.php?page=soledad_dashboard_welcome')
		));
	}

	/**
	 * Show dashboard page.
	 */
	public function dashboard_welcome() {
		?>
		<div class="wrap about-wrap penci-about-wrap">
			<?php include get_template_directory() . '/inc/dashboard/sections/welcome.php'; ?>
			<?php include get_template_directory() . '/inc/dashboard/sections/getting-started.php'; ?>
		</div>
		<?php
	}

	public function custom_fonts() {
		?>
		<div class="wrap about-wrap penci-about-wrap">
			<?php include get_template_directory() . '/inc/dashboard/sections/welcome.php'; ?>
			<?php include get_template_directory() . '/inc/dashboard/sections/custom-fonts.php'; ?>
		</div>
		<?php
	}

	/**
	 * Enqueue scripts for dashboard page.
	 *
	 * @param string $hook Page hook.
	 */
	public function enqueue_scripts( $hook ) {

		wp_enqueue_media();
		wp_enqueue_style( "dashboard-style", get_template_directory_uri() . '/inc/dashboard/css/dashboard-style.css' );
		wp_enqueue_script( "soledad-dashboard-script", get_template_directory_uri() . '/inc/dashboard/js/script.js', array( 'jquery' ) );

		$localize_script = array(
			'ajaxUrl'         => admin_url( 'admin-ajax.php' ),
			'nonce'           => wp_create_nonce( 'ajax-nonce' )
		);
		wp_localize_script( "soledad-dashboard-script", 'PENCIDASHBOARD', $localize_script );
	}

	/**
	 * Redirect to dashboard page after theme activation.
	 */
	public function redirect() {
		global $pagenow;
		if ( is_admin() && isset( $_GET['activated'] ) && 'themes.php' === $pagenow ) {
			wp_safe_redirect( admin_url( "admin.php?page=soledad_dashboard_welcome" ) );
			exit;
		}
	}
}


if (!function_exists('penci_get_option')) {
	function penci_get_option($key = null, $default = false)
	{
		static $data;

		$data = get_option('penci_soledad_options');

		if (empty($data)) {
			return '';
		}

		if ($key === null) {
			return $data;
		}

		if (isset($data[$key])) {
			return $data[$key];
		}

		return get_option($key, $default);
	}
}

if (!function_exists('penci_update_option')) {
	function penci_update_option($data)
	{
		$old = penci_get_option();
		$old = $old ? $old : array();

		$data = array_merge($old, (array) $data);

		update_option('penci_soledad_options', $data);
	}
}