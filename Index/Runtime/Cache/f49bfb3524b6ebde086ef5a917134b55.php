<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>商品列表</title>

		<link rel="stylesheet" href="__ROOT__/Index/Common/css/reset.css" />
		<link rel="stylesheet" href="__ROOT__/Index/Common/css/header.css" />
		<link rel="stylesheet" href="__ROOT__/Index/Common/css/aside.css" />
		<link rel="stylesheet" href="__ROOT__/Index/Common/css/footer.css" />
		<link rel="stylesheet" href="__ROOT__/Index/Common/css/index.css" />
		<link rel="stylesheet" href="__ROOT__/Index/Common/css/showList.css" />
		<link rel="stylesheet" href="__ROOT__/Index/Common/css/reset.css" />
		
		<script type="text/javascript" src="__ROOT__/Index/Common/js/angular.min.js"></script>
		<script type="text/javascript" src="__ROOT__/Index/Common/js/angular-sanitize.js"></script>
		<script type="text/javascript" src="__ROOT__/Index/Common/js/jquery-3.2.1.min.js"></script>
		<!-- <script type="text/javascript" src="__ROOT__/Index/Common/js/showList.js"></script> -->
	</head>
	<body ng-app="myapp">
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
		<section class="proList" ng-controller="myctrl">
			<div class="proNav">
				<div id="proHome">
					<a href=""><span class="home"></span></a>
					<span class="angle"></span>	
				</div>
				<div id="proMenu">
					<a href="##" class="proMenuSearch">
						<span class="initVal">极致美护</span>
						<span class="up"></span>
						<span class="down"></span>
					</a>
					<span class="angle"></span>	
				</div>

				<div id="proSearch">
					<input class="inputBar" type="text" />
					<button class="searchBar"></button>
				</div>	
				<div class="clearFloat"></div>
			</div>
			<div class="proMenuList">
				<ul>
					<li class="single" ng-click="myVar='machine'">3C家电</li>
					<li class="single" ng-click="myVar='clothing'" >尖货女装</li>
					<li class="single" ng-click="myVar='jewel'">时尚配饰</li>
					<li class="single" ng-click="myVar='life'">创意生活</li>
					<li class="single" ng-click="myVar='snacks'">全球零食</li>
					<li class="single" >极致美护</li>
				</ul>
			</div>	
			<nav class="showPro" ng-switch="myVar">
				<!-- 极致美护对应的商品分类 -->
				<div class="recommend"  ng-switch-default>
					<dl>
						<dt>达令力荐：</dt>
						<a href="##"><dd>告别干燥深补水</dd></a>
						<a href="##"><dd>轻松卸妆神器</dd></a>
						<a href="##"><dd>清新女神妆</dd></a>
						<a href="##"><dd>晒不黑的秘密</dd></a>
						<!-- 多选内容 -->
						<dd class="showProMul">
							<label for=""><input type="checkbox" /> 告别干燥深补水
							</label>
							
							<label for=""><input type="checkbox" /> 轻松卸妆神器</label>
							
							<label for=""><input type="checkbox" /> 清新女神妆</label>
							
							<label for=""><input type="checkbox" /> 晒不黑的秘密</label>
							<div class="clearFloat"></div>
							<div class="proMul">
								<button class="showProSure">确定</button>
								<button class="showProCancel">取消</button>
							</div>
						</dd>
						<button class="selectMore" onclick="selectMore()">+ &nbsp;多选</button>
						<!-- 清除浮动 -->
						<div class="clearFloat"></div>
					</dl>
					<dl>
						<dt>分类：</dt>
						<a href="##"><dd>个护保健</dd></a>
						<a href="##"><dd>彩妆香氛</dd></a>
						<a href="##"><dd>面部护肤</dd></a>
						<div class="clearFloat"></div>
					</dl>
					<dl>
						<dt>功效：</dt>
						<a href="##"><dd>修饰肤色</dd></a>
						<a href="##"><dd>舒缓肌肤</dd></a>
						<a href="##"><dd>祛痘</dd></a>
						<a href=""><dd>提亮</dd></a>
						<a href=""><dd>去黑眼圈</dd></a>
						<a href=""><dd>控油</dd></a>
						<a href=""><dd>淡香水</dd></a>
						<dd class="showProMul">
							<label for=""><input type="checkbox" /> 防晒</label>
							<label for=""><input type="checkbox" /> 滋润</label>
							<label for=""><input type="checkbox" /> 花调香</label>
							<label for=""><input type="checkbox" /> 抗皱</label>
							<label for=""><input type="checkbox" /> 香气持久</label>
							<label for=""><input type="checkbox" /> 淡化唇色</label>
							<label for=""><input type="checkbox" /> 深层清洁</label>
							<label for=""><input type="checkbox" /> 遮瑕</label>
							<label for=""><input type="checkbox" /> 清新</label>
							<label for=""><input type="checkbox" /> 祛黑头</label>
							<label for=""><input type="checkbox" /> 提亮肤色</label>
							<label for=""><input type="checkbox" /> 祛斑</label>
							<label for=""><input type="checkbox" /> 抗氧化</label>
							<label for=""><input type="checkbox" /> 定妆</label>
							<label for=""><input type="checkbox" /> 缓解疲劳</label>
							<label for=""><input type="checkbox" /> 果调香</label>
							<label for=""><input type="checkbox" /> 美白</label>
							<label for=""><input type="checkbox" /> 祛角质</label>
							<label for=""><input type="checkbox" /> 去细纹</label>
							<label for=""><input type="checkbox" /> 修饰肤色</label>
							<label for=""><input type="checkbox" /> 舒缓肌肤</label>
							<label for=""><input type="checkbox" /> 祛痘</label>
							<label for=""><input type="checkbox" /> 提亮</label>
							<label for=""><input type="checkbox" /> 去黑眼圈</label>
							<label for=""><input type="checkbox" /> 控油</label>
							<label for=""><input type="checkbox" /> 淡香水</label>
							<label for=""><input type="checkbox" /> 祛斑祛印</label>
							<label for=""><input type="checkbox" /> 隔离</label>
							<label for=""><input type="checkbox" /> 保湿</label>
							<div class="clearFloat"></div>
							<div class="proMul">
								<button class="showProSure">确定</button>
								<button class="showProCancel">取消</button>
							</div>
						</dd>
						<button class="selectMore" onclick="selectMore()">+ &nbsp;多选</button>
						<button class="listMore" onclick="listMore()">更多</button>
						<div class="clearFloat"></div>
					</dl>
					<dl>
						<dt>地区：</dt>
						<a href=""><dd>韩国</dd></a>
						<a href=""><dd>日本</dd></a>
						<a href=""><dd>欧美</dd></a>
						<a href=""><dd>港台</dd></a>
						<a href=""><dd>东南亚</dd></a>
						<dd class="showProMul">
							<label for=""><input type="checkbox" /> 韩国</label>
							<label for=""><input type="checkbox" /> 日本</label>
							<label for=""><input type="checkbox" /> 欧美</label>
							<label for=""><input type="checkbox" /> 港台</label>
							<label for=""><input type="checkbox" /> 东南亚</label>
							<div class="clearFloat"></div>
							<div class="proMul">
								<button class="showProSure">确定</button>
								<button class="showProCancel">取消</button>
							</div>
						</dd>
						<button class="selectMore" onclick="selectMore()">+ &nbsp;多选</button>
						<div class="clearFloat"></div>
					</dl>
					<dl>
						<dt>品牌：</dt>
						<a href=""><dd>Innisfree</dd></a>
						<a href=""><dd>mistine</dd></a>
						<a href=""><dd>Shiseido资深堂</dd></a>
						<a href=""><dd>ETUDE HOUSE</dd></a>
						<a href=""><dd>科颜氏</dd></a>
						<a href=""><dd>the saem</dd></a>
						<a href=""><dd>Estee Lauder</dd></a>
						<dd class="showProMul">
							<label for=""><input type="checkbox" /> Innisfree</label>
							<label for=""><input type="checkbox" /> mistine</label>
							<label for=""><input type="checkbox" /> Shiseido资深堂</label>
							<label for=""><input type="checkbox" /> ETUDE HOU</label>
							<label for=""><input type="checkbox" /> 科颜氏</label>
							<label for=""><input type="checkbox" /> the saem</label>
							<label for=""><input type="checkbox" /> Estee Lauder</label>
							<div class="clearFloat"></div>
							<div class="proMul">
								<button class="showProSure">确定</button>
								<button class="showProCancel">取消</button>
							</div>
							
						</dd>
						<button class="selectMore" onclick="selectMore()">+ &nbsp;多选</button>
						<button class="listMore" onclick="listMore()">更多</button>
						<div class="clearFloat"></div>
					</dl>
					<dl>
						<dt>价格：</dt>
						<a href=""><dd>0-50</dd></a>
						<a href=""><dd>50-100</dd></a>
						<a href=""><dd>500以上</dd></a>
						<dd class="showProMul">
							<label for=""><input type="checkbox" /> 0-50</label>
							<label for=""><input type="checkbox" /> 50-100</label>
							<label for=""><input type="checkbox" /> 500以上</label>
							<div class="clearFloat"></div>
							<div class="proMul">
								<button class="showProSure">确定</button>
								<button class="showProCancel">取消</button>
							</div>
						</dd>
						<button class="selectMore" onclick="selectMore()">+ &nbsp;多选</button>
						<div class="clearFloat"></div>
					</dl>
				</div>	

				<!-- 全球零食 -->
				<div class="snacks" ng-switch-when="snacks">
					<dl>
						<dt>达令力荐：</dt>
						<a href="##"><dd>宿舍宵夜吃起来</dd></a>
						<a href="##"><dd>困乏提神好物</dd></a>
						<a href="##"><dd>办公室抽屉必备</dd></a>
						<a href="##"><dd>超人气甜品</dd></a>
						<!-- 多选内容 -->
						<dd class="showProMul">
							<label for=""><input type="checkbox" /> 宿舍宵夜吃起来</label>
							<label for=""><input type="checkbox" /> 困乏提神好物</label>
							
							<label for=""><input type="checkbox" /> 办公室抽屉必备</label>
							<label for=""><input type="checkbox" /> 超人气甜品</label>
							<div class="clearFloat"></div>
							<div class="proMul">
								<button class="showProSure">确定</button>
								<button class="showProCancel">取消</button>
							</div>
						</dd>
						<button class="selectMore" onclick="selectMore()">+ &nbsp;多选</button>
						<!-- 清除浮动 -->
						<div class="clearFloat"></div>
					</dl>
					<dl>
						<dt>分类：</dt>
						<a href="##"><dd>休闲零食</dd></a>
						<a href="##"><dd>咖啡/冲饮</dd></a>
						<a href="##"><dd>饼干/糕点</dd></a>
						<a href="##"><dd>饮料/酒水</dd></a>
						<a href="##"><dd>果干/坚果</dd></a>
						<a href="##"><dd>糖果/巧克力</dd></a>
						<!-- 清除浮动 -->
						<div class="clearFloat"></div>
					</dl>
					<dl>
						<dt>地区：</dt>
						<a href="##"><dd>韩国</dd></a>
						<a href="##"><dd>台湾</dd></a>
						<a href="##"><dd>美国</dd></a>
						<a href="##"><dd>欧洲</dd></a>
						<a href="##"><dd>东南亚</dd></a>
						<a href="##"><dd>日本</dd></a>
						<a href="##"><dd>澳洲</dd></a>
						<!-- 多选内容 -->
						<dd class="showProMul">
							<label for=""><input type="checkbox" /> 韩国</label>
							<label for=""><input type="checkbox" /> 台湾</label>
							
							<label for=""><input type="checkbox" /> 美国</label>
							
							<label for=""><input type="checkbox" /> 欧洲</label>
							<label for=""><input type="checkbox" /> 东南亚</label>
							<label for=""><input type="checkbox" /> 日本</label>
							<label for=""><input type="checkbox" /> 澳洲</label>
							<div class="clearFloat"></div>
							<div class="proMul">
								<button class="showProSure">确定</button>
								<button class="showProCancel">取消</button>
							</div>
						</dd>
						<button class="selectMore" onclick="selectMore()">+ &nbsp;多选</button>
						<!-- 清除浮动 -->
						<div class="clearFloat"></div>
					</dl>
					<dl>
						<dt>品牌：</dt>
						<a href="##"><dd>百草味</dd></a>
						<a href="##"><dd>喜善花房</dd></a>
						<a href="##"><dd>雪之恋</dd></a>
						<a href="##"><dd>Richese</dd></a>
						<a href="##"><dd>海太</dd></a>
						<a href="##"><dd>维奕</dd></a>
						<a href="##"><dd>丽芝士纳宝帝</dd></a>
						<!-- 多选内容 -->
						<dd class="showProMul">
							<label for=""><input type="checkbox" /> 百草味</label>
							<label for=""><input type="checkbox" /> 喜善花房</label>
							<label for=""><input type="checkbox" /> 雪之恋</label>
							<label for=""><input type="checkbox" /> Richese</label>
							<label for=""><input type="checkbox" /> 海太</label>
							<label for=""><input type="checkbox" /> 维奕</label>
							<label for=""><input type="checkbox" /> 丽芝士纳宝帝</label>
							<div class="clearFloat"></div>
							<div class="proMul">
								<button class="showProSure">确定</button>
								<button class="showProCancel">取消</button>
							</div>
						</dd>
						<button class="selectMore" onclick="selectMore()">+ &nbsp;多选</button>
						<button class="listMore" onclick="listMore()">更多</button>
						<!-- 清除浮动 -->
						<div class="clearFloat"></div>
					</dl>
					<dl>
						<dt>价格：</dt>
						<a href=""><dd>0-50</dd></a>
						<a href=""><dd>50-100</dd></a>
						<a href=""><dd>500以上</dd></a>
						<dd class="showProMul">
							<label for=""><input type="checkbox" /> 0-50</label>
							<label for=""><input type="checkbox" /> 50-100</label>
							<label for=""><input type="checkbox" /> 500以上</label>
							<div class="clearFloat"></div>
							<div class="proMul">
								<button class="showProSure">确定</button>
								<button class="showProCancel">取消</button>
							</div>
						</dd>
						<button class="selectMore" onclick="selectMore()">+ &nbsp;多选</button>
						<div class="clearFloat"></div>
					</dl>
				</div>

				<!-- 创意生活 -->
				<div class="life" ng-switch-when="life">
					<dl>
						<dt>达令力荐：</dt>
						<a href="##"><dd>给女票贴心の礼</dd></a>
						<a href="##"><dd>收纳不再将就</dd></a>
						<a href="##"><dd>执伞邂逅浪漫</dd></a>
						<a href="##"><dd>厨房最佳伴侣</dd></a>
						<!-- 多选内容 -->
						<dd class="showProMul">
							<label for=""><input type="checkbox" /> 给女票贴心の礼</label>
							<label for=""><input type="checkbox" /> 收纳不再将就</label>
							<label for=""><input type="checkbox" /> 执伞邂逅浪漫</label>
							<label for=""><input type="checkbox" /> 厨房最佳伴侣</label>
							<div class="clearFloat"></div>
							<div class="proMul">
								<button class="showProSure">确定</button>
								<button class="showProCancel">取消</button>
							</div>
						</dd>
						<button class="selectMore" onclick="selectMore()">+ &nbsp;多选</button>
						<!-- 清除浮动 -->
						<div class="clearFloat"></div>
					</dl>
					<dl>
						<dt>分类：</dt>
						<a href="##"><dd>品质生活</dd></a>
						<a href="##"><dd>趣味文具</dd></a>
						<a href="##"><dd>厨房伴侣</dd></a>
						<a href="##"><dd>温馨家居</dd></a>
						<a href="##"><dd>个人护理</dd></a>
						<a href="##"><dd>创意礼物</dd></a>
						<a href="##"><dd>创意家居</dd></a>
						<!-- 清除浮动 -->
						<div class="clearFloat"></div>
					</dl>
					<dl>
						<dt>地区：</dt>
						<a href="##"><dd>美国</dd></a>
						<a href="##"><dd>欧洲</dd></a>
						<a href="##"><dd>亚洲</dd></a>
						<a href="##"><dd>其他</dd></a>
						<!-- 多选内容 -->
						<dd class="showProMul">
							<label for=""><input type="checkbox" /> 美国</label>
							<label for=""><input type="checkbox" /> 欧洲</label>
							<label for=""><input type="checkbox" /> 亚洲</label>
							<label for=""><input type="checkbox" /> 其他</label>
							<div class="clearFloat"></div>
							<div class="proMul">
								<button class="showProSure">确定</button>
								<button class="showProCancel">取消</button>
							</div>
						</dd>
						<button class="selectMore" onclick="selectMore()">+ &nbsp;多选</button>
						<!-- 清除浮动 -->
						<div class="clearFloat"></div>
					</dl>
					<dl>
						<dt>品牌：</dt>
						<a href="##"><dd>子夏</dd></a>
						<a href="##"><dd>为睡纺</dd></a>
						<a href="##"><dd>欧布蓝尼</dd></a>
						<a href="##"><dd>趣淘</dd></a>
						<a href="##"><dd>锦仕</dd></a>
						<a href="##"><dd>飞利浦</dd></a>
						<a href="##"><dd>新米粒</dd></a>
						<!-- 多选内容 -->
						<dd class="showProMul">
							<label for=""><input type="checkbox" /> 子夏</label>
							<label for=""><input type="checkbox" /> 为睡纺</label>
							<label for=""><input type="checkbox" /> 欧布蓝尼</label>
							<label for=""><input type="checkbox" /> 趣淘</label>
							<label for=""><input type="checkbox" /> 锦仕</label>
							<label for=""><input type="checkbox" /> 飞利浦</label>
							<label for=""><input type="checkbox" /> 新米粒</label>
							<div class="clearFloat"></div>
							<div class="proMul">
								<button class="showProSure">确定</button>
								<button class="showProCancel">取消</button>
							</div>
						</dd>
						<button class="selectMore" onclick="selectMore()">+ &nbsp;多选</button>
						<button class="listMore" onclick="listMore()">更多</button>
						<!-- 清除浮动 -->
						<div class="clearFloat"></div>
					</dl>
					<dl>
						<dt>价格：</dt>
						<a href=""><dd>0-50</dd></a>
						<a href=""><dd>50-100</dd></a>
						<a href=""><dd>500以上</dd></a>
						<dd class="showProMul">
							<label for=""><input type="checkbox" /> 0-50</label>
							<label for=""><input type="checkbox" /> 50-100</label>
							<label for=""><input type="checkbox" /> 500以上</label>
							<div class="clearFloat"></div>
							<div class="proMul">
								<button class="showProSure">确定</button>
								<button class="showProCancel">取消</button>
							</div>
						</dd>
						<button class="selectMore" onclick="selectMore()">+ &nbsp;多选</button>
						<div class="clearFloat"></div>
					</dl>

				</div>


				<!-- 时尚配饰 -->
				<div class="jewel" ng-switch-when="jewel">
					<dl>
						<dt>达令力荐：</dt>
						<a href="##"><dd>个性心机配饰</dd></a>
						<a href="##"><dd>触手可及的奢华</dd></a>
						<a href="##"><dd>出街就要潮酷帅</dd></a>
						<a href="##"><dd>玩转潮流包包</dd></a>
						<!-- 多选内容 -->
						<dd class="showProMul">
							<label for=""><input type="checkbox" /> 个性心机配饰</label>
							<label for=""><input type="checkbox" /> 触手可及的奢华</label>
							<label for=""><input type="checkbox" /> 出街就要潮酷帅</label>
							<label for=""><input type="checkbox" /> 玩转潮流包包</label>
							<div class="clearFloat"></div>
							<div class="proMul">
								<button class="showProSure">确定</button>
								<button class="showProCancel">取消</button>
							</div>
						</dd>
						<button class="selectMore" onclick="selectMore()">+ &nbsp;多选</button>
						<!-- 清除浮动 -->
						<div class="clearFloat"></div>
					</dl>
					<dl>
						<dt>分类：</dt>
						<a href="##"><dd>鞋履</dd></a>
						<a href="##"><dd>服饰配件</dd></a>
						<a href="##"><dd>包袋</dd></a>
						<a href="##"><dd>轻奢</dd></a>
						<a href="##"><dd>饰品</dd></a>
						<a href="##"><dd>脚链</dd></a>
						<a href="##"><dd>时尚配饰</dd></a>
						<!-- 清除浮动 -->
						<div class="clearFloat"></div>
					</dl>
					<dl>
						<dt>地区：</dt>
						<a href="##"><dd>欧洲</dd></a>
						<a href="##"><dd>美国</dd></a>
						<a href="##"><dd>澳洲</dd></a>
						<a href="##"><dd>亚洲</dd></a>
						<a href="##"><dd>其他</dd></a>
						<a href="##"><dd>日本</dd></a>
						<!-- 多选内容 -->
						<dd class="showProMul">
							<label for=""><input type="checkbox" /> 欧洲</label>
							<label for=""><input type="checkbox" /> 美国</label>
							<label for=""><input type="checkbox" /> 澳洲</label>
							<label for=""><input type="checkbox" /> 亚洲</label>
							<label for=""><input type="checkbox" /> 其他</label>
							<label for=""><input type="checkbox" /> 日本</label>
							<div class="clearFloat"></div>
							<div class="proMul">
								<button class="showProSure">确定</button>
								<button class="showProCancel">取消</button>
							</div>
						</dd>
						<button class="selectMore" onclick="selectMore()">+ &nbsp;多选</button>
						<button class="listMore" onclick="listMore()">更多</button>
						<!-- 清除浮动 -->
						<div class="clearFloat"></div>
					</dl>
					<dl>
						<dt>品牌：</dt>
						<a href="##"><dd>茉</dd></a>
						<a href="##"><dd>美丽公主</dd></a>
						<a href="##"><dd>新米粒</dd></a>
						<a href="##"><dd>澳洲Pica Lela</dd></a>
						<a href="##"><dd>SexeMara</dd></a>
						<a href="##"><dd>沐七</dd></a>
						<a href="##"><dd>IKEWA</dd></a>
						<!-- 多选内容 -->
						<dd class="showProMul">
							<label for=""><input type="checkbox" /> 茉</label>
							<label for=""><input type="checkbox" /> 美丽公主</label>
							<label for=""><input type="checkbox" /> 新米粒</label>
							<label for=""><input type="checkbox" /> 澳洲Pica Lela</label>
							<label for=""><input type="checkbox" /> SexeMara</label>
							<label for=""><input type="checkbox" /> 沐七</label>
							<label for=""><input type="checkbox" /> IKEWA</label>
							<div class="clearFloat"></div>
							<div class="proMul">
								<button class="showProSure">确定</button>
								<button class="showProCancel">取消</button>
							</div>
						</dd>
						<button class="selectMore" onclick="selectMore()">+ &nbsp;多选</button>
						<button class="listMore" onclick="listMore()">更多</button>
						<!-- 清除浮动 -->
						<div class="clearFloat"></div>
					</dl>
					<dl>
						<dt>价格：</dt>
						<a href=""><dd>0-50</dd></a>
						<a href=""><dd>50-100</dd></a>
						<a href=""><dd>500以上</dd></a>
						<dd class="showProMul">
							<label for=""><input type="checkbox" /> 0-50</label>
							<label for=""><input type="checkbox" /> 50-100</label>
							<label for=""><input type="checkbox" /> 500以上</label>
							<div class="clearFloat"></div>
							<div class="proMul">
								<button class="showProSure">确定</button>
								<button class="showProCancel">取消</button>
							</div>
						</dd>
						<button class="selectMore" onclick="selectMore()">+ &nbsp;多选</button>
						<div class="clearFloat"></div>
					</dl>
				</div>

				<!-- 尖货女装 -->
				<div class="clothing" ng-switch-when="clothing">
					<dl>
						<dt>分类：</dt>
						<a href="##"><dd>裙装</dd></a>
						<a href="##"><dd>针织裙</dd></a>
						<a href="##"><dd>半身裙</dd></a>
						<a href="##"><dd>裤装</dd></a>
						<a href="##"><dd>休闲服</dd></a>
						<a href="##"><dd>皮裤</dd></a>
						<a href="##"><dd>打底裤</dd></a>
						<dd class="showProMul">
							<label for=""><input type="checkbox" /> 裙装</label>
							<label for=""><input type="checkbox" /> 针织裙</label>
							<label for=""><input type="checkbox" /> 半身裙</label>
							<label for=""><input type="checkbox" /> 裤装</label>
							<label for=""><input type="checkbox" /> 休闲服</label>
							<label for=""><input type="checkbox" /> 皮裤</label>
							<label for=""><input type="checkbox" /> 打底裤</label>
							<div class="clearFloat"></div>
							<div class="proMul">
								<button class="showProSure">确定</button>
								<button class="showProCancel">取消</button>
							</div>
						</dd>
						<button class="listMore" onclick="listMore()">更多</button>
						<!-- 清除浮动 -->
						<div class="clearFloat"></div>
					</dl>
					<dl>
						<dt>品牌：</dt>
						<a href="##"><dd>WRZS</dd></a>
						<a href="##"><dd>AFDP</dd></a>
						<a href="##"><dd>凡品丹妮</dd></a>
						<a href="##"><dd>七格格</dd></a>
						<a href="##"><dd>HAPPY HOST</dd></a>
						<a href="##"><dd>慕帛</dd></a>
						<a href="##"><dd>LUNA LIMTED</dd></a>
						<!-- 多选内容 -->
						<dd class="showProMul">
							<label for=""><input type="checkbox" /> WRZS</label>
							<label for=""><input type="checkbox" /> AFDP</label>
							<label for=""><input type="checkbox" /> 凡品丹妮</label>
							<label for=""><input type="checkbox" /> 七格格</label>
							<label for=""><input type="checkbox" /> HAPPY HOST</label>
							<label for=""><input type="checkbox" /> 慕帛</label>
							<label for=""><input type="checkbox" /> LUNA LIMTED</label>
							<div class="clearFloat"></div>
							<div class="proMul">
								<button class="showProSure">确定</button>
								<button class="showProCancel">取消</button>
							</div>
						</dd>
						<button class="selectMore" onclick="selectMore()">+ &nbsp;多选</button>
						<button class="listMore" onclick="listMore()">更多</button>
						<!-- 清除浮动 -->
						<div class="clearFloat"></div>
					</dl>
					<dl>
						<dt>价格：</dt>
						<a href=""><dd>0-50</dd></a>
						<a href=""><dd>50-100</dd></a>
						<a href=""><dd>500以上</dd></a>
						<dd class="showProMul">
							<label for=""><input type="checkbox" /> 0-50</label>
							<label for=""><input type="checkbox" /> 50-100</label>
							<label for=""><input type="checkbox" /> 500以上</label>
							<div class="clearFloat"></div>
							<div class="proMul">
								<button class="showProSure">确定</button>
								<button class="showProCancel">取消</button>
							</div>
						</dd>
						<button class="selectMore" onclick="selectMore()">+ &nbsp;多选</button>
						<div class="clearFloat" onclick="listMore()"></div>
					</dl>
				</div>

				<!-- 3C家电 -->
				<div class="machine" ng-switch-when="machine">
					<dl>
						<dt>分类：</dt>
						<a href="##"><dd>家用电器</dd></a>
						<a href="##"><dd>3C数码</dd></a>
						<!-- 清除浮动 -->
						<div class="clearFloat"></div>
					</dl>
					<dl>
						<dt>品牌：</dt>
						<a href="##"><dd>金顶</dd></a>
						<a href="##"><dd>飞利浦</dd></a>
						<a href="##"><dd>韩恰</dd></a>
						<a href="##"><dd>IVR</dd></a>
						<a href="##"><dd>魔胄</dd></a>
						<a href="##"><dd>慕帛</dd></a>
						<a href="##"><dd>福库CUCKOO</dd></a>
						<a href="##"><dd>锦仕</dd></a>
						<!-- 多选内容 -->
						<dd class="showProMul">
							<label for=""><input type="checkbox" /> 金顶</label>
							<label for=""><input type="checkbox" /> 飞利浦</label>
							<label for=""><input type="checkbox" /> 韩恰</label>
							<label for=""><input type="checkbox" /> IVR</label>
							<label for=""><input type="checkbox" /> 魔胄</label>
							<label for=""><input type="checkbox" /> 慕帛</label>
							<label for=""><input type="checkbox" /> 福库CUCKOO</label>
							<label for=""><input type="checkbox" /> 锦仕</label>
							<div class="clearFloat"></div>
							<div class="proMul">
								<button class="showProSure">确定</button>
								<button class="showProCancel">取消</button>
							</div>
						</dd>
						<button class="selectMore" onclick="selectMore()">+ &nbsp;多选</button>
						<button class="listMore" onclick="listMore()"> 更多</button>
						<!-- 清除浮动 -->
						<div class="clearFloat"></div>
					</dl>
					<dl>
						<dt>价格：</dt>
						<a href=""><dd>0-50</dd></a>
						<a href=""><dd>50-100</dd></a>
						<a href=""><dd>500以上</dd></a>
						<dd class="showProMul">
							<label for=""><input type="checkbox" /> 0-50</label>
							<label for=""><input type="checkbox" /> 50-100</label>
							<label for=""><input type="checkbox" /> 500以上</label>
							<div class="clearFloat"></div>
							<div class="proMul">
								<button class="showProSure">确定</button>
								<button class="showProCancel">取消</button>
							</div>
						</dd>
						<button class="selectMore" onclick="selectMore()">+ &nbsp;多选</button>
						<div class="clearFloat"></div>
					</dl>
				</div>

			</nav>
			<div class="proChoice">
				<ul class="choiceLeft">
					<li>排序：</li>
					<li class="silence">
						<a href="">默认<span class="arrowDown"></span></a>
					</li>
					<li><a href="">价格
						<span class="priceArrow">
							<span id="up"></span>
							<span id="down"></span>
						</span></a>
					</li>
					<li class="sale">
						<a href="">销量<span class="arrowDown"></span></a>
					</li>
					<li class="popular">
						<a href="">人气<span class="arrowDown"></span></a>
					</li>
					<li class="time">
						<a href="">上架时间<span class="arrowDown"></span></a>
					</li>
					<li class="cargo"><input type="checkbox"/>只看有货</li>
				</ul>
				<ul class="choiceRight">
					<li>共<span class="warn">100</span>个商品 &nbsp;|</li>
					<li> &nbsp;<span class="warn">1</span>/10页</li>
					<li>下一页</li>
				</ul>
			</div>
			<div class="ProSection">
				<div class="proData">
					<a href=""><img src="__ROOT__/Index/Common/images/footer/proImg.jpg" alt="" /></a>
					<div class="proMessage">
						<p id="price">
							<span class="warn">￥
								<span class="newPrice">299</span>
							</span>
							<span class="oldPrice">￥399.00</span>
						</p>
						
						<a><span class="warn">7折/</span>[韩国.打造轻薄自然妆感]Sulwhasoo2017限量气垫BB霜喜鹊登芝（粉色 13号浅淘）</a>
						<p>
							<span>76人收藏 &nbsp;|</span>
							<span> &nbsp;3条评论</span>
						</p>
					</div>
				</div>
				<div class="clearFloat"></div>	
			</div>	
			<div class="pageBox">
				<div class="changePage">
					<a href="##">上一页</a>
					<ul>
						<li>1</li>
						<li>2</li>
						<li>3</li>
						<li>...</li>
						<li>100</li>
						<div class="clearFloat"></div>
					</ul>
					<a href="##">下一页</a>
					<div class="clearFloat"></div>
				</div>	
			</div>
			<div class="clearFloat"></div>	
		</section>
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
	<script src="__ROOT__/Index/Common/js/header.js" type="text/javascript"></script>
	<script src="__ROOT__/Index/Common/js/aside.js" type="text/javascript"></script>
	<script type="text/javascript">
		// 点击极致美护框下拉列表呈现
		  $("#proMenu").click(function(){
				$(".proMenuList").css(
					"display",'block',
					)
			});
  // 点击列表中内容，下拉列表消失，框中的字换成点击选中内容
	$("li.single").click(function(){
		$(".initVal").html($(this).html());
		$(".proMenuList").css(
		"display",'none',
		)
		})

	// 点击多选按钮，当前列消失，多选项display：block,
		function selectMore(){
	      $(".selectMore").click(function(){
	      		$(this).siblings("a").toggle();
	      		$(this).next("button").toggle();
	      		$(this).prev("dd").toggle();
	      		// 确定，取消键display:block(点击更多按钮时这两个节点的display:none)
	      		$(this).prev("dd").children(".proMul").css(
	      			'display','block',
	      			);
	      })
  		};
  		// 点击更多按钮，多选框display:block同时移除所有input
  	function listMore(){
	    $(".listMore").click(function(){
	    	$(this).html("收起");
	    	$(this).siblings("dd").toggle();
	    	$(this).siblings("dd").children("label").children("input").remove();
	    	$(this).siblings("dd").children(".proMul").css(
	    		'display','none',
	    		);
	    })
  }

	var app=angular.module("myapp",[]);
	 app.controller("myctrl",function($scope){
	  	
	 })

		

	</script>
</html>