<?php
/**
* Plugin Name: Make Checkout required fields optional or Optional fields required for woocommerce
* Plugin URI: https://wordpress.org/plugins/make-checkout-required-fields-optional-or-optional-fields-required
* Description: You can make wocommerce checkout required fields optional or optional fields required in woocommerce
* Version: 1.0
* Author: Rounak Kumar
* Author URI: https://learn-wordpress-by-rk.blogspot.com/
**/
function cfs_rk_checkout_fields_setting_admin_menu() {
    add_menu_page('Checkout Fields Setting', ' Checkout Fields Setting', 'manage_options', 'checkout_fields_setting-rk', 'cfs_rk_checkout_fields_setting_function'); 
}	
add_action('admin_menu', 'cfs_rk_checkout_fields_setting_admin_menu');
function cfs_rk_checkout_fields_setting_function(){
	
$meg_saved = '';

if(isset($_POST['save_cfs_settings'])){
	update_option( 'cfs_rk_checkout_fields_setting', array_map( 'sanitize_text_field', $_POST['cfs_rk_checkout_fields_setting'] ) );
	$meg_saved = 'Settings Saved.';
}

$cfs_rk_checkout_fields_setting = get_option( 'cfs_rk_checkout_fields_setting' );

if($cfs_rk_checkout_fields_setting){
	
	$checkout_first_name		 = $cfs_rk_checkout_fields_setting['checkout_first_name'];
	$checkout_last_name			 = $cfs_rk_checkout_fields_setting['checkout_last_name'];
	$checkout_company_name		 = $cfs_rk_checkout_fields_setting['checkout_company_name'];
	$checkout_country_name		 = $cfs_rk_checkout_fields_setting['checkout_country_name'];
	$checkout_address_1_name	 = $cfs_rk_checkout_fields_setting['checkout_address_1_name'];
	$checkout_address_2_name	 = $cfs_rk_checkout_fields_setting['checkout_address_2_name'];
	$checkout_city_name			 = $cfs_rk_checkout_fields_setting['checkout_city_name'];
	$checkout_state_name		 = $cfs_rk_checkout_fields_setting['checkout_state_name'];
	$checkout_postcode_name		 = $cfs_rk_checkout_fields_setting['checkout_postcode_name'];
	$checkout_phone_number		 = $cfs_rk_checkout_fields_setting['checkout_phone_number'];
	$checkout_email_address		 = $cfs_rk_checkout_fields_setting['checkout_email_address'];
	
}else{
	
	$checkout_first_name		 = '';
	$checkout_last_name			 = '';
	$checkout_company_name		 = '';
	$checkout_country_name		 = '';
	$checkout_address_1_name	 = '';
	$checkout_address_2_name	 = '';
	$checkout_city_name			 = '';
	$checkout_state_name		 = '';
	$checkout_postcode_name		 = '';
	$checkout_phone_number		 = '';
	$checkout_email_address		 = '';
}
	?>
	<h1>Checkout Fields Setting</h1>
	<?php if(!empty($meg_saved)){ echo '<p class="success_msg">'.esc_html($meg_saved).'</p>'; } ?>
	<form method="post" class="cfs_rk_checkout_fields_setting_form">
	
		<div class="cfs-rk-form-row">
			<div class="cfs-rk-form-col">
				<label for="checkout-first-name">First Name:</label>
			</div>
			<div class="cfs-rk-form-col">
				<select id="checkout-first-name" name="cfs_rk_checkout_fields_setting[checkout_first_name]">
					<option value="required" <?php if($checkout_first_name == 'required' || empty($checkout_first_name)){ echo 'selected'; } ?>>Required</option>
					<option value="optional" <?php if($checkout_first_name == 'optional'){ echo 'selected'; } ?>>Optional</option>
					<option value="optionalandhide" <?php if($checkout_first_name == 'optionalandhide'){ echo 'selected'; } ?>>Optional and Hide</option>
				</select>
			</div>
		</div>
		
		<div class="cfs-rk-form-row">
			<div class="cfs-rk-form-col">
				<label for="checkout-last-name">Last Name:</label>
			</div>
			<div class="cfs-rk-form-col">
				<select id="checkout-last-name" name="cfs_rk_checkout_fields_setting[checkout_last_name]">
					<option value="required" <?php if($checkout_last_name == 'required' || empty($checkout_first_name)){ echo 'selected'; } ?>>Required</option>
					<option value="optional" <?php if($checkout_last_name == 'optional'){ echo 'selected'; } ?>>Optional</option>
					<option value="optionalandhide" <?php if($checkout_last_name == 'optionalandhide'){ echo 'selected'; } ?>>Optional and Hide</option>
				</select>
			</div>
		</div>
		
		<div class="cfs-rk-form-row">
			<div class="cfs-rk-form-col">
				<label for="checkout-company-name">Company:</label>
			</div>
			<div class="cfs-rk-form-col">
				<select id="checkout-company-name" name="cfs_rk_checkout_fields_setting[checkout_company_name]">
					<option value="required" <?php if($checkout_company_name == 'required'){ echo 'selected'; } ?>>Required</option>
					<option value="optional" <?php if($checkout_company_name == 'optional' || empty($checkout_first_name)){ echo 'selected'; } ?>>Optional</option>
					<option value="optionalandhide" <?php if($checkout_company_name == 'optionalandhide'){ echo 'selected'; } ?>>Optional and Hide</option>
				</select>
			</div>
		</div>
		
		<div class="cfs-rk-form-row">
			<div class="cfs-rk-form-col">
				<label for="checkout-country-name">Country:</label>
			</div>
			<div class="cfs-rk-form-col">
				<select id="checkout-country-name" name="cfs_rk_checkout_fields_setting[checkout_country_name]">
					<option value="required" <?php if($checkout_country_name == 'required' || empty($checkout_first_name)){ echo 'selected'; } ?>>Required</option>
					<option value="optional" <?php if($checkout_country_name == 'optional'){ echo 'selected'; } ?>>Optional</option>
					<option value="optionalandhide" <?php if($checkout_country_name == 'optionalandhide'){ echo 'selected'; } ?>>Optional and Hide</option>
				</select>
			</div>
		</div>
		
		<div class="cfs-rk-form-row">
			<div class="cfs-rk-form-col">
				<label for="checkout-address_1-name">Address 1:</label>
			</div>
			<div class="cfs-rk-form-col">
				<select id="checkout-address_1-name" name="cfs_rk_checkout_fields_setting[checkout_address_1_name]">
					<option value="required" <?php if($checkout_address_1_name == 'required' || empty($checkout_first_name)){ echo 'selected'; } ?>>Required</option>
					<option value="optional" <?php if($checkout_address_1_name == 'optional'){ echo 'selected'; } ?>>Optional</option>
					<option value="optionalandhide" <?php if($checkout_address_1_name == 'optionalandhide'){ echo 'selected'; } ?>>Optional and Hide</option>
				</select>
			</div>
		</div>
		
		<div class="cfs-rk-form-row">
			<div class="cfs-rk-form-col">
				<label for="checkout-address_2-name">Address 2:</label>
			</div>
			<div class="cfs-rk-form-col">
				<select id="checkout-address_2-name" name="cfs_rk_checkout_fields_setting[checkout_address_2_name]">
					<option value="required" <?php if($checkout_address_2_name == 'required'){ echo 'selected'; } ?>>Required</option>
					<option value="optional" <?php if($checkout_address_2_name == 'optional' || empty($checkout_first_name)){ echo 'selected'; } ?>>Optional</option>
					<option value="optionalandhide" <?php if($checkout_address_2_name == 'optionalandhide'){ echo 'selected'; } ?>>Optional and Hide</option>
				</select>
			</div>
		</div>
		
		<div class="cfs-rk-form-row">
			<div class="cfs-rk-form-col">
				<label for="checkout-city-name">City:</label>
			</div>
			<div class="cfs-rk-form-col">
				<select id="checkout-city-name" name="cfs_rk_checkout_fields_setting[checkout_city_name]">
					<option value="required" <?php if($checkout_city_name == 'required' || empty($checkout_first_name)){ echo 'selected'; } ?>>Required</option>
					<option value="optional" <?php if($checkout_city_name == 'optional'){ echo 'selected'; } ?>>Optional</option>
					<option value="optionalandhide" <?php if($checkout_city_name == 'optionalandhide'){ echo 'selected'; } ?>>Optional and Hide</option>
				</select>
			</div>
		</div>
		
		<div class="cfs-rk-form-row">
			<div class="cfs-rk-form-col">
				<label for="checkout-state-name">State:</label>
			</div>
			<div class="cfs-rk-form-col">
				<select id="checkout-state-name" name="cfs_rk_checkout_fields_setting[checkout_state_name]">
					<option value="required" <?php if($checkout_state_name == 'required' || empty($checkout_first_name)){ echo 'selected'; } ?>>Required</option>
					<option value="optional" <?php if($checkout_state_name == 'optional'){ echo 'selected'; } ?>>Optional</option>
					<option value="optionalandhide" <?php if($checkout_state_name == 'optionalandhide'){ echo 'selected'; } ?>>Optional and Hide</option>
				</select>
			</div>
		</div>
		
		<div class="cfs-rk-form-row">
			<div class="cfs-rk-form-col">
				<label for="checkout-postcode-name">PIN Code(Zip Code or Postal Code):</label>
			</div>
			<div class="cfs-rk-form-col">
				<select id="checkout-postcode-name" name="cfs_rk_checkout_fields_setting[checkout_postcode_name]">
					<option value="required" <?php if($checkout_postcode_name == 'required' || empty($checkout_first_name)){ echo 'selected'; } ?>>Required</option>
					<option value="optional" <?php if($checkout_postcode_name == 'optional'){ echo 'selected'; } ?>>Optional</option>
					<option value="optionalandhide" <?php if($checkout_postcode_name == 'optionalandhide'){ echo 'selected'; } ?>>Optional and Hide</option>
				</select>
			</div>
		</div>
		
		<div class="cfs-rk-form-row">
			<div class="cfs-rk-form-col">
				<label for="checkout-phone-name">Phone Number:</label>
			</div>
			<div class="cfs-rk-form-col">
				<select id="checkout-phone-name" name="cfs_rk_checkout_fields_setting[checkout_phone_number]">
					<option value="required" <?php if($checkout_phone_number == 'required' || empty($checkout_first_name)){ echo 'selected'; } ?>>Required</option>
					<option value="optional" <?php if($checkout_phone_number == 'optional'){ echo 'selected'; } ?>>Optional</option>
					<option value="optionalandhide" <?php if($checkout_phone_number == 'optionalandhide'){ echo 'selected'; } ?>>Optional and Hide</option>
				</select>
			</div>
		</div>
		
		<div class="cfs-rk-form-row">
			<div class="cfs-rk-form-col">
				<label for="checkout-email-name">Email:</label>
			</div>
			<div class="cfs-rk-form-col">
				<select id="checkout-email-name" name="cfs_rk_checkout_fields_setting[checkout_email_address]">
					<option value="required" <?php if($checkout_email_address == 'required' || empty($checkout_first_name)){ echo 'selected'; } ?>>Required</option>
					<option value="optional" <?php if($checkout_email_address == 'optional'){ echo 'selected'; } ?>>Optional</option>
					<option value="optionalandhide" <?php if($checkout_email_address == 'optionalandhide'){ echo 'selected'; } ?>>Optional and Hide</option>
				</select>
			</div>
		</div>
		
		<input type="submit" name="save_cfs_settings" value="Save Settings" />
		
	</form>
<style>
form.cfs_rk_checkout_fields_setting_form {
    border: 1px solid #ccc;
    padding: 30px;
    border-radius: 10px;
    margin-right: 15px;
	background: #fff;
	margin-top: 30px;
}
.cfs-rk-form-row {
    display: flex;
    flex-wrap: wrap;
    margin-bottom: 20px;
}
.cfs-rk-form-col {
    width: 40%;
}
.cfs-rk-form-col select {
    width: 200px;
}
.cfs-rk-form-col label {
    font-size: 16px;
    color: #000;
}
form.cfs_rk_checkout_fields_setting_form input[type="submit"] {
    background: #2271b1;
    border: 1px solid #2271b1;
    color: #fff;
    padding: 10px 20px;
    text-transform: uppercase;
    border-radius: 5px;
	cursor: pointer;
}
form.cfs_rk_checkout_fields_setting_form input[type="submit"]:hover {
    background: #000;
}
p.success_msg {
    color: green;
    border: 1px solid green;
    padding: 10px 15px;
    border-radius: 8px;
    margin-right: 15px;
    font-size: 16px;
    font-weight: bold;
    background: #0080001a;
    margin-top: 30px;
}
</style>
	<?php
}

