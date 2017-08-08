var app = angular.module('myapp',[]);
app.controller('addController',function($scope,$http){

	$scope.addData=function(){
		productName = $scope.productName;
		discountPrice = $scope.discountPrice;
		originPrice = $scope.originPrice;
		discountRate = $scope.discountRate;
		 saleInfo = $scope.saleInfo;
		collectNumber = $scope.collectNumber;
		commentUrl = $scope.commentUrl;
		productShowPicUrl = $scope.productShowPicUrl;
		productInfoPicUrl = $scope.productInfoPicUrl;
		keywords = $scope.keywords;

	} 
	
});