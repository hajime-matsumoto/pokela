<?php
$this->title()->append('しろがねしょぉむと廣田詩夢のPower Voice Jam!');
$this->headMeta( )->addKeyword("しろがねしょぉむ,廣田詩夢,声優,オーディション,リスナー参加型");
$this->headMeta( )->setDescription("番組タイトル：しろがねしょぉむと廣田詩夢のPower Voice Jam!");
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
		 <blockquote>
        <h2><img src="images/PJM02_logo01.jpg" width="600"></h2>
        　<font color="#FF0000">毎週火曜日更新 </font><br>
        <p>声優プロダクション「うぃなぁエンタテイメント」の「しろがねしょぉむ」と、<br>
          ぷろだくしょんバオバブの声優「廣田詩夢」の凸凹コンビが、<br>
          声優になりたい人・声優好きの人に送る応援バラエティー番組！</p>
        <p>事務所のオーナーが語るここだけの話や、廣田詩夢の現場の話など、<br>
          業界の Ｈｏｗ Ｔｏ も聴けちゃうかも!?</p>
        <p>また、明日の声優業界を背負って立つ！？<br>
          新人声優のアシスタントメンバーも参加！！</p>
        <p>皆さんの夢を叶えるお手伝いしちゃいます♪</p>
        <font size="2">
        </font>
<center>
  <img src="images/PVJ_110510.jpg" width="450" border="1">          <br>
  いよいよ、「Power Voice Jam!2ndシーズン」が始まります！！<br>
  新たにメインパーソナリティを向かえた声優『廣田詩夢』と、<br>
  アシスタントメンバーとの集合写真♪ <br>
  <br>

<!--
		<img src="img/pf05/PVJ_131.jpg" width="450" border="1"> <br>
		第１３１回目更新！！<br>
		桜咲く季節で、装いも新たに♪<br>
  <br>
		<img src="img/pf05/PVJ_132.jpg" width="450" border="1"> <br>
		第１３２回目更新！！<br>
		ぱわじゃむアシスタントオーディション<br>
		２回目〆切迫る！！<br>
  <br>
		<img src="img/pf05/PVJ_133.jpg" width="450" border="1"> <br>
		第１３３回目更新！！<br>
		ぱわじゃむアシスタントオーディション<br>
		２回目〆切迫る！！<br>
		みんなの応募を待ってます！！<br>
		<br>
		<img src="img/pf05/PVJ_134.jpg" width="450" border="1"> <br>
		<img src="img/pf05/PVJ_134_hiroin.jpg" width="450" border="1"> <br>
第１３４回目更新！！<br />
ぱわじゃむアシスタントオーディション、<br />
たくさんのご応募、ありがとうございました。 <br />
ただいま選考中です！！<br />
  <br>
		<img src="img/pf05/PVJ_134.jpg" width="450" border="1"> <br>
第１３５回更新！！<br />
アシスタント募集締め切りました。<br />
ただいま選考中♪<br />
<br>
//-->
<?php 
foreach( $up as $e ){
    $date = vsprintf("%02d%02d", explode('/',$e->getField02()));
    echo "<img src='img/pf05/PVJ_{$e->getField01()}.jpg' width='450'  border='1'> <br>";
    echo nl2br($e->getField04());
    echo "<br />";
}
?>
今回はもゲストが登場！！<br />
遊びに来てくれた、声優の「あきやまかおる」さん登場！！<br />
		<br>
		ぱわじゃむRainbowのブログが始まります♪<br>
		メンバーやスタッフが毎日更新していくよ！！<br>
		下記ＵＲＬからどうぞ！！<br>
		<a href="http://ameblo.jp/power-jam/">http://ameblo.jp/power-jam/</a><br>
		<br>
		<br>
		<br>
