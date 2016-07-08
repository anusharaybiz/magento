<?php 
	class People_Register_Model_Resource_Register extends Mage_Core_Model_Resource_Db_Abstract {
		
		protected function _construct(){
			
			$this->_init("register/register","id");
		}
        public function loadByAttributes($attributes)
        {
            $adapter = $this->_getReadAdapter();
            $where   = array();
            foreach ($attributes as $attributeCode=> $value) {
                $where[] = sprintf('%s=:%s', $attributeCode, $attributeCode);
            }
            $select = $adapter->select()
                ->from($this->getMainTable())
                ->where(implode(' AND ', $where));
            $binds = $attributes;
            return $adapter->fetchAll($select, $binds);
        }
	}
?>
