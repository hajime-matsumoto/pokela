<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">
<title>番組情報</title>
<?php echo $this->base(); ?>
</head>
<body bgcolor="#99CC33" text="#FFFFFF" link="#0000FF">
<div align="center"><img src="img/yaroo/main/logo.jpg" width="240" height="131" border="0"><br>
<font size="2">☆★☆★☆★☆★☆★☆★</font></div>
<hr size="1">
<font color="#FFCC00"></font>
30 DELUXとロック兄弟のＹＡＲＯＯ！
<br>
<br>
<font color="#FF0000" size="2">毎週水曜日更新 </font><br>
<font size="2">
<p>
<?php echo $prog->getContent( ); ?>
</p>
</font>
  <br>
	<br>
  <font color="#FFCC00">■ﾊﾟｰｿﾅﾘﾃｨ紹介<br></font>
清水&nbsp;順二 <a href="img/<?php echo $id;?>/main/shimizu.jpg">写真</a>
田中&nbsp;精 <a href="img/<?php echo $id;?>/main/tanaka.jpg">写真</a>
<p>
劇空間演劇ユニット「３０－ＤＥＬＵＸ」<br />
タイソン大屋（ 劇団☆ 新感線），<br />
清水順二が中心となって2003年に立ちあがった演劇のユニット。<br />
笑って泣けて考えさせられてかっこいい！をテーマに <br />
極上のエンターテイメント作品を提供し続けている集団 <br />
</p>
ロック兄弟 <a href="img/<?php echo $id;?>/main/rock_b.jpg">写真</a>
<p>
クイッキー・ロック (Quicky RocK) <br />
ボーカル＆リユース　　TOKYO出身<br />
エディー・バートン (Eddy Burton)<br />
パフォーマー、コーラス＆自転車　　TOKYO出身 <br />
ディック・タイラー (Dick Tyler)<br />
パフォーマー＆ゴミ分別　　NAGOYA出身
</p>

<p>
エコとダンスと音楽をこよなく愛する3ピースフリースタイルユニット。
中途半端な風貌からは想像もつかない地球環境問題を提言するリリックに、
脅威的なキレのあるダンス。
「ROCKだけにとらわれない、むしろROCKしていないことこそROCKだ」を自画自賛に、
ROCKだけにとらわれない音楽性で客の口は空きっぱなし、
かつ笑いと明日への元気を引き起こすLIVEを自負する。
QUEENとX JAPANが大好き。
結成は2011年正月、初LIVEは2011年2月12日。
</p>

<font color="#FFCC00">■ｺｰﾅｰ内容</font><br>
<?php
$array = explode(',',trim($prog->getField04()));
for($i=0;$i<count($array);$i+=2):
$key = trim($array[$i]);
$value = trim($array[$i+1]);
?>
<p>
◆
<?php echo $key; ?><br />
<?php echo nl2br($value); ?><br />
</p>
<?php
endfor;
?>

<br>

<pre>
皆さんからのお便りお待ちしております。
ブログ・ツイッターへの書き込みもお便りとして採用しちゃうよ。
どんどん、書き込んでください！！
お待ちしております！！

■清水順二　公式ブログＧＲＥＥ
<a href="http://gree.jp/shimizu_junji/">http://gree.jp/shimizu_junji/</a>


■田中精　ブログ「田中精日記/ Team Bomb The Twist

<a href="http://bombthetwist.jugem.jp/?cid=3">http://bombthetwist.jugem.jp/?cid=3</a>
ツイッター
<a href="https://twitter.com/sugurutanaka16">https://twitter.com/sugurutanaka16</a>


■ロック兄弟　ツイッター
<a href="https://twitter.com/ROCK_BROTHERS">https://twitter.com/ROCK_BROTHERS</a>


■お友達の電撃チョモランマ隊オフィシャルブログ「チョモブロ」
<a href="http://ameblo.jp/den-qomo/">http://ameblo.jp/den-qomo/</a>
</pre>
<hr size="1">
<div align="center"> （C)2009<a href="mailto:support@pokela.jp">BIW</a>.</div>
</body>
