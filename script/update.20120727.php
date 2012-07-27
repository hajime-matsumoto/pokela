<?php
require_once dirname(__FILE__).'/update.header.php';

$blog = new Pokela_Model_Blog();
$blog_id = $blog->getIdByName('更新案内');
$date = '7/27';

$blog->makaiUpdate(
    'majyoradio_120727_8',
    $date,
    8,
    "第８回更新！！
コミケの情報も要チェック♪"
,
"第８回更新！！
今回はコミケで発売されるＣＤの話が盛りだくさん！！
ぜひ、番組をチェックしてね♪"
);

$blog->ftUpdate(
    'FT_120727_37',
    $date,
    37,
    "第３７回更新！
夏休みスペシャル！？たくさんのお便り、
お待ちしております♪"
);

$blog->seiyuUpdate(
    'seiyuu_120727_43',
    $date,
    43,
    "第４３回更新！！
オゥサキ・ドゥ・マドゥーイの写真は
番組情報をチェックしてね♪"
,"第４３回放送！！
今日の声優戦士は「　小宮法将（こみやのりまさ）」くん♪"
,"<p>Ｑ： レストランや喫茶店で注文をするとき、
あなたは迷いやすい方ですか？すぐ決める方ですか？<br /><br />
A：たいてい決まった物を注文する<br />
B：メニューをじっくり見て、ゆっくり決める<br />
C：凝った料理や難しそうな料理を注文する<br />
D：人と同じものを注文する</p>"
);

$blog->odUpdate(
    'od22',
    $date,
    22
);
?>
