

$(document).ready(function(){
	// 点击极致美护框下拉列表呈现
  $("#proMenu").click(function(){
		$(".proMenuList").css(
			"display",'block',
			)
		// 点击列表中内容，下拉列表消失，框中的字换成点击选中内容
		$(".single").click(function(){
			$(".initVal").html($(this).html());
			$(".proMenuList").css(
			"display",'none',
			)
  		})
	});
  $(".selectMore").click(function(){
  	// if()
  	// 	$(this).siblings("a").css(
  	// 		'display','none',
  	// 		),
  	// 	$(this).prev("dd").css(
  	// 		'display','block',
  	// 		),
  	// 	$(this).next("button").css(
  	// 		'display','none',
  	// 		)
  		$(this).siblings("a").toggle();
  		$(this).next("button").toggle();
  		$(this).prev("dd").toggle();
  })
});

