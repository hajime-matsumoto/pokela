<?php
require_once dirname(__FILE__).'/update.header.php';

$blog = new Pokela_Model_Blog();
$blog_id = $blog->getIdByName('更新案内');
$date = '8/22';

$blog->yarooUpdate(
  'yaroo_120822_8',
  $date,
  8,
  "男気溢れるラジオの第８回！！
今回もゲストに「30－DELUX」の「天野博一」が登場！！",
  ""
);
?>
