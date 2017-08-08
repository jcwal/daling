<?php
class ModifyAction extends Action {
    public function index(){
    	$username = session('manager');
    	if(!empty($username)){
    		$this->display('modify');
    	}else{
    		header("Location:../");	
    	};	
    }
}