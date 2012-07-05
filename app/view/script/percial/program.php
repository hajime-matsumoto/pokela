<?php
$es = $blog->name('番組案内')->category($name)->lastn(1); 
$info = $es[0]; 
$up = $blog->name('更新案内')->category($name)->lastn(2); 

$comment = $up == false ? "NEW" : urlencode($up[0]->getContent());

$use_contents_in = $head != "tori" && $head !="pvj" && $head != 'mjs' ? true: false;

$headline = <<<HTML
<div id="{$head}-comment" ><img src='./img/headLineImage/id/{$key}/fontSize/10/text/{$comment}' /></div>
HTML;

$logo = <<<HTML
<div id="{$head}-logo"><img src="img/main/{$info->getField01()}" alt="{$info->getField02()}" title="{$info->getField02()}" /></div>
HTML;

$guide = <<<HTML
<div class="guide" id="{$head}-guide"><a href="program/detail/id/{$key}" target="_blank"><img src="img/main/button_guide.gif" alt="番組情報" /></a></div>
HTML;


$buttons = <<<HTML
<div id="{$head}-buttons">
{$guide}
<div id="{$head}-listen">
<ul>
HTML;
$i=0; 
foreach($up as $e){
    $i++;
    $buttons .= "<li><a href=\"program/wax/id/{$key}/num/{$i}\"><img src=\"img/main/button_listen.gif\" alt=\"聴く！\" /></a><br />#{$e->getField01()}&nbsp;({$e->getField02()})</li>";
}
$buttons .= <<<HTML
</ul>
</div><!-- end listen //-->
</div><!-- end buttons //-->
HTML;

if( $head == "pvj" )
{
$content = <<<HTML
<div id="{$head}-desc">{$info->getContent()}{$buttons}</div>
HTML;
}
else
{
$content = <<<HTML
<div id="{$head}-desc">{$info->getContent()}</div>
HTML;
}
?>

            <div id="<?php echo $head;?>">
                <div id="<?php echo $head; ?>-in">
                  <div id="<?php echo $head; ?>-contents">
<?php if($use_contents_in): ?>
                    <div id="<?php echo $head; ?>-contents-in">
<?php endif; ?>

