//查找指定cookie的方法
function findCookie(cookieName){
	var regExp = new RegExp('\\b'+cookieName+'\\b','g');
	var cookieIndex = document.cookie.search(regExp);
	if(cookieIndex != -1){
		var cookieStart = cookieIndex + cookieName.length + 1;
		var cookieEnd = document.cookie.indexOf(';',cookieIndex+cookieName.length+1);
		if(cookieEnd == -1){
			cookieEnd = document.cookie.length;
		};
		var cookieUsername = unescape(document.cookie.substring(cookieStart,cookieEnd));
		return cookieUsername;
	}else{
		return null
	};
};
console.log(findCookie('username')== null);
if(findCookie('username') == null){
	//没有cookie用户退出登陆或没有登陆
	$('.navigator .header .top .loginBar').show();
	$('.navigator .header .top .loginedBar').hide();
}else{
	//有cookie，用户已经登陆
	$('.navigator .header .top .loginBar').hide();
	$('.navigator .header .top .loginedBar').show();
	$('.navigator .header .top .topWrap .loginedBar .welcome span').text(findCookie('username').replace(/(.*)..../,'$1****'));

}
//兼容购物车样式
if($('#shopCart').length > 0 || $('#checkout').length > 0){
	$('.navigator .header .center').hide();
	$('.navigator .header .bottom').hide();
};

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
	$('.verifyImg').prop('src','index.php/Header/verify');
	$('.navigator .header .loginRegisterWrap').show();
	$('.navigator .header .loginRegisterWrap .loginForm').show();
	$('.navigator .header .loginRegisterWrap .registerForm').hide();
	$('.navigator .header .loginRegisterWrap .panelTab .tabLogin').addClass('active');
	$('.navigator .header .loginRegisterWrap .panelTab .tabRegister').removeClass('active');
});
$('.navigator .header .top .loginBar .register a').on('click',function(){
	$('.verifyImg').prop('src','index.php/Header/verify');
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
//退出登陆
$('.navigator .header .top .topWrap .loginedBar .welcome a').on('click',function(){
	$.ajax({
		type:'get',
		url:'index.php/Header/logout',
		success:function(data){
			if(data['status'] == 1){
				$('.navigator .header .top .topWrap .loginBar').show();
				$('.navigator .header .top .topWrap .loginedBar').hide();
				$('#usernameLogin').val('');
				$('#passwordLogin').val('');
				$('#verifyLogin').val('');
				$('#usernameRegister').val('');
				$('#passwordRegister').val('');
				$('#passwordRegisterReapeat').val('');
				$('#verifyRegister').val('');
			}else{
				swal({
					title: data['info'],
					text: '',
					type: "error",
					confirmButtonText: "确认"
				});
			}
		},
		error:function(err){
			swal({
				title: err,
				text: '',
				type: "error",
				confirmButtonText: "确认"
			});
		},
	});
});
app.controller('headerController',function($scope,$http){
	$scope.usernameLogin = '';
	$scope.passwordLogin = '';
	$scope.verifyLogin = '';
	$scope.withoutLogin = false;
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
				withoutLogin:$scope.withoutLogin,
			}
		}).success(function(data){
			if(data['status'] == 1){
				$('.navigator .header .loginRegisterWrap').hide();
				$('.navigator .header .top .topWrap .loginBar').hide();
				$('.navigator .header .top .topWrap .loginedBar').show();
				$('.navigator .header .top .topWrap .loginedBar .welcome span').text($scope.usernameLogin.replace(/(.*)..../,'$1****'));
			}else{
				swal({
					title: data['info'],
					text: '',
					type: "error",
					confirmButtonText: "确认"
				});
				$('.verifyImg').prop('src','index.php/Header/verify');
			};
		}).error(function(err){
			swal({
				title: err,
				text: '',
				type: "error",
				confirmButtonText: "确认"
			});
		});
	};
	$scope.registerSub = function(){
		$http({
			method:'post',
			url:'index.php/Header/register',
			data:{
				username:$scope.usernameRegister,
				password:$scope.passwordRegister,
				verify:$scope.verifyRegister,
			}
		}).success(function(data){
			if(data['status'] == 1){
				swal(data['info'], "恭喜您成为达令会员", "success");
				$('.navigator .header .loginRegisterWrap').hide();
				$('.navigator .header .top .topWrap .loginBar').hide();
				$('.navigator .header .top .topWrap .loginedBar').show();
				$('.navigator .header .top .topWrap .loginedBar .welcome span').text($scope.usernameRegister.replace(/(.*)..../,'$1****'));
			}else{
				swal({
					title: data['info'],
					text: '',
					type: "error",
					confirmButtonText: "确认"
				});
				$('.verifyImg').prop('src','index.php/Header/verify');
			};
		}).error(function(err){
			swal({
				title: err,
				text: '',
				type: "error",
				confirmButtonText: "确认"
			});
		});
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
















