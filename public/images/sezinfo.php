<?php

/*----------------------------------------------------------------------
	��ñ���Τ餻�ӥ塼�� - sezinfo
	2009-06-16 Ver. 1.30
	(c)sapphirus.biz
	
	�ܤ��������ϲ�����URL�򻲾Ȥ��Ʋ�������
	http://www.sapphirus.biz/php/sezinfo/

	���Υ�����ץȤΥ��󥳡��ɤ�EUC-JP�Ǥ���
	TEXTAREA�Τߥ��������ѤǤ��ޤ���������ɽ���ΤȤ���
	�ƥ����ȤȤ���ɽ�����ޤ���
	[url]http://��[/url]�ǰϤ���A�����Ǥ������Ϥߤޤ���
	��JS�ե������ȿ�ǡפǡ�JS�����Ѥ��뤿��Υե������
	�񤭽Ф��ޤ���
	��Async�ե������ȿ�ǡפǡ���Ʊ�����ɤ߹��ि���HTML�ե������
	�񤭽Ф��ޤ�����BOM��UTF-8�Υƥ����ȥե������
	
	���Ķ��ˤ�äƤ� $dataFile��$jsFile��$asFile �˥ѡ��ߥå�����
	����(666)��ɬ�פˤʤ�ޤ���
	���ˤ�äƤϥǡ�����Ǽ�ǥ��쥯�ȥ��(777)�⡣
========================================================================
	Ex.) sezinfo.php
----------------------------------------------------------------------*/

// ����
$pageTitle = '��ñ���Τ餻�ӥ塼�������ե�����'; // ���Υڡ����Υ����ȥ�
$password = 'MHWB0018'; // �����󡦽񤭽Ф���ǧ�ѥѥ����
$maxData = '20'; // �ǡ����κ�����¸���ʤ��ޤ��礭������ȽŤ��ʤ�ޤ���
$encode = 'SJIS'; // ɽ����JS�ե�����Υ��󥳡��ɡ�SJIS/EUC-JP��
$dataFile = 'news.dat'; // �ǡ�����¸�ѥե�����ʾ��ˤ�äƤϥѡ��ߥå�����666���ˡ�
$jsFile = 'news.js'; // ɽ����JS�ե�����ʾ��ˤ�äƤϥѡ��ߥå�����666���ˡ�
$asFile = 'news.txt'; // ɽ����Async�ե�����ʾ��ˤ�äƤϥѡ��ߥå�����666���ˡ�
$dataDir = 'data'; // �嵭2�Ĥγ�Ǽ�ǥ��쥯�ȥ�ʾ��ˤ�äƤϥѡ��ߥå�����777���ˡ�
$chkPass = 1; // ɽ���ѥե�����񤭽Ф����˥ѥ�������Ϥ�̵ͭ��1[ͭ��]/0[̵��]��
$writeBtn = 0; // ɽ���ե�����񤭽Ф��ѤΥܥ����1[JS�ѤΤ�]/2[Async�ѤΤ�]/0[ξ��]��

// Async�ե������ѥե����ޥå�
/*
	������ EOD �� EOD; �δ֤˥ե����ޥåȵ��Ҥ��뤳�Ȥǡ�
	�ƹԤ�ե����ޥåȤ˱�ä��ƥ����Ȥǽ񤭽Ф��ޤ���
	{num} ���ֹ��1���ˤˡ�
	{year} {month} {day} ��ǯ�����ˡ�
	{title} �ϥ����ȥ�ˡ�
	{text} �ϥ����Ȥ˺����Ѥ��ޤ���
*/
$asData = <<< EOD
<!-- No.{num} -->
<dl>
<dt>{title}</dt>
<dd><em>{year}ǯ{month}��{day}��</em><br />
{text}</dd>
</dl>

EOD;


mb_language('ja');
mb_internal_encoding('EUC-JP');


/* ����������å� */

