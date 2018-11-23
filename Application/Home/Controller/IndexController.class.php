<?php
namespace Home\Controller;
use Common\Controller\BaseController;
class IndexController extends BaseController {
    public function index(){
		if(isset($_SESSION ['eladevp']['uid']) && $_SESSION ['eladevp']['uid']!=""){
			$this->assign("curuid",$_SESSION ['eladevp']['uid']);
		}else{
			$this->assign("curuid","");
		}
		$this->assign("curhost","http://".$_SERVER['HTTP_HOST']."/");
		$this->display();
	}
	//顶部导航
	public function topnav(){
		if(isset($_SESSION ['eladevp']['uid']) && $_SESSION ['eladevp']['uid']!=""){
			$this->assign("curuid",$_SESSION ['eladevp']['uid']);
		}else{
			$this->assign("curuid","");
		}
		$this->display();
	}
	//底部
	public function footer(){
		$this->display();
	}
	//右侧
	public function rasid(){
		$this->display();
	}
	//登录
	public function loginsid(){
		$this->display();
	}
	//注册
	public function signup(){
		$this->display();
	}
	//邮箱认证
	public function emailsid(){
		$this->display();
	}
	//设置语言
	public function setlang(){
		if($_POST['lang']==1){
			$_SESSION ['eladevp']['lang'] = "cn";
		}else{
			$_SESSION ['eladevp']['lang'] = "en";
		}
	}
}