<?php

class Textlocal_SMSNotifications_Model_Observer
{
    // This method is called whenever an order is saved. It checks if the order's
    // status has been updated and if yes, checks if the new order status should
    // trigger sending a notification

    public function salesOrderSaveAfter($observer)
    {

        // Get the settings
        $settings = Mage::helper('smsnotifications/data')->getSettings();

        // Get the new order object
        $order = $observer->getEvent()->getOrder();

        // Get the old order data
        $oldOrder = $order->getOrigData();

        $order_notification_status = [];
        //$order_notification_status = array('pending','holded','closed','canceled');
        foreach (Mage::getSingleton('sales/order_config')->getStatuses() as $_code => $_label) {
            if ($_code != 'processing' || $_code != 'complete') {
                $order_notification_status[] = $_code;
            }
            //$order_notification_status[] = $_code;
        }

        if (!in_array($order->getStatus(), $order_notification_status)) {
            return;
        }

        // If the order status hasn't changed, don't do anything
        if ($oldOrder['status'] === $order->getStatus()) {
            return;
        }

        if (Mage::app()->getStore()->isAdmin() && $order->getStatus() == 'pending') {
            $resource       = Mage::getSingleton('core/resource');
            $readConnection = $resource->getConnection('core_read');
            $table          = $resource->getTableName('sales/order_status_history');

            $query = 'SELECT count(status) as status FROM '.$table.' WHERE status = "pending" and parent_id = '
                     .(int) $order->getId().' LIMIT 1';
            $pendingStatus = $readConnection->fetchOne($query);
        } else {
            $pendingStatus = 1;
        }

        // Generate the body for the notification
        $store_name = Mage::app()->getStore()->getFrontendName();

        $billingAdress  = $order->getBillingAddress();
        $shippingAdress = $order->getShippingAddress();

        if ($order->getCustomerFirstname()) {
            $customer_name = $order->getCustomerFirstname();
            $customer_name .= ' '.$order->getCustomerLastname();
        } elseif ($billingAdress->getFirstname()) {
            $customer_name = $billingAdress->getFirstname();
            $customer_name .= ' '.$billingAdress->getLastname();
        } else {
            $customer_name = $ShippingAddress->getFirstname();
            $customer_name .= ' '.$ShippingAddress->getLastname();
        }

        $order_amount = $order->getBaseCurrencyCode();
        $order_amount  .= ' '.$order->getBaseGrandTotal();
        $order_id        = $order->getIncrementId();
        $telephoneNumber = trim($billingAdress->getTelephone());

        $ordermethod = ($order->getRemoteIp()) ?  1 : 0;

        if ($ordermethod == 1 && $order->getStatus() == 'processing' && $pendingStatus <= 1) {
            $text = Mage::getStoreConfig('smsnotifications/order_notification/order_status');
        } elseif ($ordermethod == 0 && $order->getStatus() == 'processing' && $pendingStatus <= 1) {
            $text = Mage::getStoreConfig('smsnotifications/order_notification/order_status');
        } elseif ($order->getStatus() == 'unhold') {
            $text = Mage::getStoreConfig('smsnotifications/order_notification/order_unhold_status');
        } elseif ($order->getStatus() == 'holded') {
            $text = Mage::getStoreConfig('smsnotifications/order_notification/order_hold_status');
        } elseif ($order->getStatus() == 'canceled') {
            $text = Mage::getStoreConfig('smsnotifications/order_notification/order_canceled_status');
        } elseif ($order->getStatus() == 'closed') {
            $text = Mage::getStoreConfig('smsnotifications/order_notification/order_closed_status');
        } elseif ($order->getStatus() == 'complete') {
            $text = Mage::getStoreConfig('smsnotifications/shipment_notification/message');
        } else {
            $text = Mage::getStoreConfig('smsnotifications/order_notification/order_custom_status');
        }

        $text        = str_replace('{{name}}', $customer_name, $text);
        $text        = str_replace('{{amount}}', $order_amount, $text);
        $text        = str_replace('{{order}}', $order_id, $text);
        $orderStatus = str_replace('_', ' ', $order->getStatus());
        $text        = str_replace('{{orderStatus}}', $orderStatus, $text);

        // If no recipients have been set, we can't do anything
        if (!count($settings['order_noficication_recipients'])) {
            return;
        }

        // Send the order notification by SMS
        array_push($settings['order_noficication_recipients'], $telephoneNumber);

        $result = Mage::helper('smsnotifications/data')->sendSms($text, $settings['order_noficication_recipients']);

        // Display a success or error message
        if ($result) {
            $sendNumber1 = implode(',', $settings['order_noficication_recipients']);
            Mage::getSingleton('adminhtml/session')->addSuccess(sprintf('The order notification has been sent via SMS to: %s', $sendNumber1));
        } else {
            Mage::getSingleton('adminhtml/session')->addError('There has been an error sending the order notification SMS.');
        }
    }

