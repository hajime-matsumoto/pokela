<?php

//######### メール送信エンコード #########
function sendMails($to,$sub,$msg,$from){
	global $charset;
	$sub = mb_convert_encoding($sub,"JIS",$charset);
	$msg = mb_convert_encoding($msg,"JIS",$charset);
	
	// ヘッダ生成
	$header = <<<EOM
From: {$from}
Return-Path: {$from}
X-Mailer: ReCube Form 0.1
Content-Type: text/plain; charset=iso-2022-jp
Content-Transfer-Encoding: 7bit
Mime-Version: 1.0

EOM;

	$sub='=?iso-2022-jp?B?'.base64_encode($sub).'?=';// Base64エンコード
	if(mail($to,$sub,$msg,$header)){
		return true;
	}else{
		return false;
	}
}

//######### 入力値エンティティ #########
function formText($str){
	global $charset;
	$utftip = ($charset == "utf-8")? 'u' : '';
	$str = mb_convert_kana($str,"KV",$charset);
	$str = preg_replace('/\\\/'.$utftip,'',$str);
	$str = htmlspecialchars($str,ENT_QUOTES,$charset);

	return $str;
}

//######### セレクトボックス生成用関数 #########
//selectObject(BOX名,選択状態,配列名,CSSクラス名)
function selectObject($selname,$selvals,$selarr,$class){
	$str = '<select name="'.$selname.'" class="'.$class.'">';
	$str .= '<option value="">選択してください</option>';
	foreach($selarr as $keys => $value){
		if($selvals == $value){
			$str .= '<option value="'.$value.'" selected="selected">'.$value.'</option>';
		}else{
			$str .= '<option value="'.$value.'">'.$value.'</option>';
		}
	}
	$str .= '</select>';
	return $str;
}

//######### チェックボックス生成用関数 #########
//checkObject(BOX名,選択状態,配列名,CSSクラス名)
function checkObject($selname,$selvals,$selarr,$class){
	
	foreach($selarr as $keys => $value){
		if(is_array($selvals) and array_search($value,$selvals) != NULL){
			$str .= '<label for="id'.$selname.'-'.$keys.'"><input type="checkbox" id="id'.$selname.'-'.$keys.'" name="'.$selname.'[]" value="'.$value.'" checked="checked" class="'.$class.'" /> '.$value.'</label> ';
		}else{
			$str .= '<label for="id'.$selname.'-'.$keys.'"><input type="checkbox" id="id'.$selname.'-'.$keys.'" name="'.$selname.'[]" value="'.$value.'" class="'.$class.'" /> '.$value.'</label> ';
		}
	}
	return $str;
}

//######### ラジオボックス生成用関数 #########
//radioObject(BOX名,選択状態,配列名,CSSクラス名)
function radioObject($selname,$selvals,$selarr,$class){
	
	foreach($selarr as $keys => $value){
		if($selvals == $value){
			$str .= '<label for="id'.$selname.'-'.$keys.'"><input type="radio" id="id'.$selname.'-'.$keys.'" name="'.$selname.'" value="'.$value.'" checked="checked" class="'.$class.'" /> '.$value.'</label> ';
		}else{
			$str .= '<label for="id'.$selname.'-'.$keys.'"><input type="radio" id="id'.$selname.'-'.$keys.'" name="'.$selname.'" value="'.$value.'" class="'.$class.'" /> '.$value.'</label> ';
		}
	}
	return $str;
}

//######### セレクトボックス年月日生成用関数 #########
function selectDateObject($Ynm,$Mnm,$Dnm,$Pys,$Pms,$Pds){
	$Gys = date("Y",time());
	$GysEnd = $Gys + 5;
	$Gms = date("m",time());
	$Gds = date("d",time());
	
	if($Pys == ""){
		$Pys = $Gys;
	}
	if($Pms == ""){
		$Pms = $Gms;
	}
	if($Pds == ""){
		$Pds = $Gds;
	}
	
	$str = '<select name="'.$Ynm.'" class="inp4">';
	for($i1=$Gys;$i1<$GysEnd;$i1++){
		if($Pys == $i1){
			$str .= '<option value="'.$i1.'" selected="selected">'.$i1.'</option>';
		}else{
			$str .= '<option value="'.$i1.'">'.$i1.'</option>';
		}
	}
	$str .= '</select> 年 <select name="'.$Mnm.'" class="inp2">';
	for($i2=1;$i2<13;$i2++){
		if($Pms == $i2){
			$str .= '<option value="'.$i2.'" selected="selected">'.$i2.'</option>';
		}else{
			$str .= '<option value="'.$i2.'">'.$i2.'</option>';
		}
	}
	$str .= '</select> 月 <select name="'.$Dnm.'" class="inp2">';
	for($i3=1;$i3<32;$i3++){
		if($Pds == $i3){
			$str .= '<option value="'.$i3.'" selected="selected">'.$i3.'</option>';
		}else{
			$str .= '<option value="'.$i3.'">'.$i3.'</option>';
		}
	}
	$str .= '</select> 日';
	return $str;
}

