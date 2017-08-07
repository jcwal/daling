<?php
class HeaderModel extends Model{
	public function login($data){
		$username = $data['username'];
		$user = M('user');
		$one = $user->where("username=$username")->find();
		if(!empty($one)){
			if($one['password'] == md5($data['password'])){
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
		$addData['username'] = $data['username'];
		$addData['password'] = md5($data['password']);
		$user = M('user');
		$res = $user->add($addData);
		if($res){
			$loginInfo['info'] = '注册成功';
			$loginInfo['status'] = 1;
		}else{
			$loginInfo['info'] = '系统错误，请重试';
			$loginInfo['status'] = 2;
		}
		return $loginInfo;
	}
}