<?php

/*----------------------------------------------------------------------
	簡単お知らせビューア - sezinfo
	2009-06-16 Ver. 1.30
	(c)sapphirus.biz
	
	詳しい説明は下記のURLを参照して下さい。
	http://www.sapphirus.biz/php/sezinfo/

	このスクリプトのエンコードはEUC-JPです。
	TEXTAREAのみタグを利用できますが、一覧表示のときは
	テキストとして表示します。
	[url]http://〜[/url]で囲うとAタグでその中を囲みます。
	「JSファイルへ反映」で、JSで利用するためのファイルに
	書き出します。
	「Asyncファイルへ反映」で、非同期で読み込むためのHTMLファイルに
	書き出します。（BOM付UTF-8のテキストファイル）
	
	※環境によっては $dataFile・$jsFile・$asFile にパーミッションの
	設定(666)が必要になります。
	場合によってはデータ格納ディレクトリに(777)も。
========================================================================
	Ex.) sezinfo.php
----------------------------------------------------------------------*/

// 設定
$pageTitle = '簡単お知らせビューア更新フォーム'; // このページのタイトル
$password = 'MHWB0018'; // ログイン・書き出し確認用パスワード
$maxData = '20'; // データの最大保存数（あまり大きくすると重くなります）
$encode = 'SJIS'; // 表示用JSファイルのエンコード（SJIS/EUC-JP）
$dataFile = 'news.dat'; // データ保存用ファイル（場合によってはパーミッションを666等に）
$jsFile = 'news.js'; // 表示用JSファイル（場合によってはパーミッションを666等に）
$asFile = 'news.txt'; // 表示用Asyncファイル（場合によってはパーミッションを666等に）
$dataDir = 'data'; // 上記2つの格納ディレクトリ（場合によってはパーミッションを777等に）
$chkPass = 1; // 表示用ファイル書き出し時にパスワード入力の有無（1[有り]/0[無し]）
$writeBtn = 0; // 表示ファイル書き出し用のボタン（1[JS用のみ]/2[Async用のみ]/0[両方]）

// Asyncファイル用フォーマット
/*
	下記の EOD 〜 EOD; の間にフォーマット記述することで、
	各行をフォーマットに沿ったテキストで書き出します。
	{num} は番号（1〜）に、
	{year} {month} {day} は年月日に、
	{title} はタイトルに、
	{text} はコメントに差し変わります。
*/
$asData = <<< EOD
<!-- No.{num} -->
<dl>
<dt>{title}</dt>
<dd><em>{year}年{month}月{day}日</em><br />
{text}</dd>
</dl>

EOD;


mb_language('ja');
mb_internal_encoding('EUC-JP');


/* ログインチェック */

session_start();
if (isset($_GET['mode']) && $_GET['mode'] == 'logout') {
	session_unset($_SESSION);
}
$password = sha1($password);
$post_login = (isset($_POST['sezinfo_pw']) && $_POST['sezinfo_pw']) ? sha1($_POST['sezinfo_pw']) : '';
$sess_login = (isset($_SESSION['SFM']['sezinfo_pw'])) ? $_SESSION['SFM']['sezinfo_pw'] : '';
if ($sess_login !== $password) {
	if ($post_login !== $password) {
		$status = (!$post_login) ? 'パスワードを入力してください' : 'パスワードが一致しません';
		echo LoginHtml($pageTitle, $status);
		exit;
	}
}

/* メイン */

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
	$status = 'データがありません';
}
$id--;

