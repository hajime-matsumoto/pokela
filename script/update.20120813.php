<?php
require_once dirname(__FILE__).'/update.header.php';

$blog = new Pokela_Model_Blog();
$blog_id = $blog->getIdByName('更新案内');
$date = '8/13';
$blog->vsUpdate(
    "vsunion_120813_5",
    $date,
    5,
    "第５回更新！！
皆さんからのお便りお待ちしております！！"
);
?>
