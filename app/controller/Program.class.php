<?php
class Pokela_Controller_Program extends Seaf_Controller
{
    public function detailAction( )
    {
        $req = $this->getRequest( );
        $this->id = $req->id;
    }
}
?>
