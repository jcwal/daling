<?php
// 本类由系统自动生成，仅供测试用途
class ProductListAction extends Action {
    public function index(){
		$this->display('showList');
	}
	// 商品列表页面
	function check(){
		$data=file_get_contents("php://input");
		$checkData=json_decode($data,true);
		$product=M("product");
		$keyData=$checkData['keywords'];
		$where['keywords']=array('like',"%{$keyData}%");
		$list=$product->where($where)->select();
		$this->ajaxReturn($list);
	}	
}