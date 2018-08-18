<?php
class Dp_Customer_Model_Observer
{
    public function customerLogin($observer)
    {
        $helper = Mage::helper('dp_customer');
        $session = Mage::getSingleton('customer/session');
        if(Mage::helper('customer')->isLoggedIn()){
           if(!$helper->isCustomerActivated()) {
                $permanantRegUrl = Mage::getBaseUrl()."permanantreg/";
                $session->setAfterAuthUrl($permanantRegUrl);
           } else {
                $session->setAfterAuthUrl(Mage::getBaseUrl()."customer/account/");
           }
        }
        
    }

    public function checkLogin(Varien_Event_Observer $observer)
    {
        $helper = Mage::helper('dp_customer');
        $controller = strtolower(Mage::app()->getRequest()->getControllerName());
        if(Mage::helper('customer')->isLoggedIn()){
            if ($controller == 'account') {
                if($helper->isCustomerActivated()) {
                    Mage::app()->getFrontController()->getResponse()->setRedirect(Mage::getUrl('permanantreg/index/index'));
                } else {
                    return $this;
                }
            }
        }
        return $this;
    }
}