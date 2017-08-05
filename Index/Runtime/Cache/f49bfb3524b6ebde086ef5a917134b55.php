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
		<script type="text/javascript" src="__ROOT__/Index/Common/js/showList.js"></script>
	</head>
	<body ng-app="myapp">
		<div class="navigator">
			<header class="header" ng-controller='headerController'>
	<div class="top">
		<div class="topWrap">
			<div class="consumerInfo">
				<a href="#">消费者告知书</a>
			</div>
			<ul class="loginBar">
				<li class="login">
					<a href="javascript:void(0)">登陆</a>
				</li>
				<li class="register">
					<a href="javascript:void(0)">注册</a>
				</li>
				<li class="tel">
					<img src="__ROOT__/Index/Common/images/header/tel.svg" alt="" />
					<a >400-080-1888</a>
				</li>
				<li class="download">
					<a href="javascript:void(0)">下载达令app</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="loginRegisterWrap">
		<div class="loginRegisterInner">
			<div class="loginRegisterPanel clearFloat">
				<h2>达令会员</h2>
				<div class="close"></div>
				<div class="panelTab clearFloat">
					<span class="tabLogin">登陆</span>
					<span class="tabRegister">注册</span>
				</div>
				<div class="loginForm">
					<div class="username">
						<span class="iconBox">
							<span></span>
						</span>
						<input type="text" placeholder="请输入您的用户名" id='usernameLogin'/>
					</div>
					<div class="password">
						<span class="iconBox">
							<span></span>
						</span>
						<input type="password" placeholder="请输入您的密码" id='passwordLogin'/>
					</div>
					<div class="verify">
						<span class="iconBox">
							<span></span>
						</span>
						<input type="text" placeholder="请输入验证码" id='verifyLogin'/>
					</div>
					<button id="submitLogin" ng-click='loginSub()' ng-disable='judge()'>登陆</button>
				</div>
				<div class="registerForm">
					<div class="username">
						<span class="iconBox">
							<span></span>
						</span>
						<input type="text" placeholder="请输入您的用户名" id='usernameRegister'/>
					</div>
					<div class="password">
						<span class="iconBox">
							<span></span>
						</span>
						<input type="password" placeholder="请输入您的密码" id='passwordRegister'/>
					</div>
					<div class="passwordRepeat">
						<span class="iconBox">
							<span></span>
						</span>
						<input type="password" placeholder="请确认您的密码" id='passwordRegisterReapeat'/>
					</div>
					<div class="verify">
						<span class="iconBox">
							<span></span>
						</span>
						<input type="text" placeholder="请输入验证码" id='verifyRegister'/>
					</div>
					<div class="registerAgreement">
						<input type="checkbox" />
						我已阅读并同意
						<a href="#">《达令用户注册协议》</a>
					</div>
					<button id="submitRegister" ng-click='registerSub()' ng-disable='judge()'>注册</button>
				</div>

				<div class="agreementDetail">
					<div class="detailBox">
						<div class="detailTitle">
							<p>达令用户注册协议</p>
							<span class="closeAgreement"></span>
						</div>
						<div class="detailArticle">
							<p>《达令注册协议》（以下简称“本协议”）是达令应用所有者北京普缇客科技有限公司（以下简称“本公司”）与达令的使用者（以下简称“用户”）达成的关于使用达令服务的各项规则、条款和条件。</p>
							<p>请您仔细阅读本注册协议，您点击"已阅读并同意"按钮后，本协议即构成对双方有约束力的法律文件。如果您不同意本协议中的任何内容，您则无权使用本应用及其相关服务。<strong>您的使用行为将视为对本协议的接受，并同意接受本协议各项条款的约束。</strong>
							</p>
							<p class="p1">一、本应用服务条款的确认和接纳</p>
							<p>1.
							本应用的各项电子服务的所有权和运作权归本公司所有。用户同意所有注册协议条款并完成注册程序，才能成为本应用的正式用户。用户确认：本协议条款是处理双方权利义务的契约，始终有效，法律另有强制性规定或公司修改本协议相关内容，依其规定。</p>
							<p>2. 用户点击同意本协议的，即视为用户确认自己具有享受本应用服务、下单购物等相应的权利能力和行为能力，能够独立承担法律责任。</p>
							<p>3. 如果您在18周岁以下，您只能在父母或监护人的监护参与下才能使用本应用。</p>
							<p>4. 本公司保留在中华人民共和国（不包括香港特别行政区、澳门特别行政区和台湾地区）适用法律（以下简称“中国法律”）允许的范围内独自决定拒绝服务、关闭用户账户、清除或编辑内容或取消订单的权利。</p>
							<p class="p1">二、用户注册</p>
							<p>1.
							用户注册是指用户登录达令应用，按要求填写相关信息并确认同意本协议的过程。用户因进行交易、获取有偿服务等而发生的所有应纳税赋由用户自行承担。用户在注册成为达令用户时提供的信息应真实、完整、有效，并保证本公司可以通过该等信息与用户本人进行联系。同时，用户也有义务在相关资料发生变更时及时更新注册资信息。<strong>如您提供的信息违背上述承诺，则我司有权拒绝向您履行任何义务，并视具体情况追究您的法律责任，包括对我司造成的损失的赔偿等等。</strong>
							</p>
							<p>2.
							在成功注册后，本公司会为每位用户开通一个账户，作为其使用达令应用服务的唯一身份标识，用户应妥善保管该账户的用户名和密码，并对在其账户和密码下发生的所有活动承担责任。用户不得以任何形式转让或授权他人使用自己的达令账户，也不应用他人账户在达令进行注册和购买商品。</p>
							<p>3. 用户同意本公司拥有通过邮件、短信、电话等形式，向其发送订单信息、促销活动等告知信息的权利。</p>
							<p>4. 用户同意本公司有权使用用户的注册信息、用户名、密码等信息，登陆进入用户的注册账户，进行合法的证据保全，包括但不限于公证、见证等。</p>
							<p class="p1">三、合同订立</p>
							<p>1.
							达令应用上展示的商品信息（如商品名称、价格、商品描述等）仅构成要约邀请，用户通过达令订购商品，订单即为购买商品的要约，只有当本公司向用户发出送货确认的信息通知用户本公司已将该商品发出，构成本公司对该订单的承诺，此时合同即告成立。</p>
							<b>2. 当用户购买的商品经用户签收后，该商品的所有权和灭失风险即转移给用户。</b>
							<p>3. 用户同意本公司有保留在发现达令应用上显示的商品信息错误或缺货的情况下，撤回或修改该等信息的权利，并保留对商品订购数量的限制权。用户下订单即表示其对在订单中提供的信息的真实性负责。</p>
							<p>4. 达令应用上显示的每一商品的价格都包含法律规定的税金，送货费用根据达令的配送政策和用户选择的送货方式另行计收。本公司有权更改上述有关价格信息和送货费用的政策，而不做另行通知。</p>
							<p class="p1">四、用户的权利及义务</p>
							<p>1. 用户有权根据本协议的约定，在达令应用上查询商品信息、订购具体商品、发表使用体验、参与商品讨论、邀请关注好友、上传商品图片、参加达令的有关活动（如适用），以及享受达令提供的其它服务。</p>
							<p>2. 用户应当保证在达令购买商品过程中遵守诚实信用原则，不扰乱网上交易的正常秩序。</p>
							<p>3. 用户享有言论自由权利，并拥有适度修改、删除自己发表的文章的权利。</p>
							<p>4. 本协议依据国家相关法律法规规章制定，用户同意严格遵守以下义务，并保证违反以下义务所产生的任何可能侵害他人权益的行为，本公司均不对任何人承担任何责任：</p>
							<p>（1）不得传输或发表：煽动抗拒、破坏宪法和法律、行政法规实施的言论，煽动颠覆国家政权，推翻社会主义制度的言论，煽动分裂国家、破坏国家统一的的言论，煽动民族仇恨、民族歧视、破坏民族团结的言论；</p>
							<p>（2）从中国大陆向境外传输资料信息时必须符合中国有关法规；</p>
							<p>（3）不得利用达令应用从事洗钱、窃取商业秘密、窃取个人信息等违法犯罪活动；</p>
							<p>（4）不得干扰达令应用的正常运转，不得侵入本站及国家计算机信息系统；</p>
							<p>（5）不得传输或发表任何违法犯罪的、骚扰性的、中伤他人的、辱骂性的、恐吓性的、伤害性的、庸俗的，淫秽的、不文明的等信息资料；</p>
							<p>（6）不得传输或发表损害国家社会公共利益和涉及国家安全的信息资料或言论；</p>
							<p>（7）不得教唆他人从事本条所禁止的行为；</p>
							<p>（8）不得利用在达令应用注册的账户进行牟利性经营活动；</p>
							<p>（9）不得发布任何侵犯他人著作权、商标权等知识产权或任何第三方的合法权利；</p>
							<p>（10）未经本公司同意，禁止用户在达令上发布任何形式的广告。</p>
							<p>5. 用户使用须知及隐私保护</p>
							<p>（1）用户须自行配备电脑设备及手机设备；</p>
							<p>（2）用户同意本公司基于下列原因需要使用用户的信息资源：</p>
							<p>A. 执行应用验证服务；</p>
							<p>B. 执行应用升级服务；</p>
							<p>C. 提高用户的使用安全性并提供客户支持；</p>
							<p>D. 改善或提高应用的技术和服务，例如，帮助本公司了解用户使用应用和服务时遇到的问题，帮助我们改善我们应用和服务的质量、性能和安全性；</p>
							<p>E. 在用户同意的情况下，将根据用户信息所作出的统计数据、行为分析等非关联用户身份识别的信息提供给合作单位，用于呈现合作效果；</p>
							<p>F. 为用户发送通知及达令应用提供的服务信息。</p>
							<p>（3）本公司将会采取合理的措施保护用户信息，不向第三方公开、透露用户信息，除以下情形之外：</p>
							<p>A. 基于法律或法律赋予权限的政府部门要求；</p>
							<p>B. 用户同意本公司公开、透露用户信息的；</p>
							<b>C. 用户与本公司及第三方合作单位之间就用户信息公开或使用另有约定的。</b>
							<p>6.
							用户不得利用本应用及服务进行故意制作、传播计算机病毒等破坏性程序，不得针对本服务、与本应用及服务连接的服务器或网络制造干扰、混乱，或违反连接本应用及服务的网络的任何要求、程序、政策或规则，否则达令将保留追究其法律责任的权利并有权将其提交给相关部门处理。</p>
							<p>7. 用户不得利用本应用及服务传播、复制、发送、上传和发布任何妨碍社会治安或非法、虚假、骚扰性、侮辱性、恐吓性、伤害性、破坏性、挑衅性、淫秽色情性等内容的信息。</p>
							<p>8. 用户依本协议条款所取得的服务权利不可转让。</p>
							<p>9.
							如用户违反国家法律法规或本协议条款，本公司和合作公司将有权停止向用户提供服务而不需承担任何责任。如导致本公司或其合作公司遭受任何损害或遭受任何来自第三方的纠纷、诉讼、索赔要求等，用户须向本公司或合作公司赔偿相应的损失，用户并需对其违反服务条款所产生的一切后果负全部法律责任。达令有权认定和删除用户所发表的任何不符合国家法律、法规和政策、本服务条款的任何文章、资料、图片、图表等内容，且不需要对用户另行通知。</p>
							<p>10. 本公司保留在任何时候因为客户的非正常购买行为等原因拒绝向任何人提供服务的权利。</p>
							<p>11. 本应用中可能存在网友提供之内容，您了解并且同意本公司不能为用户行为负责。使用本应用及服务产生的所有风险由用户个人承担。如果您发现本应用及服务中存在任何违法违规行为，有义务及时向达令举报。</p>
							<p>12.用户可以非商业性地下载、安装本应用产品。如果需要进行商业性的销售、复制和散发，例如应用预装和捆绑，必须获得本公司的书面授权和许可。</p>
							<p>13.
							本应用为免费应用，使用本应用由用户承担风险，用户应具备本应用产品运行所需的条件，用户必须保证有权使用其运行所需操作系统。在适用法律允许的最大范围内，本公司在任何情况下不就用户因使用或不能使用本应用产品所发生的特殊的、意外的、直接的或间接的侵权或遭致损失承担赔偿责任。即使已事先被告知该损害发生的可能性。</p>
							<b>14.
							如因用户不遵守本条上述任意一款或者几款的规定，本公司有权在不事先通知用户的情况下将相应的内容删除或停止用户使用本达令应用或服务，由此而造成的任何用户损失，由用户自行承担；如造成本公司损失的，本公司有权要求用户给予相应的赔偿，包括但不限于本公司因此被国家机关予以行政处罚，或者被第三方通过诉讼或其他的方式索赔，赔偿范围包括但不限于罚款、赔偿金以及本公司支付的相应的诉讼费、律师费。</b>
							<p class="p1">五、本公司的权利和义务</p>
							<p>1. 本公司有义务在现有技术上维护整个应用的正常运行，并努力提升和改进技术，使用户线上交易活动得以顺利进行。</p>
							<b>2. 对于用户在达令应用作出下列行为的，本公司有权作出删除相关信息、终止提供服务等处理，而无须征得用户的同意：</b>
							<b>（1）本公司有权对用户的注册信息及购买行为进行查阅，发现注册信息或购买行为中存在任何问题的，有权向用户发出询问及要求改正的通知或者作出删除等处理；</b>
							<b>（2）用户违反本协议规定或有违反法律法规和地方规章的行为的，本公司有权停止传输并删除其信息，禁止用户发言，限制用户订购，注销用户账户并按照相关法律规定向相关主管部门进行披露；</b>
							<b>3. 本公司保有删除站内各类不符合法律政策或不真实的信息内容而无须通知用户的权利。</b>
							<p class="p1">六、相关说明</p>
							<p>1. 商品信息说明：</p>
							<p><strong>达令应用中的商品价格、数量、是否有货等商品信息随时都有可能发生变动，本公司不作特别通知。</strong>本公司会尽最大努力保证您所浏览商品信息的准确性，但由于众所周知的移动互联网技术因素等客观原因存在，页面显示的信息可能会有一定的滞后性或差错，对此情形希望您知悉并理解。
							</p>
							<p>2. 商品缺货说明：</p>
							<b>由于市场变化及各种以合理商业努力难以控制的因素的影响，本公司无法承诺用户通过提交订单所希望购买的商品都会有货；用户订购的商品或服务如果发生缺货，用户和本公司皆有权取消该订单。本公司可对缺货商品或服务进行预售登记，本公司会尽最大努力在最快时间内满足用户的购买需求，当缺货商品到货时，本公司将第一时间通过邮件、短信或电话通知用户，方便用户进行购买。预售登记并不做订单处理，不构成要约。</b>
							<p>3. 配送说明：</p>
							<p>本公司将会把商品送到用户指定的收货地址。所有在达令应用上列出的送货时间皆为参考时间，供用户参照使用。参考送货时间是根据库存状况、正常的处理过程和送货时间、送货地点等情况计算得出的。<strong>因如下情况造成订单延迟或无法配送等，本公司不承担延迟配送的责任：</strong>
							</p>
							<b>（1）用户提供的信息错误、地址不详细等原因导致的；</b>
							<b>（2）货物送达后无人签收，导致无法配送或延迟配送的；</b>
							<b>（3）情势变更因素导致的；</b>
							<b>（4）不可抗力因素导致的，例如：自然灾害、交通戒严、突发战争等。</b>
							<p>4. 退换货、补货说明：</p>
							<p>（1）退换货条件：</p>
							<p>a）所退换商品要求具备商品完整的外包装、备件、说明书、保修单、发票、发货小票、退换货原因的说明；</p>
							<b>b）安全封条完整；</b>
							<p>c）商品到达之后的7天内确认退换货相关事项；</p>
							<b>d）产品未曾受到：非正常使用、非正常条件下存储、暴露在潮湿环境中、暴露在温度过高或过低温度中、未经授权的修理、误用、疏忽、滥用、事故、改动、不正确的安装、不可抗力、食物或液体溅落、产品的正常磨损等。</b>
							<p>（2）退换货提醒：</p>
							<p>a）若用户在购买商品后希望退货，只需拒绝签收，保证货品未被损坏，不拆封货品"安全封条"；</p>
							<p>b）如因商品质量或配送失误而产生的退换货问题，所产生的运费由本公司承担；</p>
							<p>c）本公司收到用户退回的货物，且本公司确认无误后7个工作日内会把相关款项转入用户的账户，具体以银行实际到账时间为准；</p>
							<p>d）退换货的相关款项不包括快递费用；</p>
							<p>e）如有赠品，退货时一并退回我司，使用礼品卡及积分购买的用户在退货时，所退货物<p>使用的对应金额的礼品卡或对等数量的积分退回给您，但优惠券将无法退回；</p>
							<em>f）如果用户参与促销的，按促销优惠分摊的金额进行扣减后返还退货金额；</em>
							<p>g）本公司尽量做到在本网站上对产品的描述准确无误，但无法保证产品说明、颜色以及相关其他内容完全精准；</p>
							<p>h）由于相关技术原因本公司无法保证电脑所显示商品的颜色与商品实际颜色完全一致，如发生实物与网页介绍稍有不符，应以实物为准；</p>
							<p>i）如商品是一个系列中的一件，退换时需要包括整个系列。</p>
							<p>（3）退换货流程</p>
							<p>a）用户向本公司提出退换货申请并提供相应的证明性资料；</p>
							<p>b）双方对退换货一事达成一致；</p>
							<p>c）用户寄回需换商品和购买单据；</p>
							<p>d）达令收到货品后确认退款；</p>
							<p>e）用户收到退款。</p>
							<b>注：用户必须保证退换商品未被损坏，产品封条未破损。</b>
							<b>（4）达令商品退换规定：</b>
							<b>a）任何非由达令出售的商品，不予办理退换；</b>
							<b>b）任何已使用商品，不予办理退换，如出现质量问题，需由达令视具体情况决定；</b>
							<b>c）任何因非正常使用及保管导致出现质量问题的商品，不予办理退货；</b>
							<b>d）内衣、食品和化妆品类商品由于特殊原因，不享受退换货服务, 若有特殊原因，可以申诉。</b>
							<p>5. 订单取消说明：</p>
							<p>（1）用户有权在下列情况下，取消订单：</p>
							<p>a) 经用户和本公司协商达成一致的</p>
							<p>b) 本公司对用户订单做出承诺之前；</p>
							<p>c) 达令应用公布的商品价格发生变化或错误，用户在达令发货之前通知本公司的。</p>
							<b>（2）本公司在下列情况下，可以取消用户订单：</b>
							<p>a) 经本公司和用户协商达成一致的；</p>
							<p>b) 达令应用上显示的商品信息明显错误或缺货的；</p>
							<b>c) 用户订单信息明显错误或用户订购数量超出达令备货量的；</b>
							<p>d）商品送到用户指定的收货地址被拒绝签收的；</p>
							<p>e) 因不可抗力、达令系统发生故障或遭受第三方攻击，及其它本公司无法控制的情形的；</p>
							<b>f) 经本公司判断不符合公平原则或诚实信用原则的情形（如同一用户多次无理由拒收订购商品或通过虚假注册信息在达令平台内下单的行为等）；</b>
							<p>g) 按本公司已经发布的或将来可能发布或更新的各类规则，可取消用户订单的情形。</p>
							<p>h) 如用户订单未在本司平台中规定时间内付款的，本公司有权取消该订单，并在您的订单中体现。</p>
							<p>i) 签收后7日，如用户未对该订单 进行退货，则订单状态将自动变成已完成状态。</p>
							<p class="p1">七、服务的中断和终止</p>
							<p>1. 如用户向达令提出注销用户账号时，经达令审核同意，由达令注销该用户账号，用户即与本公司解除本协议。但注销该用户账号后，本公司仍有权：</p>
							<p>（1）保留该用户的注册信息及过往的全部交易行为记录；</p>
							<p>（2）如用户在注销前在达令上存在违法行为或违反本协议的行为，达令仍保留要求用户承担相应责任的权利。</p>
							<p>2. 在下列情况下，本公司可以通过注销用户账户的方式终止服务：</p>
							<p>（1）在用户违反本协议相关规定时，本公司有权终止向该用户提供服务。如该用户在本公司终止提供服务后，再一次直接或间接或以他人名义注册为达令应用用户的，本公司有权拒绝向该用户提供服务；</p>
							<b>（2）一经发现用户注册信息中的内容是虚假的（如手机号或收件地址等信息为虚构或非真实联系信息时等），本公司有权随时终止向该用户提供服务；</b>
							<p>（3）本协议终止或更新时，用户明示不愿接受新的注册协议的。</p>
							<p class="p1">八、知识产权声明</p>
							<p>1.
							用户一旦接受本协议，即表明该用户主动将其在任何时间段在达令应用中发表的任何形式的信息内容的财产性权利等任何可转让的权利，如著作权财产权（包括并不限于：复制权、发行权、出租权、展览权、表演权、放映权、广播权、信息网络传播权、摄制权、改编权、翻译权、汇编权以及应当由著作权人享有的其他可转让权利），全部独家且不可撤销地转让给本公司所有，用户同意本公司有权就任何主体侵权而单独提起诉讼。</p>
							<p>2. 用户同意并已充分了解本协议的条款，承诺不将已发表于达令应用的信息，以任何形式发布或授权其它主体以任何方式使用（包括但限于在各类网站、媒体上使用）。</p>
							<p>3. 除法律另有强制性规定外，未经本公司明确的书面许可,任何单位或个人不得以任何方式非法地全部或部分复制、转载、引用、链接、抓取或以其他方式使用达令应用中的信息内容，否则，本公司有权追究其法律责任。</p>
							<p>4. 达令应用所刊登的资料信息下的相关权益（诸如文字、图表、标识、按钮图标、图像、声音文件片段、数字下载、数据编辑和软件），均属于本公司所有，受中国和国际版权法的保护。</p>
							<p>5. 非经本公司或本公司授权开发并正式发布的其它任何由本应用衍生的软件均属非法，下载、安装、使用此类软件，将可能导致不可预知的风险，由此产生的一切法律责任与纠纷一概与达令无关。</p>
							<p class="p1">九、协议更新及用户关注义务</p>
							<p>
							根据中国法律法规变化及应用运营需要，本公司有权对本协议条款不时地进行修改，修改后的协议一旦被张贴在本应用上即生效，并代替原来的协议。用户可随时登陆查阅最新协议；用户有义务不时关注并阅读最新版的协议及应用公告。如用户不同意更新后的协议，应立即停止接受达令应用依据本协议提供的服务；如用户继续使用本应用提供的服务，即视为同意更新后的协议。本公司建议您在使用本应用之前阅读本协议及本应用的公告。如果本协议中任何条款被视为废止、无效或因任何理由不可执行，该条款的效力瑕疵并不影响本协议其他条款的有效性和可执行性。</p>
							<p class="p1">十、法律管辖和适用</p>
							<p>
							本协议的订立、执行和解释及争议的解决均应适用在中国法律（但不包括其冲突法规则）。如发生本协议与适用之法律相抵触时，则这些条款将按法律规定重新解释，而其它有效条款继续有效。如缔约方就本协议内容或其执行发生任何争议，双方应尽力友好协商解决；协商不成时，任何一方均可向北京仲裁委员会提请仲裁。</p>
							<p class="p1">十一、其他</p>
							<p>1. 本公司是指在工商部门依法设立并有效存续的达令应用经营主体。</p>
							<p>2.
							本公司尊重用户和消费者的合法权利，本协议及本应用上发布的各类规则、声明等其他内容，均是为了更好的、更加便利的为用户和消费者提供服务。本应用欢迎用户和社会各界提出意见和建议，本公司将虚心接受并适时修改本协议及本应用上的各类规则。</p>
							<p>3. 本协议内容中以黑体、加粗、下划线、斜体等方式显著标识的条款，请用户着重阅读。</p>
							<p>4. 您点击本协议下方的"同意并继续"按钮即视为您完全接受本协议，在点击之前请您再次确认已知悉并完全理解本协议的全部内容。</p>
							<p>北京普缇客科技有限公司版权所有，在现有法律法规允许的范围内，保留最终的解释权利。</p>
						</div>
						<div class="detailBtn">
							<button>同意并继续</button>
						</div>
					</div>
					<div class="mask"></div>
				</div>
			</div>
		</div>
			
		<div class="mask"></div>
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
						<button class="selectMore">+ &nbsp;多选</button>
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
						<button class="selectMore">+ &nbsp;多选</button>
						<button class="listMore">更多</button>
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
						<button class="selectMore">+ &nbsp;多选</button>
						<button class="listMore">更多</button>
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
						<button class="selectMore">+ &nbsp;多选</button>
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
						<button class="selectMore">+ &nbsp;多选</button>
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
						<button class="selectMore">+ &nbsp;多选</button>
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
						<button class="selectMore">+ &nbsp;多选</button>
						<button class="listMore">更多</button>
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
						<button class="selectMore">+ &nbsp;多选</button>
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
						<button class="selectMore">+ &nbsp;多选</button>
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
						<button class="selectMore">+ &nbsp;多选</button>
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
						<button class="selectMore">+ &nbsp;多选</button>
						<button class="listMore">更多</button>
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
						<button class="selectMore">+ &nbsp;多选</button>
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
						<button class="selectMore">+ &nbsp;多选</button>
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
						<button class="selectMore">+ &nbsp;多选</button>
						<button class="listMore">更多</button>
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
						<button class="selectMore">+ &nbsp;多选</button>
						<button class="listMore">更多</button>
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
						<button class="selectMore">+ &nbsp;多选</button>
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
						<button class="listMore">更多</button>
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
						<button class="selectMore">+ &nbsp;多选</button>
						<button class="listMore">更多</button>
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
						<button class="selectMore">+ &nbsp;多选</button>
						<div class="clearFloat"></div>
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
						<button class="selectMore">+ &nbsp;多选</button>
						<button class="listMore"> 更多</button>
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
						<button class="selectMore">+ &nbsp;多选</button>
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
		

	</script>
</html>