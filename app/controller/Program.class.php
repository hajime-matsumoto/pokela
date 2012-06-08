<?php
class Pokela_Controller_Program extends Seaf_Controller
{
    public function waxAction( )
    {
        // WAXファイルを表示
        $req = $this->getRequest( );

        // ダウンロード用にエンコードをかける
        $this->getFront()->getResponse()->setOutputEncode('cp932');
        $this->getFront()->getResponse()->addHeader('Content-Type', 'audio/x-ms-wax;');



        $this->blog = $blog = new Pokela_Model_Blog( );

            // カテゴリを取得する
        if( $req->num != "sp" )
        {
            $this->id = $req->id;
            $this->num = $req->num < 1 ? 1: $req->num;


            $res = Seaf_DB::getDefaultAdapter()->select( )
                ->from('pokela_blog_category_master', '*')
                ->where('cat_id = ?', $this->id)
                ->execute();
            if(!$res){
                die('不正なカテゴリ');
            }
            $row = $res->firstRow();
            $name = $row->getName();
            $this->title = $row->getFullName();
        }
        else
        {
            $name = "オオサキ";
            $this->title = "オオサキ・ドゥ・マドゥーイ";
            $this->num = 1;
        }

        $up = $blog->name('更新案内')->category($name)->lastn($this->num); 
        $e = array_pop($up);

        $this->file = $e->getField03();
        $this->getFront()->getResponse()->addHeader('Content-Disposition', 'attachment; filename="'.$this->file.'.wax"');

    }

    public function detailAction( )
    {
        $req = $this->getRequest( );
        $this->id = $req->id;

        $res = Seaf_DB::getDefaultAdapter()->select( )
            ->from('pokela_blog_category_master', '*')
            ->where('cat_id = ?', $this->id)
            ->execute();
        if(!$res){
            die('不正なカテゴリ');
        }
        $row = $res->firstRow();
        $name = $row->getName();

        $blog = new Pokela_Model_Blog();
        $this->up = $blog->name('更新案内')->category($name)->lastn(2);
        $prog = $blog->name('番組案内')->category($name)->lastn(1);
        $this->prog = $prog[0];
    }

    public function mobileAction( )
    {
        // モバイル用にエンコードをかける
        $this->getFront()->getResponse()->setOutputEncode('cp932');
        $this->detailAction( );
    }
}
?>
