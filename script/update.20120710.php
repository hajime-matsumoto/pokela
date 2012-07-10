<?php
require_once dirname(__FILE__).'/update.header.php';
$blog = new Pokela_Model_Blog();
$blog_id = $blog->getIdByName('更新案内');
$date = '7/10';

$blog->isoUpdate(
  'iso_120710_118',
    $date,
    118,
    "第１１８回更新！！
番組へのお便り、リクエスト企画など、
お待ちしております！！"
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
    "MJS_120710_18",
    $date,
    18,
    "第１８回放送！！
夏にやりたいことなど、ガールズトークが満載！！",
"もうすぐ本格的な夏がやってくる・・・
ということで、今回は夏にやりたいことトーク♪"
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
