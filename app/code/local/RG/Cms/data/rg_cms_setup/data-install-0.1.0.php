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

$block = Mage::getModel('cms/block')->load('block_footer_contact','identifier');

if($block->getId()){
    $content = <<<EOT
<p>Contact us: <strong>00357 99269291</strong> / EMAIL: <a href="mailto:contacto@rg.uy" class="email">Email</a></p>
EOT;

    $blockData = Array (
        'content' => $content,
    );
    $block->addData($blockData)->save();
}
$installer->endSetup();