<?php
class Dp_Customer_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function isCustomerActivated()
    {
        if(Mage::helper('customer')->isLoggedIn()){
            $customer = Mage::getSingleton('customer/session')->getCustomer();
            return $customer->getCustomerActivated();
        }
    }
}