<?php
class HeaderModel extends Model{
	public function login($data){
		$username = $data['username'];
		$user = M('user');
		$one = $user->where("username='$username'")->find();
		if(!empty($one)){
			if($one['password'] == md5($data['password'])){
				$loginInfo['uid'] = $one['id'];
				$loginInfo['info'] = '登陆成功';
				$loginInfo['status'] = 1;
			}else{
				$loginInfo['info'] = '密码错误，请重试';
				$loginInfo['status'] = 2;
			};
		}else{
			$loginInfo['info'] = '该用户不存在';
			$loginInfo['status'] = 3;
		}
		return $loginInfo;
	}
	public function register($data){	
		$user = M('user');
		$username = $data['username'];
		$one = $user->where("username='$username'")->find();
		if(!empty($one)){
			$registerInfo['info'] = '用户名已存在';
			$registerInfo['status'] = 3;
		}else{
			$addData['username'] = $data['username'];
			$addData['password'] = md5($data['password']);
			$res = $user->add($addData);
			if($res){
				$registerInfo['uid'] = $res;
				$registerInfo['info'] = '注册成功';
				$registerInfo['status'] = 1;
			}else{
				$registerInfo['info'] = '系统错误，请重试';
				$registerInfo['status'] = 2;
			};
		};
		
		return $registerInfo;
	}
	public function initial($uid){
		$product = M('product');
		$uid = $uid;
		if ($uid != 'null') {
			$user = M('user');
			$one = $user->where("id=$uid")->find();
			$trolleyPidArr = $this->dealArr($one['trolleyPid']);
			$pCount = count($trolleyPidArr);
			$initData = $pCount;
		}else{
			$pid = cookie('temp_pid');
			if($pid != 'null'){
				$pidArr = $this->dealArr($pid);
				$pCount = count($pidArr);
				$initData = $pCount;
			}else{
				$initData = 0;
			};
			
		};
		return $initData;
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