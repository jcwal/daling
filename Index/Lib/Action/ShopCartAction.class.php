<?php
// 本类由系统自动生成，仅供测试用途
class ShopCartAction extends Action {
    public function index(){
		$this->display('shopCart');
	}
	public function init(){
		$pid = $_GET['pid'];
		$uid = $_GET['uid'];
		$pidStr = $this->deal($pid);
		$product = M('product');
		if ($uid != '') {
			$user = M('user');
			$one = $user->where("id=$uid")->find();
			$uidStr = $this->deal($one['trolleyPid']);
			$where = array();
			$where['id'] = array('in',$uidStr);
			$initData['data'] = $product->where($where)->select();
			$initData['repeatArr'] = $uidStr;
			if($initData['data']){
				$initData['status'] = 1;
			}else{
				$initData['status'] = 1;
				$initData['info'] = '服务器故障，请重试';
			};
		}else{
			$where = array();
			$where['id'] = array('in',$pidStr);
			$initData['data'] = $product->where($where)->select();
			if($initData['data']){
				$initData['status'] = 1;
			}else{
				$initData['status'] = 1;
				$initData['info'] = '服务器故障，请重试';
			};
		};
		
		$this->ajaxReturn($initData);
	}
	public function deal($str){
		$str = $str;
		$arr = explode(',',$str);
		array_shift($arr);
		$res = implode(',',$arr);
		return $res;
	}
	













}