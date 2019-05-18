<?php
namespace Home\Controller;
use Think\Controller;
class VotingController extends Controller {
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
		$order = "createtime desc,";
		if(isset($_GET['searchword']) && trim($_GET['searchword'],"")!=""){
			$where['title'] = array("like","%".$_GET['searchword']."%");
			$this->assign("searchword",$_GET['searchword']);
		}else{
			$this->assign("searchword","");
		}
		if(isset($_GET['newidea']) && $_GET['newidea']==1){
			$where['type'] = $_GET['newidea'];
			$this->assign("newidea",1);
		}else{
			$this->assign("newidea",0);
		}
		if(isset($_GET['yme']) && $_GET['yme']==1){
			$where['author'] = $_SESSION ['eladevp']['userid'];
			$this->assign("yme",1);
		}else{
			$this->assign("yme",0);
		}
		if(isset($_GET['allvoting']) && $_GET['allvoting']==1){
			$this->assign("allvoting",1);
		}else{
			$this->assign("allvoting",0);
		}
		$where['id'] = array("neq",0);
		$isread = $this->getnoreadnotify();
		$this->assign("isread",$isread);
		$this->assign("votelist",$this->votelist($where,substr($order,0,(strlen($order)-1))));
		$this->assign("pcount",$this->getvotecount($where));
		$this->assign("curlang",$_SESSION ['eladevp']['lang']);
		$this->assign("curhost","https://".$_SERVER['HTTP_HOST']."/");
		$this->display();
	}
	//详细页面
	public function detail(){
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
		$where['id'] = array("neq",0);
		$isread = $this->getnoreadnotify();
		if(isset($_GET['vid']) && $_GET['vid']!=""){
			$votings = M("votings");
			$where['id'] = $_GET['vid'];
			$votedetail = $votings->where($where)->find();
			if($_SESSION ['eladevp']['lang']=="cn"){
				$votedetail['adddate'] = date("Y年m月d日",$rslist[$i]['createtime']);
				$votedetail['enddate'] = date("Y年m月d日",$rslist[$i]['endtime']);
				if($votedetail['type']==1){
					$votedetail['typeinstr'] = "新主意";
				}else{
					$votedetail['typeinstr'] = "社区";
				}
				if($votedetail['status']==1){
					$votedetail['statusinstr'] = "投票进行中";
				}else if($votedetail['status']==2){
					$votedetail['statusinstr'] = "获胜选择";
				}else if($votedetail['status']==3){
					$votedetail['statusinstr'] = "POC演示准备";
				}else if($votedetail['status']==4){
					$votedetail['statusinstr'] = "接受POC演示";
				}else if($votedetail['status']==5){
					$votedetail['statusinstr'] = "奖励已收到";
				}else if($votedetail['status']==6){
					$votedetail['statusinstr'] = "结束";
				}
			}else{
				$votedetail['adddate'] = date("M d,Y",$rslist[$i]['createtime']);
				$votedetail['enddate'] = date("M d,Y",$rslist[$i]['endtime']);
				if($votedetail['type']==1){
					$votedetail['typeinstr'] = "New Idea";
				}else{
					$votedetail['typeinstr'] = "Community";
				}
				if($votedetail['status']==1){
					$votedetail['statusinstr'] = "Voting In Progress";
				}else if($votedetail['status']==2){
					$votedetail['statusinstr'] = "Winer Selected";
				}else if($votedetail['status']==3){
					$votedetail['statusinstr'] = "POC Demo Prep";
				}else if($votedetail['status']==4){
					$votedetail['statusinstr'] = "POC Demo Accepted";
				}else if($votedetail['status']==5){
					$votedetail['statusinstr'] = "Reward Received";
				}else if($votedetail['status']==6){
					$votedetail['statusinstr'] = "Closed";
				}
			}
			$this->assign("votedetail",$votedetail);
		}else{
			$this->assign("votedetail","");
		}
		$this->assign("chooselist",$this->getforumidea());
		$this->assign("chooselistcount",count($this->getforumidea()));
		//结束时间与当前时间的差值
		$this->assign("diffend",($votedetail['endtime']-time()));
		$this->assign("isread",$isread);
		$this->assign("curlang",$_SESSION ['eladevp']['lang']);
		$this->assign("curhost","https://".$_SERVER['HTTP_HOST']."/");
		$this->display();
	}
	//指定条件下的投票DID总数
	public function votedidsum($votingsid,$forumid){
		$where['votingsid'] = $votingsid;
		$where['forumid'] = $forumid;
		$votelog = M("votelog");
		$rsa = $votelog->where($where)->sum("votenum");
		if($rsa){
			return $res;
		}else{
			return 0;
		}
	}
	//指定条件下的投票DID总数
	public function voteelasum($votingsid,$forumid){
		$where['votingsid'] = $votingsid;
		$where['forumid'] = $forumid;
		$votelog = M("votelog");
		$rsa = $votelog->where($where)->sum("ela");
		if($rsa){
			return $res;
		}else{
			return 0;
		}
	}
	//指定条件下的主题总数
	public function getvotecount($where){
		$votings = M("votings");
		$count = $votings->where($where)->count();
		if($count!=0){
			$pcount = ceil($count/10);
		}else{
			$pcount = 0;
		}
		return $pcount;
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
	//内容列表
	public function votelist($where,$order){
		$votings = M("votings");
		$rslist = $votings->where($where)->order($order)->limit("0,10")->select();
		if($rslist){
			if($_SESSION ['eladevp']['lang']=="cn"){
				for($i=0;$i<count($rslist);$i++){
					if(strlen(strip_tags($rslist[$i]['contents']))>110){
						$rslist[$i]['contents'] = mb_substr(strip_tags($rslist[$i]['contents']),0,105,"utf-8")."...";
					}
					if(strlen($rslist[$i]['title'])>6){
						$rslist[$i]['title'] = mb_substr($rslist[$i]['title'],0,6,"utf-8")."...";
					}
					$rslist[$i]['adddate'] = date("Y年m月d日",$rslist[$i]['createtime']);
					$rslist[$i]['enddate'] = date("Y年m月d日",$rslist[$i]['endtime']);
					if($rslist[$i]['type']==1){
					$rslist[$i]['typeinstr'] = "新主意";
					}else{
						$rslist[$i]['typeinstr'] = "社区";
					}
					if($rslist[$i]['status']==1){
						$rslist[$i]['statusinstr'] = "投票进行中";
					}else if($rslist[$i]['status']==2){
						$rslist[$i]['statusinstr'] = "获胜选择";
					}else if($rslist[$i]['status']==3){
						$rslist[$i]['statusinstr'] = "POC演示准备";
					}else if($rslist[$i]['status']==4){
						$rslist[$i]['statusinstr'] = "接受POC演示";
					}else if($rslist[$i]['status']==5){
						$rslist[$i]['statusinstr'] = "奖励已收到";
					}else if($rslist[$i]['status']==6){
						$rslist[$i]['statusinstr'] = "结束";
					}
					$wherea['userid'] = $rslist[$i]['author'];
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
					
				}
			}else{
				for($i=0;$i<count($rslist);$i++){
					$wherecate['id'] = $rslist[$i]['cate'];
					//$catedetail = $this->catedetail($wherecate);
					
					$rslist[$i]['adddate'] = date("M d,Y",$rslist[$i]['createtime']);
					$rslist[$i]['enddate'] = date("M d,Y",$rslist[$i]['endtime']);
					if($rslist[$i]['type']==1){
						$rslist[$i]['typeinstr'] = "New Idea";
					}else{
						$rslist[$i]['typeinstr'] = "Community";
					}
					if($rslist[$i]['status']==1){
						$rslist[$i]['statusinstr'] = "Voting In Progress";
					}else if($rslist[$i]['status']==2){
						$rslist[$i]['statusinstr'] = "Winer Selected";
					}else if($rslist[$i]['status']==3){
						$rslist[$i]['statusinstr'] = "POC Demo Prep";
					}else if($rslist[$i]['status']==4){
						$rslist[$i]['statusinstr'] = "POC Demo Accepted";
					}else if($rslist[$i]['status']==5){
						$rslist[$i]['statusinstr'] = "Reward Received";
					}else if($rslist[$i]['status']==6){
						$rslist[$i]['statusinstr'] = "Closed";
					}
					$wherea['userid'] = $rslist[$i]['author'];
					$cuinfo = $this->userinfo($wherea);
					if(strlen($rslist[$i]['title'])>6){
						$rslist[$i]['title'] = mb_substr($rslist[$i]['title'],0,6,"utf-8")."...";
					}
					/* if(strlen($rslist[$i]['contents'])>110){
						$rslist[$i]['contents'] = mb_substr($rslist[$i]['contents'],0,105,"utf-8")."...";
					} */
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
				}
			}
		}
		$count = $votings->where($where)->count();
		if($count!=0){
			$pcount = ceil($count/10);
		}else{
			$pcount = 0;
		}
		return $rslist;
	}

	//获取论坛内容列表
	public function votelistjson(){
		$where['pid'] = 0;
		$order = "createtime desc,";
		if(isset($_POST['searchword']) && trim($_POST['searchword'],"")!=""){
			$where['title'] = array("like","%".$_POST['searchword']."%");
		}
		if(isset($_POST['newidea']) && $_POST['newidea']=1){
			$where['type'] = 1;
		}
		if(isset($_POST['yme']) && $_POST['yme']=1){
			$where['author'] = $_SESSION['eladevp']['userid'];
		}
		$curp = $_POST['curp'];
		$startnum = ($curp - 1)*10;
		$votings = M("votings");
		$rslist = $votings->where($where)->order(substr($order,0,(strlen($order)-1)))->limit($startnum.",10")->select();
		if($rslist){
			if($_SESSION ['eladevp']['lang']=="cn"){
				for($i=0;$i<count($rslist);$i++){
					if(strlen($rslist[$i]['title'])>6){
						$rslist[$i]['title'] = mb_substr($rslist[$i]['title'],0,6,"utf-8")."...";
					}
					$rslist[$i]['adddate'] = date("Y年m月d日",$rslist[$i]['createtime']);
					$rslist[$i]['enddate'] = date("Y年m月d日",$rslist[$i]['endtime']);
					
					if($rslist[$i]['type']==1){
					$rslist[$i]['typeinstr'] = "新主意";
					}else{
						$rslist[$i]['typeinstr'] = "社区";
					}
					if($rslist[$i]['status']==1){
						$rslist[$i]['statusinstr'] = "投票进行中";
					}else if($rslist[$i]['status']==2){
						$rslist[$i]['statusinstr'] = "获胜选择";
					}else if($rslist[$i]['status']==3){
						$rslist[$i]['statusinstr'] = "POC演示准备";
					}else if($rslist[$i]['status']==4){
						$rslist[$i]['statusinstr'] = "接受POC演示";
					}else if($rslist[$i]['status']==5){
						$rslist[$i]['statusinstr'] = "奖励已收到";
					}else if($rslist[$i]['status']==6){
						$rslist[$i]['statusinstr'] = "结束";
					}
					$wherea['userid'] = $rslist[$i]['author'];
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
					
				}
			}else{
				for($i=0;$i<count($rslist);$i++){
					$wherecate['id'] = $rslist[$i]['cate'];
					//$catedetail = $this->catedetail($wherecate);
					$rslist[$i]['adddate'] = date("M d,Y",$rslist[$i]['createtime']);
					$rslist[$i]['enddate'] = date("M d,Y",$rslist[$i]['endtime']);
					$wherea['userid'] = $rslist[$i]['author'];
					if($rslist[$i]['type']==1){
						$rslist[$i]['typeinstr'] = "New Idea";
					}else{
						$rslist[$i]['typeinstr'] = "Community";
					}
					if($rslist[$i]['status']==1){
						$rslist[$i]['statusinstr'] = "Voting In Progress";
					}else if($rslist[$i]['status']==2){
						$rslist[$i]['statusinstr'] = "Winer Selected";
					}else if($rslist[$i]['status']==3){
						$rslist[$i]['statusinstr'] = "POC Demo Prep";
					}else if($rslist[$i]['status']==4){
						$rslist[$i]['statusinstr'] = "POC Demo Accepted";
					}else if($rslist[$i]['status']==5){
						$rslist[$i]['statusinstr'] = "Reward Received";
					}else if($rslist[$i]['status']==6){
						$rslist[$i]['statusinstr'] = "Closed";
					}
					$cuinfo = $this->userinfo($wherea);
					if(strlen($rslist[$i]['title'])>6){
						$rslist[$i]['title'] = mb_substr($rslist[$i]['title'],0,6,"utf-8")."...";
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
				}
			}
		}
		$count = $votings->where($where)->count();
		if($count!=0){
			$pcount = ceil($count/10);
		}else{
			$pcount = 0;
		}
		echo json_encode($rslist);
	}	
	//获取当前注册用户信息功能
	public function userinfo($where){
		$user = M("user");
		$uinfo = $user->where($where)->find();
		return $uinfo;
	}
	//获取当前个人信息功能
	public function profileinfo(){
		$where['userid'] = $_SESSION['eladevp']['userid'];
		$user = M("user");
		$userinfo = $user->where($where)->find();
		return $userinfo;
	}
	public function addvote(){
		$data['title'] = $_POST['votetitle'];
		$data['type'] = $_POST['votecate'];
		$data['options'] = $_POST['voteoption'];
		$data['contents'] = $_POST['votecontents'];
		$data['endtime'] = strtotime($_POST['enddate']);
		if($_POST['repeatoption']=="0"){
			$data['repeatyn'] = 0;
		}else{
			$data['repeatyn'] = 1;
		}
		$data['createtime'] = time();
		$data['author'] = $_SESSION ['eladevp']['userid'];
		$data['views'] = 0;
		$data['joinnum'] = 0;
		$data['status'] = 1;
		$voting = M("votings");
		$rs = $voting->add($data);
		if($rs){
			echo 1;
		}else{
			echo 0;
		}
	}
	//获取当前参与的论坛项目
	public function getforumidea($votingsid){
		$forum = M("article");
		$where['isnewidea'] = 1;
		$forumlist = $forum->where($where)->order("votenum desc")->limit("0,10")->select();
		if($forumlist){
			for($k=0;$k<count($forumlist);$k++){
			if(strlen($forumlist[$k]['title'])>90){
				$forumlist[$k]['title'] = mb_substr($forumlist[$k]['title'],0,90,"utf-8")."...";
			}
			$forumlist[$k]['didsum'] =  $this->votedidsum($votingsid,$forumlist[$k]['id']);
			$forumlist[$k]['elasum'] =  $this->voteelasum($votingsid,$forumlist[$k]['id']);
				
			}
			return $forumlist;
		}else{
			return "";
		}
	}
	//获取当前参与的论坛项目
	public function getforumideajson(){
		$votingsid = $_POST['votingsid'];
		$startnum  = $_POST['startnum'];
		$forum = M("article");
		$where['isnewidea'] = 1;
		$forumlist = $forum->where($where)->order("votenum desc")->limit($startnum.",10")->select();
		if($forumlist){
			for($k=0;$k<count($forumlist);$k++){
				if(strlen($forumlist[$k]['title'])>90){
					$forumlist[$k]['title'] = mb_substr($forumlist[$k]['title'],0,90,"utf-8")."...";
				}
				$forumlist[$k]['didsum'] =  $this->votedidsum($votingsid,$forumlist[$k]['id']);
				$forumlist[$k]['elasum'] =  $this->voteelasum($votingsid,$forumlist[$k]['id']);	
			}
			echo json_encode($forumlist);
		}else{
			echo "";
		}
	}
	//投票二维码
	public function showdidreq(){
        Vendor('phpqrcode.phpqrcode');
		$state = time().$this->getRandomNum(5);
		$_SESSION['eladevp']['didrand'] = $state;
        $object = new \QRcode();
		$appid = C("DID_APPID");
		$didprvkey = C("DID_PRVKEY");
		$didpubkey = C("DID_PUBKEY");
		$did = C("DID_DID");
		$this->adddid($state);
		$payaddress="";
		$amount="0";
		$url ="http://203.189.235.252:8080/trucks/signdid.jsp";
		$parms = "?didprvkey=".$didprvkey."&msg=".$appid;
		$sign = trim(file_get_contents($url."".$parms));
		$random =rand(1000,9999);
 		$ReturnUrl = urlencode("https://".$_SERVER['HTTP_HOST']."/a.php?ida=1");
 		$callbackurl = urlencode("https://".$_SERVER['HTTP_HOST']."/index.php/Home/Voting/didcallback?state=".$state);
		$qurl = "elaphant://identity?CallbackUrl=".$callbackurl."&ReturnUrl=".$ReturnUrl."&Description=developer.elastos.org&AppID=".$appid."&PublicKey=".$didpubkey."&Signature=".$sign."&DID=".$did."&RandomNumber=".$random."&AppName=developer.elastos.org";		
		$level=3;
        $size=2;
        $errorCorrectionLevel =intval($level) ;//容错级别
        $matrixPointSize = intval($size);//生成图片大小
        $object->png($qurl, false, $errorCorrectionLevel, $matrixPointSize, 2);
	}
	//构建一个临时的DID数据
	public function adddid($state){
		$data['didrand'] = $state;
		$data['addtime'] = time();
		$votelog = M("votelog");
		$rs = $votelog->add($data);
	}
	//处理DID回调值
	public function didcallback(){
		 $rs = file_get_contents("php://input");
		 $jsona = json_decode($rs,true);
		 $njson = json_decode($jsona['Data'],true);
		 $where['didrand'] = $_GET['state'];
		 $didpubkey = $njson['PublicKey'];
		 $url ="http://203.189.235.252:8080/trucks/verifydid.jsp";
		 $parms = "?didpubkey=".$didpubkey."&msg=".urlencode($jsona['Data'])."&sig=".$jsona['Sign'];
		 $yn = trim(file_get_contents($url."".$parms));
		 $votelog = M("votelog");
		 if($yn==1){
			 $data['did'] = $njson['DID'];
			 $rs = $votelog->where($where)->save($data);
		 }
	}
	//检测是否存在并更新
	public function addvotenum(){
		$votelog = M("votelog");
		$article = M("article");
		$votings = M("votings");
		if(isset($_POST['forumid']) && $_POST['forumid']!=""){
			$arr = explode(",",trim($_POST['forumid'],","));
			$where['didrand'] = $_SESSION['eladevp']['didrand'];
			$where['did'] = null;
			$voteinfo = $votelog->where($where)->find();
			if($voteinfo){
				if(count($arr)>1){
					for($i=0;$i<count($arr);$i++){
						//判断该投票下的主题是否被指定DID投过票，投过票的话就只是更新时间
						$wheret['votingsid'] = $_POST['votingsid'];
						$wheret['did'] = $voteinfo['did'];
						$wheret['forumid'] = $arr[$i];
						$judgevote = $votelog->where($wheret)->find();
						if($judgevote){
							$data['addtime'] = time();
							$rst = $votelog->where($wheret)->save($data);
						}else{
							$data['votingsid'] = $_POST['votingsid'];
							$data['did'] = $voteinfo['did'];
							$data['didrand'] = $_SESSION['eladevp']['didrand'];
							$data['votenum'] = 1;
							$data['forumid'] = $arr[$i];
							$data['addtime'] = time();
							$rs = $votelog->add($data);
							$wherem['id'] = $arr[$i];
							$rsh = $article->where($wherem)->setInc('votenum');
							$wherep['id'] = $_POST['votingsid'];
							$rsp = $votings->where($wherep)->setInc("joinnum");
						}
					}
					$wherea['didrand'] = $_SESSION['eladevp']['didrand'];
					$wherea['votingsid'] = "";
					$rsa = $votelog->where($wherea)->delete();
				}else{
					$wheret['votingsid'] = $_POST['votingsid'];
					$wheret['did'] = $voteinfo['did'];
					$wheret['forumid'] = trim($_POST['forumid'],",");
					$judgevote = $votelog->where($wheret)->find();
					if($judgevote){
						$data['addtime'] = time();
						$rst = $votelog->where($wheret)->save($data);
						$wherea['didrand'] = $_SESSION['eladevp']['didrand'];
						$wherea['votingsid'] = "";
						$rsa = $votelog->where($wherea)->delete();
					}else{
						$data['votingsid'] = $_POST['votingsid'];
						$data['votenum'] = 1;
						$data['forumid'] = trim($_POST['forumid'],",");
						$data['addtime'] = time();
						$rs = $votelog->where($where)->save($data);
						$wherem['id'] = trim($_POST['forumid'],",");
						$rsh = $article->where($wherem)->setInc('votenum');
						$wherep['id'] = $_POST['votingsid'];
						$rsp = $votings->where($wherep)->setInc("joinnum");
					}
				}
				echo 1;
			}else{
				echo 0;
			}
		}else{
			echo 0;
		}
	}
	public function getRandomNum($len, $chars=null)  {  
		if (is_null($chars)) {  
			$chars = "0123456789";
		}  
		mt_srand(10000000*(double)microtime());  
		for ($i = 0, $str = '', $lc = strlen($chars)-1; $i < $len; $i++) {  
			$str .= $chars[mt_rand(0, $lc)];  
		}  
		return $str;  
	}
}
?>