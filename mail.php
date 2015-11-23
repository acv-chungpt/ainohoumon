<?php
//To メールID
$to =$_POST['mail'];
//件名
$subject = '【あいの訪問マッサージサービス】お問い合わせ';
//メッセージ
$message="この度は、「あいの訪問マッサージサービス」のホームページより\n";
$message.="お問い合わせ頂き、ありがとうございます。\n\n";
//お名前 
$message.="「お問い合わせ内容」"."\n";
$message.="お名前 :".$_POST['fullname']."\n";
//ご住所
$message.="ご住所 :".$_POST['office']."\n";
//メール
$message.="メール  :".$_POST['mail']."\n";
//お電話番号 
$message.="お電話番号 :".$_POST['telephone']."\n";
//内容・症状 
$message.="内容・症状   :".$_POST['contents']."\n\n";

//内容
$message.="私どもより、追って再度連絡させて頂きます。"."\n\n";
$message.="あいの訪問マッサージサービス"."\n";
$message.="院長　喜多"."\n\n";

$message.="*－－－－－－－－－－*"."\n";
$message.="URL:http://ainohoumon.com"."\n";
$message.="TEL:0120-931-397"."\n";
$message.="Mail:kisei.gz21@iris.eonet.ne.jp"."\n";
$message.="*－－－－－－－－－－*"."\n";

$message = mb_convert_encoding($message, "ISO-2022-JP", "auto");

$from = "kisei.gz21@iris.eonet.ne.jp";
	
$headers .= "From: " . $from . "\r\n";
$headers .= 'bcc: senshiki@gmail.com' . "\r\n";

mb_language("ja");
$subject = mb_convert_encoding($subject, "ISO-2022-JP","AUTO");
$subject = mb_encode_mimeheader($subject);

//メール送るのPHP機能
if (mail($to, $subject, $message, $headers)) 
	{header("location:thanks.php"); 
   } 
else{
   }	
?>
