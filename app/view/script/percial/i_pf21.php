<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">
<title>番組情報</title>
<?php echo $this->base(); ?>
</head>
<body bgcolor="#99CC33" text="#FFFFFF" link="#0000FF">
<div align="center"> <font size="2">
  ☆★☆★☆★☆★☆★☆★</font></div>
<font color="#FFCC00" size="2"></font><font size="2">
<font color="#FFCC00"></font>「けーすけ・ちよの声優で地球は救われる！」 <br>
<br>
<font color="#FFCC33">【番組概要】</font><br>
<br>
声優事務所「トリトリオフィス」のラジオ番組がついに登場！！<br>
トリトリオフィスの様々な声優が隔週で、パーソナリティをつとめるラジオ。<br>
第２・４週更新が「けーすけ・ちよの声優で地球は救われる！ 」<br>
<br>
<font color="#FFCC33">【番組紹介】</font><br>
<br>
</font>
  <font size="2"><br>
  <font color="#FF3366">■後藤 啓介・桜咲 千依：『けーすけ・ちよの声優で地球は救われる！』</font><br>
  難しい世の中をざっくり解決！<br>
  パーソナリティはいちいち細かい男ごっとんこと“後藤啓介”と、ざ・不思議ちゃんちょっとんこと“桜咲千依”！<br>
  トリトリオフィス、デコボコ声優コンビがお送りする地球レスキュー型webラジオ。<br>
  聞けばあまりのカオスっぷりにほっこり間違いナシ！？<br>
  <br>
  <img src="img/pf21/rajio1.jpg" width="240"><br>
	<br>
<?php 
foreach( $up as $e ){
    $date = vsprintf("%02d%02d", explode('/',$e->getField02()));
    echo "<img src='img/pf21/{$date}/seiyuu_{$e->getField01()}.jpg' width='240'  border='1'> <br>";
    echo nl2br($e->getField04());
    echo "<br />";
}
?>
  <br>

  <b>レンジャーポイントの説明</b><br>
  お便りが採用されると「レンジャーポイント」が貰えるよ♪<br>
  13回採用されて『異次元戦隊』に任命されると・・・素敵なことがっ！！？？<br>
  どんどん「レンジャーポイント」を集めよう！！<br>
  <br>
  お便りが１回採用されると・・・<br>
  　　　　『後藤戦隊・もしくは桜咲戦隊』に任命！！<br>
  お便りが２回・３回採用されると・・・<br>
  　　　　『ご当地戦隊』に任命！！<br>
  お便りが４回～６回採用されると・・・<br>
  　　　　『地球戦隊』に任命！！<br>
  お便りが７回～９回採用されると・・・<br>
  　　　　『宇宙戦隊』に任命！！<br>
  お便りが１０回～１２回採用されると・・・<br>
  　　　　『銀河戦隊』に任命！！<br>
  お便りが１３回採用されると・・・<br>
  　　　　『異次元戦隊』に任命！！<br>
  <br>
  <font color="#FFCC00"><br>
  <br>
  </font></font> <font color="#FFCC00" size="2">■ﾊﾟｰｿﾅﾘﾃｨ紹介</font><font size="2"><br>
  後藤 啓介</font> <font size="2"><br>
  誕生日：６月４日<br>
  出身地：大分県<br>
  身長：１７０cm<br>
  趣味・特技：モノマネ・筋トレ<br>
  資格：英検準２級・高等学校教員免許(地理)<br>
  後藤啓介ブログ<br>
  後藤啓介のTill-underground<br>
  http://www.geocities.jp/till_underground/contents.html<br>
  <br>
  桜咲 千依<br>
  誕生日：２月１２日<br>
  出身地：神奈川県<br>
  身長：１４６cm<br>
  趣味・特技：剣道初段<br>
  資格：日本語ワープロ検定準２級・書道準6段 <br>
  桜咲千依ブログ<br>
  桜咲千依のみるふぃーゆ☆どりーむ<br>
  http://ameblo.jp/chiyo-ousaki/<br>
  <font color="#FFCC00"><br>
  ■ｺｰﾅｰ内容</font><br>
  タイトル『けーすけ・ちよの声優で地球は救われる！』</font> <font size="2"><br>
  <br>
  コーナー紹介<br>
  ■江古田ミスド上相談室　<br>
  このコーナーは、人々を救いたい！なるだけ沢山救いたい！<br>
  そう思い、助けを求める声に耳を傾けるため、我らがトリトリオフィスの声優戦士の卵ちゃんたち、<br>
  いわゆる養成所生を番組にご案内し、悩みを相談してもらい、バシっと解決しちゃいましょうというコーナー。<br>
  <br>
	■	教えて！桜咲先生！！<br>
	自称すべて計算の天才女子・ちょっとんが、地球上の何故・何をずばっと解説し、<br>
	リスナーの皆さんにスッキリしてもらおうという、多少無茶で事務所もリスナーさんもざわざわするコーナー！<br>
	ちょっとんに教えてもらいたい言葉を大募集！！<br>
	次回お題　「い」で始まる言葉をちょっとんに教えてもらおう！！<br>
    <br>
  ■解析！真相心理<br>
  私とあなたはどんな人？ごっとんの心理テストにちょっとん と一緒に答えていこう！<br>
  問題の答えは次回放送に持ち越し。あなたはそれまで我慢できるか？<br>
  本屋に走ったら『メッ！』なんだからね！！byごっとん<br>
  ねぇ、これって私が只の晒し者に…（TДT）byちょっとん<br>
  <br>
  ■レッドのオゥサキ・ドゥ・マドゥーイ　奇数回コーナー<br>
  厳しい戦いに、健康な体は必須だ！それにはやはり、女性の真心こもった素晴らしい手料理で健全な体を育成したい！！したいんですが…<br>
  お米の炊き方すらわからない？ちょっとんの真心は必殺かイチコロか！<br>
  ごっとんは生きて収録を終えられるのか？ちょっとんのチャレンジ料理コーナー。<br>
  調理過程を見て青くなるごっとんも番組ページに随時アップしていきます。<br>
  <br>
