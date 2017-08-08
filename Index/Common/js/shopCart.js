if(app == ''){
	app=angular.module("myapp",[]);	
};
app.controller("myctrl",function(){

})
// 单选按钮
	$('.select').click(function(){
		$(this).parents('.listTitle').next('.listBody').find('.checkt').prop('checked',true);
		totalCheck();
		totalPrice();
	})
	$('.checkt').click(function(){
		$(".exchange").toggle();
		$(this).parents(".listBody").prev(".listTitle").find(".select").prop('checked',true);
		totalCheck();
		totalPrice();
	})
	// 全选按钮
	$(".selectAll").click(function(){
		$('.choice').prop('checked',function(index,value){
			return $('.selectAll').prop('checked');
		});
		$(".exchange").toggle();
		totalPrice();
	});
	$("#selectAll").click(function(){
		$('.choice').prop('checked',function(index,value){
			return $('#selectAll').prop('checked');
		});
		$(".exchange").toggle();
		totalPrice();
	});

	// 检测是否全选
	function totalCheck(){
		var everyCheck=$(".checkt").filter(function(index){
			return $(this).prop('checked')==true;
		});
		var proSelect=$(".checkt").length;
		if(everyCheck.length==proSelect){
			$(".exchange").toggle();
			$(".selectAll").prop('checked',true);
			$("#selectAll").prop('checked',true);
		}else{
			$(".selectAll").prop('checked',false);
			$("#selectAll").prop('checked',false);
		}
	}
	
	//数量加减
$('.btn').click(function(){
	var num=$(this).parent().find(".count").html();
	var mon=$(this).parent('li').prev("li").find("p span").html();
	if($(this).html()=='+'){
		num++;
	}else{
		num--;
	}
	if(num < 1){
		num=1;
	}
	$(this).parent("li").next().find("span").html(num*mon);
	$(this).parent().find(".count").html(num);
	totalPrice();

})
// 总金额
	function totalPrice(){
		var money=0;
		$(".totalPrice").html('0.00');
		var singleCheck=$('.checkt').filter(function(index){
			return $(this).prop('checked')==true;
		});
		var tCount=singleCheck.length;
		singleCheck.each(function(index,value){
			var xiaoJi=$(this).parents("ul").find('.TotPrice').html();
			money=parseInt($('.totalPrice').html())+parseInt(xiaoJi);
			$(".totalPrice").html(money);
			console.log(xiaoJi);
		});
		$(".totalNum").html(tCount);

	}

	// 删除选中
	$('.delectPro').click(function(){
		var everyCheck=$(".checkt").filter(function(index){
			return $(this).prop('checked')==true;
		});
		everyCheck.each(function(index,value){
			$(this).parents(".fullCart").remove();
		})	
		totalCheck();
		totalPrice();
		if($(".checkt").length==0){
			$(".emptyCart").toggle();
			$(".selectAll").prop("checked",false);
			$("#selectAll").prop("checked",false);
		};
	});

	// 删除单个商品
	$(".singleDel").click(function(){
		$(this).parents(".fullCart").remove();
		totalCheck();
		totalPrice();
		var singleDel=$(".checkt");
		if(singleDel.length==0){
			$(".emptyCart").toggle();
			$(".selectAll").prop("checked",false);
			$("#selectAll").prop("checked",false);
		}
		
	})

 