<?php
namespace Home\Controller;
use Think\Controller;
class VotingController extends Controller {
	public function index(){
		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']!=""){
			$this->assign("logincate",$_SESSION ['eladevp']['logincate']);
			$this->assign("userheadimg",$_SESSION ['eladevp']['userheadimg']);
			$this->assign("profileinfo",$this->profileinfo());
		}else{
			$this->assign("logincate","");
		}
		if($_SESSION ['eladevp']['lang']=="cn"){
			$this->assign("langs",1);
		}else{
			$this->assign("langs",2);
		}
		$this->assign("curlang",$_SESSION ['eladevp']['lang']);
		$this->assign("curhost","https://".$_SERVER['HTTP_HOST']."/");
		$this->display();
	}
	//获取当前个人信息功能
	public function profileinfo(){
		$where['userid'] = $_SESSION['eladevp']['userid'];
		$user = M("user");
		$userinfo = $user->where($where)->find();
		return $userinfo;
	}
	
}
?>