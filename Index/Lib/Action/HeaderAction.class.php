<?php
class HeaderAction extends Action {
    public function login(){
    	$data = json_decode(file_get_contents('php://input'),true);
		if(md5($data['verify']) == $_SESSION['verify']){
    		$Header = D("Header");
    		$loginInfo = $Header->login($data);
    		if($loginInfo['status'] == 1){
    			if($data['withoutLogin'] == true){
    				cookie('username',$data['username'],604800);
                    session('username',$data['username']);
                    cookie('uid',$loginInfo['uid'],604800);
                    session('uid',$loginInfo['uid']);
    			}else{
    				cookie('username',$data['username'],0);
                    session('username',$data['username']);
                    cookie('uid',$loginInfo['uid'],0);
                    session('uid',$loginInfo['uid']);
    			};
    			
    		};
    		$this->ajaxReturn($loginInfo);
    	}else{
    		$loginInfo['status'] = 0;
    		$loginInfo['info'] = '验证码错误，请重试';
			$this->ajaxReturn($loginInfo);
    	};

	}
	public function logout(){
		cookie('username',null);
        session('username',null);
        cookie('uid',null);
        session('uid',null);
		$valueCName = cookie('username');
        $valueSName = session('username');
        $valueCId = cookie('uid');
        $valueSId = session('uid');
		if(!empty($valueCName) || !empty($vavalueSNamelueS) || !empty($valueCId) || !empty($valueSId)){
			$logoutInfo['status'] = 0;
			$logoutInfo['info'] = '服务器错误，请重试';
			$this->ajaxReturn($logoutInfo);
		}else{
			$logoutInfo['status'] = 1;
			$logoutInfo['info'] = '退出成功';
			$this->ajaxReturn($logoutInfo);
		};
	}
	public function register(){
		$data = json_decode(file_get_contents('php://input'),true);
		if(md5($data['verify']) == $_SESSION['verify']){
    		$Header = D("Header");
    		$registerInfo = $Header->register($data);
    		if($registerInfo['status'] == 1){
    			cookie('username',$data['username'],0);
                session('username',$data['username']);
                cookie('uid',$registerInfo['uid'],0);
                session('uid',$registerInfo['uid']);
    		};
    	}else{
    		$registerInfo['status'] = 0;
    		$registerInfo['info'] = '验证码错误，请重试';
    	};
        $this->ajaxReturn($registerInfo);
	}
	public function verify(){
		import('ORG.Util.Image');
    	Image::buildImageVerify(4,1);
	}
}