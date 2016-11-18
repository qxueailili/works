<?php if (!defined('THINK_PATH')) exit();?><!-- header.html -->
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>bookstore</title>
	<link rel="stylesheet" href="/BookStore/Public/Home/css/header.css">
	<link rel="stylesheet" href="/BookStore/Public/Home/css/footer.css">
	<link rel="stylesheet" href="/BookStore/Public/Home/css/index.css">
	<link rel="stylesheet" href="/BookStore/Public/Home/css/details.css">
</head>
<body>
	<div class="meun">
		<div class="head_meunl">
			<ul>
				<li class="deliver">
					<div class="div1">
						送至:北京
						<span class="xiaoyuhao">></span>
					</div>
					<ul class="location" id="rt">
						<li><a href="">北京</a></li>
						<li><a href="">天津</a></li>
						<li><a href="">杭州</a></li>
						<li><a href="">西安</a></li>
						<li><a href="">上海</a></li>
						<li><a href="">广州</a></li>
						<li><a href="">深圳</a></li>
						<li><a href="">厦门</a></li>
						<li><a href="">南昌</a></li>
						<li><a href="">贵阳</a></li>
						<li><a href="">铜川</a></li>
						<li><a href="">宝鸡</a></li>
						<li><a href="">安康</a></li>
						<li><a href="">渭南</a></li>
						<li><a href="">延安</a></li>
						<li><a href="">榆林</a></li>
						<li><a href="">咸阳</a></li>
						<li><a href="">成都</a></li>
						<li><a href="">重庆</a></li>
						<li><a href="">安阳</a></li>
						<li><a href="">郑州</a></li>
						<li><a href="">西宁</a></li>
						<li><a href="">大庆</a></li>
						<li><a href="">许昌</a></li>
						<li><a href="">太原</a></li>
						<li><a href="">江苏</a></li>
						<li><a href="">海南</a></li>
						<li><a href="">三亚</a></li>
						<li><a href="">四川</a></li>
						<li><a href="">湖南</a></li>
						<li><a href="">湖北</a></li>
						<li><a href="">新疆</a></li>
						<li><a href="">西藏</a></li>
						<li><a href="">吉林</a></li>
						<li><a href="">辽宁</a></li>
						<li><a href="">长春</a></li>
						<li><a href="">四平</a></li>
						<li><a href="">安徽</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="head_meunr">
			<ul class="tou">
				<li>欢迎光临当当，</li>
				<li>
					<?php  if (isset($_SESSION["user"])) { echo $_SESSION["user"]; }else{ ?>
					 请<a href="<?php echo U('User/login');?>">登录</a>
					<?php  } ?>
				</li>
				<li>
					<?php  if (isset($_SESSION["user"])) { ?>欢迎
							<a href="<?php echo U('User/logoff');?>">注销</a>
					<?php  }else{ ?>
							<a href='<?php echo U('User/reg');?>'>成为会员|</a>
					<?php
 } ?> 
				</li>
				<li>&nbsp;原创征文|</li>
				<li>&nbsp;手机当当|</li>
				<li class="mydang">
					<div class="mydd">
						&nbsp;我的当当
						<span class="xiaoyuhao">></span>
					</div>
					<div class="mydangdang">
						<ul class="wodedd">
							<li>积分抵现</li>
							<li>我的收藏</li>
							<li>我的余额</li>
							<li>我的评论</li>
							<li>礼券/礼品卡</li>
							<li>电子书架</li>
						</ul>
					</div>
				</li>
				<li>企业采购</li>
				<li>客户服务</li>
			</ul>
		</div>
		<div class="head_bottom">
			<div class="bleft">
				<a href="<?php echo U('Index/index');?>"><div class="pic"></div></a>
				<div class="search">
					<input type="search" id="search" placeholder="搜搜有惊喜"><input type="button" value="搜索" id="btn">
				</div>
				<div class="car">
					<span class="text">我的购物车</span>
				</div>
				<div class="dingdan">
					<span class="text1">我的订单</span>
				</div>
				<span class="resou">热搜：家居家具  满200减100 光芒记 100元现金券免费领 荒野求生 海外购</span>
			</div>
			<div class="heng">
				<div class="classify">全部商品分类</div>
				<ul>
					<li><a href="">200减100</a></li>
					<li><a href="">图书</a></li>
					<li><a href="">电子书</a></li>
					<li><a href="">原创文学</a></li>
					<li><a href="">服装</a></li>
					<li><a href="">运动户外</a></li>
					<li><a href="">孕婴童</a></li>
					<li><a href="">家居</a></li>
					<li><a href="">当当优品</a></li>
					<li><a href="">特产</a></li>
					<li><a href="">海外购</a></li>
					<li><a href="">电器城</a></li>
				</ul>
				<hr class="hr1">
			</div>
		</div>
	</div>
	<div class="clear"></div>


	<div class="img">
		<img src="/BookStore/Public/Home/images/258.jpg" alt="">
	</div>
	<div class="tree">
		<span>图书</span>>童书>中国儿童文学>传统文学>传统文化
	</div>
	<div style="clear:both"></div>
	<div class="show">
		<img src="/BookStore/Public/Home/image/history.jpg" alt="">
	</div>
	<div class="jianjie">
		<p class="p1">写给儿童的中国历史（全14册）</p><br>
		<p class="p2">第十届文津奖获奖图书，畅销台湾三十载，贯通上下五千年。鲜活、系统、客观，帮助孩子别嫌疑、明是非、定犹豫。学会了解自己，评价世界。台湾小鲁镇社之宝（步印童书馆出品）</p><br>
		<span class="jieshao">
			作者：<a href="">陈卫平</a>
			出版社：<a href="">新世界出版社</a>
			出版时间：2014年10月
		</span><br>
		<span class="paiming">
			在<a href="">当当童书</a>排名第5位
		</span><br><br>
		<div class="buy">
			<span class="span1">抢购价</span>
			<span class="span2">¥</span>
			<span class="span3">174.00</span>
			<span class="span4">4.91折</span>
			<span class="span5">定价</span>
			<span class="span6">¥355.00</span>
			<div class="daojishi">
				距离结束还有...
			</div>
			<span class="span7">促&nbsp;&nbsp;销</span>
			<div class="xiaolunbo">

			</div>
		</div>
			<div class="address">
				<span>配送至：<input type="text" value="西安市 雁塔区 博文路" ></span>
				<span>有货</span>
				<span>满59元免运费</span><br>
				<span>服务</span>
				<span>由“当当”发货，并提供售后服务。明日00:45前完成下单，预计明天(11月9日)可送达</span><br>
				<span>关联商品</span><input type="text" value="写给儿童的中国地理"><input type="text" value="写给儿童的中国历史"><input type="text" value="写给儿童的中国古代">
			</div>
			<div class="cart">
				<div class="count">
					<div id="count1">+</div>
					<div id="count2">-</div>
					<div id="count">1</div>
				</div>
				<div>
					<div class="addproduct">加入购物车</div>
				</div>
				<div>
					<div class="buynow">立即购买</div>
				</div>
			</div>
	</div>
	<div class="ziying">
		<span class="dangdangziying">当当自营</span><br>
		<ul class="baozhang">
			<li><a href="">正品保障</a></li>
			<li><a href="">服务支持</a></li>
			<li><a href="">15天换货</a></li>
			<li><a href="">支持7天无理由退货</a></li>
			<li><a href="">支持礼品卡</a></li>
		</ul>
		<ul class="fanchajia">
			<li><a href="">货到付款</a></li>
			<li><a href="">差价返还</a></li>
		</ul>
	</div>
