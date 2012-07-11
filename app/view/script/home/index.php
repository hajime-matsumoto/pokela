<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<?php echo $this->title( ); ?>
<?php echo $this->headMeta( ); ?>
<?php echo $this->facebook( )->meta(); ?>

<?php echo $this->headForIE( ); ?>

<?php echo $this->base(); ?>
<?php echo $this->headLink( ); ?>
<?php echo $this->headStyle( )->addFile('/css/import.css'); ?>
<?php echo $this->headJs( ); ?>
<style>
div#programs {
height :2000px;
}
</style>
</head>
  <body>
    <div id="header">
      <div id="header-in">
        <div id="top-logos">
          <a href="main.html"><img id="top-logo" src="img/main/top_logo.gif" alt="ぽけら" /></a>
          <a href="http://college.winner.co.jp/"><img id="v_e_college" src="img/main/v_e_college.gif" alt="Winner Voice and Entertainment College" /></a>
          <img id="top-caption" src="img/main/top_caption.gif" alt="ケータイからもパソコンからもhttp://pokela.jp" />
        </div>
        <div id="header-menu">
          <ul>
            <li><a href="http://www.pokela.jp/index.php"><img src="img/main/menu_home.gif" /></a></li>
            <li><img src="img/main/menu_nolink.gif" /></li>
            <li><img src="img/main/menu_nolink.gif" /></li>
            <li><a href="http://www.pokela.jp/faq.html"><img src="img/main/menu_faq.gif" /></a></li>
            <li><a href="http://www.pokela.jp/mail/"><img src="img/main/menu_inquiry.gif" /></a></li>
          </ul>
        </div><!-- end header-menu //-->
      </div><!-- end header-in //-->
    </div><!-- end header //-->
    <div id="contents">
      <div id="contents-in">

        <div id="programs">
          <div id="programs-in">
            <div id="programs-midashi"><img src="img/main/midashi_radio.gif" alt="ラジオ" /></div>
<div style="background:white; margin:auto; padding:10px; display :block">
<h3>配信に伴う不具合・配信遅延についてのお詫び</h3>
<p>
日頃は「インターネットコミュニティーぽけら」を御愛聴頂きまして
誠にありがとうございます。
ここ最近、継続的なシステムエラーが続き「一部の番組で配信が遅れる」「メインページの表示に時間がかかる」「番組の視聴に関する不具合が生じている」などのご報告を頂いており、
この件に関しまして、大変ご迷惑をおかけしております事を心よりお詫び申し上げると共に
早急たる対応を行って参ります。
ただいまは、システムも復旧し通常の状態に戻っております。
また現在、携帯スマートホン対応の準備及びサイトの全面改装などの開発を行っており、
今後、皆様におきましては更により良い試聴出来る環境、新システムに移行準備を一
日も早くという中で現在随時行っております。
</p>
<p>
もしも、「試聴が出来ない」などの不具合が生じた場合には、「ぽけら」メール
フォームの方よりお気軽にお問い合わせ頂ければと思います。
今後も皆様に更に楽しい番組提供が出来るよう、サイトを随時バージョンアップさせ
ていきますので 何卒宜しくお願い致します。
</p>
<div style="text-align:right">
２０１２年７月１０日　　　インターネットコミュニティー「ぽけら」制作委員会
</div>
</div>

            <div id="programs-left">
<?php $this->percial('program.php', array('head'=>'ft', 'name'=>'やりすぎソーサラー', 'key'=>'pf24', 'blog'=>$blog )); ?>
<?php $this->percial('program.php', array('head'=>'vs', 'name'=>'バーサスWAVE', 'key'=>'vs', 'blog'=>$blog )); ?>
<?php $this->percial('program.php', array('head'=>'pvj', 'name'=>'パワーボイスジャム', 'key'=>'pf05', 'blog'=>$blog )); ?>

              <div id="naruuza">
                <div id="naruuza-in">
                  <div id="naruuza-contents">
                    <div id="naruuza-title"><img src="img/main/naruuza_title.gif" alt="ナルウザクスダ(仮) vol.1 発売中！！" /></div>
                    <div id="naruuza-logo"><a href="./pf08.html" target="_blank"><img src="img/main/naruuza_logo.gif" alt="ナルウザクスダ(仮) vol.1 発売中！！" /></a></div>
                  </div>
                </div>
              </div>

            </div><!-- end left //-->

            <div id="programs-right">

              <div id="programs-right-2column">
                <div id="programs-right-right">
<?php $this->percial('program.php', array('head'=>'makai', 'name'=>'魔界政府広報部', 'key'=>'makai', 'blog'=>$blog )); ?>
                </div>
                <div id="programs-right-left">
<?php $this->percial('program.php', array('head'=>'iso', 'name'=>'イソフラボンバー','key'=>'pf11', 'blog'=>$blog )); ?>
                </div>
              </div><!-- end right-2column //-->

              <div id="programs-right-both">
<?php $this->percial('program.php', array('head'=>'tori', 'name'=>'トリラジ','key'=>'pf21', 'blog'=>$blog )); ?>
<?php $this->percial('program.php', array('head'=>'yaroo', 'name'=>'YAROO','key'=>'yaroo', 'blog'=>$blog )); ?>
<?php $this->percial('program.php', array('head'=>'mjs', 'name'=>'レインボウ','key'=>'mjs', 'blog'=>$blog )); ?>
<?php $this->percial('program.php', array('head'=>'dokudoku', 'name'=>'ドクドク','key'=>'pf26', 'blog'=>$blog )); ?>

            </div><!-- end right //-->

          </div>
        </div><!-- end programs //-->

      </div><!-- end contents-in //-->
    </div><!-- end contents //-->
    <div id="footer">
      <div id="footer-in">
        <div id="footer-link">
        <a href="http://voncafe.jp/" target="_blank"><img src="img/main/voncafe.gif" alt="アニメ・声優情報SNS -VONCAFE-" /></a>
        </div>
        <div id="footer-menu">
        <ul>
        <li><a href="kiyaku.html"><img src="img/main/footer_kiyaku.gif" alt="利用規約" /></a></li>
        <li><a href="pp.html"><img src="img/main/footer_policy.gif" alt="プライバシーポリシー" /></a></li>
        </ul>
        </div><!-- end footer-link //-->
        <div id="footer-copy">
        <img src="img/main/copyright.gif" alt="Copyright (C)2008-2012 ぽけら. All Rights Reserved." />
        </div>
      </div><!-- end footer-in //-->
    </div><!-- end footer //-->
  </body>
</html>
