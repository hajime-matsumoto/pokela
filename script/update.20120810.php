<?php
require_once dirname(__FILE__).'/update.header.php';

$blog = new Pokela_Model_Blog();
$blog_id = $blog->getIdByName('更新案内');
$date = '8/10';

$blog->makaiUpdate(
    'majyoradio_120810_10',
    $date,
    10,
    "第１０回更新！！
コミケの情報も要チェック♪
他にも番組から素敵なお知らせが！？",
""
);

$blog->ftUpdate(
    'FT_120810_38',
    $date,
    38,
    "第３８回更新！
今回はいつもより放送が長いぞ！！
５０分の放送！！みんな聴いてね♪"
);

$blog->seiyuUpdate(
    'seiyuu_120810_44',
    $date,
    44,
    "第４４回更新！！
桜咲先生のコーナーなど、
盛りだくさんの内容です！！"
,"第４４回放送！！
今日の声優戦士は「　中沢奏輝（なかざわそうき）」くん♪"
,"<p>Ｑ： 恋人とのデート。 もうそろそろ帰る頃になったあなたは、 帰り際にどんなしぐさをする？<br /><br />
A：いつまでも相手をみている。<br />
B： 何度か振り返って手を振る<br />
C：振り返らずに帰る。<br />
D：握手を求める。<br />
E：目をじっと見つめる。</p>"
);
?>
