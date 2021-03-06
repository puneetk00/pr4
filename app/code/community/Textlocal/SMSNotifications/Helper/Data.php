<?php

class Textlocal_SMSNotifications_Helper_Data extends Mage_Core_Helper_Abstract {

	
	public $app_name = 'Textlocal_SMSNotifications';

	// This method simply returns an array of all the extension specific settings
	public function getSettings()
	{
		// Create an empty array
		$settings = array();

		// Get the  settings
		$settings['sms_gateway_url'] = "https://api.textlocal.in/";//Mage::getStoreConfig('smsnotifications/sms_api_credentials/gateway_url');
		$settings['sms_auth_token'] = Mage::getStoreConfig('smsnotifications/sms_api_credentials/auth_token');
		$settings['sms_sender_name'] = Mage::getStoreConfig('smsnotifications/sms_api_credentials/sender_name');

		// Get the general settings
		$settings['country_code_filter'] = Mage::getStoreConfig('smsnotifications/general/country_code_filter');

		// Get the order notification settings
		$settings['order_noficication_recipients'] = Mage::getStoreConfig('smsnotifications/order_notification/recipients');
		$settings['order_noficication_recipients'] = explode(';', $settings['order_noficication_recipients']);
		$settings['order_notification_status'] = Mage::getStoreConfig('smsnotifications/order_notification/order_status');

		// Get the shipment notification settings
		$settings['shipment_notification_message'] = Mage::getStoreConfig('smsnotifications/shipment_notification/message');

		// Get the invoice notification settings
		$settings['invoice_notification_message'] = Mage::getStoreConfig('smsnotifications/invoice_notification/message');
		// Return the settings
		return $settings;
	}

	// This method sends the specified message to the specified recipients
	public function sendSms($body, $recipients = array())
	{
		// Get the settings
		$settings = $this->getSettings();

		// If no recipients have been specified, don't do anything
		if(!count($recipients)) {
			return;
		}

		$errors = array();

		$apiurl = $settings['sms_gateway_url'];
		$a=strtolower(substr($apiurl,0,7));
			 
		if ($a=="http://") //checking if already contains http://
		 {
		 	$api_url=substr($apiurl,7,strlen($apiurl));
		 	$start="http://";
		}
	    elseif ($a=="https:/") //checking if already contains htps://
		{
		 	$api_url=substr($apiurl,8,strlen($apiurl));
		 	$start="http://";
		}
		else { 
		 	
		    $start="http://";
		    $api_url = $settings['sms_gateway_url'];
		}

		$url="http://login.bulksmsgateway.in/sendmessage.php?user=saurabhranjan&password=saurabhranjan@1&mobile=".urlencode(implode(',',$recipients))."&sender=plutok&message=".urlencode($body)."&type=".urlencode('3'); 
		/* $ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		echo $curl_scraped_page = curl_exec($ch);
		curl_close($ch); */
		
		/* $uri = $start.$api_url."send?&apiKey=".urlencode($settings['sms_auth_token'])."&sender=".urlencode($settings['sms_sender_name'])."&numbers=".urlencode(implode(',',$recipients))."&message=".urlencode($body); */
	    
	    $result = file_get_contents($url);
	    $rows = json_decode($result, true);

	    if ($rows['status'] != 'success') {
    		return false;
	    } 
	    return true;
		
	}

	// This method sends a notification email to the store's admin
	public function sendAdminEmail($body)
	{
		// Get the email settings from the store
		$store_name = Mage::app()->getStore()->getFrontendName();
		$general_contact_name = Mage::getStoreConfig('trans_email/ident_general/name');
		$general_contact_email = Mage::getStoreConfig('trans_email/ident_general/email');

		// Set the subject
		$subject = sprintf('%s: Notification from «%s»', $store_name, $this->app_name);

		// Create the mail object
		$mail = Mage::getModel('core/email');
		$mail->setToName($general_contact_name);
		$mail->setToEmail($general_contact_email);
		$mail->setBody($body);
		$mail->setSubject('=?utf-8?B?' . base64_encode($subject) . '?=');
		$mail->setFromEmail($general_contact_email);
		$mail->setFromName($this->app_name);
		$mail->setType('text');

		// Try sending the email
		try {
		    $mail->send();
		}
		catch (Exception $e) {
		    Mage::logException($e);
		    $this->log('unable to send email to admin: ' . print_r($e, true));
		}
	}

	// This method creates a log entry in the extension specific log file
	public function log($msg)
	{
		Mage::log($msg, null, 'smsnotifications.log', true);
	}

}