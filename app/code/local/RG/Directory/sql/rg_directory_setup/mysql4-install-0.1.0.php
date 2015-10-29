<?php
$installer = $this;

$regions = RG_Directory_Model_Region::getUruRegions();
$uruCode = 'UY';

$data = array();
foreach($regions as $region){
	$data[] = array	(
						'country_id' => $uruCode,
						'code'	=> $region['code'],
						'default_name'	=> $region['name']
					);
}

$installer->startSetup();

$installer->getConnection()->insertMultiple($installer->getTable('directory/country_region'), $data);

$installer->endSetup();