<!--
		<b>番組アシスタント募集　追加募集オーディション</b><br>
		<br>
		ナレーター「しろがねしょぉむ」と声優「廣田詩夢」の二人がお送りする、<br>
		声優好きなリスナー、又は声優になりたい人を応援する、リスナー参加型番組。<br>
		「しろがねしょぉむと廣田詩夢のPower Voice Jam」の番組アシスタントの募集概要<br>
		<br>
		<br>
		■応募資格<br>
		心身共に健康な１５歳～２５歳の男女。<br>
		芸能界・声優界を志望し、番組への出演・協力が可能な方。<br>
		東京都内での収録のため、収録の際に東京に来られるかた（交通費は自己負担）<br>
		プロ・アマ問わず。<br>
		<br>
		<br>
		■応募方法<br>
		顔と全身の写真２枚。（プリクラ不可）<br>
		履歴書（オーディション用紙）<br>
		志望動機などの自己アピールを書いたもの（Ａ４サイズ、書式自由）<br>
		　＊18才未満は親の同意書<br>
		<br>
		<br>
		■書類送付先<br>
		【宛先】〒107-8880　赤坂郵便局留<br>
		インターネットコミュニティ　ぽけら　<br>
		「しろがねしょぉむと廣田詩夢のPower Voice Jam！」<br>
		番組アシスタント募集　係<br>
		<br>
		<br>
		■締切り<br>
		2012年<b>4月30日</b>（必着）<br>
		<br>
		<br>
