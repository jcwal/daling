<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>购物车</title>
	<link rel="stylesheet" href="__ROOT__/Index/Common/css/shopCart.css" />
	<link rel="stylesheet" href="__ROOT__/Index/Common/css/reset.css" />
	<link rel="stylesheet" href="__ROOT__/Index/Common/css/aside.css" />
	<link rel="stylesheet" href="__ROOT__/Index/Common/css/footer.css" />
	<script type="text/javascript" src="__ROOT__/Index/Common/js/jquery-3.2.1.min.js"></script>
</head>
<body>
	<div class="top">
		<div class="topWrap">
			<div class="consumerInfo">
				<a href="#">消费者告知书</a>
			</div>
			<ul class="loginBar">
				<li class="login">
					<a href="#">登陆</a>
				</li>
				<li class="register">
					<a href="#">注册</a>
				</li>
				<li class="tel">
					<img src="__ROOT__/Index/Common/images/header/tel.svg" alt="" />
					<a >400-080-1888</a>
				</li>
				<li class="download">
					<a href="#">下载达令app</a>
				</li>
				<div class="clearFloat"></div>
			</ul>
		</div>
	</div>
	<div class="cartContainer">
		<!-- logo栏 -->
		<div class="centerWrap">
			<a href="#" class="logo"></a>
			<!-- 购物流程 -->
			<div class="logoFlow">
				<ul>
					<li>
						<span class="flowList"></span>
						<span class="flowCircle">1</span>
						查看购物车	
					</li>
					<li>
						<span class="flowList"></span>
						<span class="flowCircle">2</span>
						<span class="flowTo"></span>
						确认订单信息
					</li>
					<li>
						<span class="flowList"></span>
						<span class="flowCircle">3</span>
						成功提交订单
					</li>
					<div class="clearFloat"></div>
				</ul>
			</div>
		</div>
		<!-- 订单列表头 -->
			<div class="cartTitle">
				<ul>
					<li>
						<input type="checkbox" />
						全选
					</li>
					<li>商品名称</li>
					<li>单价（元）</li>
					<li>数量</li>
					<li>小计（元）</li>
					<li>操作</li>
				</ul>
				
			</div>
		<!-- 购物车部分 -->
		

		
	</div>

	<div class="asideBar">
		<aside class="aside">
	<div class="aside_nav">
		<!--购物车-->
		<div class="aside_shopp" onclick="shopp()" >
			<div class="aside_wire"></div>
			<div class="aside_car"></div>
			<div class="aside_text">购<br />物<br />车</div>
			<div class="aside_number">2</div>
		</div>
		<!--横线-->
		<div class="aside_wire"></div>
		<!--钱图标-->
		<div class="aside_money" onclick="money()">
			<span></span>
			<strong class="aside_money_text aside_common">我的优惠劵<em></em></strong>
		</div>
		<!--收藏-->
		<div class="aside_collect" onclick="collect()">
			<span></span>
			<strong class="aside_collect_text aside_common">我的收藏<em></em></strong>
		</div>
		<!--top图-->
		<a href="#">
			<img src="" alt="" />
		</a>
	</div>
	<!--购物车里面的内容-->
	<div class="aside_content">
		<!--叉-->
		<div class="aside_remove" onclick="remove()"></div>
		<div class="aside_car_content">
			<div class="head">我的购物车</div>
			<div class="cart-mini-ct">
				<div class="aside_content_table"></div>
			</div>
		</div>
	</div>
	<!--钱里面的内容-->
	<div class="aside_money_content">
		<div class="head_common">我的优惠劵</div>
		<div class="sb-unlogin">
			<p>登录后才能查看</p>
			<button>登录</button>
		</div>
	</div>
	<!--收藏里面的内容-->
	<div class="aside_collect_content">
		<div class="head_common">我的收藏</div>
		<div class="sb-unlogin">
			<p>登录后才能查看</p>
			<button>登录</button>
		</div>
	</div>
</aside>

	</div>
	<div class="footer">
		
<footer class="container">
	<div class="footer title">
		<ul class="footer list">
			<li>
				<span>为什么选择达令</span>
				<div class="icon_1"></div>
			</li>
			<li>
				
				<span class="icon_2"></span>
				<span>100多个品牌授权</span>
			</li>
			<li>
				<span class="icon_3"></span>
				<span>24小时内发货</span>
			</li>
			<li>
				<span class="icon_4"></span>
				<span>保税区正品</span>
			</li>
		</ul>
	</div>
	<div class="footer middle">
		<div class="middleLeft">
			<p class="textTop">投资人说达令</p>
			<p class="textContent">“hi,达令，我是鹿晗，达令投资人，投资比影响力更重要的是责任。”</p>
		</div>
		<div class="middleRight">
			<p class="textTop">投资人说达令</p>
			<p class="textContent">“达令™一手全球好货--带您购全球,教您神马值得买。<br/>
连续两年荣获App store 编辑推荐最佳购物类应用！”</p>
		</div>
		
	</div>
	<div class="footer bottom">
		<div class="bottomLink">
			<a href="">首页</a>&nbsp;&nbsp; |
			<a href="">网站地图</a>&nbsp;&nbsp; |
			<a href="">消费者告知书</a>&nbsp;&nbsp; |
			<a href="">优惠券使用规则 </a>&nbsp;&nbsp; |
			<a href="">退换货使用说明 </a>&nbsp;&nbsp; |
			<a href="">关于我们</a>&nbsp;&nbsp; |
			<a href="">联系我们</a>&nbsp;&nbsp; |	
		</div>
		<div class="bottomSafe">
			<span class="info">北京普缇客科技有限公司</span>
			<a href=""><img class="cert" src="__ROOT__/Index/Common/images/footer/cert.png" alt="" /></a>
			<a href=""><img class="cnnic" src="__ROOT__/Index/Common/images/footer/cnnic.png" alt="" /></a>
			<a href=""><img class="zfb" src="__ROOT__/Index/Common/images/footer/ico_zfb.jpg" alt="" /></a>	
		</div>
		<div class="bottomMessage">
			<p>Copyright © 2016达令 ，All Rights Reserved │ 京ICP备14009583号-1 │ 京公网安备11010502027399 | 食品流通许可证编号：SP1101051510323113</p>
		</div>
		
	</div>
</footer>

	</div>
</body>
<script src="__ROOT__/Index/Common/js/aside.js" type="text/javascript"></script>
</html>