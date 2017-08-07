<?php
class IndexAction extends Action {
    public function index(){
		$this->display('index');
    }
    public function login(){
    	$data = json_decode(file_get_contents('php://input'),true);
    	$Index = D("Index");
    	$loginInfo = $Index->login($data);
    	if($loginInfo['status'] == 1){
			cookie('username',$data['username'],0);
			session('username',$data['username']);
		};
		$this->ajaxReturn($loginInfo);
	}
}