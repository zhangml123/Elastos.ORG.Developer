<?php
namespace Home\Controller;
use Think\Controller;
use Common\Controller\CommonbaseController;
class NotifyController extends CommonbaseController {
    public function index(){
		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']!=""){
			$this->assign("logincate",$_SESSION ['eladevp']['logincate']);
			$this->assign("userheadimg",$_SESSION ['eladevp']['userheadimg']);
			$this->assign("profileinfo",$this->profileinfo());
		}else{
			$this->assign("logincate","");
		}
		$notice = M("notice");
		$where['draft'] = 0;
		$where['publishtime'] = array("ELT",time());
		$noticelist = $notice->where($where)->order("addtime desc")->limit("0,10")->select();
		if($noticelist){
			if($_SESSION ['eladevp']['lang']=="cn"){
				for($i=0;$i<count($noticelist);$i++){
					$noticelist[$i]['adddate'] = date("Y-m-d",$noticelist[$i]['addtime']);
				}
			}else{
				for($i=0;$i<count($noticelist);$i++){
					$noticelist[$i]['adddate'] = date("M d,Y",$noticelist[$i]['addtime']);
				}
			}
		}
		$count = $notice->where($where)->count();
		if($count!=0){
			$pcount = ceil($count/10);
		}else{
			$pcount = 0;
		}
		$isread = $this->getnoreadnotify();
		
		if($_SESSION ['eladevp']['lang']=="cn"){
			$this->assign("lang","cn");
		}else{
			$this->assign("lang","en");
		}
		$this->assign("isread",$isread);
		$this->assign("pcount",$pcount);
		$this->assign("noticelist",$noticelist);
		$this->assign("curhost","https://".$_SERVER['HTTP_HOST']."/");	
		$this->display();
	}
	//获取指定ID的之后五条信息
	public function getlastfive($id){
		$notice = M("notice");
		$where['draft'] = 0;
		$where['publishtime'] = array("ELT",time());
		$rslist = $notice->where($where)->order("addtime desc")->field("id")->select();
		$curnum = "";
		if($rslist){
			for($i=0;$i<count($rslist);$i++){
				if($rslist[$i]['id']==$id){
					$curnum = $i;
					break;
				}
			}
			if($curnum!=""){
				if($curnum==0){
					$startnum = 0;
				}else{
					$pagenum = ceil($curnum/10);
					/* $rest = $curnum%10;
					if($rest){
						
					} */
					$startnum = ($pagenum -1)*10;
				}
			}
		}
		$rslista = $notice->where($where)->order("addtime desc")->limit($startnum,10)->select();
		return $rslista;
	}
	
	
	
	
	
	
	
	
	//获取指定数量的页面
	public function noticelimit(){
		$curp = $_POST['curp'];
		$startnum = ($curp - 1)*10;
		$where['draft'] = 0;
		$where['publishtime'] = array("ELT",time());
		//$where['publishtime'] = "3143435435436";
		$notice = M("notice");
		$rslist = $notice->where($where)->order("addtime desc")->limit($startnum.",10")->select();
		if($rslist){
			if($_SESSION ['eladevp']['lang']=="cn"){
				for($i=0;$i<count($rslist);$i++){
					$rslist[$i]['adddate'] = date("Y-m-d",$rslist[$i]['addtime']);
					$rslist[$i]['lastedittime'] = date("Y-m-d",$rslist[$i]['edittime']);
					$rslist[$i]['contents'] = str_replace("<img","<img style='width:100%;height:auto;' ",$rslist[$i]['contents']);
				}
			}else{
				for($i=0;$i<count($rslist);$i++){
					$rslist[$i]['adddate'] = date("M d,Y",$rslist[$i]['addtime']);
					$rslist[$i]['lastedittime'] = date("M d,Y",$rslist[$i]['edittime']);
					$rslist[$i]['contents'] = str_replace("<img","<img style='width:100%;height:auto;' ",$rslist[$i]['contents']);
				}
			}
		}
		echo json_encode($rslist);
	}
	//消息详细页面
	public function detail(){
		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']!=""){
			$this->assign("logincate",$_SESSION ['eladevp']['logincate']);
			$this->assign("userheadimg",$_SESSION ['eladevp']['userheadimg']);
			$this->assign("profileinfo",$this->profileinfo());
		}else{
			$this->assign("logincate","");
		}
		$where['id'] = $_GET['id'];
		$notice = M("notice");
		$noticedetail = $notice->where($where)->find();
		$rs = $notice->where($where)->setInc('viewnum');
		if($noticedetail){
			$noticedetail['adddate'] = date("Y-m-d",$noticedetail['addtime']);
			$noticedetail['contents'] = str_replace("<img","<img style='width:100%;height:auto;' ",$noticedetail['contents']);
			$noticelist = $this->getlastfive($noticedetail['id']);
		}
		$isread = $this->getnoreadnotify();
		if($_SESSION ['eladevp']['lang']=="cn"){
			$this->assign("lang","cn");
		}else{
			$this->assign("lang","en");
		}
		$this->assign("isread",$isread);
		$this->assign("noticelist",$noticelist);
		$this->assign("noticeinfo",$noticedetail);
		$this->assign("curhost","https://".$_SERVER['HTTP_HOST']."/");
		$this->display();
	}
  //获取当前消息是否读取
  public function getnoreadnotify(){
	  $where['ishomepage'] = 1;
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
	//获取当前个人信息功能
	public function profileinfo(){
		$where['userid'] = $_SESSION['eladevp']['userid'];
		$user = M("user");
		$userinfo = $user->where($where)->find();
		return $userinfo;
	}
	public function synnoticepush(){
		ignore_user_abort();//关掉浏览器，PHP脚本也可以继续执行.
		set_time_limit(0);// 通过set_time_limit(0)可以让程序无限制的执行下去
		ini_set('memory_limit','512M'); // 设置内存限制
		$interval=60*60**60*5;// 每隔两个小时运行
		do{
			$this->pushmessaetomail();
			sleep($interval);
		}
		while(true);
	}
	//查询未推送的消息
	public function pushmessaetomail(){
		$where['publishtime'] = array("ELT",time());
		$where['publishtime'] = array("NEQ","0");
		$where['pushnotifyset'] = 1;
		$notice = D("notice");
		$rsa = $notice->where($where)->select();
		if($rsa){
			$url = "https://".$_SERVER['HTTP_HOST']."/index.php/Home/Notify/detail?id=".$rsa["id"];
			$title = $_POST['title'];
			//var_dump($url);
			$this->sendmailfornotify($url,$title);
		}
		echo 1;
	}
	//发送邮件到存在邮箱的用户
	public function sendmailfornotify($url,$title){
		$user = M("user");
		$ulist = $user->select();
		if($ulist){
			for($i=0;$i<count($ulist);$i++){
				if($ulist[$i]['email']!=""){
					if($_SESSION ['eladevp']['lang']=="cn"){
						$rs = SendMail($ulist[$i]['email']," [新公告] ".$title."","<p>亦来云开发者网站有一条新公告：</p><p>".$title."</p><p>点击链接查看更多：</p><p><a href='".$url."'>".$url."</a></p><p>谢谢</p><p>亦来云团队</p>");
					}else{
						$rs = SendMail($ulist[$i]['email']," [New Notification] ".$title."","<p>There is a new notification from Elastos Developer website.</p><p>".$title."</p><p>Click this link to view more details:</p><p><a href='".$url."'>".$url."</a></p><p>Thanks</p><p>Elastos Team</p>");
					}
				}
			}
		}
	}
}