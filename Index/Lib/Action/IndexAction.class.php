<?php
// 本类由系统自动生成，仅供测试用途
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