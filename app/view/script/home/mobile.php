<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">
<meta name="vnd.up.bookmark" content="http://pokela.jp/" />
<meta http-equiv="Cache-Control" content="no-cache" />
<title>ぽけら</title>
<?php echo $this->base(); ?>
</head>
<body bgcolor="#99CC33" text="#FFFFFF" link="#0000FF">
<div align="center"> 
  <img src="img/top.gif" alt="ぽけら" width="240" height="108"><br>
<font size="1">☆★☆★☆★☆★☆★☆★<br>
<a href="./kishu.html">対応機種</a> <a href="mailto:?body=%82%db%82%af%82%e7%0d%0ahttp%3a%2f%2fpokela%2ejp">友達に教える</a><br>
<a href="mailto:support@pokela.jp?subject=%82%db%82%af%82%e7">お問い合わせ・ご意見ご感想</a>
<br>
</font></div>
<hr size="1">

<a href="i2.html">試聴トラブルのお知らせ</a><br>
【docomo以外の方は<a href="index.php">こちら</a>】 

<!-- 最新順 日付ごとにグループ化 //-->
<?php foreach($list as $date => $value):?>
<hr size="1">

<font color="#FF0000" size="2"> </font><font size="2"> 
<?php echo $date;?> 更新
<font color="#FF6600"></font></font><br>
<hr size="1">
<?php foreach($value as $id => $title):?>
<a href="#<?php echo $id?>"><font color="blue"><?php echo $title?></font></a><br>
<?php endforeach;?>
<?php endforeach;?>

<hr size="1">

<a name="pf24"></a> <font color="#FF9900"></font>FAIRY TAIL Webラジオ『魔導士ギルド放送局 
やりすぎソーサラー！』<br>
<img src="img/pf23/i_pf23.jpg" width="168" height="81"><br>
<?php $this->percial('i_program.php', array('name'=>"やりすぎソーサラー", 'head'=>'pf24','blog'=>$blog, 'cnt'=>2) ); ?>

<hr size="1">
<a name="pf11"></a> <font color="#FF9900"></font>『長谷優里奈のイソフラボン☆バ↑』<br>
<img src="img/pf11/ib.jpg" width="168" height="81"><br>
<?php $this->percial('i_program.php', array('name'=>"イソフラボンバー", 'head'=>'pf11','blog'=>$blog, 'cnt'=>2) ); ?>

<hr size="1">

<a name="pf05"></a> <font color="#FF9900"></font>『しろがねしょぉむと廣田詩夢のPower Voice Jam!』<br>
<img src="images/5.gif" width="80" height="50"><br>
<?php $this->percial('i_program.php', array('name'=>"パワーボイスジャム", 'head'=>'pf05','blog'=>$blog, 'cnt'=>2) ); ?>

<hr size="1">
<a name="pf_seiyuu"></a> <font color="#FF9900"></font>
<font color="#FF9900"></font>とりラジ 「けーすけ・ちよの声優で地球は救われる！」<br>
<img src="img/main/seiyuu_logo.jpg"><br>
<?php $this->percial('i_program.php', array('name'=>"トリラジ", 'head'=>'pf21','blog'=>$blog, 'cnt'=>2) ); ?>

<hr size="1">
<a name="pf26"></a> <font color="#FF9900"></font>『めいち＆なっちの　もうDokuDoku』<br>
<img src="img/pf26/i_logo.jpg" width="150"><br>
<?php $this->percial('i_program.php', array('name'=>"ドクドク", 'head'=>'pf26','blog'=>$blog, 'cnt'=>1) ); ?>

<hr size="1">
<a name="mjs"></a> <font color="#FF9900"></font>『ぱわじゃむRainbowのMini Jam Show!!』<br>
<img src="img/mjs/top.jpg" width="150"><br>
<?php $this->percial('i_program.php', array('name'=>"レインボウ", 'head'=>'mjs','blog'=>$blog, 'cnt'=>1) ); ?>


<hr size="1">

<div align="center"><br>
  （C)2008 <a href="mailto:support@pokela.jp">ぽけら</a>. </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
 
</body>
</html>
<!--
<OBJECT declare id="fomacm.declaration141455678" data="./files/3gp/FT_120406_29.3gp" type="video/3gpp">
<PARAM name="period" value="2012/05/06/14/59" valuetype="data">
</OBJECT>
┗<A href="#fomacm.declaration141455678"><font size="2">4/6 聴く</font></A><br>

<OBJECT declare id="fomacm.declaration1414556" data="./files/3gp/FT_120323_28.3gp" type="video/3gpp">
<PARAM name="period" value="2012/04/23/14/59" valuetype="data">
</OBJECT>
┗<A href="#fomacm.declaration1414556"><font size="2">3/23 聴く</font></A><br>
//-->



