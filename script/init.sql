CREATE DATABASE IF NOT EXISTS pokela DEFAULT CHAR SET utf8;

DROP TABLE IF EXISTS pokela_blog_master;
DROP TABLE IF EXISTS pokela_blog_entry;
DROP TABLE IF EXISTS pokela_blog_category;

CREATE TABLE IF NOT EXISTS pokela_blog_master (
	id INT PRIMARY KEY AUTO_INCREMENT,
	name varchar(512),
	ts TIMESTAMP
) DEFAULT CHAR SET utf8;

CREATE TABLE IF NOT EXISTS pokela_blog_entry (
	id INT PRIMARY KEY AUTO_INCREMENT,
	blog_id INT,
	content TEXT,
	field01 TEXT,
	field02 TEXT,
	field03 TEXT,
	field04 TEXT,
	field05 TEXT,
	field06 TEXT,
	field07 TEXT,
	field08 TEXT,
	field09 TEXT,
	field10 TEXT,
	ts TIMESTAMP
) DEFAULT CHAR SET utf8;

CREATE TABLE IF NOT EXISTS pokela_blog_category (
	id INT PRIMARY KEY AUTO_INCREMENT,
	type varchar(128),
	entry_id varchar(128),
	name varchar(128),
	blog_id varchar(128),
	ts TIMESTAMP
) DEFAULT CHAR SET utf8;

INSERT INTO  `pokela`.`pokela_blog_master` ( `id` , `name` , `ts`)
VALUES ( NULL ,  '番組案内', CURRENT_TIMESTAMP), ( NULL ,  '更新案内', CURRENT_TIMESTAMP);
INSERT INTO `pokela`.`pokela_blog_entry` (`id`, `blog_id`,`content`, `field01`, `field02`, `field03`, `field04`, `field05`, `field06`, `field07`, `field08`, `field09`, `field10`, `ts`) VALUES (NULL, 1, '<p>テレビ東京系６局ネットにて、毎週土曜日、朝10:30から放送中のTVアニメ『FAIRY TAIL』のラジオがいよいよスタート！</p><p>アニメ『FAIRY TAIL』の情報をお届けする他に、魔導士ギルドとしてリスナーのみんなからの質問や依頼に答えたりしながら、 更にみんなで『FAIRY TAIL』を盛り上げていこうというラジオ番組です。</p>', 'ft_logo.jpg', 
	'FAIRY TAIL Webラジオ『魔導士ギルド放送局 やりすぎソーサラー！』', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, CURRENT_TIMESTAMP);
