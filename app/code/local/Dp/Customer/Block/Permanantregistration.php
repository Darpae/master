<?php
class Dp_Customer_Block_Permanantregistration extends Mage_Core_Block_Template 
{    
    public function getCustomer()
    {
        return Mage::getSingleton('customer/session')->getCustomer();
    }
}