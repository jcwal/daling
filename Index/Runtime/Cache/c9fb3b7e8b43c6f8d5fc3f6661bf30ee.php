<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>达令</title>
		<link rel="stylesheet" href="__ROOT__/Index/common/css/reset.css" />
		<link rel="stylesheet" href="__ROOT__/Index/common/css/header.css" />
		<link rel="stylesheet" href="__ROOT__/Index/common/css/aside.css" />
		<link rel="stylesheet" href="__ROOT__/Index/common/css/footer.css" />
		<link rel="stylesheet" href="__ROOT__/Index/common/css/productDetail.css" />
		<script type="text/javascript" src="__ROOT__/Index/common/js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="http://libs.visualtec.cn/angular1/angular.min.js"></script>
	</head>
	<body ng-app="myapp" ng-controller="mycontroller">
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
		
		
		<!--商品展示-->
		<div class="productDetail">
			<div class="detail_link">
				<ul>
					<li>
						<a href="#">
							<span></span>
						</a>
						<span></span>
					</li>
					<li>
						<a href="#">3C家电</a>
						<span></span>
					</li>
					<li>
						<a href="#">家用电器</a>
						<span></span>
					</li>
					<li>
						<a href="#">剃须刀/电吹风</a>
						<span></span>
					</li>
					<li>[荷兰飞利浦PHILIPS] 飞利浦PHILIPS电吹风HP8220/05(白红)</li>
				</ul>
			</div>
			<!--商品主要内容-->
			<div class="main">
				<div class="main_left afterfl">
					<!--商品简介-->
					<div class="main_intro">
						<!--商品图片-->
						<div class="main_show">
							<div class="main_show_photo">
								<img src="http://img.cdn.daling.com/data/files/mobile/2015/10/09/14443745634172.jpg" alt="" />
							</div>
							<div class="share">
								<div class="fx">
									<a href="#"><span></span>分享</a>
								</div>
								<div class="sc"><a href=""><span></span>收藏</a></div>
								<div class="xf_box">
									<div class="title">
										<span class="title_photo"></span>消费者告知书<span class="title_photo2"></span>
									</div>
								</div>
							</div>
						</div>
						<!--商品功能区-->
						<div class="goods-data">
							<h1 class="clearfix">[荷兰 · 干发护发也能两全] 飞利浦 飞利浦PHILIPS电吹风HP8220/05(白红)</h1>
							<dl class="goods-price afterfl">
								<dt>达令价</dt>
								<dd>
									<div class="afterfl">
										<div class="fl">￥<span class="f30 bold">139.00</span></div>
									</div>
									<p>海外现时售价
										<span>¥199.00</span>
										<span class="price-off">7折</span>
									</p>
								</dd>
							</dl>
							<dl class="goods-function afterfl">
								<ul>
									<li>评分
										<span>
											<span class="__web-inspector-hide-shortcut__ icon-star"></span>
											<span class="icon-star"></span>
											<span class="icon-star"></span>
											<span class="icon-star"></span>
											<span class="icon-half-star"></span>
										</span>
									</li>
									<li>评论：207条</li>
									<li>收藏：<span>355</span></li>
								</ul>
							</dl>
							<dl class="goods-number afterfl">
								<dt>购买数量</dt>
								<dd>
									<div class="number">
										<a href="javascript:;" class="btn-reduce" ng-click="reduce()">
											<span class="ico-u-5"></span>
										</a>
										<a href="javascript:;" class="btn-add" ng-click="add()">
											<span class="ico-d-5"></span>
										</a>
										<input value="1" ng-value="num"/>
									</div>
								</dd>
							</dl>
							<div class="goods-btn afterfl">
								<a href="#">立即购买</a>
								<a href="#">添加到购物车</a>
							</div>
							<div class="goods-tips afterfl">
								<span class="mr20">
									<span class="ico-mark-1"></span>正品保障
								</span>
								<span class="mr20">
									<span class="ico-mark-2"></span>24小时发货
								</span>
								<span class="mr20">
									<span class="ico-mark-3"></span>满55元快递包邮
								</span>
							</div>
							
						</div>
					</div>
					<!--内容区-->
					<div class="detail-content">
						<div class="tag">
							<div class="tag_right">
								<a href="">立即购买</a>
								<a href="">添加到购物车</a>￥
								<span>139.00</span>
							</div>	
							<ul class="afterfl">
								<li>
									<span class="ico">
										<span></span>
									</span>
									<a href="">商品信息</a>
								</li>
								<li>
									<span class="ico">
										<span></span>
									</span>
									<a href="">用户评论(<span>207</span>)</a>
								</li>
								<li>
									<span class="ico">
										<span></span>
									</span>
									<a href="">售后服务</a>
								</li>
							</ul>
						</div>
						<!--商品内容-->
						<div class="content">
							<div class="content_info">
								<!--商品参数-->
								<div class="content_info_1">
									<dl>
										<dt>商品参数</dt>
										<dd>
											<span>品 牌：[荷兰飞利浦PHILIPS]</span>
											<span>材 质：PVC等 </span>
											<span>尺 寸：电线长度1.5m</span>
											<span>商品毛重：0.663kg</span>
											<span>颜 色：白红</span>
											<span>产品档位：六档</span>
											<span>电源线长度：1.5米</span>
											<span>额定功率：1600w </span>
											<span>风嘴类型：集风嘴, 卷发扩散风嘴（附件）</span>
										</dd>
									</dl>
								</div>
								<!--商品展示-->
								<div class="content_info_2">
									<dl>
										<dt>商品信息</dt>
										<dd>
											<img src="http://img.cdn.daling.com/data/files/mobile/2016/01/21/14533709096532.jpg" alt="" />
										</dd>
									</dl>
								</div>
								<!--用户评论-->
								<div class="content_info_3">
									<dl>
										<dt>用户评论</dt>
										<dd>
											<div class="comment-tag">
												<ul class="afterfl">
													<li>
														<span class="first_line"></span>
														<p class="afterfl">
															<span class="item">好评率：</span>
															<span class="percent">96%</span>
														</p>
														<p class="afterfl">
															<span class="item">评分：</span>
															<span>
																<span class="icon-star"></span>
																<span class="icon-star"></span>
																<span class="icon-star"></span>
																<span class="icon-star"></span>
																<span class="icon-half-star"></span>
															</span>
														</p>
														<span class="line"></span>
													</li>
													<li>
														<span class="line"></span>
														<label for="">
															<input type="radio" name="comment"/>全部评价：207 条
														</label>
													</li>
													<li>
														<span class="line"></span>
														<label for="">
															<input type="radio"  name="comment"/>好评：199 条
														</label>
													</li>
													<li>
														<span class="line"></span>
														<label for="">
															<input type="radio"  name="comment"/>中评：7 条
														</label>
													</li>
													<li>
														<span class="line"></span>
														<label for="">
															<input type="radio"  name="comment"/>差评：1条
														</label>
													</li>
												</ul>
											</div>
											<!--评价内容-->
											<div>
												<div class="comment-table">
													<ul>
														<li class="afterfl">
															<div class="face">
																<img src="http://img.cdn.daling.com/data/files/avator/2016/10/17/14766959758999.jpg" alt="" />
																<p>爱鹿一生520</p>
															</div>
															<div class="data afterfl">
																<div class="infos afterfl">
																	<div class="rate">评分：
																		<span>
																			<span class="icon-star"></span>
																			<span class="icon-star"></span>
																			<span class="icon-star"></span>
																			<span class="icon-star"></span>
																			<span class="icon-star"></span>
																		</span>
																	</div>
																	<div class="time">评论时间：
																		<span>2017-07-23 10:42:54</span>
																	</div>
																</div>
																<p class="text">风速还好，声音也不是很大，总之各方面都挺好，就是不知道干发的速度快不快！</p>
															</div>
														</li>
														<li class="afterfl">
															<div class="face">
																<img src="http://img.cdn.daling.com/data/files/avator/2016/10/17/14766959758999.jpg" alt="" />
																<p>达令_1a826459641</p>
															</div>
															<div class="data afterfl">
																<div class="infos afterfl">
																	<div class="rate">评分：
																		<span>
																			<span class="icon-star"></span>
																			<span class="icon-star"></span>
																			<span class="icon-star"></span>
																			<span class="icon-star"></span>
																		</span>
																	</div>
																	<div class="time">评论时间：
																		<span>2017-07-23 10:42:54</span>
																	</div>
																</div>
																<p class="text">风速还好，声音也不是很大，总之各方面都挺好，就是不知道干发的速度快不快！</p>
															</div>
														</li>
														<li class="afterfl">
															<div class="face">
																<img src="http://img.cdn.daling.com/data/files/avator/2016/10/17/14766959758999.jpg" alt="" />
																<p>爱鹿一生520</p>
															</div>
															<div class="data afterfl">
																<div class="infos afterfl">
																	<div class="rate">评分：
																		<span>
																			<span class="icon-star"></span>
																			<span class="icon-star"></span>
																			<span class="icon-star"></span>
																		</span>
																	</div>
																	<div class="time">评论时间：
																		<span>2017-07-23 10:42:54</span>
																	</div>
																</div>
																<p class="text">风速还好，声音也不是很大，总之各方面都挺好，就是不知道干发的速度快不快！</p>
															</div>
														</li>
														<li class="afterfl">
															<div class="face">
																<img src="http://img.cdn.daling.com/data/files/avator/2016/10/17/14766959758999.jpg" alt="" />
																<p>爱鹿一生520</p>
															</div>
															<div class="data afterfl">
																<div class="infos afterfl">
																	<div class="rate">评分：
																		<span>
																			<span class="icon-star"></span>
																			<span class="icon-star"></span>
																		</span>
																	</div>
																	<div class="time">评论时间：
																		<span>2017-07-23 10:42:54</span>
																	</div>
																</div>
																<p class="text">风速还好，声音也不是很大，总之各方面都挺好，就是不知道干发的速度快不快！</p>
															</div>
														</li>
														<li class="afterfl">
															<div class="face">
																<img src="http://img.cdn.daling.com/data/files/avator/2016/10/17/14766959758999.jpg" alt="" />
																<p>爱鹿一生520</p>
															</div>
															<div class="data afterfl">
																<div class="infos afterfl">
																	<div class="rate">评分：
																		<span>
																			<span class="icon-star"></span>
																			
																		</span>
																	</div>
																	<div class="time">评论时间：
																		<span>2017-07-23 10:42:54</span>
																	</div>
																</div>
																<p class="text">风速还好，声音也不是很大，总之各方面都挺好，就是不知道干发的速度快不快！</p>
															</div>
														</li>
														<li class="afterfl">
															<div class="face">
																<img src="http://img.cdn.daling.com/data/files/avator/2016/10/17/14766959758999.jpg" alt="" />
																<p>爱鹿一生520</p>
															</div>
															<div class="data afterfl">
																<div class="infos afterfl">
																	<div class="rate">评分：
																		<span>
																			<span class="icon-star"></span>
																			<span class="icon-star"></span>
																			<span class="icon-star"></span>
																			<span class="icon-star"></span>
																			<span class="icon-star"></span>
																		</span>
																	</div>
																	<div class="time">评论时间：
																		<span>2017-07-23 10:42:54</span>
																	</div>
																</div>
																<p class="text">风速还好，声音也不是很大，总之各方面都挺好，就是不知道干发的速度快不快！</p>
															</div>
														</li>
														<li class="afterfl">
															<div class="face">
																<img src="http://img.cdn.daling.com/data/files/avator/2016/10/17/14766959758999.jpg" alt="" />
																<p>爱鹿一生520</p>
															</div>
															<div class="data afterfl">
																<div class="infos afterfl">
																	<div class="rate">评分：
																		<span>
																			<span class="icon-star"></span>
																			<span class="icon-star"></span>
																			<span class="icon-star"></span>
																			<span class="icon-star"></span>
																			<span class="icon-star"></span>
																		</span>
																	</div>
																	<div class="time">评论时间：
																		<span>2017-07-23 10:42:54</span>
																	</div>
																</div>
																<p class="text">风速还好，声音也不是很大，总之各方面都挺好，就是不知道干发的速度快不快！</p>
															</div>
														</li>
														<li class="afterfl">
															<div class="face">
																<img src="http://img.cdn.daling.com/data/files/avator/2016/10/17/14766959758999.jpg" alt="" />
																<p>爱鹿一生520</p>
															</div>
															<div class="data afterfl">
																<div class="infos afterfl">
																	<div class="rate">评分：
																		<span>
																			<span class="icon-star"></span>
																			<span class="icon-star"></span>
																			<span class="icon-star"></span>
																			<span class="icon-star"></span>
																			<span class="icon-star"></span>
																		</span>
																	</div>
																	<div class="time">评论时间：
																		<span>2017-07-23 10:42:54</span>
																	</div>
																</div>
																<p class="text">风速还好，声音也不是很大，总之各方面都挺好，就是不知道干发的速度快不快！</p>
															</div>
														</li>
														<li class="afterfl">
															<div class="face">
																<img src="http://img.cdn.daling.com/data/files/avator/2016/10/17/14766959758999.jpg" alt="" />
																<p>爱鹿一生520</p>
															</div>
															<div class="data afterfl">
																<div class="infos afterfl">
																	<div class="rate">评分：
																		<span>
																			<span class="icon-star"></span>
																			<span class="icon-star"></span>
																			<span class="icon-star"></span>
																			<span class="icon-star"></span>
																			<span class="icon-star"></span>
																		</span>
																	</div>
																	<div class="time">评论时间：
																		<span>2017-07-23 10:42:54</span>
																	</div>
																</div>
																<p class="text">风速还好，声音也不是很大，总之各方面都挺好，就是不知道干发的速度快不快！</p>
															</div>
														</li>
														<li class="afterfl">
															<div class="face">
																<img src="http://img.cdn.daling.com/data/files/avator/2016/10/17/14766959758999.jpg" alt="" />
																<p>爱鹿一生520</p>
															</div>
															<div class="data afterfl">
																<div class="infos afterfl">
																	<div class="rate">评分：
																		<span>
																			<span class="icon-star"></span>
																			<span class="icon-star"></span>
																			<span class="icon-star"></span>
																			<span class="icon-star"></span>
																			<span class="icon-star"></span>
																		</span>
																	</div>
																	<div class="time">评论时间：
																		<span>2017-07-23 10:42:54</span>
																	</div>
																</div>
																<p class="text">风速还好，声音也不是很大，总之各方面都挺好，就是不知道干发的速度快不快！</p>
															</div>
														</li>
														
													</ul>
												</div>
												<div class="pagination afterfl">
													<div class="page afterfl">
														<ul>
															<li>1</li>
															<li>2</li>
															<li>3</li>
															<li>...</li>
															<li>21</li>
														</ul>
														<a href="">下一页</a>
													</div>
												</div>
											</div>
										</dd>
									</dl>
								</div>
								<!--售后服务-->
								<div class="content_info_4 afterfl">
									<dt>售后服务</dt>
									<dd>
										客服电话： 400-080-1888，客服时间：周一至周日 09:00-18:00<br />
										配送服务： 限大陆地区；申通或中通随机发货！订单满55元包邮；首单免运费！<br /> 
										发货时间： 周一到周日全天发货，17点前付款当日发货 <br />
										相关服务： 该商品非质量问题不退不换 <br />
										微信服务： 微信号：ymallll，及时服务时间：周一至周日 09:00-18:00 <br />
									</dd>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="main_right">
					<div class="sidebar-buying">
						<div class="title">
							<p>大家都在买</p>
						</div>
						<ul>
							<li class="active">
								<a href="">
									<div class="img-ct cover-img"></div>
									<p class="goods-price">¥66.00
										<span class="old-price">¥00.00</span>
									</p>
									<p class="goods-title">飞科FH6355电吹风冷热风可折叠吹风机家用(粉色)</p>
								</a>
							</li>
							<li class="active">
								<a href="">
									<div class="img-ct cover-img"></div>
									<p class="goods-price">¥66.00
										<span class="old-price">¥00.00</span>
									</p>
									<p class="goods-title">飞科FH6355电吹风冷热风可折叠吹风机家用(粉色)</p>
								</a>
							</li>
							<li style="display: none;">
								<a href="">
									<div class="img-ct cover-img"></div>
									<p class="goods-price">¥66.00
										<span class="old-price">¥00.00</span>
									</p>
									<p class="goods-title">飞科FH6355电吹风冷热风可折叠吹风机家用(粉色)</p>
								</a>
							</li>
						</ul>
						<!--切换按钮-->
						<div class="scroll">
							<i class="scroll-up scrolls"></i>
							<i class="scroll-down scrolls"></i>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		
		
		<!--<div class="asideBar">-->
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

		<!--</div>-->
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
	<script type="text/javascript" src="__ROOT__/Index/common/js/aside.js"></script>
	<script type="text/javascript" src="__ROOT__/Index/common/js/productDetail.js"></script>
