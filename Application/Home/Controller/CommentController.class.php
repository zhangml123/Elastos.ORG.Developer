<?php
namespace Home\Controller;
use Think\Controller;
use Model\CommentModel;
class CommentController extends Controller {
	//评论列表
	public function commentlist(){
		$where['githuburl'] = $_POST['githuburl'];
		$where['commentid'] = array('exp','is null');
		$comment = new CommentModel;
		$commentlist = $comment->commentlist($where,$_POST['startnum'],10);
		if($commentlist){
			for($i=0;$i<count($commentlist);$i++){
				$commentlist[$i]['subcommentlist'] = $this->subcommentlist($commentlist[$i]['id']);
				if($_SESSION ['eladevp']['lang']=="cn"){
					$commentlist[$i]['adddatetime'] = date("Y-m-d H:i:s",$commentlist[$i]['addtime']);
				}else{
					$commentlist[$i]['adddatetime'] = date("M d - h:i A",$commentlist[$i]['addtime']);
				}
				$uinfo = $this->findcommenthead($commentlist[$i]['userid'],$commentlist[$i]['cate']);
				if($uinfo){
					$commentlist[$i]['uheadimg'] = $uinfo['headimg'];
				}else{
					$commentlist[$i]['uheadimg'] = "";
				}
				
				$zanyn = $this->findcommenthistory($commentlist[$i]['id']);
				if($zanyn){
					$commentlist[$i]['zanyn'] = 1;
				}else{
					$commentlist[$i]['zanyn'] = 0;
				}
			}
		}
		echo json_encode($commentlist);
	}
	//初始子评论列表
	public function subcommentlist($commentid){
		$where['commentid'] = $commentid;
		$comment = new CommentModel;
		$commentlist = $comment->commentlist($where,0,5);
		if($commentlist){
			for($i=0;$i<count($commentlist);$i++){
				//$commentlist[$i]['subcommentlist'] = $this->subcommentlist($commentlist[$i]['id']);
				if($_SESSION ['eladevp']['lang']=="cn"){
					$commentlist[$i]['adddatetime'] = date("Y-m-d H:i:s",$commentlist[$i]['addtime']);
				}else{
					$commentlist[$i]['adddatetime'] = date("M d - h:i A",$commentlist[$i]['addtime']);
				}
				$uinfo = $this->findcommenthead($commentlist[$i]['userid'],$commentlist[$i]['cate']);
				if($uinfo){
					$commentlist[$i]['uheadimg'] = $uinfo['headimg'];
				}else{
					$commentlist[$i]['uheadimg'] = "";
				}
				
				$zanyn = $this->findcommenthistory($commentlist[$i]['id']);
				if($zanyn){
					$commentlist[$i]['zanyn'] = 1;
				}else{
					$commentlist[$i]['zanyn'] = 0;
				}
			}
		}
		return $commentlist;
	}
	//获取子评论列表
	public function getsubcommentlist(){
		$where['commentid'] = $_POST['commentid'];
		$comment = new CommentModel;
		$commentlist = $comment->commentlist($where,$_POST['startnum'],5);
		if($commentlist){
			for($i=0;$i<count($commentlist);$i++){
				if($_SESSION ['eladevp']['lang']=="cn"){
					$commentlist[$i]['adddatetime'] = date("Y-m-d H:i:s",$commentlist[$i]['addtime']);
				}else{
					$commentlist[$i]['adddatetime'] = date("M d - h:i A",$commentlist[$i]['addtime']);
				}
				$uinfo = $this->findcommenthead($commentlist[$i]['userid'],$commentlist[$i]['cate']);
				if($uinfo){
					$commentlist[$i]['uheadimg'] = $uinfo['headimg'];
				}else{
					$commentlist[$i]['uheadimg'] = "";
				}
				
				$zanyn = $this->findcommenthistory($commentlist[$i]['id']);
				if($zanyn){
					$commentlist[$i]['zanyn'] = 1;
				}else{
					$commentlist[$i]['zanyn'] = 0;
				}
			}
		}
		echo json_encode($commentlist);
	}
	//点赞
	public function addlike(){
		$where['id'] = $_POST['id'];
		$comment = M("comment");
		if($this->findcommenthistory($_POST['id'])){
			$this->delcommenthistory($_POST['id']);
			$rs = $comment->where($where)->setDec("likes");
			if($rs){
				echo 2;
			}else{
				echo 0;
			}
		}else{ 
			$this->addcommenthistory($_POST['id']);
			$rs = $comment->where($where)->setInc("likes");
			if($rs){
				echo 1;
			}else{
				echo 0;
			}
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
	public function addcommenthistory($commentid){
		$data['commentid'] = $commentid;
		$commenthistory = M("commenthistory");
		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==1){
			$data['userid'] = $_SESSION['eladevp']['userid'];
			$data['cate'] = 1;
			$rs = $commenthistory->add($data);
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==2){
			$data['userid'] = $_SESSION['eladevp']['rcuid'];
			$data['cate'] = 2;
			$rs = $commenthistory->add($data);
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==3){
			$data['userid'] = $_SESSION['eladevp']['githubuid'];
			$data['cate'] = 3;
			$rs = $commenthistory->add($data);
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==4){
			$data['userid'] = $_SESSION['eladevp']['wechatuid'];
			$data['cate'] = 4;
			$rs = $commenthistory->add($data);
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==5){
			$data['userid'] = $_SESSION['eladevp']['diduid'];
			$data['cate'] = 5;
			$rs = $commenthistory->add($data);
		}
		if($rs){
			return 1;
		}else{
			return 0;
		}
	}
	public function delcommenthistory($commentid){
		$where['commentid'] = $commentid;
		$commenthistory = M("commenthistory");
		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==1){
			$where['userid'] = $_SESSION['eladevp']['userid'];
			$rs = $commenthistory->where($where)->delete();
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==2){
			$where['userid'] = $_SESSION['eladevp']['rcuid'];
			$rs = $commenthistory->where($where)->delete();
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==3){
			$where['userid'] = $_SESSION['eladevp']['githubuid'];
			$rs = $commenthistory->where($where)->delete();
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==4){
			$where['userid'] = $_SESSION['eladevp']['wechatuid'];
			$rs = $commenthistory->where($where)->delete();
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==5){
			$where['userid'] = $_SESSION['eladevp']['diduid'];
			$rs = $commenthistory->where($where)->delete();
		}
		if($rs){
			return 1;
		}else{
			return 0;
		}
	}
	//发布评论
	public function addcomment(){
		$data['contents'] = $_POST['contents'];
		$data['addtime'] = time();
/* 		if(isset($_SESSION ['eladevp']['userid']) && $_SESSION ['eladevp']['userid']!=""){
			$data['sender'] = $_SESSION ['eladevp']['userid'];
		}else{
			$data['sender'] = "匿名";
		} */
		
		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==1){
			$data['sender'] = $_SESSION['eladevp']['userid'];
			$data['cate'] = 1;
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==2){
			$data['sender'] = $_SESSION['eladevp']['rcuid'];
			$data['cate'] = 2;
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==3){
			$data['sender'] = $_SESSION['eladevp']['githubuid'];
			$data['cate'] = 3;
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==4){
			$data['sender'] = $_SESSION['eladevp']['wechatuid'];
			$data['cate'] = 4;
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==5){
			$data['sender'] = $_SESSION['eladevp']['diduid'];
			$data['cate'] = 5;
		}else{
			$data['sender'] = "匿名";
		}
		$data['githuburl'] = $_POST['githuburl'];
		if($_POST['commentid']!=""){
		$data['commentid'] = $_POST['commentid'];
		}
		$data['status'] = 0;
		$data['ip'] = $this->getip();
		$data['star'] = $_POST['star'];
		$comment = M("comment");
		$rs = $comment->add($data);
		if($rs){
			echo 1;
		}else{
			echo 0;
		}
	}
	///不同环境下获取真实的IP
	public function getip(){
		//判断服务器是否允许$_SERVER
		if(isset($_SERVER)){    
			if(isset($_SERVER[HTTP_X_FORWARDED_FOR])){
				$realip = $_SERVER[HTTP_X_FORWARDED_FOR];
			}elseif(isset($_SERVER[HTTP_CLIENT_IP])) {
				$realip = $_SERVER[HTTP_CLIENT_IP];
			}else{
				$realip = $_SERVER[REMOTE_ADDR];
			}
		}else{
			//不允许就使用getenv获取  
			if(getenv("HTTP_X_FORWARDED_FOR")){
				  $realip = getenv( "HTTP_X_FORWARDED_FOR");
			}elseif(getenv("HTTP_CLIENT_IP")) {
				  $realip = getenv("HTTP_CLIENT_IP");
			}else{
				  $realip = getenv("REMOTE_ADDR");
			}
		}

		return $realip;
	}
}
?>