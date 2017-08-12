<?php
// 本类由系统自动生成，仅供测试用途
class ProductDetailAction extends Action {
	public function index(){
		$this->display('productDetail');
	}
	
	function getData(){
		//get方法接收数据
		$pid = $_GET['pid'];
		//实例化表名
		$product=M("product");
		// 查询一条数据
		$one = $product->where("id=$pid")->find();
//		echo $product->getLastSql();die;
		$commentJson = $one['commentUrl'];
		$res = json_decode(file_get_contents($commentJson),true);
		$one['commentObj'] = $res;
		if(empty($one)){
			$one = [];
		}
		$this->ajaxReturn($one);
	}
}