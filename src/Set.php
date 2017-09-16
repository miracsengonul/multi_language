<?php

/**
 * @package mirac\multiLanguage
 * @author Miraç Şengönül
 * @mail miracsengonul@gmail.com
 */

session_start();

$lang = htmlentities($_GET["lang"]);
$lang = strlen($lang) > 3 ? 'tr' : $_GET['lang'];

$_SESSION['lang'] = $lang;

if($lang){
  header("location:".$_SERVER['HTTP_REFERER']."");
}
