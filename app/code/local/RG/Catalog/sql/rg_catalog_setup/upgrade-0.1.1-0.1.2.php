<?php
/**
 * Created by PhpStorm.
 * User: gringo
 * Date: 15/09/15
 * Time: 11:10 PM
 */ 
/* @var $installer Mage_Catalog_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();
$values = array('FLAT','HYBRID','NEGATIVE','ROLLFINGER');

$installer->addAttribute(Mage_Catalog_Model_Product::ENTITY,'rg_gloves_family',array(
    'type'                       => 'int',
    'label'                      => 'Family',
    'input'                      => 'select',
    'required'                   => false,
    'user_defined'               => true,
    'searchable'                 => true,
    'filterable'                 => true,
    'comparable'                 => true,
    'is_visible_on_front'        => true,
    'visible_in_advanced_search' => true,
    'filterable_in_search'       => true,
    'apply_to'                   => Mage_Catalog_Model_Product_Type::TYPE_SIMPLE,
    'option'                     => array('values'=>$values)
));

$values = array('CONTACT','CONTACT AQUA GRIP','GIGA GRIP','ROUGH PROFILE','SUPERSOFT','WET&DRY');

$installer->addAttribute(Mage_Catalog_Model_Product::ENTITY,'rg_gloves_palms',array(
    'type'                       => 'int',
    'label'                      => 'Palms',
    'input'                      => 'select',
    'required'                   => false,
    'user_defined'               => true,
    'searchable'                 => true,
    'filterable'                 => true,
    'comparable'                 => true,
    'is_visible_on_front'        => true,
    'visible_in_advanced_search' => true,
    'filterable_in_search'       => true,
    'apply_to'                   => Mage_Catalog_Model_Product_Type::TYPE_SIMPLE,
    'option'                     => array('values'=>$values)
));

$values = array('5','6','7','8','9','10','11','12');

$installer->addAttribute(Mage_Catalog_Model_Product::ENTITY,'rg_gloves_size',array(
    'type'                       => 'int',
    'label'                      => 'Glove size',
    'input'                      => 'select',
    'required'                   => false,
    'user_defined'               => true,
    'searchable'                 => true,
    'filterable'                 => true,
    'comparable'                 => true,
    'is_visible_on_front'        => true,
    'visible_in_advanced_search' => true,
    'filterable_in_search'       => true,
    'apply_to'                   => Mage_Catalog_Model_Product_Type::TYPE_SIMPLE,
    'option'                     => array('values'=>$values)
));

$values = array('AIR MESH','AIR PU','FIX FIT','RUBBER PUNCH');
$installer->addAttribute(Mage_Catalog_Model_Product::ENTITY,'rg_gloves_technology',array(
    'type'                       => 'int',
    'label'                      => 'Technology',
    'input'                      => 'select',
    'required'                   => false,
    'user_defined'               => true,
    'searchable'                 => true,
    'filterable'                 => true,
    'comparable'                 => true,
    'is_visible_on_front'        => true,
    'visible_in_advanced_search' => true,
    'filterable_in_search'       => true,
    'apply_to'                   => Mage_Catalog_Model_Product_Type::TYPE_SIMPLE,
    'option'                     => array('values'=>$values)
));

$newGroup = 'RG Attributes';
//Add Attributes to group and attributeSet
$installer->addAttributeToSet(Mage_Catalog_Model_Product::ENTITY,'RG Goalkeeper Gloves',$newGroup,'rg_gloves_family');
$installer->addAttributeToSet(Mage_Catalog_Model_Product::ENTITY,'RG Goalkeeper Gloves',$newGroup,'rg_gloves_palms');
$installer->addAttributeToSet(Mage_Catalog_Model_Product::ENTITY,'RG Goalkeeper Gloves',$newGroup,'rg_gloves_size');
$installer->addAttributeToSet(Mage_Catalog_Model_Product::ENTITY,'RG Goalkeeper Gloves',$newGroup,'rg_gloves_technology');

$installer->endSetup();