<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>597人才网个人登录</title>
<link type="text/css" rel="stylesheet" href="http://cdn.{ROOT_DOMAIN}/css/newLogin.css?v=20140409">
</head>

<body>
    <div class="wrap">
        <div class="main">
        	<div class="logotext">
        		<a href="http://www.597.com/" target="_blank" class="logo"></a>
        	</div>
        	<div class="loginbox">
        	    <p class="logntitle">个人用户登录</p>
        		<div class="formbox">
        			<div class="tabtitle">
        				<span id="userto" style="color: #333">账号登录</span>
        				<span id="sweepto">扫码登录</span>
        				<div class="slideline">
        					<div class="activeline" id="activeliner"></div>
        				</div>
        			</div>
        			<div class="inputcont" style="display: block;" id="inpuconbox">
        				<form>
        					<div class="inpbox" id="inpbox1">
        					    <i class="user" id="user1"></i>
        					    <input type="text" class="inpusty" id="inpusty1" placeholder="手机/邮箱/用户名">
        				    </div>
        				    <div class="inpbox" id="inpbox2">
        					    <i class="password" id="password1"></i>
        					    <input type="password" class="inpusty" id="inpusty2" placeholder="请输入密码">
        				    </div>
        				    <div class="chbox">
        				    	<input type="checkbox" id="remember" style="display: none">
								<label class="chelasty" for="remember"></label>
								<label for="remember">自动登录</label>
								<a href="http://www.597.com/person/findpassword.html?q=1" class="yzmdl" target="_blank">验证码登录</a>
        				    </div>
        				    <input type="submit" class="subbtn" value="登录">
        				</form>
        				<p class="toregister">还没有账号? <a href="/person/register.html">立即注册</a></p>
        				<p class="otherto">使用以下账号登录</p>
        				<div class="othergo">
        					<ul style="overflow: hidden;padding: 25px 50px;">
        						<li>
        							<a href="http://api.597.com/qq/login.api?t=1507598354">
        								<i class="toqq"></i>
        							</a>
        						</li>
        						<li>
        							<a href="http://api.597.com/wechat/login.api?t=1507598354">
        								<i class="toweixin"></i>
        							</a>
        						</li>
        						<li>
        							<a href="http://api.597.com/weibo/login.api?t=1507598354" style="margin-right: 0;">
        								<i class="toweibo"></i>
        							</a>
        						</li>
        					</ul>
        				</div>
        			</div>
        			<div class="sweepcode" id="sweepbox" style="display: none;">
        				<p class="codep">使用<a href="http://www.597.com/download/app/" target="_blank" style="color: #f85d5a">597人才网APP</a>扫码登录<span style="float: right;color: #f85d5a;cursor: pointer;">扫码帮助？</span></p>
        				<div class="codeimg"></div>
        				<p style="text-align: center;color: #333;font-size: 14px">（扫码登录目前只支持ios设备）</p>
        				<p class="toregister">还没有账号? <a href="/person/register.html">立即注册</a></p>
        			</div>
        		</div>
        		<div class="help" id="helpbox">
        			<p class="helpp">扫码帮助</p>
        			<p style="font-size: 14px;">--首页右上角/点击扫描图案--</p>
        			<div class="helpimg person"></div>
        			<div class="tipbox"></div>
        		</div>
        	</div>
        	<a class="chlogin" href="/company/login.html?act=new">登录企业版&gt</a>
        </div>
        <div class="mainbg"></div>
    </div>
    <script>
		window.onload = function(){
			var inpuconbox = document.getElementById("inpuconbox"),
				sweepbox = document.getElementById("sweepbox"),
				activeliner = document.getElementById("activeliner"),
				userto = document.getElementById("userto"),
				sweepto = document.getElementById("sweepto");
			userto.onclick = function(){
				this.style.color = "#333";
				sweepto.style.color = "";
				inpuconbox.style.display = "block";
				sweepbox.style.display = "none";
				activeliner.style.left = "";
			}
			sweepto.onclick = function(){
				this.style.color = "#333";
				userto.style.color = "";
				sweepbox.style.display = "block";
				inpuconbox.style.display = "none";
				activeliner.style.left = "50%";
			}
			/*登录方式切换*/
			var inpusty1 = document.getElementById("inpusty1"),
				inpusty2 = document.getElementById("inpusty2"),
				inpbox1 = document.getElementById("inpbox1"),
				inpbox2 = document.getElementById("inpbox2"),
				user1 = document.getElementById("user1"),
				password1 = document.getElementById("password1");
			inpusty1.onfocus = function(){
				inpbox1.style.borderColor = "#f85d5a";
				user1.style.backgroundPositionY = "-18px";
			}
			inpusty1.onblur = function(){
				inpbox1.style.borderColor = "";
				user1.style.backgroundPositionY = "";
			}
			inpusty2.onfocus = function(){
				inpbox2.style.borderColor = "#f85d5a";
				password1.style.backgroundPositionY = "-54px";
			}
			inpusty2.onblur = function(){
				inpbox2.style.borderColor = "";
				password1.style.backgroundPositionY = "";
			}
			/*账号登录交互*/
			var helpbox = document.getElementById("helpbox");
			sweepbox.onmouseenter = function(){
				helpbox.style.display = "block";
			}
			sweepbox.onmouseleave = function(){
				helpbox.style.display = "none";
			}
		}
	</script>
</body>
</html>
