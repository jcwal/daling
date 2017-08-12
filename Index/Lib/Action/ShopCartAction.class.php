<?php
// 本类由系统自动生成，仅供测试用途
class ShopCartAction extends Action {
    public function index(){
		$this->display('shopCart');
	}
	public function init(){
		$pid = $_GET['pid'];
		$uid = $_GET['uid'];
		$pidStr = $this->dealStr($pid);
		$product = M('product');
		if ($uid != 'null') {
			$user = M('user');
			$one = $user->where("id=$uid")->find();
			$trolleyPidStr = $this->dealStr($one['trolleyPid']);
			$where = array();
			$where['id'] = array('in',$trolleyPidStr);
			$initData['data'] = $product->where($where)->select();
			$repeatArr = $this->dealArr($one['trolleyPid']);
			$countArr = $this->dealRepeatCount($repeatArr);
			for ($i=0; $i < count($initData['data']); $i++) { 
				$initData['data'][$i]['count'] = 1;
				foreach ($initData['data'][$i] as $k => $v) {
					if($k == 'id'){
						foreach ($countArr as $k1 => $v1) {
							if($initData['data'][$i][$k] == $k1){
								$initData['data'][$i]['count'] = ++$v1;
							};
						}; 
					};
				};
			};
			if($initData['data'] || !$trolleyPidStr){
				$initData['status'] = 1;
			}else{
				$initData['status'] = 0;
				$initData['info'] = '服务器故障，请重试';
			};
		}else{
			if($pid != 'null'){
				$where = array();
				$where['id'] = array('in',$pidStr);
				$initData['data'] = $product->where($where)->select();
				if($initData['data']){
					$initData['status'] = 1;
				}else{
					$initData['status'] = 0;
					$initData['info'] = '服务器故障，请重试';
				};
			}else{
				$initData['status'] = 1;
			};
			
		};
		
		$this->ajaxReturn($initData);
	}
	public function delete(){
		$pid = $_GET['pid'];
		$uid = $_GET['uid'];
		$pidArr = explode(',',$pid);
		if($uid != 'null'){
			$user = M('user');
			$one = $user->where("id=$uid")->find();
			$trolleyPidArr = $this->dealArr($one['trolleyPid']);	 
			for ($i=0; $i < count($pidArr); $i++) { 
				for ($k=0; $k < count($trolleyPidArr); $k++) { 
					if($pidArr[$i] == $trolleyPidArr[$k]){
						unset($trolleyPidArr[$k]);
					};
				};
			};
			array_unshift($trolleyPidArr,'');
			$trolleyPidStr = implode(',',$trolleyPidArr);
			$update['trolleyPid'] = $trolleyPidStr;
			$res = $user->where("id=$uid")->save($update);
			if($res){
				$deleteData['status'] = 1;
				$deleteData['info'] = '商品删除成功';
			}else{
				$deleteData['status'] = 0;
				$deleteData['info'] = '网络故障，请重试';
			};
		}else{
			$cookiePid = cookie('temp_pid');
			$cookiePidArr = $this->dealArr($cookiePid);
			for ($i=0; $i < count($pidArr); $i++) { 
				for ($k=0; $k < count($cookiePidArr); $k++) { 
					if($pidArr[$i] == $cookiePidArr[$k]){
						unset($cookiePidArr[$k]);
					};
				};
			};
			array_unshift($cookiePidArr,'');
			$cookiePidStr = implode(',',$cookiePidArr);
			cookie('temp_pid',null);
			cookie('temp_pid',$cookiePidStr);
			$res = cookie('temp_pid');
			if($res || !$cookiePidStr){
				$deleteData['status'] = 1;
				$deleteData['info'] = '商品删除成功';
			}else{
				$deleteData['status'] = 0;
				$deleteData['info'] = '网络故障，请重试';
			};
		};
		$this->ajaxReturn($deleteData);
	}
	public function add (){
		$pid = $_GET['pid'];
		$uid = $_GET['uid'];
		if($uid != 'null'){
			$user = M('user');
			$one = $user->where("id=$uid")->find();
			$addStr = $one['trolleyPid'].','.$pid;
			$update['trolleyPid'] = $addStr;
			$res = $user->where("id=$uid")->save($update);
			if($res){
				$addData['status'] = 1;
			}else{
				$addData['status'] = 0;
				$addData['info'] = '网络故障，请重试';
			};
		}else{
			$cookiePid = cookie('temp_pid');
			$addStr = $cookiePid.','.$pid;
			cookie('temp_pid',null);
			cookie('temp_pid',$addStr);
			$res = cookie('temp_pid');
			if($res){
				$addData['status'] = 1;
			}else{
				$addData['status'] = 0;
				$addData['info'] = '网络故障，请重试';
			};
		};
		$this->ajaxReturn($addData);
	}
	public function reduce ($pid){
		$pid = $_GET['pid'];
		$uid = $_GET['uid'];
		if($uid != 'null'){
			$user = M('user');
			$one = $user->where("id=$uid")->find();
			$trolleyPidArr = $this->dealArr($one['trolleyPid']);	 		
			for ($k=0; $k < count($trolleyPidArr); $k++) { 
				if($trolleyPidArr[$k] == $pid){
					unset($trolleyPidArr[$k]);
					break;
				};
			};
			array_unshift($trolleyPidArr,'');
			$trolleyPidStr = implode(',',$trolleyPidArr);
			$update['trolleyPid'] = $trolleyPidStr;
			$res = $user->where("id=$uid")->save($update);
			if($res){
				$reduceData['status'] = 1;
			}else{
				$reduceData['status'] = 0;
				$reduceData['info'] = '网络故障，请重试';
			};
		}else{
			$cookiePid = cookie('temp_pid');
			$cookiePidArr = $this->dealArr($cookiePid);
			for ($k=0; $k < count($cookiePidArr); $k++) { 
				if($cookiePidArr[$k] == $pid){
					unset($cookiePidArr[$k]);
					break;
				};
			};
			array_unshift($cookiePidArr,'');
			$cookiePidStr = implode(',',$cookiePidArr);
			cookie('temp_pid',null);
			cookie('temp_pid',$cookiePidStr);
			$res = cookie('temp_pid');
			if($res){
				$reduceData['status'] = 1;
			}else{
				$reduceData['status'] = 0;
				$reduceData['info'] = '网络故障，请重试';
			};
		};
		$this->ajaxReturn($reduceData);
	}
	public function dealStr($str){
		$str = $str;
		$arr = explode(',',$str);
		array_shift($arr);
		$res = implode(',',$arr);
		return $res;
	}
	public function dealArr($str){
		$str = $str;
		$arr = explode(',',$str);
		array_shift($arr);
		return $arr;
	}
	public function dealNoRepeatArr($arr){
		$arr = $arr;
		$resArr = array();
		for ($i=0; $i < count($arr); $i++) { 
			$resArr[] = $arr[$i];
			for ($k=0; $k < count($resArr)-1; $k++) { 
				if($resArr[$k] == $arr[$i]){
					array_pop($resArr);
					break;
				};
			};
		};
		return $resArr;
	}
	public function dealRepeatCount($arr){
		$arr = $arr;
		$tempArr = array();
		$resArr = array();
		for ($i=0; $i < count($arr); $i++) { 
			$tempArr[] = $arr[$i];
			for ($k=0; $k < count($tempArr)-1; $k++) { 
				if($tempArr[$k] == $arr[$i]){
					if($resArr[$arr[$i]] != ''){
						$resArr[$arr[$i]] = $resArr[$arr[$i]] + 1;
					}else{
						$resArr[$arr[$i]] = 1;
					};
					break;
				};
			};
		};
		return $resArr;
	}











}