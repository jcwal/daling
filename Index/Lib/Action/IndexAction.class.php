<?php
class IndexAction extends Action {
    public function index(){
		$this->display('index');
	}
	public function initial(){
		$Index = D("Index");
		$uid = $_GET['uid'];
    	$initData = $Index->initial($uid);
    	$initData['uid'] = session('uid');
		$this->ajaxReturn($initData);

	}
	public function book(){
		$this->display('book');
	}
	public function exchange(){
		$count = $_GET['count'];
		$Index = D("Index");
		$exchangeData = $Index->exchange($count);
		$this->ajaxReturn($exchangeData);
	}
	public function joinTrolley(){
		$idData['pid'] = $_GET['pid'];
		$idData['uid'] = $_GET['uid'];
		if($idData['uid'] != 'null'){
			$Index = D("Index");
			$trolleyData = $Index->joinTrolley($idData);
		}else{
			$cookies = cookie('temp_pid');
			$cookies = $cookies.','.$idData['pid'];
			cookie('temp_pid',$cookies);
			if(cookie('temp_pid')){
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