<?php
if(false):
?>
ini_set('include_path', 'lib');
require_once 'Pokela/PokelaStreamingInfo.class.php';
				/*****************
				 * 配信情報
				 *****************/
				$StreamingInfo = new PokelaStreamingInfo('Data');
				$conf = array(
					'pf24'=>array('cnt'=>2,'title'=>'FAIRY TAIL Webラジオ『魔導士ギルド放送局 やりすぎソーサラー！』'),
					'pf11'=>array('cnt'=>1,'title'=>'長谷優里奈のイソフラボン☆バ↑'),
					'pf05'=>array('cnt'=>1,'title'=>'しろがねしょぉむと廣田詩夢のPower Voice Jam!'),
					'pf_seiyuu'=>array('cnt'=>4,'title'=>'とりラジ 「けーすけ・ちよの声優で地球は救われる！」'),
					'pf26'=>array('cnt'=>1,'title'=>'めいち＆なっちの　もうDokuDoku'),
					'mjs'=> array('cnt'=>1,'title'=>'ぱわじゃむRainbowのMini Jam Show!!')
				);

				foreach($conf as $pid=>$p)
				{
					$records = $StreamingInfo->get($pid,$p['cnt'],'i');
					$list_added = false;
					foreach($records as $key => $value)
					{
						$date = $value['date'];
						if(strpos($value['file'],'od') === false)
						{
							$Data[$pid][$date][] = $value;
							if($list_added === false)
							{
								$date_time = strtotime($date);
								$List[date('Y/m/d',$date_time)][$pid] = $p['title'];
								$list_added = true;
							}
						}
					}
				}
				krsort($List);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">
<meta name="vnd.up.bookmark" content="http://pokela.jp/" />
<meta http-equiv="Cache-Control" content="no-cache" />
<title>ぽけら</title>
</head>
<body bgcolor="#99CC33" text="#FFFFFF" link="#0000FF">
<div align="center"> 
  <img src="img/top.gif" alt="ぽけら" width="240" height="108"><br>
<font size="1">☆★☆★☆★☆★☆★☆★<br>
<a href="./kishu.html">対応機種</a> <a href="mailto:?body=%82%db%82%af%82%e7%0d%0ahttp%3a%2f%2fpokela%2ejp">友達に教える</a><br>
<a href="mailto:support@pokela.jp?subject=%82%db%82%af%82%e7">お問い合わせ・ご意見ご感想</a>
<br>
</font></div>
<hr size="1">

<a href="i2.html">試聴トラブルのお知らせ</a><br>
【docomo以外の方は<a href="index.php">こちら</a>】 

<!-- 最新順 日付ごとにグループ化 //-->
<?php foreach($List as $date => $values):?>

<hr size="1">

<font color="#FF0000" size="2"></font><font size="2"> <?php echo date('n/j',strtotime($date))?> 更新<font color="#FF6600"></font></font><br>
<?php foreach($values as $id => $title):?>
<a href="#<?php echo $id?>"><font color="blue"><?php echo $title?></font></a><br>
<?php endforeach;?>
<?php endforeach;?>

<!--
<hr size="1">

<font color="#FF0000" size="2"></font><font size="2"> 4/17 更新<font color="#FF6600"></font></font><br>
<a href="#pf05"><font color="blue">『しろがねしょぉむと廣田詩夢のPower Voice Jam!』</font></a><br>
<a href="#pf11"><font color="blue">『長谷優里奈のイソフラボン☆バ↑』</font></a><br>
<a href="#mjs"><font color="blue">ぱわじゃむRainbowのMini Jam Show!!</font></a><br>

<hr size="1">

<font color="#FF0000" size="2"></font><font size="2"> 4/6 更新<font color="#FF6600"></font></font><br>
<a href="#pf24"><font color="blue">FAIRY TAIL Webラジオ『魔導士ギルド放送局 やりすぎソーサラー！』</font></a><br>
<a href="#pf_seiyuu"><font color="blue">とりラジ 「けーすけ・ちよの声優で地球は救われる！」</font></a><br>

<hr size="1">

<font color="#FF0000" size="2"></font><font size="2"> 3/22 更新<font color="#FF6600"></font></font><br>
<a href="#pf26"><font color="blue">めいち＆なっちの　もうDokuDoku</font></a><br>
//-->

<hr size="1">

<a name="pf24"></a> <font color="#FF9900"></font>FAIRY TAIL Webラジオ『魔導士ギルド放送局 
やりすぎソーサラー！』<br>
<img src="img/pf23/i_pf23.jpg" width="168" height="81"><br>
<?php foreach ($Data['pf24'] as $date => $p) :?>
<?php
$datetime = strtotime($date);
$next_datetime = strtotime("+2 month",$datetime);
$next_date = date("Y/m/d",$next_datetime);
?>

