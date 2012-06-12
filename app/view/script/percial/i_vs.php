<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">
<title>番組情報</title>
<?php echo $this->base(); ?>
</head>
<body bgcolor="#99CC33" text="#FFFFFF" link="#0000FF">
<div align="center"><img src="img/vs/main/top_banner.png" width="240" height="131" border="0"><br>
<font size="2">☆★☆★☆★☆★☆★☆★</font></div>
<hr size="1">
<font color="#FFCC00"></font>
V.S UNION WAVE
<br>
<br>
<font color="#FF0000" size="2">隔週月曜日更新 </font><br>
<font size="2">
<p>
<?php echo $prog->getContent( ); ?>
</p>
</font>
  <br>
	<br>
  <font color="#FFCC00">■ﾊﾟｰｿﾅﾘﾃｨ紹介<br></font>
<p>
V.S UNION (泰勇気　笠原あきら　大高ひろみ　鈴木コウタ　星奈美紀　ロバート・ウォーターマン）<br />
─V.S UNIONとは、自らの『声』を活かし、熱きオリジナル『ソング』を作ってゆく『組合』である。─
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
<hr size="1">
<div align="center"> （C)2009<a href="mailto:support@pokela.jp">BIW</a>.</div>
</body>
