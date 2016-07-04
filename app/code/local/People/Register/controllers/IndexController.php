<?php
class People_Register_IndexController extends Mage_Core_Controller_Front_Action
{

    public function indexAction()
    {

       $this->loadLayout();
       var_dump(Mage::getSingleton('core/layout')->getUpdate()->getHandles()); 
       $this->getLayout()->getBlock('registrationForm');
       $this->renderLayout();

    }
    
    
}
?>