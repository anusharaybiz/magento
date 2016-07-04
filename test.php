<?php
require_once 'app/Mage.php';
Mage::app();
$product = new Anusha_Register_Model_Product;

$product->sayHello();

?>