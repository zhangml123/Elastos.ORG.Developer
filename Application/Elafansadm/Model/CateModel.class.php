<?php
/*
	systemname：后台管理平台
	function：分类管理功能
*/
namespace Elafansadm\Model;
use Think\Model;
class CateModel extends Model{
	//查找指定条件的分类
	public function catealllist($where){
		$cate = M("cate");
		$rs = $cate->where($where)->select();
		if($rs){
			return $rs;
		}else{
			return 0;
		}
	}
	//查找指定条件的分类
	public function catelist($where,$start,$num){
		$cate = M("cate");
		$rs = $cate->where($where)->limit($start,$num)->select();
		if($rs){
			return $rs;
		}else{
			return 0;
		}
	}
	//指定条件的数量
	public function catecount($where){
		$cate = M("cate");
		$allcount = $cate->where($where)->count();
		if($allcount){
			return $allcount;
		}else{
			return 0;
		}
	}
	//查找指定分类信息
	public function cateinfo($where){
		$cate = M("cate");
		$cateinfo = $cate->where($where)->find();
		if($cateinfo){
			return $cateinfo;
		}else{
			return 0;
		}
	}
	//新增分类
	public function add($data){
		$cate = M("cate");
		$rs = $cate->add($data);
		if($rs){
			return 1;
		}else{
			return 0;
		}
	}
	//编辑分类
	public function edit($where,$data){
		$cate = M("cate");
		$rs = $cate->where($where)->save($data);
		if($rs!==false){
			return 1;
		}else{
			return 0;
		}
	}
	//删除分类
	public function del($where){
		$cate = M("cate");
		$rs = $cate->where($where)->delete();
		if($rs){
			return 1;
		}else{
			return 0;
		}
	}
}
?>
