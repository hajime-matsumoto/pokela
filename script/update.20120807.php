<?php
require_once dirname(__FILE__).'/update.header.php';
$blog = new Pokela_Model_Blog();
$blog_id = $blog->getIdByName('更新案内');
$date = '8/7';

$blog->isoUpdate(
  'iso_120807_122',
    $date,
    122,
    "第１２２回更新！！
豆乳のチャレンジのコーナーなど
ガールズトークが盛りだくさん♪"
);
$blog->mjsUpdate(
    "MJS_120807_22",
    $date,
    22,
    "第２２回放送！！
「ひまつぶしに何をする？」
のお便りにメンバーの反応は？",
"女性リスナーからのお便りに、
大盛り上がりの１０分間！！"
);
?>