session_start();
if (isset($_GET['mode']) && $_GET['mode'] == 'logout') {
	session_unset($_SESSION);
}
$password = sha1($password);
$post_login = (isset($_POST['sezinfo_pw']) && $_POST['sezinfo_pw']) ? sha1($_POST['sezinfo_pw']) : '';
$sess_login = (isset($_SESSION['SFM']['sezinfo_pw'])) ? $_SESSION['SFM']['sezinfo_pw'] : '';
if ($sess_login !== $password) {
	if ($post_login !== $password) {
		$status = (!$post_login) ? '�ѥ���ɤ����Ϥ��Ƥ�������' : '�ѥ���ɤ����פ��ޤ���';
		echo LoginHtml($pageTitle, $status);
		exit;
	}
}

/* �ᥤ�� */

$title = $text = $month = $day = $mode = $id = '';
$year = date('Y');
$_SESSION['SFM']['sezinfo_pw'] = $password;
if (!$_POST && isset($_GET['mode']) && isset($_GET['id'])) {
	$mode = $_GET['mode'];
	$id = $_GET['id'];
} elseif (isset($_GET['setPass'])) {
	$mode = $_GET['mode'];
	$setPass = $_GET['setPass'];
} else {
	extract($_POST);
}
$scriptName = $_SERVER['SCRIPT_NAME'];
$status = '&nbsp;';
if (!($data = @file($dataDir.'/'.$dataFile))) {
	$status = '�ǡ���������ޤ���';
}
$id--;

$export = new Export();
if (!isset($setPass)) $setPass = '';
switch ($mode) {
	case 'edit': // �Խ��ǡ�������
		list($title, $text, $date) = explode("\t", rtrim($data[$id]));
		list($year, $month, $day) = explode('/', $date);
		$text = preg_replace('/\[br \/\]/', "\n", $text);
		$text = preg_replace('/\[tab \/\]/', "\t", $text);
		$id++;
		$status = "No.{$id} ���Խ����ޤ�";
		break;

	case 'write': // �ǡ����񤭹���
		if (!$title && !$text) {
			$status = '<span id="Err">���Ϥ��Ƥ�������</span>';
		} elseif (!$title || !$text) {
			$status = '<span id="Err">���Ϥ���Ƥ��ʤ����ܤ�����ޤ�</span>';
			$id++;
		} elseif (!preg_match('/\d{4}/', $year)) {
			$status = '<span id="Err">��������ǯ�ˤ�����������ޤ���</span>';
			$id++;
		} else {
			if (get_magic_quotes_gpc()) {
				$title = stripslashes($title);
				$text = stripslashes($text);
			}
			$text = preg_replace('/\t/', '[tab /]', $text);
			$text = preg_replace('/\n/', '[br /]', $text);
			$text = preg_replace('/\r/', '', $text);
			$formData = "{$title}\t{$text}\t{$year}/{$month}/{$day}\n";
			if ($id < 0) {
				array_unshift($data, $formData);
			} else {
				$data[$id] = $formData;
			}
			if (DataSave($data)) $status = '�ե�����˽񤭽Ф��ޤ���';
			$clear = 1;
		}
		break;

	case 'delete': // �ǥ꡼�Ƚ���
		$data[$id] = '';
		if (DataSave($data)) $status = '�ǡ����������ޤ���';
		$clear = 1;
		break;

	case 'up': // �ǡ�����ư�ʾ��
		if ($id > 0) {
			$temp = array_splice($data, $id-1, 1, $data[$id]);
			$data[$id] = $temp[0];
			$id2 = $id + 1;
			if (DataSave($data)) $status = "No.{$id2} �� No.{$id} �������ؤ��ޤ���";
		}
		$clear = 1;
		break;

	case 'down': // �ǡ�����ư�ʲ���
		if ($id < count($data)) {
			$temp = array_splice($data, $id+1, 1, $data[$id]);
			$data[$id] = $temp[0];
			$id++;
			$id2 = $id + 1;
			if (DataSave($data)) $status = "No.{$id} �� No.{$id2} �������ؤ��ޤ���";
		}
		$clear = 1;
		break;

	case 'jsexport': // JS�ѥǡ����ؽ񤭽Ф�
		$status = $export->ExportData($setPass, $data, 'js');
		$clear = 1;
		break;

	case 'asexport': // Async�ѥǡ����ؽ񤭽Ф�
		$status = $export->ExportData($setPass, $data, 'as');
		$clear = 1;
		break;

	case 'allexport': // JS�ѡ�Async�ѥǡ����ؽ񤭽Ф�
		$status = $export->ExportData($setPass, $data, 'all');
		$clear = 1;
		break;

	default:
		$clear = 1;
		break;
}
if (isset($clear)) {
	$title = $text = $month = $day = $mode = $id = '';
	$year = date('Y');
	$month = date('m');
}