add_filter( 'woocommerce_default_address_fields', 'cfs_rk_checkout_fields_setting_checkout_address_fields' );
function cfs_rk_checkout_fields_setting_checkout_address_fields( $fields ) {
	
	$cfs_rk_checkout_fields_setting = get_option( 'cfs_rk_checkout_fields_setting' );
	
	if($cfs_rk_checkout_fields_setting){
		
		if($cfs_rk_checkout_fields_setting['checkout_first_name'] == 'required'){
			$fields['first_name']['required']   = true;
		}else{
			$fields['first_name']['required']   = false;
		}
		
		if($cfs_rk_checkout_fields_setting['checkout_last_name'] == 'required'){
			$fields['last_name']['required']   = true;
		}else{
			$fields['last_name']['required']   = false;
		}
		
		if($cfs_rk_checkout_fields_setting['checkout_company_name'] == 'required'){
			$fields['company']['required']   = true;
		}else{
			$fields['company']['required']   = false;
		}
		
		if($cfs_rk_checkout_fields_setting['checkout_country_name'] == 'required'){
			$fields['country']['required']   = true;
		}else{
			$fields['country']['required']   = false;
		}
		
		if($cfs_rk_checkout_fields_setting['checkout_address_1_name'] == 'required'){
			$fields['address_1']['required']   = true;
		}else{
			$fields['address_1']['required']   = false;
		}
		
		if($cfs_rk_checkout_fields_setting['checkout_address_2_name'] == 'required'){
			$fields['address_2']['required']   = true;
		}else{
			$fields['address_2']['required']   = false;
		}
		
		if($cfs_rk_checkout_fields_setting['checkout_city_name'] == 'required'){
			$fields['city']['required']   = true;
		}else{
			$fields['city']['required']   = false;
		}
		
		if($cfs_rk_checkout_fields_setting['checkout_state_name'] == 'required'){
			$fields['state']['required']   = true;
		}else{
			$fields['state']['required']   = false;
		}
		
		if($cfs_rk_checkout_fields_setting['checkout_postcode_name'] == 'required'){
			$fields['postcode']['required']   = true;
		}else{
			$fields['postcode']['required']   = false;
		}
	}
	
    return $fields;
}


