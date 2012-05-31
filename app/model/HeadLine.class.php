<?php
class Pokela_Model_HeadLine extends Seaf_Entry
{
    protected $_id, $_fontSize = 12, $_borderColor = null, $_fontDir, $_dataDir, $_text;

	public function __construct( $id, $fontSize = 12, $borderColor = null ){
		$this->_id = $id;
		$this->_fontSize = $fontSize;
		$this->_borderColor = $borderColor;
    }

    public function setBorderColorHex( $hex )
    {
        // 色番号を10進数変換
        $R = substr($hex, 0, 2);
        $G = substr($hex, 2, 2);
        $B = substr($hex, 4, 2);
        $this->setBorderColor(  array('R'=>hexdec($R), 'G'=>hexdec($G), 'B'=>hexdec($B)) );
    }

    public function gen( )
    {
        $text = $this->getText();
		$TI = new Seaf_TextToImage($text);
		$TI->setFontDir($this->_fontDir);
		$TI->setFontSize($this->_fontSize);
		$TI->setFontColor(array('R'=>255,'G'=>255,'B'=>255));
		$TI->setBgColor(array('R'=>254,'G'=>254,'B'=>254));
        $TI->addDecorator(new Seaf_TextToImage_Decorator_Bordered(array('borderColor'=>$this->_borderColor)));
        $TI->createImageObject( );
    }
}
?>
