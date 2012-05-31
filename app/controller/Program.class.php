<?php
class Pokela_Controller_Program extends Seaf_Controller
{
    public function detailAction( )
    {
        $req = $this->getRequest( );
        $this->id = $req->id;
    }

    public function mobileAction( )
    {
        // モバイル用にエンコードをかける
        $this->getFront()->getResponse()->setOutputEncode('cp932');
        $this->detailAction( );
    }
}
?>
