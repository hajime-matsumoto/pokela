REPLACE INTO `pokela`.`pokela_blog_entry` (`id`, `blog_id`,`content`, `field01`, `field02`, `field03`, `field04`, `field05`, `field06`, `field07`, `field08`, `field09`, `field10`, `ts`) VALUES (26, 1, 
'<p>オリジナルラジオドラマ「まじょおーさまばくたん！」を中心に、
魔女王様シオーヌとメイド長アルカがお届けするカオスな番組です！
<br />
愚民共よ！心して聞くように！もし忘れるような事があれば…
<br />
処刑！しちゃうからね☆
</p>
',
'../makai/main/top_banner.jpg',
'廣田詩夢とあきやまかおるのまじょおーさまばくたん！魔界政府広報部',
'声優「廣田詩夢」と「あきやまかおる」のラジオ番組！<br/>
オリジナルラジオドラマ「まじょおーさまばくたん！」を中心に、 <br />
魔女王様シオーヌとメイド長アルカがお届けするカオスな番組です！<br />
<br />愚民共よ！心して聞くように！
<br />もし忘れるような事があれば… 処刑！しちゃうからね☆',
'「ミッドナイトラブファントム」', 
'愚民共の恋の悩みを解決する目安箱',
'「戦え魔界の社畜達」',
'愚民共の仕事の悩みを解決する目安箱',
'「もしもしBOX」',
'暇を持て余したお嬢様の為にアルカが用意した質問の数々',
NULL,
CURRENT_TIMESTAMP
);

INSERT INTO pokela_blog_category_master ( name, full_name, cat_id ) VALUES ('魔界政府広報部','廣田詩夢とあきやまかおるのまじょおーさまばくたん！魔界政府広報部', 'makai');

INSERT INTO `pokela`.`pokela_blog_category` (`id`, `type`, `entry_id`, `name`, `blog_id`, `ts`) VALUES (
NULL,
'entry',
 '26',
 '魔界政府広報部',
 '1',
 CURRENT_TIMESTAMP);
