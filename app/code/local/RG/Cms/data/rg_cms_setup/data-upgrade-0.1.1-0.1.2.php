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
$block = Mage::getModel('cms/block')->load('block_left_top','identifier');
$block->setData('is_active',0)->save();
$installer->endSetup();
