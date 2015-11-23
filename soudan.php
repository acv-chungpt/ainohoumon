<?php 
include_once 'functions.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="robots" content="index,follow" />
	<meta name="description" content="在宅訪問マッサージの「あいの訪問マッサージサービス」です。お問い合わせはこちら。" />
	<meta name="keywords" content="お問い合わせ,在宅訪問マッサージ ,在宅マッサージ,大阪,大阪市,東住吉区,住吉区,平野区,生野区,阿倍野区,天王寺区,東淀川区" />
	<meta name="copyright" content="(C) あいの訪問マッサージサービス All Rights Reserved." />
	<meta name="author" content="ainohoumon.com" />
	<meta name="revisit-after" content="7 days" />
	<title>お問い合わせ・ご相談 | あいの訪問マッサージサービス（大阪市）</title>

	<script type="text/javascript">

function mouseOver(obj, filename){
	obj.src = filename;
}
function mouseOut(obj, filename){
	obj.src = filename;
}

</script>
<link rel="stylesheet" type="text/css" href="css/<?php echo browserCheck();?>" media="all" />
    <style type="text/css">
<!--
.style1 {
font-family: "メイリオ","ＭＳ Ｐゴシック", Osaka, "ヒラギノ角ゴ Pro W3";
font-size: 18px;
}

 .footer
 {
	font-family: "メイリオ","ＭＳ Ｐゴシック", Osaka, "ヒラギノ角ゴ Pro W3";
	font-size: 14px;
 }
 
h1 {
	font-family: "メイリオ","ＭＳ Ｐゴシック", Osaka, "ヒラギノ角ゴ Pro W3";
	font-size: 11px;
	font-weight: normal;
	margin-right: 0px;
	margin-bottom: 0px;
	margin-left: 0px;
}
-->
    </style>
</head>
<body>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

	//値取得
	$fullname = htmlspecialchars($_POST['fullname']);
	$office = htmlspecialchars($_POST['office']);
	$mail = htmlspecialchars($_POST['mail']);
	$telephone = htmlspecialchars($_POST['telephone']);
	$contents = htmlspecialchars($_POST['contents']);
	//エラーフラグ
	$errflg = 0;
	//エラーメッセージ
	$errmsg = array();

	//エラーチェック
	if(strlen($fullname) == 0){
		$errmsg[] = "[お名前]";
	}
	if(strlen($office) == 0){
		$errmsg[] = "[ご住所]";
	}
	if(strlen($mail) == 0){
		$errmsg[] = "[メールアドレス]";
	}
	if(strlen($telephone) == 0){
		$errmsg[] = "[お電話番号]";
	}
	if(strlen($contents) == 0){
		$errmsg[] = "[内容・症状]";
	}
	if(count($errmsg) != 0){
		$errflg = 1;
	}

	if($errflg == 0){
		//件名
		$subject = '【あいの訪問マッサージサービス】お問い合わせ内容について';
		//メッセージ
		$message="この度は、「あいの訪問マッサージサービス」のホームページより\n";
		$message.="お問い合わせ頂き、ありがとうございます。\n\n";
		//お名前
		$message.="「お問い合わせ内容」"."\n";
		$message.="お名前 :". $fullname . "\n";
		//ご住所
		$message.="ご住所 :". $office . "\n";
		//メール
		$message.="メール  :". $mail . "\n";
		//お電話番号
		$message.="お電話番号 :". $telephone . "\n";
		//内容・症状
		$message.="内容・症状   :" . $contents . "\n\n";

		//内容
		$message.="私どもより、追って再度連絡させて頂きます。"."\n\n";
		$message.="あいの訪問マッサージサービス"."\n";
		$message.="喜多"."\n\n";

		$message.="*－－－－－－－－－－*"."\n";
		$message.="URL:http://ainohoumon.com"."\n";
		$message.="TEL:0120-931-397"."\n";
		$message.="Mail:info@ainohoumon.com"."\n";
		$message.="*－－－－－－－－－－*"."\n";

		$message = mb_convert_encoding($message, "ISO-2022-JP", "auto");

		$from = "kisei.gz21@iris.eonet.ne.jp";

		$headers .= "From: " . $from . "\r\n";
		$headers .= 'bcc: senshiki@gmail.com' . "\r\n";

		mb_language("ja");
		$subject = mb_convert_encoding($subject, "ISO-2022-JP","AUTO");
		$subject = mb_encode_mimeheader($subject);

		if (mail($mail, $subject, $message, $headers))
			{header("location:thanks.html");
		}else{

		}
	}
}

