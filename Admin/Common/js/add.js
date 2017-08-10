var app = angular.module('myapp',[]);
app.controller('addController',function($scope,$http){
	
	$scope.addData=function(){
		var productName = $('#productName').val();
		var discountPrice = $('#discountPrice').val();
		var originPrice = $('#originPrice').val();
		var discountRate = $('#discountRate').val();
		var saleInfo = $('#saleInfo').val();
		var collectNumber = $('#collectNumber').val();
		var productParamter = $('#productParamter').val();
		var keywords = $('#keywords').val();

		// 获取文件对象
		var commentUrl = document.getElementById("commentUrl")["files"][0];
		var productShowPicUrl = document.getElementById("productShowPicUrl")["files"][0];
		var productInfoPicUrl = document.getElementById("productInfoPicUrl")["files"];
		var form = new FormData();
		for(i=0;i<productInfoPicUrl.length;i++){
			form.append("productInfoPicUrl[" + i + "]",productInfoPicUrl[i]);
		}
		form.append("productName",productName);
		form.append("discountPrice",discountPrice);
		form.append("originPrice",originPrice);
		form.append("discountRate",discountRate);
		form.append("saleInfo",saleInfo);
		form.append("collectNumber",collectNumber);
		form.append("productParamter",productParamter);
		form.append("keywords",keywords);
		form.append("commentUrl",commentUrl);
		form.append("productShowPicUrl",productShowPicUrl);
		form.append("productInfoPicUrl",productInfoPicUrl);
		$.ajax({
			type:"post",
			url:"Add/addData",
			data:form,
			processData:false,
			contentType:false,
			async:true,
			success:function(data){
				console.log(data);
			}
		})
		
	} 
	
});

				

		
