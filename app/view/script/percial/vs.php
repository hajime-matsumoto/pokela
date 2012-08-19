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
         <h2><img src="img/<?php echo $id;?>/main/vsbiglogo.png"></h2>
</center>
<blockquote>
        　<font color="#FF0000">隔週月曜日更新 </font><br>
<?php echo $prog->getContent( ); ?>

<img src="img/vs/vs_5.jpg" width="400px"/>


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
V.S UNION (泰勇気　笠原あきら　大高ひろみ　鈴木コウタ　星奈美紀　ロバート・ウォーターマン）<br />
─V.S UNIONとは、自らの『声』を活かし、熱きオリジナル『ソング』を作ってゆく『組合』である。─
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
