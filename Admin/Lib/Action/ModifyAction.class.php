<?php
class ModifyAction extends Action {
    public function index(){
    	$username = session('manager');
    	if(!empty($username)){
    		$this->display('list');
    	}else{
    		header("Location:../");	
    	};	
    }
    public function modify(){
    	$username = session('manager');
    	if(!empty($username)){
    		$this->display('modify');
    	}else{
    		header("Location:../");	
    	};	
    }
    public function listInit(){
    	$username = session('manager');
    	if(!empty($username)){
    		$Modify = D("Modify");
    		$initInfo = $Modify->init();
    		$this->ajaxReturn($initInfo);
    	}else{
    		header("Location:../");	
    	};	
    }
    public function delete(){
    	$username = session('manager');
    	if(!empty($username)){
    		$pid = $_GET['pid'];
    		$Modify = D("Modify");
    		$deleteInfo = $Modify->remove($pid);
    		$this->ajaxReturn($deleteInfo);
    	}else{
    		header("Location:../");	
    	};	
    }
    public function modifyInit(){  	
    	$username = session('manager');
    	if(!empty($username)){
    		$pid = $_GET['pid'];
    		$Modify = D("Modify");
    		$initInfo = $Modify->modifyInit($pid);
    		$this->ajaxReturn($initInfo);
    	}else{
    		header("Location:../");	
    	};
    }
    public function modifyProduct(){
    	$username = session('manager');
    	if(!empty($username)){
    		$data['text'] = $_POST;
    		$data['file'] = $_FILES;
    		$Modify = D("Modify");
    		$modifyInfo = $Modify->modifyProduct($data);
    		$this->ajaxReturn($modifyInfo);
    	}else{
    		header("Location:../");	
    	};
    }
    
}










