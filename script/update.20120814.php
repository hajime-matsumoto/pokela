<?php
require_once dirname(__FILE__).'/update.header.php';
$blog = new Pokela_Model_Blog();
$blog_id = $blog->getIdByName('更新案内');
$date = '8/14';

$blog->isoUpdate(
  'iso_120814_123',
    $date,
    123,
    "第１２３回更新！！
豆乳のチャレンジのコーナーなど
ガールズトークが盛りだくさん♪"
);
$blog->mjsUpdate(
    "MJS_120814_23",
    $date,
    23,
    "第２３回放送！！
「この夏の旅行の予定は？」
のお便りにメンバーの反応は？",
"第２３回更新！！
トップページの写真を変更しました☆"
);
?>
