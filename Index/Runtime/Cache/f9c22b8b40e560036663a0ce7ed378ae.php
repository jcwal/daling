<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>达令</title>
		<link rel="stylesheet" href="__ROOT__/Index/Common/css/reset.css" />
		<link rel="stylesheet" href="__ROOT__/Index/Common/css/header.css" />
		<link rel="stylesheet" href="__ROOT__/Index/Common/css/aside.css" />
		<link rel="stylesheet" href="__ROOT__/Index/Common/css/footer.css" />
		<link rel="stylesheet" href="__ROOT__/Index/Common/css/index.css" />
		<link rel="stylesheet" href="__ROOT__/Index/Common/css/swiper-3.4.2.min.css" />
		<script type="text/javascript" src="__ROOT__/Index/Common/js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="__ROOT__/Index/Common/js/swiper-3.4.2.min.js"></script>
		<script type="text/javascript" src="__ROOT__/Index/Common/js/angular.min.js"></script>
		<script type="text/javascript" src="__ROOT__/Index/Common/js/angular-sanitize.js"></script>
	</head>
	<body>
		<div class="navigator">
			<header class="header">
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
			</ul>
		</div>
	</div>
	<div class="center">
		<div class="centerWrap">
			<a href="#" class="logo"></a>
			<form action="" method='get' class="searchForm">
				<div class="searchBar">
					<div class="searchBox">
						<input type="hidden" />
						<input type="hidden" />
						<input type="text" class="searchKeyWords" />
						<input type="submit" value="搜索" class="searchSub" />
					</div>
					<ul class="searchHot">
						<li><a href="#">口红</a></li>
						<li><a href="#">面膜</a></li>
						<li><a href="#">耳饰</a></li>
						<li><a href="#">日系美妆</a></li>
						<li><a href="#">化妆水</a></li>
						<li><a href="#">底妆</a></li>
						<li><a href="#">乳霜</a></li>
						<li><a href="#">洁面</a></li>
						<li><a href="#">防嗮</a></li>
					</ul>
				</div>
				<div class="trolley">
					<a href="#">我的购物车</a>
					<span>0</span>
				</div>
			</form>
		</div>
	</div>
	<div class="bottom">
		<div class="bottomWrap clearFloat">
			<div class="category">
				<p class="title">
					全部分类
				</p>
				<div class="categoryDetail">
					<dl>
						<dt>
							<img src="__ROOT__/Index/Common/images/header/categoryIcon1.png" alt="达令" />
							极致美护
						</dt>
						<dd class="categoryShelter"></dd>
						<dd class="categorySort">
							<div class="sortBox">
								<a href="#">面膜</a>
								<a href="#">化妆水</a>
								<a href="#">洁面</a>
								<a href="#">防嗮</a>
								<a href="#">面霜/乳液</a>
								<a href="#">卸妆</a>
								<a href="#">精华</a>
							</div>
						</dd>
						<dd class="categoryDrop">
							<div class="dropBox">
								<div class="dropTitle">
									极致美护
								</div>
								<div class="brand clearFloat">
									<a href="#">
										<img src="__ROOT__/Index/Common/images/header/categoryBrand1-1.jpg" alt="达令" />
									</a>
									<a href="#">
										<img src="__ROOT__/Index/Common/images/header/categoryBrand1-2.jpg" alt="达令" />
									</a>
									<a href="#">
										<img src="__ROOT__/Index/Common/images/header/categoryBrand1-3.jpg" alt="达令" />
									</a>
									<a href="#">
										<img src="__ROOT__/Index/Common/images/header/categoryBrand1-4.jpg" alt="达令" />
									</a>
								</div>
								<div class="dropDetail clearFloat">
									<div class="brandAd">
										<a href="#"><img src="__ROOT__/Index/Common/images/header/categoryAd1.jpg" alt="达令" /></a>	
									</div>
									<div class="item">
										<div class="itemTitle">
											<a href="#">面部护肤</a>
										</div>
										<div class="itemDetail">
											<a href="#">面膜</a>
											<a href="#">化妆水</a>
											<a href="#">洁面</a>
											<a href="#">防嗮</a>
											<a href="#">面霜/乳液</a>
											<a href="#">精华</a>
											<a href="#">眼部护理</a>
											<a href="#">护肤套装</a>
											<a href="#">唇部护理</a>
											<a href="#">精油</a>
											<a href="#">美妆工具</a>
											<a href="#">男士专区</a>
										</div>	
									</div>
									<div class="item">
										<div class="itemTitle">
											<a href="#">彩妆香氛</a>
										</div>
										<div class="itemDetail">
											<a href="#">卸妆</a>
											<a href="#">女士香水</a>
											<a href="#">隔离/底妆</a>
											<a href="#">唇膏口红</a>
											<a href="#">眼妆/腮红</a>
											<a href="#">美甲</a>
										</div>	
									</div>
									<div class="item">
										<div class="itemTitle">
											<a href="#">个护保健</a>
										</div>
										<div class="itemDetail">
											<a href="#">沐浴/体乳</a>
											<a href="#">洗发/护发</a>
											<a href="#">口腔护理</a>
											<a href="#">美体护理</a>
											<a href="#">手足护理</a>
											<a href="#">驱蚊凝露</a>
											<a href="#">女性卫生</a>
											<a href="#">保健品</a>
										</div>	
									</div>
								</div>
							</div>
						</dd>
					</dl>
					<dl>
						<dt>
							<img src="__ROOT__/Index/Common/images/header/categoryIcon2.png" alt="达令" />
							全球零食
						</dt>
						<dd class="categoryShelter"></dd>
						<dd class="categorySort">
							<div class="sortBox">
								<a href="#">饼干</a>
								<a href="#">威化</a>
								<a href="#">麦片</a>
								<a href="#">糖果</a>
								<a href="#">巧克力</a>
								<a href="#">膨化食品</a>
								<a href="#">咖啡</a>
							</div>
						</dd>
						<dd class="categoryDrop clearFloat">
							<div class="dropBox clearFloat">
								<div class="dropTitle">
									全球零食
								</div>
								<div class="brand clearFloat">
									<a href="#">
										<img src="__ROOT__/Index/Common/images/header/categoryBrand2-1.jpg" alt="达令" />
									</a>
									<a href="#">
										<img src="__ROOT__/Index/Common/images/header/categoryBrand2-2.jpg" alt="达令" />
									</a>
									<a href="#">
										<img src="__ROOT__/Index/Common/images/header/categoryBrand2-3.jpg" alt="达令" />
									</a>
									<a href="#">
										<img src="__ROOT__/Index/Common/images/header/categoryBrand2-4.jpg" alt="达令" />
									</a>
								</div>
								<div class="dropDetail clearFloat">
									<div class="brandAd">
										<a href="#"><img src="__ROOT__/Index/Common/images/header/categoryAd2.jpg" alt="达令" /></a>	
									</div>
									<div class="item">
										<div class="itemTitle">
											<a href="#">饼干/糕点</a>
										</div>
										<div class="itemDetail">
											<a href="#">饼干</a>
											<a href="#">威化</a>
											<a href="#">糕点</a>
											<a href="#">曲奇</a>
										</div>	
									</div>
									<div class="item">
										<div class="itemTitle">
											<a href="#">咖啡/冲饮</a>
										</div>
										<div class="itemDetail">
											<a href="#">蜂蜜</a>
											<a href="#">麦片</a>
											<a href="#">咖啡</a>
											<a href="#">冲引粉奶茶</a>
											<a href="#">茶/花果茶</a>
											<a href="#">养生柚子茶</a>
										</div>	
									</div>
									<div class="item">
										<div class="itemTitle">
											<a href="#">糖果/巧克力</a>
										</div>
										<div class="itemDetail">
											<a href="#">糖果</a>
											<a href="#">巧克力</a>
										</div>	
									</div>
									<div class="item">
										<div class="itemTitle">
											<a href="#">休闲食品</a>
										</div>
										<div class="itemDetail">
											<a href="#">膨化零食</a>
											<a href="#">薯片玉米片</a>
											<a href="#">海味即食</a>
											<a href="#">果冻/布丁</a>
											<a href="#">肉松/肉干</a>
											<a href="#">蜜饯</a>
										</div>	
									</div>
									<div class="item">
										<div class="itemTitle">
											<a href="#">坚果/果干</a>
										</div>
										<div class="itemDetail">
											<a href="#">坚果</a>
											<a href="#">果干</a>
										</div>	
									</div>
									<div class="item">
										<div class="itemTitle">
											<a href="#">饮料/酒水</a>
										</div>
										<div class="itemDetail">
											<a href="#">饮料</a>
											<a href="#">酒</a>
										</div>	
									</div>
								</div>
							</div>
						</dd>
					</dl>
					<dl>
						<dt>
							<img src="__ROOT__/Index/Common/images/header/categoryIcon3.png" alt="达令" />
							创意生活
						</dt>
						<dd class="categoryShelter"></dd>
						<dd class="categorySort">
							<div class="sortBox">
								<a href="#">水杯/保温杯</a>
								<a href="#">随身小物件</a>
								<a href="#">玩偶</a>
								<a href="#">钥匙挂件</a>
							</div>
						</dd>
						<dd class="categoryDrop clearFloat">
							<div class="dropBox clearFloat">
								<div class="dropTitle">
									创意生活
								</div>
								<div class="brand clearFloat">
									<a href="#">
										<img src="__ROOT__/Index/Common/images/header/categoryBrand3-1.jpg" alt="达令" />
									</a>
									<a href="#">
										<img src="__ROOT__/Index/Common/images/header/categoryBrand3-2.jpg" alt="达令" />
									</a>
									<a href="#">
										<img src="__ROOT__/Index/Common/images/header/categoryBrand3-3.jpg" alt="达令" />
									</a>
									<a href="#">
										<img src="__ROOT__/Index/Common/images/header/categoryBrand3-4.jpg" alt="达令" />
									</a>
								</div>
								<div class="dropDetail clearFloat">
									<div class="brandAd">
										<a href="#"><img src="__ROOT__/Index/Common/images/header/categoryAd3.jpg" alt="达令" /></a>	
									</div>
									<div class="item">
										<div class="itemTitle">
											<a href="#">厨房伴侣</a>
										</div>
										<div class="itemDetail">
											<a href="#">水杯/保温杯</a>
											<a href="#">厨房配件</a>
											<a href="#">厨房清洁</a>
											<a href="#">水壶/净水壶</a>
											<a href="#">茶具</a>
											<a href="#">咖啡具/酒具</a>
											<a href="#">餐具</a>
										</div>	
									</div>
									<div class="item">
										<div class="itemTitle">
											<a href="#">创意礼物</a>
										</div>
										<div class="itemDetail">
											<a href="#">随身小物件</a>
											<a href="#">玩偶</a>
											<a href="#">钥匙挂件</a>
											<a href="#">其他创意礼品</a>
										</div>	
									</div>
									<div class="item">
										<div class="itemTitle">
											<a href="#">品质生活</a>
										</div>
										<div class="itemDetail">
											<a href="#">衣物清洁</a>
											<a href="#">居室清洁</a>
											<a href="#">卫浴清洁</a>
											<a href="#">伞/雨具</a>
											<a href="#">除臭/芳香</a>
											<a href="#">收纳用品</a>
											<a href="#">卫浴用品</a>
											<a href="#">驱蚊/防蚊</a>
											<a href="#">纸品湿巾</a>
											<a href="#">汽车用品</a>
											<a href="#">宠物用品</a>
											<a href="#">健身器材</a>
											<a href="#">户外用品</a>
											<a href="#">家居服</a>
										</div>	
									</div>
									<div class="item">
										<div class="itemTitle">
											<a href="#">温馨家居</a>
										</div>
										<div class="itemDetail">
											<a href="#">床品套件</a>
											<a href="#">抱枕靠垫</a>
											<a href="#">被子/毯子</a>
											<a href="#">毛巾浴巾</a>
											<a href="#">创意家居</a>
											<a href="#">香薰/蜡烛</a>
											<a href="#">装饰摆件</a>
											<a href="#">墙贴/装饰贴</a>
											<a href="#">相框/照片墙</a>
											<a href="#">钟表</a>
											<a href="#">其他家居用品</a>
										</div>	
									</div>
									<div class="item">
										<div class="itemTitle">
											<a href="#">趣味文具</a>
										</div>
										<div class="itemDetail">
											<a href="#">记事本</a>
											<a href="#">笔</a>
											<a href="#">文具收纳</a>
											<a href="#">其他办公文具</a>
										</div>	
									</div>
								</div>
							</div>
						</dd>
					</dl>
					<dl>
						<dt>
							<img src="__ROOT__/Index/Common/images/header/categoryIcon4.png" alt="达令" />
							时尚配饰
						</dt>
						<dd class="categoryShelter"></dd>
						<dd class="categorySort">
							<div class="sortBox">
								<a href="#">奢侈品</a>
								<a href="#">配饰</a>
								<a href="#">箱包</a>
								<a href="#">项链</a>
								<a href="#">手链</a>
								<a href="#">耳饰</a>
								<a href="#">戒指</a>
								<a href="#">太阳镜</a>
							</div>
						</dd>
						<dd class="categoryDrop clearFloat">
							<div class="dropBox clearFloat">
								<div class="dropTitle">
									时尚配饰
								</div>
								<div class="brand clearFloat">
									<a href="#">
										<img src="__ROOT__/Index/Common/images/header/categoryBrand4-1.jpg" alt="达令" />
									</a>
									<a href="#">
										<img src="__ROOT__/Index/Common/images/header/categoryBrand4-2.jpg" alt="达令" />
									</a>
									<a href="#">
										<img src="__ROOT__/Index/Common/images/header/categoryBrand4-3.jpg" alt="达令" />
									</a>
									<a href="#">
										<img src="__ROOT__/Index/Common/images/header/categoryBrand4-4.jpg" alt="达令" />
									</a>
								</div>
								<div class="dropDetail clearFloat">
									<div class="brandAd">
										<a href="#"><img src="__ROOT__/Index/Common/images/header/categoryAd4.jpg" alt="达令" /></a>	
									</div>
									<div class="item">
										<div class="itemTitle">
											<a href="#">时尚配饰</a>
										</div>
										<div class="itemDetail">
											<a href="#">奢侈品</a>
											<a href="#">配饰</a>
											<a href="#">箱包</a>
										</div>	
									</div>
									<div class="item">
										<div class="itemTitle">
											<a href="#">饰品</a>
										</div>
										<div class="itemDetail">
											<a href="#">项链</a>
											<a href="#">手链</a>
											<a href="#">耳饰</a>
											<a href="#">戒指</a>
											<a href="#">太阳镜</a>
											<a href="#">腕表</a>
											<a href="#">发饰</a>
											<a href="#">“鹿”小物</a>
											<a href="#">随身小物件</a>
											<a href="#">毛衣链</a>
											<a href="#">其它配饰</a>
											<a href="#">镜架</a>
										</div>	
									</div>
									<div class="item">
										<div class="itemTitle">
											<a href="#">脚链</a>
										</div>
										<div class="itemDetail">
											<a href="#">脚链</a>
										</div>	
									</div>
									<div class="item">
										<div class="itemTitle">
											<a href="#">轻奢</a>
										</div>
										<div class="itemDetail">
											<a href="#">轻奢大包</a>
											<a href="#">轻奢小包</a>
											<a href="#">轻奢钱包</a>
											<a href="#">轻奢手包</a>
											<a href="#">轻奢手包</a>
											<a href="#">轻奢手表</a>
											<a href="#">轻奢眼镜</a>
											<a href="#">轻奢饰品</a>
											<a href="#">轻奢腰带</a>
											<a href="#">轻奢配件</a>
											<a href="#">轻奢鞋履</a>
										</div>	
									</div>
									<div class="item">
										<div class="itemTitle">
											<a href="#">包袋</a>
										</div>
										<div class="itemDetail">
											<a href="#">双肩包</a>
											<a href="#">单肩包</a>
											<a href="#">手提包</a>
											<a href="#">钱包</a>
											<a href="#">拉杆箱</a>
											<a href="#">功能包</a>
											<a href="#">零钱包</a>
										</div>	
									</div>
									<div class="item">
										<div class="itemTitle">
											<a href="#">服饰配件</a>
										</div>
										<div class="itemDetail">
											<a href="#">丝巾</a>
											<a href="#">帽子</a>
											<a href="#">袜子</a>
											<a href="#">手套</a>
											<a href="#">贴身衣物</a>
											<a href="#">腰带</a>
											<a href="#">其它服配</a>
											<a href="#">围巾</a>
											<a href="#">围巾</a>
										</div>	
									</div>
									<div class="item">
										<div class="itemTitle">
											<a href="#">鞋履</a>
										</div>
										<div class="itemDetail">
											<a href="#">运动鞋</a>
											<a href="#">拖鞋</a>
											<a href="#">鞋</a>
											<a href="#">钱包</a>
										</div>	
									</div>
								</div>
							</div>
						</dd>
					</dl>
				</div>

			</div>
			<ul class="naviBar clearFloat">
				<li><a href="#">首页</a></li>
				<li><a href="#">极致美护</a></li>
				<li><a href="#">全球零食</a></li>
				<li><a href="#">创意生活</a></li>
				<li><a href="#">时尚配饰</a></li>
				<li><a href="#">尖货女装</a></li>
				<li><a href="#">3C家电</a></li>
			</ul>
		</div>
	</div>
