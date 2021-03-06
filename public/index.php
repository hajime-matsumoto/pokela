<?php
//require_once dirname(__FILE__).'/../../Seaf/seaf.php';
require_once dirname(__FILE__).'/../Seaf/seaf.php';


// Seaf Setup
Seaf_Registry::set('lang', 'ja');
Seaf_Registry::set('InternalEncoding', 'UTF8');
Seaf_Registry::set('TimeFormat', 'Y-m-d G:i:s');
Seaf_Registry::set('LogFormat', ':datetime :name [:levelText(:level)] :text');
Seaf_Registry::set('LogTimeFormat', 'Y-m-d G:i:s');
Seaf_Registry::set('TimeZone', 'Asia/Tokyo');
Seaf_Registry::set('BaseURL', 'http://'.$_SERVER['HTTP_HOST']);

defined('APP_PATH') || define('APP_PATH', realpath(dirname(__FILE__) . '/../app'));
//defined('APP_ENV') || define('APP_ENV', (getenv('APP_ENV') ? getenv('APP_ENV') : 'develop'));
defined('APP_ENV') || define('APP_ENV', (getenv('APP_ENV') ? getenv('APP_ENV') : 'production'));

// Create application, bootstrap, and run
$app = new Seaf_App( APP_ENV, realpath(APP_PATH . '/config'));

$app->bootstrap()->bootstrap('log');
$app->bootstrap()->bootstrap('db');
//$app->bootstrap()->getResourse('front')->getView( )->title( )->append('Visty')->setSep(' | ');

// 実行
$app->bootstrap( )->run( );

?>
