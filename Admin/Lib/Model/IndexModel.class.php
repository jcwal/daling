<?php
class IndexModel extends Model{
	public function login($data){
		$username = $data['username'];
		$manager = M('manager');
		$one = $manager->where("username='$username'")->find();
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
}