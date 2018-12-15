<?php
namespace Elafansadm\Controller;
use Elafansadm\Model\LoginModel;
use Think\Controller;
class IndexController extends Controller {
 public function index(){
	   $this->assign("curhost","https://".$_SERVER['HTTP_HOST']."/elafansadm.php/");
		$this->display();
	}
	//登录验证
	public function logincheck(){
		if(isset($_POST['uid']) && $_POST['uid']!="" && isset($_POST['upwd']) && $_POST['upwd']!="" && isset($_POST['lcode']) && $_POST['lcode']!=""){
			$login = new LoginModel();
			if (!$this->check_verify($_POST['lcode'])) {
				echo 2;
				exit();
			}
			$rs = $login->checklogin($_POST['uid'],$_POST['upwd']);
			if ($rs==0) {
				echo 3;
				exit();
			} else {
				$userinfo = $login->userinfo($where);
				if($userinfo!=0){
					$_SESSION ['ela']['userid'] = $_POST['uid'];
					$_SESSION ['ela']['username'] = $rs['username'];
					$_SESSION ['ela']['role'] = $rs['roleid'];
					$this->addlogininfo();
					echo 1;
				}else{
					echo 4;
				}
			}
		}else{
			echo 0;
		}
	}
	// 验证码
	public function img() {
		$Verify = new \Think\Verify();
		$Verify->fontSize = 18;
		$Verify->length   = 4;
		$Verify->useNoise = false;
		$Verify->codeSet = '0123456789';
		$Verify->imageW = 130;
		$Verify->imageH = 50;
		$Verify->entry();
	}
	//检测验证码
	function check_verify($code, $id = ''){
		$verify = new \Think\Verify();
		return $verify->check($code, $id);
	}
	//注销
	public function logout(){
		unset($_SESSION ['gz']['userid']);
		unset($_SESSION ['gz']['username']);
		unset($_SESSION ['gz']['role']);
		echo "<script>window.location.href='http://".$_SERVER['HTTP_HOST']."/elafansadm.php';</script>";
	}
	//更新信息到登录信息表
	public function addlogininfo(){
		$data['logintime'] = time();
		$data['userid'] = $_SESSION ['gz']['userid'];
		$data['loginip'] = $this->getip();
		$logininfo = M("logininfo");
		$rs = $logininfo->add($data);
		if($rs){
			return 1;
		}else{
			return 0;
		}
	}
	
	//获取当前客户端IP地址
	function getip()
	{
		global $ip;
		if (getenv("HTTP_CLIENT_IP")){
			$ip = getenv("HTTP_CLIENT_IP");
		}else if(getenv("HTTP_X_FORWARDED_FOR")){
			$ip = getenv("HTTP_X_FORWARDED_FOR");
		}else if(getenv("REMOTE_ADDR")){
			$ip = getenv("REMOTE_ADDR");
		}else{
			$ip = "未知";
		}
		return $ip;
	}
	
}