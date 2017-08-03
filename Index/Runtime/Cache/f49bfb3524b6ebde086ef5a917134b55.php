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
		<script type="text/javascript" src="__ROOT__/Index/Common/js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="__ROOT__/Index/Common/js/swiper-3.4.2.min.js"></script>
		<script type="text/javascript" src="__ROOT__/Index/Common/js/swiper-3.4.2.jquery.min.js"></script>
		<script type="text/javascript" src="__ROOT__/Index/Common/js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="__ROOT__/Index/Common/js/showList.js"></script>

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
		<div class="bottomWrap">
			<div class="category">
				<p class="title">
					全部分类
				</p>
				<div class="categoryDetail">
					
				</div>

			</div>
			<ul class="naviBar">
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
		<section class="proList">
			<div class="proNav">
				<div id="proHome">
					<a href=""><span class="home"></span></a>
					<span class="angle"></span>	
				</div>
				<div id="proMenu">
					<div class="proMenuSearch">
						<span>极致美护</span>
						<span class="up"></span>
						<span class="down"></span>
					</div>
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
					<li>极致美护</li>
					<li>全球零食</li>
					<li>创意生活</li>
					<li>时尚配饰</li>
					<li>尖货女装</li>
					<li>3C家电</li>
				</ul>
			</div>	
			<nav class="showPro">
				<dl class="recommend">
					<dt>达令力荐：</dt>
					<a href=""><dd>告别干燥深补水</dd></a>
					<a href=""><dd>轻松卸妆神器</dd></a>
					<a href=""><dd>清新女神妆</dd></a>
					<a href=""><dd>晒不黑的秘密</dd></a>
					<!-- 多选内容 -->
					<dd class="showProMul">
						<label for=""><input type="checkbox" />告别干燥深补水
						</label>
						
						<label for=""><input type="checkbox" />轻松卸妆神器</label>
						
						<label for=""><input type="checkbox" />清新女神妆</label>
						
						<label for=""><input type="checkbox" />晒不黑的秘密</label>
						<div class="clearFloat"></div>
						<div class="proMul">
							<button class="showProSure">确定</button>
							<button class="showProCancel">取消</button>
						</div>
					</dd>
					<button class="selectMore">+ &nbsp;多选</button>
					<!-- 清除浮动 -->
					<div class="clearFloat"></div>
				</dl>
				<dl>
					<dt>分类：</dt>
					<a href=""><dd>个护保健</dd></a>
					<a href=""><dd>彩妆香氛</dd></a>
					<a href=""><dd>面部护肤</dd></a>
					<div class="clearFloat"></div>
				</dl>
				<dl>
					<dt>功效：</dt>
					<a href=""><dd>修饰肤色</dd></a>
					<a href=""><dd>舒缓肌肤</dd></a>
					<a href=""><dd>祛痘</dd></a>
					<a href=""><dd>提亮</dd></a>
					<a href=""><dd>去黑眼圈</dd></a>
					<a href=""><dd>控油</dd></a>
					<a href=""><dd>淡香水</dd></a>
					<dd class="showProMul">
						<label for=""><input type="checkbox" /> 防晒</label>
						<label for=""><input type="checkbox" /> 滋润</label>
						<label for=""><input type="checkbox" /> 花调香</label>
						<label for=""><input type="checkbox" />抗皱</label>
						<label for=""><input type="checkbox" />香气持久</label>
						<label for=""><input type="checkbox" />淡化唇色</label>
						<label for=""><input type="checkbox" />深层清洁</label>
						<label for=""><input type="checkbox" />遮瑕</label>
						<label for=""><input type="checkbox" />清新</label>
						<label for=""><input type="checkbox" />祛黑头</label>
						<label for=""><input type="checkbox" />提亮肤色</label>
						<label for=""><input type="checkbox" />祛斑</label>
						<label for=""><input type="checkbox" />抗氧化</label>
						<label for=""><input type="checkbox" />定妆</label>
						<label for=""><input type="checkbox" />缓解疲劳</label>
						<label for=""><input type="checkbox" />果调香</label>
						<label for=""><input type="checkbox" />美白</label>
						<label for=""><input type="checkbox" />祛角质</label>
						<label for=""><input type="checkbox" />去细纹</label>
						<label for=""><input type="checkbox" />修饰肤色</label>
						<label for=""><input type="checkbox" />舒缓肌肤</label>
						<label for=""><input type="checkbox" />祛痘</label>
						<label for=""><input type="checkbox" />提亮</label>
						<label for=""><input type="checkbox" />去黑眼圈</label>
						<label for=""><input type="checkbox" />控油</label>
						<label for=""><input type="checkbox" />淡香水</label>
						<label for=""><input type="checkbox" />祛斑祛印</label>
						<label for=""><input type="checkbox" />隔离</label>
						<label for=""><input type="checkbox" />保湿</label>
						<div class="clearFloat"></div>
						<div class="proMul">
							<button class="showProSure">确定</button>
							<button class="showProCancel">取消</button>
						</div>
					</dd>
					<button class="selectMore">+ &nbsp;多选</button>
					<button class="listMore">+ &nbsp;更多</button>
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
					<button class="selectMore">+ &nbsp;多选</button>
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
						<label for=""><input type="checkbox" />Innisfree</label>
						<label for=""><input type="checkbox" />mistine</label>
						<label for=""><input type="checkbox" />Shiseido资深堂</label>
						<label for=""><input type="checkbox" />ETUDE HOU</label>
						<label for=""><input type="checkbox" /></label>
						<div class="clearFloat"></div>
						<div class="proMul">
							<button class="showProSure">确定</button>
							<button class="showProCancel">取消</button>
						</div>
						
					</dd>
					<button class="selectMore">+ &nbsp;多选</button>
					<button class="listMore">+ &nbsp;更多</button>
					<div class="clearFloat"></div>
				</dl>
				<dl>
					<dt>价格：</dt>
					<a href=""><dd>0-50</dd></a>
					<a href=""><dd>50-100</dd></a>
					<a href=""><dd>500以上</dd></a>
					<!-- <dd class="showProMul">
						<label for=""><input type="checkbox" /></label>
						<label for=""><input type="checkbox" /></label>
						<label for=""><input type="checkbox" /></label>
					</dd> -->
					<button class="selectMore">+ &nbsp;多选</button>
					<div class="clearFloat"></div>
				</dl>	
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
			</div>	
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
</html>