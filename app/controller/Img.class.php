<?php
class Pokela_Controller_Img extends Seaf_Controller
{
    public function headLineImageAction( )
    {
        $req = $this->getRequest();

        $fs = $req->getVar('fontSize', 12);
        $id = $req->getVar('id', false);
        $bg = $req->getVar('borderColor', 'f60135');
        $text = $req->getVar('text', 'あいうえおかきくけこ');

        if( !$id  )
        {
            throw new Seaf_App_Exception_UserError('Img IDが不正です');
        }

        $headLine = new Pokela_Model_HeadLine( $id, $fs );
        $headLine->setBorderColorHex($bg);
        $headLine->setFontDir($this->getDir('font'));
        $headLine->setText($text);

        header('Content-Type: Image/Jpeg');
        $headLine->gen();
    }

}
?>
