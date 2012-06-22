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
$date = '6/19';

$file = 'iso_120619_115';
$blog->isoUpdate(
    $file,
    $date,
    115,
    "第１１５回更新！！\n皆さんからのお便り、待ってます♪"
);

$blog->pvjUpdate(
    "PVJ_120619_141_net",
    $date,
    141,
    "第１４１回更新！！\nしろがねさんとしおんぬの2人だけの放送！！\nお楽しみに♪",
    "今回は、しろがねさんとしおんぬの\n2人だけの放送！！"
);
$blog->mjsUpdate(
    "MJS_120619_15",
    $date,
    15,
    "第１５回放送！！\n今回も木村・吉川の珍しいペアで番組をお届け♪\nえみちーは誕生日を迎えました！！",
    "今回は、えみちーとありさの珍しいコンビが登場！！\nえみちーは２０歳の誕生日を迎えました！！"
);
?>
