<?php
class IndexModel extends Model{
	public function initial($uid){
		$product = M('product');
		$initData['new']['up'] = $product->order('id DESC')->limit(0,4)->select();
		$initData['new']['down'] = $product->order('id DESC')->limit(4,2)->select();
		$initData['good']['all'] = $product->limit(0,6)->select();
		$initData['good']['beauty'] = $product->limit(6,6)->select();
		$initData['good']['snack'] = $product->limit(12,6)->select();
		$initData['good']['create'] = $product->limit(18,6)->select();
		$initData['good']['pop'] = $product->limit(24,6)->select();
		$initData['good']['digital'] = $product->limit(30,6)->select();
		$initData['buyAgain']['beauty'] = $product->limit(15,6)->select();
		$initData['buyAgain']['snack'] = $product->limit(21,6)->select();
		$initData['buyAgain']['create'] = $product->limit(27,6)->select();
		$initData['darkHorse'] = $product->limit(42,6)->select();
		$initData['sale']['today'] = $product->limit(22,4)->select();
		$initData['sale']['tomorrow'] = $product->limit(40,5)->select();
		$starttimestr = "08:00:00";
		$endtimestr = "20:00:00";
		$starttime = strtotime($starttimestr);
		$endtime = strtotime($endtimestr);
		$total = $endtime-$starttime;
		$beginToday=mktime(8,0,0,date('m'),date('d'),date('Y'));
		$now = strtotime(date('H:i:s'));
		$remain = $total-($now-$beginToday);
		$initData['sale']['time'] = $remain;	
		$uid = $uid;
		if($uid){
			$user = M('user');
			$one = $user->where("id=$uid")->find();
			$pid = $one['trolleyPid'];
			$pCount = $this->countStr($pid);
			$initData['pCount'] = $pCount;
		};
		if($initData['new']['up']){
			$initData['status'] = 1;
			$initData['info'] = '初始化成功';
		}else{
			$initData['status'] = 0;
			$initData['info'] = '服务器故障，请刷新网页';
		};
		return $initData;
	}
	public function joinTrolley($idData){
		$pid = $idData['pid'];
		$uid = $idData['uid'];
		$user = M('user');
		$one = $user->where("id=$uid")->find();
		$update['trolleyPid'] = $one['trolleyPid'].','.$pid;
		$res = $user->where("id=$uid")->save($update);
		if ($res) {
			$trolleyData['status'] = 1;
		}else{
			$trolleyData['status'] = 0;
			$trolleyData['info'] = '网路故障，请重试';
		};
		return $trolleyData;
	}
	public function collect($idData){
		$pid = $idData['pid'];
		$uid = $idData['uid'];
		$user = M('user');
		$one = $user->where("id=$uid")->find();
		$update['collectPid'] = $one['collectPid'].','.$pid;
		$res = $user->where("id=$uid")->save($update);
		if ($res) {
			$collectData['status'] = 1;
		}else{
			$collectData['status'] = 0;
			$collectData['info'] = '网路故障，请重试';
		};
		return $collectData;
	}
	public function exchange($count){
		$product = M('product');
		$count = $count;
		$exchangeData['new']['up'] = $product->order('id DESC')->limit($count*6,4)->select();
		$exchangeData['new']['down'] = $product->order('id DESC')->limit($count*6+4,2)->select();
		if($exchangeData['new']['up']){
			$exchangeData['status'] = 1;
			$exchangeData['info'] = '换一批成功';
		}else{
			$exchangeData['status'] = 0;
			$exchangeData['info'] = '服务器故障，请刷新网页';
		}
		return $exchangeData;
	}
	public function countStr($str){
		$str = $str;
		$arr = explode(',',$str);
		array_shift($arr);
		return count($arr);
	}
}