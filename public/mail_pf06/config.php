<?php

//タイトルタグ
$titletag = "お問い合わせ";

//文字コード
$charset = "utf-8";

//実行ファイル名
$selfile = "index.html";

//フォームを囲っているテーブルのCSSクラス名
$tableClass = "table-form";

//必須項目のCSSクラス名
$hissClass = "hiss";

//エラー時のCSSクラス名
$errorClass = "err";

//控えのメールを送るか（送る=1 送らない=0）
$mailReturn = 0;

//件名が項目で設定されていない場合の件名
$subject = "■ご意見感想 ガールズトークラジオ「うぶだく！」【MAIL】";

//控えメールの場合
$resubject = "お問い合わせの控え【MAIL】";

//宛先
$mailTo = "pokela@instyle.vc,pokela01@breax.jp";

//送信者表示
$mailFrom = "support@pokela.jp";

//入力時ボタン
$inputBtn = "確認画面へ進む";
$inputBtnClass = "input-m";

//確認時ボタン
$registBtn = "送　信";
$registBtnClass = "input-m";

//戻るボタン
$returnBtn = "戻　る";
$returnBtnClass = "input-m";

//入力時メッセージ
$inputMessage = <<<EOM
<div class="message">
	必要項目を入力の上、「{$inputBtn}」ボタンを押してください。<br />
	<b class="{$hissClass}">*</b> は必須項目です。
</div>
EOM;

//確認時メッセージ
$registMessage = <<<EOM
<div class="message">
	入力内容を確認していただき、「{$inputBtn}」ボタンを押してください。<br />
	訂正は「{$returnBtn}」ボタンで戻って訂正ください。
</div>
EOM;

//エラー時メッセージ
$errorMessage = <<<EOM
<div class="message {$errorClass}">
	エラーが発生しています。<br />
	指示に従って、訂正ください。
</div>
EOM;

//完了時メッセージ
$endMessage = <<<EOM
<div class="message">
	<p>送信が完了しました。</p>
	<p>ご投稿ありがとうございました。</p>
	<p><a href="../index.php">TOPへ戻る</a></p>
</div>
EOM;

//送信メールヘッダー
$mailHeader = <<<EOM
ぽけら・メールが届きました。
-------------------------------
EOM;

//送信メールフッター
$mailFooter = <<<EOM
-------------------------------

EOM;

//控えメールヘッダー
$mailReturnHeader = <<<EOM
このメールはお問い合わせに送信
したメッセージの控えです。
-------------------------------
EOM;

//控えメールフッター
$mailReturnFooter = <<<EOM
-------------------------------
心当たりがない場合、以下にご返
信いただくと助かります。
{$mailTo}
EOM;



?>