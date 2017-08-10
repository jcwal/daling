<?php
// 本类由系统自动生成，仅供测试用途
class ProductDetailAction extends Action {
	public function index(){
		$this->display('productDetail');
	}
	//实例化表名
	function getData(){
		$pid = $_GET['pid'];
		$product=M("product");
		$one = $product->where("id=$pid")->find();
		$this->ajaxReturn($one);
	}
}