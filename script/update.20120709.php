<?php
require_once dirname(__FILE__).'/update.header.php';

$blog = new Pokela_Model_Blog();
$blog_id = $blog->getIdByName('更新案内');
$date = '7/9';
$blog->vsUpdate(
    "vsunion_120709_3",
    $date,
    3,
    "第３回更新！！\n皆さんからのお便り、待ってます！！"
);
?>
