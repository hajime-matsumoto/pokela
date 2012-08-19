<?php
require_once dirname(__FILE__).'/update.header.php';

$blog = new Pokela_Model_Blog();
$blog_id = $blog->getIdByName('更新案内');
$date = '8/17';

$blog->makaiUpdate(
    'majyoradio_120817_11',
    $date,
    11,
    "第11回更新！！8.24公開録音が決定♪
また、一部の書店ではサイン入りノベルが販売☆
番組をチェックしてね♪"
,
""
);
?>