//-->
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
		<br>
	◆番組からのお知らせ◆<br>
	ラジオ大阪で番組をお聴きの皆様へ<br>
	<br>
	放送時間が３月より変更となります。<br>
	２月２６日（日）２１：３０～２２：００の放送から、<br>
	３月２日（金）２４：３０～２５：００の放送時間に変わります。<br>
	<b>毎週金曜日２４：３０～２５：００</b>の放送です。<br>
	お楽しみに！！<br>
	<br>
	 </blockquote>
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
                  <td align="left" valign="top"><strong>◆しろがねしょぉむ</strong><br> 
                    <font size="2"><br>
                    <strong>生年月日</strong>：2月26日<br>
                    <br>
                    <strong>血液型</strong>　：Ｂ型<br>
                    <strong><br>
                    出身地</strong>　：静岡県<br>
                    <br>
                    関東などを中心に<br>
                    ラジオＤＪ・ナレーターで活躍中。<br>
                    <br>
                    <strong>出演経歴</strong><br>
                    ラジオ　「キッズタイムス元気の印！」<br>
                    <font color="#FFFFFF">ラジオ　</font>「ファンタジスタ」<br>
                    <font color="#FFFFFF">ラジオ　</font>「しろがねしょぉむと高乃　麗 のVoice-Bee-Get!」<br>
                    <font color="#FFFFFF">ラジオ</font>　「Hey!Sei-Yuu!　～koetama*Radio 
                    Junction～」<br>
                    <br>
                    ＣＭ　　「朝日ソーラー」シリーズ<br>
                    <font color="#FFFFFF">ＣＭ　　</font>「テレコムランド」<br>
                    <font color="#FFFFFF">ＣＭ　　</font>「アットコム」<br>
                    <br>
                    <strong>所属事務所「Winner Entertainment」公式ＨＰ</strong><br>
                    <a href="http://winner.co.jp/">http://winner.co.jp/</a><br>
                    <br>
                    <strong>しろがねしょぉむオフィシャルブログ</strong><br>
                    モバイルサイト「ＧＲＥＥ」にて展開中！！<br>
                    <a href="http://gree.jp">http://gree.jp</a><br>
                    </font></td>
                  <td align="left" valign="top"><img src="img/pf05/SYOOMU-HP.jpg" width="180" height="214"></td>
                  <td align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr> 
                  <td colspan="2" align="left" valign="top">【ぱわじゃむRainbow】メンバー紹介<br> 
                  </td>
                  <td rowspan="8" align="left" valign="top">&nbsp;</td>
                </tr>
                <tr> 
                  <td align="left" valign="top">井澤美香子（いざわみかこ）<br>
                    生年月日：９月6日<br>
                    血液型　：O型<br>
                    出身地　：埼玉県 
                    <p>&nbsp;</p></td>
                  <td align="left" valign="top"><img src="img/pf05/izawa_mikako.jpg" width="200" border="1"></td>
                </tr>
                <tr> 
                  <td align="left" valign="top"><p>大柴英亜瑠（おおしばぱある）<br>
                      生年月日：２月７日<br>
                      血液型　：Ａ型<br>
                      出身地　：神奈川県</p>
                    <p>&nbsp;</p></td>
                  <td align="left" valign="top"><img src="img/pf05/ooshiba_paaru.jpg" width="200" border="1"></td>
                </tr>
                <tr> 
                  <td align="left" valign="top">木村恵美子（きむらえみこ）<br>
                    生年月日：６月１５日<br>
                    血液型　：Ａ型<br>
                    出身地　：千葉県</td>
                  <td align="left" valign="top"><img src="img/pf05/kimura_emiko.jpg" width="200" border="1"></td>
                </tr>
                <tr> 
                  <td align="left" valign="top">吉川ありさ（よしかわありさ）<br>
                    生年月日：２月２０日<br>
                    血液型　：Ａ型<br>
                    出身地　：京都府</td>
                  <td align="left" valign="top"><img src="img/pf05/yoshikawa_arisa.jpg" width="200" border="1"></td>
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
        ◆Power Jam 診療所<br>
        リスナーさんからの様々な悩みに答え、<br>
        　それに合った適切な治療法をアドバイスしていくコーナー。<br>
        声優になるためにはどうしたらいいの？の悩みだけでなく、<br>
        　時にはあなたの周りで起こった、ちょっと笑ってしまうようなトラブル・悩み・相談まで、<br>
        　当診療所院長のしょぉむと、新米看護婦の「しおんぬ」が、手厚く看護いたします。<br>
       <p>◆Next Voice Jam！<br>
         　今活躍されている声優さんをゲストにお呼びして、<br>
         　色々と聴いちゃうコーナー！！<br>
         　時には、大物ゲストも来るかも！？<br>
         　また声優養成所に通ってレッスンを受けている子たちをゲストに呼んで、<br>
         　今どんなことをやっているのか、新鮮な養成所生の声を聞いちいます。<br>
         　声優を目指している子たちには必聴！！<br>
       </p>
       <p>◆ぱわじゃむ稽古場日誌<br>
         　これは、私たちが声優になるために、日頃どんな稽古を行っているのかを<br>
         　リポートしたり、養成所の稽古場に突撃取材なども考えています！！<br>
         　声優になりたい人に向けて、生の生徒の声をお届け出来たらと思います♪<br>
       </p>
       <p>◆Power Jam　劇場<br>
         　ラジオドラマのコーナーです。<br>
         　夏に向けて、ドラマの内容を企画考案中です。<br>
         　もちろん、私たちアシスタントメンバーが出演します。<br>
         　こんな内容がいい！！などのご意見も募集！！<br>
       </p>
       <p>◆Voice Jam mission<br>
         　そのラジオドラマ企画の成功に向けて、<br>
         　私たちが本気でプロになるために、その精神・技術力などを高めるために<br>
         　様々なことに挑戦するコーナー！！<br>
         　スタッフからの無理難題な無茶振り指令にも、<br>
         　根を上げずに答えていきます♪<br>
         　リスナーさんからのチャレンジお題の募集も行います！！<br>
       </p>
			 <p>◆ぱわじゃむ　今週のヒロイン <br>
			 　オープニングのくじ引きで選ばれた「ぱわじゃむRainbow」が、<br>
			 　３分間自分のコーナーを持てるという夢のコーナー。</p>
			 <p>◆しおんぬの愛の説教部屋<br>
			 　廣田詩夢がいろんな事に愛の説教をするコーナー。<br>
			 　しおんぬに説教されたい、そこのあなたは説教されたい内容を<br>
			 　投稿しよう！！<br>
			 　しおんぬが「愛を持って」説教します！！</p>
       <p>◆ふつおた<br>
         　いわゆる、普通のお便りです。何気ない質問や、身近に起こった出来事、<br>
         　番組の感想・応援・こんな企画をやって欲しいなどのリクエスト、お気軽にお便りください♪</p>
   </blockquote>
      <div align="center"></div>
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
     <div align="center">       <a href="./mail_pf05/">
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
