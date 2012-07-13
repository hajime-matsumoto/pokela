<html>
<head>
<title>ぱわじゃむRainbowのMini Jam Show!!</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<meta name="keywords" content="ぱわじゃむRainbowのMini Jam Show!!">
<meta name="description" content="ラジオ大阪で放送中の番組「しろがねしょぉむと廣田詩夢のPower Voice Jam！」から生まれたアシスタントユニット「ぱわじゃむRainbow」新人声優である彼女たちだけの番組が遂に開始！！">
<?php echo $this->base(); ?>

</head>
<body bgcolor="#FFFFFF" text="#666666" link="#0000FF" vlink="#FF0000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="844" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
   <td><img src="./images/spacer.gif" width="12" height="1" border="0" alt=""></td>
   <td><img src="./images/spacer.gif" width="822" height="1" border="0" alt=""></td>
   <td><img src="./images/spacer.gif" width="10" height="1" border="0" alt=""></td>
   <td><img src="./images/spacer.gif" width="1" height="1" border="0" alt=""></td>
  </tr>
  <tr>
   <td colspan="3"><img name="pf_r2_c1" src="../images/pf_r2_c1.jpg" width="844" height="49" border="0" alt=""></td>
   <td><img src="../images/spacer.gif" width="1" height="49" border="0" alt=""></td>
  </tr>
  <tr>
   <td rowspan="2"  bgcolor="#99CC33"><p>&nbsp;</p></td>
   <td valign="top"><blockquote>
       <h2>番組名：ぱわじゃむRainbowのMini Jam Show!!</h2>
				 <center>
				<img src="./img/mjs/top.jpg" alt="ぱわじゃむRainbowのMini Jam Show!!" border="1" /><br>
			</center>
			<br>
       <font size="2"> 
         <b>【番組紹介】　</b>（火曜日更新）<br>
         <br>
				 ラジオ大阪で放送中の番組「しろがねしょぉむと廣田詩夢のPower Voice Jam！」<br>
				 から生まれたアシスタントユニット「ぱわじゃむRainbow」<br>
				 新人声優である彼女たちだけの番組が遂に開始！！<br>
				 毎回色んな事にチャレンジしながら、切磋琢磨に成長していく姿を描いていきます！！<br>
         <br>
				 ぱわじゃむRainbowのブログ<br>
				 <a href="http://ameblo.jp/power-jam/">http://ameblo.jp/power-jam/</a><br>
				<br>
				<center>
				<br>
<!--
				<img src="./img/mjs/MJS_6.jpg" width="400" alt="第6回" border="1" /><br>
				第６回目更新！！<br>
				吉川ありさ、復活♪<br>
				今回は、声優の専門学校に通う子からのお便り<br>
				<br>
				<img src="./img/mjs/MJS_7.jpg" width="400" alt="第7回" border="1" /><br>
				 第７回目更新！！<br>
				 今日はみんなの欲望が明らかになるお便りがっ１？<br>
				<br>
				<img src="./img/mjs/MJS_8.jpg" width="400" alt="第8回" border="1" /><br>
第８回目更新！！<br />
大柴英亜瑠の舞台情報は、<br />
下記をチェック！！<br />
</br />
				<img src="./img/mjs/MJS_9.jpg" width="400" alt="第9回" border="1" /><br>
				<img src="./img/mjs/MJS_10.jpg" width="400" alt="第10回" border="1" /><br>
第１０回放送！！<br />
４人なかなかそろわないけど、頑張るぞ！！<br />
<br />
//-->
<?php 
foreach( $up as $e ){
    $date = vsprintf("%02d%02d", explode('/',$e->getField02()));
    $file = "img/mjs/MJS_{$e->getField01()}.jpg";
    if( file_exists('/home/kurari/pokela/public/' .$file) )
    {
        echo "<img src='img/mjs/MJS_{$e->getField01()}.jpg' width='400'  border='1'> <br>";
    }
    echo nl2br($e->getField04());
    echo "<br />";
}
?>
<br />
ぱわじゃむRainbowのブログ<br />
<a href="http://ameblo.jp/power-jam/">http://ameblo.jp/power-jam/</a><br />
<br />


<!--
<pre style="font-size:120%">
ダニエルズ第1回公演
「LIFE IS・・」
作・演出ー貞岡秀司
振り付けー片山茂樹

ダンスと演劇のコラボレーションを軸に「演劇とダンスを学ぶ会」
や日替わりゲストのライブなども交えるエンターテインメント

