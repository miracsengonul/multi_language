<?php

namespace Mirac\MultiLanguage;

/**
 * Class Select
 * @package mirac\multiLanguage
 * @author Miraç Şengönül
 * @mail miracsengonul@gmail.com
 */
class Select{


	public function language($lang){

		$lang = str_replace($lang, 'http://'.$_SERVER['HTTP_HOST'].'/lang/config/Set.php?lang='.$lang.'' , $lang);

		return $lang;

	}

}