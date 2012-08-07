<?php
require_once dirname(__FILE__).'/update.header.php';

$blog = new Pokela_Model_Blog();
$blog_id = $blog->getIdByName('更新案内');
$date = '8/1';

$blog->yarooUpdate(
  'yaroo_120801_5',
    $date,
    5,
    "男気溢れるラジオの第５回！！
    アルスマグナの「アキラ」君がゲストで登場！！",
    "ゲストにアルスマグナの「アキラ」君が登場！！
皆さんからのお便り、待ってます！！"
);
?>
