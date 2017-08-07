<?php
class ManageAction extends Action {
    public function index(){
    	$username = session('username');
    	if(!empty($username)){
    		$this->display('manage');
    	}else{
    		header("Location:../");	
    	};	
    }
    public function add(){
    	$username = session('username');
    	if(!empty($username)){
    		$this->display('add');
    	}else{
    		header("Location:../");	
    	};	
    }
    public function modify(){
    	$username = session('username');
    	if(!empty($username)){
    		$this->display('modify');
    	}else{
    		header("Location:../");	
    	};	
    }
}