INSERT INTO `pokela`.`pokela_blog_entry` (`id`, `blog_id`,`content`, `field01`, `field02`, `field03`, `field04`, `field05`, `field06`, `field07`, `field08`, `field09`, `field10`, `ts`) VALUES (NULL, 2, '更新31回目', '31', '5/4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, CURRENT_TIMESTAMP);
INSERT INTO `pokela`.`pokela_blog_entry` (`id`, `blog_id`,`content`, `field01`, `field02`, `field03`, `field04`, `field05`, `field06`, `field07`, `field08`, `field09`, `field10`, `ts`) VALUES (NULL, 2, '更新32回更新！
今回は公開録音の模様をお届け！！
スペシャルなゲストも登場♪', '32', '5/18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, CURRENT_TIMESTAMP);

INSERT INTO `pokela`.`pokela_blog_category` (`id`, `type`, `entry_id`, `name`, `blog_id`, `ts`) VALUES (NULL, 'entry', '1', 'やりすぎソーサラー', '1', CURRENT_TIMESTAMP);
INSERT INTO `pokela`.`pokela_blog_category` (`id`, `type`, `entry_id`, `name`, `blog_id`, `ts`) VALUES (NULL, 'entry', '2', 'やりすぎソーサラー', '2', CURRENT_TIMESTAMP);
INSERT INTO `pokela`.`pokela_blog_category` (`id`, `type`, `entry_id`, `name`, `blog_id`, `ts`) VALUES (NULL, 'entry', '3', 'やりすぎソーサラー', '2', CURRENT_TIMESTAMP);

INSERT INTO `pokela`.`pokela_blog_entry` (`id`, `blog_id`,`content`, `field01`, `field02`, `field03`, `field04`, `field05`, `field06`, `field07`, `field08`, `field09`, `field10`, `ts`) 
VALUES 
(NULL, 1, 
	'
	<p>長谷優里奈の新ラジオ番組がスタート！！</p>
	<p>女の子はいつでもどこでもキレイでいなくちゃっ♪</p>
	<p>美容といったら、女の子にとって良い成分『イソフラボン』！？</p>
	<p>パーソナリティ一同、自分たちの女度を上げるために</p>
	<p>様々なことに挑戦していくどたばた成長バラエティ番組↑</p>
	<p>遂に放送開始！！</p>
	',
	'iso_logo.jpg',
 	'長谷優里奈のイソフラボン☆バ↑', 
	NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, CURRENT_TIMESTAMP);

INSERT INTO `pokela`.`pokela_blog_entry` (`id`, `blog_id`,`content`, `field01`, `field02`, `field03`, `field04`, `field05`, `field06`, `field07`, `field08`, `field09`, `field10`, `ts`) VALUES (NULL, 2, '更新111回目', '111', '5/22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, CURRENT_TIMESTAMP);
INSERT INTO `pokela`.`pokela_blog_entry` (`id`, `blog_id`,`content`, `field01`, `field02`, `field03`, `field04`, `field05`, `field06`, `field07`, `field08`, `field09`, `field10`, `ts`) VALUES (NULL, 2, '第１１２回更新！！
皆さんからのお便り、待ってます♪'
, '112', '5/29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, CURRENT_TIMESTAMP);
INSERT INTO `pokela`.`pokela_blog_category` (`id`, `type`, `entry_id`, `name`, `blog_id`, `ts`) VALUES (NULL, 'entry', '4', 'イソフラボンバー', '1', CURRENT_TIMESTAMP);
INSERT INTO `pokela`.`pokela_blog_category` (`id`, `type`, `entry_id`, `name`, `blog_id`, `ts`) VALUES (NULL, 'entry', '5', 'イソフラボンバー', '2', CURRENT_TIMESTAMP);
INSERT INTO `pokela`.`pokela_blog_category` (`id`, `type`, `entry_id`, `name`, `blog_id`, `ts`) VALUES (NULL, 'entry', '6', 'イソフラボンバー', '2', CURRENT_TIMESTAMP);

INSERT INTO `pokela`.`pokela_blog_entry` (`id`, `blog_id`,`content`, `field01`, `field02`, `field03`, `field04`, `field05`, `field06`, `field07`, `field08`, `field09`, `field10`, `ts`) 
VALUES 
(NULL, 1, 
	'<p>声優プロダクション「うぃなぁエンタテイメント」の「しろがねしょぉむ」と、ぷろだくしょんバオバブの声優「廣田詩夢」の凸凹コンビが、 声優になりたい人・声優好きの人に送る応援バラエティー番組！</p>',
	'pvj_logo.jpg', 'しろがねしょぉむと廣田詩夢のPower Voice Jam!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, CURRENT_TIMESTAMP);

INSERT INTO `pokela`.`pokela_blog_entry` (`id`, `blog_id`,`content`, `field01`, `field02`, `field03`, `field04`, `field05`, `field06`, `field07`, `field08`, `field09`, `field10`, `ts`) VALUES (NULL, 2, '更新111回目', '137', '5/22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, CURRENT_TIMESTAMP);
INSERT INTO `pokela`.`pokela_blog_entry` (`id`, `blog_id`,`content`, `field01`, `field02`, `field03`, `field04`, `field05`, `field06`, `field07`, `field08`, `field09`, `field10`, `ts`) VALUES (NULL, 2, '第１３８回更新！！
引き続き、ゲストに「あきやまかおる」さんが登場！！'
, '138', '5/29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, CURRENT_TIMESTAMP);
INSERT INTO `pokela`.`pokela_blog_category` (`id`, `type`, `entry_id`, `name`, `blog_id`, `ts`) VALUES (NULL, 'entry', '7', 'パワーボイスジャム', '1', CURRENT_TIMESTAMP);
INSERT INTO `pokela`.`pokela_blog_category` (`id`, `type`, `entry_id`, `name`, `blog_id`, `ts`) VALUES (NULL, 'entry', '8', 'パワーボイスジャム', '2', CURRENT_TIMESTAMP);
INSERT INTO `pokela`.`pokela_blog_category` (`id`, `type`, `entry_id`, `name`, `blog_id`, `ts`) VALUES (NULL, 'entry', '9', 'パワーボイスジャム', '2', CURRENT_TIMESTAMP);

INSERT INTO `pokela`.`pokela_blog_entry` (`id`, `blog_id`,`content`, `field01`, `field02`, `field03`, `field04`, `field05`, `field06`, `field07`, `field08`, `field09`, `field10`, `ts`) 
VALUES 
(NULL, 1, 
	'<p>声優事務所「トリトリオフィス」のラジオ番組がついに登場！！</p>
	<p>トリトリオフィスの様々な声優が隔週で、パーソナリティをつとめるラジオ。</p>
	<p>第２・４週更新が「けーすけ・ちよの声優で地球は救われる！」</p>',
	'seiyuu_logo.jpg', 'とりラジ 「けーすけ・ちよの声優で地球は救われる！」', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, CURRENT_TIMESTAMP);

INSERT INTO `pokela`.`pokela_blog_entry` (`id`, `blog_id`,`content`, `field01`, `field02`, `field03`, `field04`, `field05`, `field06`, `field07`, `field08`, `field09`, `field10`, `ts`) VALUES (NULL, 2, '更新111回目', '37', '5/4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, CURRENT_TIMESTAMP);
INSERT INTO `pokela`.`pokela_blog_entry` (`id`, `blog_id`,`content`, `field01`, `field02`, `field03`, `field04`, `field05`, `field06`, `field07`, `field08`, `field09`, `field10`, `ts`) VALUES (NULL, 2, 
	'第３８回更新！！
「教えて！桜咲先生のコーナー」も大好評♪
桜咲先生の懺悔がある！？ '
	, '38', '5/18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, CURRENT_TIMESTAMP);
INSERT INTO `pokela`.`pokela_blog_category` (`id`, `type`, `entry_id`, `name`, `blog_id`, `ts`) VALUES (NULL, 'entry', '10', 'トリラジ', '1', CURRENT_TIMESTAMP);
INSERT INTO `pokela`.`pokela_blog_category` (`id`, `type`, `entry_id`, `name`, `blog_id`, `ts`) VALUES (NULL, 'entry', '11', 'トリラジ', '2', CURRENT_TIMESTAMP);
INSERT INTO `pokela`.`pokela_blog_category` (`id`, `type`, `entry_id`, `name`, `blog_id`, `ts`) VALUES (NULL, 'entry', '12', 'トリラジ', '2', CURRENT_TIMESTAMP);




INSERT INTO `pokela`.`pokela_blog_entry` (`id`, `blog_id`,`content`, `field01`, `field02`, `field03`, `field04`, `field05`, `field06`, `field07`, `field08`, `field09`, `field10`, `ts`) 
VALUES 
(NULL, 1, 
	'<p>ラジオ大阪で放送中の番組「しろがねしょぉむと廣田詩夢のPower Voice Jam！」
	から生まれたアシスタントユニット「ぱわじゃむRainbow」</p>
	<p>新人声優である彼女たちだけの番組が遂に開始！！</p>
	<p>毎回色んな事にチャレンジしながら、切磋琢磨に成長していく姿を描いていきます！！</p>',
	'mjs_logo.jpg', 'ぱわじゃむRainbowのMini Jam Show!!', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, CURRENT_TIMESTAMP);

INSERT INTO `pokela`.`pokela_blog_entry` (`id`, `blog_id`,`content`, `field01`, `field02`, `field03`, `field04`, `field05`, `field06`, `field07`, `field08`, `field09`, `field10`, `ts`) VALUES (NULL, 2, '更新11回目', '11', '5/4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, CURRENT_TIMESTAMP);
INSERT INTO `pokela`.`pokela_blog_entry` (`id`, `blog_id`,`content`, `field01`, `field02`, `field03`, `field04`, `field05`, `field06`, `field07`, `field08`, `field09`, `field10`, `ts`) VALUES (NULL, 2, 
	'第１２回放送！！
今回は、お台場のスタジオからお届け！！',
	'12', '5/29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, CURRENT_TIMESTAMP);
INSERT INTO `pokela`.`pokela_blog_category` (`id`, `type`, `entry_id`, `name`, `blog_id`, `ts`) VALUES (NULL, 'entry', '13', 'レインボウ', '1', CURRENT_TIMESTAMP);
INSERT INTO `pokela`.`pokela_blog_category` (`id`, `type`, `entry_id`, `name`, `blog_id`, `ts`) VALUES (NULL, 'entry', '14', 'レインボウ', '2', CURRENT_TIMESTAMP);
INSERT INTO `pokela`.`pokela_blog_category` (`id`, `type`, `entry_id`, `name`, `blog_id`, `ts`) VALUES (NULL, 'entry', '15', 'レインボウ', '2', CURRENT_TIMESTAMP);



INSERT INTO `pokela`.`pokela_blog_entry` (`id`, `blog_id`,`content`, `field01`, `field02`, `field03`, `field04`, `field05`, `field06`, `field07`, `field08`, `field09`, `field10`, `ts`) 
VALUES 
(NULL, 1, 
	'<p>カリスマメイドの伊藤芽衣（めいち）と新鋭声優の板垣夏美（なっち）のMC二人が、ナレーターのしろがねしょぉむ（教授）の元で、
	「サブカルは日本の強み」をテーマに日本文化と創造力の魅力を広く発信していく番組です！！</p>',
	'dokudoku_logo.jpg', 'めいち＆なっちの　もうDokuDoku', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, CURRENT_TIMESTAMP);

INSERT INTO `pokela`.`pokela_blog_entry` (`id`, `blog_id`,`content`, `field01`, `field02`, `field03`, `field04`, `field05`, `field06`, `field07`, `field08`, `field09`, `field10`, `ts`) VALUES (NULL, 2, '更新11回目', '11', '5/4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, CURRENT_TIMESTAMP);
INSERT INTO `pokela`.`pokela_blog_entry` (`id`, `blog_id`,`content`, `field01`, `field02`, `field03`, `field04`, `field05`, `field06`, `field07`, `field08`, `field09`, `field10`, `ts`) VALUES (NULL, 2, 
	'第２４回放送！！
なっちが「診断メーカー」を作ってみたよ♪
みんなも楽しんでね！！',
	'23', '5/17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, CURRENT_TIMESTAMP);
INSERT INTO `pokela`.`pokela_blog_category` (`id`, `type`, `entry_id`, `name`, `blog_id`, `ts`) VALUES (NULL, 'entry', '16', 'ドクドク', '1', CURRENT_TIMESTAMP);
INSERT INTO `pokela`.`pokela_blog_category` (`id`, `type`, `entry_id`, `name`, `blog_id`, `ts`) VALUES (NULL, 'entry', '17', 'ドクドク', '2', CURRENT_TIMESTAMP);
INSERT INTO `pokela`.`pokela_blog_category` (`id`, `type`, `entry_id`, `name`, `blog_id`, `ts`) VALUES (NULL, 'entry', '18', 'ドクドク', '2', CURRENT_TIMESTAMP);
