

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
		})
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
 var app=angular.module("myapp",[]);
 app.controller("myctrl",function($scope){
  	
 })
  		

