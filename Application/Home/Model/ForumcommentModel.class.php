<?php
namespace Home\Model;
use Think\Model;
class ForumcommentModel extends Model{
	//查找指定条件的文章
	public function commentlist($where,$start,$num){
		$article = M("article");
		$rs = $article->where($where)->order("addtime desc")->limit($start,$num)->select();
		if($rs){
			for($i=0;$i<count($rs);$i++){
				$rs[$i]['contents'] = str_replace(" "," ",str_replace("\n","<br/>",$rs[$i]['contents']));
				$uinfo = $this->findcommenthead($rs[$i]['sender']);
				if($uinfo){
					$rs[$i]['uheadimg'] = $uinfo['headimg'];
					if($uinfo['firstname']!=""){
						$rs[$i]['nickname'] = $uinfo['firstname'];
					}else{
						$rs[$i]['nickname'] = $rs[$i]['sender'];
					}
					
				}else{
					$rs[$i]['uheadimg'] = "";
					if($rs[$i]['sender']=="匿名"){
						$rs[$i]['nickname'] = "匿名";
					}else{
						$rs[$i]['nickname'] = "";
					}
					
					
				}
				$zanyn = $this->findcommenthistory($rs[$i]['id']);
				if($zanyn){
					$rs[$i]['zanyn'] = 1;
				}else{
					$rs[$i]['zanyn'] = 0;
				}
			}
			return $rs;
		}else{
			return 0;
		}
	}
	//指定条件的数量
	public function commentcount($where){
		$article = M("article");
		$allcount = $article->where($where)->count();
		if($allcount){
			return $allcount;
		}else{
			return 0;
		}
	}
	//判断是否点过赞
	public function findcommenthistory($commentid){
		$where['commentid'] = $commentid;
		$articlecomment = M("articlecomment");
		$where['userid'] = $_SESSION['eladevp']['userid'];
		$rs = $articlecomment->where($where)->find();
		if($rs){
			return 1;
		}else{
			return 0;
		}
	}
	//根据cate判断使用的是哪个头像
	public function findcommenthead($userid){
		$where['userid'] = $userid;
		$user = M("user");
		$userinfo = $user->where($where)->find();
		return $userinfo;
	}
}
?>