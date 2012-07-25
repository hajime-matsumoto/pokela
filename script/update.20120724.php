<?php
require_once dirname(__FILE__).'/update.header.php';
$blog = new Pokela_Model_Blog();
$blog_id = $blog->getIdByName('更新案内');
$date = '7/24';

$blog->isoUpdate(
  'iso_120724_120',
    $date,
    120,
    "第１２０回更新！！
今回は「先生、あのね」の第５話配信！！
また番組から素敵なプレゼント情報あり。
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
    "MJS_120724_20",
    $date,
    20,
    "祝２０回放送！！
夏のスイーツの話♪",
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
