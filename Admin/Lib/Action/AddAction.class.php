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
    function comment($id){
    	$pid=$id;
    	$username = session('manager');
    	if(!empty($username)){
			// 存放评论的文件夹
	    	if(!file_exists("product/comment/{$id}")){
	    		mkdir("product/comment/{$id}");
	    	}
	    	$str="";
	    	$sourceName = $_FILES['commentUrl']['name'];
	    	// print_r($sourceName);die;
	    	// 获取上传文件后缀名
			$type=strrchr($sourceName,".");
			$fileName=$id.$type;
			// 上传文件在服务器端临时路径
			$tmpPath=$_FILES['commentUrl']["tmp_name"];
			if(is_uploaded_file($tmpPath)){
				$res=move_uploaded_file($tmpPath, "product/comment/{$id}"."/".$fileName);
				if($res){
						$str ="product/comment/{$id}"."/".$fileName;
						print_r($str);
					}else{
						echo "存储失败";
					}
			}
	    	$data=$_POST;
	    	$proCommentData=M("product");
	    	var_dump($data);die;
	    	$data['commentUrl']=$str;
	    	// 添加评论；
	    	$req=$proCommentData->where("id=$pid")->save($data);
	    	$this->ajaxReturn($req);
    	}
    }
    function fileUrl($id){
    	$pid = $id;
    	print_r($id);
    	$username = session('manager');
	 	if(!empty($username)){
	 		// 存放图片的文件夹
	    	if(!file_exists("product/pdShow/{$id}")){
	    		mkdir("product/pdShow/{$id}");
	    	}
	    	foreach ($_FILES as $key => $value) {
	    		$str="";
	    		$name=$key;
	    		if(is_array($value['name'])){
	    			foreach ($value['name'] as $k => $v) {
	    				// 获取图片名
	    				$fileName=$id."-".$v;
	    				// 获取上传图片在服务器端的临时文件路径
	    				$tmpPath=$value['tmp_name'][$k];
	    				if(is_uploaded_file($tmpPath)){
	    					// 移动文件到新位置
	    					$res=move_uploaded_file($tmpPath, "product/pdShow/{$id}"."/".$fileName);

	    					if($res){
	    						$str .="product/pdShow/{$id}"."/".$fileName.",";
	    					}else{
	    						echo "存储失败";
	    					}
	    				}
	    			}
	    			$str=substr($str,0,strlen($str)-1);
	    			
	    			$arr[]=$str;
	    		}else{
	    			$sourceName = $value['name'];
	    			$type=strrchr($sourceName,".");
	    			$fileName=$id.$type;
	    			$tmpPath=$value["tmp_name"];
	    			print_r($fileName);die;
	    			if(is_uploaded_file($tmpPath)){
	    				$res=move_uploaded_file($tmpPath, "product/pdShow/{$id}"."/".$fileName);
	    				if($res){
	    						$str ="product/pdShow/{$id}"."/".$fileName;
	    						
	    					}else{
	    						echo "存储失败";
	    					}
	    			}
	    		}
	    		$arr[]=$str;
	    	}
	    	$data=$_POST;
	    	$proImgData=M("product");
	    	$data['productShowPicUrl']=$arr[3];
	    	$data['productInfoPicUrl']=$arr[1];
	    	// 添加商品图片；
	    	$req=$proImgData->where("id=$pid")->save($data);
	    	$this->ajaxReturn($req);
   	 }
    	
    }
    // 添加数据到数据库
	 function addData(){
	 	$username = session('manager');
	 	if(!empty($username)){
	    	$data=$_POST;
	    	$product=M("product");
	    	$res=$product->add($data);
	    	if($res){
	    		$info['info']="数据添加成功";
	    		$info['status']=1;
	    		$this->comment($res);
	    		$this->fileUrl($res);
	    	}else{
	    		$info['info']="数据添加失败";
	    		$info['status']=0;
	    	}

	    	$this->ajaxReturn($info);
    	}
    }
}
?>