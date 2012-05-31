<?php
class Pokela_Model_Blog extends Seaf_Blog
{
    protected function init( )
    {
        $this->setBlogTable(new Pokela_Model_Table_Blog_Master( ));
        $this->setEntryTable(new Pokela_Model_Table_Blog_Entry( ));
        $this->setCategoryTable(new Pokela_Model_Table_Blog_Category( ));
    }
}
?>
