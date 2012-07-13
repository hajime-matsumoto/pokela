<?php
require_once dirname(__FILE__).'/update.header.php';

$blog = new Pokela_Model_Blog();
$blog_id = $blog->getIdByName('更新案内');
$date = '7/11';

$blog->yarooUpdate(
  'yaroo_120711_2',
    $date,
    2,
    "男気溢れるラジオの第２回！！
いろんなコーナーも決まり、本格的なラジオになってきたぞ！！
第２回目もお聴きのがしなく！！！",
""
);
?>
