<?php
$this->title()->append('廣田詩夢とあきやまかおるのまじょおーさまばくたん！魔界政府広報部');
$this->headMeta( )->addKeyword("廣田詩夢","あきやまかおる","まじょおーさまばくたん！魔界政府広報部");
$this->headMeta( )->setDescription("番組タイトル：廣田詩夢とあきやまかおるのまじょおーさまばくたん！魔界政府広報部");
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
         <h2><img src="img/<?php echo $id;?>/main/banner.jpg"></h2>
</center>
<blockquote>
        　<font color="#FF0000">毎週金曜日更新 </font><br>
<?php echo $prog->getContent( ); ?>


</blockquote>
<center>

<?php 
foreach( $up as $e ){
    $date = vsprintf("%02d%02d", explode('/',$e->getField02()));
    $img = "/home/kurari/pokela/public/img/makai/majyoradio_{$e->getField01()}.jpg";
    if(file_exists($img)){
    echo "<img src='img/makai/majyoradio_{$e->getField01()}.jpg' width='400'  border='1'> <br>";
    echo nl2br($e->getField04());
    echo "<br />";
    }
}
?>
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
              <table border="0" cellpadding="5" cellspacing="5">
                <tr> 
                  <td width="362" align="left" valign="top"><p>◆廣田詩夢（ひろた　しおん）<br>
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
                      　<a href="http://hirotashion.jugem.jp/">http://hirotashion.jugem.jp/</a></p></td>
                  <td width="229" align="left" valign="top"><img src="images/hirota_shion.jpg" width="180"></td>
                  <td width="3" align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr> 
                  <td colspan="3" align="left" valign="top">&nbsp;</td>
                </tr>
                <tr> 
                  <td align="left" valign="top"><strong>◆あきやまかおる</strong><br> 
<!--
                    生年月日：3月5日<br>
                    出身地：埼玉県<br />
                    趣味・特技:プロレス観戦・ディアボロ<br />
<p>
声優・俳優だけでなく、アーティスト活動なども積極的に行っている。
ハコファクトリィの名でデザイナーの活動も行う。
新日本プロレス主催「WRESTLE LAND」にレポーターとして参加している。
</p>
                    <strong>出演経歴</strong>
<p>
ナレーション　「マガドルTV」テレ玉レギュラー<br />
レポーター　　「新日本プロレス/WRESTLE LAND」(アキ)<br />
他　多数
</p>

<strong>所属事務所「カレイドスコープ」公式ＨＰ</strong><br />
&nbsp;&nbsp;<a href="http://www.klsp.jp/">http://www.klsp.jp/</a><br />
<strong>あきやまかおる公式ブログ</strong><br>
&nbsp;&nbsp;<a href="http://ameblo.jp/hako2/">http://ameblo.jp/hako2/</a>
//-->

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

                    </td>
                  <td align="left" valign="top"><img src="img/makai/main/akiyama_kaoru.jpg" width="200"></td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
              </table>
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
<tr>
<td width="15px">◆</td>
<td><?php echo $prog->getField04(); ?></td>
</tr>
<tr>
<td colspan="2" style="padding:5px 20px"><?php echo $prog->getField05(); ?></td>
</tr>
</table>
<table>
<tr>
<td width="15px">◆</td>
<td><?php echo $prog->getField06(); ?></td>
</tr>
<tr>
<td colspan="2" style="padding:5px 20px"><?php echo $prog->getField07(); ?></td>
</tr>
</table>
<table>
<tr>
<td width="15px">◆</td>
<td><?php echo $prog->getField08(); ?></td>
</tr>
<tr>
<td colspan="2" style="padding:5px 20px"><?php echo $prog->getField09(); ?></td>
</tr>
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
