var paramter = window.location.search;

var pid = paramter.substring(paramter.indexOf('=')+1, paramter.length);
if(app == ''){
    app=angular.module("myapp",[]); 
};
var distance = 0;
var shoppTop = $("#tags").offset().top;
var commentTop = 0;
var servebottom = 0;
app.controller("mycontroller",function ($scope,$http) {
	$scope.id="";
	
	//返回后台数据
	$http({
		method:'get',
		url:`ProductDetail/getData?pid=${pid}`,
		header:{},
	}).success(function(data){
		console.log(data);
		
		$scope.img="../"+data.productShowPicUrl;
		// $scope.imgs="../"+data.productInfoPicUrl;
		$scope.Image = data.productInfoPicUrl;
		$scope.ImageArr = [];
		$scope.ImageArr = $scope.Image.split(",")
		console.log($scope.Image);
		console.log($scope.ImageArr);
		$scope.ImageArrCount = $scope.ImageArr.length
		console.log($scope.ImageArrCount);
		for (var i = 0; i < $scope.ImageArrCount;i++) {
			$scope.imgs = "../"+$scope.ImageArr[i];
			console.log($scope.imgs);
		}
		
		//标题
		$scope.productName = data.productName;
		//达令价格
		$scope.discountPrice = data.discountPrice;
		//原价
		$scope.originPrice = data.originPrice;
		//打折
		$scope.discountRate = data.discountRate;
		//商品参数
		$scope.productParamter = data.productParamter;
		$scope.commentObj = data.commentObj;
		console.log(data.productName);
		$scope.common = data.commentObj.common1;
		$scope.count = data.commentObj.common1.length;
		console.log(data)
		console.log(data.productShowPicUrl);
		$scope.data = data;
		// 分页
		$scope.pageSize = 5;
		// 分页数
		$scope.pages = Math.ceil(data.commentObj.common1.length / $scope.pageSize);
		$scope.newPages = $scope.pages > 5 ? 5 : $scope.pages;
		$scope.pageList = [];
		$scope.selPage = 1;
		$scope.setData = function () {
			$scope.items = $scope.common.slice(($scope.pageSize * ($scope.selPage - 1)),($scope.selPage * $scope.pageSize));
		};
		$scope.items = $scope.common.slice(0,$scope.pageSize);
		console.log($scope.items)
		for (var i = 0; i < $scope.newPages; i++){
			$scope.pageList.push(i + 1);
		};
		$scope.selectPage = function (page) {
			if (page < 1 || page > $scope.pages) return;
			if (page > 2) {
				var newpageList = [];
				for (var i = (page - 3); i<((page + 2) > $scope.pages ? $scope.pages : (page + 2)); i++){
					newpageList.push(i + 1);
				}
				$scope.pageList = newpageList;
			}
			$scope.selPage = page;
            $scope.setData();
            $scope.isActivePage(page);
            console.log("选择的页：" + page);
		};
		$scope.isActivePage = function (page) {
                return $scope.selPage == page;
        };
		$scope.end = function () {
			$scope.selectPage($scope.selPage + 1);
		}
		setTimeout(function(){
			
			commentTop = $(".content_info_3").offset().top;
			servebottom = $(".bottomMessage").offset().top;
		}, 1000)
		
	}).error(function(err){
		alert(err);
	});
	//购买数量加加和减减
	$scope.num = 1;
	$scope.add = function () {
		$scope.num ++;
	}
	$scope.reduce = function () {
		if($scope.num != 1){
			$scope.num --;
		}
	}
	//点击购物车	

//点击收藏变红
$("#red").on("click",function(){
	num++
	if (num%2 == 1) {
		$(".sc a span").css({
			backgroundPositionX:"0px",
			backgroundPositionY:"-2px"
		})
		
		$("#num").html(356);
	}else {
		$(".sc a span").css({
			backgroundPositionX:"-23px",
			backgroundPositionY:"-2px"
		})
		$("#num").html(355);
	}
	
})
$(window).scroll(function(){
	//滚动到一定距离的时候把商品信息 用户评论 固定在网页头部
	//距离
	distance = $("body").scrollTop();
	if(distance >= shoppTop) {
		$(".tag").addClass("Stick");
		$(".tag_1").addClass("Stick1");
		$(".tag_right").css({
			display:"block"
		})
		$("#li2").css('borderBottomColor',"#fff");
		$("#li3").css('borderBottomColor',"#fff");
	}else{
		$(".tag").removeClass("Stick");
		$(".tag_1").removeClass("Stick1");
		$(".tag_right").css({
			display:"none"
		});
		$("#li2").css('borderBottomColor',"#999");
		$("#li3").css('borderBottomColor',"#999");
	}
	// 滚动商品信息的时候给边框到商品信息，滚动到用户评论的时候边框给到用户评论
	if (distance >= commentTop){
		$("#li1").addClass("li_1")
		$("#li1 .ico span").css("display","none")
		$("#li2 .ico").css("display","block")
		$(".li_2").css({
			borderColor: "#999",
			borderBottomColor: "#fff"
		})
		$("#li1").css({
			borderColor: "#fff",
		})
	}else{
		$("#li1").removeClass("li_1")
		$("#li1 .ico span").css("display","block")
		$("#li2 .ico").css("display","none")
		$(".li_2").css({
			borderColor: "#fff",
			borderBottomColor: "#999"
		})
		$("#li1").css({
			borderColor: "#999",
		})
		removeserve()
	}
})
//商品信息的框，评论的框，售后服务的框互相切换
$("#li1").click(function(){
	$('html,body').animate({scrollTop:shoppTop},1);
	addshopp();
	removecomment();
	removeserve();
})
$("#li2").click(function(){
	$('html,body').animate({scrollTop:commentTop},1);
	removeshopp();
	removeserve();
	addcomment();	
	$("#li1").css({
		borderColor: "#fff",
	})
})
$("#li3").click(function(){
	$('html,body').animate({scrollTop:servebottom},1);	
	removeshopp();
	removecomment();
	addserve();
	$("#li2").css({
		borderColor: "#fff",
	})
	$("#li2 .ico span").css("display","none");
})
//清除商品信息的框
function removeshopp(){
	$("#li1").addClass("li_1").css({borderBottomColor:"#999"});
	$("#li1 .ico span").css("display","none");
}
//显示商品信息的框
function addshopp(){
	$("#li1").removeClass("li_1").css({borderBottomColor:"#fff"});
	$("#li1 .ico span").css("display","block");
}
//清除评论的框
function removecomment(){
	$("#li2 .ico").css("display","none")
	$(".li_2").css({
		borderColor: "#fff",
		borderBottomColor: "#999"
	})
}
// 显示评论的框
function addcomment(){
	$("#li2 .ico").css("display","block")
	$(".li_2").css({
		borderColor: "#999",
		borderBottomColor: "#fff"
	})
}
//清除售后服务的框
function removeserve(){
	$("#li3 .ico").css("display","none")
	$(".li_3").css({
		borderColor: "#fff",
		borderBottomColor: "#999"
	})
}
//显示售后服务的框
function addserve(){
	$("#li3 .ico").css("display","block")
	$(".li_3").css({
		borderColor: "#999",
		borderBottomColor: "#fff"
	})
}
//大家都在买的轮播图
var length = $(".title").siblings("ul").find("li")
var num = 0;
length.css("display","block");
function test(){
    length.siblings().hide();
    length.eq(num).show();
    length.eq(num).next().show();
  }
$(".scroll-up").click(function(){
//	console.log("我是up")
 	num += 2;
    if(num > 4){
      num = 0;
    }
    test(num);
})
$(".scroll-down").click(function(){
//	console.log("我是down")
	 num -= 2;
    if(num < 0){
      num = 4;
    }
    test(num);
})
//动画效果
$('#Bt1').on('click', addCart);
$('#Bt2').on('click', addCart);
var addCartNum = 0;
function addCart(event) {
	var offset = $('.aside_shopp').offset(), flyer = $('<img class="u-flyer" src='+$scope.img+' />');
	console.log(offset)
	flyer.fly({
	    start: {
	        left: event.pageX,
	        top: (event.pageY)-distance
	    },
	    end: {
	        left: offset.left,
	        top: (offset.top)-distance,
	        width: 0,
	        height: 0
	    }
	});
	addCartNum ++ ;
	$(".aside_number").html(addCartNum);
	$(".trolley span").html(addCartNum);
}

})



