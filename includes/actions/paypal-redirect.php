<?php if ( ! defined( 'ABSPATH' ) ) exit;

final class NF_Action_PayPalRedirect extends NF_Notification_Base_Type {
	/**
	 * @var string
	 */
	public $name;

	/**
	 * @var string
	 */
	public $slug = 'paypal-redirect';


	/**
	 * Constructor
	 */
	public function __construct () {
		$this->name = __( 'PayPal Redirect', NF_PayPalRedirect::TEXTDOMAIN );

		add_filter( 'nf_notification_types', array( $this, 'register_action_type' ) );
	}


	/**
	 * Register Action Type
	 *
	 * @param $types
	 * @return array
	 */
	public function register_action_type ( $types ) {
		$types[ $this->slug ] = $this;
		return (array) $types;
	}


	/**
	 * Edit Screen
	 *
	 * @return void
	 */
	public function edit_screen ( $id = '' ) {
		$settings['paypal_email'] = Ninja_Forms()->notification( $id )->get_setting( 'paypal_email' );
		$settings['accepted_fields'] = Ninja_Forms()->notification( $id )->get_setting( 'accepted_fields' );

		include NF_PayPalRedirect::$dir . 'includes/templates/action-paypal-redirect.html.php';
	}


	/**
	 * Process
	 *
	 * @param string $id
	 * @return void
	 */
	public function process ($id) {
		global $ninja_forms_processing;

		$form_id = $ninja_forms_processing->get_form_ID();
		$form_title = $ninja_forms_processing->get_form_setting( 'form_title' );
		$all_fields = ninja_forms_get_fields_by_form_id( $form_id );
		$total = '';

		// Get IDs of fields that are to be sent to PayPal
		$accepted_fields = $PayPalEmail = Ninja_Forms()->notification( $id )->get_setting( 'accepted_fields' );

		$accepted_ary = explode(',', $accepted_fields);

		if ( is_array( $all_fields ) ) {
			foreach( $all_fields as $field ) {
				$value = $ninja_forms_processing->get_field_value( $field['id'] );

				if (in_array($field['id'], $accepted_ary)) {
					$total += $value;
				}
			}
		}

		// Grab PayPal email from NF setting
		$paypal_email = Ninja_Forms()->notification( $id )->get_setting( 'paypal_email' );

		// Format PayPal URL
		$url = 'https://www.paypal.com/us/cgi-bin/webscr?cmd=_xclick
		&business=' . urlencode($paypal_email) . '
		&item_name=' . urlencode($form_title) . '
		&item_number=
		&amount=' . $total . '
		&no_shipping=1
		&return=' . site_url() . '
		&currency_code=USD&lc=US&bn=PP-BuyNowBF';

		// Do the redirection to PayPal
		wp_redirect($url);
		exit;
	}
}

new NF_Action_PayPalRedirect();
