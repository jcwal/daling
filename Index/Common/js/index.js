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
		$http({
			method:'GET',
			url:`index.php/Index/joinTrolley?pid=${pid}`,
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
});


//今日上新
$('.indexMain .indexNew .box li').on('mouseenter',function(){
	$(this).find('.joinTrolley').show();
});
$('.indexMain .indexNew .box li').on('mouseleave',function(){
	$(this).find('.joinTrolley').hide();
});
//买了又买
$('.indexMain .indexBuyAgain .box dl dd').on('mouseenter',function(){
	$(this).siblings().prop('class','clearFloat')
	$(this).prop('class','clearFloat current');
});
$('.indexMain .indexBuyAgain .box dl dd').on('mouseleave',function(){
	$(this).prop('class','clearFloat');
});
$('.indexMain .indexBuyAgain .box dl').on('mouseleave',function(){
	$(this).find('dd').eq(0).prop('class','clearFloat current');
});
$('.indexMain .indexBuyAgain .box dl dt').on('mouseenter',function(){
	$(this).siblings('dd').eq(0).prop('class','clearFloat current');
});
//今日闪购










