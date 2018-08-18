<?php
class Dp_Customer_IndexController extends Mage_Core_Controller_Front_Action
{
        /**
     * Checking if user is logged in or not
     * If not logged in then redirect to customer login
     */
    public function preDispatch()
    {
        parent::preDispatch();
     
        if (!Mage::getSingleton('customer/session')->authenticate($this)) {
            $this->setFlag('', 'no-dispatch', true);
        }
    }

    public function IndexAction() {
        $helper = Mage::helper('dp_customer');
        if(Mage::helper('customer')->isLoggedIn()){
            if(!$helper->isCustomerActivated()) {
                $this->loadLayout();
                $this->renderLayout();
            } else {
                $this->_redirect('customer/account/');
            }
        }
        
        //Zend_Debug::dump($this->getLayout()->getUpdate()->getHandles());
    }
}