$export = new Export();
if (!isset($setPass)) $setPass = '';
switch ($mode) {
	case 'edit': // 編集データ取得
		list($title, $text, $date) = explode("\t", rtrim($data[$id]));
		list($year, $month, $day) = explode('/', $date);
		$text = preg_replace('/\[br \/\]/', "\n", $text);
		$text = preg_replace('/\[tab \/\]/', "\t", $text);
		$id++;
		$status = "No.{$id} を編集します";
		break;

	case 'write': // データ書き込み
		if (!$title && !$text) {
			$status = '<span id="Err">入力してください</span>';
		} elseif (!$title || !$text) {
			$status = '<span id="Err">入力されていない項目があります</span>';
			$id++;
		} elseif (!preg_match('/\d{4}/', $year)) {
			$status = '<span id="Err">更新日（年）が正しくありません</span>';
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
			if (DataSave($data)) $status = 'ファイルに書き出しました';
			$clear = 1;
		}
		break;

	case 'delete': // デリート処理
		$data[$id] = '';
		if (DataSave($data)) $status = 'データを削除しました';
		$clear = 1;
		break;

	case 'up': // データ移動（上）
		if ($id > 0) {
			$temp = array_splice($data, $id-1, 1, $data[$id]);
			$data[$id] = $temp[0];
			$id2 = $id + 1;
			if (DataSave($data)) $status = "No.{$id2} と No.{$id} を入れ替えました";
		}
		$clear = 1;
		break;

	case 'down': // データ移動（下）
		if ($id < count($data)) {
			$temp = array_splice($data, $id+1, 1, $data[$id]);
			$data[$id] = $temp[0];
			$id++;
			$id2 = $id + 1;
			if (DataSave($data)) $status = "No.{$id} と No.{$id2} を入れ替えました";
		}
		$clear = 1;
		break;

	case 'jsexport': // JS用データへ書き出し
		$status = $export->ExportData($setPass, $data, 'js');
		$clear = 1;
		break;

	case 'asexport': // Async用データへ書き出し
		$status = $export->ExportData($setPass, $data, 'as');
		$clear = 1;
		break;

	case 'allexport': // JS用＆Async用データへ書き出し
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


/* ファンクション定義 */

function LoginHtml($pageTitle, $status)
{ // ログインページ
	$htm = <<< EOD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-jp" />
<title>{$pageTitle} - ログイン</title>
<link href="sezinfo.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="login-block">
<form id="login-form" name="login-form" method="post" action="">
<h1>{$pageTitle} - ログイン</h1>
<div id="input-cnt">
<p>{$status}</p>
<p><input name="sezinfo_pw" type="password" id="login" />
<input type="submit" value="ログイン" id="submit" /></p>
</div>
</form>
</div>
</body>
</html>

EOD;
	return $htm;
}

function DataSave($data)
{ // データをファイルへ書き出し
	global $dataDir, $dataFile, $maxData;
	$fp = @fopen($dataDir.'/'.$dataFile, 'w') or exit('データを書き出せません');
	flock($fp, LOCK_EX);
	for ($i = 0; $i < $maxData; $i++) {
		@fwrite($fp, $data[$i]);
	}
	flock($fp, LOCK_UN);
	fclose($fp);
	return true;
}

function ViewTag($html)
{ // タグの置き換え
	$html = preg_replace('/\[url\](.+?)\[\/url\]/i', '<a href="$1">$1</a>', $html);
	$html = preg_replace('/\[tab \/\]/', '&nbsp;&nbsp;&nbsp;&nbsp;', $html);
	$html = preg_replace('/\[br \/\]/', '<br />', $html);
	return $html;
}

function ConvUtf8($data)
{ // UTF8に変換
	$bom = pack('C*', 0xEF, 0xBB, 0xBF);
	$data = mb_convert_encoding($data, 'UTF-8', 'auto');
	$data = preg_replace('/\r\n|\r/', "\n", $data);
	return $bom.$data;
}


/* 表示ファイル書き出し用クラス定義 */

class Export
{
	function ExportData($pass, $data, $f)
	{ // データ生成＆ファイル書き出し
		global $jsFile, $asFile;
		if ($this->CheckPass($pass) !== true) {
			return $this->CheckPass($pass);
		}
		if ($f == 'js') {
			$this->JsData($data, $jsFile);
			$status = "{$jsFile} に書き出しました";
		} elseif ($f == 'as') {
			$this->AsData($data, $asFile);
			$status = "{$asFile} に書き出しました";
		} elseif ($f == 'all') {
			$this->JsData($data, $jsFile);
			$this->AsData($data, $asFile);
			$status = "{$jsFile} &amp; {$asFile} に書き出しました";
		}
	return $status;
	}

	function CheckPass($setPass)
	{ // パスワードの確認
		global $chkPass, $password;
		if ($chkPass == 1) {
			if (!$setPass) {
				$status = '<span id="Err">パスワードを入力してください</span>';
			} elseif ($password != sha1($setPass)) {
				$status = '<span id="Err">パスワードが一致しません</span>';
			} else {
				$status = true;
			}
		} else {
			$status = true;
		}
		return $status;
	}

	function JsData($data, $file)
	{ // JS用データ生成
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
	{ // Async用データ生成
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
	{ // 各ファイルへ書き出し
		global $dataDir;
		$fp = @fopen($dataDir.'/'.$fName, 'w') or exit('データを書き出せません');
		flock($fp, LOCK_EX);
		fwrite($fp, $data);
		flock($fp, LOCK_UN);
		fclose($fp);
		return true;
	}
}


/* HTML表示用クラス定義 */

class OutputHtml
{
	var $writeBtn;
	var $year;
	var $month;
	var $day;

	function OutputHtml($writeBtn, $year, $month, $day)
	{
		global $scriptName, $chkPass;

		// 表示書き出し用ボタン[HTML]
		$htm = <<< EOD
<form name="write-form" id="write-form" method="post" action="{$scriptName}">

EOD;
		if ($chkPass == 1) {
			$htm .= <<< EOD
<strong>パスワード確認</strong>
<input name="setPass" type="password" id="setPass" size="10" maxlength="8" />

EOD;
		}
		$btn1 = <<< EOD
<input type="hidden" name="mode" value="jsexport" />
<input type="submit" class="button" id="js-button" value="JavaScriptファイルへ反映" />

EOD;
		$btn2 = <<< EOD
<input type="hidden" name="mode" value="asexport" />
<input type="submit" class="button" id="as-button" value="Asyncファイルへ反映" />

EOD;
		$btn3 = <<< EOD
<input type="hidden" name="mode" value="allexport" />
<input type="submit" class="button" id="all-button" value="JS &amp; Asyncファイルへ反映" />

EOD;
		switch ($writeBtn) {
			case 1: $htm .= $btn1; break;
			case 2: $htm .= $btn2; break;
			default: $htm .= $btn3; break;
		}
		$htm .= <<< EOD
</form>
<div class="note">※表示へ反映するには上記のボタンを押して下さい。</div>

EOD;
		$this->writeBtn = $htm;

		// 年表示[HTML]
		$htm = "<input name=\"year\" type=\"text\" value=\"{$year}\" id=\"year\" maxlength=\"4\" />\n";
		$this->year = $htm;

		// 月表示[HTML]
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
		
		// 日表示[HTML]
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


// キャッシュ制御
header('Expires: Thu, 01 Dec 1994 16:00:00 GMT');
header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
header('Cache-Control: no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0');
header('Pragma: no-cache');

$htm = new OutputHtml($writeBtn, $year, $month, $day);

/* ここからHTML */

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
<h1><?php echo $pageTitle; ?>（最大<?php echo $maxData; ?>件まで）</h1>

<form name="input-form" id="input-form" method="post" action="<?php echo $scriptName; ?>">
<table cellpadding="0" cellspacing="0">
<tr>
<th>タイトル</th>
<td><input name="title" type="text" id="title" value="<?php echo $title; ?>" /></td>
</tr>
<tr>
<th>コメント</th>
<td><textarea name="text" id="text"><?php echo $text; ?></textarea></td>
</tr>
<tr>
<th>更新日</th>
<td><?php echo $htm->year; ?>
年
<?php echo $htm->month; ?>
月
<?php echo $htm->day; ?>
日</td>
</tr>
<tr>
<th>&nbsp;</th>
<td><input name="mode" type="hidden" id="mode" value="write" />
<input name="id" type="hidden" id="id" value="<?php echo $id; ?>" />
<input type="submit" value="書き込み" class="button" />
<input type="button" class="button" onclick="location.href='<?php echo $scriptName; ?>';" value="クリア／再読込" />
※ブラウザのリロード「再読込」は使わないでください</td>
</tr>
</table>
</form>

<div id="status">
<h2><?php echo $status; ?>
<noscript>
<span id="Err">JSを有効にして下さい</span>
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
<td class="header">タイトル／コメント</td>
<td class="header">更新日</td>
<td class="header">操作</td>
</tr>
<?php
//データ表示
if (!$data = @file($dataDir.'/'.$dataFile)) echo "<tr>\n<td colspan=\"4\" align=\"center\">データがありません</td>\n</tr>\n";
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
	echo "<a href=\"{$scriptName}?mode=down&amp;id={$key}\">∨</a><a href=\"{$scriptName}?mode=up&amp;id={$key}\">∧</a>";
} else if (count($data) > $key) {
	echo "<a href=\"{$scriptName}?mode=down&amp;id={$key}\">∨</a><span class=\"off\">∧</span>";
} else if (1 < $key) {
	echo "<span class=\"off\">∨</span><a href=\"{$scriptName}?mode=up&amp;id={$key}\">∧</a>";
} else {
	echo "<span class=\"off\">∨∧</span>";
}
?>
 | <a href="<?php echo $scriptName; ?>?mode=edit&amp;id=<?php echo $key; ?>">編集</a>
 | <a href="<?php echo $scriptName; ?>?mode=delete&amp;id=<?php echo $key; ?>" onclick="return confirm('削除してよろしいですか？');">削除</a></td>
</tr>
<?php
	}
}
?>
</table>
<p class="link"><a href="sample.html">表示サンプル</a>
 | <a href="<?php echo $scriptName; ?>?mode=logout">ログアウト</a></p>
</div>

<div id="copyright"><a href="http://www.sapphirus.biz/">(c) Sapphirus.Biz</a></div>
</div>
</body>
</html>
