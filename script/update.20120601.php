<?php
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
// 更新処理 スクリプト フェアリーテイル, けいすけちよ, オオサキ
//-----------------------------------------------------------------------------------
$blog = new Pokela_Model_Blog();
$blog_id = $blog->getIdByName('更新案内');
$id = $blog->replace( 
    array('field03 = ?', 'FT_120601_33')
    ,array(
        'blog_id' => $blog_id, // Blog IDを指定
        'content' => "第３３回更新！\n今回も公開録音の模様をお届け！", // トップに出る文字
        'field01' => 33, // 回数
        'field02' => '6/1', // 日付
        'field03' => 'FT_120601_33', // ファイル名
    )
);
$blog->addCategory($id,$blog_id,'やりすぎソーサラー');

$blog_id = $blog->getIdByName('更新案内');
$id = $blog->replace( 
    array('field03 = ?', 'seiyuu_120601_39')
    ,array(
        'blog_id' => $blog_id,
        'content' => "第３９回更新！！\nオゥサキ・ドゥ・マドゥーイの写真は\n番組情報をチェックしてね♪", 
        'field01' => 39,
        'field02' => '6/1',
        'field03' => 'seiyuu_120601_39',
        // 詳細側更新情報
        'field04' => "第３９回放送！！\n今日の声優戦士は「角掛みなみ（つのかけみなみ）」さん♪\nまた、ごっとんの誕生日記念に「景浦大輔（げっとん）」も登場！！",
        // Q and A
        'field05' => "<p>Ｑ： 昔話の「ももたろう」主人公の次に思い浮かぶ登場人物は？</p><br />"."１：おじいさん・おばあさん<br />２：犬<br />３：猿<br />４：キジ<br />５：鬼<br />"
    )
);
$blog->addCategory($id,$blog_id,'トリラジ');


// オゥサキの更新も通知する
$blog_id = $blog->getIdByName('更新案内');
$id = $blog->replace( 
    array('field03 = ?', 'od20')
    ,array(
        'blog_id' => $blog_id,
        'content' => "オゥサキ・ドゥ・マドゥーイ",
        'field01' => 20,
        'field02' => '6/1',
        'field03' => 'od20'
    )
);
$blog->addCategory($id,$blog_id,'オオサキ');
?>
