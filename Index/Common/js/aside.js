//购物车
$(".aside_shopp").on("click",function(){
	$(".aside").css("width","320px");
	$(".aside_remove").fadeIn(1);
//	$(".aside_content").fadeIn(500);
	$(".aside_car_content").fadeIn(500);
	$(".aside_money_content").fadeOut(500);
	$(".aside_collect_content").fadeOut(500);
	console.log($(".aside").css('width'))
	$(".aside_content").toggle();
	var content = $(".aside_content").css("display");
	if(content == "none") {
		remove()
	}

})
//钱
function money(){
	$(".aside").css("width","320px");
	$(".aside_remove").fadeIn(1);
	$(".aside_collect_content").fadeOut(500);
	$(".aside_car_content").fadeOut(500);
}
$(".aside_money").click(function(){
	$(".aside_money_content").toggle();
	var money = $(".aside_money_content").css("display");
	if(money == "none") {
		remove()
	}
})
//收藏
function collect(){
	$(".aside").css("width","320px");
	$(".aside_remove").fadeIn(1);
//	$(".aside_collect_content").fadeIn(500);
	$(".aside_car_content").fadeOut(500);
	$(".aside_money_content").fadeOut(500);
}
$(".aside_collect").click(function(){
	$(".aside_collect_content").toggle();
	var collect = $(".aside_collect_content").css("display");
	if(collect == "none") {
		remove()
	}
})
//叉
function remove(){
	$(".aside").css("width","40px");
	$(".aside_remove").hide();
	$(".aside_content").fadeOut(500);
	$(".aside_car_content").fadeOut(500);
	$(".aside_money_content").fadeOut(500);
	$(".aside_collect_content").fadeOut(500);
}
$(".navigator").on("click",function(){
	$(".aside_remove").fadeOut(1)
	remove()
})
$(".productDetail").on("click",function(){
	$(".aside_remove").fadeOut(1)
	remove()
})
$(".footer").on("click",function(){
	$(".aside_remove").fadeOut(1)
	remove()
})