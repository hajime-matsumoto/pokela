<?php
require_once dirname(__FILE__).'/update.header.php';

$blog = new Pokela_Model_Blog();
$blog_id = $blog->getIdByName('更新案内');
$date = '7/25';

$blog->yarooUpdate(
  'yaroo_120725_4',
    $date,
    4,
    "男気溢れるラジオの第４回！！
今回も「森大」くんが登場！！",
    ""
);
?>
