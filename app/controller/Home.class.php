<?php
class Pokela_Controller_Home extends Seaf_Controller
{
    public function indexAction( )
    {
        $this->blog = new Pokela_Model_Blog( );
        /*
        $this->blog->select('番組案内')->category('やりすぎソーサラー')->last(1);
        foreach( $this->blog->select('更新案内')->category('やりすぎソーサラー')->last(2) as $entry )
        {
            echo '<li>$entry->date</li>';

        }
        */

    }

}
?>
