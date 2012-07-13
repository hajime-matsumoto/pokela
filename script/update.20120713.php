<?php
require_once dirname(__FILE__).'/update.header.php';

$blog = new Pokela_Model_Blog();
$blog_id = $blog->getIdByName('更新案内');
$date = '7/13';

$blog->makaiUpdate(
    'majyoradio_120713_6',
    $date,
    6,
    "第６回更新！！
オリジナルラジオドラマの第６も配信！！
新キャラが登場だよ！！",
"第６回更新！！
ドラマは新キャラが登場！！
気になるキャストさんは、番組でチェックしてね♪"
);

$blog->ftUpdate(
    'FT_120713_36',
    $date,
    36,
    "第３６回更新！
今回からテーマ曲が変わりました！！
ぜひ聴いてください♪"
);

$blog->seiyuUpdate(
    'seiyuu_120713_42',
    $date,
    42,
    "第４２回更新！！
「教えて！桜咲先生」が大好評♪",
"第４２回放送！！
今日の声優戦士は「　榎本圭佑（えのもとけいすけ）」くん♪"
    "<p>Ｑ： コーラをコップにそそぐ時、あなたはどんな風にそそぐ？<br /><br />
A：コップの半分<br />
B：コップの七分目<br />
C：ギリギリまでそそぐ<br />
D：泡の様子で決める</p>"
);
?>
