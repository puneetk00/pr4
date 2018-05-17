<?php
class Pk_Vendor_Model_Mysql4_Vendor extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init("vendor/vendor", "id");
    }
}