</html>
<!--/**
 *                             _ooOoo_
 *                            o8888888o
 *                            88" . "88
 *                            (| -_- |)
 *                            O\  =  /O
 *                         ____/`---'\____
 *                       .'  \\|     |//  `.
 *                      /  \\|||  :  |||//  \
 *                     /  _||||| -:- |||||-  \
 *                     |   | \\\  -  /// |   |
 *                     | \_|  ''\---/''  |   |
 *                     \  .-\__  `-`  ___/-. /
 *                   ___`. .'  /--.--\  `. . __
 *                ."" '<  `.___\_<|>_/___.'  >'"".
 *               | | :  `- \`.;`\ _ /`;.`/ - ` : | |
 *               \  \ `-.   \_ __\ /__ _/   .-` /  /
 *          ======`-.____`-.___\_____/___.-`____.-'======
 *                             `=---='
 *          ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
 *                     佛祖保佑        永无BUG
 *            佛曰:
 *                   写字楼里写字间，写字间里程序员；
 *                   程序人员写程序，又拿程序换酒钱。
 *                   酒醒只在网上坐，酒醉还来网下眠；
 *                   酒醉酒醒日复日，网上网下年复年。
 *                   但愿老死电脑间，不愿鞠躬老板前；
 *                   奔驰宝马贵者趣，公交自行程序员。
 *                   别人笑我忒疯癫，我笑自己命太贱；
 *                   不见满街漂亮妹，哪个归得程序员？
*/-->