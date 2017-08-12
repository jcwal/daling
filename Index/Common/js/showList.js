
var paramter = window.location.search;
var keywords = decodeURI(paramter.substring(paramter.indexOf('=')+1, paramter.indexOf('&')));
if(app == ''){
    app=angular.module("myapp",[]); 
};
 app.controller("myctrl",function($scope,$http){
    // 商品列表
   $scope.keywords=keywords;
    
    $http({
      url:"ProductList/check",
      method:"POST",
      data:{
        keywords:$scope.keywords,
      },
      headers:{"Content-type":"application/x-www-form-urlencoded"}
    }).success(function(data){
      $scope.list=data;
      // 分页总数
      $scope.pageSize=4;
      $scope.pages=Math.ceil($scope.list.length/$scope.pageSize);  //根据返回的数据分得的总页数 
      $scope.newPages=$scope.pages>4?4:$scope.pages;
      $scope.pageList=[];
      // 分页起始页
      $scope.selPage=1;
      $scope.setData=function(){
        // 每页展示的条目
        $scope.items=$scope.list.slice(($scope.pageSize*($scope.selPage-1)),($scope.selPage*$scope.pageSize));
      }
      //根据关键字查库成功返回数据时每页展示的条目
      $scope.items=$scope.list.slice(0,$scope.pageSize);
      for(var i=0;i<$scope.newPages;i++){
        $scope.pageList.push(i+1);
      }
      $scope.selectPage=function(page){
        if(page<1 || page>$scope.pages) return;
        // 最多分页数4；
        if(page>2){
          var newpageList=[];
          for(var i=(page-2);i<((page+2)>$scope.pages?$scope.pages:(page+2));i++){
            newpageList.push(i+1);
        }
        $scope.pageList=newpageList;
        }
        $scope.selPage = page;
        $scope.setData();
        $scope.isActivePage(page);
        console.log("选择的页：" + page);
      };
       //设置当前选中页样式
        $scope.isActivePage = function (page) {
            return $scope.selPage == page;
        };
        //上一页
        $scope.First = function () {
            $scope.selectPage($scope.selPage - 1);
        }
        //下一页
        $scope.Next = function () {
            $scope.selectPage($scope.selPage + 1);
        };
    })

    $http({
      url:"check",
      method:"POST",
      data:{
        keywords:$scope.keywords,
      },
      headers:{"Content-type":"application/x-www-form-urlencoded"}
    }).success(function(data){
      $scope.list=data;
      // 分页总数
      $scope.pageSize=4;
      $scope.pages=Math.ceil($scope.list.length/$scope.pageSize);  //根据返回的数据分得的总页数 
      $scope.newPages=$scope.pages>4?4:$scope.pages;
      $scope.pageList=[];
      // 分页起始页
      $scope.selPage=1;
      $scope.setData=function(){
        // 每页展示的条目
        $scope.items=$scope.list.slice(($scope.pageSize*($scope.selPage-1)),($scope.selPage*$scope.pageSize));
      }
      //根据关键字查库成功返回数据时每页展示的条目
      $scope.items=$scope.list.slice(0,$scope.pageSize);
      for(var i=0;i<$scope.newPages;i++){
        $scope.pageList.push(i+1);
      }
      $scope.selectPage=function(page){
        if(page<1 || page>$scope.pages) return;
        // 最多分页数4；
        if(page>2){
          var newpageList=[];
          for(var i=(page-2);i<((page+2)>$scope.pages?$scope.pages:(page+2));i++){
            newpageList.push(i+1);
        }
        $scope.pageList=newpageList;
        }
        $scope.selPage = page;
        $scope.setData();
        $scope.isActivePage(page);
        console.log("选择的页：" + page);
      };
       //设置当前选中页样式
        $scope.isActivePage = function (page) {
            return $scope.selPage == page;
        };
        //上一页
        $scope.First = function () {
            $scope.selectPage($scope.selPage - 1);
        }
        //下一页
        $scope.Next = function () {
            $scope.selectPage($scope.selPage + 1);
        };
    })

    




 });

$(document).ready(function(){
	// 点击极致美护框下拉列表呈现
  $("#proMenu").click(function(){
		$(".proMenuList").css(
			"display",'block',
			)
	});
  // 点击列表中内容，下拉列表消失，框中的字换成点击选中内容
	$("li.single").click(function(){
		$(".initVal").html($(this).html());
		$(".proMenuList").css(
		"display",'none',
		)
		});

  // 点击多选按钮，当前列消失，多选项display：block,
  $(".selectMore").click(function(){
  		$(this).siblings("a").toggle();
  		$(this).next("button").toggle();
  		$(this).prev("dd").toggle();
  		// 确定，取消键display:block(点击更多按钮时这两个节点的display:none)
  		$(this).prev("dd").children(".proMul").css(
      'display','block',
      );
  })
 
  // 点击更多按钮，多选框display:block同时移除所有input
  $(".listMore").click(function(){
  	$(this).html("收起");
  	$(this).siblings("dd").toggle();
  	$(this).siblings("dd").children("label").children("input").remove();
  	$(this).siblings("dd").children(".proMul").css(
  		'display','none',
  		);
  })

  });

  		

