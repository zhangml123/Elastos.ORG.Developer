<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model{
	//用户新表
	public function userinfo($where){
		$user = M("user");
		$userinfo = $user->where($where)->find();
		return $userinfo;
	}
	//编辑功能
	public function edituser($where,$data){
		$user = M("user");
		$userinfo = $user->where($where)->save($data);
		return $userinfo;
	}
	//上传头像
	public function uploadhead(){
		
		
	}
	
	
	
}
?>