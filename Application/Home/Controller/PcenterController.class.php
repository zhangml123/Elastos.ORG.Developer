<?php
namespace Home\Controller;
use Common\Controller\BaseController;
use Think\Controller;
class PcenterController extends BaseController {
	//个人中心默认
	public function index(){
		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']!=""){
			$this->assign("logincate",$_SESSION ['eladevp']['logincate']);
		}else{
			$this->assign("logincate","");
		}
		/* $where['userid'] = $_SESSION['eladevp']['uid'];
		$user = M("user");
		$userinfo = $user->where($where)->find(); */
		$userinfo = $this->profileinfo();
		$this->assign("uinfo",$userinfo);
		$this->assign("curhost","https://".$_SERVER['HTTP_HOST']."/");
		$this->display();
	}
	//获取当前个人信息功能
	public function profileinfo(){
		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==1){
			$where['userid'] = $_SESSION['eladevp']['userid'];
			$user = M("user");
			$userinfo = $user->where($where)->find();
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==2){
			$where['rcuid'] = $_SESSION['eladevp']['rcuid'];
			$rcinfo = M("rcinfo");
			$userinfo = $rcinfo->where($where)->find();
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==3){
			$where['githubuid'] = $_SESSION['eladevp']['githubuid'];
			$githubinfo = M("githubinfo");
			$userinfo=$githubinfo->where($where)->find();
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==4){
			$where['wechatuid'] = $_SESSION['eladevp']['wechatuid'];
			$wechatinfo = M("wechatinfo");
			$userinfo=$wechatinfo->where($where)->find();
		}
		return $userinfo;
	}
	//编辑功能
	public function editprofile(){
		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==1){
			$data['firstname'] = $_POST['firstname'];
			$data['lastname'] = $_POST['lastname'];
			$data['country'] = $_POST['country'];
			$data['city'] = $_POST['city'];
			$data['bio'] = $_POST['bio'];
			$data['moreurl'] = $_POST['moreurl'];
			$data['company'] = $_POST['company'];
			$where['userid'] = $_SESSION['eladevp']['userid'];
			$user = M("user");
			$rs = $user->where($where)->save($data);
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==2){
			$data['firstname'] = $_POST['firstname'];
			$data['lastname'] = $_POST['lastname'];
			$data['country'] = $_POST['country'];
			$data['city'] = $_POST['city'];
			$data['bio'] = $_POST['bio'];
			$data['moreurl'] = $_POST['moreurl'];
			$data['company'] = $_POST['company'];
			$where['rcuid'] = $_SESSION['eladevp']['rcuid'];
			$rcinfo = M("rcinfo");
			$rs = $rcinfo->where($where)->save($data);
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==3){
			$data['firstname'] = $_POST['firstname'];
			$data['lastname'] = $_POST['lastname'];
			$data['country'] = $_POST['country'];
			$data['city'] = $_POST['city'];
			$data['bio'] = $_POST['bio'];
			$data['moreurl'] = $_POST['moreurl'];
			$data['company'] = $_POST['company'];
			$where['githubuid'] = $_SESSION['eladevp']['githubuid'];
			$githubinfo = M("githubinfo");
			$rs = $githubinfo->where($where)->save($data);
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==4){
			$data['firstname'] = $_POST['firstname'];
			$data['lastname'] = $_POST['lastname'];
			$data['country'] = $_POST['country'];
			$data['city'] = $_POST['city'];
			$data['bio'] = $_POST['bio'];
			$data['moreurl'] = $_POST['moreurl'];
			$data['company'] = $_POST['company'];
			$where['wechatuid'] = $_SESSION['eladevp']['wechatuid'];
			$wechatinfo = M("wechatinfo");
			$rs = $wechatinfo->where($where)->save($data);
		}
		if($rs){
			echo 1;
		}else{
			echo 0;
		}
	}
	//测试Token
	public function tokeninfo(){
		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']!=""){
			$this->assign("logincate",$_SESSION ['eladevp']['logincate']);
		}else{
			$this->assign("logincate","");
		}
		//获取前十个测试币申请记录
		$wherea['userid'] = $_SESSION ['eladevp']['userid'];
		$applyela = M("applytestela");
		$rslist = $applyela->where($wherea)->order("addtime desc")->limit("0,10")->select();
		if($rslist){
			if($_SESSION ['eladevp']['lang']=="cn"){
				for($i=0;$i<count($rslist);$i++){
					$rslist[$i]['adddate'] = date("Y-m-d",$rslist[$i]['addtime']);
					if($rslist[$i]['status'] ==3){
						$rslist[$i]['curstatus'] = "成功";
					}else{
						$rslist[$i]['curstatus'] = "进行中";
					}
				}
			}else{
				for($i=0;$i<count($rslist);$i++){
					$rslist[$i]['adddate'] = date("M d,Y",$rslist[$i]['addtime']);
					if($rslist[$i]['status'] ==3){
						$rslist[$i]['curstatus'] = "Success";
					}else{
						$rslist[$i]['curstatus'] = "In Progress 7/12";
					}
				}
			}
		}
		$count = $applyela->where($wherea)->count();
		if($count!=0){
			$pcount = ceil($count/10);
		}else{
			$pcount = 0;
		}
		$this->assign("pcount",$pcount);
		$this->assign("applylist",$rslist);
		$this->assign("curhost","https://".$_SERVER['HTTP_HOST']."/");
		$this->display();
	}
	//获取指定数量的页面
	public function rslimit(){
		$curp = $_POST['curp'];
		$wherea['userid'] = $_SESSION ['eladevp']['userid'];
		$startnum = ($curp - 1)*6;
		$applyela = M("applytestela");
		$rslist = $applyela->where($wherea)->order("addtime desc")->limit($startnum.",10")->select();
		if($rslist){
			if($_SESSION ['eladevp']['lang']=="cn"){
				for($i=0;$i<count($rslist);$i++){
					$rslist[$i]['adddate'] = date("Y-m-d",$rslist[$i]['addtime']);
					if($rslist[$i]['status'] ==3){
						$rslist[$i]['curstatus'] = "成功";
					}else{
						$rslist[$i]['curstatus'] = "进行中";
					}
				}
			}else{
				for($i=0;$i<count($rslist);$i++){
					$rslist[$i]['adddate'] = date("M d,Y",$rslist[$i]['addtime']);
					if($rslist[$i]['status'] ==3){
						$rslist[$i]['curstatus'] = "Success";
					}else{
						$rslist[$i]['curstatus'] = "In Progress 7/12";
					}
				}
			}
		}
		echo json_encode($rslist);
	}
	//申请测试Token功能
	public function tokeapply(){
		$raw_post_data = array();
		$raw_post_data['timestamp']=time();
		$raw_post_data['elaAddress']=$_POST['testelaadr'];
		$temp = $_POST['testelaadr']."_".$raw_post_data['timestamp']."_".C("APPLY_TESTELA_SECRET");
		$raw_post_data['digest'] = strtoupper(md5($temp));
		$data_string = json_encode($raw_post_data);
		//var_dump(C("APPLY_TESTELA_SECRET"));
		//var_dump(C("APPLY_TESTELA_URL"));
		//var_dump($data_string);
		$data = $this->post_by_curl(C("APPLY_TESTELA_URL"),$data_string);
		var_dump($data);
		//$this->addtestela();
	}
	//加入信息到Token表
	public function addtestela(){
		$data['userid'] = $_SESSION ['eladevp']['userid'];
		$data['addtime'] = time();
		$data['amount'] = 10;
		$data['status'] = 1;
		$applyela = M("applytestela");
		$rs = $applyela->add($data);
		if($rs){
			return 1;
		}else{
			return 0;
		}
	}
	//POST提交
	function post_by_curl($remote_server, $post_data){
		$ch = curl_init($remote_server);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
				'Content-Type: application/json',
				'Content-Length: '.strlen($post_data))
		);
		$data = curl_exec($ch);
		//echo 'error:' . curl_errno($ch) . "\n";
		curl_close($ch);
		return $data;
	}
	//退出
	public function logout(){
		session_destroy();
		redirect("http://".$_SERVER['HTTP_HOST']);
	}
}
?>