<?php
// 本类由系统自动生成，仅供测试用途
class ProductListAction extends Action {
    public function index(){
		$this->display('showList');
	}
	// 商品列表页面
	function showList(){
		// var paramter = window.location.search;
		// var keywords = paramter.substring(paramter.IndexOf('=')+1, paramter.length);
		$product=M('product');
		$list=$product->where('keywords=="极致美护"')->select();
		var_dump($list);die;
		// if($list){
		// 	$data['info']="数据查询成功";
		// 	$data['status']=1;
		// }else{
		// 	$data['info']='数据查询失败';
		// 	$data['status']=0;
		// }
		$this->ajaxReturn($list);		
	}
	
	
}