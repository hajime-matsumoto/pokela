<?php
require_once dirname(__FILE__).'/update.header.php';

$blog = new Pokela_Model_Blog();
$blog_id = $blog->getIdByName('更新案内');
$date = '7/18';

$blog->yarooUpdate(
  'yaroo_120718_3',
    $date,
    3,
"男気溢れるラジオの第３回！！
なんと、ゲストも登場！？
ロックなデラックスなお便り、お待ちしてます！！",
"男気溢れるラジオの第３回！！
今回は、ゲストに「30－DELUXの森大さん」が登場！！
ロックなデラックスなお便り、お待ちしてます！！"
);
?>