/* �ե��󥯥������� */

function LoginHtml($pageTitle, $status)
{ // ������ڡ���
	$htm = <<< EOD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-jp" />
<title>{$pageTitle} - ������</title>
<link href="sezinfo.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="login-block">
<form id="login-form" name="login-form" method="post" action="">
<h1>{$pageTitle} - ������</h1>
<div id="input-cnt">
<p>{$status}</p>
<p><input name="sezinfo_pw" type="password" id="login" />
<input type="submit" value="������" id="submit" /></p>
</div>
</form>
</div>
</body>
</html>

EOD;
	return $htm;
}

function DataSave($data)
{ // �ǡ�����ե�����ؽ񤭽Ф�
	global $dataDir, $dataFile, $maxData;
	$fp = @fopen($dataDir.'/'.$dataFile, 'w') or exit('�ǡ�����񤭽Ф��ޤ���');
	flock($fp, LOCK_EX);
	for ($i = 0; $i < $maxData; $i++) {
		@fwrite($fp, $data[$i]);
	}
	flock($fp, LOCK_UN);
	fclose($fp);
	return true;
}

function ViewTag($html)
{ // �������֤�����
	$html = preg_replace('/\[url\](.+?)\[\/url\]/i', '<a href="$1">$1</a>', $html);
	$html = preg_replace('/\[tab \/\]/', '&nbsp;&nbsp;&nbsp;&nbsp;', $html);
	$html = preg_replace('/\[br \/\]/', '<br />', $html);
	return $html;
}

function ConvUtf8($data)
{ // UTF8���Ѵ�
	$bom = pack('C*', 0xEF, 0xBB, 0xBF);
	$data = mb_convert_encoding($data, 'UTF-8', 'auto');
	$data = preg_replace('/\r\n|\r/', "\n", $data);
	return $bom.$data;
}


/* ɽ���ե�����񤭽Ф��ѥ��饹��� */

class Export
{
	function ExportData($pass, $data, $f)
	{ // �ǡ����������ե�����񤭽Ф�
		global $jsFile, $asFile;
		if ($this->CheckPass($pass) !== true) {
			return $this->CheckPass($pass);
		}
		if ($f == 'js') {
			$this->JsData($data, $jsFile);
			$status = "{$jsFile} �˽񤭽Ф��ޤ���";
		} elseif ($f == 'as') {
			$this->AsData($data, $asFile);
			$status = "{$asFile} �˽񤭽Ф��ޤ���";
		} elseif ($f == 'all') {
			$this->JsData($data, $jsFile);
			$this->AsData($data, $asFile);
			$status = "{$jsFile} &amp; {$asFile} �˽񤭽Ф��ޤ���";
		}
	return $status;
	}

	function CheckPass($setPass)
	{ // �ѥ���ɤγ�ǧ
		global $chkPass, $password;
		if ($chkPass == 1) {
			if (!$setPass) {
				$status = '<span id="Err">�ѥ���ɤ����Ϥ��Ƥ�������</span>';
			} elseif ($password != sha1($setPass)) {
				$status = '<span id="Err">�ѥ���ɤ����פ��ޤ���</span>';
			} else {
				$status = true;
			}
		} else {
			$status = true;
		}
		return $status;
	}

	function JsData($data, $file)
	{ // JS�ѥǡ�������
		global $encode;
		$output = "var info = new Array();\n";
		foreach ($data as $key => $value) {
			$value = addslashes(ViewTag($value));
			list($title, $text, $date) = explode("\t", rtrim($value));
			$output .= "info[{$key}] = new Array(\"{$title}\", \"{$text}\", \"{$date}\");\n";
		}
		$output = mb_convert_encoding($output, $encode, 'auto');
		$this->FileExport($output, $file);
	}

