

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
      pages();
    })
    //点击极致美护框下拉列表呈现 
    $scope.proMenu=function(){
      $(".proMenuList").css(
      "display",'block',
      )
    }
    $scope.arr=["3C家电","尖货女装","时尚配饰","创意生活","全球零食","极致美护"];
    $scope.brr=["machine","clothing","jewel","life","snacks","recommend"];
    $scope.listItem=function(k,v,ev){
      var _this=ev.target;
      $scope.keywords=v;
      console.log(v);
      $(".initVal").html($(_this).html());
      $(".proMenuList").css(
      "display",'none',
      )
      $scope.myVar=$scope.brr[k];
      $http({
        url:"ProductList/check",
        method:"POST",
        data:{
          keywords:$scope.keywords
        },
        headers:{"Content-type":"application/x-www-form-urlencoded"}
      }).success(function(data){
        $scope.list=data;
        pages();
      }).error(function(err){
        alert(err);
      })
    }
    // 多选项确定
    $scope.ensure=function(ev){
      var _this=ev.target;
      $(_this).parents(".showProMul").toggle();
      $(_this).parents("dl").find("a").toggle();
    }
    // 多选项取消
    $scope.cancel=function(ev){
      var _this=ev.target;
      $(_this).parents(".showProMul").find("input").prop("checked",false);
      $(_this).parents(".showProMul").toggle();
      $(_this).parents("dl").find("a").toggle();
    }
    // 分页
    function pages(){
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
        if(page<1|| page>$scope.pages) return;
        // 最多分页数4；
        if(page>1){
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
    }
    // 多选按钮
    $scope.selectMore=function(ev){
      // 点击多选按钮，当前列消失，多选项display：block,
      var _this=ev.target;
      $(_this).siblings("a").toggle();
      $(_this).next("button").toggle();
      $(_this).prev("dd").toggle();
      // 确定，取消键display:block(点击更多按钮时这两个节点的display:none)
      $(_this).prev("dd").children(".proMul").css('display','block');
    };
    // 点击更多按钮
    $scope.listMore=function(ev){
      var _this=ev.target;
      $(_this).siblings("dd").toggle();
      $(_this).siblings("dd").children("label").children("input").remove();
      $(_this).siblings("dd").children(".proMul").css(
        'display','none',
        );
    };

 });