<?php
switch( $head)
{
case 'ft':
case 'makai':
case 'vs':
    echo $logo;
    echo $content;
    echo $headline;
    echo $buttons;
    break;
case 'iso':
    echo $logo;
    echo $headline;
    echo $content;
    echo $buttons;
    break;
case 'pvj':
    echo $logo;
    echo $headline;
    echo $content;
    break;
case 'tori':
    echo $content;
    echo $headline;
    echo $guide;
    echo '<div id="tori-hr"><img src="img/main/tori_line.gif" /></div>';
    echo '<div id="tori-seiyuu-title"><img src="img/main/seiyuu_title.gif" alt="" /></div>';
    echo '<div id="tori-seiyuu-logo"><img src="img/main/seiyuu_logo.jpg" alt="" /></div>';
    echo <<<HTML
                      <div id="tori-buttons">
                        <div id="tori-listen">
                          <ul>
                            <li><a href="program/wax/id/{$key}/num/1"><img src="img/main/button_listen.gif" alt="聴く！" /></a><br />#{$up[0]->getField01()}&nbsp;({$up[0]->getField02()})</li>
                            <li id="tori-seiyuu-od"><a href="program/wax/id/pf21/num/sp"><img src="img/main/button_listen.gif" alt="聴く！" /></a><br /><nobr>オゥサキ・ドゥ・マドゥーイ</nobr></li>
                            <li><a href="program/wax/id/{$key}/num/2"><img src="img/main/button_listen.gif" alt="聴く！" /></a><br />#{$up[1]->getField01()}&nbsp;({$up[1]->getField02()})</li>
                          </ul>
                        </div><!-- end listen //-->
                      </div><!-- end buttons //-->
HTML;
    break;
case 'mjs':
    echo '<div id="{$head}-title"><img src="img/main/mjs_title.gif" alt="ぱわじゃむRainbowのMini Jam Show！" /></div>';
    echo $logo;
    echo $content;
    echo $headline;
    echo <<<HTML
{$guide}
                      <div id="{$head}-buttons">
                        <div id="{$head}-listen">
                          <ul>
                            <li><a href="program/wax/id/{$key}/num/1"><img src="img/main/button_listen.gif" alt="聴く！" /></a><br />#{$up[0]->getField01()}&nbsp;({$up[0]->getField02()})</li>
                            <!--<li><a href=""><img src="img/main/button_listen.gif" alt="聴く！" /></a><br />#YYY (YY/YY)</li>//-->
                          </ul>
                        </div><!-- end listen //-->
                      </div><!-- end buttons //-->
HTML;
    break;
case 'yaroo':
    echo $logo;
    echo $headline;
    echo $content;
    echo <<<HTML
{$guide}
                      <div id="{$head}-buttons">
                        <div id="{$head}-listen">
                          <ul>
                            <li><a href="program/wax/id/{$key}/num/1"><img src="img/main/button_listen.gif" alt="聴く！" /></a><br />#{$up[0]->getField01()}&nbsp;({$up[0]->getField02()})</li>
                            <!--<li><a href=""><img src="img/main/button_listen.gif" alt="聴く！" /></a><br />#YYY (YY/YY)</li>//-->
                          </ul>
                        </div><!-- end listen //-->
                      </div><!-- end buttons //-->
HTML;
    break;
case 'dokudoku':
    echo $logo;
    echo $content;
    echo $headline;
    echo <<<HTML
{$guide}
                      <div id="{$head}-buttons">
                        <div id="{$head}-listen">
                          <ul>
                            <li><a href="program/wax/id/{$key}/num/1"><img src="img/main/button_listen.gif" alt="聴く！" /></a><br />#{$up[0]->getField01()}&nbsp;({$up[0]->getField02()})</li>
                            <!--<li><a href=""><img src="img/main/button_listen.gif" alt="聴く！" /></a><br />#YYY (YY/YY)</li>//-->
                          </ul>
                        </div><!-- end listen //-->
                      </div><!-- end buttons //-->
HTML;
    break;
}
?>

<?php
if(false):
?>
    <div id="<?php echo $head; ?>-logo"><img src="img/main/<?php echo $info->getField01();?>" alt="<?php echo $info->getField02();?>" title="<?php echo $info->getField02();?>" /></div>

<?php if($head == "iso"): ?>
                      <div id="<?php echo $head; ?>-comment"><img src='./img/headLineImage/id/<?php echo $key; ?>/fontSize/10/text/<?php echo $comment; ?>' /></div>
<?php endif; ?>

                      <div id="<?php echo $head; ?>-desc"><?php echo $info->getContent(); ?></div>


<?php if($head == "ft"): ?>
                      <div id="<?php echo $head; ?>-comment"><img src='./img/headLineImage/id/<?php echo $key; ?>/fontSize/10/text/<?php echo $comment; ?>' /></div>
<?php endif; ?>
                      <div id="<?php echo $head; ?>-buttons">
                        <div id="<?php echo $head; ?>-guide"><a href="<?php echo $key; ?>.html" target="_blank"><img src="img/main/button_guide.gif" alt="番組情報" /></a></div>
                        <div id="<?php echo $head; ?>-listen">
                          <ul>
<?php $i=0; foreach($up as $e): $i++;?>
<li><a href="waxfiles/<?php echo $key; ?>_<?php echo $i;?>.wax"><img src="img/main/button_listen.gif" alt="聴く！" /></a><br />#<?php echo $e->getField01();?>&nbsp;(<?php echo $e->getField02(); ?>)</li>
<?php endforeach; ?>
                          </ul>
                        </div><!-- end listen //-->
                      </div><!-- end buttons //-->
<?php
endif;
?>

<?php if($use_contents_in): ?>
                    </div><!-- end contents-in //-->
<?php endif; ?>
                  </div><!-- end contents //-->
                </div><!-- end block-in //-->
              </div><!-- end block //-->
