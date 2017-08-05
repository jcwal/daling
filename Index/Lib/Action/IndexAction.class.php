<?php
class IndexAction extends Action {
    public function index(){
		$this->display('index');
	}
	public function initial(){
		$Index = D("Index");
    	$arr = $Index->initial();
		$this->ajaxReturn($arr);
	}
}