//初期表示とエラー時に表示
if($_SERVER["REQUEST_METHOD"] != "POST" || $errflg == 1){
?>

<!----------------------
	HTML開始
----------------------->
<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">


<div align="center" id="container">
<table width="838" border="0" cellspacing="0" cellpadding="0" height="100%">
<tr>
	<td valign="top">
<!-- header start -->
	<table width="838" border="0" cellspacing="0" cellpadding="0" height="100%">
<!-- header start -->
	<?php include_once 'header.php';?>
<!-- header end -->

	<!-- Content Part Start -->
<tr>
<!--	<td valign="top" width="19"background="images/side-l.jpg"></td>-->
	<!-- 左サイドメニュー Start-->
	<td  valign="top" class="smenus">
		<?php require_once 'side_menu.php';?>
	</td>
	<!-- 左サイドメニュー End-->

	<!-- Contents start-->
	<td valign="top" class="conts">
		<table width="100%">
				<tr>
					<td colspan="5" align="center">
						<img border="0" src="images/top.png" width="650px" />
					</td>
				</tr>
				<tr>
					<td colspan="5" valign="top">
						<br/>
						<img src="images/Subtitle_mail_input.png" width="660" />
					</td>
				</tr>
				<tr>
					<td colspan="5" align="left" style="padding-left:30px;">
					<br />
				    <span class="style1">弊社サービスをご検討のケアマネージャーの方々、
				    <br />
					在宅患家の皆様、まずは、お気軽にお問い合わせください。
					<br />
					専門のスタッフが対応いたします。</span>					<?php
					if(count($errmsg) != 0){
						/*******************************************
						* エラーメッセージを表示
						*******************************************/
						echo "<br /><br />";
						echo "<font size=\"2\" color=\"red\" >";
						foreach($errmsg as $key){
							echo $key . " ";
						}
						echo "が入力されていません。";
						echo "</font>";
					}
					?>
					</td>
				</tr>

				<tr>
					<td align="left" style="padding-left:30px;" width="530" >
			 			<table 	style="border: 1px; border-color: #d2d2d2; border-style: solid;" cellpadding="5" cellspacing="1" bgcolor="#e7e7e7" width="100%">

							<tr bgcolor="white">
								<td width="133">
									<span class="style1">お名前</span>
								</td>
								<td width="395">
									<span class="style1">
									<input type="text" name="fullname" size="40" style="ime-mode: active;" id="fullname" class="required" value="<?php echo $fullname?>" />
									<br /><font  color="red" >※必須項目</font>
									</span>
								</td>
							</tr>

							<tr bgcolor="white">
								<td width="133">
									<span class="style1">ご住所</span>
								</td>
								<td width="395">
									<span class="style1">
									<input type="text" name="office" size="40" style="ime-mode: active;" id="office" class="required" value="<?php echo $office?>"/>
									<br /><font color="red" >※必須項目</font>
									</span>
								</td>
							</tr>

							<tr bgcolor="white">
								<td width="133">
									<span class="style1">メールアドレス</span>
								</td>
								<td width="395">
									<input type="text" name="mail" size="40" style="ime-mode: disabled;" id="mail" class="required" value="<?php echo $mail?>" />
									<br />
									<span class="style1">
									<br /><font color="red" >※必須項目</font>
									</span
								</td>
							</tr>

							<tr bgcolor="white">
								<td width="133">
									<span class="style1">お電話番号</span>
								</td>
							  <td>
									<input type="text" name="telephone" size="40" style="ime-mode: disabled;" id="telephone" class="required" value="<?php echo $telephone?>" />
								  <span class="style1">
								  <br /><font color="red" >※必須項目</font></span>
								</td>
							</tr>

							<tr bgcolor="white">
								<td width="133">
									<span class="style1">内容・症状<br />（無料体験・無料相談もこちらに入力して下さい。）</span>
								</td>
								<td>
									<textarea name="contents" rows="8" cols="40" style="ime-mode: active;" id="contents" class="required" value="<?php echo $contents?>" ></textarea>
									<br />
									<font color="red" class="style1" >※必須項目</font>
								</td>
							</tr>

							<tr bgcolor="white">
								<td colspan="2" align="center" style="padding-left:110px;"  valign="top">
 									<input type="image" src="images/bt_contact_on.jpg" onmousemove="mouseOver(this, 'images/bt_contact.jpg')" onmouseout="mouseOut(this, 'images/bt_contact_on.jpg')"/>
 									&nbsp;&nbsp;&nbsp;<img src="images/bu03_01.png" />
								</td>
							</tr>
							
						</table>
					</td>
				</tr>

				<tr>
					<td colspan="5" align="left" style="padding-left:30px;">
					<a href="tel:0120-931-397"><img src="images/tel.png" width="600px" /></a>
					<br />
					<br />
				    <span class="style1">※フォームがうまく作動しない等の場合は、お手数ですが
				    <br />
					E-mail （ kisei.gz21@iris.eonet.ne.jp ） までご連絡ください。
				 	<br />
				 	<br />
					※個人情報の取り扱いについて当事業所では、業務上知り得た<br />
					利用者及びその家族等に関する個人情報を、正当な理由なく<br /><span class="style1">第三者に漏らすことはありません。</span>
				 	<br /><br />
					※適切な介護保険サービス利用のため、市町村、
					<br />
					居宅介護支援事業所、その他介護保険事業所、
					<br />
					医療機関等への情報提供については、利用者及び<br />その家族から予め同意を得て行います。
					<br />
				 	<br />
					※個人情報の保護については、当事業所利用終了後も<br />同様の取り扱いとなります。
				 	</span><br />
				 	<br />
					</td>
				</tr>

				<tr>
					<td colspan="5" align="center">
						<img border="0" src="images/soudanimg.png" width="650px" />
					</td>
				</tr>


		</table>
		</td>
<!-- Contents End-->
<!--	<td valign="top" width="19" background="images/side-r.jpg">&nbsp;</td>-->
</tr>
<!-- Content Part  End-->
</table>

</td>

<!--<td valign="top" width="19" background="images/side-r.jpg"></td>-->
<!--		<td valign="top" class="bordertops">-->
<!--			<div class="rborder"></div>-->
<!--		</td>-->

</tr>


</table>
</div>

<div id="container1">
	<!-- footer -->
	<?php require_once 'footer.php';?>
	<!-- footer end -->
</div>


</form>

<?php
}
?>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-9242790-21");
pageTracker._trackPageview();
} catch(err) {}
</script>

</body>
</html>
