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
		$data['sort'] = $_POST['sortnum'];
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
					if(mb_strlen($rslist[$i]['title'],"utf-8")>40){
						$rslist[$i]['title'] = mb_substr($rslist[$i]['title'],0,40,'utf-8')."...";
					}
				}
			}else{
				for($i=0;$i<count($rslist);$i++){
					if(mb_strlen($rslist[$i]['title'],"utf-8")>40){
						$rslist[$i]['title'] = mb_substr($rslist[$i]['title'],0,40,'utf-8')."...";
					}
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
					if(mb_strlen($rslist[$i]['title'],"utf-8")>40){
						$rslist[$i]['title'] = mb_substr($rslist[$i]['title'],0,40,'utf-8')."...";
					}
				}
			}else{
				for($i=0;$i<count($rslist);$i++){
					if(mb_strlen($rslist[$i]['title'],"utf-8")>40){
						$rslist[$i]['title'] = mb_substr($rslist[$i]['title'],0,40,'utf-8')."...";
					}
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
		$articleabuses = M("articleabuse");
		$abuse = $articleabuses->getField("articleid",true);
		//var_dump($articleabuses->getlastsql());
		if($abuse){
			return $abuse;
		}else{
			return 0;
		}
		
	}
	/**
		以下是活动的管理
	**/
	public function eventshow(){
		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']!=""){
			$this->assign("logincate",$_SESSION ['eladevp']['logincate']);
			$this->assign("userheadimg",$_SESSION ['eladevp']['userheadimg']);
		}else{
			$this->assign("logincate","");
		}
		$isread = $this->getnoreadnotify();
		$this->assign("isread",$isread);
		$this->assign("profileinfo",$this->profileinfo());
		$this->assign("curhost","https://".$_SERVER['HTTP_HOST']."/");
		$this->display();
	}
	//新增活动界面
	public function addeventshow(){
		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']!=""){
			$this->assign("logincate",$_SESSION ['eladevp']['logincate']);
			$this->assign("userheadimg",$_SESSION ['eladevp']['userheadimg']);
		}else{
			$this->assign("logincate","");
		}
		$isread = $this->getnoreadnotify();
		$this->assign("isread",$isread);
		$this->assign("profileinfo",$this->profileinfo());
		$this->assign("curhost","https://".$_SERVER['HTTP_HOST']."/");
		$this->display();
	}
	//新增活动功能
	public function addevent(){
		$events = M("events");
		$data['title'] = $_POST['title'];
		$data['cate'] = $_POST['cate'];
		$data['starttime'] = strtotime($_POST['starttime']);
		$data['endtime'] = strtotime($_POST['endtime']);
		$data['whereplace'] = $_POST['whereplace'];
		$data['onlineurl'] = $_POST['onlineurl'];
		$data['ticketcate'] = $_POST['ticketcate'];
		$data['ticketprice'] = $_POST['ticketprice'];
		$data['howto'] = $_POST['howto'];
		$data['remark'] = $_POST['remark'];
		$data['create_notice'] = $_POST['create_notice'];
		$data['sendmail'] = $_POST['sendmail'];
		$data['draft'] = $_POST['draft'];
		$data['author'] = $_SESSION ['eladevp']['userid'];
		$data['addtime'] =time();
		$rs = $events->add($data);
		if($rs){
			echo 1;
		}else{
			echo 0;
		}
	}
	//编辑活动界面
	public function editeventshow(){
		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']!=""){
			$this->assign("logincate",$_SESSION ['eladevp']['logincate']);
			$this->assign("userheadimg",$_SESSION ['eladevp']['userheadimg']);
		}else{
			$this->assign("logincate","");
		}
		$isread = $this->getnoreadnotify();
		$this->assign("eventinfo",$this->eventinfo($_GET['eid']));
		$this->assign("isread",$isread);
		$this->assign("profileinfo",$this->profileinfo());
		$this->assign("curhost","https://".$_SERVER['HTTP_HOST']."/");
		$this->display();
	}
	//编辑活动功能
	public function editevent(){
		$events = M("events");
		$where['id'] = $_POST['eid'];
		$data['title'] = $_POST['title'];
		$data['cate'] = $_POST['cate'];
		$data['starttime'] = strtotime($_POST['starttime']);
		$data['endtime'] = strtotime($_POST['endtime']);
		$data['whereplace'] = $_POST['whereplace'];
		$data['onlineurl'] = $_POST['onlineurl'];
		$data['ticketcate'] = $_POST['ticketcate'];
		$data['ticketprice'] = $_POST['ticketprice'];
		$data['howto'] = $_POST['howto'];
		$data['remark'] = $_POST['remark'];
		$data['create_notice'] = $_POST['create_notice'];
		$data['sendmail'] = $_POST['sendmail'];
		$data['draft'] = 0;
		$data['author'] = $_SESSION ['eladevp']['userid'];
		$data['addtime'] =time();
		$rs = $events->where($where)->save($data);
		if($rs){
			echo 1;
		}else{
			echo 0;
		}
	}
	//指定活动的基本信息
	public function eventinfo($eid){
		$events = M("events");
		$where['id'] = $eid;
		$rs = $events->where($where)->find();
		if($rs){
			return $rs;
		}else{
			return "";
		}
	}
	/*
		以下是管理员账户管理
	*/
	public function adminlistshow(){
		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']!=""){
			$this->assign("logincate",$_SESSION ['eladevp']['logincate']);
			$this->assign("userheadimg",$_SESSION ['eladevp']['userheadimg']);
		}else{
			$this->assign("logincate","");
		}
		$where['subucate'] = 1;
		$order = "id desc";
		$adminlist = $this->adminlist($where,$order);
		$isread = $this->getnoreadnotify();
		$this->assign("adminlist",$adminlist);
		$this->assign("pcount",$this->getadmincount($where));
		$this->assign("isread",$isread);
		$this->assign("profileinfo",$this->profileinfo());
		$this->assign("curhost","https://".$_SERVER['HTTP_HOST']."/");
		$this->display();
		
	}
	//获取管理员列表
	public function adminlist($where,$order){
		$user = M("user");
		$rslist = $user->where($where)->order($order)->limit("0,10")->select();
		if($rslist){
			for($i=0;$i<count($rslist);$i++){
				if(mb_strlen($rslist[$i]['nickname'],"utf-8")>10){
					$rslist[$i]['nickname'] = mb_substr($rslist[$i]['nickname'],0,10,'utf-8')."...";
				}
			}
		}
		$count = $user->where($where)->count();
		if($count!=0){
			$pcount = ceil($count/10);
		}else{
			$pcount = 0;
		}
		return $rslist;
	}
	//指定条件下的管理员总数
	public function getadmincount($where){
		$user = M("user");
		$count = $user->where($where)->count();
		if($count!=0){
			$pcount = ceil($count/10);
		}else{
			$pcount = 0;
		}
		return $pcount;
	}
	//获取论坛内容列表
	public function adminlistjson(){
		$where['subucate'] = 1;
		$order = "id desc";
		if(isset($_POST['searchword']) && trim($_POST['searchword'],"")!=""){
			$where['title'] = array("like","%".$_POST['searchword']."%");
		}
		$curp = $_POST['curp'];
		$startnum = ($curp - 1)*10;
		$user = M("user");
		$rslist = $user->where($where)->order($order)->limit($startnum.",10")->select();
		if($rslist){
			for($i=0;$i<count($rslist);$i++){
				if(mb_strlen($rslist[$i]['nickname'],"utf-8")>10){
					$rslist[$i]['nickname'] = mb_substr($rslist[$i]['nickname'],0,10,'utf-8')."...";
				}
			}
		}
		$count = $user->where($where)->count();
		if($count!=0){
			$pcount = ceil($count/10);
		}else{
			$pcount = 0;
		}
		echo json_encode($rslist);
	}
	public function setadmin(){
		$roleid = $_POST['roleid'];
		if($roleid=="1"){
			$setrole = 2;
		}else{
			$setrole = 1;
		}
		$where['userid'] = $_POST['userid'];
		$data['roleid'] = $setrole;
		$user = M("user");
		$rs = $user->where($where)->save($data);
		//var_dump($user->getlastsql());
		if($rs){
			echo 1;
		}else{
			echo 0;
		}
	}
	/*
		以下是开发者文档同步
	*/
	public function devpdocsyn(){
		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']!=""){
			$this->assign("logincate",$_SESSION ['eladevp']['logincate']);
			$this->assign("userheadimg",$_SESSION ['eladevp']['userheadimg']);
		}else{
			$this->assign("logincate","");
		}
		$isread = $this->getnoreadnotify();
		$this->assign("isread",$isread);
		$this->assign("profileinfo",$this->profileinfo());
		$this->assign("curhost","https://".$_SERVER['HTTP_HOST']."/");
		$this->display();
	}
	public function sync(){
		if(is_dir($_SERVER['DOCUMENT_ROOT']."/Public/Elastos.Developer.Doc")){
			exec("rm -rf ".$_SERVER['DOCUMENT_ROOT']."/Public/Elastos.Developer.Doc && cd ".$_SERVER['DOCUMENT_ROOT']."/Public && git clone https://github.com/elastos/Elastos.Developer.Doc.git",$array, $state);
			//$state = 0;
			if($state==0){
				echo "同步成功！";
			}else{
				echo "同步失败！";
			}
		}else{
			exec("cd ".$_SERVER['DOCUMENT_ROOT']."/Public && git clone https://github.com/elastos/Elastos.Developer.Doc.git",$array, $state);
			//$state = 0;
			if($state==0){
				echo "同步成功！";
			}else{
				echo "同步失败！";
			}
		}
	}
}