【公演日程】 2012年6月14日
（木）～17日（日） 14日
（木）14:00～／19:00～ 15日
（金） 14:00～／19:00～ 16日
（土） 14:00～／19:00～ 17日
（日） 13:00～／18:00～ 
＊受付開始は開演一時間前、会場は三十分前です 。

【公演会場】 
永田町スタジオ（花柳輔蔵稽古場）

【観劇チケット】 
前売・当日：共に2,500円 
＊日時指定・全席自由 
当日券を購入の際は受付で大柴英亜瑠の名前を出してください。

予約は御名前、連絡先、日時を書いて048pearl@gmail.comまでお願いします！
</pre>
//-->

				<br>
			</center>
				<br>
        </font>
		</blockquote></td>
		<td rowspan="2"  bgcolor="#99CC33"><p>&nbsp;</p></td>
   <td><img src="../images/spacer.gif" width="1" height="176" border="0" alt=""></td>
  </tr>
  <tr>
   <td><img name="pf_r4_c2" src="../images/pf_r4_c2.jpg" width="822" height="28" border="0" alt=""></td>
   <td><img src="../images/spacer.gif" width="1" height="28" border="0" alt=""></td>
  </tr>
  <tr>
   <td colspan="3"><img name="pf_r5_c1" src="../images/pf_r5_c1.jpg" width="844" height="50" border="0" alt=""></td>
   <td><img src="../images/spacer.gif" width="1" height="50" border="0" alt=""></td>
  </tr>
  <tr>
   <td rowspan="2"  bgcolor="#99CC33"><p>&nbsp;</p></td>
   <td align="center" valign="top"><br>
   <table width="100%" border="0" cellpadding="0" cellspacing="0">
     <tr>
       <td align="left" valign="top"><blockquote>
              <table border="0" cellpadding="5" cellspacing="5">
                <tr> 
                  <td width="400" align="left" valign="top"> <font size="2"><b>■井澤美香子（いざわみかこ）</b><br>
                    <br>
<p>
生年月日：９月6日<br>
血液型　：O型<br>
出身地　：埼玉県 <br>
                  </td>
                  <td align="left" valign="top"><img src="./img/mjs/izawa_mikako.jpg" border="1"></td>
                </tr>
              </table>
              <br>
              <table border="0" cellpadding="5" cellspacing="5">
                <tr> 
                  <td width="400" align="left" valign="top"> <font size="2"><b>■大柴英亜瑠（おおしばぱある）</b><br>
                    <br>
<p>
生年月日：２月７日<br>
血液型　：Ａ型<br>
出身地　：神奈川県<br>
                  </td>
                  <td align="left" valign="top"><img src="./img/mjs/ooshiba_paaru.jpg" border="1"></td>
                </tr>
              </table>
              <br>
              <table border="0" cellpadding="5" cellspacing="5">
                <tr> 
                  <td width="400" align="left" valign="top"> <font size="2"><b>■尾関真菜（おぜきまな）</b><br>
                    <br>
<p>
生年月日：１月２９日<br>
血液型　：Ｏ型<br>
                  </td>
                  <td align="left" valign="top"><img src="./img/mjs/ozeki_mana.jpg" border="1"></td>
                </tr>
              </table>
              <br>
              <table border="0" cellpadding="5" cellspacing="5">
                <tr> 
                  <td width="400" align="left" valign="top"> <font size="2"><b>■木村恵美子（きむらえみこ）</b><br>
                    <br>
<p>
出身地　：愛知県<br>
生年月日：６月１５日<br>
血液型　：Ａ型<br>
                  </td>
                  <td align="left" valign="top"><img src="./img/mjs/kimura_emiko.jpg" border="1"></td>
                </tr>
              </table>
              <br>
              <table border="0" cellpadding="5" cellspacing="5">
                <tr> 
                  <td width="400" align="left" valign="top"> <font size="2"><b>■吉川ありさ（よしかわありさ）</b><br>
                    <br>
