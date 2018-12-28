<?php
/*
	systemname：后台管理平台
	function：评论管理功能
*/
namespace elafansadm\Model;
use Think\Model;
class CommentModel extends Model{
	//查找指定条件的评论
	public function commentalllist($where){
		$comment = M("comment");
		$rs = $comment->where($where)->select();
		if($rs){
			for($i=0;$i<count($rs);$i++){
				$rs[$i]['adddatetime'] = date("Y-m-d H:i:s",$rs[$i]['addtime']);
				//https://github.com/elastos/Elastos.Developer.Doc/tree/master/EN/1.Before you start/1.Contribute and earn ELA.md;
				$arr = explode("\/",$rs[$i]['githuburl']);
				var_dump($arr);
				$rs[$i]['dirname'] = $arr[count($arr)-2];
				$rs[$i]['docname'] = $arr[count($arr)-1];
			}
			return $rs;
		}else{
			return 0;
		}
	}
	//查找指定条件的评论
	public function commentlist($where,$start,$num){
		$comment = M("comment");
		$rs = $comment->where($where)->limit($start,$num)->order("status asc,id desc")->select();
		if($rs){
			for($i=0;$i<count($rs);$i++){
				$arr = explode("/",$rs[$i]['githuburl']);
				$rs[$i]['dirname'] = $arr[count($arr)-2];
				$rs[$i]['docname'] = $arr[count($arr)-1];
				$rs[$i]['adddatetime'] = date("Y-m-d H:i:s",$rs[$i]['addtime']);
			}
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
	//查找指定评论信息
	public function commentinfo($where){
		$comment = M("comment");
		$commentinfo = $comment->where($where)->find();
		if($commentinfo){
			$wherea['id']=$commentinfo['articleid'];
			$whereb['id']=$commentinfo['cateid'];
			$articleinfo = $this->articleinfo($wherea);
			$cateinfo = $this->cateinfo($whereb);
			$commentinfo['catename'] = $cateinfo['catename'];
			$commentinfo['articletitle'] = $articleinfo['title'];
			$commentinfo['adddatetime'] = date("Y-m-d H:i:s",$articleinfo['addtime']);
			return $commentinfo;
		}else{
			return 0;
		}
	}
	//编辑
	public function edit($where,$data){
		$comment = M("comment");
		$rs = $comment->where($where)->save($data);
		if($rs!==false){
			return 1;
		}else{
			return 0;
		}
	}
	//删除
	public function del($where){
		$comment = M("comment");
		$rs = $comment->where($where)->delete();
		if($rs){
			return 1;
		}else{
			return 0;
		}
	}
}
?>