<?php
namespace Home\Model;
use Think\Model;
class CommentModel extends Model{
	//查找指定条件的文章
	public function commentlist($where,$start,$num){
		$comment = M("comment");
		$rs = $comment->where($where)->order("addtime desc")->limit($start,$num)->select();
		if($rs){
			for($i=0;$i<count($rs);$i++){
				$rs[$i]['contents'] = str_replace(" "," ",str_replace("\n","<br/>",$rs[$i]['contents']));
				$uinfo = $this->findcommenthead($rs[$i]['sender'],$rs[$i]['cate']);
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
		$comment = M("comment");
		$allcount = $comment->where($where)->count();
		if($allcount){
			return $allcount;
		}else{
			return 0;
		}
	}
	//判断是否点过赞
	public function findcommenthistory($commentid){
		$where['commentid'] = $commentid;
		$commenthistory = M("commenthistory");
		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==1){
			$where['userid'] = $_SESSION['eladevp']['userid'];
			$rs = $commenthistory->where($where)->find();
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==2){
			$where['userid'] = $_SESSION['eladevp']['rcuid'];
			$rs = $commenthistory->where($where)->find();
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==3){
			$where['userid'] = $_SESSION['eladevp']['githubuid'];
			$rs = $commenthistory->where($where)->find();
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==4){
			$where['userid'] = $_SESSION['eladevp']['wechatuid'];
			$rs = $commenthistory->where($where)->find();
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==5){
			$where['userid'] = $_SESSION['eladevp']['diduid'];
			$rs = $commenthistory->where($where)->find();
		}
		if($rs){
			return 1;
		}else{
			return 0;
		}
	}
	//根据cate判断使用的是哪个头像
	public function findcommenthead($userid,$cate){
		if($cate=="1"){
			$where['userid'] = $userid;
			$user = M("user");
			$userinfo = $user->where($where)->find();
		}elseif($cate=="2"){
			$where['rcuid'] = $userid;
			$rcinfo = M("rcinfo");
			$userinfo = $rcinfo->where($where)->find();
		}elseif($cate=="3"){
			$where['githubuid'] = $userid;
			$githubinfo = M("githubinfo");
			$userinfo=$githubinfo->where($where)->find();
			if($userinfo){
				$userinfo['nickname']=$userinfo['rcnickname'];
			}
		}elseif($cate=="4"){
			$where['wechatuid'] = $userid;
			$wechatinfo = M("wechatinfo");
			$userinfo=$wechatinfo->where($where)->find();
		}elseif($cate=="5"){
			$where['didid'] = $userid;
			$didinfo = M("didinfo");
			$userinfo=$didinfo->where($where)->find();
		}
		return $userinfo;
	}
}
?>