add_filter( 'woocommerce_billing_fields', 'cfs_rk_adjust_requirement_of_checkout_contact_fields');
function cfs_rk_adjust_requirement_of_checkout_contact_fields( $fields ) {
	
	$cfs_rk_checkout_fields_setting = get_option( 'cfs_rk_checkout_fields_setting' );
	
	if($cfs_rk_checkout_fields_setting){
	
		if($cfs_rk_checkout_fields_setting['checkout_phone_number'] == 'required'){
			$fields['billing_phone']['required']   = true;
		}else{
			$fields['billing_phone']['required']   = false;
		}
	
		if($cfs_rk_checkout_fields_setting['checkout_email_address'] == 'required'){
			$fields['billing_email']['required']   = true;
		}else{
			$fields['billing_email']['required']   = false;
		}
	}
	
    return $fields;
}

add_action('get_footer', 'cfs_rk_add_custome_code_to_footer');
function cfs_rk_add_custome_code_to_footer(){
	$cfs_rk_checkout_fields_setting = get_option( 'cfs_rk_checkout_fields_setting' );
	$checkout_style = '<style>';
	if($cfs_rk_checkout_fields_setting){
		
		if($cfs_rk_checkout_fields_setting['checkout_first_name'] == 'optionalandhide')
			$checkout_style .= '#billing_first_name_field{display:none !important;}';

		if($cfs_rk_checkout_fields_setting['checkout_last_name'] == 'optionalandhide')
			$checkout_style .= '#billing_last_name_field{display:none !important;}';

		if($cfs_rk_checkout_fields_setting['checkout_company_name'] == 'optionalandhide')
			$checkout_style .= '#billing_company_field{display:none !important;}';

		if($cfs_rk_checkout_fields_setting['checkout_country_name'] == 'optionalandhide')
			$checkout_style .= '#billing_country_field{display:none !important;}';

		if($cfs_rk_checkout_fields_setting['checkout_address_1_name'] == 'optionalandhide')
			$checkout_style .= '#billing_address_1_field{display:none !important;}';

		if($cfs_rk_checkout_fields_setting['checkout_address_2_name'] == 'optionalandhide')
			$checkout_style .= '#billing_address_2_field{display:none !important;}';

		if($cfs_rk_checkout_fields_setting['checkout_city_name'] == 'optionalandhide')
			$checkout_style .= '#billing_city_field{display:none !important;}';

		if($cfs_rk_checkout_fields_setting['checkout_state_name'] == 'optionalandhide')
			$checkout_style .= '#billing_state_field{display:none !important;}';

		if($cfs_rk_checkout_fields_setting['checkout_postcode_name'] == 'optionalandhide')
			$checkout_style .= '#billing_postcode_field{display:none !important;}';

		if($cfs_rk_checkout_fields_setting['checkout_phone_number'] == 'optionalandhide')
			$checkout_style .= '#billing_phone_field{display:none !important;}';

		if($cfs_rk_checkout_fields_setting['checkout_email_address'] == 'optionalandhide')
			$checkout_style .= '#billing_email_field{display:none !important;}';
		
	}
	
	$checkout_style .= '</style>';
	$allowed_html = array(
						'style' => array(),
					);
	echo wp_kses( $checkout_style, $allowed_html );
}