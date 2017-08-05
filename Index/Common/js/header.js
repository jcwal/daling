//categoryDrop
$('.navigator .header .category .categoryDetail dl').on('mouseenter',function(){
	$('.navigator .header .category .categoryDetail dl .categoryDrop').hide();
	$(this).find('.categoryDrop').show();
	$('.navigator .header .category .categoryDetail dl .categoryShelter').css('background','transparent');
	$(this).find('.categoryShelter').css('background','#fff');
});
$('.navigator .header .category .categoryDetail dl').on('mouseleave',function(){
	$(this).find('.categoryDrop').hide();
});
//category
if($('.indexWrap').length > 0){
	$('.navigator .header .category .categoryDetail').show();
	$('.navigator .header .category').off();

}else{

	$('.navigator .header .category .categoryDetail').hide();
	$('.navigator .header .category').css('background','url(Index/Common/images/header/up.svg) no-repeat 150px 6px/20px 20px #654579');
	$('.navigator .header .category').on('mouseenter',function(){
		$('.navigator .header .category').css('background','url(Index/Common/images/header/down.svg) no-repeat 150px 6px/20px 20px #654579');
		$('.navigator .header .category .categoryDetail').show();
	});
	$('.navigator .header .category').on('mouseleave',function(){
		$('.navigator .header .category').css('background','url(Index/Common/images/header/up.svg) no-repeat 150px 6px/20px 20px #654579');
		$('.navigator .header .category .categoryDetail').hide();
	});
};
//login&register
$('.navigator .header .top .loginBar .login a').on('click',function(){
	$('.navigator .header .loginRegisterWrap').show();
	$('.navigator .header .loginRegisterWrap .loginForm').show();
	$('.navigator .header .loginRegisterWrap .registerForm').hide();
	$('.navigator .header .loginRegisterWrap .panelTab .tabLogin').addClass('active');
	$('.navigator .header .loginRegisterWrap .panelTab .tabRegister').removeClass('active');
});
$('.navigator .header .top .loginBar .register a').on('click',function(){
	$('.navigator .header .loginRegisterWrap').show();
	$('.navigator .header .loginRegisterWrap .loginForm').hide();
	$('.navigator .header .loginRegisterWrap .registerForm').show();
	$('.navigator .header .loginRegisterWrap .panelTab .tabRegister').addClass('active');
	$('.navigator .header .loginRegisterWrap .panelTab .tabLogin').removeClass('active');
});
$('.navigator .header .loginRegisterWrap .loginRegisterInner .loginRegisterPanel .close').on('click',function(){
	$('.navigator .header .loginRegisterWrap').hide();
});
$('.navigator .header .loginRegisterWrap .panelTab .tabLogin').on('click',function(){
	$('.navigator .header .loginRegisterWrap .loginForm').show();
	$('.navigator .header .loginRegisterWrap .registerForm').hide();
	$('.navigator .header .loginRegisterWrap .panelTab .tabRegister').removeClass('active');
	$('.navigator .header .loginRegisterWrap .panelTab .tabLogin').addClass('active');
});
$('.navigator .header .loginRegisterWrap .panelTab .tabRegister').on('click',function(){
	$('.navigator .header .loginRegisterWrap .loginForm').hide();
	$('.navigator .header .loginRegisterWrap .registerForm').show();
	$('.navigator .header .loginRegisterWrap .panelTab .tabRegister').addClass('active');
	$('.navigator .header .loginRegisterWrap .panelTab .tabLogin').removeClass('active');
});
app.controller('headerController',function($scope,$http){
	$scope.loginSub = function(){

	};
	$scope.registerSub = function(){

	};
	$scope.judge = function(){
		
	};
});
















