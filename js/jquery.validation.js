/*---------------------------------------------------------------

 jQuery.validation.js - ver 1.2.3
 
 jQuery required (tested on version 1.3.2)
 encoding UTF-8

 Copyright (c) 2008 nori (norimania@gmail.com)
 5509 - http://moto-mono.net
 Licensed under the MIT
 
 Document Archive:
 http://moto-mono.net/2008/08/22/realtimeformvalidation.html

 $Update: 2009-08-28 09:07
 $Date: 2008-08-20 20:00
 
 ----------------------------------------------------------------*/
 
(function($j){

	// エラーチップ関連
	$j.tip = {
		create: function(id,val,tipPos,tipTop,tipLeft){
			var tip = document.createElement("div");
			$j(tip).addClass("validationTip").attr("id",id+"_tip")
			
			// オプションでチップの位置を決める
			var getPos = function(){
				var pos = $j("#"+id).offset(),
					rPos = {},
					requestPos = function(top,left){
						rPos.top = top+tipTop+pos.top;
						rPos.left = left+tipLeft+pos.left;
					}
					
				switch(tipPos){
					case "top":
						requestPos(0,0);
						break;
					case "bottom":
						requestPos($j("#"+id).height(),0);
						break;
					case "even":
						requestPos(0,tipLeft);
						break;
					default:
						requestPos(0,$j("#"+id).width());
						break;
				}
				return rPos;
			}
			var rPos = getPos();
			
			/* 以下のようなHTMLを掃き出す -- 空要素はデザイン用
			<div class="validationTip">
				<div class="tipInner">--Message--</div>
				
				<div class="tipRt" />
				<div class="tipRb" />
			</div>
			*/
			$j(tip).append("<div class='tipInner'>"+val+"</div><div class='tipRt'></div><div class='tipRb'></div>")
				.hide().css({
					position: "absolute",
					top: rPos.top,
					left: rPos.left
				});
			$j("body").append(tip);
			
			$j(window).resize(function(){
				var rPos = getPos();
				$j(tip).css({
					top: rPos.top,
					left: rPos.left
				});
			});
		},
		msg: function(id,msg){
			$j("#"+id+"_tip .tipInner").html(msg); // 文字列かHTMLを渡す
		},
		fadeIn: function(id){$j("#"+id+"_tip").fadeIn("normal");},
		fadeOut: function(id){$j("#"+id+"_tip").fadeOut("normal");}
	}
	
	// エラーダイアログ関連
	$j.dialog = {
		ids: {
			mat: "dlgmat",
			me: "dlg",
			top: "dlgtop",
			cont: "dlgcont",
			btm: "dlgbtm",
			close: "close"
		},
		create: function(msgs){
			var dialogMat = document.createElement("div");
			var dialog = document.createElement("div");
			var closeBtn = document.createElement("span");
			var id = $j.dialog.ids;
			var clearDialog = function(){
				$j(dialog).fadeTo(1,0).hide();
				$j(dialogMat).fadeTo(1,0).hide();
				
				// IE6でselectとobjectが全面に来る対策 - 表示
				$j("select:hidden,object:hidden").css("visibility","visible");
			}
			$j("body").keyup(function(e){if(e.keyCode==27) clearDialog();});
			$j(dialogMat).attr("id",id.mat).hide().fadeTo(1,0).click(function(){clearDialog();});
			$j(closeBtn).attr("id",id.close).click(function(){clearDialog();})
				.hover(function(){$j(this).addClass("hover");},function(){$j(this).removeClass("hover");});
				
			/* 以下のようなHTMLを掃き出す -- span以外の空要素はデザイン用
			<div id="digmat" />
			<div id="dlg">
				<div id="dlgtop" />
				<div id="dlgcont">
					<div>
						<span>--Message--</span>
					</div>
				</div>
				<div id="dlgbtm" />
				<span id="close" title="--Message--" />
			</div>
			*/
			$j(dialog).append("<div id='"+id.top+"'></div><div id='"+id.cont+"'><div><span></span></div></div><div id='"+id.btm+"'></div>");
			$j("body").append(dialogMat).append(dialog);
			var d = {
				width: $j(dialog).width(),
				height: $j(dialog).height()
			}
			$j(dialog).attr("id",id.me).append(closeBtn);
			$j("div span","#"+id.cont).html(msgs);
			
			// div要素を一度inlineにして、文字列の幅と高さを得る
			$j(dialog).css("display","inline");
			$j("div",dialog).css("display","inline");
			$j("div","#"+id.cont).css("display","block");
			
			// IE6は幅を指定する
			if(typeof document.body.style.maxHeight == "undefined") $j(dialog).width($j(dialog).width());
			$j(dialog).hide().fadeTo(1,0);
		},
		fadeIn: function(msgs,options){
			var setting = $j.extend({
				duration: "fast",
				matOpacity: .6,
				dialogOpacity: .9,
				closeTitle: "このメッセージを閉じる"
			},options);
			var id = $j.dialog.ids;
			$j("#"+id.cont+" div span").html(msgs);
			$j("#"+id.me).show();
			var d = {
				width: $j("#"+id.me).width(),
				height: $j("#"+id.me).height()
			}
			$j("#"+id.me).css("display","block");
			$j("div","#"+id.me).css("display","block");
			$j("#"+id.close).attr("title",setting.closeTitle);
			$j("#"+id.mat).show().fadeTo(setting.duration,setting.matOpacity);
			$j("#"+id.me).fadeTo(setting.duration,setting.dialogOpacity).css({
			  "margin-left": "-"+d.width/2+"px"
			});
			
			// IE6以外は以下でダイアログの位置を決める(IE6はCSS内expressionで指定
			if(typeof document.body.style.maxHeight != "undefined"){
				$j("#"+id.me).css({
					"margin-top": "-"+(parseInt(d.height/2))+"px"
				});
				
				// IE7は空要素(div#dlgtop, div#dlgbtm)に最低幅を指定
				if(document.all) $j("#"+id.top+",#"+id.btm).css("min-width",d.width);
			}else{
				
				// IE6でselectとobjectが全面に来る対策 - 非表示にする
				$j("select,object").css("visibility","hidden");
			}
		}
	}
	
	// バリデーション関連
	$j.validate = {
		
		// classに条件を割り当てる
		chk: {
			required: function(txt,t){
				if($j(t).hasClass("group")){
					var flag = 0;
					$j("input,select",t).each(function(){
						if($j(this).val().length>0) flag++;
					});
					return txt && flag==$j("input,select",t).length;
				}else{
					return txt && txt.length > 0;
				}
			},
			hankaku: /^[a-zA-Z0-9@\;\:\[\]\^\=\/\!\*\"\#\$j\%\&\'\(\)\,\.\-\_\?\\\s]*$/, //"
			email: /^[a-zA-Z0-9_\.\-]+?@[A-Za-z0-9_\.\-]+\.+[A-Za-z\.\-\_]+$/,
			tel: /^[\d-]*$/,
			numonly: /^\d*$/,
			zip: /\d\d\d\-?\d\d\d\d/,
			check: function(txt,t){
				return $j("input:checked",t).length>0;
			},
			radio: function(txt,t){
				return $j("input:checked",t).length>0;
			},
			retype: function(txt,t){
				var elm = $j("#"+$j(t).attr("class").split("retype\-")[1].split(/\b/)[0]);
				if(elm.hasClass("group")){
					var chktxt = $j("input",elm), txt = $j("input",t);
					for(var i=0,flag=false;i<chktxt.length;i++){
						if(chktxt[i].value==txt[i].value) flag = true;
						else flag = false;
					}
					if(flag) return true;
				}else{
					return elm.val() == txt;
				}
			},
			min: function(txt,t){
				var length = $j(t).attr("class").match(/min(\d+)/) ? RegExp.$1 : null;
				if(txt.length>0) return txt.length >= length;
			},
			max: function(txt,t){
				var length = $j(t).attr("class").match(/max(\d+)/) ? RegExp.$1 : null;
				if(txt.length>0) return txt.length <= length;
			}
		},
		fn: function(t,options){
			msgs = $j.extend({
				retype: "直前の項目と同じ内容を入力してください",
				email: "正しいEメールアドレスを入力してください",
				hankaku: "全角文字は使えません",
				tel: "正しい電話番号を入力してください",
				numonly: "数字のみで入力してください",
				zip: "正しい郵便番号を入力してください",
				min: "文字以上で入力してください",
				max: "文字以内で入力してください",
				check: "ひとつ以上を選択してください",
				radio: "いずれかを選択してください",
				required: "必須項目です",
				submit: "必須項目を正しく入力してください"
			},options);
			var txt = $j(t).attr("value");
			var CL = $j(t).attr("class");
			
			// 分割項目は中のvalueを足したものをtxtにする
			if(CL.match(/group/)){
				txt = "";
				var inputs = $j("input,select",t);
				inputs.each(function(i){
					txt += $j(this).val();
					
					// .email には@を追加
					if(CL.match(/email/) && i==0 && $j(this).val().length>0)
						txt += "@";
				});
			}
			
			// エラー時の動作
			var check = {
				isError: false,
				failed: function(t,c){
					var msg = msgs[c];
					if(c.match(/min/) && CL.match(/min(\d+)/)) msg = RegExp.$1+msgs[c];
					else if(c.match(/max/) && CL.match(/max(\d+)/)) msg = RegExp.$1+msgs[c];
					$j.tip.msg(t.id,msg);
					$j.tip.fadeIn(t.id);
					this.isError = true;
				}
			}
			var chk = $j.validate.chk;
			for(c in chk){
				
				// .required, .check, .radio には チップに .requiredTip を追加
				if(CL.match(/required|check|radio/)) $j("#"+t.id+"_tip").addClass("requiredTip");
				if(CL.match(c)){
					if(typeof(chk[c]) != "function"){
						if(txt && !txt.match(chk[c])){
							check.failed(t,c);
							break;
						}
					}else{
						if(!chk[c](txt,t)){
							check.failed(t,c);
							break;
						}
					}
				}
			}
			
			// エラーがなければチップを非表示にする
			if(!check.isError){
				$j.tip.fadeOut(t.id);
			}
		}
	}
	
	/* 初期化と適用 */
	$j.fn.validation = function(options){
		if($j(this).length<1) return false;
		var form = this, tipDiv = 500;
		if(!options) var options = {};
		var setting = $j.extend({
			dialog: true,
			submit: "#submit",
			position: "left",
			top: 0,
			left: 15,
			AjaxZip2: false,
			zip: "zip",
			zip2: null,
			pref: "pref",
			addr1: "addr",
			addr2: null,
			addr3: null
		},options.extension);
		
		// チェックするclassを含んでいるinput要素
		var inputs = $j("input[type='text'],input[type='password'],textarea,select",form)
			.filter(function(){
				return this.className.match(/required|retype|email|hankaku|numonly|tel|zip/);
			});
		var validate = function(target){
			$j.validate.fn(target,options.msgs);
			if(!setting.dialog){
				setTimeout(function(){
					if($j("div.requiredTip:visible").length>0) $j(setting.submit).attr("disabled","disabled").addClass("disabled");
					else $j(setting.submit).removeAttr("disabled").removeClass("disabled");
				},500);
			}
		}
		
		// 上記のinput,select,textareaをチェックする
		inputs.each(function(){
			$j.tip.create(this.id,"",setting.position,setting.top,setting.left,tipDiv--);
			validate(this);
			$j(this).keyup(function(){validate(this)})
				.blur(function(){validate(this)});
			$j(this).filter("select").change(function(){validate(this)});
		});
		
		// 上記以外の分割、チェックボックス、ラジオボタンをチェックする
		$j(".group,.check,.radio").each(function(){
			var group = this;
			$j.tip.create(this.id,"",setting.position,setting.top,setting.left);
			validate(this);
			if($j(this).hasClass("group")){
				$j("input",this).keyup(function(){validate(group)})
					.blur(function(){validate(group)});
				$j("select",this).change(function(){validate(group)});
			}else{
				$j("input",this).click(function(){validate(group)});
			}
		});
		
		if(setting.dialog) $j.dialog.create(msgs.submit);
		
		// Submitボタンを押したときエラーがなければデータを送る
		$j("*[type='submit'],input[type='image']",form).click(function(){
																						  
			// エラーチップが表示されている場合はエラーダイアログを表示する
			if($j("div.requiredTip:visible").length>0){
				$j.dialog.fadeIn(msgs.submit,options.dialog);
				return false;
			}
		});
		
		// AjaxZip2が有効の場合は以下で適用する
		if(setting.AjaxZip2){
			var timer = function(){
				AjaxZip2.zip2addr(setting.zip,setting.pref,setting.addr1,setting.zip2,setting.addr2,setting.addr3);
				setTimeout(function(){
					inputs.each(function(){validate(this);});
				},10);
			}
			
			// setting.zip2に値がある場合はinput[name='setting.zip2']でチェックする
			$j("input[name='"+(setting.zip2!=null ? setting.zip2 : setting.zip)+"']")
				.keyup(function(){timer();})
				.blur(function(){timer();});
		}
			
	}
	
})(jQuery);