<?php
require_once dirname(__FILE__).'/update.header.php';

$blog = new Pokela_Model_Blog();
$blog_id = $blog->getIdByName('更新案内');
$date = '7/6';

$blog->makaiUpdate(
    'majyoradio_120706_5',
    $date,
    5,
    "第５回更新！！\nオリジナルラジオドラマの第５話も配信！！\nライトノベル化も決定しました♪",
    "第５回更新！！\nオリジナルラジオドラマの第５話も配信！！\nライトノベル化も決定しました♪"
);
?>
