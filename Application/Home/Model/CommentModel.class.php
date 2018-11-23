<?php
namespace Home\Model;
use Think\Model;
class CommentModel extends Model{
	//查找指定条件的文章
	public function commentlist($where,$start,$num){
		$comment = M("comment");
		$rs = $comment->where($where)->order("addtime desc")->limit($start,$num)->select();
		//var_dump($comment->getlastsql());
		if($rs){
			return $rs;
		}else{
			return 0;
		}
	}
	//指定条件的数量
	public function commentcount($where){
		$comment = M("comment");
		$allcount = $comment->where($where)->count();
		if($allcount){
			return $allcount;
		}else{
			return 0;
		}
	}
}
?>