    // This method is called whenever a new shipment is created for an order
    public function salesOrderInvoiceSaveAfter($observer)
    {

        // Get the settings
        $settings = Mage::helper('smsnotifications/data')->getSettings();

        $text = Mage::getStoreConfig('smsnotifications/invoice_notification/message');
        // If no invoice notification has been specified, no notification can be sent
        if (!$text) {
            return;
        }

        $order    = $observer->getEvent()->getInvoice()->getOrder();
        $order_id = $order->getIncrementId();

        $invoice   = $order->getInvoiceCollection()->getFirstItem();
        $invoiceId = $invoice->getIncrementId();

        $store_name = Mage::app()->getStore()->getFrontendName();

        $billingAdress  = $order->getBillingAddress();
        $shippingAdress = $order->getShippingAddress();

        if ($order->getCustomerFirstname()) {
            $customer_name = $order->getCustomerFirstname();
            $customer_name .= ' '.$order->getCustomerLastname();
        } elseif ($billingAdress->getFirstname()) {
            $customer_name = $billingAdress->getFirstname();
            $customer_name .= ' '.$billingAdress->getLastname();
        } else {
            $customer_name = $shippingAdress->getFirstname();
            $customer_name .= ' '.$shippingAdress->getLastname();
        }

        $order_amount = $order->getBaseCurrencyCode();
        $order_amount  .= ' '.$order->getBaseGrandTotal();

        $telephoneNumber = trim($shippingAdress->getTelephone());

        // Check if a telephone number has been specified
        if ($telephoneNumber) {
            $text = Mage::getStoreConfig('smsnotifications/invoice_notification/message');

            // Send the shipment notification to the specified telephone number
            $text = $settings['invoice_notification_message'];

            $text = str_replace('{{name}}', $customer_name, $text);
            $text = str_replace('{{order}}', $order_id, $text);
            $text = str_replace('{{amount}}', $order_amount, $text);
            $text = str_replace('{{invoiceno}}', $invoiceId, $text);

            array_push($settings['order_noficication_recipients'], $telephoneNumber);

            $result = Mage::helper('smsnotifications/data')->sendSms($text, $settings['order_noficication_recipients']);

            // Display a success or error message
            if ($result) {
                $recipients_string = implode(',', $settings['order_noficication_recipients']);
                Mage::getSingleton('adminhtml/session')->addSuccess(sprintf('The invoice notification has been sent via SMS to: %s', $recipients_string));
            } else {
                Mage::getSingleton('adminhtml/session')->addError('There has been an error sending the invoice notification SMS.');
            }
        }
    }

    // This method is called whenever a new shipment is created for an order
    public function salesOrderShipmentSaveAfter($observer)
    {
        // Get the settings
        $settings = Mage::helper('smsnotifications/data')->getSettings();

        // If no shipment notification has been specified, no notification can be sent
        if (!$settings['shipment_notification_message']) {
            return;
        }

        // Get the new order object
        $order = $observer->getEvent()->getShipment()->getOrder();

        // Get the telephone # associated with the shipping (or billing) address

        $billingAdress  = $order->getBillingAddress();
        $shippingAdress = $order->getShippingAddress();

        if ($order->getCustomerFirstname()) {
            $customer_name = $order->getCustomerFirstname();
            $customer_name .= ' '.$order->getCustomerLastname();
        } elseif ($billingAdress->getFirstname()) {
            $customer_name = $billingAdress->getFirstname();
            $customer_name .= ' '.$billingAdress->getLastname();
        } else {
            $customer_name = $shippingAdress->getFirstname();
            $customer_name .= ' '.$shippingAdress->getLastname();
        }

        $order_id     = $order->getIncrementId();
        $order_amount = $order->getBaseCurrencyCode();
        $order_amount  .= ' '.$order->getBaseGrandTotal();

        $telephoneNumber = trim($shippingAdress->getTelephone());

        $shipment = $order->getShipmentsCollection()->getFirstItem();
        $shipId   = $shipment->getIncrementId();

        // Check if a telephone number has been specified
        if ($telephoneNumber) {
            // Send the shipment notification to the specified telephone number
            $text = $settings['shipment_notification_message'];
            $text = str_replace('{{name}}', $customer_name, $text);
            $text = str_replace('{{order}}', $order_id, $text);
            $text = str_replace('{{amount}}', $order_amount, $text);
            $text = str_replace('{{shipmentno}}', $shipId, $text);

            array_push($settings['order_noficication_recipients'], $telephoneNumber);

            $result = Mage::helper('smsnotifications/data')->sendSms($text, $settings['order_noficication_recipients']);

            // Display a success or error message
            if ($result) {
                $recipients_string = implode(',', $settings['order_noficication_recipients']);
                Mage::getSingleton('adminhtml/session')->addSuccess(sprintf('The shipment notification has been sent via SMS to: %s', $recipients_string));
            } else {
                Mage::getSingleton('adminhtml/session')->addError('There has been an error sending the shipment notification SMS.');
            }
        }
    }

    // This method is called whenever the application's setting in the
    // adminhtml are changed
    public function configSaveAfter($observer)
    {
        // Get the settings
        $settings = Mage::helper('smsnotifications/data')->getSettings();

        // If no recipients have been set, we can't do anything
        if (!count($settings['order_noficication_recipients'])) {
            return;
        }

        // Verify the settings by sending a test message
        $result = Mage::helper('smsnotifications/data')->sendSms('Congratulations, you have configured the extension correctly!', $settings['order_noficication_recipients']);

        // Display a success or error message
        if ($result) {
            // If everything has worked, let the user know that a test message
            // has been sent to the recipients
            $recipients_string = implode(',', $settings['order_noficication_recipients']);
            Mage::getSingleton('adminhtml/session')->addNotice(sprintf('A test message has been sent to the following recipient(s): %s. Please verify that all recipients received this test message. If not, correct the number(s) below.', $recipients_string));
        } else {
            Mage::getSingleton('adminhtml/session')->addError('Unable to send test message. Please verify that all your settings are correct and try again.');
        }
    }
}
