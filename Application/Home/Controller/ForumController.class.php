<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\ForumcommentModel;
class ForumController extends Controller {
	public function index(){
		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']!=""){
			$this->assign("logincate",$_SESSION ['eladevp']['logincate']);
			$this->assign("userheadimg",$_SESSION ['eladevp']['userheadimg']);
			$this->assign("profileinfo",$this->profileinfo());
		}else{
			$this->assign("logincate","");
		}
		if($_SESSION ['eladevp']['lang']=="cn"){
			$this->assign("langs",1);
		}else{
			$this->assign("langs",2);
		}
		$order = "id desc";
		if(isset($_GET['searchword']) && trim($_GET['searchword'],"")!=""){
			$where['title'] = array("like","%".$_GET['searchword']."%");
			$this->assign("searchword",$_GET['searchword']);
		}else{
			$this->assign("searchword","");
		}
		if(isset($_GET['cate']) && trim($_GET['cate'],"")!="" && trim($_GET['cate'],"")!=0){
			$where['cate'] = $_GET['cate'];
			$this->assign("cate",$_GET['cate']);
		}else{
			$this->assign("cate",0);
		}
		if(isset($_GET['sendtime']) && $_GET['sendtime']!=""){
			$order = $order.",addtime desc";
			$this->assign("sendtime",1);
		}else{
			$this->assign("sendtime","");
		}
		if(isset($_GET['puplarity']) && $_GET['puplarity']!=""){
			$order = $order.",views desc";
			$this->assign("puplarity",1);
		}else{
			$this->assign("puplarity","");
		}
		$isread = $this->getnoreadnotify();
		$this->assign("isread",$isread);
		$where['pid'] = 0;
		$this->assign("commentlist",$commentlist);
		$this->assign("forumlist",$this->forumlist($where,$order));
		$this->assign("pcount",$this->getforumcount($where));
		$this->assign("myforumlist",$this->forumlistofmy());
		$this->assign("curlang",$_SESSION ['eladevp']['lang']);
		$this->assign("curhost","https://".$_SERVER['HTTP_HOST']."/");
		$this->assign("catelist",$this->catelist());
		$this->display();
	}
	//详细
	public function forumdetail(){
		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']!=""){
			$this->assign("logincate",$_SESSION ['eladevp']['logincate']);
			$this->assign("userheadimg",$_SESSION ['eladevp']['userheadimg']);
			$this->assign("profileinfo",$this->profileinfo());
		}else{
			$this->assign("logincate","");
		}
		if($_SESSION ['eladevp']['lang']=="cn"){
			$this->assign("langs",1);
		}else{
			$this->assign("langs",2);
		}
		$where['id'] = $_GET['forumid'];
		$article = M("article");
		$articleinfo = $article->where($where)->find();
		if($articleinfo){
			if($_SESSION ['eladevp']['lang']=="cn"){
				$articleinfo['adddate'] = date("Y年m月d日 H:i",$articleinfo['addtime']);
			}else{
				$articleinfo['adddate'] = date("M d,Y h:i A",$articleinfo['addtime']);;
			}
			$wherea['userid'] = $articleinfo['sender'];
			$cuinfo = $this->userinfo($wherea);
			$articleinfo['nickname'] = $cuinfo['nickname'];
			$wherec['pid'] = $_GET['forumid'];
			$commentlist = $this->initcommentlist($wherec);
			$this->assign("commentlist",$commentlist);
			$this->assign("commentnum",count($commentlist));
			$abuseyn = $this->judgeabuse($_GET['forumid']);
			$this->assign("abuseyn",$abuseyn);
			$this->addforumviewnum($articleinfo['id']);
		}
		$isread = $this->getnoreadnotify();
		$this->assign("isread",$isread);
		$this->assign("articleinfo",$articleinfo);
		$this->assign("curlang",$_SESSION ['eladevp']['lang']);
		$this->assign("curhost","https://".$_SERVER['HTTP_HOST']."/");
		$this->display();
	}
	//更新浏览次数
	public function addforumviewnum($id){
		$article = M("article");
		$where['id'] = $id;
		$rs = $article->where($where)->setInc("views");
	}
	//获取初始评论列表
	public function initcommentlist($where){
		$forumcomment = new ForumcommentModel;
		$forumcommentlist = $forumcomment->commentlist($where,0,10);
		if($forumcommentlist){
			for($i=0;$i<count($forumcommentlist);$i++){
				$forumcommentlist[$i]['subcommentlist'] = $this->subcommentlist($forumcommentlist[$i]['id']);
				if($_SESSION ['eladevp']['lang']=="cn"){
					$forumcommentlist[$i]['adddatetime'] = date("Y-m-d H:i:s",$forumcommentlist[$i]['addtime']);
				}else{
					$forumcommentlist[$i]['adddatetime'] = date("M d - h:i A",$forumcommentlist[$i]['addtime']);
				}
				if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']!=""){
					$profileinfo=$this->profileinfo();
					if($profileinfo){
						$forumcommentlist[$i]['abuse'] = $this->judgeabuse($forumcommentlist[$i]['id']);
					}else{
						$forumcommentlist[$i]['abuse'] = 0;
					}
				}else{
					$forumcommentlist[$i]['abuse'] = 0;
				}
				if($this->findforumzan($forumcommentlist[$i]['id'])){
					$forumcommentlist[$i]['zanyn'] = 1;
				}else{
					$forumcommentlist[$i]['zanyn'] = 0;
				}
			}
		}
		return $forumcommentlist;
	}
	//初始子评论列表
	public function subcommentlist($commentid){
		$where['pid'] = $commentid;
		$forumcomment = new ForumcommentModel;
		$commentlist = $forumcomment->commentlist($where,0,5);
		if($commentlist){
			for($i=0;$i<count($commentlist);$i++){
				if($_SESSION ['eladevp']['lang']=="cn"){
					$commentlist[$i]['adddatetime'] = date("Y-m-d H:i:s",$commentlist[$i]['addtime']);
				}else{
					$commentlist[$i]['adddatetime'] = date("M d - h:i A",$commentlist[$i]['addtime']);
				}
				//$commentlist[$i]['abuse'] = $this->judgeabuse($commentlist[$i]['id']);
				if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']!=""){
					$profileinfo=$this->profileinfo();
					if($profileinfo){
						$commentlist[$i]['abuse'] = $this->judgeabuse($commentlist[$i]['id']);
					}else{
						$commentlist[$i]['abuse'] = 0;
					}
				}else{
					$commentlist[$i]['abuse'] = 0;
				}
				
				if($this->findforumzan($commentlist[$i]['id'])){
					$commentlist[$i]['zanyn'] = 1;
				}else{
					$commentlist[$i]['zanyn'] = 0;
				}
			}
		}
		return $commentlist;
	}
	//获取初始评论列表
