//初始化swiper-wrapper
$('.indexSwiper .swiper-wrapper').css('width',function(){
	return $('.indexSwiper .swiper-wrapper .swiper-slide').length * 1200
});
var mySwiper = new Swiper('.swiper-container', {
	autoplay: 3000,
	direction : 'horizontal',
	//grabCursor : true,
	autoplayDisableOnInteraction : true,
	pagination : '.swiper-pagination',
	paginationClickable:true,
	prevButton:'.swiper-button-prev',
	nextButton:'.swiper-button-next',
	onSlideChangeStart:function(swiper){
		$('.indexSwiper').css('backgroundColor',function(){
			if(swiper.activeIndex == 0){
				return 'rgb(255,247,237)';
			}else if(swiper.activeIndex == 1){
				return 'rgb(192, 217, 230)';
			};
		})
	},
})
//初始化页面
if(app == ''){
	app=angular.module("myapp",[]);	
};
app.controller('indexController',function($scope,$http,$interval,$location){
	//ajax获取数据，初始化页面
	$scope.initData = '';
	$http({
		method:'GET',
		url:'index.php/Index/initial',
	}).success(function(data){
		if(data['status'] == 1){
			$scope.initData = data;
			//买了又买	
			setTimeout(function(){
				$('.indexMain .indexBuyAgain .box .beauty dd').eq(0).prop('class','clearFloat current ng-scope');
				$('.indexMain .indexBuyAgain .box .snack dd').eq(0).prop('class','clearFloat current ng-scope');
				$('.indexMain .indexBuyAgain .box .create dd').eq(0).prop('class','clearFloat current ng-scope');
			},1000);
		}else{
			swal({
				title: data['info'],
				text: '',
				type: "error",
				confirmButtonText: "确认"
			});
		};
	}).error(function(err){
		swal({
			title: err,
			text: '',
			type: "error",
			confirmButtonText: "确认"
		});
	});

	$scope.exchange = function(){
		$http({
			method:'GET',
			url:'index.php/Index/exchange',
		}).success(function(data){
			if(data['status'] == 1){
				
			}else{
				swal({
					title: data['info'],
					text: '',
					type: "error",
					confirmButtonText: "确认"
				});
			};
		}).error(function(err){
			swal({
				title: err,
				text: '',
				type: "error",
				confirmButtonText: "确认"
			});
		});
	};
	$scope.joinTrolley = function(pid){
		var pid = pid;
		var uid = findCookie('uid');
		$http({
			method:'GET',
			url:`index.php/Index/joinTrolley?pid=${pid}&uid=${uid}`,
		}).success(function(data){
			if(data['status'] == 1){
				console.log(data);
			}else{
				swal({
					title: data['info'],
					text: '',
					type: "error",
					confirmButtonText: "确认"
				});
			};
		}).error(function(err){
			swal({
				title: err,
				text: '',
				type: "error",
				confirmButtonText: "确认"
			});
		});
	};
	$scope.collect = function(pid){
		var pid = pid;
		var uid = findCookie('uid');
		$http({
			method:'GET',
			url:`index.php/Index/collect?pid=${pid}&uid=${uid}`,
		}).success(function(data){
			if(data['status'] == 1){
				
			}else if(data['status'] == 0){
				swal({
					title: data['info'],
					text: '',
					type: "error",
					confirmButtonText: "确认"
				});
			}else if(data['status'] == 2){
				$('.navigator .header .loginRegisterWrap').show();
				$('.navigator .header .loginRegisterWrap .loginForm').show();
			};
		}).error(function(err){
			swal({
				title: err,
				text: '',
				type: "error",
				confirmButtonText: "确认"
			});
		});
	};
	$scope.buyEnter = function(e){
		e.stopPropagation();
		e.preventDefault();
		$(e.currentTarget).siblings().prop('class','clearFloat');
		$(e.currentTarget).prop('class','clearFloat current ');
	};
	$scope.buyLeave = function(e){
		e.stopPropagation();
		e.preventDefault();
		$(e.currentTarget).prop('class','clearFloat ng-scope');
	};
	$scope.newEnter = function(e){
		e.stopPropagation();
		e.preventDefault();
		$(e.currentTarget).find('.joinTrolley').show();
	};
	$scope.newLeave = function(e){
		e.stopPropagation();
		e.preventDefault();
		$(e.currentTarget).find('.joinTrolley').hide();
	};
});


//今日上新
$('.indexMain .indexNew .box li').on('mouseenter',function(){
	$(this).find('.joinTrolley').show();
});
$('.indexMain .indexNew .box li').on('mouseleave',function(){
	$(this).find('.joinTrolley').hide();
});
//大家都说好
$('.indexMain .indexGood .box .tab ul li').on('click',function(){
	$('.indexMain .indexGood .box .tab ul li').prop('class','');
	$(this).prop('class','current');
	$('.indexMain .indexGood .box .list ul').hide();
	$('.indexMain .indexGood .box .list ul').eq($(this).index()).show();
});


$('.indexMain .indexBuyAgain .box dl').on('mouseleave',function(){
	$(this).find('dd').eq(0).prop('class','clearFloat current ng-scope');
});
$('.indexMain .indexBuyAgain .box dl dt').on('mouseenter',function(){
	$(this).siblings('dd').eq(0).prop('class','clearFloat current ng-scope');
});
function findCookie(cookieName){
	var regExp = new RegExp('\\b'+cookieName+'\\b','g');
	var cookieIndex = document.cookie.search(regExp);
	if(cookieIndex != -1){
		var cookieStart = cookieIndex + cookieName.length + 1;
		var cookieEnd = document.cookie.indexOf(';',cookieIndex+cookieName.length+1);
		if(cookieEnd == -1){
			cookieEnd = document.cookie.length;
		};
		var cookieUsername = unescape(document.cookie.substring(cookieStart,cookieEnd));
		return cookieUsername;
	}else{
		return null
	};
};










