REPLACE INTO `pokela`.`pokela_blog_entry` (`id`, `blog_id`,`content`, `field01`, `field02`, `field03`, `field04`, `field05`, `field06`, `field07`, `field08`, `field09`, `field10`, `ts`) VALUES (28, 1, 
'<p>
古き良きアニメソングを愛する人々が集ったV.S UNION。<br />
オリジナルの同人誌、同人ゲーム、ドラマCD、ガレージキットなどに主題歌を作ったりなんかして<br />
創作活動を展開しているみんなを応援したい番組!!<br />
</p>',
'../vs/main/top_banner.png',
'バーサスWAVE',
'<p>
古き良きアニメソングを愛する人々が集ったV.S UNION。<br />
オリジナルの同人誌、同人ゲーム、ドラマCD、ガレージキットなどに主題歌を作ったりなんかして<br />
創作活動を展開しているみんなを応援したい番組!!<br />
</p>',
'オープニング〇〇,
番組冒頭に叫ぶ一言。あなたの想いをぶつけて!,
答えて V.S さん,
挨拶と一緒に答えられる簡単な質問を募集します!!
例:「好きなおでんの具は?」「旅行に行くならどこがいい?」「ぶっちゃけ、○○が弱点です!!,
大地に立て、メカ総長!!,
「いかにも総長こと泰勇気の言いそうなセリフ、言わせたいセリフ」を募集します。,
他力本願キカクダー02,
番組でオリジナルのストーリーを作ってみよう!!という訳で、
その内容についてリスナーの皆さんからの意見を募集しております。,
サークル・インフォメーション,
立体、印刷物、ネット配信等の創作同人活動をしている方を応援。
あなたのオリジナル物語、オリジナル作品をご紹介。各種イベントに参加するのならここで宣伝しよう!,
ふつおた紹介！！,
普通のオタク・・・ではなく、普通のおたより(メール)を紹介するコーナー! 日々の報告からマニアックな質問、我々への要求など、幅広く募集します!! 「ふつおたあってこそラジオ番組!」たくさん待ってます!!'
,
null,
null,
null,
null,
null,
NULL,
CURRENT_TIMESTAMP
);

INSERT INTO pokela_blog_category_master ( name, full_name, cat_id ) VALUES ('バーサスWAVE','バーサスWAVE', 'vs');

INSERT INTO `pokela`.`pokela_blog_category` (`id`, `type`, `entry_id`, `name`, `blog_id`, `ts`) VALUES (
NULL,
'entry',
 '28',
 'バーサスWAVE',
 '1',
 CURRENT_TIMESTAMP);
