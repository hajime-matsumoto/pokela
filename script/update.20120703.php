<?php
require_once dirname(__FILE__).'/update.header.php';
//----------------------------------------------------------------------------------
// (金曜日) 更新処理 スクリプト フェアリーテイル, けいすけちよ, オオサキ
//-----------------------------------------------------------------------------------
$blog = new Pokela_Model_Blog();
$blog_id = $blog->getIdByName('更新案内');
$date = '7/3';

$blog->isoUpdate(
  'iso_120703_117',
    $date,
    117,
    "第１１７回更新！！\n番組へのお便り、リクエスト企画など、\nお待ちしております！！"
);
/*
$blog->pvjUpdate(
    "PVJ_120619_141_net",
    $date,
    141,
    "第１４１回更新！！\nしろがねさんとしおんぬの2人だけの放送！！\nお楽しみに♪",
    "今回は、しろがねさんとしおんぬの\n2人だけの放送！！"
);
 */
$blog->mjsUpdate(
    "MJS_120703_17",
    $date,
    17,
    "第１７回放送！！\n七夕が間近♪メンバーの願い事は・・・？",
    "七夕が近いので、七夕の思い出や\nメンバーの「願い事」を語ってもらいました♪"
);
/*
$blog->vsUpdate(
    "vsunion_120625_2",
    $date,
    2,
    "第２回更新！！\n新番組開始！第２回目配信！！\nぜひみんな聴いてね♪"
);
 */
?>