</header>

		</div>
		<div class="indexWrap" ng-app='indexApp' ng-controller='indexController'>
			<div class="indexSwiper">
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<img src="__ROOT__/Index/Common/images/index/banner1.gif" alt="达令" />
						</div>
						<div class="swiper-slide">
							<img src="__ROOT__/Index/Common/images/index/banner2.jpg" alt="达令" />
						</div>
					</div>
					<div class="swiper-pagination"></div>
					<div class="swiper-button-prev"></div>
    				<div class="swiper-button-next"></div>
				</div>
			</div>
			<div class="indexMain">
				<div class="indexTitle">
					<p>发现·好货</p>
				</div>
				<section class="indexNew">
					<h2 class="title">
						<div class="left">
							<span class="text1">
								今日上新
							</span>
							<span class="text2">
								早上八点上新
							</span>
						</div>
						<div class="right">
							<a class="exchange" href='#'>
								换一批
							</a>
							<span></span>
						</div>
					</h2>
					<div class="box">
						<ul class="up">
							<li>
								<div class="pic">
									<a href="#">
										<img src="__ROOT__/Index/Common/product-images/indextestpic.jpg" alt="达令" />
									</a>
									<span class="joinTrolley">
										加入购物车
										<span></span>
									</span>
								</div>
								<div class="text">
									<div class="textUp">
										<span class="discount">
											￥<span>59.00
											</span>
										</span>
										<span class="originPirce">
											￥<span>69.00</span>
										</span>
										<span class="collect">
											<span>52</span>人收藏
										</span>
									</div>
									<div class="textDown">
										<span class="discount">
											8折/
										</span>
										<a href="#" class="introduce">
											 [国货精选 · 大量补水，水润柔滑不干燥] 相宜本草 相宜本草四倍多萃润泽柔肤水 
										</a>
									</div>
								</div>
							</li>
							<li>
								<div class="pic">
									<a href="#">
										<img src="__ROOT__/Index/Common/product-images/indextestpic.jpg" alt="达令" />
									</a>
									<span class="joinTrolley">
										加入购物车
										<span></span>
									</span>
								</div>
								<div class="text">
									<div class="textUp">
										<span class="discount">
											￥<span>59.00
											</span>
										</span>
										<span class="originPirce">
											￥<span>69.00</span>
										</span>
										<span class="collect">
											<span>52</span>人收藏
										</span>
									</div>
									<div class="textDown">
										<span class="discount">
											8折/
										</span>
										<a href="#" class="introduce">
											 [国货精选 · 大量补水，水润柔滑不干燥] 相宜本草 相宜本草四倍多萃润泽柔肤水 
										</a>
									</div>
								</div>
							</li>
							<li>
								<div class="pic">
									<a href="#">
										<img src="__ROOT__/Index/Common/product-images/indextestpic.jpg" alt="达令" />
									</a>
									<span class="joinTrolley">
										加入购物车
										<span></span>
									</span>
								</div>
								<div class="text">
									<div class="textUp">
										<span class="discount">
											￥<span>59.00
											</span>
										</span>
										<span class="originPirce">
											￥<span>69.00</span>
										</span>
										<span class="collect">
											<span>52</span>人收藏
										</span>
									</div>
									<div class="textDown">
										<span class="discount">
											8折/
										</span>
										<a href="#" class="introduce">
											 [国货精选 · 大量补水，水润柔滑不干燥] 相宜本草 相宜本草四倍多萃润泽柔肤水 
										</a>
									</div>
								</div>
							</li>
							<li>
								<div class="pic">
									<a href="#">
										<img src="__ROOT__/Index/Common/product-images/indextestpic.jpg" alt="达令" />
									</a>
									<span class="joinTrolley">
										加入购物车
										<span></span>
									</span>
								</div>
								<div class="text">
									<div class="textUp">
										<span class="discount">
											￥<span>59.00
											</span>
										</span>
										<span class="originPirce">
											￥<span>69.00</span>
										</span>
										<span class="collect">
											<span>52</span>人收藏
										</span>
									</div>
									<div class="textDown">
										<span class="discount">
											8折/
										</span>
										<a href="#" class="introduce">
											 [国货精选 · 大量补水，水润柔滑不干燥] 相宜本草 相宜本草四倍多萃润泽柔肤水 
										</a>
									</div>
								</div>
							</li>
						</ul>
						<ul class="down">
							<li class="left">
								<div class="pic">
									<a href="#">
										<img src="__ROOT__/Index/Common/product-images/indextestpic2.jpg" alt="达令" />
									</a>
									<span class="joinTrolley">
										加入购物车
										<span></span>
									</span>
								</div>
								<div class="text">
									<div class="textUp">
										<span class="discount">
											￥<span>98.00
											</span>
										</span>
										<span class="originPirce">
											￥<span>119.00</span>
										</span>
										<span class="collect">
											<span>64</span>人收藏
										</span>
									</div>
									<div class="textDown">
										<span class="discount">
											8折/
										</span>
										<a href="#" class="introduce">
											 可爱动物造型餐具4件套 (花色 )
										</a>
									</div>
								</div>
							</li>
							<li class="right">
								<div class="pic">
									<a href="#">
										<img src="__ROOT__/Index/Common/product-images/indextestpic2.jpg" alt="达令" />
									</a>
									<span class="joinTrolley">
										加入购物车
										<span></span>
									</span>
								</div>
								<div class="text">
									<div class="textUp">
										<span class="discount">
											￥<span>98.00
											</span>
										</span>
										<span class="originPirce">
											￥<span>119.00</span>
										</span>
										<span class="collect">
											<span>64</span>人收藏
										</span>
									</div>
									<div class="textDown">
										<span class="discount">
											8折/
										</span>
										<a href="#" class="introduce">
											 可爱动物造型餐具4件套 (花色 )
										</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</section>
				<section class="indexWorthBuy">
					<h2 class="title">
						<span class="text1">
							神马值得买
						</span>
						<span class="text2">
							帮你挑选全球好货
						</span>
					</h2>
					<h3 class="subtitle">
						<span></span>
						全球好货
					</h3>
					<div class="box">
						<ul>
							<li><a href="#">
								<img src="__ROOT__/Index/Common/images/index/thailand.jpg" alt="达令" />
							</a></li>
							<li><a href="#">
								<img src="__ROOT__/Index/Common/images/index/australian.jpg" alt="达令" />
							</a></li>
							<li><a href="#">
								<img src="__ROOT__/Index/Common/images/index/japan.jpg" alt="达令" />
							</a></li>
							<li><a href="#">
								<img src="__ROOT__/Index/Common/images/index/france.jpg" alt="达令" />
							</a></li>
							<li><a href="#">
								<img src="__ROOT__/Index/Common/images/index/korea.jpg" alt="达令" />
							</a></li>
						</ul>
					</div>
				</section>
				<section class="indexGood">
					<h3 class="subtitle">
						<span></span>
						大家都说好
					</h3>
					<div class="box">
						<div class="tab">
							<ul>
								<li class="current">全部商品</li>
								<li>极致美护</li>
								<li>全球零食</li>
								<li>创意生活</li>
								<li>时尚配饰</li>
								<li>3C数码</li>
							</ul>
						</div>
						<div class="list">
							<ul class="item1 clearFloat">
								<li>
									<div class="pic">
										<a href="#">
											<img src="__ROOT__/Index/Common/product-images/indextestpic3.jpg" alt="达令" />
										</a>
									</div>
									<div class="text">
										<div class="textUp">
											<span class="discount">
												￥<span>46.90</span>
											</span>
											<span class="originPrice">
												￥<span>180.00</span>
											</span>
										</div>
										<div class="textMid">
											<a href="#">
												[品质生活 · 迷你女士剃毛器] 锦仕 迷你女士剃毛器全身脱毛器(11*3CM 粉色)
											</a>
										</div>
										<div class="textDown">
											<a href="#">
												<span class="userImg"></span>
												<span class="userComment">
													<span class="detail">“挺不错的，主要是方便”</span>
													<span class="repute">共有26295条评论 好评率98% >></span>
												</span>
												<span class="bg"></span>
											</a>
										</div>
									</div>
								</li>
								<li>
									<div class="pic">
										<a href="#">
											<img src="__ROOT__/Index/Common/product-images/indextestpic3.jpg" alt="达令" />
										</a>
									</div>
									<div class="text">
										<div class="textUp">
											<span class="discount">
												￥<span>46.90</span>
											</span>
											<span class="originPrice">
												￥<span>180.00</span>
											</span>
										</div>
										<div class="textMid">
											<a href="#">
												[品质生活 · 迷你女士剃毛器] 锦仕 迷你女士剃毛器全身脱毛器(11*3CM 粉色)
											</a>
										</div>
										<div class="textDown">
											<a href="#">
												<span class="userImg"></span>
												<span class="userComment">
													<span class="detail">“挺不错的，主要是方便”</span>
													<span class="repute">共有26295条评论 好评率98% >></span>
												</span>
												<span class="bg"></span>
											</a>
										</div>
									</div>
								</li>
								<li>
									<div class="pic">
										<a href="#">
											<img src="__ROOT__/Index/Common/product-images/indextestpic3.jpg" alt="达令" />
										</a>
									</div>
									<div class="text">
										<div class="textUp">
											<span class="discount">
												￥<span>46.90</span>
											</span>
											<span class="originPrice">
												￥<span>180.00</span>
											</span>
										</div>
										<div class="textMid">
											<a href="#">
												[品质生活 · 迷你女士剃毛器] 锦仕 迷你女士剃毛器全身脱毛器(11*3CM 粉色)
											</a>
										</div>
										<div class="textDown">
											<a href="#">
												<span class="userImg"></span>
												<span class="userComment">
													<span class="detail">“挺不错的，主要是方便”</span>
													<span class="repute">共有26295条评论 好评率98% >></span>
												</span>
												<span class="bg"></span>
											</a>
										</div>
									</div>
								</li>
								<li>
									<div class="pic">
										<a href="#">
											<img src="__ROOT__/Index/Common/product-images/indextestpic3.jpg" alt="达令" />
										</a>
									</div>
									<div class="text">
										<div class="textUp">
											<span class="discount">
												￥<span>46.90</span>
											</span>
											<span class="originPrice">
												￥<span>180.00</span>
											</span>
										</div>
										<div class="textMid">
											<a href="#">
												[品质生活 · 迷你女士剃毛器] 锦仕 迷你女士剃毛器全身脱毛器(11*3CM 粉色)
											</a>
										</div>
										<div class="textDown">
											<a href="#">
												<span class="userImg"></span>
												<span class="userComment">
													<span class="detail">“挺不错的，主要是方便”</span>
													<span class="repute">共有26295条评论 好评率98% >></span>
												</span>
												<span class="bg"></span>
											</a>
										</div>
									</div>
								</li>
								<li>
									<div class="pic">
										<a href="#">
											<img src="__ROOT__/Index/Common/product-images/indextestpic3.jpg" alt="达令" />
										</a>
									</div>
									<div class="text">
										<div class="textUp">
											<span class="discount">
												￥<span>46.90</span>
											</span>
											<span class="originPrice">
												￥<span>180.00</span>
											</span>
										</div>
										<div class="textMid">
											<a href="#">
												[品质生活 · 迷你女士剃毛器] 锦仕 迷你女士剃毛器全身脱毛器(11*3CM 粉色)
											</a>
										</div>
										<div class="textDown">
											<a href="#">
												<span class="userImg"></span>
												<span class="userComment">
													<span class="detail">“挺不错的，主要是方便”</span>
													<span class="repute">共有26295条评论 好评率98% >></span>
												</span>
												<span class="bg"></span>
											</a>
										</div>
									</div>
								</li>
								<li>
									<div class="pic">
										<a href="#">
											<img src="__ROOT__/Index/Common/product-images/indextestpic3.jpg" alt="达令" />
										</a>
									</div>
									<div class="text">
										<div class="textUp">
											<span class="discount">
												￥<span>46.90</span>
											</span>
											<span class="originPrice">
												￥<span>180.00</span>
											</span>
										</div>
										<div class="textMid">
											<a href="#">
												[品质生活 · 迷你女士剃毛器] 锦仕 迷你女士剃毛器全身脱毛器(11*3CM 粉色)
											</a>
										</div>
										<div class="textDown">
											<a href="#">
												<span class="userImg"></span>
												<span class="userComment">
													<span class="detail">“挺不错的，主要是方便”</span>
													<span class="repute">共有26295条评论 好评率98% >></span>
												</span>
												<span class="bg"></span>
											</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</section>
				<section class="indexBuyAgain">
					<h3 class="subtitle">
						<span></span>
						买了又买
					</h3>
					<div class="box clearFloat">
						<dl>
							<dt>极致美护</dt>
							<dd class="clearFloat current">
								<span class="tag">TOP1</span>
								<div class="pic">
									<a href="#">
										<img src="__ROOT__/Index/Common/product-images/indextestpic5.jpg" alt="达令" />
									</a>
								</div>
								<div class="text">
									<div class="textUp">
										<a href="#">
											[ · 肌肤“大扫除”必备] DMC 欣兰冻膜面膜(225g)
										</a>
									</div>
									<div class="textMid">
										<span class="discount">
											￥<span>128.00</span>
										</span>
										<span class="originPrice">
											￥199.00
										</span>
									</div>
									<div class="textDown">
										<span class="state">
											共 23161 购买
											<br />
											<a href="#">
												回头率2% >>
											</a>
										</span>
									</div>
								</div>
							</dd>
							<dd class="clearFloat">
								<span class="tag">TOP2</span>
								<div class="pic">
									<a href="#">
										<img src="__ROOT__/Index/Common/product-images/indextestpic5.jpg" alt="达令" />
									</a>
								</div>
								<div class="text">
									<div class="textUp">
										<a href="#">
											[ · 肌肤“大扫除”必备] DMC 欣兰冻膜面膜(225g)
										</a>
									</div>
									<div class="textMid">
										<span class="discount">
											￥<span>128.00</span>
										</span>
										<span class="originPrice">
											￥199.00
										</span>
									</div>
									<div class="textDown">
										<span class="state">
											共 23161 购买
											<br />
											<a href="#">
												回头率2% >>
											</a>
										</span>
									</div>
								</div>
							</dd>
							<dd class="clearFloat">
								<span class="tag">TOP3</span>
								<div class="pic">
									<a href="#">
										<img src="__ROOT__/Index/Common/product-images/indextestpic5.jpg" alt="达令" />
									</a>
								</div>
								<div class="text">
									<div class="textUp">
										<a href="#">
											[ · 肌肤“大扫除”必备] DMC 欣兰冻膜面膜(225g)
										</a>
									</div>
									<div class="textMid">
										<span class="discount">
											￥<span>128.00</span>
										</span>
										<span class="originPrice">
											￥199.00
										</span>
									</div>
									<div class="textDown">
										<span class="state">
											共 23161 购买
											<br />
											<a href="#">
												回头率2% >>
											</a>
										</span>
									</div>
								</div>
							</dd>
							<dd class="clearFloat">
								<span class="tag gray">TOP4</span>
								<div class="pic">
									<a href="#">
										<img src="__ROOT__/Index/Common/product-images/indextestpic5.jpg" alt="达令" />
									</a>
								</div>
								<div class="text">
									<div class="textUp">
										<a href="#">
											[ · 肌肤“大扫除”必备] DMC 欣兰冻膜面膜(225g)
										</a>
									</div>
									<div class="textMid">
										<span class="discount">
											￥<span>128.00</span>
										</span>
										<span class="originPrice">
											￥199.00
										</span>
									</div>
									<div class="textDown">
										<span class="state">
											共 23161 购买
											<br />
											<a href="#">
												回头率2% >>
											</a>
										</span>
									</div>
								</div>
							</dd>
							<dd class="clearFloat">
								<span class="tag gray">TOP5</span>
								<div class="pic">
									<a href="#">
										<img src="__ROOT__/Index/Common/product-images/indextestpic5.jpg" alt="达令" />
									</a>
								</div>
								<div class="text">
									<div class="textUp">
										<a href="#">
											[ · 肌肤“大扫除”必备] DMC 欣兰冻膜面膜(225g)
										</a>
									</div>
									<div class="textMid">
										<span class="discount">
											￥<span>128.00</span>
										</span>
										<span class="originPrice">
											￥199.00
										</span>
									</div>
									<div class="textDown">
										<span class="state">
											共 23161 购买
											<br />
											<a href="#">
												回头率2% >>
											</a>
										</span>
									</div>
								</div>
							</dd>
							<dd class="clearFloat">
								<span class="tag gray">TOP6</span>
								<div class="pic">
									<a href="#">
										<img src="__ROOT__/Index/Common/product-images/indextestpic5.jpg" alt="达令" />
									</a>
								</div>
								<div class="text">
									<div class="textUp">
										<a href="#">
											[ · 肌肤“大扫除”必备] DMC 欣兰冻膜面膜(225g)
										</a>
									</div>
									<div class="textMid">
										<span class="discount">
											￥<span>128.00</span>
										</span>
										<span class="originPrice">
											￥199.00
										</span>
									</div>
									<div class="textDown">
										<span class="state">
											共 23161 购买
											<br />
											<a href="#">
												回头率2% >>
											</a>
										</span>
									</div>
								</div>
							</dd>
						</dl>
						<dl>
							<dt>全球零食</dt>
							<dd class="clearFloat current">
								<span class="tag">TOP1</span>
								<div class="pic">
									<a href="#">
										<img src="__ROOT__/Index/Common/product-images/indextestpic5.jpg" alt="达令" />
									</a>
								</div>
								<div class="text">
									<div class="textUp">
										<a href="#">
											[ · 肌肤“大扫除”必备] DMC 欣兰冻膜面膜(225g)
										</a>
									</div>
									<div class="textMid">
										<span class="discount">
											￥<span>128.00</span>
										</span>
										<span class="originPrice">
											￥199.00
										</span>
									</div>
									<div class="textDown">
										<span class="state">
											共 23161 购买
											<br />
											<a href="#">
												回头率2% >>
											</a>
										</span>
									</div>
								</div>
							</dd>
							<dd class="clearFloat">
								<span class="tag">TOP2</span>
								<div class="pic">
									<a href="#">
										<img src="__ROOT__/Index/Common/product-images/indextestpic5.jpg" alt="达令" />
									</a>
								</div>
								<div class="text">
									<div class="textUp">
										<a href="#">
											[ · 肌肤“大扫除”必备] DMC 欣兰冻膜面膜(225g)
										</a>
									</div>
									<div class="textMid">
										<span class="discount">
											￥<span>128.00</span>
										</span>
										<span class="originPrice">
											￥199.00
										</span>
									</div>
									<div class="textDown">
										<span class="state">
											共 23161 购买
											<br />
											<a href="#">
												回头率2% >>
											</a>
										</span>
									</div>
								</div>
							</dd>
							<dd class="clearFloat">
								<span class="tag">TOP3</span>
								<div class="pic">
									<a href="#">
										<img src="__ROOT__/Index/Common/product-images/indextestpic5.jpg" alt="达令" />
									</a>
								</div>
								<div class="text">
									<div class="textUp">
										<a href="#">
											[ · 肌肤“大扫除”必备] DMC 欣兰冻膜面膜(225g)
										</a>
									</div>
									<div class="textMid">
										<span class="discount">
											￥<span>128.00</span>
										</span>
										<span class="originPrice">
											￥199.00
										</span>
									</div>
									<div class="textDown">
										<span class="state">
											共 23161 购买
											<br />
											<a href="#">
												回头率2% >>
											</a>
										</span>
									</div>
								</div>
							</dd>
							<dd class="clearFloat">
								<span class="tag gray">TOP4</span>
								<div class="pic">
									<a href="#">
										<img src="__ROOT__/Index/Common/product-images/indextestpic5.jpg" alt="达令" />
									</a>
								</div>
								<div class="text">
									<div class="textUp">
										<a href="#">
											[ · 肌肤“大扫除”必备] DMC 欣兰冻膜面膜(225g)
										</a>
									</div>
									<div class="textMid">
										<span class="discount">
											￥<span>128.00</span>
										</span>
										<span class="originPrice">
											￥199.00
										</span>
									</div>
									<div class="textDown">
										<span class="state">
											共 23161 购买
											<br />
											<a href="#">
												回头率2% >>
											</a>
										</span>
									</div>
								</div>
							</dd>
							<dd class="clearFloat">
								<span class="tag gray">TOP5</span>
								<div class="pic">
									<a href="#">
										<img src="__ROOT__/Index/Common/product-images/indextestpic5.jpg" alt="达令" />
									</a>
								</div>
								<div class="text">
									<div class="textUp">
										<a href="#">
											[ · 肌肤“大扫除”必备] DMC 欣兰冻膜面膜(225g)
										</a>
									</div>
									<div class="textMid">
										<span class="discount">
											￥<span>128.00</span>
										</span>
										<span class="originPrice">
											￥199.00
										</span>
									</div>
									<div class="textDown">
										<span class="state">
											共 23161 购买
											<br />
											<a href="#">
												回头率2% >>
											</a>
										</span>
									</div>
								</div>
							</dd>
							<dd class="clearFloat">
								<span class="tag gray">TOP6</span>
								<div class="pic">
									<a href="#">
										<img src="__ROOT__/Index/Common/product-images/indextestpic5.jpg" alt="达令" />
									</a>
								</div>
								<div class="text">
									<div class="textUp">
										<a href="#">
											[ · 肌肤“大扫除”必备] DMC 欣兰冻膜面膜(225g)
										</a>
									</div>
									<div class="textMid">
										<span class="discount">
											￥<span>128.00</span>
										</span>
										<span class="originPrice">
											￥199.00
										</span>
									</div>
									<div class="textDown">
										<span class="state">
											共 23161 购买
											<br />
											<a href="#">
												回头率2% >>
											</a>
										</span>
									</div>
								</div>
							</dd>
						</dl>
						<dl>
							<dt>创意生活</dt>
							<dd class="clearFloat current">
								<span class="tag">TOP1</span>
								<div class="pic">
									<a href="#">
										<img src="__ROOT__/Index/Common/product-images/indextestpic5.jpg" alt="达令" />
									</a>
								</div>
								<div class="text">
									<div class="textUp">
										<a href="#">
											[ · 肌肤“大扫除”必备] DMC 欣兰冻膜面膜(225g)
										</a>
									</div>
									<div class="textMid">
										<span class="discount">
											￥<span>128.00</span>
										</span>
										<span class="originPrice">
											￥199.00
										</span>
									</div>
									<div class="textDown">
										<span class="state">
											共 23161 购买
											<br />
											<a href="#">
												回头率2% >>
											</a>
										</span>
									</div>
								</div>
							</dd>
							<dd class="clearFloat">
								<span class="tag">TOP2</span>
								<div class="pic">
									<a href="#">
										<img src="__ROOT__/Index/Common/product-images/indextestpic5.jpg" alt="达令" />
									</a>
								</div>
								<div class="text">
									<div class="textUp">
										<a href="#">
											[ · 肌肤“大扫除”必备] DMC 欣兰冻膜面膜(225g)
										</a>
									</div>
									<div class="textMid">
										<span class="discount">
											￥<span>128.00</span>
										</span>
										<span class="originPrice">
											￥199.00
										</span>
									</div>
									<div class="textDown">
										<span class="state">
											共 23161 购买
											<br />
											<a href="#">
												回头率2% >>
											</a>
										</span>
									</div>
								</div>
							</dd>
							<dd class="clearFloat">
								<span class="tag">TOP3</span>
								<div class="pic">
									<a href="#">
										<img src="__ROOT__/Index/Common/product-images/indextestpic5.jpg" alt="达令" />
									</a>
								</div>
								<div class="text">
									<div class="textUp">
										<a href="#">
											[ · 肌肤“大扫除”必备] DMC 欣兰冻膜面膜(225g)
										</a>
									</div>
									<div class="textMid">
										<span class="discount">
											￥<span>128.00</span>
										</span>
										<span class="originPrice">
											￥199.00
										</span>
									</div>
									<div class="textDown">
										<span class="state">
											共 23161 购买
											<br />
											<a href="#">
												回头率2% >>
											</a>
										</span>
									</div>
								</div>
							</dd>
							<dd class="clearFloat">
								<span class="tag gray">TOP4</span>
								<div class="pic">
									<a href="#">
										<img src="__ROOT__/Index/Common/product-images/indextestpic5.jpg" alt="达令" />
									</a>
								</div>
								<div class="text">
									<div class="textUp">
										<a href="#">
											[ · 肌肤“大扫除”必备] DMC 欣兰冻膜面膜(225g)
										</a>
									</div>
									<div class="textMid">
										<span class="discount">
											￥<span>128.00</span>
										</span>
										<span class="originPrice">
											￥199.00
										</span>
									</div>
									<div class="textDown">
										<span class="state">
											共 23161 购买
											<br />
											<a href="#">
												回头率2% >>
											</a>
										</span>
									</div>
								</div>
							</dd>
							<dd class="clearFloat">
								<span class="tag gray">TOP5</span>
								<div class="pic">
									<a href="#">
										<img src="__ROOT__/Index/Common/product-images/indextestpic5.jpg" alt="达令" />
									</a>
								</div>
								<div class="text">
									<div class="textUp">
										<a href="#">
											[ · 肌肤“大扫除”必备] DMC 欣兰冻膜面膜(225g)
										</a>
									</div>
									<div class="textMid">
										<span class="discount">
											￥<span>128.00</span>
										</span>
										<span class="originPrice">
											￥199.00
										</span>
									</div>
									<div class="textDown">
										<span class="state">
											共 23161 购买
											<br />
											<a href="#">
												回头率2% >>
											</a>
										</span>
									</div>
								</div>
							</dd>
							<dd class="clearFloat">
								<span class="tag gray">TOP6</span>
								<div class="pic">
									<a href="#">
										<img src="__ROOT__/Index/Common/product-images/indextestpic5.jpg" alt="达令" />
									</a>
								</div>
								<div class="text">
									<div class="textUp">
										<a href="#">
											[ · 肌肤“大扫除”必备] DMC 欣兰冻膜面膜(225g)
										</a>
									</div>
									<div class="textMid">
										<span class="discount">
											￥<span>128.00</span>
										</span>
										<span class="originPrice">
											￥199.00
										</span>
									</div>
									<div class="textDown">
										<span class="state">
											共 23161 购买
											<br />
											<a href="#">
												回头率2% >>
											</a>
										</span>
									</div>
								</div>
							</dd>
						</dl>
					</div>
				</section>
				<section class="indexDarkHorse">
					<h3 class="subtitle">
						<span></span>
						新品黑马
					</h3>
					<div class="box">
						<ul class="clearFloat">
							<li>
								<div class="pic">
									<a href="#">
										<img src="__ROOT__/Index/Common/product-images/indextestpic6.jpg" alt="达令" />
									</a>
								</div>
								<div class="text">
									<div class="textUp">
										<span class="discount">
											￥<span>39.90</span>
										</span>
										<span class="originPrice">
											￥<span>48.60</span>
										</span>
									</div>
									<div class="textMid">
										<a href="#">
											[中国 · 清凉一夏好味道] 利宾纳 黑加仑子汁原味果汁饮品(黑加仑子原味 330ml*4袋)
										</a>
									</div>
									<div class="textDown">
										<span class="recommend">
											推荐理由：
											<br />
											<span>“清凉一夏好味道”</span>
										</span>
										<span class="bg"></span>
									</div>
								</div>
							</li>
							<li>
								<div class="pic">
									<a href="#">
										<img src="__ROOT__/Index/Common/product-images/indextestpic6.jpg" alt="达令" />
									</a>
								</div>
								<div class="text">
									<div class="textUp">
										<span class="discount">
											￥<span>39.90</span>
										</span>
										<span class="originPrice">
											￥<span>48.60</span>
										</span>
									</div>
									<div class="textMid">
										<a href="#">
											[中国 · 清凉一夏好味道] 利宾纳 黑加仑子汁原味果汁饮品(黑加仑子原味 330ml*4袋)
										</a>
									</div>
									<div class="textDown">
										<span class="recommend">
											推荐理由：
											<br />
											<span>“清凉一夏好味道”</span>
										</span>
										<span class="bg"></span>
									</div>
								</div>
							</li>
							<li>
								<div class="pic">
									<a href="#">
										<img src="__ROOT__/Index/Common/product-images/indextestpic6.jpg" alt="达令" />
									</a>
								</div>
								<div class="text">
									<div class="textUp">
										<span class="discount">
											￥<span>39.90</span>
										</span>
										<span class="originPrice">
											￥<span>48.60</span>
										</span>
									</div>
									<div class="textMid">
										<a href="#">
											[中国 · 清凉一夏好味道] 利宾纳 黑加仑子汁原味果汁饮品(黑加仑子原味 330ml*4袋)
										</a>
									</div>
									<div class="textDown">
										<span class="recommend">
											推荐理由：
											<br />
											<span>“清凉一夏好味道”</span>
										</span>
										<span class="bg"></span>
									</div>
								</div>
							</li>
							<li>
								<div class="pic">
									<a href="#">
										<img src="__ROOT__/Index/Common/product-images/indextestpic6.jpg" alt="达令" />
									</a>
								</div>
								<div class="text">
									<div class="textUp">
										<span class="discount">
											￥<span>39.90</span>
										</span>
										<span class="originPrice">
											￥<span>48.60</span>
										</span>
									</div>
									<div class="textMid">
										<a href="#">
											[中国 · 清凉一夏好味道] 利宾纳 黑加仑子汁原味果汁饮品(黑加仑子原味 330ml*4袋)
										</a>
									</div>
									<div class="textDown">
										<span class="recommend">
											推荐理由：
											<br />
											<span>“清凉一夏好味道”</span>
										</span>
										<span class="bg"></span>
									</div>
								</div>
							</li>
							<li>
								<div class="pic">
									<a href="#">
										<img src="__ROOT__/Index/Common/product-images/indextestpic6.jpg" alt="达令" />
									</a>
								</div>
								<div class="text">
									<div class="textUp">
										<span class="discount">
											￥<span>39.90</span>
										</span>
										<span class="originPrice">
											￥<span>48.60</span>
										</span>
									</div>
									<div class="textMid">
										<a href="#">
											[中国 · 清凉一夏好味道] 利宾纳 黑加仑子汁原味果汁饮品(黑加仑子原味 330ml*4袋)
										</a>
									</div>
									<div class="textDown">
										<span class="recommend">
											推荐理由：
											<br />
											<span>“清凉一夏好味道”</span>
										</span>
										<span class="bg"></span>
									</div>
								</div>
							</li>
							<li>
								<div class="pic">
									<a href="#">
										<img src="__ROOT__/Index/Common/product-images/indextestpic6.jpg" alt="达令" />
									</a>
								</div>
								<div class="text">
									<div class="textUp">
										<span class="discount">
											￥<span>39.90</span>
										</span>
										<span class="originPrice">
											￥<span>48.60</span>
										</span>
									</div>
									<div class="textMid">
										<a href="#">
											[中国 · 清凉一夏好味道] 利宾纳 黑加仑子汁原味果汁饮品(黑加仑子原味 330ml*4袋)
										</a>
									</div>
									<div class="textDown">
										<span class="recommend">
											推荐理由：
											<br />
											<span>“清凉一夏好味道”</span>
										</span>
										<span class="bg"></span>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</section>
				<div class="indexTitle">
					<p>今日特卖·闪购</p>
				</div>
				<section class="indexSale clearFloat">
					<h2 class="title">
						<span class="text1">
							今日闪购
						</span>
						<span class="text2">
							每天都有惊喜最低5折
						</span>
					</h2>
					<div class="box">
						<div class="salelist">
							<ul >
								<li class="clearFloat">
									<div class="pic">
										<a href="#">
											<img src="__ROOT__/Index/Common/product-images/indextestpic7.jpg" alt="达令" />
										</a>
									</div>
									<div class="text">
										<div class="countdown">
											距离闪购结束
											<span class="hour">12</span>
											<span class="colon">:</span>
											<span class="min">00</span>
											<span class="colon">:</span>
											<span class="sec">00</span>
										</div>
										<div class="textUp">
											<span class="text1">
												5.3折<a href="#">[日本 · 丰满嘟唇更立体] Makemania 透亮乳粉色唇蜜(9g)</a>
											</span>
											<span class="text2">
												透亮乳粉色唇蜜(9g)
											</span>
										</div>
										<div class="textMid">
											<span class="discount">
												￥<span>44.90</span>
											</span>
											<span class="originPrice">
												￥169.00
											</span>
										</div>
										<div class="textDown">
											<a href="#">立即抢购</a>
											<span class="countBuy">
												<span>32</span>人购买
											</span>
										</div>
									</div>
								</li>
							</ul>
							<ul >
								<li class="clearFloat">
									<div class="pic">
										<a href="#">
											<img src="__ROOT__/Index/Common/product-images/indextestpic7.jpg" alt="达令" />
										</a>
									</div>
									<div class="text">
										<div class="countdown">
											距离闪购结束
											<span class="hour">12</span>
											<span class="colon">:</span>
											<span class="min">00</span>
											<span class="colon">:</span>
											<span class="sec">00</span>
										</div>
										<div class="textUp">
											<span class="text1">
												5.3折<a href="#">[日本 · 丰满嘟唇更立体] Makemania 透亮乳粉色唇蜜(9g)</a>
											</span>
											<span class="text2">
												透亮乳粉色唇蜜(9g)
											</span>
										</div>
										<div class="textMid">
											<span class="discount">
												￥<span>44.90</span>
											</span>
											<span class="originPrice">
												￥169.00
											</span>
										</div>
										<div class="textDown">
											<a href="#">立即抢购</a>
											<span class="countBuy">
												<span>32</span>人购买
											</span>
										</div>
									</div>
								</li>
							</ul>
							<ul >
								<li class="clearFloat">
									<div class="pic">
										<a href="#">
											<img src="__ROOT__/Index/Common/product-images/indextestpic7.jpg" alt="达令" />
										</a>
									</div>
									<div class="text">
										<div class="countdown">
											距离闪购结束
											<span class="hour">12</span>
											<span class="colon">:</span>
											<span class="min">00</span>
											<span class="colon">:</span>
											<span class="sec">00</span>
										</div>
										<div class="textUp">
											<span class="text1">
												5.3折<a href="#">[日本 · 丰满嘟唇更立体] Makemania 透亮乳粉色唇蜜(9g)</a>
											</span>
											<span class="text2">
												透亮乳粉色唇蜜(9g)
											</span>
										</div>
										<div class="textMid">
											<span class="discount">
												￥<span>44.90</span>
											</span>
											<span class="originPrice">
												￥169.00
											</span>
										</div>
										<div class="textDown">
											<a href="#">立即抢购</a>
											<span class="countBuy">
												<span>32</span>人购买
											</span>
										</div>
									</div>
								</li>
							</ul>
							<ul >
								<li class="clearFloat">
									<div class="pic">
										<a href="#">
											<img src="__ROOT__/Index/Common/product-images/indextestpic7.jpg" alt="达令" />
										</a>
									</div>
									<div class="text">
										<div class="countdown">
											距离闪购结束
											<span class="hour">12</span>
											<span class="colon">:</span>
											<span class="min">00</span>
											<span class="colon">:</span>
											<span class="sec">00</span>
										</div>
										<div class="textUp">
											<span class="text1">
												5.3折<a href="#">[日本 · 丰满嘟唇更立体] Makemania 透亮乳粉色唇蜜(9g)</a>
											</span>
											<span class="text2">
												透亮乳粉色唇蜜(9g)
											</span>
										</div>
										<div class="textMid">
											<span class="discount">
												￥<span>44.90</span>
											</span>
											<span class="originPrice">
												￥169.00
											</span>
										</div>
										<div class="textDown">
											<a href="#">立即抢购</a>
											<span class="countBuy">
												<span>32</span>人购买
											</span>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="foreshow">
							<div class="foreshowTitle">
								闪购预告
								<p>(明晚 20:00 火爆开售)</p>
							</div>
							<ul>
								<li class="clearFloat">
									<div class="pic">
										<a href="#">
											<img src="__ROOT__/Index/Common/product-images/indextestpic8.jpg" alt="达令" />
										</a>
									</div>
									<div class="text">
										<div class="textUp">
											2折
											<a href="#">[中国HELLO KITTY]大眼卷翘睫毛膏10g+大眼纤长睫毛液</a>
										</div>
										<div class="textMid">
											“拥有纤长浓密的睫毛是许多姑娘们的梦想，一支睫毛增长液和一支睫毛膏就能帮你实现梦想！当实用的化妆品遭遇可爱的Hello Kitty，是不是也能‘萌动’你的心呢？来自HELLO KITTY的睫毛增长液与睫毛膏的组合，相信单凭借外形就能掳获不少妹纸的芳心吧！值得一提的是，它可不光有可爱的外表，内在也很实用哦！大眼生长液可以为毛囊补充营养，促进睫毛生长，给你一双天生大眼！睫毛膏不仅能够刷出浓密的睫毛，更防水防汗，让你妆效更持久！爱HELLO KITTY的妹纸们，千万别错过哦！”
										</div>
										<div class="textDown">
											<button class="collect">收藏</button>
											<button class="joinTrolley">加入购物车</button>
										</div>
									</div>
								</li>
								<li class="clearFloat">
									<div class="pic">
										<a href="#">
											<img src="__ROOT__/Index/Common/product-images/indextestpic8.jpg" alt="达令" />
										</a>
									</div>
									<div class="text">
										<div class="textUp">
											2折
											<a href="#">[中国HELLO KITTY]大眼卷翘睫毛膏10g+大眼纤长睫毛液</a>
										</div>
										<div class="textMid">
											“拥有纤长浓密的睫毛是许多姑娘们的梦想，一支睫毛增长液和一支睫毛膏就能帮你实现梦想！当实用的化妆品遭遇可爱的Hello Kitty，是不是也能‘萌动’你的心呢？来自HELLO KITTY的睫毛增长液与睫毛膏的组合，相信单凭借外形就能掳获不少妹纸的芳心吧！值得一提的是，它可不光有可爱的外表，内在也很实用哦！大眼生长液可以为毛囊补充营养，促进睫毛生长，给你一双天生大眼！睫毛膏不仅能够刷出浓密的睫毛，更防水防汗，让你妆效更持久！爱HELLO KITTY的妹纸们，千万别错过哦！”
										</div>
										<div class="textDown">
											<button class="collect">收藏</button>
											<button class="joinTrolley">加入购物车</button>
										</div>
									</div>
								</li>
								<li class="clearFloat">
									<div class="pic">
										<a href="#">
											<img src="__ROOT__/Index/Common/product-images/indextestpic8.jpg" alt="达令" />
										</a>
									</div>
									<div class="text">
										<div class="textUp">
											2折
											<a href="#">[中国HELLO KITTY]大眼卷翘睫毛膏10g+大眼纤长睫毛液</a>
										</div>
										<div class="textMid">
											“拥有纤长浓密的睫毛是许多姑娘们的梦想，一支睫毛增长液和一支睫毛膏就能帮你实现梦想！当实用的化妆品遭遇可爱的Hello Kitty，是不是也能‘萌动’你的心呢？来自HELLO KITTY的睫毛增长液与睫毛膏的组合，相信单凭借外形就能掳获不少妹纸的芳心吧！值得一提的是，它可不光有可爱的外表，内在也很实用哦！大眼生长液可以为毛囊补充营养，促进睫毛生长，给你一双天生大眼！睫毛膏不仅能够刷出浓密的睫毛，更防水防汗，让你妆效更持久！爱HELLO KITTY的妹纸们，千万别错过哦！”
										</div>
										<div class="textDown">
											<button class="collect">收藏</button>
											<button class="joinTrolley">加入购物车</button>
										</div>
									</div>
								</li>
								<li class="clearFloat">
									<div class="pic">
										<a href="#">
											<img src="__ROOT__/Index/Common/product-images/indextestpic8.jpg" alt="达令" />
										</a>
									</div>
									<div class="text">
										<div class="textUp">
											2折
											<a href="#">[中国HELLO KITTY]大眼卷翘睫毛膏10g+大眼纤长睫毛液</a>
										</div>
										<div class="textMid">
											“拥有纤长浓密的睫毛是许多姑娘们的梦想，一支睫毛增长液和一支睫毛膏就能帮你实现梦想！当实用的化妆品遭遇可爱的Hello Kitty，是不是也能‘萌动’你的心呢？来自HELLO KITTY的睫毛增长液与睫毛膏的组合，相信单凭借外形就能掳获不少妹纸的芳心吧！值得一提的是，它可不光有可爱的外表，内在也很实用哦！大眼生长液可以为毛囊补充营养，促进睫毛生长，给你一双天生大眼！睫毛膏不仅能够刷出浓密的睫毛，更防水防汗，让你妆效更持久！爱HELLO KITTY的妹纸们，千万别错过哦！”
										</div>
										<div class="textDown">
											<button class="collect">收藏</button>
											<button class="joinTrolley">加入购物车</button>
										</div>
									</div>
								</li>
								<li class="clearFloat">
									<div class="pic">
										<a href="#">
											<img src="__ROOT__/Index/Common/product-images/indextestpic8.jpg" alt="达令" />
										</a>
									</div>
									<div class="text">
										<div class="textUp">
											2折
											<a href="#">[中国HELLO KITTY]大眼卷翘睫毛膏10g+大眼纤长睫毛液</a>
										</div>
										<div class="textMid">
											“拥有纤长浓密的睫毛是许多姑娘们的梦想，一支睫毛增长液和一支睫毛膏就能帮你实现梦想！当实用的化妆品遭遇可爱的Hello Kitty，是不是也能‘萌动’你的心呢？来自HELLO KITTY的睫毛增长液与睫毛膏的组合，相信单凭借外形就能掳获不少妹纸的芳心吧！值得一提的是，它可不光有可爱的外表，内在也很实用哦！大眼生长液可以为毛囊补充营养，促进睫毛生长，给你一双天生大眼！睫毛膏不仅能够刷出浓密的睫毛，更防水防汗，让你妆效更持久！爱HELLO KITTY的妹纸们，千万别错过哦！”
										</div>
										<div class="textDown">
											<button class="collect">收藏</button>
											<button class="joinTrolley">加入购物车</button>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</section>
			</div>
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
	<script type="text/javascript" src="__ROOT__/Index/common/js/index.js"></script>
	<script type="text/javascript" src="__ROOT__/Index/common/js/aside.js"></script>
	<script type="text/javascript" src="__ROOT__/Index/common/js/header.js"></script>
</html>