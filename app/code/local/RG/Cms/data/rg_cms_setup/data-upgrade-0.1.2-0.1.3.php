<?php
/**
 * Created by PhpStorm.
 * User: gringo
 * Date: 03/10/15
 * Time: 05:02 PM
 */ 
/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;
$installer->startSetup();
$glovesCategory = Mage::getResourceModel('catalog/category_collection')->addAttributeToFilter('name','Guantes');
$glovesCategoryId = $glovesCategory->getFirstItem()->getId();
$homeContent = $block = Mage::getModel('cms/page')->load('home','identifier')->getContent();

$installer->endSetup();
