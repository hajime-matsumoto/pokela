<?php
require_once dirname(__FILE__).'/update.header.php';

$blog = new Pokela_Model_Blog();
$blog_id = $blog->getIdByName('更新案内');
$date = '7/4';

$blog->yarooUpdate(
  'yaroo_120704_1',
    $date,
    1,
    "記念すべき、第１回放送！！\n皆さんからのお便りをお待ちしております！！",
    "記念すべき、第１回放送！！
    皆さんからのお便りをお待ちしております！！

＊お詫び＊
    今回、配信が遅れまして大変申し訳ございません。
    楽しみにしていたリスナー様にはご迷惑をおかけしました。
    今後とも番組共々、ぽけらを宜しくお願い致します。"
);
?>
