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

$ultimoUpdates = array(
    'ultramegamenu/sidemenu/enable_category_left'   => 0,
    'ultimo_design/colors/tool_icon_bg_color'       => '#a2adb4',
    'ultimo_design/colors/icon_hover_bg_color'      => '#428dc7',
    'ultimo_design/colors/tool_icon_active_bg_color'=> '#428dc7',
    'ultimo/category_list/hover_effect'             => 0,
    'ultimo/category_grid/hover_effect'             => 0,
    'ultimo/category_grid/display_price'            => 0,
    'ultimo/category_grid/display_addtolinks'       => 0
);
$storeConfig = Mage::getModel('core/config');
foreach($ultimoUpdates as $path =>$value){
    $storeConfig->saveConfig($path,$value);
}
$installer->endSetup();