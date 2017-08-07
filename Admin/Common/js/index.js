var app = angular.module('myapp',[]);
app.controller('indexController',function($scope,$http){
	$scope.username = '';
	$scope.password = '';
	$scope.loginSub = function(){
		$http({
			url:"admin.php/Index/login",
			method:'post',
			headers:{
                "Content-type":"application/x-www-form-urlencoded"
            },
            data:{
                username:$scope.username,
                password:$scope.password
            }
		}).success(function(data){
			if(data.status == 1){
				window.location.href = "admin.php/Manage/index";
			}else{
				swal({
					title: data['info'],
					text: '',
					type: "error",
					confirmButtonText: "确认"
				});
			}
		});
	};
});