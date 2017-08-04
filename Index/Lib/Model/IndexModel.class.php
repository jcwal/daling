<?php
class IndexModel extends Model{
	public function initial(){
		$arr['one'] = '我是第一条数据';
		$arr['two'] = '我是第二条数据';
		$arr['three'] = '我是第三条数据';
		return $arr;
	}
}