<?php
require_once dirname(__FILE__).'/update.header.php';

$blog = new Pokela_Model_Blog();
$blog_id = $blog->getIdByName('更新案内');
$date = '7/23';
$blog->vsUpdate(
    "vsunion_120723_4",
    $date,
    4,
    "第４回更新！！
更新、お待たせしました！！
皆さんからのお便り、待ってます！！"
);
?>
