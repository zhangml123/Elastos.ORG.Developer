<?php
namespace Elafansadm\Controller;
use Common\Controller\ElabaseController;
use Think\Controller;
class UserController extends ElabaseController {
    public function index(){
		$this->display();
	}
	public function saveamin(){
		$where['email'] = $_POST['email'];
		$user = M("user");
		$data['roleid'] = 1;
		$rs = $user->where($where)->save($data);
		if($rs){
			echo 1;
		}else{
			echo 0;
		}
	}
}