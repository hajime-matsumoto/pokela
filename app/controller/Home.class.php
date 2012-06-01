<?php
class Pokela_Controller_Home extends Seaf_Controller
{
    public function mobileAction( )
    {
        // モバイル用にエンコードをかける
        $this->getFront()->getResponse()->setOutputEncode('cp932');

        $this->blog = new Pokela_Model_Blog( );

        $res = Seaf_DB::getDefaultAdapter()->select( )
            ->from('pokela_blog_entry_view_last', '*')
            ->where('blog_id = ? && cat_id != "pf21"', 2)
            ->sort( "id DESC" )
            ->execute();
        $list = array();
        foreach($res as $row )
        {
            //$date = date('n/d',strtotime($row->getTs()));
            $date = $row->getField02();
            $list[$date][$row->getCatId()] = $row->getFullName();
        }
        $this->list = $list;
    }

    public function auAction( )
    {
        $this->mobileAction( );
    }

    public function indexAction( )
    {
        if( $this->getRequest( )->isMobile() )
        {
            if( $this->getRequest()->isAu() )
            {
                $this->getFront()->forward('au');
            }
            else
            {
                $this->getFront()->forward('mobile');
            }
        }
        

        $this->blog = new Pokela_Model_Blog( );
    }

}
?>
