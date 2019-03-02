<?php
namespace Home\Controller;
use Think\Controller;
use Common\Controller\CommonbaseController;
class NotifyController extends CommonbaseController {
    public function index(){
		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']!=""){
			$this->assign("logincate",$_SESSION ['eladevp']['logincate']);
			$this->assign("userheadimg",$_SESSION ['eladevp']['userheadimg']);
		}else{
			$this->assign("logincate","");
		}
		$notice = M("notice");
		$where['draft'] = 0;
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
		$count = $notice->count();
		if($count!=0){
			$pcount = ceil($count/10);
		}else{
			$pcount = 0;
		}
		$this->assign("pcount",$pcount);
		$this->assign("noticelist",$noticelist);
		$this->assign("curhost","https://".$_SERVER['HTTP_HOST']."/");	
		$this->display();
	}
	//获取指定ID的之后五条信息
	public function getlastfive($id){
		$where['id'] = array('EGT',$id);
		$notice = M("notice");
		$rslist = $notice->where($where)->order("addtime asc")->limit("0,5")->select();
		return $rslist;
	}
	//获取指定数量的页面
	public function noticelimit(){
		$curp = $_POST['curp'];
		$startnum = ($curp - 1)*10;
		$where['draft'] = 0;
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
		$this->assign("noticelist",$noticelist);
		$this->assign("noticeinfo",$noticedetail);
		$this->assign("curhost","https://".$_SERVER['HTTP_HOST']."/");
		$this->display();
	}
}