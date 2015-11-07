<?php
/**
 * Region
 *
 * @category    Onetree
 * @package     RG_Directory
 * @author      Alejandro "GrinGo" Marroni <alegringus@gmail.com>
 */
class RG_Directory_Model_Region extends Mage_Directory_Model_Region
{
    static $uruRegions = array(
    							array('code'=>'artigas','name'=>'Artigas'),
    							array('code'=>'canelones','name'=>'Canelones'),
    							array('code'=>'cerro_largo','name'=>'Cerro Largo'),
    							array('code'=>'colonia','name'=>'Colonia'),
    							array('code'=>'durazno','name'=>'Durazno'),
    							array('code'=>'flores','name'=>'Flores'),
    							array('code'=>'florida','name'=>'Florida'),
    							array('code'=>'lavalleja','name'=>'Lavalleja'),
    							array('code'=>'maldonado','name'=>'Maldonado'),
    							array('code'=>'montevideo','name'=>'Montevideo'),
    							array('code'=>'paysandu','name'=>'Paysandú'),
    							array('code'=>'rio_negro','name'=>'Río Negro'),
    							array('code'=>'rivera','name'=>'Rivera'),
    							array('code'=>'rocha','name'=>'Rocha'),
    							array('code'=>'salto','name'=>'Salto'),
    							array('code'=>'soriano','name'=>'Soriano'),
    							array('code'=>'tacuarembo','name'=>'Tacuarembó'),
    							array('code'=>'treita_y_tres','name'=>'Treinta y Tres'),
    							);

//	public function getUruRegions(){
//		return $this->_uruRegions;
//	}

	static function getUruRegions(){
		return self::$uruRegions;
	}
}
