<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">
<title>番組情報</title>
<?php echo $this->base(); ?>
</head>
<body bgcolor="#99CC33" text="#FFFFFF" link="#0000FF">
<div align="center"><img src="img/makai/main/top_banner.jpg" width="240" height="131" border="1"><br>
<font size="2">☆★☆★☆★☆★☆★☆★</font></div>
<hr size="1">
<font color="#FFCC00"></font>
廣田詩夢とあきやまかおるのまじょおーさまばくたん！魔界政府広報部
<br>
<br>
<font color="#FF0000" size="2">毎週金曜日更新 </font><br>
<font size="2">
<p>
<?php echo $prog->getContent( ); ?>
</p>
<?php 
foreach( $up as $e ){
    $date = vsprintf("%02d%02d", explode('/',$e->getField02()));
    echo "<a href='img/makai/majyoradio_{$e->getField01()}.jpg'>写真</a><br>";
    echo nl2br($e->getField04());
    echo "<br />";
}
?>

</font>
  <br>
	<br>
  <font color="#FFCC00">■ﾊﾟｰｿﾅﾘﾃｨ紹介<br>
  </font>◆<a href="images/hirota_shion.jpg">廣田詩夢</a>（ひろた　しおん）<br>
  生年月日：９月２３日<br>
  出身地　：東京都<br>
  特技　：ピアノ、水泳、柔軟、裁縫、和裁、洋裁<br>
  趣味　：読書、舞台鑑賞</p>
<p>２００３年、「デ・ジ・キャラットにょ」のアクア役でデビュー。<br>
  アニメ「はなまる幼稚園」や、アニメ「うみねこのなく頃に」など出演。<br>
  「しおんぬ」という愛称で親しまれている。</p>
<p>出演経歴<br>
  アニメ 「はなまる幼稚園」さつき<br>
  アニメ 「うみねこのなく頃に」シエスタ00<br>
  アニメ 「地獄少女 三鼎」篠山心　　など多数</p>
<p>所属事務所「ぷろだくしょんバオバブ」公式ＨＰ<br>
  　<a href="http://pro-baobab.jp/">http://pro-baobab.jp/</a></p>
<p>廣田詩夢公式ブログ<br>
  　<a href="http://gree.jp/hirota_shion">http://gree.jp/hirota_shion</a></p>
<p>廣田詩夢個人ブログ<br>
  　『Shion's Diary』<br>
  　<a href="http://hirotashion.jugem.jp/">http://hirotashion.jugem.jp/</a></p>
<br>
<br>
◆<a href="./img/makai/main/akiyama_kaoru.jpg">あきやま　かおる</a><br>
特技：ディアボロ、美術全般<br />
趣味：プロレス観戦、建築物拝見<br />
<p>
声優・俳優だけでなく、アーティスト活動なども積極的に行っている。声優ユニットがんばるんば/民族音楽風ユニットMISHAORU/テクノポップユニット純白RGB/同人サークルはな＊うた/芸能歌劇団泥陀羅など多数のユニットで歌い手としても活躍。「ハコファクトリィ」の名でグラフィックデザイナーの活動も行う。
</p>
<p>
出演経歴<br />
ナレーション「マガドルTV」テレ玉レギュラー<br />
ゲーム「ロロナのアトリエ～アーランドの錬金術師～」ホロホロ<br />
ゲーム「トトリのアトリエ～アーランドの錬金術師２～」 ピアニャ<br />
レポーター　　「新日本プロレス/WRESTLE LAND」(アキ)<br />
他　多数<br />
<br>
<br>
<font color="#FFCC00">■ｺｰﾅｰ内容</font><br>
<?php for($i=4; $i<9; $i+=2): ?>
<p>
◆
<?php echo $prog->{"getField0".$i}(); ?><br />
<?php echo $prog->{"getField0".(1+$i)}(); ?><br />
</p>
<?php endfor; ?>

<br>
<hr size="1">
<div align="center"> （C)2009<a href="mailto:support@pokela.jp">BIW</a>.</div>
</body>
