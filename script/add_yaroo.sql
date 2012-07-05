INSERT INTO pokela_blog_category_master ( name, full_name, cat_id ) VALUES ('YAROO','30－DELUXとロック兄弟のＹＡＲＯＯ！', 'yaroo');

REPLACE INTO `pokela`.`pokela_blog_entry` (`id`, `blog_id`,`content`, `field01`, `field02`, `field03`, `field04`, `field05`, `field06`, `field07`, `field08`, `field09`, `field10`, `ts`) VALUES (48, 1, 
'男の中の男を目指すべく、本物の「男（漢）」とは何か！？<br />
男道をリスナーと一緒に極めていこう！！という番組です。<br />
パーソナリティは、清水順二・田中精・ロック兄弟の<br />
男気溢れる５人でお届け！！',
'../yaroo/main/logo.jpg',
'30－DELUXとロック兄弟のＹＡＲＯＯ！',
'男の中の男を目指すべく、本物の「男（漢）」とは何か！？<br />
男道をリスナーと一緒に極めていこう！！という番組です。<br />
パーソナリティは、清水順二・田中精・ロック兄弟の<br />
男気溢れる５人でお届け！！',
'ロックにしてYAROO!!,
ロックの兄貴が世の中でロックじゃない(男気がない)と感じるものをロックにしていくコーナー。,
ＤＸにしてYAROO!!,
ＤＸの親分が世の中でデラックスじゃないぞと感じるものをデラックスにかえていくコーナー。,
ディック・タイラー男気への道,
男気を持っていろんなことに挑戦していくチャレンジコーナー,
ふつおたのコーナー,
普通のお便り。番組の感想、応援メッセージなど、どんどんお便りお待ちしております',
null,
null,
null,
null,
null,
NULL,
CURRENT_TIMESTAMP
);

INSERT INTO `pokela`.`pokela_blog_category` (`id`, `type`, `entry_id`, `name`, `blog_id`, `ts`) VALUES (
NULL,
'entry',
 '48',
 'YAROO',
 '1',
 CURRENT_TIMESTAMP);