	function AsData($data, $file)
	{ // Async�ѥǡ�������
		global $asData;
		$output = '';
		foreach ($data as $key => $value) {
			$value = ViewTag($value);
			list($title, $text, $date) = explode("\t", rtrim($value));
			$num = $key + 1;
			list($dateY, $dateM, $dateD) = explode('/', $date);
			$org = array('/\{num\}/', '/\{title\}/', '/\{text\}/', '/\{year\}/', '/\{month\}/', '/\{day\}/');
			$rep = array($num, $title, $text, $dateY, $dateM, $dateD);
			$output .= preg_replace($org, $rep, $asData);
		}
		$output = ConvUtf8($output);
		$this->FileExport($output, $file);
	}

	function FileExport($data, $fName)
	{ // �ƥե�����ؽ񤭽Ф�
		global $dataDir;
		$fp = @fopen($dataDir.'/'.$fName, 'w') or exit('�ǡ�����񤭽Ф��ޤ���');
		flock($fp, LOCK_EX);
		fwrite($fp, $data);
		flock($fp, LOCK_UN);
		fclose($fp);
		return true;
	}
}


/* HTMLɽ���ѥ��饹��� */

class OutputHtml
{
	var $writeBtn;
	var $year;
	var $month;
	var $day;

	function OutputHtml($writeBtn, $year, $month, $day)
	{
		global $scriptName, $chkPass;

		// ɽ���񤭽Ф��ѥܥ���[HTML]
		$htm = <<< EOD
<form name="write-form" id="write-form" method="post" action="{$scriptName}">

EOD;
		if ($chkPass == 1) {
			$htm .= <<< EOD
<strong>�ѥ���ɳ�ǧ</strong>
<input name="setPass" type="password" id="setPass" size="10" maxlength="8" />

EOD;
		}
		$btn1 = <<< EOD
<input type="hidden" name="mode" value="jsexport" />
<input type="submit" class="button" id="js-button" value="JavaScript�ե������ȿ��" />

EOD;
		$btn2 = <<< EOD
<input type="hidden" name="mode" value="asexport" />
<input type="submit" class="button" id="as-button" value="Async�ե������ȿ��" />

EOD;
		$btn3 = <<< EOD
<input type="hidden" name="mode" value="allexport" />
<input type="submit" class="button" id="all-button" value="JS &amp; Async�ե������ȿ��" />

EOD;
		switch ($writeBtn) {
			case 1: $htm .= $btn1; break;
			case 2: $htm .= $btn2; break;
			default: $htm .= $btn3; break;
		}
		$htm .= <<< EOD
</form>
<div class="note">��ɽ����ȿ�Ǥ���ˤϾ嵭�Υܥ���򲡤��Ʋ�������</div>

EOD;
		$this->writeBtn = $htm;

		// ǯɽ��[HTML]
		$htm = "<input name=\"year\" type=\"text\" value=\"{$year}\" id=\"year\" maxlength=\"4\" />\n";
		$this->year = $htm;

		// ��ɽ��[HTML]
		$htm = "<select name=\"month\" id=\"month\">\n";
		for($m = 1; $m <= 12; $m++) {
			if ($m == $month) {
				$htm .= "<option value=\"{$m}\" selected=\"selected\">{$m}</option>\n";
			} elseif (!$month && $m == date('m')) {
				$htm .= "<option value=\"{$m}\" selected=\"selected\">{$m}</option>\n";
			}else{
				$htm .= "<option value=\"{$m}\">{$m}</option>\n";
			}
		}
		$htm .= "</select>\n";
		$this->month = $htm;
		
		// ��ɽ��[HTML]
		$htm = "<select name=\"day\" id=\"day\">\n";
		for($d = 1; $d <= 31; $d++) {
			if ($d == $day) {
				$htm .= "<option value=\"{$d}\" selected=\"selected\">{$d}</option>\n";
			} elseif (!$day && $d == date('d')) {
				$htm .= "<option value=\"{$d}\" selected=\"selected\">{$d}</option>\n";
			} else {
				$htm .= "<option value=\"{$d}\">{$d}</option>\n";
			}
		}
		$htm .= "</select>\n";
		$this->day = $htm;
	}
}


// ����å�������
header('Expires: Thu, 01 Dec 1994 16:00:00 GMT');
header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
header('Cache-Control: no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0');
header('Pragma: no-cache');

