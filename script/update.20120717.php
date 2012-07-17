<?php
require_once dirname(__FILE__).'/update.header.php';
$blog = new Pokela_Model_Blog();
$blog_id = $blog->getIdByName('更新案内');
$date = '7/17';

$blog->isoUpdate(
  'iso_120717_119',
    $date,
    119,
    "第１１９回更新！！
「豆乳チャレンジ」のコーナー
など盛りだくさん！！"
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
    "MJS_120717_19",
    $date,
    19,
    "第１９回放送！！
夏のイベントに向けてのお悩みの
お便りにどう答える！？"
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