<!-- footer.html -->
<div class="footer">
	<hr class="hr2">
	<div class="footer_top">
		<ul>
			<li><a href=""><img src="/BookStore/Public/Home/image/img1.png" alt=""></a></li>
			<li><a href=""><img src="/BookStore/Public/Home/image/img2.png" alt=""></a></li>
			<li><a href=""><img src="/BookStore/Public/Home/image/img3.png" alt=""></a></li>
			<li><a href=""><img src="/BookStore/Public/Home/image/img4.png" alt=""></a></li>
		</ul>
	</div>
	<div class="about">
		<ul>
			<li>
				<span>购物指南</span><br>
				<a href="">购物流程</a><br>
				<a href="">发票制度</a><br>
				<a href="">账户管理</a><br>
				<a href="">会员优惠</a><br>
			</li>
			<li>
				<span>支付方式</span><br>
				<a href="">货到付款</a><br>
				<a href="">礼品卡支付</a><br>
				<a href="">银行转账</a><br>
			</li>
			<li>
				<span>订单服务</span><br>
				<a href="">订单配送查询</a><br>
				<a href="">订单状态说明</a><br>
				<a href="">自助取消订单</a><br>
				<a href="">自助修改订单</a><br>
			</li>
			<li>
				<span>配送方式</span><br>
				<a href="">配送范围及免邮标准</a><br>
				<a href="">当日递/次日达</a><br>
				<a href="">订单自提</a><br>
				<a href="">验货与验收</a><br>
			</li>
			<li>
				<span>退换货</span><br>
				<a href="">退换货政策</a><br>
				<a href="">自助申请退换货</a><br>
				<a href="">退换货进度查询</a><br>
				<a href="">退款方式和时间</a><br>
			</li>
			<li>
				<span>商家服务</span><br>
				<a href="">商家中心</a><br>
				<a href="">运营服务</a><br>
				<a href="">加入尾品汇</a><br>
			</li>
		</ul>
		<div class="clear"></div>
	</div>
	<div class="link">
		<ul>
			<li><a href="">公司简介</a>&nbsp;|</li>
			<li><a href="">Investor Relations</a>&nbsp;|</li>
			<li><a href="">诚聘英才</a>&nbsp;|</li>
			<li><a href="">网站联盟</a>&nbsp;|</li>
			<li><a href="">当当招商</a>&nbsp;|</li>
			<li><a href="">机构销售</a>&nbsp;|</li>
			<li><a href="">手机当当</a>&nbsp;|</li>
			<li><a href="">官方Blog</a>&nbsp;|</li>
			<li><a href="">热词搜索</a>&nbsp;</li>
		</ul>
		<div class="copyright">Copyright (C) 当当网 2004-2016, All Rights Reserved</div>
		<div class="xukezheng">
			<ul>
				<li><a href="">京ICP证041189号|</a></li>
				<li><a href="">出版物经营许可证 新出发京批字第直0673号|</a></li>
				<li><a href="">食品流通许可证：SP1101011010021855(1-1)</a></li>
			</ul>
		</div>
		<div class="zige">
			<ul>
				<li><a href="">互联网药品信息服务资格证编号：(京)-非经营性-2012-0016|</a></li>
				<li><a href="">京公网安备110101000001号</a></li>
			</ul>
		</div>
		<div class="jubao">
			<ul>
				<li>互联网违法和不良信息举报电话：4001066666-5 </li>
				<li><a href="">邮箱：service@cs.dangdang.com</a></li>
			</ul>
		</div>
		<div class="xukezhengpic">
			<img src="/BookStore/Public/Home/image/xukezheng.png" alt="">
		</div>
	</div>
</div>


<script src="/BookStore/Public/Home/JS/jquery-1.11.1.js"></script>
<script src="/BookStore/Public/Home/JS/jquery-1.8.0.js"></script>
<script src="/BookStore/Public/Home/JS/jquery.js"></script>
<script src="/BookStore/Public/Home/JS/header.js"></script>
<script src="/BookStore/Public/Home/JS/index.js"></script>
<script src="/BookStore/Public/Home/JS/details.js"></script>
</body>
</html>