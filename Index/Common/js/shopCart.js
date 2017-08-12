if(app == ''){
	app=angular.module("myapp",[]);	
};
var uid = findCookie('uid');
if(uid){
	$('.collect').hide();
};
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

app.controller('myctrl',function($scope,$http){
	var pid = findCookie('temp_pid');
	var uid = findCookie('uid');
	$http({
		method:'GET',
		url:`ShopCart/init?uid=${uid}&pid=${pid}`,
		header:{}
	}).success(function(data){
		if(data['status'] == 1){
			$scope.initData = data;
			$scope.count = 1;
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
	
	var isRecordR = false;
	var isRecordA = false;
	$scope.reduce = function(e){
		var count = $(e.target).siblings('.count').text();	
		if(count>0){
			count--;
			$(e.target).siblings('.count').text(count);
			// $(e.target).parent().next().find('.TotPrice').text(count*originTotal);
		}else{
			$(e.target).siblings('.count').text(0);
			// $(e.target).parent().next().find('.TotPrice').text(0);
		};
		
	};
	$scope.add = function(e){
		var count = $(e.target).siblings('.count').text();
		count++;
		$(e.target).siblings('.count').text(count);	
		// $(e.target).parent().next().find('.TotPrice').text(count*originTotal);
	};
	$scope.delete = function(pid){
		
	};
	$scope.loginBtn = function(){
		$('.navigator .header .loginRegisterWrap').show();
		$('.navigator .header .loginRegisterWrap .loginForm').show();
	};
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
 