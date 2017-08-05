<?php
class HeaderAction extends Action {
    public function login(){
		
	}
	public function register(){
		
	}
	public function verify(){
		import('ORG.Util.Image');
    	Image::buildImageVerify();
	}
}