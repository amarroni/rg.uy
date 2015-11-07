<?php
/**
 * Created by PhpStorm.
 * User: gringo
 * Date: 03/10/15
 * Time: 05:02 PM
 */ 
/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = new Mage_Customer_Model_Resource_Setup();
$installer->startSetup();
$installer->updateAttribute('customer','middlename','is_visible',0);
$installer->updateAttribute('customer_address','middlename','is_visible',0);
$installer->endSetup();