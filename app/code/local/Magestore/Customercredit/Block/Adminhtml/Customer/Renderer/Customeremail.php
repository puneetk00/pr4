<?php
/**
 * Magestore
 * 
 * NOTICE OF LICENSE
 * 
 * This source file is subject to the Magestore.com license that is
 * available through the world-wide-web at this URL:
 * http://www.magestore.com/license-agreement.html
 * 
 * DISCLAIMER
 * 
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 * 
 * @category    Magestore
 * @package     Magestore_Customercredit
 * @copyright   Copyright (c) 2012 Magestore (http://www.magestore.com/)
 * @license     http://www.magestore.com/license-agreement.html
 */

/**
 * Customercredit Adminhtml Block
 * 
 * @category    Magestore
 * @package     Magestore_Customercredit
 * @author      Magestore Developer
 */
class Magestore_Customercredit_Block_Adminhtml_Customer_Renderer_Customeremail extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
	public function render(Varien_Object $row){
           
            $transaction_id = $row->getId();
            $customer_id = Mage::getModel('customercredit/transaction')->load($transaction_id)->getCustomerId();
//            $customer = Mage::getModel('customer/customer')->load($customer_id);
//            $emailAdrress = $customer->getData('email');
//            //zend_debug::dump($customer->getData());die('dfsfsd');
//          return '<a href="mailto:'.$emailAdrress.'">'.$emailAdrress.'</a>';
          
        $customer = Mage::getModel('customer/customer')->load($customer_id);
         $emailAdrress = $customer->getData('email');
        if ($customer) {
            return sprintf('<a target="_blank" href="%s">%s</a>', $this->getUrl('adminhtml/customer/edit', array('id' => $customer->getId())), $emailAdrress);
        }
        return $row->getId();
            
	}
}