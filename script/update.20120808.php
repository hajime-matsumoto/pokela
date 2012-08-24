<?php
require_once dirname(__FILE__).'/update.header.php';

$blog = new Pokela_Model_Blog();
$blog_id = $blog->getIdByName('更新案内');
$date = '8/8';

$blog->yarooUpdate(
  'yaroo_120808_6',
    $date,
    6,
    "男気溢れるラジオの第６回！！
    アルスマグナの「アキラ」君がまたまたゲストで登場！！",
    ""
);
?>
