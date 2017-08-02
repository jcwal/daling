function shopp(){
	$(".aside").css("width","320px");
	$(".aside_content").fadeIn(500);
	$(".aside_car_content").fadeIn(500);
	$(".aside_money_content").fadeOut(500);
	$(".aside_collect_content").fadeOut(500);
	console.log($(".aside").css('width'))
}
//钱
function money(){
	$(".aside").css("width","320px");
	$(".aside_content").fadeIn(500);
	$(".aside_money_content").fadeIn(500);
	$(".aside_collect_content").fadeOut(500);
	$(".aside_car_content").fadeOut(500);
}
//收藏
function collect(){
	$(".aside").css("width","320px");
	$(".aside_content").fadeIn(500);
	$(".aside_collect_content").fadeIn(500);
	$(".aside_car_content").fadeOut(500);
	$(".aside_money_content").fadeOut(500);
	
}
//叉
function remove(){
	$(".aside").css("width","40px");
	$(".aside_content").fadeOut(500);
	$(".aside_car_content").fadeOut(500);
	$(".aside_money_content").fadeOut(500);
	$(".aside_collect_content").fadeOut(500);
}