//######### emailチェック用関数 #########
function email_check($text){
	global $charset;
	$utftip = ($charset == "utf-8")? 'u' : '';
	if(preg_match('/^(?:[^(\040)<>@,;:".\\\\\[\]\000-\037\x80-\xff]+(?![^(\040)<>@,;:".\\\\\[\]\000-\037\x80-\xff])|"[^\\\\\x80-\xff\n\015"]*(?:\\\\[^\x80-\xff][^\\\\\x80-\xff\n\015"]*)*")(?:\.(?:[^(\040)<>@,;:".\\\\\[\]\000-\037\x80-\xff]+(?![^(\040)<>@,;:".\\\\\[\]\000-\037\x80-\xff])|"[^\\\\\x80-\xff\n\015"]*(?:\\\\[^\x80-\xff][^\\\\\x80-\xff\n\015"]*)*"))*@(?:[^(\040)<>@,;:".\\\\\[\]\000-\037\x80-\xff]+(?![^(\040)<>@,;:".\\\\\[\]\000-\037\x80-\xff])|\[(?:[^\\\\\x80-\xff\n\015\[\]]|\\\\[^\x80-\xff])*\])(?:\.(?:[^(\040)<>@,;:".\\\\\[\]\000-\037\x80-\xff]+(?![^(\040)<>@,;:".\\\\\[\]\000-\037\x80-\xff])|\[(?:[^\\\\\x80-\xff\n\015\[\]]|\\\\[^\x80-\xff])*\]))*$/'.$utftip,$text)){
		return TRUE;
	} else {
		return FALSE;
	}
}

//######### URLチェック用関数 #########
function url_check($text) {
	global $charset;
	$utftip = ($charset == "utf-8")? 'u' : '';
	if (preg_match('/^(https?|ftp)(:\/\/[-_.!~*\'()a-zA-Z0-9;\/?:\@&=+\$,%#]+)$/'.$utftip, $text)) {
		return TRUE;
	} else {
		return FALSE;
	}
}

//######### 電話番号チェック用関数 #########
function tel_check($text) {
	global $charset;
	$utftip = ($charset == "utf-8")? 'u' : '';
	if (preg_match('/^[0-9\-]+$/'.$utftip,$text)) {
		return TRUE;
	} else {
		return FALSE;
	}
}

//######### 郵便番号チェック用関数 #########
function yubin_check($text) {
	global $charset;
	$utftip = ($charset == "utf-8")? 'u' : '';
	if (preg_match('/^([0-9\-]{3})\-([0-9\-]{4})$/'.$utftip,$text)) {
		return TRUE;
	} else {
		return FALSE;
	}
}

//######### カタカナチェック用関数 #########
function kana_check($text) {
	global $charset;
	$utftip = ($charset == "utf-8")? 'u' : '';
	if (preg_match('/^[ァ-ヴー]+$/'.$utftip,$text)) {
		return TRUE;
	} else {
		return FALSE;
	}
}

//######### ひらがなチェック用関数 #########
function hira_check($text) {
	global $charset;
	$utftip = ($charset == "utf-8")? 'u' : '';
	if (preg_match('/^[ぁ-んー]+$/'.$utftip,$text)) {
		return TRUE;
	} else {
		return FALSE;
	}
}

//######### 半角英数字チェック用関数 #########
function eisu_check($text) {
	global $charset;
	$utftip = ($charset == "utf-8")? 'u' : '';
	if (preg_match('/^[0-9A-Za-z ]+$/'.$utftip,$text)) {
		return TRUE;
	} else {
		return FALSE;
	}
}

//######### 半角英字チェック用関数 #########
function eiji_check($text) {
	global $charset;
	$utftip = ($charset == "utf-8")? 'u' : '';
	if (preg_match('/^[A-Za-z ]+$/'.$utftip,$text)) {
		return TRUE;
	} else {
		return FALSE;
	}
}

//######### 半角数字チェック用関数 #########
function suji_check($text) {
	global $charset;
	$utftip = ($charset == "utf-8")? 'u' : '';
	if (preg_match('/^[0-9 ]+$/'.$utftip,$text)) {
		return TRUE;
	} else {
		return FALSE;
	}
}

?>