<?php foreach($p as $idx => $val): ?>
<OBJECT declare id="fomacm.declaration.11.<?php echo date("Ymd",$datetime).".".$idx?>" data="./files/<?php echo $val['file']?>" type="video/3gpp">
<PARAM name="period" value="<?php echo $next_date?>/14/59" valuetype="data">
</OBJECT>
┗<A href="#fomacm.declaration.11.<?php echo date("Ymd",$datetime).".".$idx?>"><font size="2"><?php echo $date?> <?php echo $idx+1?> 聴く</font></A><br>

<?php endforeach;?>
<?php endforeach;?>
<!--
<OBJECT declare id="fomacm.declaration141455678" data="./files/3gp/FT_120406_29.3gp" type="video/3gpp">
<PARAM name="period" value="2012/05/06/14/59" valuetype="data">
</OBJECT>
┗<A href="#fomacm.declaration141455678"><font size="2">4/6 聴く</font></A><br>

<OBJECT declare id="fomacm.declaration1414556" data="./files/3gp/FT_120323_28.3gp" type="video/3gpp">
<PARAM name="period" value="2012/04/23/14/59" valuetype="data">
</OBJECT>
┗<A href="#fomacm.declaration1414556"><font size="2">3/23 聴く</font></A><br>
//-->

┗<a href="i_pf24.html">番組情報</a><br>

<hr size="1">

<a name="pf11"></a> <font color="#FF9900"></font>『長谷優里奈のイソフラボン☆バ↑』<br>
<img src="img/pf11/ib.jpg" width="168" height="81"><br>

<?php foreach ($Data['pf11'] as $date => $p) :?>
<?php
$datetime = strtotime($date);
$next_datetime = strtotime("+2 month",$datetime);
$next_date = date("Y/m/d",$next_datetime);
?>

<?php foreach($p as $idx => $val): ?>
<OBJECT declare id="fomacm.declaration.11.<?php echo date("Ymd",$datetime).".".$idx?>" data="./files/<?php echo $val['file']?>" type="video/3gpp">
<PARAM name="period" value="<?php echo $next_date?>/14/59" valuetype="data">
</OBJECT>
┗<A href="#fomacm.declaration.11.<?php echo date("Ymd",$datetime).".".$idx?>"><font size="2"><?php echo $date?> <?php echo $idx+1?> 聴く</font></A><br>

<?php endforeach;?>
<?php endforeach;?>
<!--
<OBJECT declare id="fomacm.declaration11" data="./files/3gp/iso_120410_105.3gp" type="video/3gpp">
<PARAM name="period" value="2012/05/10/14/59" valuetype="data">
</OBJECT>
┗<A href="#fomacm.declaration11"><font size="2">4/10 聴く</font></A><br>
//-->
<br>
<a href="i_pf11.html">番組情報</a><br>

<hr size="1">

<a name="pf05"></a> <font color="#FF9900"></font>『しろがねしょぉむと廣田詩夢のPower Voice Jam!』<br>
<img src="images/5.gif" width="80" height="50"><br>
<?php foreach ($Data['pf05'] as $date => $p) :?>
<?php
$datetime = strtotime($date);
$next_datetime = strtotime("+2 month",$datetime);
$next_date = date("Y/m/d",$next_datetime);
?>

<?php foreach($p as $idx => $val): ?>
<OBJECT declare id="fomacm.declaration.05.<?php echo date("Ymd",$datetime).".".$idx?>" data="./files/<?php echo $val['file']?>" type="video/3gpp">
<PARAM name="period" value="<?php echo $next_date?>/14/59" valuetype="data">
</OBJECT>
┗<A href="#fomacm.declaration.05.<?php echo date("Ymd",$datetime).".".$idx?>"><font size="2"><?php echo $date?> <?php echo $idx+1?> 聴く</font></A><br>

<?php endforeach;?>
<?php endforeach;?>
<!--
<OBJECT declare id="fomacm.declaration3" data="./files/3gp/PVJ_120410_131_net.3gp" type="video/3gpp">
<PARAM name="period" value="2012/05/10/14/59" valuetype="data">
</OBJECT>
┗<A href="#fomacm.declaration3"><font size="2">4/10 聴く</font></A><br>
//-->
<br>
<a href="i_pf05.html">番組情報</a><br>

<hr size="1">

<a name="pf_seiyuu"></a> <font color="#FF9900"></font>
<font color="#FF9900"></font>とりラジ 「けーすけ・ちよの声優で地球は救われる！」<br>
<img src="img/main/seiyuu_logo.jpg"><br>
<br>
「けーすけ・ちよの声優で地球は救われる！」<br>

<?php foreach ($Data['pf_seiyuu'] as $date => $p) :?>
<?php
$datetime = strtotime($date);
$next_datetime = strtotime("+2 month",$datetime);
$next_date = date("Y/m/d",$next_datetime);
?>

