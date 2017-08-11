<?php
class IndexAction extends Action {
    public function index(){
		$this->display('index');
	}
	public function initial(){
		$Index = D("Index");
    	$initData = $Index->initial();
    	$initData['uid'] = session('uid');
		$this->ajaxReturn($initData);
	}
	public function book(){
		$this->display('book');
	}
	public function exchange(){

	}
	public function joinTrolley(){
		$idData['pid'] = $_GET['pid'];
		$idData['uid'] = $_GET['uid'];
		if($idData['uid'] != 'null'){
			$Index = D("Index");
			$trolleyData = $Index->joinTrolley($idData);
		}else{
			cookie($idData['pid'],'1');
			if(cookie($idData['pid'])){
				$trolleyData['status'] = 1;
			}else{
				$trolleyData['status'] = 0;
				$trolleyData['info'] = '网路故障，请重试';
			};
		};
		$this->ajaxReturn($trolleyData);
	}
	public function collect(){
		$idData['pid'] = $_GET['pid'];
		$idData['uid'] = $_GET['uid'];
		if($idData['uid'] != 'null'){
			$Index = D("Index");
			$collectData = $Index->collect($idData);
		}else{
			$collectData['status'] = 2;
		};
		$this->ajaxReturn($collectData);
	}
}