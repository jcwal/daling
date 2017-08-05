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
	$('.navigator .header .category').css('background','url(../../Index/Common/images/header/up.svg) no-repeat 150px 6px/20px 20px #654579');
	$('.navigator .header .category').on('mouseenter',function(){
		$('.navigator .header .category').css('background','url(../../Index/Common/images/header/down.svg) no-repeat 150px 6px/20px 20px #654579');
		$('.navigator .header .category .categoryDetail').show();
	});
	$('.navigator .header .category').on('mouseleave',function(){
		$('.navigator .header .category').css('background','url(../../Index/Common/images/header/up.svg) no-repeat 150px 6px/20px 20px #654579');
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
	if($('.navigator .header .loginRegisterWrap .registerForm').css('display') == 'block'){
		$('.verifyImg').prop('src','index.php/Header/verify');
	};
	$('.navigator .header .loginRegisterWrap .loginForm').show();
	$('.navigator .header .loginRegisterWrap .registerForm').hide();
	$('.navigator .header .loginRegisterWrap .panelTab .tabRegister').removeClass('active');
	$('.navigator .header .loginRegisterWrap .panelTab .tabLogin').addClass('active');
});
$('.navigator .header .loginRegisterWrap .panelTab .tabRegister').on('click',function(){
	if($('.navigator .header .loginRegisterWrap .loginForm').css('display') == 'block'){
		$('.verifyImg').prop('src','index.php/Header/verify');
	};
	$('.navigator .header .loginRegisterWrap .loginForm').hide();
	$('.navigator .header .loginRegisterWrap .registerForm').show();
	$('.navigator .header .loginRegisterWrap .panelTab .tabRegister').addClass('active');
	$('.navigator .header .loginRegisterWrap .panelTab .tabLogin').removeClass('active');

	
});
$('.navigator .header .loginRegisterWrap .registerAgreement a').on('click',function(){
	$('.navigator .header .loginRegisterWrap .agreementDetail').show();
});
$('.navigator .header .loginRegisterWrap .agreementDetail .closeAgreement').on('click',function(){
	$('.navigator .header .loginRegisterWrap .agreementDetail').hide();
});
app.controller('headerController',function($scope,$http){
	$scope.usernameLogin = '';
	$scope.passwordLogin = '';
	$scope.verifyLogin = '';
	$scope.usernameRegister = '';
	$scope.passwordRegister = '';
	$scope.passwordRegisterReapeat = '';
	$scope.verifyRegister = '';
	$scope.registerAgreement = false;
	$scope.loginSub = function(){
		$http({
			method:'post',
			url:'index.php/Header/login',
			data:{
				username:$scope.usernameLogin,
				password:$scope.passwordLogin,
				verify:$scope.verifyLogin,
			}
		}).success(function(data){
			console.log(data);
		}).error(function(err){
			console.log(err);
		});
	};
	$scope.registerSub = function(){
		console.log(11);
	};
	$scope.classLogin = function(){
		if($scope.usernameLogin != '' && $scope.passwordLogin != '' && $scope.verifyLogin != '' && $scope.usernameLogin.length == 11){
			return 'loginPass';
		}else{
			return '';
		};
	};
	$scope.classRegister = function(){
		if($scope.usernameRegister != '' && $scope.passwordRegister != '' && $scope.passwordRegisterReapeat != '' && $scope.verifyRegister != '' && $scope.usernameRegister.length == 11 && $scope.registerAgreement == true && $scope.passwordRegister === $scope.passwordRegisterReapeat){
			return 'loginPass';
		}else{
			return '';
		};
	};
	$scope.judgeLogin = function(){
		return !($scope.usernameLogin != '' && $scope.passwordLogin != '' && $scope.verifyLogin != '' && $scope.usernameLogin.length == 11);
	};
	$scope.judgeRegister = function(){
		return !($scope.usernameRegister != '' && $scope.passwordRegister != '' && $scope.passwordRegisterReapeat != '' && $scope.verifyRegister != '' && $scope.usernameRegister.length == 11 && $scope.registerAgreement == true && $scope.passwordRegister === $scope.passwordRegisterReapeat);
	};
	$scope.changeVerify = function(){
		$('.verifyImg').prop('src','index.php/Header/verify');
	};
	$scope.telHintL = function(){
		return ($scope.usernameLogin.length == 11);
	};
	$scope.telHintR = function(){
		return ($scope.usernameRegister.length == 11);
	};
	$scope.pwdHintL = function(){
		return ($scope.passwordLogin != '');
	};
	$scope.pwdHintR = function(){
		return ($scope.passwordRegister != '');
	};
	$scope.verifyHintL = function(){
		return ($scope.verifyLogin != '');
	};
	$scope.verifyHintR = function(){
		return ($scope.verifyRegister != '');
	};
	$scope.pwdRHintR = function(){
		return ($scope.passwordRegister === $scope.passwordRegisterReapeat && $scope.passwordRegisterReapeat != '')
	};
	$scope.agreement = function(){
		$scope.registerAgreement = true;
		$('.navigator .header .loginRegisterWrap .agreementDetail').hide();
	};
});
















