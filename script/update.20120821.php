<?php
require_once dirname(__FILE__).'/update.header.php';
$blog = new Pokela_Model_Blog();
$blog_id = $blog->getIdByName('更新案内');
$date = '8/21';

$blog->isoUpdate(
  'iso_120821_124',
    $date,
    124,
    "第１２４回更新！！
豆乳のチャレンジのコーナーなど
ガールズトークが盛りだくさん♪"
);
$blog->mjsUpdate(
    "MJS_120814_23",
    $date,
    24,
    "第２４回放送！！
夏休みの宿題は最初にやる派？
後にやる派？",
""
);
?>
