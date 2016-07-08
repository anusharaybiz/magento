
<?php 
	class People_Register_Model_Register extends Mage_Core_Model_Abstract {
		
		protected function _construct(){
			
			$this->_init("register/register");
		}
        public function loadByAttributes($attributes)
        {
            $this->setData($this->getResource()->loadByAttributes($attributes));
            return $this;
        }
	}
?>