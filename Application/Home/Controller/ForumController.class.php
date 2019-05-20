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
		$order = "pintotop desc,pintime desc,";
		if(isset($_GET['searchword']) && trim($_GET['searchword'],"")!=""){
			$wheres['title'] = array("like","%".$_GET['searchword']."%");
			$wheres['contents'] = array("like","%".$_GET['searchword']."%");
		    $wheres['_logic'] = 'or';
		    $where['_complex'] = $wheres;
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
			if($_GET['sendtime']=="1"){
				$order = $order."addtime desc,";
			}else{
				$order = $order."addtime asc,";
			}
			$this->assign("sendtime",$_GET['sendtime']);
		}else{
			$this->assign("sendtime","");
		}
		if(isset($_GET['puplarity']) && $_GET['puplarity']!=""){
			if($_GET['puplarity']=="1"){
				$order = $order."views desc,";
			}else{
				$order = $order."views asc,";
			}
			$this->assign("puplarity",$_GET['puplarity']);
		}else{
			$this->assign("puplarity","");
		}
		if($order==""){
			$order = "id desc,";
		}
		$isread = $this->getnoreadnotify();
		$this->assign("isread",$isread);
		$where['pid'] = 0;
		$this->assign("commentlist",$commentlist);
		$this->assign("forumlist",$this->forumlist($where,substr($order,0,(strlen($order)-1))));
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
		if(isset($_GET['psa']) && $_GET['psa']!=""){
			$this->assign("psa","1");
		}else{
			$this->assign("psa","");
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
			if(mb_strlen($articleinfo['title'],"utf-8")>21){
				$articleinfo['nav_title'] = mb_substr($articleinfo['title'],0,20,'utf-8')."...";
			}else{
				$articleinfo['nav_title'] = $articleinfo['title'];
			}
			$articleinfo['code_contents'] = strip_tags($articleinfo['contents']);
			$wherea['userid'] = $articleinfo['sender'];
			$cuinfo = $this->userinfo($wherea);
			$articleinfo['nickname'] = $cuinfo['nickname'];
			
			
			if($cuinfo['nickname']==""){
				if($cuinfo['subucate']=="1"){
					if(strlen($cuinfo['userid'])>11){
						$articleinfo['nickname'] = substr($cuinfo['userid'],0,4)."...".substr($cuinfo['userid'],(strlen($cuinfo['userid'])-6),6);
					}else{
						$articleinfo['nickname'] = $cuinfo['userid'];
					}
				}elseif($cuinfo['subucate']=="2"){
					if(strlen($cuinfo['rcuid'])>11){
						$articleinfo['nickname'] = substr($cuinfo['rcuid'],0,4)."...".substr($cuinfo['rcuid'],(strlen($cuinfo['rcuid'])-6),6);
					}else{
						$articleinfo['nickname'] = $cuinfo['rcuid'];
					}
				}elseif($cuinfo['subucate']=="3"){
					if(strlen($cuinfo['githubuid'])>11){
						$articleinfo['nickname'] = substr($cuinfo['githubuid'],0,4)."...".substr($cuinfo['githubuid'],(strlen($cuinfo['githubuid'])-6),6);
					}else{
						$articleinfo['nickname'] = $cuinfo['githubuid'];
					}
				}elseif($cuinfo['subucate']=="4"){
					if(strlen($cuinfo['wechatuid'])>11){
						$articleinfo['nickname'] = substr($cuinfo['wechatuid'],0,4)."...".substr($cuinfo['wechatuid'],(strlen($cuinfo['wechatuid'])-6),6);
					}else{
						$articleinfo['nickname'] = $cuinfo['wechatuid'];
					}
				}elseif($cuinfo['subucate']=="5"){
					if(strlen($cuinfo['didid'])>11){
						$articleinfo['nickname'] = substr($cuinfo['didid'],0,4)."...".substr($cuinfo['didid'],(strlen($cuinfo['didid'])-6),6);
					}else{
						$articleinfo['nickname'] = $cuinfo['didid'];
					}
				}else{
					$articleinfo['nickname'] = "";
				}
			}else{
				if(strlen($cuinfo['userid'])>11){
					$articleinfo['nickname'] = substr($cuinfo['nickname'],0,12)."...";
				}
			}
			
			
			
			
			$wherec['pid'] = $_GET['forumid'];
			$commentlist = $this->initcommentlist($wherec);
			$this->assign("commentlist",$commentlist);
			$this->assign("commentnum",count($commentlist));
			$abuseyn = $this->judgeabuse($_GET['forumid']);
			$this->assign("abuseyn",$abuseyn);
			$this->addforumviewnum($articleinfo['id']);
		}
		$this->assign("voteno",$this->voteno($articleinfo['id']));
		$isread = $this->getnoreadnotify();
		$this->assign("isread",$isread);
		$this->assign("articleinfo",$articleinfo);
		$this->assign("curlang",$_SESSION ['eladevp']['lang']);
		$this->assign("catelist",$this->catelist());
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
				
			$wherea['userid'] = $forumcommentlist[$i]['sender'];
			$cuinfo = $this->userinfo($wherea);
			$forumcommentlist[$i]['nickname'] = $cuinfo['nickname'];
			
			
			if($cuinfo['nickname']==""){
				if($cuinfo['subucate']=="1"){
					if(strlen($cuinfo['userid'])>11){
						$forumcommentlist[$i]['nickname'] = substr($cuinfo['userid'],0,4)."...".substr($cuinfo['userid'],(strlen($cuinfo['userid'])-6),6);
					}else{
						$forumcommentlist[$i]['nickname'] = $cuinfo['userid'];
					}
				}elseif($cuinfo['subucate']=="2"){
					if(strlen($cuinfo['rcuid'])>11){
						$forumcommentlist[$i]['nickname'] = substr($cuinfo['rcuid'],0,4)."...".substr($cuinfo['rcuid'],(strlen($cuinfo['rcuid'])-6),6);
					}else{
						$forumcommentlist[$i]['nickname'] = $cuinfo['rcuid'];
					}
				}elseif($cuinfo['subucate']=="3"){
					if(strlen($cuinfo['githubuid'])>11){
						$forumcommentlist[$i]['nickname'] = substr($cuinfo['githubuid'],0,4)."...".substr($cuinfo['githubuid'],(strlen($cuinfo['githubuid'])-6),6);
					}else{
						$forumcommentlist[$i]['nickname'] = $cuinfo['githubuid'];
					}
				}elseif($cuinfo['subucate']=="4"){
					if(strlen($cuinfo['wechatuid'])>11){
						$forumcommentlist[$i]['nickname'] = substr($cuinfo['wechatuid'],0,4)."...".substr($cuinfo['wechatuid'],(strlen($cuinfo['wechatuid'])-6),6);
					}else{
						$forumcommentlist[$i]['nickname'] = $cuinfo['wechatuid'];
					}
				}elseif($cuinfo['subucate']=="5"){
					if(strlen($cuinfo['didid'])>11){
						$forumcommentlist[$i]['nickname'] = substr($cuinfo['didid'],0,4)."...".substr($cuinfo['didid'],(strlen($cuinfo['didid'])-6),6);
					}else{
						$forumcommentlist[$i]['nickname'] = $cuinfo['didid'];
					}
				}else{
					$forumcommentlist[$i]['nickname'] = "";
				}
			}else{
				$forumcommentlist[$i]['nickname'] = $cuinfo['nickname'];
			}
				
				
				
				$forumcommentlist[$i]['subcommentlist'] = $this->subcommentlist($forumcommentlist[$i]['id']);
				if($_SESSION ['eladevp']['lang']=="cn"){
					$forumcommentlist[$i]['adddatetime'] = date("Y-m-d H:i:s",$forumcommentlist[$i]['addtime']);
				}else{
					$forumcommentlist[$i]['adddatetime'] = date("M d Y h:i A",$forumcommentlist[$i]['addtime']);
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
				
				$wherea['userid'] = $commentlist[$i]['sender'];
			$cuinfo = $this->userinfo($wherea);
			$commentlist[$i]['nickname'] = $cuinfo['nickname'];
			
			
			if($cuinfo['nickname']==""){
				if($cuinfo['subucate']=="1"){
					if(strlen($cuinfo['userid'])>11){
						$commentlist[$i]['nickname'] = substr($cuinfo['userid'],0,4)."...".substr($cuinfo['userid'],(strlen($cuinfo['userid'])-6),6);
					}else{
						$commentlist[$i]['nickname'] = $cuinfo['userid'];
					}
				}elseif($cuinfo['subucate']=="2"){
					if(strlen($cuinfo['rcuid'])>11){
						$commentlist[$i]['nickname'] = substr($cuinfo['rcuid'],0,4)."...".substr($cuinfo['rcuid'],(strlen($cuinfo['rcuid'])-6),6);
					}else{
						$commentlist[$i]['nickname'] = $cuinfo['rcuid'];
					}
				}elseif($cuinfo['subucate']=="3"){
					if(strlen($cuinfo['githubuid'])>11){
						$commentlist[$i]['nickname'] = substr($cuinfo['githubuid'],0,4)."...".substr($cuinfo['githubuid'],(strlen($cuinfo['githubuid'])-6),6);
					}else{
						$commentlist[$i]['nickname'] = $cuinfo['githubuid'];
					}
				}elseif($cuinfo['subucate']=="4"){
					if(strlen($cuinfo['wechatuid'])>11){
						$commentlist[$i]['nickname'] = substr($cuinfo['wechatuid'],0,4)."...".substr($cuinfo['wechatuid'],(strlen($cuinfo['wechatuid'])-6),6);
					}else{
						$commentlist[$i]['nickname'] = $cuinfo['wechatuid'];
					}
				}elseif($cuinfo['subucate']=="5"){
					if(strlen($cuinfo['didid'])>11){
						$commentlist[$i]['nickname'] = substr($cuinfo['didid'],0,4)."...".substr($cuinfo['didid'],(strlen($cuinfo['didid'])-6),6);
					}else{
						$commentlist[$i]['nickname'] = $cuinfo['didid'];
					}
				}else{
					$commentlist[$i]['nickname'] = "";
				}
			}else{
				$commentlist[$i]['nickname'] = $cuinfo['nickname'];
			}
				
				
				if($_SESSION ['eladevp']['lang']=="cn"){
					$commentlist[$i]['adddatetime'] = date("Y-m-d H:i:s",$commentlist[$i]['addtime']);
				}else{
					$commentlist[$i]['adddatetime'] = date("M d Y h:i A",$commentlist[$i]['addtime']);
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
		$data['likes'] = 0;
		$data['pid'] = $_POST['forumid'];
		$data['commentnum'] = 0;
		if(isset($_SESSION['eladevp']['userid']) && $_SESSION['eladevp']['userid']!=""){
			$data['sender'] = $_SESSION['eladevp']['userid'];
		}else{
			$data['sender'] = "匿名";
		}
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
				
				
				
					
				$wherea['userid'] = $commentlist[$i]['sender'];
			$cuinfo = $this->userinfo($wherea);
			$commentlist[$i]['nickname'] = $cuinfo['nickname'];
			
			
			if($cuinfo['nickname']==""){
				if($cuinfo['subucate']=="1"){
					if(strlen($cuinfo['userid'])>11){
						$commentlist[$i]['nickname'] = substr($cuinfo['userid'],0,4)."...".substr($cuinfo['userid'],(strlen($cuinfo['userid'])-6),6);
					}else{
						$commentlist[$i]['nickname'] = $cuinfo['userid'];
					}
				}elseif($cuinfo['subucate']=="2"){
					if(strlen($cuinfo['rcuid'])>11){
						$commentlist[$i]['nickname'] = substr($cuinfo['rcuid'],0,4)."...".substr($cuinfo['rcuid'],(strlen($cuinfo['rcuid'])-6),6);
					}else{
						$commentlist[$i]['nickname'] = $cuinfo['rcuid'];
					}
				}elseif($cuinfo['subucate']=="3"){
					if(strlen($cuinfo['githubuid'])>11){
						$commentlist[$i]['nickname'] = substr($cuinfo['githubuid'],0,4)."...".substr($cuinfo['githubuid'],(strlen($cuinfo['githubuid'])-6),6);
					}else{
						$commentlist[$i]['nickname'] = $cuinfo['githubuid'];
					}
				}elseif($cuinfo['subucate']=="4"){
					if(strlen($cuinfo['wechatuid'])>11){
						$commentlist[$i]['nickname'] = substr($cuinfo['wechatuid'],0,4)."...".substr($cuinfo['wechatuid'],(strlen($cuinfo['wechatuid'])-6),6);
					}else{
						$commentlist[$i]['nickname'] = $cuinfo['wechatuid'];
					}
				}elseif($cuinfo['subucate']=="5"){
					if(strlen($cuinfo['didid'])>11){
						$commentlist[$i]['nickname'] = substr($cuinfo['didid'],0,4)."...".substr($cuinfo['didid'],(strlen($cuinfo['didid'])-6),6);
					}else{
						$commentlist[$i]['nickname'] = $cuinfo['didid'];
					}
				}else{
					$commentlist[$i]['nickname'] = "";
				}
			}else{
				$commentlist[$i]['nickname'] = $cuinfo['nickname'];
			}
				
				
				
				$commentlist[$i]['subcommentlist'] = $this->subcommentlist($commentlist[$i]['id']);
				if($_SESSION ['eladevp']['lang']=="cn"){
					$commentlist[$i]['adddatetime'] = date("Y-m-d H:i:s",$commentlist[$i]['addtime']);
				}else{
					$commentlist[$i]['adddatetime'] = date("M d Y h:i A",$commentlist[$i]['addtime']);
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
	//获取子评论列表
	public function moresubcommentlist(){
		$where['pid'] = $_POST['curcommentid'];
		$forumcomment = new ForumcommentModel;
		$commentlist = $forumcomment->commentlist($where,$_POST['startn'],10);
		if($commentlist){
			for($i=0;$i<count($commentlist);$i++){
				
					
				$wherea['userid'] = $commentlist[$i]['sender'];
			$cuinfo = $this->userinfo($wherea);
			$commentlist[$i]['nickname'] = $cuinfo['nickname'];
			
			
			if($cuinfo['nickname']==""){
				if($cuinfo['subucate']=="1"){
					if(strlen($cuinfo['userid'])>11){
						$commentlist[$i]['nickname'] = substr($cuinfo['userid'],0,4)."...".substr($cuinfo['userid'],(strlen($cuinfo['userid'])-6),6);
					}else{
						$commentlist[$i]['nickname'] = $cuinfo['userid'];
					}
				}elseif($cuinfo['subucate']=="2"){
					if(strlen($cuinfo['rcuid'])>11){
						$commentlist[$i]['nickname'] = substr($cuinfo['rcuid'],0,4)."...".substr($cuinfo['rcuid'],(strlen($cuinfo['rcuid'])-6),6);
					}else{
						$commentlist[$i]['nickname'] = $cuinfo['rcuid'];
					}
				}elseif($cuinfo['subucate']=="3"){
					if(strlen($cuinfo['githubuid'])>11){
						$commentlist[$i]['nickname'] = substr($cuinfo['githubuid'],0,4)."...".substr($cuinfo['githubuid'],(strlen($cuinfo['githubuid'])-6),6);
					}else{
						$commentlist[$i]['nickname'] = $cuinfo['githubuid'];
					}
				}elseif($cuinfo['subucate']=="4"){
					if(strlen($cuinfo['wechatuid'])>11){
						$commentlist[$i]['nickname'] = substr($cuinfo['wechatuid'],0,4)."...".substr($cuinfo['wechatuid'],(strlen($cuinfo['wechatuid'])-6),6);
					}else{
						$commentlist[$i]['nickname'] = $cuinfo['wechatuid'];
					}
				}elseif($cuinfo['subucate']=="5"){
					if(strlen($cuinfo['didid'])>11){
						$commentlist[$i]['nickname'] = substr($cuinfo['didid'],0,4)."...".substr($cuinfo['didid'],(strlen($cuinfo['didid'])-6),6);
					}else{
						$commentlist[$i]['nickname'] = $cuinfo['didid'];
					}
				}else{
					$commentlist[$i]['nickname'] = "";
				}
			}else{
				$commentlist[$i]['nickname'] = $cuinfo['nickname'];
			}
				
				
				
				$commentlist[$i]['subcommentlist'] = $this->subcommentlist($commentlist[$i]['id']);
				if($_SESSION ['eladevp']['lang']=="cn"){
					$commentlist[$i]['adddatetime'] = date("Y-m-d H:i:s",$commentlist[$i]['addtime']);
				}else{
					$commentlist[$i]['adddatetime'] = date("M d Y h:i A",$commentlist[$i]['addtime']);
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
		$where['status'] = 1;
		$catelist = $category->where($where)->order("sort desc")->select();
		return $catelist;
	}
	//获取当前用户的主题列表
	public function forumlistofmy(){
		$where['sender'] = $_SESSION ['eladevp']['userid'];
		$where['pid'] = 0;
		$article = M("article");
		$rslist = $article->where($where)->order("addtime desc")->limit("0,10")->select();
		if($rslist){
			for($i=0;$i<count($rslist);$i++){
				if(mb_strlen($rslist[$i]['contents'],"utf-8")>12){
					$rslist[$i]['title'] = mb_substr($rslist[$i]['title'],0,12,'utf-8')."...";
				}
			}
		}	
		return $rslist;
	}
	//获取当前用户的主题列表
	public function forumlistofmytopic(){
		$where['sender'] = $_SESSION ['eladevp']['userid'];
		$where['pid'] = 0;
		$article = M("article");
		$rslist = $article->where($where)->order("addtime desc")->limit("0,10")->select();
		if($rslist){
			for($i=0;$i<count($rslist);$i++){
				
				if(mb_strlen($rslist[$i]['contents'],"utf-8")>12){
					$rslist[$i]['title'] = mb_substr($rslist[$i]['title'],0,12,'utf-8')."...";
				}
				
			}	
		}	
		echo json_encode($rslist);
	}
	//获取当前用户的参与评论的主题
	public function forumlistofmycomment(){
		//$where['id'] = array("in",$this->myforumcomment());
		$where['id'] =array("in", array_unique($this->myforumcomment()));
		$where['pid'] = 0;
		$article = M("article");
		$rslist = $article->where($where)->order("addtime desc")->select();
		if($rslist){
			for($i=0;$i<count($rslist);$i++){
				if(mb_strlen($rslist[$i]['contents'],"utf-8")>12){
					$rslist[$i]['title'] = mb_substr($rslist[$i]['title'],0,12,'utf-8')."...";
				}
			}	
		}	
		echo json_encode($rslist);
	}
	//我评论的主题
/* 	public function myforumcomment(){
		$where['sender'] = $_SESSION ['eladevp']['userid'];
		$where['pid'] = array("NEQ",0);
		$article = M("article");
		$rslist = $article->where($where)->getField("pid");
		return $rslist;
	} */
	
	
	//我评论的主题
	public function myforumcomment(){
		$where['sender'] = $_SESSION ['eladevp']['userid'];
		$where['pid'] = array("NEQ",0);
		$article = M("article");
		$rslist = $article->where($where)->select();
		$arra = array();
		if($rslist){
			for($i=0;$i<count($rslist);$i++){
				$wherea['id'] = $rslist[$i]['pid'];
				$rsinfo = $this->getforumdetail($wherea);
				if($rsinfo['title']!="评论"){
					$arra[$i] = $rslist[$i]['pid'];
				}else{
					$arra[$i] = $rsinfo['pid'];
				}
			}
		}
		return $arra;
	}
	//获取论坛详情
	public function getforumdetail($where){
		$article = M("article");
		$rsinfo = $article->where($where)->find();
		if($rsinfo){
			return $rsinfo;
		}else{
			return 0;
		}
	}
	
	//获取关注的主题
	public function forumlistofmyfowlled(){
		$where['id'] = array("in",$this->followedforum());
		$where['pid'] = 0;
		$article = M("article");
		$rslist = $article->where($where)->order("addtime desc")->limit("0,10")->select();
		if($rslist){
			for($i=0;$i<count($rslist);$i++){
				if(mb_strlen($rslist[$i]['contents'],"utf-8")>12){
					$rslist[$i]['title'] = mb_substr($rslist[$i]['title'],0,12,'utf-8')."...";
				}
			}	
		}
		echo json_encode($rslist);
	}
	//获取指定主题的ID的关注
	public function followedforum(){
		$where['followeduserid'] = $_SESSION ['eladevp']['userid'];
		$articlefollowed = M("articlefollowed");
		$articlefollowedlist = $articlefollowed->where($where)->getField("articleid",true);
		return $articlefollowedlist;
	}
	//获取论坛内容列表
	public function forumlist($where,$order){
		$article = M("article");
		$rslist = $article->where($where)->order($order)->limit("0,10")->select();
		if($rslist){
			if($_SESSION ['eladevp']['lang']=="cn"){
				for($i=0;$i<count($rslist);$i++){
					$wherecate['id'] = $rslist[$i]['cate'];
					$catedetail = $this->catedetail($wherecate);
					if(strlen($rslist[$i]['title'])>33){
						$rslist[$i]['title'] = mb_substr($rslist[$i]['title'],0,33,"utf-8")."...";
					}
					if(strlen(strip_tags($rslist[$i]['contents']))>110){
						$rslist[$i]['contents'] = mb_substr(strip_tags($rslist[$i]['contents']),0,105,"utf-8")."...";
					}
					$rslist[$i]['adddate'] = date("Y年m月d日 H:i",$rslist[$i]['addtime']);
					$rslist[$i]['updatedate'] = date("Y年m月d日 H:i",$rslist[$i]['updatetime']);
					$wherea['userid'] = $rslist[$i]['sender'];
					$cuinfo = $this->userinfo($wherea);
					
						if($cuinfo['nickname']==""){
							if($cuinfo['subucate']=="1"){
								if(strlen($cuinfo['userid'])>11){
									$rslist[$i]['nickname'] = substr($cuinfo['userid'],0,4)."...".substr($cuinfo['userid'],(strlen($cuinfo['userid'])-6),6);
								}else{
									$rslist[$i]['nickname'] = $cuinfo['userid'];
								}
							}elseif($cuinfo['subucate']=="2"){
								if(strlen($cuinfo['rcuid'])>11){
									$rslist[$i]['nickname'] = substr($cuinfo['rcuid'],0,4)."...".substr($cuinfo['rcuid'],(strlen($cuinfo['rcuid'])-6),6);
								}else{
									$rslist[$i]['nickname'] = $cuinfo['rcuid'];
								}
							}elseif($cuinfo['subucate']=="3"){
								if(strlen($cuinfo['githubuid'])>11){
									$rslist[$i]['nickname'] = substr($cuinfo['githubuid'],0,4)."...".substr($cuinfo['githubuid'],(strlen($cuinfo['githubuid'])-6),6);
								}else{
									$rslist[$i]['nickname'] = $cuinfo['githubuid'];
								}
							}elseif($cuinfo['subucate']=="4"){
								if(strlen($cuinfo['wechatuid'])>11){
									$rslist[$i]['nickname'] = substr($cuinfo['wechatuid'],0,4)."...".substr($cuinfo['wechatuid'],(strlen($cuinfo['wechatuid'])-6),6);
								}else{
									$rslist[$i]['nickname'] = $cuinfo['wechatuid'];
								}
							}elseif($cuinfo['subucate']=="5"){
								if(strlen($cuinfo['didid'])>11){
									$rslist[$i]['nickname'] = substr($cuinfo['didid'],0,4)."...".substr($cuinfo['didid'],(strlen($cuinfo['didid'])-6),6);
								}else{
									$rslist[$i]['nickname'] = $cuinfo['didid'];
								}
							}else{
								$rslist[$i]['nickname'] = "";
							}
						}else{
							//$rslist[$i]['nickname'] = $cuinfo['nickname'];
							if(strlen($cuinfo['userid'])>11){
								$rslist[$i]['nickname'] = substr($cuinfo['nickname'],0,12)."...";
							}
						}
					
					$rslist[$i]['catename'] = $catedetail['catename'];
					$rslist[$i]['abuseyn'] = $this->judgeabuse($rslist[$i]['id']);
					$rslist[$i]['abuse'] = $this->judgeabuseofuid($rslist[$i]['id']);
					$rslist[$i]['followed'] = $this->judgefollowofuid($rslist[$i]['id']);
				}
			}else{
				for($i=0;$i<count($rslist);$i++){
					$wherecate['id'] = $rslist[$i]['cate'];
					$catedetail = $this->catedetail($wherecate);
					$rslist[$i]['adddate'] = date("M d,Y h:i A",$rslist[$i]['addtime']);
					$rslist[$i]['updatedate'] = date("M d,Y h:i A",$rslist[$i]['updatetime']);
					$wherea['userid'] = $rslist[$i]['sender'];
					$cuinfo = $this->userinfo($wherea);
					//$rslist[$i]['nickname'] = $cuinfo['nickname'];
					if(strlen($rslist[$i]['title'])>40){
						$rslist[$i]['title'] = mb_substr($rslist[$i]['title'],0,39,"utf-8")."...";
					}
					if(strlen($rslist[$i]['contents'])>110){
						$rslist[$i]['contents'] = mb_substr($rslist[$i]['contents'],0,105,"utf-8")."...";
					}
					if($cuinfo['nickname']==""){
							if($cuinfo['subucate']=="1"){
								if(strlen($cuinfo['userid'])>11){
									$rslist[$i]['nickname'] = substr($cuinfo['userid'],0,4)."...".substr($cuinfo['userid'],(strlen($cuinfo['userid'])-6),6);
								}else{
									$rslist[$i]['nickname'] = $cuinfo['userid'];
								}
							}elseif($cuinfo['subucate']=="2"){
								if(strlen($cuinfo['rcuid'])>11){
									$rslist[$i]['nickname'] = substr($cuinfo['rcuid'],0,4)."...".substr($cuinfo['rcuid'],(strlen($cuinfo['rcuid'])-6),6);
								}else{
									$rslist[$i]['nickname'] = $cuinfo['rcuid'];
								}
							}elseif($cuinfo['subucate']=="3"){
								if(strlen($cuinfo['githubuid'])>11){
									$rslist[$i]['nickname'] = substr($cuinfo['githubuid'],0,4)."...".substr($cuinfo['githubuid'],(strlen($cuinfo['githubuid'])-6),6);
								}else{
									$rslist[$i]['nickname'] = $cuinfo['githubuid'];
								}
							}elseif($cuinfo['subucate']=="4"){
								if(strlen($cuinfo['wechatuid'])>11){
									$rslist[$i]['nickname'] = substr($cuinfo['wechatuid'],0,4)."...".substr($cuinfo['wechatuid'],(strlen($cuinfo['wechatuid'])-6),6);
								}else{
									$rslist[$i]['nickname'] = $cuinfo['wechatuid'];
								}
							}elseif($cuinfo['subucate']=="5"){
								if(strlen($cuinfo['didid'])>11){
									$rslist[$i]['nickname'] = substr($cuinfo['didid'],0,4)."...".substr($cuinfo['didid'],(strlen($cuinfo['didid'])-6),6);
								}else{
									$rslist[$i]['nickname'] = $cuinfo['didid'];
								}
							}else{
								$rslist[$i]['nickname'] = "";
							}
						}else{
							$rslist[$i]['nickname'] = $cuinfo['nickname'];
						}
					$rslist[$i]['catename'] = $catedetail['catenameen'];
					$rslist[$i]['abuseyn'] = $this->judgeabuse($rslist[$i]['id']);
					$rslist[$i]['abuse'] = $this->judgeabuseofuid($rslist[$i]['id']);
					$rslist[$i]['followed'] = $this->judgefollowofuid($rslist[$i]['id']);
				}
			}
		}
		$count = $article->where($where)->count();
		//var_dump($article->getlastsql());
		if($count!=0){
			$pcount = ceil($count/10);
		}else{
			$pcount = 0;
		}
		return $rslist;
	}
	//获取分类详细
	public function catedetail($where){
		$category = M("category");
		$rsinfo = $category->where($where)->find();
		//var_dump($category->getlastsql());
		if($rsinfo){
			return $rsinfo;
		}else{
		    return 0;
		}
	}
	//获取论坛内容列表
	public function forumlistjson(){
		$where['pid'] = 0;
		//$order = "";
		$order = "pintotop desc,pintime desc,";
		if(isset($_POST['searchword']) && trim($_POST['searchword'],"")!=""){
			//$where['title'] = array("like","%".$_POST['searchword']."%");
			$wheres['title'] = array("like","%".$_POST['searchword']."%");
			$wheres['contents'] = array("like","%".$_POST['searchword']."%");
		    $wheres['_logic'] = 'or';
		    $where['_complex'] = $wheres;
		}
		if(isset($_POST['cate']) && trim($_POST['cate'],"")!="" && trim($_POST['cate'],"")!=0){
			$where['cate'] = $_POST['cate'];
		}
		if(isset($_POST['sendtime']) && $_POST['sendtime']!=""){
			if($_POST['sendtime']=="1"){
				$order = $order."addtime desc,";
			}else{
				$order = $order."addtime asc,";
			}
			//$order = $order."addtime desc,";
		}
		if(isset($_POST['puplarity']) && $_POST['puplarity']!=""){
			//$order = $order."views desc,";
			if($_POST['puplarity']=="1"){
				$order = $order."views desc,";
			}else{
				$order = $order."views asc,";
			}
		}
		if($order==""){
			$order = "id desc,";
		}
		$curp = $_POST['curp'];
		$startnum = ($curp - 1)*10;
		$article = M("article");
		$rslist = $article->where($where)->order(substr($order,0,(strlen($order)-1)))->limit($startnum.",10")->select();
		if($rslist){
			if($_SESSION ['eladevp']['lang']=="cn"){
				for($i=0;$i<count($rslist);$i++){
					$wherea['userid'] = $rslist[$i]['sender'];
					$cuinfo = $this->userinfo($wherea);
					$wherecate['id'] = $rslist[$i]['cate'];
					$catedetail = $this->catedetail($wherecate);
					$rslist[$i]['adddate'] = date("Y年m月d日 H:i",$rslist[$i]['addtime']);
					$rslist[$i]['updatedate'] = date("Y年m月d日 H:i",$rslist[$i]['updatetime']);
					if(strlen($rslist[$i]['title'])>40){
						$rslist[$i]['title'] = mb_substr($rslist[$i]['title'],0,39,"utf-8")."...";
					}
					//$rslist[$i]['nickname'] = $cuinfo['nickname'];
					if($cuinfo['nickname']==""){
							if($cuinfo['subucate']=="1"){
								if(strlen($cuinfo['userid'])>11){
									$rslist[$i]['nickname'] = substr($cuinfo['userid'],0,4)."...".substr($cuinfo['userid'],(strlen($cuinfo['userid'])-6),6);
								}else{
									$rslist[$i]['nickname'] = $cuinfo['userid'];
								}
							}elseif($cuinfo['subucate']=="2"){
								if(strlen($cuinfo['rcuid'])>11){
									$rslist[$i]['nickname'] = substr($cuinfo['rcuid'],0,4)."...".substr($cuinfo['rcuid'],(strlen($cuinfo['rcuid'])-6),6);
								}else{
									$rslist[$i]['nickname'] = $cuinfo['rcuid'];
								}
							}elseif($cuinfo['subucate']=="3"){
								if(strlen($cuinfo['githubuid'])>11){
									$rslist[$i]['nickname'] = substr($cuinfo['githubuid'],0,4)."...".substr($cuinfo['githubuid'],(strlen($cuinfo['githubuid'])-6),6);
								}else{
									$rslist[$i]['nickname'] = $cuinfo['githubuid'];
								}
							}elseif($cuinfo['subucate']=="4"){
								if(strlen($cuinfo['wechatuid'])>11){
									$rslist[$i]['nickname'] = substr($cuinfo['wechatuid'],0,4)."...".substr($cuinfo['wechatuid'],(strlen($cuinfo['wechatuid'])-6),6);
								}else{
									$rslist[$i]['nickname'] = $cuinfo['wechatuid'];
								}
							}elseif($cuinfo['subucate']=="5"){
								if(strlen($cuinfo['didid'])>11){
									$rslist[$i]['nickname'] = substr($cuinfo['didid'],0,4)."...".substr($cuinfo['didid'],(strlen($cuinfo['didid'])-6),6);
								}else{
									$rslist[$i]['nickname'] = $cuinfo['didid'];
								}
							}else{
								$rslist[$i]['nickname'] = "";
							}
						}else{
							$rslist[$i]['nickname'] = $cuinfo['nickname'];
						}
					$rslist[$i]['catename'] = $catedetail['catename'];
					if(mb_strlen($rslist[$i]['contents'],"utf-8")>110){
						$rslist[$i]['contents'] = mb_substr($rslist[$i]['contents'],0,110,'utf-8')."...";
					}
					$rslist[$i]['abuseyn'] = $this->judgeabuse($rslist[$i]['id']);
					$rslist[$i]['abuse'] = $this->judgeabuseofuid($rslist[$i]['id']);
					$rslist[$i]['followed'] = $this->judgefollowofuid($rslist[$i]['id']);
				}
			}else{
				for($i=0;$i<count($rslist);$i++){
					$wherecate['id'] = $rslist[$i]['cate'];
					$catedetail = $this->catedetail($wherecate);
					$rslist[$i]['adddate'] = date("M d,Y h:i A",$rslist[$i]['addtime']);
					$rslist[$i]['updatedate'] = date("M d,Y h:i A",$rslist[$i]['updatetime']);
					$wherea['userid'] = $rslist[$i]['sender'];
					if(strlen($rslist[$i]['title'])>40){
						$rslist[$i]['title'] = mb_substr($rslist[$i]['title'],0,39,"utf-8")."...";
					}
					$cuinfo = $this->userinfo($wherea);
					//$rslist[$i]['nickname'] = $cuinfo['nickname'];
					if($cuinfo['nickname']==""){
							if($cuinfo['subucate']=="1"){
								if(strlen($cuinfo['userid'])>11){
									$rslist[$i]['nickname'] = substr($cuinfo['userid'],0,4)."...".substr($cuinfo['userid'],(strlen($cuinfo['userid'])-6),6);
								}else{
									$rslist[$i]['nickname'] = $cuinfo['userid'];
								}
							}elseif($cuinfo['subucate']=="2"){
								if(strlen($cuinfo['rcuid'])>11){
									$rslist[$i]['nickname'] = substr($cuinfo['rcuid'],0,4)."...".substr($cuinfo['rcuid'],(strlen($cuinfo['rcuid'])-6),6);
								}else{
									$rslist[$i]['nickname'] = $cuinfo['rcuid'];
								}
							}elseif($cuinfo['subucate']=="3"){
								if(strlen($cuinfo['githubuid'])>11){
									$rslist[$i]['nickname'] = substr($cuinfo['githubuid'],0,4)."...".substr($cuinfo['githubuid'],(strlen($cuinfo['githubuid'])-6),6);
								}else{
									$rslist[$i]['nickname'] = $cuinfo['githubuid'];
								}
							}elseif($cuinfo['subucate']=="4"){
								if(strlen($cuinfo['wechatuid'])>11){
									$rslist[$i]['nickname'] = substr($cuinfo['wechatuid'],0,4)."...".substr($cuinfo['wechatuid'],(strlen($cuinfo['wechatuid'])-6),6);
								}else{
									$rslist[$i]['nickname'] = $cuinfo['wechatuid'];
								}
							}elseif($cuinfo['subucate']=="5"){
								if(strlen($cuinfo['didid'])>11){
									$rslist[$i]['nickname'] = substr($cuinfo['didid'],0,4)."...".substr($cuinfo['didid'],(strlen($cuinfo['didid'])-6),6);
								}else{
									$rslist[$i]['nickname'] = $cuinfo['didid'];
								}
							}else{
								$rslist[$i]['nickname'] = "";
							}
						}else{
							$rslist[$i]['nickname'] = $cuinfo['nickname'];
						}
					$rslist[$i]['catename'] = $catedetail['catenameen'];
					
					//$rslist[$i]['contents'] = mb_substr($rslist[$i]['contents'],0,150,'utf-8');
					if(mb_strlen($rslist[$i]['contents'],"utf-8")>110){
						$rslist[$i]['contents'] = mb_substr($rslist[$i]['contents'],0,110,'utf-8')."...";
					}
					$rslist[$i]['abuseyn'] = $this->judgeabuse($rslist[$i]['id']);
					$rslist[$i]['abuse'] = $this->judgeabuseofuid($rslist[$i]['id']);
					$rslist[$i]['followed'] = $this->judgefollowofuid($rslist[$i]['id']);
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
		$data['views'] = 0;
		$data['likes'] = 0;
		$data['pid'] = 0;
		$data['commentnum'] = 0;
		$data['sender'] = $_SESSION['eladevp']['userid'];
		$data['cate'] = $_POST['forumcate'];
		$data['isnewidea'] = $_POST['isnewidea'];
		$article = M("article");
		$rs = $article->add($data);
		if($rs){
			echo 1;
		}else{
			echo 0;
		}
	}
	//编辑
	public function editforum(){
		$where['id'] = $_POST['id'];
		$data['title'] = $_POST['forumtitle'];
		$data['contents'] = $_POST['forumcontents'];
		$data['updatetime'] = time();
		$data['cate'] = $_POST['forumcate'];
		$data['isnewidea'] = $_POST['isnewidea'];
		$article = M("article");
		$rs = $article->where($where)->save($data);
		if($rs){
			echo 1;
		}else{
			echo 0;
		}
	}
	//发布评论
	public function addforumcomment(){
		$data['title'] = "评论";
		/* $data['contents'] = $_POST['contents'];
		$data['addtime'] = time();
		$data['updatetime'] = time();
		$data['views'] = 1;
		$data['likes'] = 1;
		$data['pid'] = $_POST['pid'];
		$data['commentnum'] = 0;
		$data['sender'] = $_SESSION['eladevp']['userid'];
		$data['cate'] = 0; */
		$data['contents'] = $_POST['commentconents'];
		$data['addtime'] = time();
		$data['updatetime'] = time();
		$data['views'] = 1;
		$data['likes'] = 0;
		$data['pid'] = $_POST['forumid'];
		$data['commentnum'] = 0;
		if(isset($_SESSION['eladevp']['userid']) && $_SESSION['eladevp']['userid']!=""){
			$data['sender'] = $_SESSION['eladevp']['userid'];
		}else{
			$data['sender'] = "匿名";
		}
		$data['cate'] = $_POST['forumcate'];
		
		
		$article = M("article");
		$rs = $article->add($data);
		if($rs){
			$this->addforumcommentnum($_POST['forumid']);
			echo 1;
		}else{
			echo 0;
		}
	}
	//更新评价次数
	public function addforumcommentnum($id){
		$article = M("article");
		$where['id'] = $id;
		$ainfo = $article->where($where)->find();
		if($ainfo['pid']==0){
			$rs = $article->where($where)->setInc("commentnum");
		}else{
			$wherea['id'] = $ainfo['pid'];
			$rs = $article->where($wherea)->setInc("commentnum");
		}
	}
	//新增赞
	public function updateforumzan(){
		$where['id'] = $_POST['id'];
		$article = M("article");
		$wherea['id'] = $_POST['id'];
		$ainfo = $article->where($where)->find();
		if($ainfo){
			$whereb['id'] = $ainfo['pid'];
			if($this->findforumzan($_POST['id'])){
				$this->delforumzan($_POST['id']);
				$rs = $article->where($where)->setDec("likes");
				$rsa = $article->where($whereb)->setDec("likes");
				
				if($rs){
					echo 2;
				}else{
					echo 0;
				}
			}else{ 
				$this->addforumzan($_POST['id']);
				$rs = $article->where($where)->setInc("likes");
				$rsa = $article->where($whereb)->setInc("likes");
				if($rs){
					echo 1;
				}else{
					echo 0;
				}
			}
		}else{
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
	}
	//新增关注
	public function addfollow(){
		$articleid = $_POST['articleid'];
		$where['followeduserid'] = $_SESSION['eladevp']['userid'];
		$where['articleid'] = $articleid;
		$articlefollowed = M("articlefollowed");
		$rs = $articlefollowed->where($where)->find();
		if($rs){
			$rsa = $articlefollowed->where($where)->delete();
			if($rsa){
				echo 2;
			}else{
				echo 0;
			}
		}else{
			$data['articleid'] = $articleid;
			$data['followeduserid'] = $_SESSION['eladevp']['userid'];
			$data['addtime'] = time();
			$rsa = $articlefollowed->add($data);
			if($rsa){
				echo 1;
			}else{
				echo 0;
			}
		}
	}
	//置顶操作
	public function addpintotop(){
		//判断置顶是否超过三个
		$article = M("article");
			$articleid = $_POST['articleid'];
			$where['id'] = $articleid;
			$ainfo = $article->where($where)->find();
			if($ainfo){
				
				if($ainfo['pintotop']==1){
						$data['pintotop'] = 0;
						$rs = $article->where($where)->save($data);
						$wherew['pintotop'] = 0;
						$dataaa['pintime'] = "";
						$rsa = $article->where($wherew)->save($dataaa);
						if($rs){
							echo 2;
						}else{
							echo 0;
						}
				}else{
					$whereb['pintotop'] = 1;
					$rsw = $article->where($whereb)->select();
					if(count($rsw)<3){
						$data['pintotop'] = 1;
						$data['updatetime'] = time();
						$data['pintime'] = time();
						$rs = $article->where($where)->save($data);
						
						$wherew['pintotop'] = 0;
						$dataaa['pintime'] = "";
						$rsa = $article->where($wherew)->save($dataaa);
						if($rs){
							echo 1;
						}else{
							echo 0;
						}
					}else{
						echo 3;
					}
				}
			}else{
				echo 0;
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
			$rsa = $articleabuse->where($where)->delete();
			if($rsa){
				echo 2;
			}else{
				echo 0;
			}
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
  //判断当前账户是否是关注过
  public function judgeabuseofuid($id){
		$where['articleid'] = $id;
		if(isset($_SESSION['eladevp']['userid']) && $_SESSION['eladevp']['userid']!=""){
			$where['userid'] = $_SESSION['eladevp']['userid'];
			$articleabuse = M("articleabuse");
			$articleabuseinfo = $articleabuse->where($where)->find();
			if($articleabuseinfo){
				return "1";
			}else{
				return "0";
			}
		}else{
			return "0";
		}

  }
  //判断当前账户是否是投诉过
  public function judgefollowofuid($id){
		$where['articleid'] = $id;
		if(isset($_SESSION['eladevp']['userid']) && $_SESSION['eladevp']['userid']!=""){
			$where['followeduserid'] = $_SESSION['eladevp']['userid'];
			$articlefollowed = M("articlefollowed");
			$articlefollowedinfo = $articlefollowed->where($where)->find();
			if($articlefollowedinfo){
				return "1";
			}else{
				return "0";
			}
		}else{
			return "0";
		}
  }
  //谷歌翻译
  public function googletranapi(){
	  $sl = $_POST['sl'];
	  $tl = $_POST['tl'];
	  $contentsarr = explode("||||||||||",$_POST['c']);
	  $str = "";
	  for($j=0;$j<count($contentsarr);$j++){
		  $c = urlencode(strip_tags(str_replace("&nbsp;"," ",$contentsarr[$j])));
		  $contents = file_get_contents("https://translate.google.cn/translate_a/single?client=gtx&dt=t&dj=1&ie=UTF-8&sl=".$sl."&tl=".$tl."&q=".$c);
		  $arra = json_decode($contents,true);
		  $arrb = $arra['sentences'];
		 //var_dump($arrb);
		  $trans = "";
		  for($i=0;$i<count($arrb);$i++){
			  $trans  = $trans."".$arrb[$i]["trans"];
		  }
		  if($contents){
		   if($j==1){
			if($_SESSION ['eladevp']['lang']=="cn"){
			  $str = $str."<br>正文：<br>".$trans;
			}else{
			  $str = $str."<br>Text：<br>".$trans;
			}
		  }else{
			  $str = $str.$trans;
		  }
		  }else{
			  $str= "";
		  }
		  //var_dump($contentsarr);
	  }
	 echo $str;
  }
  //谷歌翻译
  public function googletranapis(){
	  $sl = $_POST['sl'];
	  $tl = $_POST['tl'];
	  $c = urlencode(strip_tags(str_replace("&nbsp;"," ",$_POST['c'])));
	  $contents = file_get_contents("https://translate.google.cn/translate_a/single?client=gtx&dt=t&dj=1&ie=UTF-8&sl=".$sl."&tl=".$tl."&q=".$c);
	  $arra = json_decode($contents,true);
	  $arrb = $arra['sentences'];
	  $trans = "";
	  for($i=0;$i<count($arrb);$i++){
		  $trans  = $trans."".$arrb[$i]["trans"];
	  }
	  if($contents){
		  echo $trans;
	  }else{
		  echo "";
	  }
  }
  //查看当前主题的投票排名
  public function voteno($forumid){
	  $j = 0;
	  $article = M("article");
	  $rs = $article->order("votenum desc")->select();
	  if($rs){
		 for($i=0;$i<count($rs);$i++){
			 if($rs[$i]['id']==$forumid){
				 $j = $i+1;
			 }
		 }
	  }
	  return $j;
  }
}
?>