<?php 
include_once 'functions.php';

require_once "ua.class.php";
$ua = new UserAgent();
if($ua->set() === "mobile") {
//この中のコードはスマホにのみ適用

include_once( "hp/index.php");

}elseif($ua->set() === "tablet"){
//この中のコードはタブレットにのみ適用
}else{
//この中のコードはスマホとタブレット以外に適用
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="robots" content="index,follow">
	<meta name="description" content="在宅訪問マッサージの「あいの訪問マッサージサービス」です。国家資格保持の訪問臨床経験豊富なスタッフがご自宅までお伺い致します。">
	<meta name="keywords" content="訪問リハビリ,在宅訪問マッサージ ,在宅マッサージ,堺,大阪市,東住吉区,住吉区,平野区,生野区,阿倍野区,天王寺区,東淀川区">
	<meta name="copyright" content="(C) あいの訪問マッサージサービス All Rights Reserved.">
	<meta name="author" content="ainohoumon.com">
	<meta name="revisit-after" content="7 days">
	<title>在宅訪問マッサージ  | リハビリマッサージ | あいの訪問マッサージサービス（大阪市）</title>
	<script language="JavaScript"> 
		function mouseOver(obj, filename){
			obj.src = filename;
		}
		function mouseOut(obj, filename){
			obj.src = filename;
		}
	</script>
	<style type="text/css">
		
		.style4 {
			font-size: 2;
			font-family: "メイリオ","ＭＳ ゴシック", Osaka, "ヒラギノ角ゴ Pro W3"; 
		}
		
		.style8{
			font-size: 12px;
			margin-left: 10px;
			font-family: "メイリオ","ＭＳ ゴシック", Osaka, "ヒラギノ角ゴ Pro W3"; 
			color: blue;
		}

		.style9 {
			font-size: 12px;
			font-family: "メイリオ","ＭＳ ゴシック", Osaka, "ヒラギノ角ゴ Pro W3"; 
		}
		
		.style10{
			font-size: 12px;
			margin-left: 10px;
			font-family: "メイリオ","ＭＳ ゴシック", Osaka, "ヒラギノ角ゴ Pro W3"; 
			color: red;
		}
		
7		.style11{
			font-size: 20px;
			margin-left: 10px;
			font-family: "メイリオ","ＭＳ ゴシック", Osaka, "ヒラギノ角ゴ Pro W3"; 
		}
		
		.style12{
			font-size: 12px;
			margin-left: 10px;
			font-family: "メイリオ","ＭＳ ゴシック", Osaka, "ヒラギノ角ゴ Pro W3"; 
		}
		
		.style13 {
			font-size: 18px; 
			font-family: "メイリオ","ＭＳ ゴシック", Osaka, "ヒラギノ角ゴ Pro W3"; 
		}
		.style14 {
			font-size: 36px; 
			font-family: "メイリオ","ＭＳ ゴシック", Osaka, "ヒラギノ角ゴ Pro W3"; 
		}
		
		.footer {
				font-family: "メイリオ","ＭＳ ゴシック", Osaka, "ヒラギノ角ゴ Pro W3";
				font-size: 14px;
		}
		h1 {
			font-family: "メイリオ","ＭＳ ゴシック", Osaka, "ヒラギノ角ゴ Pro W3"; 
			font-size: 11px;
			font-weight: normal;
			margin-right: 0px;
			margin-bottom: 0px;
			margin-left: 0px;
		}
	</style>
	
	<link rel="stylesheet" type="text/css" href="css/<?php echo browserCheck();?>" media="all">
</head>
<body>
<span itemscope itemtype="http://schema.org/LocalBusiness"><div align="center" id="container">
<table border="0" cellspacing="0" cellpadding="0" class="lr_borders" summary="表">
<tr>
	<td valign="top">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" summary="表">
	<!-- header start -->
	<?php require_once 'header.php';?>
	<!-- header end -->
	<!-- Content Part Start -->
	<tr>
	<!-- 左サイドメニュー Start-->
		<td valign="top" class="smenus" width="100%">
			<table summary="表">
			<tr>
			<td>
			<?php require_once 'side_menu.php';?>
			</td>
			</tr>
			</table>
		</td>
	<!-- 左サイドメニュー End-->

	<!-- Contents start-->
		<td valign="top" class="conts">
			<table align="left" border="0" width="100%" summary="表">

			<tr>
				<td colspan="2" align="center">
					<a href="soudan.php">
						<img border="0" src="images/top20140626.png" width="650px" alt="あいの訪問マッサージサービス">
						<!--<img border="0" src="images/top20140306.png" width="650px" alt="あいの訪問マッサージサービス">-->
						<!--<img border="0" src="images/top20110930.png" width="650px" alt="あいの訪問マッサージサービス">-->
					</a>
				</td>
			</tr>

<!--
			<tr>
				<td colspan="2" align="center">
					<a href="2012paper.php">
						<img border="0" src="images/top_media.png" width="650px" alt="メディア掲載情報のお知らせ">
					</a>
				</td>
			</tr>
-->

<!--
			<tr>
				<td colspan="2" align="center">
					<p align="center"><a href="soudan.php"><img border="0" src="images/hooter.png" alt="電話番号： 0120-931-397"/></a></p>
				</td>
			</tr>
-->

<!--
			<tr>
				<td align="left" height="400">
					<span class="style10">
						日本訪問マッサージ協会が認定治療院として設けている<br />
						「最低限クリアすべき７つの基準 」<br />
					</span>
					<span class="style12">
						当院はすべてをクリアし認定治療院として登録されました。<br />
						<br />
					</span>
					<span class="style8">
						★日本訪問マッサージ協会が設けている<br />
						&nbsp;&nbsp;&nbsp;&nbsp;最低限クリアすべき７つの基準★<br />
					</span>
					<span class="style12">
						<br />
						１：施術者はマッサージ又は鍼灸の国家資格を保持している<br />
						２：患者様思いで、患者様が不快に思う行為はしない<br />
						３：ご依頼頂いた患者様への治療は、責任を持って行う<br />
						４：水増し請求などの一切の不正行為は行わない<br />
						５：万が一の施術中の事故を保証できる<br />
						&nbsp;&nbsp;&nbsp;&nbsp;「賠償保険」（東京海上日動火災保険）に加入している<br />
						６：万が一クレームがあった際は、責任を持って対処する<br />
						７：患者様の個人情報を厳守し、<br />
						&nbsp;&nbsp;&nbsp;&nbsp;患者様の許可なく外部に漏らさない<br />
					</span>
				</td>
				<td align="center" valing="top">
						<img border="0" src="images/nintei.jpg" width="300" alt="認定証">
				</td>
			</tr>
-->

<!--
			<tr>
				<td align="center">
					<a href="voice.php">
						<img border="0" src="images/top_voice.png" width="325px" alt="患者様のお声">
					</a>
				</td>
				<td align="center">
					<a href="sezyutu.php">
						<img border="0" src="images/sejutsu.png" width="325px" alt="施術風景">
					</a>
				</td>
			</tr>
-->

<!--
			<tr>
				<td colspan="2" align="center">
					<p align="center"><a href="soudan.php"><img border="0" src="images/hooter.png" alt="電話番号： 0120-931-397"/></a></p>
				</td>
			</tr>
-->

			<tr>
				<td colspan="2" align="center">
					<img src="gif/main.gif" width="650px" alt="院長施術風景">
				</td>
			</tr>

			<tr>
				<td colspan="2" align="center">
					<a href="2015nintei.php">
						<img border="0" src="images/2015ninteipic.png" width="650" height="289" alt="認定治療院">
					</a>
				</td>
			</tr>

			<tr>
				<td colspan="2" align="center">
					<img border="0" src="images/meritto.png" width="650px" alt="訪問マッサージのメリット">
				</td>
			</tr>

			<tr>
				<td colspan="3" align="left">
					<span class="style4">
						<span class="style9">
							<div id="images">
								<img src="images/Subtitle_Rehabil.png" alt="リハビリマッサージとは？" width="627"><br>
							</div>
						</span>
					</span>
					<span class="style11">
						<br>
						&nbsp;&nbsp;&nbsp;&nbsp;訪問リハビリ・マッサージは、基本的な適応症状は有りますが、<br>
						&nbsp;&nbsp;&nbsp;&nbsp;自力で通院困難な方が対象となります。 <br>
						&nbsp;&nbsp;&nbsp;&nbsp;通院が困難な方が、ご自宅や老人ホームなどに居ながらにして<br>
						&nbsp;&nbsp;&nbsp;&nbsp;マッサージやリハビリを受けることができるサービスです。 <br>
						<br>
						&nbsp;&nbsp;&nbsp;&nbsp;医師の同意（許可）の下、<b><u>医療保険</u></b>を使用した少ないご負担で、 <br>
						&nbsp;&nbsp;&nbsp;&nbsp;患者様のご希望・症状・体調などに合わせた<br>
						&nbsp;&nbsp;&nbsp;&nbsp;施術を継続的に行ないます。 <br>
						<br>
						&nbsp;&nbsp;&nbsp;&nbsp;できることを少しずつ・楽しく・気持ちよくをモットーに、 <br>
						&nbsp;&nbsp;&nbsp;&nbsp;何より患者様のご希望を最優先に施術にあたります。 <br>
						<br>
						<img src="images/shoujo.png" width="300" border="0" alt="参考病名・症状">
						<br>
						&nbsp;&nbsp;&nbsp;&nbsp;◆<a href="001_nokosoku.php">脳卒中(脳塞栓、脳溢血、脳血栓)後遺症</a><br>
						&nbsp;&nbsp;&nbsp;&nbsp;◆<a href="005_noshuketu.php">脳内出血後遺症</a><br>
						&nbsp;&nbsp;&nbsp;&nbsp;◆<a href="002_haiyou.php">廃用症候群</a><br>
						&nbsp;&nbsp;&nbsp;&nbsp;◆<a href="003_als.php">筋萎縮性側索硬化症（ＡＬＳ）</a><br>
						&nbsp;&nbsp;&nbsp;&nbsp;◆<a href="004_skaries.php">脊椎カリエス</a><br>
						&nbsp;&nbsp;&nbsp;&nbsp;◆<a href="006_zakotsu.php">坐骨神経痛</a><br>
						&nbsp;&nbsp;&nbsp;&nbsp;◆<a href="007_henkei.php">変形性脊椎症</a><br>
						&nbsp;&nbsp;&nbsp;&nbsp;◆<a href="008_parkin.php">パーキンソン病、症候群</a><br>
						&nbsp;&nbsp;&nbsp;&nbsp;◆<a href="009_igan.php">がん術後（胃がん）</a><br>
						&nbsp;&nbsp;&nbsp;&nbsp;◆<a href="010_riumachi.php">リウマチ、関節リウマチ</a><br>
						&nbsp;&nbsp;&nbsp;&nbsp;◆<a href="011_kossetsu.php">大腿骨頸部骨折による後遺症</a><br>
						<br>
						&nbsp;&nbsp;&nbsp;&nbsp;◆血行促進、血行改善&nbsp;&nbsp;◆拘縮、マヒ<br>
						&nbsp;&nbsp;&nbsp;&nbsp;◆通院困難、歩行困難&nbsp;&nbsp;◆脊髄損傷後遺症<br>
						&nbsp;&nbsp;&nbsp;&nbsp;◆筋萎縮、筋麻痺<br>
						&nbsp;&nbsp;&nbsp;&nbsp;◆関節拘縮、拘縮予防<br>
						&nbsp;&nbsp;&nbsp;&nbsp;◆その他持病のため日常生活動作が困難な方<br>
						<br>
						&nbsp;&nbsp;※適応・不適応がわからない方は、お気軽にお電話にてお尋ね下さい。
					</span>
					<br>
					<p align="center"><a href="tel:0120-931-397"><img border="0" src="images/hooter.png" alt="電話番号： 0120-931-397"/></a></p>
				</td>
			</tr>

			<tr>
				<td colspan="3" align="left" height="80">
					<span class="style9"><img src="images/infotitle.png" width="600" height="52" alt="あいの訪問マッサージサービス"/></span>
				</td>
			</tr>


			<tr>
				<td colspan="3" valign="top">
					<table border="0" summary="お知らせ">

						<tr>
							<td valign="top">
								<span class="style12">
								2015.10.21
								</span>
							</td>
							<td align="left">
								<span class="style12">
								<a href="http://ainohoumon.com/voice.php">お客様のお声を更新しました。</a>
								<img src="images/husen_02.gif" alt="あいの訪問マッサージサービス" height="15"/>
							</span>
							</td>
						</tr>
						<tr>
							<td valign="top">
								<span class="style12">
								2015.09.18
								</span>
							</td>
							<td align="left">
								<span class="style12">
								<a href="http://ainohoumon.com/2015member.php">先生方（スタッフ）と記念ショット！</a>
							</span>
							</td>
						</tr>
						<tr>
							<td valign="top">
								<span class="style12">
								2015.06.19
								</span>
							</td>
							<td align="left">
								<span class="style12">
								<a href="http://ainohoumon.com/voice.php">お客様のお声を更新しました。</a>
							</span>
							</td>
						</tr>
						<tr>
							<td valign="top">
								<span class="style12">
								2015.04.03
								</span>
							</td>
							<td align="left">
								<span class="style12">
								<a href="http://ainohoumon.com/news2015.php">大阪ハーフマラソン大会！</a>
							</span>
							</td>
						</tr>
						<tr>
							<td valign="top">
								<span class="style12">
								2015.03.23
								</span>
							</td>
							<td align="left">
								<span class="style12">
								<a href="http://ainohoumon.com/voice.php">お客様のお声を更新しました。</a>
							</span>
							</td>
						</tr>
						<tr>
							<td valign="top">
								<span class="style12">
								2015.03.07
								</span>
							</td>
							<td align="left">
								<span class="style12">
								<a href="http://ainohoumon.com/boshuu.php">マッサージ師募集のページを更新しました。</a>
							</span>
							</td>
						</tr>
						<tr>
							<td valign="top">
								<span class="style12">
								2014.12.11
								</span>
							</td>
							<td align="left">
								<span class="style12">
								<a href="http://ainohoumon.com/voice.php">お客様のお声を更新しました。</a>
							</span>
							</td>
						</tr>
						<tr>
							<td valign="top">
								<span class="style12">
								2014.11.01
								</span>
							</td>
							<td align="left">
								<span class="style12">
								<a href="http://ainohoumon.com/voice.php" target="_blank">お客様のお声（動画）を更新しました。</a>
								</span>
							</td>
						</tr>
						<tr>
							<td valign="top">
								<span class="style12">
								2014.10.01
								</span>
							</td>
							<td align="left">
								<span class="style12">
								<a href="http://ainohoumon.com/voice.php" target="_blank">お客様のお声を更新しました。</a>
								</span>
							</td>
						</tr>
						<tr>
							<td valign="top">
								<span class="style12">
								2014.06.15
								</span>
							</td>
							<td align="left">
								<span class="style12">
								<a href="http://ainohoumon.com/2014seminar.php" target="_blank">【訪問】鍼灸師・マッサージ師向けセミナー「なぜ利用者開拓が上手くいかないのか？」</a>
								</span>
							</td>
						</tr>
						<tr>
							<td valign="top">
								<span class="style12">
								2014.05.28
								</span>
							</td>
							<td align="left">
								<span class="style12">
								<a href="http://ainohoumon.com/voice.php" target="_blank">お客様のお声を更新しました。</a>
								</span>
							</td>
						</tr>
						<tr>
							<td valign="top">
								<span class="style12">
								2014.04.02
								</span>
							</td>
							<td align="left">
								<span class="style12">
								<a href="http://ainohoumon.com/voice.php" target="_blank">お客様のお声（動画）を更新しました。</a>
								</span>
							</td>
						</tr>
						<tr>
							<td valign="top">
								<span class="style12">
								2014.02.05
								</span>
							</td>
							<td align="left">
								<span class="style12">
								<a href="http://ainohoumon.com/hp/archives/446" target="_blank">訪問エリアに堺市が加わりました。</a>
								</span>
							</td>
						</tr>
						<tr>
							<td valign="top">
								<span class="style12">
								2014.02.05
								</span>
							</td>
							<td align="left">
								<span class="style12">
								<a href="http://relax-job.com/shop/005329/" target="_blank">求人募集：リジョブ掲載について</a>
								</span>
							</td>
						</tr>
						<tr>
							<td valign="top">
								<span class="style12">
								2014.02.01
								</span>
							</td>
							<td align="left">
								<span class="style12">
								<a href="http://ainohoumon.com/boshuu.php">求人募集（あん摩マッサージ指圧師）について</a>
								</span>
							</td>
						</tr>
						<tr>
							<td valign="top">
								<span class="style12">
								2014.01.01
								</span>
							</td>
							<td align="left">
								<span class="style12">
								<a href="2014nintei.php">2014年も引き続き認定治療院に認定されました。</a>
							</span>
							</td>
						</tr>


					</table>
				</td>
			</tr>


			<tr>
				<td align="left">
					<span class="style11">
						<a href="news.php">過去のお知らせ</a>
					</span>
				</td>
				<td align="right">
					<span class="style4">
						<a href="http://relax-job.com/massageshi/" target="_blank">リジョブマッサージ師</a>
					</span>
				</td>
			</tr>

		</table>
	</td>
<!-- Contents End-->
	</tr>
<!-- Content Part  End-->
	</table>
</td>
</tr>
</table>
</div>


<!-- footer start -->
<?php require_once 'footer.php';?>
<!-- footer end -->

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