$htm = new OutputHtml($writeBtn, $year, $month, $day);

/* ��������HTML */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-jp" />
<meta name="robots" content="noindex,nofellow" />
<title><?php echo $pageTitle; ?></title>
<link href="sezinfo.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="layout">

<div id="input-block">
<h1><?php echo $pageTitle; ?>�ʺ���<?php echo $maxData; ?>��ޤǡ�</h1>

<form name="input-form" id="input-form" method="post" action="<?php echo $scriptName; ?>">
<table cellpadding="0" cellspacing="0">
<tr>
<th>�����ȥ�</th>
<td><input name="title" type="text" id="title" value="<?php echo $title; ?>" /></td>
</tr>
<tr>
<th>������</th>
<td><textarea name="text" id="text"><?php echo $text; ?></textarea></td>
</tr>
<tr>
<th>������</th>
<td><?php echo $htm->year; ?>
ǯ
<?php echo $htm->month; ?>
��
<?php echo $htm->day; ?>
��</td>
</tr>
<tr>
<th>&nbsp;</th>
<td><input name="mode" type="hidden" id="mode" value="write" />
<input name="id" type="hidden" id="id" value="<?php echo $id; ?>" />
<input type="submit" value="�񤭹���" class="button" />
<input type="button" class="button" onclick="location.href='<?php echo $scriptName; ?>';" value="���ꥢ�����ɹ�" />
���֥饦���Υ���ɡֺ��ɹ��פϻȤ�ʤ��Ǥ�������</td>
</tr>
</table>
</form>

<div id="status">
<h2><?php echo $status; ?>
<noscript>
<span id="Err">JS��ͭ���ˤ��Ʋ�����</span>
</noscript>
</h2>
</div>

<div id="write">
<?php echo $htm->writeBtn; ?>
</div>
</div>

<div id="data">
<table cellpadding="0" cellspacing="0">
<tr>
<td class="header">No.</td>
<td class="header">�����ȥ롿������</td>
<td class="header">������</td>
<td class="header">���</td>
</tr>
<?php
//�ǡ���ɽ��
if (!$data = @file($dataDir.'/'.$dataFile)) echo "<tr>\n<td colspan=\"4\" align=\"center\">�ǡ���������ޤ���</td>\n</tr>\n";
else {
	foreach ($data as $key => $value) {
		$key++;
		list($title, $text, $date) = explode("\t", rtrim($value));
		$text = ViewTag($text);
?>
<tr onmouseover="this.style.background='#f1f1f1'" onmouseout="this.style.background='#fff'">
<td class="number">No.<?php echo $key; ?></td>
<td>
<p class="title"><?php echo $title ?></p>
<p class="text"><?php echo $text; ?></p>
</td>
<td class="date"><?php echo $date; ?></td>
<td class="button"><?php
if (count($data) > $key && 1 < $key) {
	echo "<a href=\"{$scriptName}?mode=down&amp;id={$key}\">��</a><a href=\"{$scriptName}?mode=up&amp;id={$key}\">��</a>";
} else if (count($data) > $key) {
	echo "<a href=\"{$scriptName}?mode=down&amp;id={$key}\">��</a><span class=\"off\">��</span>";
} else if (1 < $key) {
	echo "<span class=\"off\">��</span><a href=\"{$scriptName}?mode=up&amp;id={$key}\">��</a>";
} else {
	echo "<span class=\"off\">�ˢ�</span>";
}
?>
 | <a href="<?php echo $scriptName; ?>?mode=edit&amp;id=<?php echo $key; ?>">�Խ�</a>
 | <a href="<?php echo $scriptName; ?>?mode=delete&amp;id=<?php echo $key; ?>" onclick="return confirm('������Ƥ�����Ǥ�����');">���</a></td>
</tr>
<?php
	}
}
?>
</table>
<p class="link"><a href="sample.html">ɽ������ץ�</a>
 | <a href="<?php echo $scriptName; ?>?mode=logout">��������</a></p>
</div>

<div id="copyright"><a href="http://www.sapphirus.biz/">(c) Sapphirus.Biz</a></div>
</div>
</body>
</html>
