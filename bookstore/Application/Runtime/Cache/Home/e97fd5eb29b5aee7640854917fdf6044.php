<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册</title>
	<link rel="stylesheet" type="text/css" href="/BookStore/Public/Home/css/reg.css">
	<script src="/BookStore/Public/Home/JS/jquery-1.8.0.js"></script>
	<script type="text/javascript" src="/BookStore/Public/Home/JS/reg.js"></script>
	<script type="text/javascript" src="/BookStore/Public/Home/JS/erji.js"></script>
</head>
<body>
<div class="content">
	<div class="container">
		<img src="/BookStore/Public/Home/images/ddnewhead_logo.gif" alt="">
		<ul class="nav">					
			<li ><a href=""><span>购物车</span></a></li>
			<li >
				<li class="nav2"><a href=""><span>我的订单</span></a>
					<ul class="nav1">
						<li><a href="#">我的当当</a></li>
						<li><a href="#">我的礼券</a></li>
						<li><a href="#">我的积分</a></li>
						<li><a href="#">我的收藏</a></li>
						<li><a href="#">我的商品</a></li>
					</ul>
				</li>
			</li>
			<li ><a href=""><span>我的当当</span></a></li>
			<li ><a href=""><span>礼品卡</span></a></li>
			<li ><a href=""><span>手机当当</span></a></li>
			<li ><a href=""><span>企业销售</span></a></li>
			<li ><a href=""><span>帮助</span></a></li>
		</ul>
		<p class="hy">欢迎光临当当网，请<a href="<?php echo U('User/login');?>"><span>登录</span></a> <a href=""><span>免费注册</span></a></p>
	</div>
	<div class="clear"></div>
	<p class="hr"></p>
	<div class="form">
		<div class="header">
			<div>
				<a href="" class="cls1"><span>新用户注册</span></a>
				<a href="" class="cls2"><span>企业用户注册</span></a>		
			</div>
			<div class="help">	
				<a href=""><span>当当首页</span></a>
				<a href=""><span>注册帮助</span></a>
			</div>
		</div>

	<div class="clear"></div>
	<form action="reg" method="post">
		<div class="cont">
				<span>&nbsp;&nbsp;&nbsp;&nbsp;用户名</span>&nbsp;<input type="text" id="user" name="user" placeholder=" 请输入您的邮箱和手机号"><br/><br>
				<span class="c1">登录密码&nbsp;</span><input type="password" id="password"
				name="password"><br/><br/><br/>
				<span></span>
				<span class="c2">确认密码&nbsp;</span><input type="password" id="repassword" name="repassword"><br/></br>
				

				<span class="c3">电&nbsp;话&nbsp;</span><input type="text" id="user" name="user_phone"><br><br>
				<span class="c3">邮&nbsp;箱</span>
				<input type="text" id="user" name="user_email">
				<p>邮箱手机号可用于登录、找回、接受订单通知等服务</p>
				<span class="c3">验证码&nbsp;</span>
				<input type="verify" id="verify" name="verify">
				<img src="<?php echo U('User/verify');?>" alt="" style="curson:pointer"  onclick="this.src='<?php echo U('User/verify');?>?rnd=' + Math.random();"><br>
				<span class="c4">请填写图片中的字符，不区分大小写</span></br>
				<input type="checkbox" id="check" checked="checked"><span>我已阅读并同意</span><a href="" id="dd">《当当交易条款》</a><span>和</span><a href="" id="dd">《当当社区条款》</a></br>
				<span id="p1" style="color:red;">您必须同意当当服务条款后，才能提交注册。</span>
				<span id="p2"></span>
			</div>
		</div>
	
		<div class="btn1">
			<input type="submit" id="btn" value="立即注册"></input>
		</div>
	</form>
	<div class="footer">
		<div class="footer_t">
			<div class="copyright">
				<a href="" target="_blank">Copyright (C) 当当网 2004-2012, All Rights Reserved</a>
				<a href="" target="_blank">京ICP证041189号</a>
				<a href="" target="_blank">音像制品经营许可证 京音网8号|</a>	
			</div>
		</div>
		<div class="icon">
			<a href=""><img src="/BookStore/Public/Home/images/validate.gif" alt=""></a>
			<a href=""><img src="/BookStore/Public/Home/images/knetSealLogo.png" alt=""></a>
		</div>
	</div>
</div>


</body>
</html>