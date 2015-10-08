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

$block = Mage::getModel('cms/block');
$content = <<<EOT
<ul>
    <li><a href="https://www.facebook.com/RG-goalkeepers-gloves-Uruguay-237387573111217" target="_blank"><img src="{{skin url='images/icon-facebook.png'}}"></a></li>
    <li><a href="https://twitter.com/RG_ArquerosUy" target="_blank"><img src="{{skin url='images/icon-twitter.png'}}"></a></li>
</ul>
EOT;

$staticBlock = array(
    'title' => 'Footer Social Links',
    'identifier' => 'block_footer_social',
    'content' => $content,
    'is_active' => 1,
    'stores' => array(0)
);
$block->addData($staticBlock)->save();
$installer->endSetup();