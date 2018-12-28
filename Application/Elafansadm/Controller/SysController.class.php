<?php
namespace Elafansadm\Controller;
use Elafansadm\Model\UserModel;
use Common\Controller\ElabaseController;
use Think\Controller;
class SysController extends ElabaseController {
    public function index(){
		$this->show("走错路了哟！");
	}
	//编辑功能界面
	public function setpwdshow(){
		$this->display();
	}
	//检测原密码输入是否正确
	public function checkoldpwd(){		
		$user = new UserModel();
		$where['userid'] = $_SESSION['ela']['userid'];
		$where['userpwd'] = md5($_POST['oldpwd']);
		$rs = $user->userinfo($where);
		if($rs){
			echo 1;
		}else{
			echo 0;
		}
	}
	//编辑密码功能
	public function setpwd(){
		$user = new UserModel();
		$where['userid'] = $_SESSION['ela']['userid'];
		$data['userpwd'] = md5($_POST['nupwd']);
		$rs = $user->edit($where,$data);
		if($rs){
			echo 1;
		}else{
			echo 0;
		}
	}
}