<?php
namespace Elafansadm\Model;
use Think\Model;
class GithubuserModel extends Model{
	//查找指定条件的用户
	public function githubinfoalllist($where){
		$githubinfo = M("githubinfo");
		$rs = $githubinfo->where($where)->select();
		if($rs){
			return $rs;
		}else{
			return 0;
		}
	}
	//查找指定条件的用户
	public function githubinfolist($where,$start,$num){
		$githubinfo = M("githubinfo");
		$rs = $githubinfo->where($where)->limit($start,$num)->select();
		if($rs){
			return $rs;
		}else{
			return 0;
		}
	}
	//指定条件的数量
	public function githubinfocount($where){
		$githubinfo = M("githubinfo");
		$allcount = $githubinfo->where($where)->count();
		if($allcount){
			return $allcount;
		}else{
			return 0;
		}
	}
	//查找指定用户信息
	public function githubinfoinfo($where){
		$githubinfo = M("githubinfo");
		$githubinfoinfo = $githubinfo->where($where)->find();
		if($githubinfoinfo){
			return $githubinfoinfo;
		}else{
			return 0;
		}
	}
	//新增用户
	public function add($data){
		$githubinfo = M("githubinfo");
		$rs = $githubinfo->add($data);
		if($rs){
			return 1;
		}else{
			return 0;
		}
	}
	//编辑用户
	public function edit($where,$data){
		$githubinfo = M("githubinfo");
		$rs = $githubinfo->where($where)->save($data);
		if($rs!==false){
			return 1;
		}else{
			return 0;
		}
	}
	//删除用户
	public function del($where){
		$githubinfo = M("githubinfo");
		$rs = $githubinfo->where($where)->delete();
		if($rs){
			return 1;
		}else{
			return 0;
		}
	}
}
?>
