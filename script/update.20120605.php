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

$file = 'iso_120605_113';
$id = $blog->replace( 
    array('field03 = ?', $file)
    ,array(
        'blog_id' => $blog_id, // Blog IDを指定
        'content' => "第１１３回更新！！\n皆さんからのお便り、待ってます♪",
        'field01' => 113, // 回数
        'field02' => '6/5', // 日付
        'field03' => $file, // ファイル名
    )
);
$blog->addCategory($id,$blog_id,'イソフラボンバー');

$file = 'PVJ_120605_139_net';
$id = $blog->replace( 
    array('field03 = ?', $file)
    ,array(
        'blog_id' => $blog_id, // Blog IDを指定
        'content' => "第１３９回更新！！\nメンバーの卒業まで残りあとわずか・・・\n頑張る勇姿を見逃すなっ！！",
        'field01' => 139, // 回数
        'field02' => '6/5', // 日付
        'field03' => $file, // ファイル名
        'field04' => "メンバーの卒業まで残りあとわずか・・・\n彼女たちへの応援メッセージをお願いします。"
    )
);
$blog->addCategory($id,$blog_id,'パワーボイスジャム');


$file = 'MJS_120605_13';
$id = $blog->replace( 
    array('field03 = ?', $file)
    ,array(
        'blog_id' => $blog_id, // Blog IDを指定
        'content' => "第１３回放送！！\nツイッターではやりの診断メーカーに挑戦！！",
        'field01' => 13, // 回数
        'field02' => '6/5', // 日付
        'field03' => $file, // ファイル名
        'field04' => "今回はツイッターなどでもはやりの\n診断メーカーに挑戦！！\nさて、どんな言葉が飛び出すか！？"
    )
);
$blog->addCategory($id,$blog_id,'レインボウ');
?>
