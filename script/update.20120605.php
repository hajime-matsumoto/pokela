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
// (火曜日) 更新処理 スクリプト イソフラボンバー、レインボウ、パワーボイスジャム
//-----------------------------------------------------------------------------------
$blog = new Pokela_Model_Blog();
$blog_id = $blog->getIdByName('更新案内');

$file = 'majyoradio_120608_1';
$date = '6/8';
$id = $blog->replace( 
    array('field03 = ?', $file)
    ,array(
        'blog_id' => $blog_id, // Blog IDを指定
        'content' => "第１回更新！！\n新番組開始！！オリジナルラジオドラマあり！\nトークあり！の３０分♪\n聴いてくれないと・・・処刑！しちゃうからね☆" ,
        'field01' => 1, // 回数
        'field02' => $date, // 日付
        'field03' => $file, // ファイル名
        'field04' => 
        "新番組開始！！<br />
        オリジナルラジオドラマあり！トークありの３０分！！<br />
        オープニングとエンディングもラジオオリジナルです♪<br />
        愚民共っ！感想メールを待ってるよ！！<br />"
    )
);
$blog->addCategory($id,$blog_id,'魔界政府広報部');

?>
