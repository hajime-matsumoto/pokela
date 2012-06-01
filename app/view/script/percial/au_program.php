<?php
$up = $blog->name('更新案内')->category($name)->lastn($cnt); 
$idx = 0;
foreach( $up as $e  ):
sscanf($file = $e->getField03(), '%[^_]_%[^_]_%[^_]', $key, $date, $count);
$date =date("Ymd",$time = strtotime('20'.$date));
$next_date = date("Y/m/d", strtotime("+2 month", $time) );

$dir = '/home/pokelajp/public_html/files/au';

$file = preg_replace('/_net$/','',$file);
// 前半後半対応
$files = array_reverse(glob($dir.'/'.$file."*"));


foreach(  $files as $file ):
$size = filesize($file);
$file = basename($file);
?>


<object data="http://www.pokela.jp/files/au/<?php echo $file;?>" type="audio/3gpp2" copyright="yes" standby="<?php echo $date?> <?php echo $idx+1?> 聴く">
  <param name="disposition" value="devlvzz" valuetype="data" />
  <param name="size" value="<?php echo $size ?>" valuetype="data" />
  ┗ 
  <param name="title" value="<?php echo $name?>" valuetype="data" />
  </object>
<br>

<?php
endforeach;
$idx++;
endforeach;
?>


<?php
if( $head == "pf21" ):
$up = $blog->name('更新案内')->category('オオサキ')->lastn(1); 
$file = $e->getField03();

// 前半後半対応
$files = array_reverse(glob($dir.'/'.$file."*"));

foreach(  $files as $file ):
$size = filesize($file);
$file = basename($file);
$name = "オゥサキ・ドゥ・マドゥーイ 聴く";
?>
<object data="http://www.pokela.jp/files/au/<?php echo $file;?>" type="audio/3gpp2" copyright="yes" standby="<?php echo $date?> <?php echo $idx+1?> 聴く">
  <param name="disposition" value="devlvzz" valuetype="data" />
  <param name="size" value="<?php echo $size ?>" valuetype="data" />
  ┗ 
  <param name="title" value="<?php echo $name?>" valuetype="data" />
  </object>
<br>
<?php
endforeach;
endif;
?>


┗
<a href="program/mobile/id/<?php echo $head;?>">番組情報</a><br>
