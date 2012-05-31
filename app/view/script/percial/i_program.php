<?php
$up = $blog->name('更新案内')->category($name)->lastn($cnt); 
$idx = 0;
foreach( $up as $e  ):
sscanf($file = $e->getField03(), '%[^_]_%[^_]_%[^_]', $key, $date, $count);
$date =date("Ymd",$time = strtotime('20'.$date));
$next_date = date("Y/m/d", strtotime("+2 month", $time) );
?>
<OBJECT declare id="fomacm.declaration.11.<?php echo $date.'.'.$idx;?>" data="./files/<?php echo $file;?>.3gp" type="video/3gpp">
<PARAM name="period" value="<?php echo $next_date;?>/14/59" valuetype="data">
</OBJECT>
┗
<A href="#fomacm.declaration.11.<?php echo $date.'.'.$idx;?>"><font size="2"><?php echo $date?> <?php echo $idx+1?> 聴く</font></A><br>
<?php
$idx++;
endforeach;
?>


<?php
if( $head == "pf21" ):
$up = $blog->name('更新案内')->category('オオサキ')->lastn(1); 
?>
<OBJECT declare id="fomacm.declaration.51" data="./files/<?php echo $up[0]->getField03();?>.3gp" type="video/3gpp">
<PARAM name="period" value="<?php echo $next_date;?>/14/59" valuetype="data">
</OBJECT>
┗
<A href="#fomacm.declaration.51"><font size="2">
<?php echo $up[0]->getField02();?> オゥサキ・ドゥ・マドゥーイ 聴く
</font></A><br>
<?php
endif;
?>


┗
<a href="program/mobile/id/<?php echo $head;?>">番組情報</a><br>
