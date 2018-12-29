<?php
namespace Elafansadm\Model;
use Think\Model;
class UserModel extends Model{
	//查找指定条件的用户
	public function useralllist($where){
		$user = M("user");
		$rs = $user->where($where)->select();
		if($rs){
			return $rs;
		}else{
			return 0;
		}
	}
	//查找指定条件的用户
	public function userlist($where,$start,$num){
		$user = M("user");
		$rs = $user->where($where)->limit($start,$num)->select();
		if($rs){
			return $rs;
		}else{
			return 0;
		}
	}
	//指定条件的数量
	public function usercount($where){
		$user = M("user");
		$allcount = $user->where($where)->count();
		if($allcount){
			return $allcount;
		}else{
			return 0;
		}
	}
	//查找指定用户信息
	public function userinfo($where){
		$user = M("user");
		$userinfo = $user->where($where)->find();
		if($userinfo){
			return $userinfo;
		}else{
			return 0;
		}
	}
	//新增用户
	public function add($data){
		$user = M("user");
		$rs = $user->add($data);
		if($rs){
			return 1;
		}else{
			return 0;
		}
	}
	//编辑用户
	public function edit($where,$data){
		$user = M("user");
		$rs = $user->where($where)->save($data);
		if($rs!==false){
			return 1;
		}else{
			return 0;
		}
	}
	//删除用户
	public function del($where){
		$user = M("user");
		$rs = $user->where($where)->delete();
		if($rs){
			return 1;
		}else{
			return 0;
		}
	}
}
?>
