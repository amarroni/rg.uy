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

$installer->startSetup();

/* @var $model Mage_Eav_Model_Entity_Attribute_Set */
$model  = Mage::getModel('eav/entity_attribute_set')
    ->setEntityTypeId($productEntityTypeId);
$model->setAttributeSetName('Goalkeeper Gloves');
/*no need to validate*/
$model->save();
$model->initFromSkeleton($defaultAttributeSetId);
$model->save();

/*Create new attribute set for goalkeeper Gloves*/
$data = array(
    'entity_type_id'        => $productEntityTypeId,
    'attribute_set_name'    => 'RG Goalkeeper Gloves',
);

$installer->updateAttributeSet(Mage_Catalog_Model_Product::ENTITY,$model->getId(),$data);

$installer->endSetup();