<?php
class People_Register_IndexController extends Mage_Core_Controller_Front_Action
{

    public function indexAction()
    {

       $this->loadLayout();
       $this->renderLayout();

    }
    public function postAction()
    {
    	
    	$name = $_POST["name"];	
		$email = $_POST["email"];
		$mobile = $_POST["telephone"];
		$message = $_POST["comment"];
		$model = Mage::getSingleton('register/register');
		$model->setData("Name",$name);
		$model->setData("Email",$email);
		$model->setData("Mobile",$mobile);
		$model->setData("Message",$message);
		$model->save();
		$this->_redirect('*/*/users');
	}
	Public function usersAction()
	{
		$this->loadLayout();
		$model = Mage::getSingleton('register/register');
		$users = $model->getCollection()->getData();
		Mage::getSingleton('core/session')->setUserDetails($users);
		$this->renderLayout();
// 		echo '<pre>';
// 		echo '+';
// 		print_r($quote->getData());
// 		exit;
		
		
	}	    
}
?>