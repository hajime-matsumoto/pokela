<?php
/*
$this->title()->append('廣田詩夢とあきやまかおるのまじょおーさまばくたん！魔界政府広報部');
$this->headMeta( )->addKeyword("廣田詩夢","あきやまかおる","まじょおーさまばくたん！魔界政府広報部");
$this->headMeta( )->setDescription("番組タイトル：廣田詩夢とあきやまかおるのまじょおーさまばくたん！魔界政府広報部");
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<?php echo $this->title( ); ?>
<?php echo $this->headMeta( ); ?>
<?php echo $this->base(); ?>
<?php echo $this->headForIE( ); ?>
<?php echo $this->headLink( ); ?>
<?php echo $this->headStyle( ); ?>
<?php echo $this->headJs( ); ?>
</head>
<body bgcolor="#FFFFFF" text="#666666" link="#0000FF" vlink="#FF0000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="844" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
   <td><img src="images/spacer.gif" width="12" height="1" border="0" alt=""></td>
   <td><img src="images/spacer.gif" width="822" height="1" border="0" alt=""></td>
   <td><img src="images/spacer.gif" width="10" height="1" border="0" alt=""></td>
   <td><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></td>
  </tr>
  <tr>
   <td colspan="3"><img name="pf_r2_c1" src="images/pf_r2_c1.jpg" width="844" height="49" border="0" alt=""></td>
   <td><img src="images/spacer.gif" width="1" height="49" border="0" alt=""></td>
  </tr>
  <tr>
   <td rowspan="2"  bgcolor="#99CC33"><p>&nbsp;</p></td>
     <td valign="top">
        <center>
         <h2><img style="width: 200px" src="img/<?php echo $id;?>/main/logo.jpg"></h2>
</center>
<blockquote>
        　<font color="#FF0000">毎週水曜日更新 </font><br>
<h2>「30 DELUXとロック兄弟のＹＡＲＯＯ！～男気活性委員会～」</h2>
<?php echo $prog->getContent( ); ?>

<div style="margin-top:60px">
<center>
<?php 
foreach( $up as $e ){
    $date = vsprintf("%02d%02d", explode('/',$e->getField02()));
    $file = "img/yaroo/yaroo_{$e->getField01()}.jpg";
    if( file_exists('/home/kurari/pokela/public/' .$file) )
    {
        echo "<img src='img/yaroo/yaroo_{$e->getField01()}.jpg' width='400'  border='1'> <br>";
    }
    echo nl2br($e->getField04());
    echo "<br />";
}
?>
</center>
</div>

</blockquote>
<center>
 </td>
   <td rowspan="2"  bgcolor="#99CC33"><p>&nbsp;</p></td>
   <td><img src="images/spacer.gif" width="1" height="176" border="0" alt=""></td>
  </tr>
  <tr>
   <td><img name="pf_r4_c2" src="images/pf_r4_c2.jpg" width="822" height="28" border="0" alt=""></td>
   <td><img src="images/spacer.gif" width="1" height="28" border="0" alt=""></td>
  </tr>
  <tr>
   <td colspan="3"><img name="pf_r5_c1" src="images/pf_r5_c1.jpg" width="844" height="50" border="0" alt=""></td>
   <td><img src="images/spacer.gif" width="1" height="50" border="0" alt=""></td>
  </tr>
  <tr>
   <td rowspan="2"  bgcolor="#99CC33"><p>&nbsp;</p></td>
   <td align="center" valign="top"><br>
   <table width="100%" border="0" cellpadding="0" cellspacing="0">
     <tr>
       <td align="left" valign="top"><blockquote>

<table>
<tr>
<td><img style="width: 350px" src="img/<?php echo $id;?>/main/shimizu.jpg"></td>
<td><img style="width: 350px" src="img/<?php echo $id;?>/main/tanaka.jpg"></td>
</tr>
<tr>
<th>清水&nbsp;順二</th>
<th>田中&nbsp;精</th>
</tr>
</table>
劇空間演劇ユニット「３０－ＤＥＬＵＸ」<br />
タイソン大屋（ 劇団☆ 新感線），<br />
清水順二が中心となって2003年に立ちあがった演劇のユニット。<br />
笑って泣けて考えさせられてかっこいい！をテーマに <br />
極上のエンターテイメント作品を提供し続けている集団 <br />
<img style="width: 350px" src="img/<?php echo $id;?>/main/rock_b.jpg">
<pre>
<i>
クイッキー・ロック (Quicky RocK) 
ボーカル＆リユース　　TOKYO出身

エディー・バートン (Eddy Burton)
パフォーマー、コーラス＆自転車　　TOKYO出身 

ディック・タイラー (Dick Tyler)
パフォーマー＆ゴミ分別　　NAGOYA出身
</i>


エコとダンスと音楽をこよなく愛する3ピースフリースタイルユニット。
中途半端な風貌からは想像もつかない地球環境問題を提言するリリックに、
脅威的なキレのあるダンス。
「ROCKだけにとらわれない、むしろROCKしていないことこそROCKだ」を自画自賛に、
ROCKだけにとらわれない音楽性で客の口は空きっぱなし、
かつ笑いと明日への元気を引き起こすLIVEを自負する。
QUEENとX JAPANが大好き。
結成は2011年正月、初LIVEは2011年2月12日。
</pre>

       </blockquote>
       </td>
       <td align="center" valign="top">&nbsp;</td>
     </tr>
   </table></td>
   <td rowspan="2"  bgcolor="#99CC33"><p>&nbsp;</p></td>
   <td><img src="images/spacer.gif" width="1" height="175" border="0" alt=""></td>
  </tr>
  <tr>
   <td><img name="pf_r7_c2" src="images/pf_r7_c2.jpg" width="822" height="33" border="0" alt=""></td>
   <td><img src="images/spacer.gif" width="1" height="33" border="0" alt=""></td>
  </tr>
  <tr>
   <td colspan="3"><img name="pf_r8_c1" src="images/pf_r8_c1.jpg" width="844" height="58" border="0" alt="コーナー紹介"></td>
   <td><img src="images/spacer.gif" width="1" height="58" border="0" alt=""></td>
  </tr>
  <tr>
   <td rowspan="2"  bgcolor="#99CC33"><p>&nbsp;</p></td>
   <td valign="top"><blockquote><br>

<table>
<?php
$array = explode(',',trim($prog->getField04()));
for($i=0;$i<count($array);$i+=2):
$key = trim($array[$i]);
$value = trim($array[$i+1]);
?>
<tr>
<td width="15px">◆</td>
<td><?php echo $key; ?></td>
</tr>
<tr>
<td colspan="2" style="padding:5px 20px"><?php echo nl2br($value); ?></td>
</tr>
<?php
endfor;
?>
</table>
   </td>
   <td rowspan="2"  bgcolor="#99CC33"><p>&nbsp;</p></td>
   <td><img src="images/spacer.gif" width="1" height="166" border="0" alt=""></td>
  </tr>
  <tr>
   <td><img name="pf_r10_c2" src="images/pf_r10_c2.jpg" width="822" height="30" border="0" alt=""></td>
   <td><img src="images/spacer.gif" width="1" height="30" border="0" alt=""></td>
  </tr>
  <tr>
   <td colspan="3" bgcolor="#99CC33">&nbsp;</td>
   <td><img src="images/spacer.gif" width="1" height="0" border="0" alt=""></td>
  </tr>
  <tr>
   <td rowspan="2"  bgcolor="#99CC33">&nbsp;</td>
   <td valign="top" bgcolor="#99CC33"></td>
   <td rowspan="2"  bgcolor="#99CC33">&nbsp;</td>
   <td><img src="images/spacer.gif" width="1" height="0" border="0" alt=""></td>
  </tr>
  <tr>
   <td bgcolor="#99CC33">&nbsp;</td>
   <td><img src="images/spacer.gif" width="1" height="0" border="0" alt=""></td>
  </tr>
  <tr>
   <td colspan="3"><img name="pf_r14_c1" src="images/pf_r14_c1.jpg" width="844" height="58" border="0" alt="メールフォーム"></td>
   <td><img src="images/spacer.gif" width="1" height="58" border="0" alt=""></td>
  </tr>
  <tr>
   <td rowspan="2"  bgcolor="#99CC33"><p>&nbsp;</p></td>
   <td align="center" valign="top"><blockquote>
     <div align="center">       <a href="./mail_<?php echo $id; ?>/">
       <img src="images/mail.gif" alt="メールフォーム" width="360" height="300" border="0"></a>
       <br>
       番組へのご意見・ご感想をお待ちしております！<br>
       <br>
       <br>
     </div>
   </blockquote>
   </td>
   <td rowspan="2"  bgcolor="#99CC33"><p>&nbsp;</p></td>
   <td><img src="images/spacer.gif" width="1" height="165" border="0" alt=""></td>
  </tr>
  <tr>
   <td><img name="pf_r19_c2" src="images/pf_r19_c2.jpg" width="822" height="24" border="0" alt=""></td>
   <td><img src="images/spacer.gif" width="1" height="24" border="0" alt=""></td>
  </tr>
  <tr>
   <td colspan="3"><img src="images/pf_r20_c1.jpg" alt="" name="pf_r20_c1" width="844" height="60" border="0" usemap="#pf_r20_c1Map"></td>
   <td><img src="images/spacer.gif" width="1" height="60" border="0" alt=""></td>
  </tr>
  <tr>
   <td colspan="3"><img name="pf_r21_c1" src="images/pf_r21_c1.jpg" width="844" height="67" border="0" alt=""></td>
   <td><img src="images/spacer.gif" width="1" height="67" border="0" alt=""></td>
  </tr>
</table>
<map name="pf_r20_c1Map">
<area shape="rect" coords="36,20,129,45" href="./index.html">
<area shape="rect" coords="191,20,278,44" href="./kiyaku.html">
<area shape="rect" coords="326,19,516,47" href="./pp.html">
<area shape="rect" coords="548,19,667,45" href="./index.html">
</map>
<script language="javascript">
<!--
document.write('<img src="w3a_biw/writelog.php?ref='+document.referrer+'" width="1" height="1">');
// -->
</script>

</body>
</html>
