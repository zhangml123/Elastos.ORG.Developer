<?php
/*
	systemname：后台管理平台
	function：文章管理功能
*/
namespace Elafansadm\Model;
use Think\Model;
class ArticleModel extends Model{
	//查找指定条件的文章
	public function articlealllist($where){
		$article = M("article");
		$rs = $article->where($where)->order("addtime desc")->select();
		if($rs){
			return $rs;
		}else{
			return 0;
		}
	}
	//查找指定条件的广告
	public function articlelist($where,$start,$num){
		$article = M("article");
		$rs = $article->where($where)->order("addtime desc")->limit($start,$num)->select();
		if($rs){
			for($i=0;$i<count($rs);$i++){
				$uinfo = $this->uinfo($rs[$i]['author']);
				if($uinfo!=0){
					$rs[$i]['username'] = $uinfo['username'];
				}else{
					$rs[$i]['username'] = "--";
				}
			}
			return $rs;
		}else{
			return 0;
		}
	}
	//指定条件的数量
	public function articlecount($where){
		$article = M("article");
		$allcount = $article->where($where)->count();
		if($allcount){
			return $allcount;
		}else{
			return 0;
		}
	}
	//获取编辑信息
	public function uinfo($uid){
		$user = M("user");
		$userinfo = $user->where("userid='$uid'")->find();
		if($userinfo){
			return $userinfo;
		}else{
			return 0;
		}
	}
	//查找指定文章信息
	public function articleinfo($where){
		$article = M("article");
		$articleinfo = $article->where($where)->find();
		if($articleinfo){
			$articleinfo['adddate'] = date("Y-m-d",$articleinfo['addtime']);
			return $articleinfo;
		}else{
			return 0;
		}
	}
	//新增文章
	public function add($data){
		$article = M("article");
		$rs = $article->add($data);
		if($rs){
			return 1;
		}else{
			return 0;
		}
	}
	//编辑广告
	public function edit($where,$data){
		$article = M("article");
		$rs = $article->where($where)->save($data);
		//var_dump($article->getlastsql());
		if($rs!==false){
			return 1;
		}else{
			return 0;
		}
	}
	//删除文章
	public function del($where){
		$article = M("article");
		$rs = $article->where($where)->delete();
		if($rs){
			return 1;
		}else{
			return 0;
		}
	}
}
?>
