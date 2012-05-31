<?php

$AGENT = $_SERVER['HTTP_USER_AGENT'];

if( preg_match( "/DoCoMo/", $AGENT ) )
{
	//SaveLog(docomo);
	// i-mode用のページにジャンプ
	header("Location: http://www.pokela.jp/i.html#1414");
	exit();
}
elseif( preg_match( "/J-PHONE/", $AGENT ) )
{
	//SaveLog(vodafone);
	// j-sky用のページにジャンプ
	header("Location: http://www.pokela.jp/other.html");
	exit();
}
elseif( preg_match( "/UP\.Browser/", $AGENT ) )
{
	//SaveLog(ezweb);
	// Ezweb用のページにジャンプ
	header("Location: http://www.pokela.jp/au.html#1414");
	exit();
}

elseif( preg_match( "/KDDI/", $AGENT ) )
{
	//SaveLog(ezweb);
	// Ezweb用のページにジャンプ
	header("Location: http://www.pokela.jp/au.html#1414");
	exit();
}


elseif( preg_match( "/Googlebot-Mobile/", $AGENT ) )
{
	//SaveLog(ezweb);
	// Ezweb用のページにジャンプ
	header("Location: http://www.pokela.jp/i.html#1414");
	exit();
}
elseif( preg_match( "/Y!J-MBS/", $AGENT ) )
{
	//SaveLog(ezweb);
	// Ezweb用のページにジャンプ
	header("Location: http://www.pokela.jp/i.html#1414");
	exit();
}
elseif( preg_match( "/Y!J-SRD/", $AGENT ) )
{
	//SaveLog(ezweb);
	// Ezweb用のページにジャンプ
	header("Location: http://www.pokela.jp/i.html#1414");
	exit();
}
else
{
	//SaveLog(other);
	// その他端末用のページにジャンプ
	header("Location: http://www.pokela.jp/main.html");
	//echo ($AGENT);
	exit();
}


function SaveLog($career){
	global $AGENT;
	$filename = '/www/htdocs/log/'.$career.'.log';

	if(!$save_log = fopen($filename, 'a')){
		
	}
	$DATE = date("Y-m-d H:i:s");
	$log = $DATE ."\t". $AGENT . "\r\n";
	fwrite($save_log,$log);
	fclose($save_log);
}

?>