<?php
$date = vsprintf("%02d%02d", explode('/',$up[0]->getField02()));
foreach(explode("\n",`ls img/pf21/$date/od/ | sort -n`) as $file){
    //$disp = mb_convert_encoding( $file, 'cp932','utf8');
    $disp = $file;
if(trim($disp)){
printf('<a href="img/pf21/'.$date.'/od/%s">画像</a>%s<br>', $disp, str_replace('.jpg','',$disp));
}
}
$date = vsprintf("%02d%02d", explode('/',$up[1]->getField02()));
foreach(explode("\n",`ls img/pf21/$date/od/ | sort -n`) as $file){
    //$disp = mb_convert_encoding( $file, 'cp932','utf8');
    $disp = $file;
if(trim($disp)){
printf('<a href="img/pf21/'.$date.'/od/%s">画像</a>%s<br>', $disp, str_replace('.jpg','',$disp));
}
}
?>
<br>

            <font size="3">第<?php echo $up[0]->getField01();?>回の番組内容は！！</font><br />
◆解析！真相心理<br/>
　次回の解析深層心理は・・・<br />
<?php
echo $up[0]->getField05(); 
?>
            <br>
            　さぁ、これであなたの何が分かるのかっ！！<br>
            　次回を待て！！</p>

            <p><br>
            ◆レッドのオゥサキ・ドゥ・マドゥーイ<br><br>

  ■鼻歌即興教室！<br>
  とうとうジングルまでコーナー化しちゃいました。パート２<br>
  既存のものなんて使いません・使わせません！<br>
  ちょっとんの鼻歌が炸裂！<br>
  <br>
  ■ふつおた<br>
  普通のお便りの紹介<br>
  <br>
  そのほか、応援メッセージ・ご意見・ご感想・リクエスト企画などお待ちしてます☆<br>
  <br>
  <font color="#FFCC00">■各ｺｰﾅｰへのお便り募集</font><br>
  ･<a href="mailto:support@pokela.jp?subject=%82%C6%82%E8%82%E7%82%B6%20%82%B2%88%D3%8C%A9%82%B2%8A%B4%91z">とりらじ 
  ご意見ご感想</a><br>
  <br>
 </font>  </font> </p>
<hr size="1">
<div align="center"><font size="2"> （C)2008 <a href="mailto:support@pokela.jp">BIW</a>.</font></div>
</body>
</html>
