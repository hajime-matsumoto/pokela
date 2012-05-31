<?php

//############### SETTING ###############
//■titl = 項目名
//■name = INPUT名
//■type
//  text = テキストボックス
//  date = 日付入力用ボックス
//  textarea = 複数行入力エリア
//  select = セレクトボックス
//  checkbox = チェックボックス
//  radio = ラジオボックス
//■hiss
//  1 = 必須項目にする
//■subj
//  1 = 送信メールの件名にする
//■rtml
//  1 = 控えを送る場合のアドレスにする
//■reml メールの再入力用 元メールの番号
//■chck チェックする内容
//  1 = メールアドレス
//  2 = URL
//  3 = 電話番号
//  4 = 郵便番号
//  5 = 半角英数字
//  6 = 半角英字
//  7 = 半角数字
//  8 = カタカナ
//  9 = ひらがな
//■lens 文字数制限
//■pint 注意文
//■clss CSSクラス名
//■arry select checkbox radio の際の項目
//#######################################

$FORM[1]['titl'] = "件名";
$FORM[1]['name'] = "kubn";
$FORM[1]['type'] = "select";
$FORM[1]['hiss'] = 1;
$FORM[1]['subj'] = 1;
$FORM[1]['clss'] = "input-mm";
$FORM[1]['arry'][1] = "■ご意見ご感想「つんつん・真利のHey!Sei-Yuu! Performer Paradise！」";
$FORM[1]['arry'][2] = "■その他「つんつん・真利のHey!Sei-Yuu! Performer Paradise！」";
$FORM[1]['arry'][3] = "■投票「榊原千佳」";
$FORM[1]['arry'][4] = "■投票「古木のぞみ」";
$FORM[1]['arry'][5] = "■投票「和田加奈子」";
$FORM[1]['arry'][6] = "■投票「小林ともよ」";
$FORM[1]['arry'][7] = "■投票「冨江由起」";
$FORM[1]['arry'][8] = "■投票「萩原美緒」";
$FORM[1]['arry'][9] = "■投票「佐々木彩乃」";
$FORM[1]['arry'][10] = "■投票「畑中彩希」";
$FORM[1]['arry'][11] = "■投票「中野奈央美」";

$FORM[2]['titl'] = "ラジオネーム";
$FORM[2]['name'] = "name";
$FORM[2]['type'] = "text";
$FORM[2]['hiss'] = 1;
$FORM[2]['lens'] = 20;
$FORM[2]['clss'] = "input-m";

$FORM[3]['titl'] = "性別";
$FORM[3]['name'] = "retn";
$FORM[3]['type'] = "radio";
$FORM[3]['hiss'] = 1;
$FORM[3]['clss'] = "input-ck";
$FORM[3]['arry'][1] = "男性";
$FORM[3]['arry'][2] = "女性";
$FORM[3]['arry'][3] = "ないしょ";

$FORM[4]['titl'] = "メールアドレス";
$FORM[4]['name'] = "mail";
$FORM[4]['type'] = "text";
$FORM[4]['hiss'] = 1;
$FORM[4]['rtml'] = 1;
$FORM[4]['chck'] = 1;
$FORM[4]['lens'] = 100;
$FORM[4]['clss'] = "input-l";

$FORM[5]['titl'] = "メールアドレス（確認用）";
$FORM[5]['name'] = "kmail";
$FORM[5]['type'] = "text";
$FORM[5]['hiss'] = 1;
$FORM[5]['reml'] = 4;
$FORM[5]['chck'] = 1;
$FORM[5]['lens'] = 100;
$FORM[5]['clss'] = "input-l";

$FORM[6]['titl'] = "内容";
$FORM[6]['name'] = "naiyo";
$FORM[6]['type'] = "textarea";
$FORM[6]['hiss'] = 1;
$FORM[6]['lens'] = 3000;
$FORM[6]['clss'] = "input-ll";




?>