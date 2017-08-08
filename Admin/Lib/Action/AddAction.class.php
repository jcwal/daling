<?php
class AddAction extends Action {
    public function index(){
        $username = session('manager');
        if(!empty($username)){
            $this->display('add');
        }else{
            header("Location:../"); 
        };  
    }
}