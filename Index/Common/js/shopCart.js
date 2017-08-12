if(app == ''){
	app=angular.module("myapp",[]);	
};
var uid = findCookie('uid');
if(uid){
	$('.collect').hide();
};
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
	// 购物车页面数量加减
	var isRecordR = false;
	var isRecordA = false;
	$scope.reduce = function(pid,e){
		var pid = pid;
		var uid = findCookie('uid');
		var count = $(e.target).siblings('.count').text();	
		if(count>1){
			count--;
			$(e.target).siblings('.count').text(count);
			// $(e.target).parent().next().find('.TotPrice').text(count*originTotal);
		}else{
			$(e.target).siblings('.count').text(1);
			// $(e.target).parent().next().find('.TotPrice').text(0);
		};
		$http({
			method:'GET',
			url:`ShopCart/reduce?uid=${uid}&pid=${pid}`,
			header:{},
		}).success(function(data){
			if(data['status'] == 1){
				swal(data['info'], "", "success");
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
		})
	};
	$scope.add = function(pid,e){
		var pid = pid;
		var uid = findCookie('uid');
		var count = $(e.target).siblings('.count').text();
		count++;
		$(e.target).siblings('.count').text(count);	
		// $(e.target).parent().next().find('.TotPrice').text(count*originTotal);
		$http({
			method:"GET",
			url:`ShopCart/add?uid=${uid}&pid=${pid}`,
			header:{}
		}),success(function(data){
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
		})
	};
	// 单选按钮
	$scope.radioSel=function(pid,event){
		$(".exchange").toggle();
		totalCheck();
		totalPrice();
	}
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
	// 删除单个商品
	$scope.delete = function(pid,ev){
		// console.log(ev.target);
		var pid = pid;
		var uid = findCookie('uid');
		var evObj=ev.target;
		$(evObj).parents(".fullCart").remove();
		totalCheck();
		totalPrice();
		var singleDel=$(".checkt");
		if(singleDel.length==0){
			$(".emptyCart").toggle();
			$(".selectAll").prop("checked",false);
			$("#selectAll").prop("checked",false);
		}
		// //用户登录
		$http({
			method:'GET',
			url:`ShopCart/delete?pid=${pid}&uid=${uid}`,
			header:{}
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
		})
	};

	// 删除选中商品
	$scope.delChecked=function(){
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
		// $http({
		// 	method:'GET',
		// 	url:`ShopCart/delete?pid=${pid}&uid=${uid}`,
		// 	header:{}
		// }).success(function(data){
		// 	alert(删除成功);
		// }).error(function(err){
		// 	alert(err);
		// })

	}
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
 