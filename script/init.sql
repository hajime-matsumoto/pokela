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
INSERT INTO `pokela`.`pokela_blog_entry` (`id`, `blog_id`,`content`, `field01`, `field02`, `field03`, `field04`, `field05`, `field06`, `field07`, `field08`, `field09`, `field10`, `ts`) VALUES (NULL, 1, '<p>テレビ東京系６局ネットにて、毎週土曜日、朝10:30から放送中のTVアニメ『FAIRY TAIL』のラジオがいよいよスタート！</p><p>アニメ『FAIRY TAIL』の情報をお届けする他に、魔導士ギルドとしてリスナーのみんなからの質問や依頼に答えたりしながら、 更にみんなで『FAIRY TAIL』を盛り上げていこうというラジオ番組です。</p>', 'ft_logo.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, CURRENT_TIMESTAMP);
INSERT INTO `pokela`.`pokela_blog_entry` (`id`, `blog_id`,`content`, `field01`, `field02`, `field03`, `field04`, `field05`, `field06`, `field07`, `field08`, `field09`, `field10`, `ts`) VALUES (NULL, 2, '更新１回目', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, CURRENT_TIMESTAMP);
INSERT INTO `pokela`.`pokela_blog_entry` (`id`, `blog_id`,`content`, `field01`, `field02`, `field03`, `field04`, `field05`, `field06`, `field07`, `field08`, `field09`, `field10`, `ts`) VALUES (NULL, 2, '更新２回目', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, CURRENT_TIMESTAMP);
INSERT INTO `pokela`.`pokela_blog_category` (`id`, `type`, `entry_id`, `name`, `blog_id`, `ts`) VALUES (NULL, 'entry', '1', 'やりすぎソーサラー', '1', CURRENT_TIMESTAMP);
INSERT INTO `pokela`.`pokela_blog_category` (`id`, `type`, `entry_id`, `name`, `blog_id`, `ts`) VALUES (NULL, 'entry', '2', 'やりすぎソーサラー', '2', CURRENT_TIMESTAMP);
INSERT INTO `pokela`.`pokela_blog_category` (`id`, `type`, `entry_id`, `name`, `blog_id`, `ts`) VALUES (NULL, 'entry', '3', 'やりすぎソーサラー', '2', CURRENT_TIMESTAMP);
