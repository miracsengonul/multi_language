<?php

namespace Mirac\MultiLanguage;

/**
 * Class Create
 * @package mirac\multiLanguage
 * @author Miraç Şengönül
 * @mail miracsengonul@gmail.com
 */
class Create{

	static function folder(){
		if(!file_exists($_SERVER['DOCUMENT_ROOT']."/lang/config/Set.php")){
			mkdir($_SERVER['DOCUMENT_ROOT']."/lang/",0777);
			mkdir($_SERVER['DOCUMENT_ROOT']."/lang/config/",0777);
			copy(__DIR__."/Set.php",$_SERVER['DOCUMENT_ROOT']."/lang/config/Set.php");
		}	
	}

}