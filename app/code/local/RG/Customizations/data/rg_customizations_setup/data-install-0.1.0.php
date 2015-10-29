<?php
/**
 * Created by PhpStorm.
 * User: gringo
 * Date: 29/10/15
 * Time: 12:50 AM
 */ 
/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();
$rgCustomizations = array(
    'shipping/origin/country_id'        => 'UY',
    'shipping/origin/region_id'         => 494,//Montevideo
    'shipping/option/checkout_multiple' => 0,
    'currency/options/base' => 'UYU',
    'currency/options/default' => 'UYU',
    'currency/options/allow' => 'UYU',


);
$storeConfig = Mage::getModel('core/config');
foreach($rgCustomizations as $path =>$value){
    $storeConfig->saveConfig($path,$value);
}


$installer->endSetup();