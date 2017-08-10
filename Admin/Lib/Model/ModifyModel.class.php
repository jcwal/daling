<?php
class ModifyModel extends Model{
	public function init(){
		$product = M('product');
		$count = $product->count();
		$pages =  ceil($count/10);
		for ($i=0; $i < $pages; $i++) { 
			$str = $product->order('id DESC')->limit($i*10,10)->select();
			$res[] = $str;
		};	
		if($res){
			$data['status'] = 1;
			$data['count'] = $count;
			$data['pages'] = $pages;
			$data['res'] = $res;
		}else{
			$data['status'] = 0;
			$data['info'] = '系统错误，请刷新页面';
		};
		return $data;
	}
	public function remove($pid){
		$product = M('product');
		$pid = $pid;
		$res = $product->where("id=$pid")->delete();
		if($res){
			$count = $product->count();
			$pages =  ceil($count/10);
			for ($i=0; $i < $pages; $i++) { 
				$str = $product->order('id DESC')->limit($i*10,10)->select();
				$result[] = $str;
			};	
			$data['res'] = $result;
			$data['count'] = $count;
			$data['pages'] = $pages;
			$data['status'] = 1;
			$data['info'] = '已成功删除';
		}else{
			$data['status'] = 0;
			$data['info'] = '系统错误，请重试';
		};
		return $data;
	}
	public function modifyInit($pid){
		$product = M('product');
		$pid = $pid;
		$res = $product->where("id=$pid")->find();
		if($res){	
			$data['res'] = $res;
			$data['status'] = 1;
		}else{
			$data['status'] = 0;
			$data['info'] = '系统错误，请刷新页面';
		};
		return $data;
	}
	public function modifyProduct($data){
		$product = M('product');
		$pid = $data['text']['pid'];
		$fileData = $data['file'];
		$textData['collectNumber'] = $data['text']['collectNumber'];
		$textData['discountPrice'] = $data['text']['discountPrice'];
		$textData['discountRate'] = $data['text']['discountRate'];
		$textData['keywords'] = $data['text']['keywords'];
		$textData['originPrice'] = $data['text']['originPrice'];
		$textData['productParamter'] = $data['text']['productParamter'];
		$textData['saleInfo'] = $data['text']['saleInfo'];
		$textData['productName'] = $data['text']['productName'];
		$res = $product->where("id=$pid")->save($textData);
		foreach ($fileData as $k => $v) {
			if($k == 'comment'){
				move_uploaded_file($v['tmp_name'], "product/comment/{$pid}."."json");
			}else if($k == 'showPic'){

				$type = strrchr($v['name'] , '.');
				move_uploaded_file($v['tmp_name'], "product/pdShow/{$pid}/{$pid}".$type);
			}else if($k == 'infoPic'){
				
				for($i=0;$i<count($v['name']);$i++){
					$type = strrchr($v['name'][$i] , '.');
					$res = move_uploaded_file($v['tmp_name'][$i], "product/pdShow/{$pid}/{$pid}-".$v['name'][$i].$type);
				};
				
			};
			
		};
		if($res){
			$modifyData['info'] = '修改数据成功';
			$modifyData['status'] = 1;
		}else{
			$modifyData['info'] = '服务器错误，请重试';
			$modifyData['status'] = 0;
		};
		return $modifyData;
		
	}

	 













}