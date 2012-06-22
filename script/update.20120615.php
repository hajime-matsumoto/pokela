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
$date = '6/15';

$blog->seiyuUpdate(
    'seiyuu_120615_40',
    $date,
    40,
    "第４０回更新！！\n「教えて！桜咲先生！！」が大好評！！\n お便り待ってます♪",
    "第４０回放送！！\n今日の声優戦士は「鎌田瑠奈（かまたるな）」さん♪",
    "<p>Ｑ：今日は朝から仕事に追われて忙しい日でした。<br />疲れを癒すために仲間と共に、お酒を飲みに・・・<br />さんざん飲んで、気づいたらお店の場所とは違う場所にいました。<br /> あなたはどこにいましたか？<br /></p>
Ａ：ファミリーレストラン<br />Ｂ：クラブのトイレ<br />Ｃ：電車の中<br />Ｄ：自分のベッドの上</br />"
);

$blog->ftUpdate(
    'FT_120615_34',
    $date,
    34,
    "第３４回更新！\n公開録音の感想など、番組のお便りをお待ちしております！！"
);
    
$blog->makaiUpdate(
    'majyoradio_120615_2',
    $date,
    2,
    "第２回更新！！\nオリジナルラジオドラマの第２話も配信！！\nコーナーも始動！！お便り待ってます♪"
);

?>