/* 	public function commentlistlimit(){
		$where['githuburl'] = $_POST['githuburl'];;
		$where['commentid'] = array('exp','is null');
		$start = $_POST['start'];
		$comment = new CommentModel;
		$commentlist = $comment->commentlist($where,$start,10);
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
	} */
	//新增评论内容
	public function addcomment(){
		$data['title'] = "";
		$data['contents'] = $_POST['commentconents'];
		$data['addtime'] = time();
		$data['updatetime'] = time();
		$data['views'] = 1;
		$data['likes'] = 1;
		$data['pid'] = $_POST['forumid'];
		$data['commentnum'] = 0;
		$data['sender'] = $_SESSION['eladevp']['userid'];
		$data['cate'] = $_POST['forumcate'];
		$article = M("article");
		$rs = $article->add($data);
		if($rs){
			echo 1;
		}else{
			echo 0;
		}
	}
	//加载更多评论
	public function morecommentlist(){
		$where['pid'] = $_POST['forumid'];
		$forumcomment = new ForumcommentModel;
		$commentlist = $forumcomment->commentlist($where,$_POST['startn'],10);
		if($commentlist){
			for($i=0;$i<count($commentlist);$i++){
				$commentlist[$i]['subcommentlist'] = $this->subcommentlist($commentlist[$i]['id']);
				if($_SESSION ['eladevp']['lang']=="cn"){
					$commentlist[$i]['adddatetime'] = date("Y-m-d H:i:s",$commentlist[$i]['addtime']);
				}else{
					$commentlist[$i]['adddatetime'] = date("M d - h:i A",$commentlist[$i]['addtime']);
				}
				
				//$commentlist[$i]['abuse'] = $this->judgeabuse($commentlist[$i]['id']);
				if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']!=""){
					$profileinfo=$this->profileinfo();
					if($profileinfo){
						$commentlist[$i]['abuse'] = $this->judgeabuse($commentlist[$i]['id']);
					}else{
						$commentlist[$i]['abuse'] = 0;
					}
				}else{
					$commentlist[$i]['abuse'] = 0;
				}
				if($this->findforumzan($forumcommentlist[$i]['id'])){
					$forumcommentlist[$i]['zanyn'] = 1;
				}else{
					$forumcommentlist[$i]['zanyn'] = 0;
				}
			}
			echo json_encode($commentlist);
		}else{
			echo 0;
		}
	}
	//获取子评论列表
	public function moresubcommentlist(){
		$where['pid'] = $_POST['curcommentid'];
		$forumcomment = new ForumcommentModel;
		$commentlist = $forumcomment->commentlist($where,$_POST['startn'],10);
		if($commentlist){
			for($i=0;$i<count($commentlist);$i++){
				$commentlist[$i]['subcommentlist'] = $this->subcommentlist($commentlist[$i]['id']);
				if($_SESSION ['eladevp']['lang']=="cn"){
					$commentlist[$i]['adddatetime'] = date("Y-m-d H:i:s",$commentlist[$i]['addtime']);
				}else{
					$commentlist[$i]['adddatetime'] = date("M d - h:i A",$commentlist[$i]['addtime']);
				}
				//$commentlist[$i]['abuse'] = $this->judgeabuse($commentlist[$i]['id']);
				if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']!=""){
					$profileinfo=$this->profileinfo();
					if($profileinfo){
						$commentlist[$i]['abuse'] = $this->judgeabuse($commentlist[$i]['id']);
					}else{
						$commentlist[$i]['abuse'] = 0;
					}
				}else{
					$commentlist[$i]['abuse'] = 0;
				}
				if($this->findforumzan($commentlist[$i]['id'])){
					$commentlist[$i]['zanyn'] = 1;
				}else{
					$commentlist[$i]['zanyn'] = 0;
				}
			}
			echo json_encode($commentlist);
		}else{
			echo 0;
		}
	}
	//获取分类
	public function catelist(){
		$category = M("category");
		$catelist = $category->select();
		return $catelist;
	}
	//获取当前用户的主题列表
	public function forumlistofmy(){
		$where['sender'] = $_SESSION ['eladevp']['userid'];
		$article = M("article");
		$rslist = $article->where($where)->order("addtime desc")->limit("0,10")->select();
		if($rslist){
			for($i=0;$i<count($rslist);$i++){
				$rslist[$i]['title'] = mb_substr($rslist[$i]['title'],0,12,'utf-8');
			}
		}	
		return $rslist;
	}
	//获取当前用户的主题列表
	public function forumlistofmytopic(){
		$where['sender'] = $_SESSION ['eladevp']['userid'];
		$article = M("article");
		$rslist = $article->where($where)->order("addtime desc")->limit("0,10")->select();
		if($rslist){
			for($i=0;$i<count($rslist);$i++){
				$rslist[$i]['title'] = mb_substr($rslist[$i]['title'],0,20,'utf-8');
			}	
		}	
		echo json_encode($rslist);
	}
	//获取当前用户的参与评论的主题
	public function forumlistofmycomment(){
		$where['id'] = array("in",$this->myforumcomment());
		$where['pid'] = 0;
		$article = M("article");
		$rslist = $article->where($where)->order("addtime desc")->select();
		if($rslist){
			for($i=0;$i<count($rslist);$i++){
				$rslist[$i]['title'] = mb_substr($rslist[$i]['title'],0,20,'utf-8');
			}	
		}	
		echo json_encode($rslist);
	}
	//我评论的主题
	public function myforumcomment(){
		$where['sender'] = $_SESSION ['eladevp']['userid'];
		$where['pid'] = array("NEQ",0);
		$article = M("article");
		$rslist = $article->where($where)->getField("pid");
		return $rslist;
	}
	//获取关注的主题
	public function forumlistofmyfowlled(){
		$where['id'] = array("in",$this->followedforum());
		$article = M("article");
		$rslist = $article->where($where)->order("addtime desc")->limit("0,10")->select();
		if($rslist){
			for($i=0;$i<count($rslist);$i++){
				$rslist[$i]['title'] = mb_substr($rslist[$i]['title'],0,20,'utf-8');
			}	
		}
		return $rslist;
	}
	//获取指定主题的ID的关注
	public function followedforum(){
		$where['followeduserid'] = $_SESSION ['eladevp']['userid'];
		$articlefollowed = M("articlefollowed");
		$articlefollowedlist = $articlefollowed->where($where)->getField("articleid");
		return $articlefollowedlist;
	}
	//获取论坛内容列表
	public function forumlist($where,$order){
		$article = M("article");
		$rslist = $article->where($where)->order($order)->limit("0,10")->select();
		if($rslist){
			if($_SESSION ['eladevp']['lang']=="cn"){
				for($i=0;$i<count($rslist);$i++){
					$rslist[$i]['adddate'] = date("Y年m月d日 H:i",$rslist[$i]['addtime']);
					$wherea['userid'] = $rslist[$i]['sender'];
					$cuinfo = $this->userinfo($wherea);
					$rslist[$i]['nickname'] = $cuinfo['nickname'];
				}
			}else{
				for($i=0;$i<count($rslist);$i++){
					$rslist[$i]['adddate'] = date("M d,Y h:i A",$rslist[$i]['addtime']);
					$wherea['userid'] = $rslist[$i]['sender'];
					$cuinfo = $this->userinfo($wherea);
					$rslist[$i]['nickname'] = $cuinfo['nickname'];
				}
			}
		}
		$count = $article->where($where)->count();
		if($count!=0){
			$pcount = ceil($count/10);
		}else{
			$pcount = 0;
		}
		return $rslist;
	}
	//获取论坛内容列表
	public function forumlistjson(){
		$where['pid'] = 0;
		$order = "id desc";
		if(isset($_POST['searchword']) && trim($_POST['searchword'],"")!=""){
			$where['title'] = array("like","%".$_POST['searchword']."%");
		}
		if(isset($_POST['cate']) && trim($_POST['cate'],"")!="" && trim($_POST['cate'],"")!=0){
			$where['cate'] = $_POST['cate'];
		}
		if(isset($_POST['sendtime']) && $_POST['sendtime']!=""){
			$order = $order.",addtime desc";
		}
		if(isset($_POST['puplarity']) && $_POST['puplarity']!=""){
			$order = $order.",views desc";
		}
		$curp = $_POST['curp'];
		$startnum = ($curp - 1)*10;
		$article = M("article");
		$rslist = $article->where($where)->order($order)->limit($startnum.",10")->select();
		if($rslist){
			if($_SESSION ['eladevp']['lang']=="cn"){
				for($i=0;$i<count($rslist);$i++){
					$rslist[$i]['adddate'] = date("Y年m月d日 H:i",$rslist[$i]['addtime']);
					$wherea['userid'] = $rslist[$i]['sender'];
					$cuinfo = $this->userinfo($wherea);
					$rslist[$i]['nickname'] = $cuinfo['nickname'];
					$rslist[$i]['contents'] = mb_substr($rslist[$i]['contents'],0,150,'utf-8');
				}
			}else{
				for($i=0;$i<count($rslist);$i++){
					$rslist[$i]['adddate'] = date("M d,Y h:i A",$rslist[$i]['addtime']);
					$wherea['userid'] = $rslist[$i]['sender'];
					$cuinfo = $this->userinfo($wherea);
					$rslist[$i]['nickname'] = $cuinfo['nickname'];
					$rslist[$i]['contents'] = mb_substr($rslist[$i]['contents'],0,150,'utf-8');
				}
			}
		}
		
		$count = $article->where($where)->count();
		if($count!=0){
			$pcount = ceil($count/10);
		}else{
			$pcount = 0;
		}
		echo json_encode($rslist);
	}
	//指定条件下的主题总数
	public function getforumcount($where){
		$article = M("article");
		$count = $article->where($where)->count();
		if($count!=0){
			$pcount = ceil($count/10);
		}else{
			$pcount = 0;
		}
		return $pcount;
	}
	//发布
	public function addforum(){
		$data['title'] = $_POST['forumtitle'];
		$data['contents'] = $_POST['forumcontents'];
		$data['addtime'] = time();
		$data['updatetime'] = time();
		$data['views'] = 1;
		$data['likes'] = 1;
		$data['pid'] = 0;
		$data['commentnum'] = 0;
		$data['sender'] = $_SESSION['eladevp']['userid'];
		$data['cate'] = $_POST['forumcate'];
		$article = M("article");
		$rs = $article->add($data);
		if($rs){
			echo 1;
		}else{
			echo 0;
		}
	}
	//发布评论
	public function addforumcomment(){
		$data['title'] = "评论";
		$data['contents'] = $_POST['contents'];
		$data['addtime'] = time();
		$data['updatetime'] = time();
		$data['views'] = 1;
		$data['likes'] = 1;
		$data['pid'] = $_POST['pid'];
		$data['commentnum'] = 0;
		$data['sender'] = $_SESSION['eladevp']['userid'];
		$data['cate'] = 0;
		$article = M("article");
		$rs = $article->add($data);
		if($rs){
			$this->addforumcommentnum($_POST['pid']);
			echo 1;
		}else{
			echo 0;
		}
	}
	//更新评价次数
	public function addforumcommentnum($id){
		$article = M("article");
		$where['id'] = $id;
		$rs = $article->where($where)->setInc("commentnum");
		if($rs){
			echo 1;
		}else{
			echo 0;
		}
	}
	//新增赞
	public function updateforumzan(){
		$where['id'] = $_POST['id'];
		$article = M("article");
		if($this->findforumzan($_POST['id'])){
			$this->delforumzan($_POST['id']);
			$rs = $article->where($where)->setDec("likes");
			if($rs){
				echo 2;
			}else{
				echo 0;
			}
		}else{ 
			$this->addforumzan($_POST['id']);
			$rs = $article->where($where)->setInc("likes");
			if($rs){
				echo 1;
			}else{
				echo 0;
			}
		}
		
	}
	//新增举报
	public function addabuse(){
		$articleid = $_POST['articleid'];
		$where['userid'] = $_SESSION['eladevp']['userid'];
		$where['articleid'] = $articleid;
		$articleabuse = M("articleabuse");
		$rs = $articleabuse->where($where)->find();
		if($rs){
			echo 1;
		}else{
			$data['articleid'] = $articleid;
			$data['userid'] = $_SESSION['eladevp']['userid'];
			$data['addtime'] = time();
			$rsa = $articleabuse->add($data);
			if($rsa){
				echo 1;
			}else{
				echo 0;
			}
		}
	}
	//获取是否是赞过了
	public function addforumzan($articleid){
		$data['sender'] = $_SESSION['eladevp']['userid'];
		$data['articleid'] = $articleid;
		$forumzan = M("forumzan");
		$rs = $forumzan->add($data);
		return $rs;
	}
	//获取是否是赞过了
	public function findforumzan($articleid){
		$where['sender'] = $_SESSION['eladevp']['userid'];
		$where['articleid'] = $articleid;
		$forumzan = M("forumzan");
		$forumzaninfo = $forumzan->where($where)->find();
		return $forumzaninfo;
	}
	//删除赞过了的
	public function delforumzan($articleid){
		$where['sender'] = $_SESSION['eladevp']['userid'];
		$where['articleid'] = $articleid;
		$forumzan = M("forumzan");
		$rs = $forumzan->where($where)->delete();
		return $rs;
	}
	//获取当前个人信息功能
	public function profileinfo(){
		$where['userid'] = $_SESSION['eladevp']['userid'];
		$user = M("user");
		$userinfo = $user->where($where)->find();
		return $userinfo;
	}
	//获取当前注册用户信息功能
	public function userinfo($where){
		$user = M("user");
		$uinfo = $user->where($where)->find();
		return $uinfo;
	}
  //获取当前消息是否读取
  public function getnoreadnotify(){
	  $where['ishomepage'] = 1;
	  $where['draft'] = 0;
	  $where['publishtime'] = array("ELT",time());
	  $where['edittime'] = array("EGT",strtotime("-3 day"));
	  $notice = M("notice");
	  $noticeinfo = $notice->where($where)->order("id desc")->find();
	  if($noticeinfo){
		  if(isset($_COOKIE['readnoticeifyid']) && $_COOKIE['readnoticeifyid']==$noticeinfo['id']){
			  return 0;
		  }else{
			  return $noticeinfo;
		  }
	  }else{
		  return 0;
	  }
  }
  //判断指定的论坛内容是否被举报
  public function judgeabuse($id){
	  $article = M("article");
	  $articleabuse = M("articleabuse");
	  $wherea['id'] = $id;
	  $rsa = $article->where($wherea)->find();
	  if($rsa){
		$whereb['articleid'] = $id;
		$rsb = $articleabuse->where($whereb)->find();  
		if($rsb){
			return 1;
		}else{
			return 0;
		}
	  }else{
		return 0;
	  }
  }
  //删除论坛内容
  public function delarticle(){
	  $where['id'] = $_POST['forumcommentid'];
	  $article = M("article");
	  $rs = $article->where($where)->delete();
	  if($rs){
		  echo 1;
	  }else{
		  echo 0;
	  }
  }
  
}
?>