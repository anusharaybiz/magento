<?php 
	
	class People_Register_Model_Resource_Register_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract {
		
		protected function _construct(){
			
			$this->_init("register/register");
		}
	}
?>