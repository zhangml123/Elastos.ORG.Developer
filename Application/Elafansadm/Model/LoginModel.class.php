<?php
/*
	systemname：后台管理平台
	auther: HB-lvshapn
	function：检测登录账户
*/
namespace elafansadm\Model;
use Think\Model;
class LoginModel extends Model{
	//监测账户
	public function checklogin($userid,$userpwd){
		$user = M("user");
		$rs = $user->where("userid='$userid' and userpwd='".md5($userpwd)."' and status=1")->find();
		if($rs){
			return $rs;
		}else{
			return 0;
		}
	}
	//查询账户
	public function userinfo($where){
		$user = M("user");
		$rs = $user->where($where)->find();
		if($rs){
			return $rs;
		}else{
			return 0;
		}
	}
}
?>
