if(app == ''){
    app=angular.module("myapp",[]); 
};

var distance = 0;
app.controller("mycontroller",function ($scope) {
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
	
})

$(window).scroll(function(){
	//滚动到一定距离的时候把商品信息 用户评论 固定在网页头部
	//距离
	distance = $(window).scrollTop();
//	console.log(distance);
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
	}else{
		$("#li1").removeClass("li_1")
		$("#li1 .ico span").css("display","block")
		$("#li2 .ico").css("display","none")
		$(".li_2").css({
			borderColor: "#fff",
			borderBottomColor: "#999"
		})
	}
	
	
})
//商品信息的框，评论的框，售后服务的框互相切换
var shoppTop = $("#tags").offset().top;
var commentTop = $(".content_info_3").offset().top;
var servebottom = $(".bottomMessage").offset().top;
$("#li1").click(function(){
	addshopp();
	removecomment();
	removeserve();
	$('html,body').animate({scrollTop:shoppTop},'slow');
})
$("#li2").click(function(){
	removeshopp();
	removeserve();
	addcomment();
	$('html,body').animate({scrollTop:commentTop},'slow');
})
$("#li3").click(function(){
	removeshopp();
	removecomment();
	addserve();
	$('html,body').animate({scrollTop:servebottom+1000},'slow');
	
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
	console.log("我是up")
 	num += 2;
    if(num > 4){
      num = 0;
    }
    test(num);
})
$(".scroll-down").click(function(){
	console.log("我是down")
	 num -= 2;
    if(num < 0){
      num = 4;
    }
    test(num);
	
})
//动画效果

$('#Bt1').on('click', addCart);
$('#Bt2').on('click', addCart);
function addCart(event) {
var offset = $('.aside_shopp').offset(), flyer = $('<img class="u-flyer" src='+srcs+' />');
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
}



