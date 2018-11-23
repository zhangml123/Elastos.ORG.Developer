<?php
namespace Home\Controller;
use Common\Controller\BaseController;
use \ThinkPHP\Library\Org\ThinkSDK\ThinkOauth;
class LoginController extends BaseController {
	public function index(){
        $this->show();
    }
	public function callback(){
		
		
	}
	// 第三方平台登录
	public function oauth_login(){
		$type=I('get.type');  //获取登录的方法
		import("Org.ThinkSDK.ThinkOauth");  ////加载ThinkOauth类
		$sdk=\ThinkOauth::getInstance($type); //实例化一个对象
		redirect($sdk->getRequestCodeURL());  //重定向到第三方登录授权页面
	}
	public function complateuinfo(){
		if(isset($_SESSION ['eladevp']['gituid']) && $_SESSION ['eladevp']['gituid']!=""){
			
		}
		$this->display();
	}
	//登录
	public function login(){
		$where['userid'] = $_POST['uid'];
		$where['userpwd'] = md5($_POST['upwd']);
		$user = M("user");
		$rs = $user->where($where)->find();
		if($rs){
			$_SESSION ['eladevp']['uid'] = $_POST['uid'];
		    echo 1;
		}else{
			echo 0;
		}
	}
	//新增信息到User表
	public function adduser(){
		$data['userid'] = $_POST['uid'];
		$data['userpwd'] = md5($_POST['upwd']);
		$data['logintime'] = time();
		$data['addtime'] = time();
		$user = M("user");
		$rs = $user->add($data);
		if($rs){
			$_SESSION ['eladevp']['uid'] = $_POST['uid'];
		    echo 1;
		}else{
			echo 0;
		}
	}
	//绑定账号密码到github账号
	public function upuser(){
		$where['githubid'] = $_SESSION ['eladevp']['gituid'];
		$data['userid'] = $_POST['uid'];
		$data['userpwd'] = md5($_POST['upwd']);
		$data['logintime'] = time();
		$data['addtime'] = time();
		$user = M("user");
		$rs = $user->where($where)->save($data);
		if($rs){
			$_SESSION ['eladevp']['uid'] = $_POST['uid'];
		    echo 1;
		}else{
			echo 0;
		}
	}
	
}