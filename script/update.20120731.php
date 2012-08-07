<?php
require_once dirname(__FILE__).'/update.header.php';
$blog = new Pokela_Model_Blog();
$blog_id = $blog->getIdByName('更新案内');
$date = '7/31';

$blog->isoUpdate(
  'iso_120731_121',
    $date,
    121,
    "第１２１回更新！！
「先生、あのね」の脚本を書いている「沢上先生」
から素敵なプレゼント情報あり。
詳細は番組情報をチェック！！"
);
/*
$blog->pvjUpdate(
    "PVJ_120619_141_net",
    $date,
    141,
    "第１４１回更新！！\nしろがねさんとしおんぬの2人だけの放送！！\nお楽しみに♪",
    "今回は、しろがねさんとしおんぬの\n2人だけの放送！！"
);
 */
$blog->mjsUpdate(
    "MJS_120731_21",
    $date,
    20,
    "祝２１回放送！！
番組初の女性からのメールに、
メンバーが大盛り上がり♪",
    ""
);
/*
$blog->vsUpdate(
    "vsunion_120625_2",
    $date,
    2,
    "第２回更新！！\n新番組開始！第２回目配信！！\nぜひみんな聴いてね♪"
);
 */
?>
