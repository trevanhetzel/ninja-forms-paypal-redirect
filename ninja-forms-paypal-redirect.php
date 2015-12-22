<?php if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Plugin Name:     Ninja Forms - PayPal Redirect
 * Plugin URI:      http://trevan.co/ninja-forms-paypal-redirect
 * Description:     Adds ability to redirect to PayPal with user submitted form values as prices
 * Version:         1.1.0
 * Author:          Trevan Hetzel
 * Author URI:      http://trevan.co
 * License:         GPL-2.0+
 * License URI:     http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:     ninja-forms-paypal-redirect
*/

/**
 * Class NF_PayPalRedirect
 */
class NF_PayPalRedirect {
	const VERSION = '1.0';

	const TEXTDOMAIN = 'ninja-forms-paypal-redirect';

	/**
	 * Plugin Directory
	 *
	 * @var string $dir
	 */
	public static $dir = '';

	/**
	 * Plugin URL
	 *
	 * @var string $url
	 */
	public static $url = '';

	/**
	 * Ninja Forms Extension Updater
	 *
	 * @var NF_Extension_Updater
	 */
	public $NF_Extension_Updater;


	/**
	 * Constructor
	 */
	public function __construct () {
		self::$dir = plugin_dir_path( __FILE__ );

		self::$url = plugin_dir_url( __FILE__ );

		add_action( 'plugins_loaded', array( $this, 'ninja_forms_includes' ) );
	}


	/**
	 * Ninja Forms Includes
	 *
	 * Include plugin files for use in Ninja Forms
	 */
	public function ninja_forms_includes () {
		require_once self::$dir . 'includes/actions/paypal-redirect.php';
	}

	/**
	 * Extension Setup License
	 *
	 * Register with the Ninja Forms licensing system through Easy Digital Downloads
	 */
	public function ninja_forms_extension_setup_license () {
		if ( class_exists( 'NF_Extension_Updater' ) ) {
			$this->NF_Extension_Updater = new NF_Extension_Updater( 'PayPalRedirect', self::VERSION, 'Trevan Hetzel', __FILE__, 'paypal-redirect' );
		}
	}
}

new NF_PayPalRedirect();
