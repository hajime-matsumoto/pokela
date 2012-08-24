<?php
require_once dirname(__FILE__).'/update.header.php';

$blog = new Pokela_Model_Blog();
$blog_id = $blog->getIdByName('更新案内');
$date = '8/10';

$blog->makaiUpdate(
    'majyoradio_120824_12',
    $date,
    12,
    "第１２回更新！！
さぁ、来月の生誕祭は出来るのか！？",
""
);

$blog->ftUpdate(
    'FT_120824_39',
    $date,
    39,
    "第３９回更新！
本日のゲストは、週刊少年マガジンの松木さんが登場！！"
);

$blog->seiyuUpdate(
    'seiyuu_120824_45',
    $date,
    45,
    "第４５回更新！！
オゥサキ・ドゥ・マドゥーイの写真は
番組情報をチェック！！",
"第４５回放送！！
今日の声優戦士は「藤本恵　（ふじもとめぐみ）」さん♪",
,"<p>Ｑ： お皿の上の大きなステーキ。マナーを考えずにあなたはどのように食べますか？<br >br />
A：左端からきって一切れずつ食べる<br />
B：右端からきって一切れずつ食べる<br />
C：全部切ってから一切れずつ食べる<br />
D：まず真ん中で切って一切れずつ食べる<br />
E：切り方はその時の気分<br /></p>"
);
?>
