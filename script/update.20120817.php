<?php
require_once dirname(__FILE__).'/update.header.php';

$blog = new Pokela_Model_Blog();
$blog_id = $blog->getIdByName('更新案内');
$date = '8/3';

$blog->makaiUpdate(
    'majyoradio_120803_9',
    $date,
    9,
    "第９回更新！！
コミケＣＤ発売情報など、
番組情報をチェックしてね♪"
,
"第９回更新！！
コミケＣＤ発売情報など、
番組情報をチェックしてね♪"
);
?>
