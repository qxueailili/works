<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
	<link rel="stylesheet" href="/BookStore/Public/Home/css/login.css">
	<script type="text/javascript" src="/BookStore/Public/Home/JS/jquery-1.8.0.js"></script>
	<script type="text/javascript" src="/BookStore/Public/Home/JS/login.js"></script>
</head>
<body>
	<div id="login">
	<!-- 登录头部 -->
	<div id="header">
		<div id="logo"><img src="/BookStore/Public/Home/images/logo_login.png" alt=""></div>
		<ul class="logo">			
			<li><img src="/BookStore/Public/Home/images/rmb.png" alt=""></li>			
			<li><img src="/BookStore/Public/Home/images/zheng.png" alt=""></li>			
			<li><img src="/BookStore/Public/Home/images/gwc.png" alt=""></li>			
		</ul>
		<ul class="logo1">
			<li><a href=""><span>货到付款</span></a></li>
			<li><a href=""><span>正品保障</span></a></li>
			<li><a href=""><span>上门退款</span></a></li>
		</ul>
	</div>
	<div class="clear"></div>
	<div class="notice">!为保障账户安全，请勿设置与邮箱及其他网站相同的账户登录或支付密码，<a href="">谨防诈骗!</a></div>
	<!-- 登录内容 -->
	<div class="container">
		<div class="ad"><img src="/BookStore/Public/Home/images/loginAd1.jpg" alt=""></div>
		<div class="sub">
			<form action="LoginCheck" method="post">
				<div class="user">
				<!-- <img src="/BookStore/Public/Home/images/t2.png" alt=""> -->
					用户名：<input type="text" id="username" name="user"></div>
				<div class="pass">
				<!-- <img src="/BookStore/Public/Home/images/t1.png" alt=""> -->
					密&nbsp;码：<input type="password" id="password" name="password"></div>
				<div class="pass">
					验证码：<input type="text" name="verify">
				</div>
				<img src="<?php echo U('User/verify');?>" alt="" style="curson:pointer" class="img1" onclick="this.src='<?php echo U('User/verify');?>?rnd=' + Math.random();">
				<!-- <span></span> -->
				</br>
				<div class="notice1"><input type="checkbox" checked="checked" id="check">
					<span class="span1">请勿在公用电脑上勾选此项</span>
					<span class="span2">七天内自动登录</span>
					<a href=""><span class="mm">忘记密码?</span></a>
					<a href="<?php echo U('User/reg');?>"><span>立即注册</span></a>
				</div>
				<input type="submit" id="_login" value="登陆"></input>
			</form>
		</div>
		<li><span>使用合作网站登录</span></li>
	</div>
	<div class="clear"></div>
	<div class="footer">
		<div class="footer_t">
			<span>Copyright (C) 当当网 2004-2012, All Rights Reserved
			</span>
			<span class="sep"> | </span>
			<a href="" target="_blank"><span>京ICP证041189号</span></a>
			<a href="" target="_blank"><span>音像制品经营许可证 京音网8号</span></a>
		</div>
		<div class="icon">
			<a href=""><img src="/BookStore/Public/Home/images/validate.gif" alt=""></a>
			<a href=""><img src="/BookStore/Public/Home/images/knetSealLogo.png" alt=""></a>
		</div>
	</div>
</div>
	
</body>
</html>