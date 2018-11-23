<?php
/*
	systemname：后台管理平台
	auther: HB-lvshapn
	function：主菜单功能
*/
namespace Elafansadm\Model;
use Think\Model;
class ColumnModel extends Model{
	//主菜单列表
	public function mainmenulist($roleid){
		$column = M("column");
		$rs = $column->where("roleid=".$roleid." and yn=1")->select();
		if($rs){
			return $rs;
		}else{
			return 0;
		}
	}
	//条件下在
	public function mainmenulists($where){
		$column = M("column");
		$rs = $column->where($where)->select();
		if($rs){
			return $rs;
		}else{
			return 0;
		}
	}
}
?>
