<?php
class IndexAction extends Action {
    public function index(){
		$this->display('index');
	}
	public function initial(){
		$Index = D("Index");
    	$initData = $Index->initial();
		$this->ajaxReturn($initData);
	}
	public function book(){
		$this->display('book');
	}
	public function exchange(){

	}
	public function joinTrolley(){

	}
}