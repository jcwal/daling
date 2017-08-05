<?php
class HeaderAction extends Action {
    public function login(){
    	$Header = D("Header");
    	$arr = $Header->login();
		$this->ajaxReturn($arr);
	}
	public function register(){
		
	}
	public function verify(){
		import('ORG.Util.Image');
    	Image::buildImageVerify(4,5);
	}
}