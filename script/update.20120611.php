<?php
//----------------------------------------------------------------------------------
// 共通処理
//-----------------------------------------------------------------------------------
require_once dirname(__FILE__).'/../Seaf/seaf.php';

// Seaf Setup
Seaf_Registry::set('lang', 'ja');
Seaf_Registry::set('InternalEncoding', 'UTF8');
Seaf_Registry::set('TimeFormat', 'Y-m-d G:i:s');
Seaf_Registry::set('LogFormat', ':datetime :name [:levelText(:level)] :text');
Seaf_Registry::set('LogTimeFormat', 'Y-m-d G:i:s');
Seaf_Registry::set('TimeZone', 'Asia/Tokyo');
//Seaf_Registry::set('Env', 'production');

defined('APP_PATH') || define('APP_PATH', realpath(dirname(__FILE__) . '/../app'));
defined('APP_ENV') || define('APP_ENV', (getenv('APP_ENV') ? getenv('APP_ENV') : Seaf_Registry::get('Env', 'develop')));

// Create application, bootstrap, and run
$app = new Seaf_App( APP_ENV, realpath(APP_PATH . '/config'));

$app->bootstrap()->bootstrap('log');
$app->bootstrap()->bootstrap('db');

//----------------------------------------------------------------------------------
// (金曜日) 更新処理 スクリプト フェアリーテイル, けいすけちよ, オオサキ
//-----------------------------------------------------------------------------------
$blog = new Pokela_Model_Blog();
$blog_id = $blog->getIdByName('更新案内');

$file = 'vsunion_120611_1';
$date = '6/11';
$id = $blog->replace( 
    array('field03 = ?', $file)
    ,array(
        'blog_id' => $blog_id, // Blog IDを指定
        'content' => "第１回更新！！\n新番組開始！リニューアルしてぽけらで放送♪\nぜひみんな聴いてね♪",
        'field01' => 1, // 回数
        'field02' => $date, // 日付
        'field03' => $file, // ファイル名
    )
);
$blog->addCategory($id,$blog_id,'バーサスWAVE');
?>
