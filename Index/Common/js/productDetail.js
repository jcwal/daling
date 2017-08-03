var app = angular.module("myapp",[]);
app.controller("mycontroller",function ($scope) {
	$scope.num = "1";
	$scope.add = function () {
		$scope.num ++;
	}
	$scope.reduce = function () {
		if($scope.num != 0){
			$scope.num --;
		}
	}
})