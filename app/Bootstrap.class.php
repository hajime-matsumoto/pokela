<?php
class Pokela_Bootstrap extends Seaf_App_Bootstrap
{

    protected function _initView( )
    {
        $view = parent::_initView( );
        $view->helper()->addPath( "/var/proj/pokela/app/view/helper", 'Pokela_View_Helper');
        $view->title()
            ->setSep(' | ')
            ->append("ぽけら")
            ->append("インターネットラジオ");
        $view->headMeta()->addKeyword("ぽけら","しろがねしょうむ");
        $view->headMeta()->description("インターネットラジオ　ぽけら");
        $view->headMeta()->charset("utf8");
        return $view;
    }

}
?>
