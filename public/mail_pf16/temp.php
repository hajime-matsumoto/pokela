<?php

$value_html = <<<EOM
<?xml version="1.0" encoding="{$charset}"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="ja" xml:lang="ja" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset={$charset}" />
	<meta http-equiv="Content-Language" content="ja" />
	<meta name="robots" content="noindex,nofollow" />
	<title>{$titletag}</title>
	<meta http-equiv="Content-Script-Type" content="text/javascript" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<link href="style.css" type="text/css" rel="stylesheet" media="screen" />
</head>
<body>
{$form_inp}
</body>
</html>
EOM;

?>