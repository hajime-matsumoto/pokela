<?php
ini_set("display_errors",0);
error_reporting(E_ALL & ~E_NOTICE);
header("Content-Type: text/html;charset=UTF-8");
//PHP version 4 - 5
// mb必須
// +----------------------------------------------------------------------+
// | 2008/06/09                                                           |
// | ReCube Form v0.1.1 BETA                                              |
// | http://form.recube.net                                               |
// +----------------------------------------------------------------------+
// | Copyright (c) 2007 WEB.FUNKAZISTA.COM                                |
// +----------------------------------------------------------------------+
// | ライセンス説明                                                       |
// | 現在ライセンスは検討中です。                                         |
// | 再配布は不可                                                         |
// +----------------------------------------------------------------------+
// | Authors: Original Author <info@recube.net>                           |
// +----------------------------------------------------------------------+

	require_once("config.php");
	require_once("setting.php");
	require_once("lib.php");
	
	$F = array();
	$E = array();
	$V = array();

	$ERR = 0;
	$rtnmail_add = "";

if(isset($_GET['sos'])){

	$form_inp = $endMessage;

}else{

	if($_POST['submit'] == $inputBtn or $_POST['submit'] == $returnBtn or $_POST['submit'] == $registBtn){
	
		foreach($FORM as $fmFkey => $fmFval){
			$fname = $fmFval['name'];
			if($fmFval['type'] == "text" or $fmFval['type'] == "textarea"){
				$F[$fname] = formText($_POST[$fname]);
			}else{
				if($fmFval['type'] == "checkbox"){
					if(is_array($_POST[$fname])){
						$i = 1;
						foreach($_POST[$fname] as $kky => $vvl){
							$F[$fname][$i] = $vvl;
							$i++;
						}
					}
				}elseif($fmFval['type'] == "date"){
					$F[$fname.'_y'] = $_POST[$fname.'_y'];
					$F[$fname.'_m'] = $_POST[$fname.'_m'];
					$F[$fname.'_d'] = $_POST[$fname.'_d'];
				}else{
					$F[$fname] = $_POST[$fname];
				}
			}
			
			if($fmFval['rtml']){ $rtnmail_add = $F[$fname]; }
			
			//エラーチェック text
			if($fmFval['chck'] == 1 and $F[$fname] != "" and !email_check($F[$fname])){ $ERR = 1; $E[$fname] = '<br /><span class="err">'.$fmFval['titl'].'の値がメールアドレスではありません。</span>'; }
			elseif($fmFval['chck'] == 2 and $F[$fname] != "" and !email_check($F[$fname])){ $ERR = 1; $E[$fname] = '<br /><span class="err">'.$fmFval['titl'].'の値がURLではありません。</span>'; }
			elseif($fmFval['chck'] == 3 and $F[$fname] != "" and !tel_check($F[$fname])){ $ERR = 1; $E[$fname] = '<br /><span class="err">'.$fmFval['titl'].'の値が電話番号ではありません。</span>'; }
			elseif($fmFval['chck'] == 4 and $F[$fname] != "" and !yubin_check($F[$fname])){ $ERR = 1; $E[$fname] = '<br /><span class="err">'.$fmFval['titl'].'の値が郵便番号ではありません。</span>'; }
			elseif($fmFval['chck'] == 5 and $F[$fname] != "" and !eisu_check($F[$fname])){ $ERR = 1; $E[$fname] = '<br /><span class="err">'.$fmFval['titl'].'の値に半角英数字以外が含まれています。</span>'; }
			elseif($fmFval['chck'] == 6 and $F[$fname] != "" and !eiji_check($F[$fname])){ $ERR = 1; $E[$fname] = '<br /><span class="err">'.$fmFval['titl'].'の値に半角英字以外が含まれています。</span>'; }
			elseif($fmFval['chck'] == 7 and $F[$fname] != "" and !suji_check($F[$fname])){ $ERR = 1; $E[$fname] = '<br /><span class="err">'.$fmFval['titl'].'の値に半角数字以外が含まれています。</span>'; }
			elseif($fmFval['chck'] == 8 and $F[$fname] != "" and !kana_check($F[$fname])){ $ERR = 1; $E[$fname] = '<br /><span class="err">'.$fmFval['titl'].'の値にカタカナ以外が含まれています。</span>'; }
			elseif($fmFval['chck'] == 9 and $F[$fname] != "" and !hira_check($F[$fname])){ $ERR = 1; $E[$fname] = '<br /><span class="err">'.$fmFval['titl'].'の値にひらがな以外が含まれています。</span>'; }
			
			//エラーチェック 文字数制限
			if($fmFval['lens'] and $fmFval['lens'] < $F[$fname] and $fmFval['type'] == "text"){ $ERR = 1; $E[$fname] = '<br /><span class="err">'.$fmFval['titl'].'の文字数が制限を越えています。</span>'; }
			elseif($fmFval['lens'] and $fmFval['lens'] < $F[$fname] and $fmFval['type'] == "textarea"){ $ERR = 1; $E[$fname] = '<span class="err">'.$fmFval['titl'].'の文字数が制限を越えています。</span><br />'; }
			
			//エラーチェック 必須項目
			if($fmFval['hiss'] == 1 and $F[$fname] == "" and $fmFval['type'] == "text"){ $ERR = 1; $E[$fname] = '<br /><span class="err">'.$fmFval['titl'].'が入力されていません。</span>'; }
			elseif($fmFval['hiss'] == 1 and $F[$fname] == "" and $fmFval['type'] == "checkbox"){ $ERR = 1; $E[$fname] = '<span class="err">'.$fmFval['titl'].'は最低ひとつ選択してください。</span><br />'; }
			elseif($fmFval['hiss'] == 1 and $F[$fname] == "" and $fmFval['type'] == "radio"){ $ERR = 1; $E[$fname] = '<span class="err">'.$fmFval['titl'].'が選択されていません。</span><br />'; }
			elseif($fmFval['hiss'] == 1 and $F[$fname] == "" and $fmFval['type'] == "textarea"){ $ERR = 1; $E[$fname] = '<span class="err">'.$fmFval['titl'].'が入力されていません。</span><br />'; }
			elseif($fmFval['hiss'] == 1 and $F[$fname] == "" and $fmFval['type'] == "select"){ $ERR = 1; $E[$fname] = '<span class="err">'.$fmFval['titl'].'が選択されていません。</span><br />'; }
		
			if(isset($fmFval['reml'])){
				$remlnom = $fmFval['reml'];
				$motomail = $FORM[$remlnom]['name'];
				if($F[$motomail] != $F[$fname]){
					$ERR = 1; $E[$fname] = '<br /><span class="err">'.$fmFval['titl'].'の最入力値が一致しません。</span>';
				}
			}
		}
		
		if($_POST['submit'] == $registBtn){
			
			$ima_time = time();
			$maildate = "■ 送信時刻\n".date("Y年m月d日 H:i:s",$ima_time)."\n\n";
			
			//件名表示
			$mailSubject1 = $subject;
			$mailSubject2 = $resubject;
			
			//送信者情報
			$useragents = $_SERVER['HTTP_USER_AGENT'];
			$ip = $_SERVER['REMOTE_ADDR'];
			$host = gethostbyaddr($ip);
			
			$sosinjoho = "■ 送信者情報\n{$ip}\n{$host}\n{$useragents}\n";
			
			$mail_cont = "";
			foreach($FORM as $fmMkey => $fmMval){
				$mname = $fmMval['name'];
				if($fmMval['type'] == "checkbox"){
					$mail_cont .= '■ '.$fmMval['titl']."\n".implode("\n",$F[$mname])."\n\n";
				}elseif($fmMval['type'] == "date"){
					$mail_cont .= '■ '.$fmMval['titl']."\n".$F[$mname.'_y']."年".$F[$mname.'_m']."月".$F[$mname.'_d']."日"."\n\n";
				}else{
					if(!$fmMval['reml']){
						$mail_cont .= '■ '.$fmMval['titl']."\n".$F[$mname]."\n\n";
					}
				}
			}
			
			$froms = ($rtnmail_add != "")? $rtnmail_add : $mailFrom;
			
			$mailMessage1 = $mailHeader."\n".$mail_cont."\n".$maildate.$sosinjoho.$mailFooter;
			$mailMessage2 = $mailReturnHeader."\n".$mail_cont."\n".$maildate.$mailReturnFooter;
			
			if(!sendMails($mailTo,$mailSubject1,$mailMessage1,$froms)){
				exit("<b style='calue:red;'>送信エラーです。しばらく経ってからもう一度登録し直してください。</b><br><a href='index.html'>戻る</a>");
			}
			if($mailReturn and $rtnmail_add != ""){
				
				if(!sendMails($rtnmail_add,$mailSubject2,$mailMessage2,$mailFrom)){
					exit("<b style='calue:red;'>送信エラーです。しばらく経ってからもう一度登録し直してください。</b><br><a href='index.html'>戻る</a>");
				}
			}
			list($tobifile,$dami) = explode(".",$selfile);
			header("location:{$tobifile}-s.html");
		}
	}
	
	if(!$ERR and $_POST['submit'] == $inputBtn){
		
		foreach($FORM as $fmVkey => $fmVval){
			$ckstr = "";
			$vname = $fmVval['name'];
			if($fmVval['type'] == "date"){
				$V[$vname] = $F[$vname.'_y'].'年'.$F[$vname.'_m'].'月'.$F[$vname.'_d'].'日<input type="hidden" name="'.$vname.'_y" value="'.$F[$vname.'_y'].'" /><input type="hidden" name="'.$vname.'_m" value="'.$F[$vname.'_m'].'" /><input type="hidden" name="'.$vname.'_d" value="'.$F[$vname.'_d'].'" />';
			}elseif($fmVval['type'] == "checkbox"){
				foreach($F[$vname] as $kyy => $vll){
					$ckstr .= '<input type="hidden" name="'.$vname.'['.$kyy.']" value="'.$F[$vname][$kyy].'" />';
				}
				$V[$vname] = implode("<br />",$F[$vname]).$ckstr;
			}elseif($fmVval['type'] == "textarea"){
				$V[$vname] = nl2br($F[$vname]).'<input type="hidden" name="'.$vname.'" value="'.$F[$vname].'">';
			}else{
				if($fmVval['reml']){
					$V[$vname] = 'OK<input type="hidden" name="'.$vname.'" value="'.$F[$vname].'">';
				}else{
					$V[$vname] = $F[$vname].'<input type="hidden" name="'.$vname.'" value="'.$F[$vname].'">';
				}
			}
		}
		$Vsubmit = '<input type="submit" name="submit" value="'.$registBtn.'" class="'.$registBtnClass.'" />&nbsp;<input type="submit" name="submit" value="'.$returnBtn.'" class="'.$returnBtnClass.'" />';
		$setcomments = $registMessage;
		
	}else{
		
		foreach($FORM as $fmPkey => $fmPval){
			$pname = $fmPval['name'];
			$points = '<div class="point">'.$fmPval['pint'].'</div>';
			if($fmPval['type'] == "text"){
				$V[$pname] = $points.'<input type="text" name="'.$pname.'" value="'.$F[$pname].'" class="'.$fmPval['clss'].'" />'.$E[$pname];
			
			}elseif($fmPval['type'] == "date"){
				$V[$pname] = $points.selectDateObject($pname.'_y',$pname.'_m',$pname.'_d',$F[$pname.'_y'],$F[$pname.'_m'],$F[$pname.'_d']);
			
			}elseif($fmPval['type'] == "textarea"){
				$V[$pname] = $points.$E[$pname].'<textarea type="text" name="'.$pname.'" class="'.$fmPval['clss'].'">'.$F[$pname].'</textarea>';
			
			}elseif($fmPval['type'] == "select"){
				$V[$pname] = $points.$E[$pname].selectObject($pname,$F[$pname],$fmPval['arry'],$fmPval['clss']);
			
			}elseif($fmPval['type'] == "checkbox"){
				$V[$pname] = $points.$E[$pname].checkObject($pname,$F[$pname],$fmPval['arry'],$fmPval['clss']);
			
			}elseif($fmPval['type'] == "radio"){
				$V[$pname] = $points.$E[$pname].radioObject($pname,$F[$pname],$fmPval['arry'],$fmPval['clss']);
			
			}
		}
		
		$Vsubmit = '<input type="submit" name="submit" value="'.$inputBtn.'" class="'.$inputBtnClass.'" />';
		$setcomments = $inputMessage;

	}

$form_inp = <<<EOM
{$setcomments}
<form action="{$selfile}" method="post">
<table class="{$tableClass}" border="0" cellpadding="0" cellspacing="0">
EOM;

	foreach($FORM as $fmDkey => $fmDval){
		$dname = $fmDval['name'];
		$hisskmk = ($fmDval['hiss'])? ' <b class="hiss">*</b> ' : '';
		$form_inp .= '<tr><th><span>'.$fmDval['titl'].$hisskmk.'</span></th><td>'.$V[$dname].'&nbsp;</td>';
	}

$form_inp .= <<<EOM
<tr>
	<td colspan="2" class="align-c">{$Vsubmit}</td>
</tr>
</table>
</form>
EOM;

}

	include_once("temp.php");
	print $value_html;

?>