<p>
出身地　：千葉県<br>
生年月日：２月２０日<br>
血液型　：Ａ型<br>
出身地　：京都府<br>
                  </td>
                  <td align="left" valign="top"><img src="./img/mjs/yoshikawa_arisa.jpg" border="1"></td>
                </tr>
              </table>
              <br>

              <br>
            </blockquote></td>
       <td align="center" valign="top">&nbsp;</td>
     </tr>
   </table></td>
   <td rowspan="2"  bgcolor="#99CC33"><p>&nbsp;</p></td>
   <td><img src="../images/spacer.gif" width="1" height="175" border="0" alt=""></td>
  </tr>
  <tr>
   <td><img name="pf_r7_c2" src="../images/pf_r7_c2.jpg" width="822" height="33" border="0" alt=""></td>
   <td><img src="../images/spacer.gif" width="1" height="33" border="0" alt=""></td>
  </tr>
  <tr>
   <td colspan="3"><img name="pf_r8_c1" src="../images/pf_r8_c1.jpg" width="844" height="58" border="0" alt="コーナー紹介"></td>
   <td><img src="../images/spacer.gif" width="1" height="58" border="0" alt=""></td>
  </tr>
  <tr>
   <td rowspan="2"  bgcolor="#99CC33"><p>&nbsp;</p></td>
   <td valign="top"><blockquote><b><br>
        <font size="2">【コーナー紹介】</font></b><font size="2"><br>
        <br>
<p><b>■今週のつぶやき</b></p>
<p>
メンバーのみんなが、テーマを元につぶやきます。<br>
テーマを大募集します！！<br>
例）寝る前にささやいて欲しい言葉　　など・・
</p>
<p><b>■ふつおた</b></p>
<p>いわゆる普通のお便りのコーナー。</p>
   </td>
   <td rowspan="2"  bgcolor="#99CC33"><p>&nbsp;</p></td>
   <td><img src="../images/spacer.gif" width="1" height="166" border="0" alt=""></td>
  </tr>
  <tr>
   <td><img name="pf_r10_c2" src="../images/pf_r10_c2.jpg" width="822" height="30" border="0" alt=""></td>
   <td><img src="../images/spacer.gif" width="1" height="30" border="0" alt=""></td>
  </tr>
  <tr>
   <td colspan="3" bgcolor="#99CC33">&nbsp;</td>
   <td><img src="../images/spacer.gif" width="1" height="0" border="0" alt=""></td>
  </tr>




















  <tr>
   <td colspan="3"><img name="pf_r14_c1" src="../images/pf_r14_c1.jpg" width="844" height="58" border="0" alt="メールフォーム"></td>
   <td><img src="../images/spacer.gif" width="1" height="58" border="0" alt=""></td>
  </tr>
  <tr>
   <td rowspan="2"  bgcolor="#99CC33"><p>&nbsp;</p></td>
   <td align="center" valign="top"><blockquote>
        <div align="center"> <a href="../mail_mjs/"> <img src="../images/mail.gif" alt="メールフォーム" width="360" height="300" border="0"></a> 
          <br>
          <font size="2">番組へのご意見・ご感想をお待ちしております！<br>
          <br>
          </font><br>
<br>
     </div>
   </blockquote>
   </td>
   <td rowspan="2"  bgcolor="#99CC33"><p>&nbsp;</p></td>
   <td><img src="../images/spacer.gif" width="1" height="165" border="0" alt=""></td>
  </tr>
  <tr>
   <td><img name="pf_r19_c2" src="../images/pf_r19_c2.jpg" width="822" height="24" border="0" alt=""></td>
   <td><img src="../images/spacer.gif" width="1" height="24" border="0" alt=""></td>
  </tr>
  <tr>
   <td colspan="3"><img src="../images/pf_r20_c1.jpg" alt="" name="pf_r20_c1" width="844" height="60" border="0" usemap="#pf_r20_c1Map"></td>
   <td><img src="../images/spacer.gif" width="1" height="60" border="0" alt=""></td>
  </tr>
  <tr>
   <td colspan="3"><img name="pf_r21_c1" src="../images/pf_r21_c1.jpg" width="844" height="67" border="0" alt=""></td>
   <td><img src="../images/spacer.gif" width="1" height="67" border="0" alt=""></td>
  </tr>
</table>
<map name="pf_r20_c1Map">
<area shape="rect" coords="36,20,129,45" href="./index.php">
<area shape="rect" coords="191,20,278,44" href="./kiyaku.html">
<area shape="rect" coords="326,19,516,47" href="./pp.html">
<area shape="rect" coords="548,19,667,45" href="./index.php">
</map>
<script language="javascript">
<!--
document.write('<img src="w3a_biw/writelog.php?ref='+document.referrer+'" width="1" height="1">');
// -->
</script>

</body>
</html>
