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

$connection = $installer->getConnection();

$entityTypeId       = $installer->getEntityTypeId(Mage_Catalog_Model_Product::ENTITY);
$attributeId        = $installer->getAttributeId($entityTypeId, 'rg_gloves_technology');
$attributeTableOld  = $installer->getAttributeTable($entityTypeId, $attributeId);

//$installer->updateAttribute($entityTypeId, $attributeId, 'backend_type', 'decimal');
$installer->updateAttribute($entityTypeId,$attributeId,
    array(  'frontend_input'=>'multiselect',
        'backend_type'=>'varchar',
        'backend_model'=>'eav/entity_attribute_backend_array',
    ));


$attributeTableNew = $installer->getAttributeTable($entityTypeId, $attributeId);

if ($attributeTableOld != $attributeTableNew) {
    $connection->disableTableKeys($attributeTableOld)
        ->disableTableKeys($attributeTableNew);

    $select = $connection->select()
        ->from($attributeTableOld, array('entity_type_id', 'attribute_id', 'store_id', 'entity_id', 'value'))
        ->where('entity_type_id = ?', $entityTypeId)
        ->where('attribute_id = ?', $attributeId);

    $query = $select->insertFromSelect($attributeTableNew,
        array('entity_type_id', 'attribute_id', 'store_id', 'entity_id', 'value')
    );

    $connection->query($query);

    $connection->delete($attributeTableOld,
        $connection->quoteInto('entity_type_id = ?', $entityTypeId)
        . $connection->quoteInto(' AND attribute_id = ?', $attributeId)
    );

    $connection->enableTableKeys($attributeTableOld)->enableTableKeys($attributeTableNew);
}
$installer->endSetup();