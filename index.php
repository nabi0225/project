<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>商品展示</title>
	<style>
		#main {
			max-width: 600px;
			margin: 50 auto;
		}

		.wrapper {
			top: 30px;
			width: 94%;
			max-width: 722px;
			position: relative;
			border: 1px solid #aaa;
			padding: 25px 25px 5px;
			margin: 0 auto;
			overflow: hidden;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
		}

		.wrapper * {
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
		}

		.main {
			max-width: 600px;
			margin: auto;
			padding-bottom: 30px;
			padding-top: 30px;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			text-align: center;
			vertical-align: middle;
			align: center;
			font-size: 36px;
			font-family: "微軟正黑體";
			color: #563F9A;
			background-color: gold;
		}

		.content {
			max-width: 600px;
			margin: auto;
			padding: 15px;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			font-size: 20px;
			align: center;
			text-align: center;
			font-family: "微軟正黑體";
		}

		.footer {
			/* width: 100%;
			position: fixed;
			bottom: 0;
			left: 0;
			height: 70px;*/
			-webkit-text-fill-color: gray;
			font-family: "微軟正黑體";
			height: 54px;
			max-width: 600px;
			margin: -10px auto 0;
			text-align: center;
			vertical-align: middle;
		}

		.p {
			-webkit-text-fill-color: crimson;
			font-weight: bold;
			font-size: 30px;
		}

		.css_button1 {
			padding: 9px 18px;
			border: 1px solid #FFFFFF;
			background: -webkit-gradient(linear, left top, left bottom, from(#EEFF82), to(#FFB62E));
			background: -webkit-linear-gradient(top, #EEFF82, #FFB62E);
			background: -moz-linear-gradient(top, #EEFF82, #FFB62E);
			background: -ms-linear-gradient(top, #EEFF82, #FFB62E);
			background: -o-linear-gradient(top, #EEFF82, #FFB62E);
			background-color: #FFB62E;
			box-shadow: 0px 7px 2px -5px #1A1A1A, inset 0px 0px 5px #9C3400;
			-webkit-box-shadow: 0px 7px 2px -5px #1A1A1A, inset 0px 0px 5px #9C3400;
			-moz-box-shadow: 0px 7px 2px -5px #1A1A1A, inset 0px 0px 5px #9C3400;
			-webkit-border-radius: 8px;
			-moz-border-radius: 8px;
			border-radius: 8px;
			text-shadow: #91833D 1px 1px 0px;
			color: #FFFFFF;
			font-size: 14px;
			font-family: '微軟正黑體';
			text-decoration: none;
			font-weight: bold;
			-webkit-transition: 0.5s;
			-moz-transition: 0.5s;
			-o-transition: 0.5s;
			cursor: pointer;
		}

		.css_button1:hover {
			background: none;
			background-color: #FFB62E;
			box-shadow: 0px 0px 5px 0px #AAAAAA;
			-webkit-box-shadow: 0px 0px 5px 0px #AAAAAA;
			-moz-box-shadow: 0px 0px 5px 0px #AAAAAA;
			border: 1px solid #ffffff;
			color: #470000;
		}

		.css_button1:active {
			top: 1px;
			position: relative;
		}


		.css_button2 {
			padding: 9px 18px;
			border: 1px solid #FFFFFF;
			background: -webkit-gradient(linear, left top, left bottom, from(#0D195E), to(#716EF5));
			background: -webkit-linear-gradient(top, #0D195E, #716EF5);
			background: -moz-linear-gradient(top, #0D195E, #716EF5);
			background: -ms-linear-gradient(top, #0D195E, #716EF5);
			background: -o-linear-gradient(top, #0D195E, #716EF5);
			background-color: #716EF5;
			box-shadow: 0px 7px 2px -5px #1A1A1A, inset 0px 0px 5px #00569C;
			-webkit-box-shadow: 0px 7px 2px -5px #1A1A1A, inset 0px 0px 5px #00569C;
			-moz-box-shadow: 0px 7px 2px -5px #1A1A1A, inset 0px 0px 5px #00569C;
			-webkit-border-radius: 8px;
			-moz-border-radius: 8px;
			border-radius: 8px;
			text-shadow: #3D5F91 1px 1px 0px;
			color: #FFFFFF;
			font-size: 14px;
			font-family: '微軟正黑體';
			text-decoration: none;
			font-weight: bold;
			-webkit-transition: 0.5s;
			-moz-transition: 0.5s;
			-o-transition: 0.5s;
			cursor: pointer;
		}

		.css_button2:hover {
			background: none;
			background-color: #716EF5;
			box-shadow: 0px 0px 5px 0px #AAAAAA;
			-webkit-box-shadow: 0px 0px 5px 0px #AAAAAA;
			-moz-box-shadow: 0px 0px 5px 0px #AAAAAA;
			border: 1px solid #ffffff;
			color: #001247;
		}

		.css_button2:active {
			top: 1px;
			position: relative;
		}

		.css_button3 {
			padding: 9px 18px;
			border: 1px solid #FFFFFF;
			background: -webkit-gradient(linear, left top, left bottom, from(#5E0D2F), to(#F56E87));
			background: -webkit-linear-gradient(top, #5E0D2F, #F56E87);
			background: -moz-linear-gradient(top, #5E0D2F, #F56E87);
			background: -ms-linear-gradient(top, #5E0D2F, #F56E87);
			background: -o-linear-gradient(top, #5E0D2F, #F56E87);
			background-color: #F56E87;
			box-shadow: 0px 7px 2px -5px #1A1A1A, inset 0px 0px 5px #9C004E;
			-webkit-box-shadow: 0px 7px 2px -5px #1A1A1A, inset 0px 0px 5px #9C004E;
			-moz-box-shadow: 0px 7px 2px -5px #1A1A1A, inset 0px 0px 5px #9C004E;
			-webkit-border-radius: 8px;
			-moz-border-radius: 8px;
			border-radius: 8px;
			text-shadow: #913D3D 1px 1px 0px;
			color: #FFFFFF;
			font-size: 14px;
			font-family: '微軟正黑體';
			text-decoration: none;
			font-weight: bold;
			-webkit-transition: 0.5s;
			-moz-transition: 0.5s;
			-o-transition: 0.5s;
			cursor: pointer;
		}

		.css_button3:hover {
			background: none;
			background-color: #F56E87;
			box-shadow: 0px 0px 5px 0px #AAAAAA;
			-webkit-box-shadow: 0px 0px 5px 0px #AAAAAA;
			-moz-box-shadow: 0px 0px 5px 0px #AAAAAA;
			border: 1px solid #ffffff;
			color: #470000;
		}

		.css_button3:active {
			top: 1px;
			position: relative;
		}
	</style>

</head>

<script>
	function print_value() {
		//<!--將 select 的值在印出-- >
		var val = document.getElementById("number").value;
		var index = "non"

		if (val == "一個月") {
			index = "300 NT / 月"
		} else if (val == "三個月") {
			index = "600 NT / 月"
		} else if (val == "六個月") {
			index = "900 NT / 月"
		}
		document.getElementById("result").innerHTML = "LFA偵測系統訂閱方案:<br>" + val + "\n" + index
	}
</script>

<body>
	<div class="wrapper">
		<div class="main">感謝您的支持與使用:)</div>

		<div class="content">
			此處可放我們商品宣傳片，或是細節
			<!-- 請選購商品:<br>
			<select name="submit" id="number" onchange="print_value();" style="width:150px">
				<option>- 請選擇 -</option>
				　<option value="一個月">1個月 300 NT</option>
				　<option value="三個月">3個月 600 NT</option>
				　<option value="六個月">6個月 900 NT</option>
			</select>
			<br><br>
			<div class="p" id="result"></div>-->
			<br><br />
			<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
				<input type="hidden" name="cmd" value="_xclick">
				<input type="hidden" name="business" value="nabi0225-facilitator@gmail.com">
				<input type="hidden" name="item_name" value="LFA訂閱方案一個月">
				<input type="hidden" name="currency_code" value="USD">
				<input type="hidden" name="amount" value="10.00">
				<input type="submit" name="button" class="css_button1" value="LFA偵測系統一個月方案" />
			</form>
			<br>
			<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
				<input type="hidden" name="cmd" value="_xclick">
				<input type="hidden" name="business" value="nabi0225-facilitator@gmail.com">
				<input type="hidden" name="item_name" value="LFA訂閱方案三個月">
				<input type="hidden" name="currency_code" value="USD">
				<input type="hidden" name="amount" value="30.00">
				<input type="submit" name="button" class="css_button2" value="LFA偵測系統三個月方案" />
			</form>
			<br>
			<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
				<input type="hidden" name="cmd" value="_xclick">
				<input type="hidden" name="business" value="nabi0225-facilitator@gmail.com">
				<input type="hidden" name="item_name" value="LFA訂閱方案六個月">
				<input type="hidden" name="currency_code" value="USD">
				<input type="hidden" name="amount" value="60.00">
				<input type="submit" name="button" class="css_button3" value="LFA偵測系統六個月方案" />
			</form>
		</div>
		<div class="footer">
			感謝您的支持!!
		</div>
	</div>
</body>

</html>