<?php
require_once dirname(__FILE__).'/update.header.php';

$blog = new Pokela_Model_Blog();
$blog_id = $blog->getIdByName('更新案内');
$date = '7/20';

$blog->makaiUpdate(
    'majyoradio_120720_7',
    $date,
    7,
    "第７回更新！！
オリジナルラジオドラマの第７話も配信！！
素敵な情報も盛りだくさん♪",
"第７回更新！！
夏に向けて、色々動き出す企画が盛りだくさん！！
お便りをどんどん出して採用されると「階級」が上がる！？
詳細は近日公開♪
チェックしないと、処刑☆しちゃうからね"
);
?>
