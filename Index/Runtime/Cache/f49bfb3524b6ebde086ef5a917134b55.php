<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>商品列表</title>
		<link rel="stylesheet" href="__ROOT__/Index/Common/css/showList.css" />
		<link rel="stylesheet" href="__ROOT__/Index/Common/css/reset.css" />
		<script type="text/javascript" src="__ROOT__/Index/Common/js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="__ROOT__/Index/Common/js/showList.js"></script>
	</head>
	<body>
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
	</body>
</html>