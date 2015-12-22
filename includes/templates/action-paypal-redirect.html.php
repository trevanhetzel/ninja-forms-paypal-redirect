<tr>
	<th scope="row">
		<label for="settings[paypal_email]"><?php _e( 'PayPal email address', NF_PayPalRedirect::TEXTDOMAIN ); ?></label>
	</th>
	<td>
		<input type="text" name="settings[paypal_email]" id="settings-paypal_email" value="<?php echo $settings['paypal_email']; ?>" />
	</td>
</tr>
<tr>
	<th scope="row">
		<label for="settings[accepted_fields]"><?php _e( 'PayPal fields', NF_PayPalRedirect::TEXTDOMAIN ); ?></label>
	</th>
	<td>
		<input type="text" name="settings[accepted_fields]" id="settings-accepted_fields" value="<?php echo $settings['accepted_fields']; ?>" />
		<span class="howto">Enter the IDs of each field you wish to be calculated into the total sent to PayPal (comma separated).</span>
	</td>
</tr>
