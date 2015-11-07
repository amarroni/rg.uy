<?php
/**
 * Created by PhpStorm.
 * User: gringo
 * Date: 15/09/15
 * Time: 11:10 PM
 */ 
/* @var $installer Mage_Catalog_Model_Resource_Setup */
$installer = $this;

$defaultAttributeSetId  = $installer->getDefaultAttributeSetId(Mage_Catalog_Model_Product::ENTITY);
$productEntityTypeId    = $installer->getEntityTypeId(Mage_Catalog_Model_Product::ENTITY);

/*Create new attributes for RG starts values*/
$options = array(1,2,3,4,5,6);
$installer->startSetup();
$installer->addAttribute(Mage_Catalog_Model_Product::ENTITY,'rg_grip_wet',array(
    'type'                       => 'int',
    'label'                      => 'Grip Wet',
    'input'                      => 'select',
    'required'                   => false,
    'user_defined'               => true,
    'searchable'                 => true,
    'filterable'                 => true,
    'comparable'                 => true,
    'is_visible_on_front'        => true,
    'visible_in_advanced_search' => true,
    'apply_to'                   => Mage_Catalog_Model_Product_Type::TYPE_CONFIGURABLE,
    'option'                     => array('values'=>$options)
));

$installer->addAttribute(Mage_Catalog_Model_Product::ENTITY,'rg_grip_sunny',array(
    'type'                       => 'int',
    'label'                      => 'Grip Sunny',
    'input'                      => 'select',
    'required'                   => false,
    'user_defined'               => true,
    'searchable'                 => true,
    'filterable'                 => true,
    'comparable'                 => true,
    'is_visible_on_front'        => true,
    'visible_in_advanced_search' => true,
    'apply_to'                   => Mage_Catalog_Model_Product_Type::TYPE_CONFIGURABLE,
    'option'                     => array('values'=>$options)
));

$installer->addAttribute(Mage_Catalog_Model_Product::ENTITY,'rg_grip_sunny',array(
    'type'                       => 'int',
    'label'                      => 'Grip Sunny',
    'input'                      => 'select',
    'required'                   => false,
    'user_defined'               => true,
    'searchable'                 => true,
    'filterable'                 => true,
    'comparable'                 => true,
    'is_visible_on_front'        => true,
    'visible_in_advanced_search' => true,
    'apply_to'                   => Mage_Catalog_Model_Product_Type::TYPE_CONFIGURABLE,
    'option'                     => array('values'=>$options)
));

$installer->addAttribute(Mage_Catalog_Model_Product::ENTITY,'rg_abrasion_res',array(
    'type'                       => 'int',
    'label'                      => 'Abrasion Resistance',
    'input'                      => 'select',
    'required'                   => false,
    'user_defined'               => true,
    'searchable'                 => true,
    'filterable'                 => true,
    'comparable'                 => true,
    'is_visible_on_front'        => true,
    'visible_in_advanced_search' => true,
    'apply_to'                   => Mage_Catalog_Model_Product_Type::TYPE_CONFIGURABLE,
    'option'                     => array('values'=>$options)
));

//Create new Group tp AttributeSet
$newGroup = 'RG Attributes';
$installer->addAttributeGroup(Mage_Catalog_Model_Product::ENTITY,'RG Goalkeeper Gloves',$newGroup,1);

//Add Attributes to group and attributeSet
$installer->addAttributeToSet(Mage_Catalog_Model_Product::ENTITY,'RG Goalkeeper Gloves',$newGroup,'rg_grip_wet');
$installer->addAttributeToSet(Mage_Catalog_Model_Product::ENTITY,'RG Goalkeeper Gloves',$newGroup,'rg_grip_sunny');
$installer->addAttributeToSet(Mage_Catalog_Model_Product::ENTITY,'RG Goalkeeper Gloves',$newGroup,'rg_abrasion_res');

$installer->endSetup();