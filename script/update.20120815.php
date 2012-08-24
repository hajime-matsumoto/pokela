<?php
require_once dirname(__FILE__).'/update.header.php';

$blog = new Pokela_Model_Blog();
$blog_id = $blog->getIdByName('更新案内');
$date = '8/15';

$blog->yarooUpdate(
  'yaroo_120815_7',
    $date,
    7,
    "男気溢れるラジオの第７回！！
今回はゲストに「30－DELUX」の「天野博一」が登場！！",
"男気溢れるラジオの第７回！！
今回はゲストに「30－DELUX」の「天野博一」が登場！！
また、ディックが復活し、７回目にして初コーナーが始動！？
番組をチェックしてね。"
);
?>
