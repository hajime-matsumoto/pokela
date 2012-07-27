<?php
class Pokela_Model_Blog extends Seaf_Blog
{
    protected function init( )
    {
        $this->setBlogTable(new Pokela_Model_Table_Blog_Master( ));
        $this->setEntryTable(new Pokela_Model_Table_Blog_Entry( ));
        $this->setCategoryTable(new Pokela_Model_Table_Blog_Category( ));
    }

    public function isoUpdate( $file, $date, $count, $head )
    {
        $blog_id = $this->getIdByName('更新案内');
        $id = $this->replace( 
            array('field03 = ?', $file)
            ,array(
                'blog_id' => $blog_id, // Blog IDを指定
                'content' => $head,
                'field01' => $count, // 回数
                'field02' => $date, // 日付
                'field03' => $file, // ファイル名
            )
        );
        $this->addCategory($id,$blog_id,'イソフラボンバー');
    }
    public function yarooUpdate( $file, $date, $count, $head, $comment = null)
    {
        $blog_id = $this->getIdByName('更新案内');
        $id = $this->replace( 
            array('field03 = ?', $file)
            ,array(
                'blog_id' => $blog_id, // Blog IDを指定
                'content' => $head,
                'field01' => $count, // 回数
                'field02' => $date, // 日付
                'field03' => $file, // ファイル名
                'field04' => $comment, // コメント
            )
        );
        $this->addCategory($id,$blog_id,'YAROO');
    }

    public function pvjUpdate( $file, $date, $count, $head, $comment )
    {
        $blog_id = $this->getIdByName('更新案内');
        $id = $this->replace( 
            array('field03 = ?', $file)
            ,array(
                'blog_id' => $blog_id, // Blog IDを指定
                'content' => $head,
                'field01' => $count, // 回数
                'field02' => $date, // 日付
                'field03' => $file, // ファイル名
                'field04' => $comment, // コメント
            )
        );
        $this->addCategory($id,$blog_id,'パワーボイスジャム');
    }

    public function mjsUpdate( $file, $date, $count, $head, $comment )
    {
        $blog_id = $this->getIdByName('更新案内');
        $id = $this->replace( 
            array('field03 = ?', $file)
            ,array(
                'blog_id' => $blog_id, // Blog IDを指定
                'content' => $head,
                'field01' => $count, // 回数
                'field02' => $date, // 日付
                'field03' => $file, // ファイル名
                'field04' => $comment, // コメント
            )
        );
        $this->addCategory($id,$blog_id,'レインボウ');
    }

    public function seiyuUpdate( $file, $date, $count, $head, $comment, $QandA )
    {
        $blog_id = $this->getIdByName('更新案内');
        $id = $this->replace( 
            array('field03 = ?', $file)
            ,array(
                'blog_id' => $blog_id, // Blog IDを指定
                'content' => $head,
                'field01' => $count, // 回数
                'field02' => $date, // 日付
                'field03' => $file, // ファイル名
                'field04' => $comment, // コメント
                'field05' => $QandA // 心理テスト
            )
        );
        $this->addCategory($id,$blog_id,'トリラジ');
    }

    public function odUpdate( $file, $date, $count )
    {
        $blog_id = $this->getIdByName('更新案内');
        // オゥサキの更新も通知する
        $id = $this->replace( 
            array('field03 = ?', $file)
            ,array(
                'blog_id' => $blog_id,
                'content' => "オゥサキ・ドゥ・マドゥーイ",
                'field01' => $count,
                'field02' => $date,
                'field03' => $file 
            )
        );
        $this->addCategory($id,$blog_id,'オオサキ');
    }

    public function ftUpdate( $file, $date, $count, $head )
    {
        $blog_id = $this->getIdByName('更新案内');
        $id = $this->replace( 
            array('field03 = ?', $file)
            ,array(
                'blog_id' => $blog_id, // Blog IDを指定
                'content' => $head,
                'field01' => $count, // 回数
                'field02' => $date, // 日付
                'field03' => $file
            )
        );
        $this->addCategory($id,$blog_id,'やりすぎソーサラー');
    }

    public function makaiUpdate( $file, $date, $count, $head, $comment )
    {
        $blog_id = $this->getIdByName('更新案内');
        $id = $this->replace( 
            array('field03 = ?', $file)
            ,array(
                'blog_id' => $blog_id, // Blog IDを指定
                'content' => $head,
                'field01' => $count, // 回数
                'field02' => $date, // 日付
                'field03' => $file, // ファイル名
                'field04' => $comment, // コメント
            )
        );
        $this->addCategory($id,$blog_id,'魔界政府広報部');
    }

    public function vsUpdate( $file, $date, $count, $head )
    {
        $blog_id = $this->getIdByName('更新案内');
        $id = $this->replace( 
            array('field03 = ?', $file)
            ,array(
                'blog_id' => $blog_id, // Blog IDを指定
                'content' => $head,
                'field01' => $count,
                'field02' => $date, // 日付
                'field03' => $file, // ファイル名
            )
        );
        $this->addCategory($id,$blog_id,'バーサスWAVE');
    }
}
?>
