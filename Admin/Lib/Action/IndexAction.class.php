    <?php
class IndexAction extends Action {
    public function index(){
		$this->display('index');
    }
    public function login(){
    	$data = json_decode(file_get_contents('php://input'),true);
    	$Index = D("Index");
    	$loginInfo = $Index->login($data);
    	if($loginInfo['status'] == 1){
			cookie('manager',$data['username'],0);
			session('manager',$data['username']);
            //$loginInfo['destoryTime'] = time() + 900; 15分钟无操作退出
		};
		$this->ajaxReturn($loginInfo);
	}
}