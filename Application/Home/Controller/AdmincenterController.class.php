<?php
namespace Home\Controller;
use Common\Controller\BaseController;
use Think\Controller;
class AdmincenterController extends BaseController {
	//超级管理的论坛列表
	public function forumlist(){
		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']!=""){
			$this->assign("logincate",$_SESSION ['eladevp']['logincate']);
			$this->assign("userheadimg",$_SESSION ['eladevp']['userheadimg']);
		}else{
			$this->assign("logincate","");
		}
		if(isset($_GET['abuse']) && $_GET['abuse']==1){
			//if($this->articleabuse()==0){
				//$this->assign("abuse",0);
			//}else{
				$where['id'] = array("in",$this->articleabuse());
				$this->assign("abuse",1);
			//}
		}else{
			$this->assign("abuse",0);
		}
		$where['pid'] = 0;
		$order = "id desc";
		$forumlist = $this->adminforumlist($where,$order);
		$isread = $this->getnoreadnotify();
		$this->assign("forumlist",$forumlist);
		$this->assign("pcount",$this->getforumcount($where));
		$this->assign("isread",$isread);
		$this->assign("profileinfo",$this->profileinfo());
		$this->assign("curhost","https://".$_SERVER['HTTP_HOST']."/");
		$this->display();
	}
	//超级管理的论坛详细
	public function forumdetail(){
		
		
		$this->display();
	}
	//获取当前个人信息功能
	public function profileinfo(){
		$where['userid'] = $_SESSION['eladevp']['userid'];
		$user = M("user");
		$userinfo = $user->where($where)->find();
		return $userinfo;
	}
	//论坛分类列表
	public function forumcatelist(){
		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']!=""){
			$this->assign("logincate",$_SESSION ['eladevp']['logincate']);
			$this->assign("userheadimg",$_SESSION ['eladevp']['userheadimg']);
		}else{
			$this->assign("logincate","");
		}
		$forumcatelist = $this->adminforumcatelist();
		$isread = $this->getnoreadnotify();
		$this->assign("forumcatelist",$forumcatelist);
		$this->assign("pcount",$this->getforumcatecount());
		$this->assign("isread",$isread);
		$this->assign("curhost","https://".$_SERVER['HTTP_HOST']."/");
		$this->assign("profileinfo",$this->profileinfo());
		$this->display();
	}
	//论坛分类新增功能
	public function addforumcate(){
		$data['catename'] = $_POST['catename'];
		$data['catenameen'] = $_POST['catenameen'];
		$category = M("category");
		$rs = $category->add($data);
		if($rs){
			echo 1;
		}else{
			echo 0;
		}
	}
	//论坛分类编辑功能
	public function editforumcate(){
		$where['id'] = $_POST['cateid'];
		$data['catename'] = $_POST['catename'];
		$data['catenameen'] = $_POST['catenameen'];
		$category = M("category");
		$rs = $category->where($where)->save($data);
		if($rs!==false){
			echo 1;
		}else{
			echo 0;
		}
	}
	//论坛分类编辑功能排序
	public function editforumcatesort(){
		$where['id'] = $_POST['cateid'];
		$data['sort'] = $_POST['sortnum'];
		$category = M("category");
		$rs = $category->where($where)->save($data);
		if($rs!==false){
			echo 1;
		}else{
			echo 0;
		}
	}
	//论坛分类编辑功能状态
	public function editforumcatestatus(){
		$where['id'] = $_POST['cateid'];
		$data['status'] = $_POST['status'];
		$category = M("category");
		$rs = $category->where($where)->save($data);
		if($rs!==false){
			echo 1;
		}else{
			echo 0;
		}
	}
	//获取论坛内容列表
	public function adminforumcatelist(){
		$category = M("category");
		$rslist = $category->order("sort desc")->select();
		return $rslist;
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
	//指定条件下的主题分类总数
	public function getforumcatecount(){
		$category = M("category");
		$count = $category->count();
		if($count!=0){
			$pcount = ceil($count/10);
		}else{
			$pcount = 0;
		}
		return $pcount;
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
	//获取论坛内容列表
	public function adminforumlist($where,$order){
		$article = M("article");
		$rslist = $article->where($where)->order($order)->limit("0,10")->select();
		if($rslist){
			if($_SESSION ['eladevp']['lang']=="cn"){
				for($i=0;$i<count($rslist);$i++){
					$rslist[$i]['title'] = mb_substr($rslist[$i]['title'],0,20,'utf-8');
				}
			}else{
				for($i=0;$i<count($rslist);$i++){
					$rslist[$i]['title'] = mb_substr($rslist[$i]['title'],0,20,'utf-8');
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
	public function adminforumlistjson(){
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
		if($_POST['abuse']==1){
			$where['id'] = array("in",$this->articeabuse());
		}
		$startnum = ($curp - 1)*10;
		$article = M("article");
		$rslist = $article->where($where)->order($order)->limit($startnum.",10")->select();
		if($rslist){
			if($_SESSION ['eladevp']['lang']=="cn"){
				for($i=0;$i<count($rslist);$i++){
					$rslist[$i]['title'] = mb_substr($rslist[$i]['title'],0,20,'utf-8');
				}
			}else{
				for($i=0;$i<count($rslist);$i++){
					$rslist[$i]['title'] = mb_substr($rslist[$i]['title'],0,20,'utf-8');
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
	//获取举报的列表
	public function articleabuse(){
		$articleabuse = M("articleabuse");
		$abuse = $articleabuse->getField("articeid");
		if($abuse){
			return $abuse;
		}else{
			return 0;
		}
		
	}
	
	
	
}