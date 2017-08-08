<?php
class ManageAction extends Action {
    public function index(){
    	$username = session('manager');
    	if(!empty($username)){
    		$this->display('manage');
    	}else{
    		header("Location:../");	
    	};	
    }
    public function logout(){
        session('manager',null);
        $username = session('manager');
        if(!empty($username)){
            $logoutInfo['info'] = '系统错误，请重试';
            $logoutInfo['status'] = 0;
        }else{
            $logoutInfo['info'] = '已安全退出';
            $logoutInfo['status'] = 1;
        };
        $this->ajaxReturn($logoutInfo);   
    }
}