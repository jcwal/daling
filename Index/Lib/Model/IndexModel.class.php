<?php
class IndexModel extends Model{
	public function initial(){
		$product = M('product');
		$initData['new']['up'] = $product->order('id DESC')->limit(0,4)->select();
		$initData['new']['down'] = $product->order('id DESC')->limit(4,2)->select();
		$initData['good'] = $product->limit(0,6)->select();
		$initData['buyAgain'] = $product->limit(6,6)->select();
		$initData['darkHorse'] = $product->limit(12,6)->select();
		$initData['sale'] = $product->limit(18,6)->select();
		if($initData['new']['up']){
			$initData['status'] = 1;
			$initData['info'] = '初始化成功';
		}else{
			$initData['status'] = 0;
			$initData['info'] = '服务器故障，请刷新网页';
		}
		return $initData;
	}
}