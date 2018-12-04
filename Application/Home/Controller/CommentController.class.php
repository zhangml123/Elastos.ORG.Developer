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
			}
		}
		echo json_encode($commentlist);
	}
	//初始子评论列表
	public function subcommentlist($commentid){
		$where['commentid'] = $commentid;
		$comment = new CommentModel;
		$commentlist = $comment->commentlist($where,0,5);
		//var_dump($commentlist);
		return $commentlist;
	}
	//获取子评论列表
	public function getsubcommentlist(){
		$where['commentid'] = $_POST['commentid'];
		$comment = new CommentModel;
		$commentlist = $comment->commentlist($where,$_POST['startnum'],5);
		echo json_encode($commentlist);
	}
	//点赞
	public function addlike(){
		$where['id'] = $_POST['id'];
		$comment = M("comment");
		$rs = $comment->where($where)->setInc("likes");
		if($rs){
			echo 1;
		}else{
			echo 0;
		}
	}
	//发布评论
	public function addcomment(){
		$data['contents'] = $_POST['contents'];
		$data['addtime'] = time();
		if(isset($_SESSION ['eladevp']['userid']) && $_SESSION ['eladevp']['userid']!=""){
			$data['sender'] = $_SESSION ['eladevp']['userid'];
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