<?php foreach($p as $idx => $val): ?>
<OBJECT declare id="fomacm.declaration.seiyuu.<?php echo date("Ymd",$datetime).".".$idx?>" data="./files/<?php echo $val['file']?>" type="video/3gpp">
<PARAM name="period" value="<?php echo $next_date?>/14/59" valuetype="data">
</OBJECT>
┗<A href="#fomacm.declaration.seiyuu.<?php echo date("Ymd",$datetime).".".$idx?>"><font size="2"><?php echo $date?> <?php echo $idx+1?> 聴く</font></A><br>

<?php endforeach;?>
<?php endforeach;?>

<!--
<OBJECT declare id="fomacm.declaration5" data="./files/3gp/seiyuu_120406_35.3gp" type="video/3gpp">
<PARAM name="period" value="2012/05/06/14/59" valuetype="data">
</OBJECT>
┗<A href="#fomacm.declaration5"><font size="2">4/6 1 聴く</font></A><br>

<OBJECT declare id="fomacm.declaration52" data="./files/3gp/seiyuu_120323_34.3gp" type="video/3gpp">
<PARAM name="period" value="2012/04/23/14/59" valuetype="data">
</OBJECT>
┗<A href="#fomacm.declaration52"><font size="2">3/23 1 聴く</font></A><br>
//-->

<OBJECT declare id="fomacm.declaration51" data="./files/3gp/od18.3gp" type="video/3gpp">
<PARAM name="period" value="2012/06/06/14/59" valuetype="data">
</OBJECT>
┗<A href="#fomacm.declaration51"><font size="2">4/6 オゥサキ・ドゥ・マドゥーイ 聴く</font></A><br>

<hr size="1">

<a name="pf26"></a> <font color="#FF9900"></font>『めいち＆なっちの　もうDokuDoku』<br>
<img src="img/pf26/i_logo.jpg" width="150"><br>
<?php foreach ($Data['pf26'] as $date => $p) :?>
<?php
$datetime = strtotime($date);
$next_datetime = strtotime("+2 month",$datetime);
$next_date = date("Y/m/d",$next_datetime);
?>

<?php foreach($p as $idx => $val): ?>
<OBJECT declare id="fomacm.declaration.mjs.<?php echo date("Ymd",$datetime).".".$idx?>" data="./files/<?php echo $val['file']?>" type="video/3gpp">
<PARAM name="period" value="<?php echo $next_date?>/14/59" valuetype="data">
</OBJECT>
┗<A href="#fomacm.declaration.mjs.<?php echo date("Ymd",$datetime).".".$idx?>"><font size="2"><?php echo $date?> <?php echo $idx+1?> 聴く</font></A><br>

<?php endforeach;?>
<?php endforeach;?>
<!--
<OBJECT declare id="fomacm.declaration26" data="./files/3gp/dokudoku_120322_20.3gp" type="video/3gpp">
<PARAM name="period" value="2012/04/22/14/59" valuetype="data">
</OBJECT>
┗<A href="#fomacm.declaration26"><font size="2">3/22 聴く</font></A><br>
//-->
<br>
<a href="i_pf26.html">番組情報</a><br>

<hr size="1">

<a name="mjs"></a> <font color="#FF9900"></font>『ぱわじゃむRainbowのMini Jam Show!!』<br>
<img src="guide/img/mjs/top.jpg" width="150"><br>
<?php foreach ($Data['mjs'] as $date => $p) :?>
<?php
$datetime = strtotime($date);
$next_datetime = strtotime("+2 month",$datetime);
$next_date = date("Y/m/d",$next_datetime);
?>

<?php foreach($p as $idx => $val): ?>
<OBJECT declare id="fomacm.declaration.mjs.<?php echo date("Ymd",$datetime).".".$idx?>" data="./files/<?php echo $val['file']?>" type="video/3gpp">
<PARAM name="period" value="<?php echo $next_date?>/14/59" valuetype="data">
</OBJECT>
┗<A href="#fomacm.declaration.mjs.<?php echo date("Ymd",$datetime).".".$idx?>"><font size="2"><?php echo $date?> <?php echo $idx+1?> 聴く</font></A><br>

<?php endforeach;?>
<?php endforeach;?>
<!--
<OBJECT declare id="fomacm.declarationmjs" data="./files/3gp/MJS_120410_5.3gp" type="video/3gpp">
<PARAM name="period" value="2012/05/10/14/59" valuetype="data">
</OBJECT>
┗<A href="#fomacm.declaration26"><font size="2">4/10 聴く</font></A><br>
//-->
<br>
<a href="guide/i_mjs.html">番組情報</a><br>

<hr size="1">

<div align="center"><br>
  （C)2008 <a href="mailto:support@pokela.jp">ぽけら</a>. </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
 
</body>
</html>
<?php
endif;
?>
