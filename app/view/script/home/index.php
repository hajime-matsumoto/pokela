<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<?php echo $this->title( ); ?>
<?php echo $this->headMeta( ); ?>
<?php echo $this->base(); ?>
<?php echo $this->headForIE( ); ?>
<?php echo $this->headLink( ); ?>
<?php echo $this->headStyle( )->addFile('/css/import.css'); ?>
<?php echo $this->headJs( ); ?>
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

            <div id="programs-left">
              <div id="ft">
                <div id="ft-in">
                  <div id="ft-contents">
                    <div id="ft-contents-in">
<?php 
$es = $blog->name('番組案内')->category('やりすぎソーサラー')->lastn(1); 
$info = $es[0]; 
$up = $blog->name('更新案内')->category('やりすぎソーサラー')->lastn(2); 
?>
    <div id="ft-logo"><img src="img/main/<?php echo $info->getField01();?>" alt="<?php echo $info->getField02();?>" title="<?php echo $info->getField02();?>" /></div>
                      <div id="ft-desc"><?php echo $info->getContent(); ?></div>
                      <div id="ft-comment"><img src='./img/headLineImage/id/pf24/fontSize/10' /></div>
                      <div id="ft-buttons">
                        <div id="ft-guide"><a href="pf24.html" target="_blank"><img src="img/main/button_guide.gif" alt="番組情報" /></a></div>
                        <div id="ft-listen">
                          <ul>
                            <li><a href="waxfiles/pf24.wax"><img src="img/main/button_listen.gif" alt="聴く！" /></a><br />#32&nbsp;(5/18)</li>
                            <li><a href="waxfiles/pf24_1.wax"><img src="img/main/button_listen.gif" alt="聴く！" /></a><br />#31&nbsp;(5/4)</li>
                          </ul>
                        </div><!-- end listen //-->
                      </div><!-- end buttons //-->
                    </div><!-- end contents-in //-->
                  </div><!-- end contents //-->
                </div><!-- end block-in //-->
              </div><!-- end block //-->
              <div id="pvj">
                <div id="pvj-in">
                  <div id="pvj-contents">
                    <div id="pvj-logo"><img src="img/main/pvj_logo.jpg" alt="しろがねしょぉむと廣田詩夢のPower Voice Jam！" /></div>
                    <div id="pvj-comment"><img src='./img/headLineImage/id/pf05/fontSize/10/' /></div>
                    <div id="pvj-desc">
                      <p>声優プロダクション「うぃなぁエンタテイメント」の「しろがねしょぉむ」と、ぷろだくしょんバオバブの声優「廣田詩夢」の凸凹コンビが、
                      声優になりたい人・声優好きの人に送る応援バラエティー番組！</p>
                      <div id="pvj-buttons">
                        <div class="guide" id="pvj-guide"><a href="./pf05.html" target="_blank"><img src="img/main/button_guide.gif" alt="番組情報" /></a></div>
                        <div id="pvj-listen">
                          <ul>
                            <li><a href="waxfiles/pvj_11.wax"><img src="img/main/button_listen.gif" alt="聴く！" /></a><br />#138&nbsp;(5/29)</li>
                            <li><a href="waxfiles/pvj_11_1.wax"><img src="img/main/button_listen.gif" alt="聴く！" /></a><br />#137&nbsp;(5/22)</li>
                          </ul>
                        </div><!-- end listen //-->
                      </div><!-- end buttons //-->
                    </div><!-- end desc //-->
                  </div><!-- end contents //-->
                </div><!-- end block-in //-->
              </div><!-- end block //-->

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
                  <div id="no">
                    <div id="no-in">
                      <div id="no-contents">
                        <div id="no-logo"><img src="img/main/comming_soon.gif" alt="Comming Soon!!" /></div>
                        <p>『井上和彦のＲＡＤＩＯ Ｂ』<br />の放送は終了致しました。</p>
                        <p>新番組をお楽しみに！</p>
                      </div><!-- end contents //-->
                    </div><!-- end block-in //-->
                  </div><!-- end block //-->
                </div>
                <div id="programs-right-left">
                  <div id="iso">
                    <div id="iso-in">
                      <div id="iso-contents">
                        <div id="iso-logo"><img src="img/main/iso_logo.jpg" alt="長谷優里奈のイソフラボン☆バ↑" /></div>
                        <div id="iso-comment"><img src='./img/headLineImage/id/pf11/fontSize/10' /></div>
                        <p>長谷優里奈の新ラジオ番組がスタート！！</p>
                        <p>女の子はいつでもどこでもキレイでいなくちゃっ♪</p>
                        <p>美容といったら、女の子にとって良い成分『イソフラボン』！？</p>
                        <p class="mt12">パーソナリティ一同、自分たちの女度を上げるために</p>
                        <p>様々なことに挑戦していくどたばた成長バラエティ番組↑</p>
                        <p>遂に放送開始！！</p>
                        <div id="iso-buttons">
                          <div id="iso-guide"><a href="./pf11.html" target="_blank"><img src="img/main/button_guide.gif" alt="番組情報" /></a></div>
                          <div id="iso-listen">
                            <ul>
                              <li><a href="waxfiles/pf11.wax"><img src="img/main/button_listen.gif" alt="聴く！" /></a><br />#112&nbsp;(5/29)</li>
                              <li><a href="waxfiles/pf11_1.wax"><img src="img/main/button_listen.gif" alt="聴く！" /></a><br />#111&nbsp;(5/22)</li>
                            </ul>
                          </div><!-- end listen //-->
                        </div><!-- end buttons //-->
                      </div><!-- end contents //-->
                    </div><!-- end block-in //-->
                  </div><!-- end block //-->
                </div>
              </div><!-- end right-2column //-->

              <div id="programs-right-both">
                <div id="tori">
                  <div id="tori-in">
                    <div id="tori-contents">
                      <div id="tori-desc">
                        <p>声優事務所「トリトリオフィス」のラジオ番組がついに登場！！</p>
                        <p>トリトリオフィスの様々な声優が隔週で、パーソナリティをつとめるラジオ。</p>
                        <p>第２・４週更新が「けーすけ・ちよの声優で地球は救われる！」</p>
                      </div>
                      <div id="tori-comment"><img src='./img/headLineImage/id/pf_seiyuu/fontSize/11' /></div>
                      <div id="tori-guide"><a href="./pf21.html" target="_blank"><img src="img/main/button_guide.gif" alt="番組情報" /></a></div>
                      <div id="tori-hr"><img src="img/main/tori_line.gif" /></div>
                      <div id="tori-seiyuu-title"><img src="img/main/seiyuu_title.gif" alt="" /></div>
                      <div id="tori-seiyuu-logo"><img src="img/main/seiyuu_logo.jpg" alt="" /></div>
                      <div id="tori-buttons">
                        <div id="tori-listen">
                          <ul>
                            <li><a href="waxfiles/pf21_0.wax"><img src="img/main/button_listen.gif" alt="聴く！" /></a><br />#38&nbsp;(5/18)</li>
                            <li id="tori-seiyuu-od"><a href="http://pokela.jp/waxfiles/pf21_sp.wax"><img src="img/main/button_listen.gif" alt="聴く！" /></a><br /><nobr>オゥサキ・ドゥ・マドゥーイ</nobr></li>
                            <li><a href="waxfiles/pf21_2.wax"><img src="img/main/button_listen.gif" alt="聴く！" /></a><br />#37&nbsp;(5/4)</li>
                          </ul>
                        </div><!-- end listen //-->
                      </div><!-- end buttons //-->
                    </div><!-- end contents //-->
                  </div><!-- end block-in //-->
                </div><!-- end block //-->
                <div id="mjs">
                  <div id="mjs-in">
                    <div id="mjs-contents">
                      <div id="mjs-title"><img src="img/main/mjs_title.gif" alt="ぱわじゃむRainbowのMini Jam Show！" /></div>
                      <div id="mjs-logo"><img src="img/main/mjs_logo.jpg" alt="ぱわじゃむRainbowのMini Jam Show！" /></div>
                      <div id="mjs-desc">
                        <p>ラジオ大阪で放送中の番組「しろがねしょぉむと廣田詩夢のPower Voice Jam！」
                        から生まれたアシスタントユニット「ぱわじゃむRainbow」</p>
                        <p>新人声優である彼女たちだけの番組が遂に開始！！</p>
                        <p>毎回色んな事にチャレンジしながら、切磋琢磨に成長していく姿を描いていきます！！</p>
                      </div>
                      <div id="mjs-comment"><img src='./img/headLineImage/id/mjs/fontSize/11' /></div>
                      <div id="mjs-guide"><a href="guide/mjs.html" target="_blank"><img src="img/main/button_guide.gif" alt="番組情報" /></a></div>
                      <div id="mjs-buttons">
                        <div id="mjs-listen">
                          <ul>
                            <li><a href="waxfiles/mjs_0.wax"><img src="img/main/button_listen.gif" alt="聴く！" /></a><br />#12&nbsp;(5/29)</li>
                            <!--<li><a href=""><img src="img/main/button_listen.gif" alt="聴く！" /></a><br />#YYY (YY/YY)</li>//-->
                          </ul>
                        </div><!-- end listen //-->
                      </div><!-- end buttons //-->
                    </div><!-- end contents //-->
                  </div><!-- end block-in //-->
                </div><!-- end block //-->
                <div id="dokudoku">
                  <div id="dokudoku-in">
                    <div id="dokudoku-contents">
                      <div id="dokudoku-logo"><img src="img/main/dokudoku_logo.jpg" alt="めいち＆なっちの　もうDokuDoku" /></div>
                      <div id="dokudoku-desc">
                        <p>カリスマメイドの伊藤芽衣（めいち）と新鋭声優の板垣夏美（なっち）のMC二人が、ナレーターのしろがねしょぉむ（教授）の元で、
                        「サブカルは日本の強み」をテーマに日本文化と創造力の魅力を広く発信していく番組です！！</p>
                      </div>
                      <div id="dokudoku-comment"><img src='./img/headLineImage/id/pf26' /></div>
                      <div id="dokudoku-guide"><a href="pf26.html" target="_blank"><img src="img/main/button_guide.gif" alt="番組情報" /></a></div>
                      <div id="dokudoku-buttons">
                        <div id="dokudoku-listen">
                          <ul>
                            <li><a href="waxfiles/pf26.wax"><img src="img/main/button_listen.gif" alt="聴く！" /></a><br />#23&nbsp;(5/17)</li>
                          </ul>
                        </div><!-- end listen //-->
                      </div><!-- end buttons //-->
                    </div><!-- end contents //-->
                  </div><!-- end block-in //-->
                </div><!-- end block //-->
              </div><!-- end right-both //-->

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
