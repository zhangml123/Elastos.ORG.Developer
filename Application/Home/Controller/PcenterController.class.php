<?php
namespace Home\Controller;
use Common\Controller\BaseController;
use Think\Controller;
class PcenterController extends BaseController {
	//个人中心默认
	public function index(){
		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']!=""){
			$this->assign("logincate",$_SESSION ['eladevp']['logincate']);
			$this->assign("userheadimg",$_SESSION ['eladevp']['userheadimg']);
		}else{
			$this->assign("logincate","");
		}
		/* $where['userid'] = $_SESSION['eladevp']['uid'];
		$user = M("user");
		$userinfo = $user->where($where)->find(); */
		$userinfo = $this->profileinfo();
		//var_dump($userinfo);
		$info = $this->relationuinfo();
		if($info!=0){
			$this->assign("info",$info);
		}else{
			$this->assign("info",0);
		}
		//var_dump($info);
		if(isset($_GET['githubyn']) && $_GET['githubyn']!=""){
			$this->assign("gityn",$_GET['githubyn']);
		}else{
			$this->assign("gityn","");
		}
		//var_dump($_SESSION ['eladevp']['logincate']);
		$isread = $this->getnoreadnotify();
		$this->assign("isread",$isread);
		$this->assign("countrylist",$this->countrylist());
		$this->assign("uinfo",$userinfo);
		$this->assign("profileinfo",$this->profileinfo());
		$this->assign("curhost","https://".$_SERVER['HTTP_HOST']."/");
		$this->display();
	}
	//判断关联的用户表
	public function relationuinfo(){
		$userrelation = M("userrelation");
		$where['mainuser'] = $_SESSION['eladevp']['userid'];
		$info = $userrelation->where($where)->find();		
		/* if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==1){

		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==2){
			$where['rcuserid'] = $_SESSION['eladevp']['rcuid'];
			$info = $userrelation->where($where)->find();
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==3){
			$where['githubuserid'] = $_SESSION['eladevp']['githubuid'];
			$info=$userrelation->where($where)->find();
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==4){
			$where['wechatuserid'] = $_SESSION['eladevp']['wechatuid'];
			$info=$userrelation->where($where)->find();
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==5){
			$where['didid'] = $_SESSION['eladevp']['diduid'];
			$info=$userrelation->where($where)->find();
		} */
		if($info){
			return $info;
		}else{
			return 0;
		}
	}
	//世界主要城市数组
	public function countrylist(){
			$arr = array();
			$arr[] = "Afghanistan";
			$arr[] = "Aland Islands";
			$arr[] = "Albania";
			$arr[] = "Algeria";
			$arr[] = "American Samoa";
			$arr[] = "Andorra";
			$arr[] = "Angola";
			$arr[] = "Anguilla";
			$arr[] = "Antigua and Barbuda";
			$arr[] = "Argentina";
			$arr[] = "Armenia";
			$arr[] = "Aruba";
			$arr[] = "Australia";
			$arr[] = "Austria";
			$arr[] = "Azerbaijan";
			$arr[] = "Bangladesh";
			$arr[] = "Bahrain";
			$arr[] = "Bahamas";
			$arr[] = "Barbados";
			$arr[] = "Belarus";
			$arr[] = "Belgium";
			$arr[] = "Belize";
			$arr[] = "Benin";
			$arr[] = "Bermuda";
			$arr[] = "Bhutan";
			$arr[] = "Bolivia";
			$arr[] = "Bosnia and Herzegovina";
			$arr[] = "Botswana";
			$arr[] = "Bouvet Island";
			$arr[] = "Brazil";
			$arr[] = "Brunei";
			$arr[] = "Bulgaria";
			$arr[] = "Burkina Faso";
			$arr[] = "Burundi";
			$arr[] = "Cambodia";
			$arr[] = "Cameroon";
			$arr[] = "Canada";
			$arr[] = "Cape Verde";
			$arr[] = "Central African Republic";
			$arr[] = "Chad";
			$arr[] = "Chile";
			$arr[] = "Christmas Islands";
			$arr[] = "Cocos (keeling) Islands";
			$arr[] = "Colombia";
			$arr[] = "Comoros";
			$arr[] = "Congo (Congo-Kinshasa)";
			$arr[] = "Congo";
			$arr[] = "Cook Islands";
			$arr[] = "Costa Rica";
			$arr[] = "Cote D'Ivoire";
			$arr[] = "中华人民共和国";
			$arr[] = "Croatia";
			$arr[] = "Cuba";
			$arr[] = "Czech";
			$arr[] = "Cyprus";
			$arr[] = "Denmark";
			$arr[] = "Djibouti";
			$arr[] = "Dominica";
			$arr[] = "East Timor";
			$arr[] = "Ecuador";
			$arr[] = "Egypt";
			$arr[] = "Equatorial Guinea";
			$arr[] = "Eritrea";
			$arr[] = "Estonia";
			$arr[] = "Ethiopia";
			$arr[] = "Faroe Islands";
			$arr[] = "Fiji";
			$arr[] = "Finland";
			$arr[] = "France";
			$arr[] = "MetropolitanFrance";
			$arr[] = "French Guiana";
			$arr[] = "French Polynesia";
			$arr[] = "Gabon";
			$arr[] = "Gambia";
			$arr[] = "Georgia";
			$arr[] = "Germany";
			$arr[] = "Ghana";
			$arr[] = "Gibraltar";
			$arr[] = "Greece";
			$arr[] = "Grenada";
			$arr[] = "Guadeloupe";
			$arr[] = "Guam";
			$arr[] = "Guatemala";
			$arr[] = "Guernsey";
			$arr[] = "Guinea-Bissau";
			$arr[] = "Guinea";
			$arr[] = "Guyana";
			$arr[] = "Haiti";
			$arr[] = "Honduras";
			$arr[] = "Hungary";
			$arr[] = "Iceland";
			$arr[] = "India";
			$arr[] = "Indonesia";
			$arr[] = "Iran";
			$arr[] = "Iraq";
			$arr[] = "Ireland";
			$arr[] = "Isle of Man";
			$arr[] = "Israel";
			$arr[] = "Italy";
			$arr[] = "Jamaica";
			$arr[] = "Japan";
			$arr[] = "Jersey";
			$arr[] = "Jordan";
			$arr[] = "Kazakhstan";
			$arr[] = "Kenya";
			$arr[] = "Kiribati";
			$arr[] = "Korea (South)";
			$arr[] = "Korea (North)";
			$arr[] = "Kuwait";
			$arr[] = "Kyrgyzstan";
			$arr[] = "Laos";
			$arr[] = "Latvia";
			$arr[] = "Lebanon";
			$arr[] = "Lesotho";
			$arr[] = "Liberia";
			$arr[] = "Libya";
			$arr[] = "Liechtenstein";
			$arr[] = "Lithuania";
			$arr[] = "Luxembourg";
			$arr[] = "Macedonia";
			$arr[] = "Malawi";
			$arr[] = "Malaysia";
			$arr[] = "Madagascar";
			$arr[] = "Maldives";
			$arr[] = "Mali";
			$arr[] = "Malta";
			$arr[] = "Marshall Islands";
			$arr[] = "Martinique";
			$arr[] = "Mauritania";
			$arr[] = "Mauritius";
			$arr[] = "Mayotte";
			$arr[] = "Mexico";
			$arr[] = "Micronesia";
			$arr[] = "Moldova";
			$arr[] = "Monaco";
			$arr[] = "Mongolia";
			$arr[] = "Montenegro";
			$arr[] = "Montserrat";
			$arr[] = "Morocco";
			$arr[] = "Mozambique";
			$arr[] = "Myanmar";
			$arr[] = "Namibia";
			$arr[] = "Nauru";
			$arr[] = "Nepal";
			$arr[] = "Netherlands";
			$arr[] = "New Caledonia";
			$arr[] = "New Zealand";
			$arr[] = "Nicaragua";
			$arr[] = "Niger";
			$arr[] = "Nigeria";
			$arr[] = "Niue";
			$arr[] = "Norfolk Island";
			$arr[] = "Norway";
			$arr[] = "Oman";
			$arr[] = "Pakistan";
			$arr[] = "Palau";
			$arr[] = "Palestine";
			$arr[] = "Panama";
			$arr[] = "Papua New Guinea";
			$arr[] = "Peru";
			$arr[] = "Philippines";
			$arr[] = "Pitcairn Islands";
			$arr[] = "Poland";
			$arr[] = "Portugal";
			$arr[] = "Puerto Rico";
			$arr[] = "Qatar";
			$arr[] = "Reunion";
			$arr[] = "Romania";
			$arr[] = "Rwanda";
			$arr[] = "Russian Federation";
			$arr[] = "Saint Helena";
			$arr[] = "Saint Kitts-Nevis";
			$arr[] = "Saint Lucia";
			$arr[] = "Saint Vincent and the Grenadines";
			$arr[] = "El Salvador";
			$arr[] = "Samoa";
			$arr[] = "San Marino";
			$arr[] = "Sao Tome and Principe";
			$arr[] = "Saudi Arabia";
			$arr[] = "Senegal";
			$arr[] = "Seychelles";
			$arr[] = "Sierra Leone";
			$arr[] = "Singapore";
			$arr[] = "Serbia";
			$arr[] = "Slovakia";
			$arr[] = "Slovenia";
			$arr[] = "Solomon Islands";
			$arr[] = "Somalia";
			$arr[] = "South Africa";
			$arr[] = "Spain";
			$arr[] = "Sri Lanka";
			$arr[] = "Sudan";
			$arr[] = "Suriname";
			$arr[] = "Swaziland";
			$arr[] = "Sweden";
			$arr[] = "Switzerland";
			$arr[] = "Syria";
			$arr[] = "Tajikistan";
			$arr[] = "Tanzania";
			$arr[] = "Thailand";
			$arr[] = "Trinidad and Tobago";
			$arr[] = "Timor-Leste";
			$arr[] = "Togo";
			$arr[] = "Tokelau";
			$arr[] = "Tonga";
			$arr[] = "Tunisia";
			$arr[] = "Turkey";
			$arr[] = "Turkmenistan";
			$arr[] = "Tuvalu";
			$arr[] = "Uganda";
			$arr[] = "Ukraine";
			$arr[] = "United Arab Emirates";
			$arr[] = "United Kingdom";
			$arr[] = "United States";
			$arr[] = "Uruguay";
			$arr[] = "Uzbekistan";
			$arr[] = "Vanuatu";
			$arr[] = "Vatican City";
			$arr[] = "Venezuela";
			$arr[] = "Vietnam";
			$arr[] = "Wallis and Futuna";
			$arr[] = "Western Sahara";
			$arr[] = "Yemen";
			$arr[] = "Yugoslavia";
			$arr[] = "Zambia";
			$arr[] = "Zimbabwe";
			return $arr;
		
	}
	//获取当前个人信息功能
	public function profileinfo(){
			$where['userid'] = $_SESSION['eladevp']['userid'];
			$user = M("user");
			$userinfo = $user->where($where)->find();
		/* if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==1){
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
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==5){
			$where['didid'] = $_SESSION['eladevp']['diduid'];
			$didinfo = M("didinfo");
			$userinfo=$didinfo->where($where)->find();
		} */
		return $userinfo;
	}
	//编辑功能
	public function editprofile(){
		$data['firstname'] = $_POST['firstname'];
		$data['lastname'] = $_POST['lastname'];
		$data['country'] = $_POST['country'];
		$data['city'] = $_POST['city'];
		$data['bio'] = $_POST['bio'];
		$data['moreurl'] = $_POST['moreurl'];
		$data['company'] = $_POST['company'];
		$data['email'] = $_POST['email'];
		$data['nickname'] = $_POST['nickname'];
		$where['userid'] = $_SESSION['eladevp']['userid'];
		$user = M("user");
		$rs = $user->where($where)->save($data);
		/* if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==1){
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
			$data['email'] = $_POST['email'];
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
			$data['email'] = $_POST['email'];
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
			$data['email'] = $_POST['email'];
			$where['wechatuid'] = $_SESSION['eladevp']['wechatuid'];
			$wechatinfo = M("wechatinfo");
			$rs = $wechatinfo->where($where)->save($data);
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==5){
			$data['firstname'] = $_POST['firstname'];
			$data['lastname'] = $_POST['lastname'];
			$data['country'] = $_POST['country'];
			$data['city'] = $_POST['city'];
			$data['bio'] = $_POST['bio'];
			$data['moreurl'] = $_POST['moreurl'];
			$data['company'] = $_POST['company'];
			$data['email'] = $_POST['email'];
			$where['didid'] = $_SESSION['eladevp']['diduid'];
			$didinfo = M("didinfo");
			$rs = $didinfo->where($where)->save($data);
		} */
		if($rs){
			echo 1;
		}else{
			echo 0;
		}
	}
	//测试Token
	public function tokeninfo(){
		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']!=""){
			$this->assign("userheadimg",$_SESSION ['eladevp']['userheadimg']);
			$this->assign("logincate",$_SESSION ['eladevp']['logincate']);
		}else{
			$this->assign("logincate","");
		}
		//获取前十个测试币申请记录
		/* if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==1){
			$wherea['userid'] = $_SESSION ['eladevp']['userid'];
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==2){
			$wherea['userid'] = $_SESSION ['eladevp']['rcuid'];
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==3){
			$wherea['userid'] = $_SESSION ['eladevp']['githubuid'];
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==4){
			$wherea['userid'] = $_SESSION ['eladevp']['wechatuid'];
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==5){
			$wherea['userid'] = $_SESSION ['eladevp']['diduid'];
		} */
		$wherea['userid'] = $_SESSION ['eladevp']['userid'];
		$applyela = M("applytestela");
		$rslist = $applyela->where($wherea)->order("addtime desc")->limit("0,10")->select();
		if($rslist){
			if($_SESSION ['eladevp']['lang']=="cn"){
				for($i=0;$i<count($rslist);$i++){
					$rslist[$i]['adddate'] = date("Y年m月d日 H:i",$rslist[$i]['addtime']);
					if($rslist[$i]['status'] ==3){
						$rslist[$i]['curstatus'] = "成功";
					}elseif($rslist[$i]['status'] ==1){
						$rslist[$i]['curstatus'] = "未确认";
					}else{
						$rslist[$i]['curstatus'] = "失败";
					}
				}
			}else{
				for($i=0;$i<count($rslist);$i++){
					$rslist[$i]['adddate'] = date("M d,Y h:i A",$rslist[$i]['addtime']);
					if($rslist[$i]['status'] ==3){
						$rslist[$i]['curstatus'] = "Success";
					}elseif($rslist[$i]['status'] ==1){
						$rslist[$i]['curstatus'] = "Unconfirmed";
					}else{
						$rslist[$i]['curstatus'] = "Fail";
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
		$isread = $this->getnoreadnotify();
			$this->assign("profileinfo",$this->profileinfo());
		$this->assign("isread",$isread);
		$this->assign("pcount",$pcount);
		$this->assign("applylist",$rslist);
		$this->assign("curhost","https://".$_SERVER['HTTP_HOST']."/");
		$this->display();
	}
	//获取指定数量的页面
	public function rslimit(){
		$curp = $_POST['curp'];
		$wherea['userid'] = $_SESSION ['eladevp']['userid'];
		/* if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==1){
			$wherea['userid'] = $_SESSION ['eladevp']['userid'];
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==2){
			$wherea['userid'] = $_SESSION ['eladevp']['rcuid'];
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==3){
			$wherea['userid'] = $_SESSION ['eladevp']['githubuid'];
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==4){
			$wherea['userid'] = $_SESSION ['eladevp']['wechatuid'];
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==5){
			$wherea['userid'] = $_SESSION ['eladevp']['diduid'];
		} */
		$startnum = ($curp - 1)*10;
		$applyela = M("applytestela");
		$rslist = $applyela->where($wherea)->order("addtime desc")->limit($startnum.",10")->select();
		if($rslist){
			if($_SESSION ['eladevp']['lang']=="cn"){
				for($i=0;$i<count($rslist);$i++){
					$rslist[$i]['adddate'] = date("Y年m月d日 H:i",$rslist[$i]['addtime']);
					if($rslist[$i]['status'] ==3){
						$rslist[$i]['curstatus'] = "成功";
					}elseif($rslist[$i]['status'] ==1){
						$rslist[$i]['curstatus'] = "未确认";
					}else{
						$rslist[$i]['curstatus'] = "失败";
					}
				}
			}else{
				for($i=0;$i<count($rslist);$i++){
					$rslist[$i]['adddate'] = date("M d,Y h:i A",$rslist[$i]['addtime']);
					if($rslist[$i]['status'] ==3){
						$rslist[$i]['curstatus'] = "Success";
					}elseif($rslist[$i]['status'] ==1){
						$rslist[$i]['curstatus'] = "Unconfirmed";
					}else{
						$rslist[$i]['curstatus'] = "Fail";
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
		$data = $this->post_by_curl(C("APPLY_TESTELA_URL"),$data_string);
		$aw = json_decode($data);
		$data = '{"status":0,"error":"","info":{}}';
		$aw = json_decode($data,true);
		if($aw['status']==0){
			$rs = $this->addtestela($_POST['testelaadr']);
		}else{
			$rs = 0;
		}
		echo $rs;
	}
	//加入信息到Token表
	public function addtestela($eladr){
		$data['userid'] = $_SESSION ['eladevp']['userid'];
		/* if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==1){
			$data['userid'] = $_SESSION ['eladevp']['userid'];
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==2){
			$data['userid'] = $_SESSION ['eladevp']['rcuid'];
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==3){
			$data['userid'] = $_SESSION ['eladevp']['githubuid'];
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==4){
			$data['userid'] = $_SESSION ['eladevp']['wechatuid'];
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==5){
			$data['userid'] = $_SESSION ['eladevp']['diduid'];
		} */
		//$data['userid'] = $_SESSION ['eladevp']['userid'];
		$data['addtime'] = time();
		$data['eladr'] = $eladr;
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
		echo 1;
		//redirect("http://".$_SERVER['HTTP_HOST']);
	}
	public function removeuserrelation(){
		$cate = $_POST['cate'];
		$userrelation = M("userrelation");
		$where['mainuser'] = $_SESSION['eladevp']['userid'];
		if($cate=="3"){
			$data['githubuserid'] = "";
		}elseif($cate=="4"){
			$data['wechatuserid'] = "";
		}elseif($cate=="5"){
			$data['didid'] = "";
		}
		$rs = $userrelation->where($where)->save($data);
		//var_dump($userrelation->getlastsql());
		 if($rs){
			echo 1;
		}else{
			echo 0;
		}
	}
	
	
	//解绑账户
	public function removeuserrelations(){
		$cate = $_POST['cate'];
		//判断当前账号是否是主账号，解除后是否是只剩下一个记录，如果是则整条删除
		$relationuinfo = $this->relationuinfo();
		$userrelation = M("userrelation");
		if($cate=="3"){
				$uid = $relationuinfo['githubuserid'];
			//判断是否是github账号
			$data['githubuserid'] = "";
			$where['githubuserid'] = $uid;
		}elseif($cate=="4"){
			//判断是否是wechat账号
				$uid = $relationuinfo['wechatuserid'];
			$data['wechatuserid'] = "";
			$where['wechatuserid'] = $uid;
		}elseif($cate=="5"){
			//判断是否是did账号
				$uid = $relationuinfo['didid'];
			$data['didid'] = "";
			$where['didid'] = $uid;
		}
		if($relationuinfo!="0"){
			if($cate=="3"){
				if($relationuinfo["ustatus"]==1){
					if($relationuinfo["rcuserid"]=="" && $relationuinfo["didid"]=="" && $relationuinfo["wechatuserid"]==""){
						$rs = $userrelation->where($where)->delete();
						if($rs){
							echo 1;
						}else{
							echo 0;
						}
					}else{
						$rs = $userrelation->where($where)->save($data);
						if($rs){
							echo 1;
						}else{
							echo 0;
						}
					}
				}elseif($relationuinfo["ustatus"]==2){
					if($relationuinfo["reguserid"]=="" && $relationuinfo["didid"]=="" && $relationuinfo["wechatuserid"]==""){
						$rs = $userrelation->where($where)->delete();
						if($rs){
							echo 1;
						}else{
							echo 0;
						}
					}else{
						$rs = $userrelation->where($where)->save($data);
						if($rs){
							echo 1;
						}else{
							echo 0;
						}
					}
				}elseif($relationuinfo["ustatus"]==4){
					if($relationuinfo["rcuserid"]=="" && $relationuinfo["didid"]=="" && $relationuinfo["reguserid"]==""){
						$rs = $userrelation->where($where)->delete();
						if($rs){
							echo 1;
						}else{
							echo 0;
						}
					}else{
						$rs = $userrelation->where($where)->save($data);
						if($rs){
							echo 1;
						}else{
							echo 0;
						}
					}
				}elseif($relationuinfo["ustatus"]==5){
					if($relationuinfo["rcuserid"]=="" && $relationuinfo["reguserid"]=="" && $relationuinfo["wechatuserid"]==""){
						$rs = $userrelation->where($where)->delete();
						if($rs){
							echo 1;
						}else{
							echo 0;
						}
					}else{
						$rs = $userrelation->where($where)->save($data);
						if($rs){
							echo 1;
						}else{
							echo 0;
						}
					}
				}
			}elseif($cate==4){
				if($relationuinfo["ustatus"]==1){
					if($relationuinfo["rcuserid"]=="" && $relationuinfo["didid"]=="" && $relationuinfo["githubuserid"]==""){
						$rs = $userrelation->where($where)->delete();
						if($rs){
							echo 1;
						}else{
							echo 0;
						}
					}else{
						$rs = $userrelation->where($where)->save($data);
						if($rs){
							echo 1;
						}else{
							echo 0;
						}
					}
				}elseif($relationuinfo["ustatus"]==2){
					if($relationuinfo["reguserid"]=="" && $relationuinfo["didid"]=="" && $relationuinfo["githubuserid"]==""){
						$rs = $userrelation->where($where)->delete();
						if($rs){
							echo 1;
						}else{
							echo 0;
						}
					}else{
						$rs = $userrelation->where($where)->save($data);
						if($rs){
							echo 1;
						}else{
							echo 0;
						}
					}
				}elseif($relationuinfo["ustatus"]==3){
					if($relationuinfo["rcuserid"]=="" && $relationuinfo["didid"]=="" && $relationuinfo["reguserid"]==""){
						$rs = $userrelation->where($where)->delete();
						if($rs){
							echo 1;
						}else{
							echo 0;
						}
					}else{
						$rs = $userrelation->where($where)->save($data);
						if($rs){
							echo 1;
						}else{
							echo 0;
						}
					}
				}elseif($relationuinfo["ustatus"]==5){
					if($relationuinfo["rcuserid"]=="" && $relationuinfo["reguserid"]=="" && $relationuinfo["githubuserid"]==""){
						$rs = $userrelation->where($where)->delete();
						if($rs){
							echo 1;
						}else{
							echo 0;
						}
					}else{
						$rs = $userrelation->where($where)->save($data);
						if($rs){
							echo 1;
						}else{
							echo 0;
						}
					}
				}
			}elseif($cate==5){
				if($relationuinfo["ustatus"]==1){
					if($relationuinfo["rcuserid"]=="" && $relationuinfo["wechatuserid"]=="" && $relationuinfo["githubuserid"]==""){
						$rs = $userrelation->where($where)->delete();
						if($rs){
							echo 1;
						}else{
							echo 0;
						}
					}else{
						$rs = $userrelation->where($where)->save($data);
						if($rs){
							echo 1;
						}else{
							echo 0;
						}
					}
				}elseif($relationuinfo["ustatus"]==2){
					if($relationuinfo["reguserid"]=="" && $relationuinfo["wechatuserid"]=="" && $relationuinfo["githubuserid"]==""){
						$rs = $userrelation->where($where)->delete();
						if($rs){
							echo 1;
						}else{
							echo 0;
						}
					}else{
						$rs = $userrelation->where($where)->save($data);
						if($rs){
							echo 1;
						}else{
							echo 0;
						}
					}
				}elseif($relationuinfo["ustatus"]==3){
					if($relationuinfo["rcuserid"]=="" && $relationuinfo["wechatuserid"]=="" && $relationuinfo["reguserid"]==""){
						$rs = $userrelation->where($where)->delete();
						if($rs){
							echo 1;
						}else{
							echo 0;
						}
					}else{
						$rs = $userrelation->where($where)->save($data);
						if($rs){
							echo 1;
						}else{
							echo 0;
						}
					}
				}elseif($relationuinfo["ustatus"]==4){
					if($relationuinfo["rcuserid"]=="" && $relationuinfo["reguserid"]=="" && $relationuinfo["githubuserid"]==""){
						$rs = $userrelation->where($where)->delete();
						if($rs){
							echo 1;
						}else{
							echo 0;
						}
					}else{
						$rs = $userrelation->where($where)->save($data);
						if($rs){
							echo 1;
						}else{
							echo 0;
						}
					}
				}
			}
		}else{
			echo 0;
		}

		/* 
		$cate = $_POST['cate'];
		$relationuinfo = $this->relationuinfo();
		if($relationuinfo!="0"){
			$str = "";
			if($relationuinfo['reguserid']!=""){
				$str = $str."1";
			}else{
				$str = $str."0";
			}
			if($relationuinfo['rcuserid']!=""){
				$str = $str."2";
			}else{
				$str = $str."0";
			}
			if($relationuinfo['githubuserid']!=""){
				$str = $str."3";
			}else{
				$str = $str."0";
			}
			if($relationuinfo['wechatuserid']!=""){
				$str = $str."4";
			}else{
				$str = $str."0";
			}
			if($relationuinfo['didid']!=""){
				$str = $str."5";
			}else{
				$str = $str."0";
			}
			if($cate=="3"){
				$uid = $relationuinfo['githubuserid'];
			}else if($cate=="4"){
				$uid = $relationuinfo['wechatuserid'];
			}else if($cate=="5"){
				$uid = $relationuinfo['didid'];
			}
		}else{
			exit();
		}
		$userrelation = M("userrelation");
		if($cate=="3"){
			//判断是否是github账号
			$where['githubuserid'] = $uid;
			$data['githubuserid'] = "";
			$userrelationinfo = $userrelation->where($where)->find();
		}else if($cate=="4"){
			//判断是否是github账号
			$where['wechatuserid'] = $uid;
			$data['wechatuserid'] = "";
			$userrelationinfo = $userrelation->where($where)->find();
		}else if($cate=="5"){
			//判断是否是did账号
			$where['didid'] = $uid;
			$data['didid'] = "";
			$userrelationinfo = $userrelation->where($where)->find();
		}
		$userrelationinfo = $userrelation->where($where)->find();
		if($userrelationinfo){
			if($userrelationinfo['mainuser']==$userrelationinfo['githubuserid'] || $userrelationinfo['mainuser']==$userrelationinfo['wechatuserid']){
				//存在并且是主账号，则删除
				$rs = $userrelation->where($where)->delete();
				if($rs){
					echo 1;
				}else{
					echo 0;
				}
			}else{
				//存在不是主账号，判断是否是RC账号或者注册账号
				if($userrelationinfo['mainuser']==$userrelationinfo['rcuserid']){
					if(substr($str,1,3)=="234"){
						$rs = $userrelation->where($where)->save($data);
						if($rs){
							echo 1;
						}else{
							echo 0;
						}
						
					}else{
						$rs = $userrelation->where($where)->delete();
						if($rs){
							echo 1;
						}else{
							echo 0;
						}
					}
					
					
				}
				if($userrelationinfo['mainuser']==$userrelationinfo['reguserid']){
					if($str=="1034"){
						$rs = $userrelation->where($where)->save($data);
						if($rs){
							echo 1;
						}else{
							echo 0;
						}
						
					}else{
						$rs = $userrelation->where($where)->delete();
						if($rs){
							echo 1;
						}else{
							echo 0;
						}
					}
					
					
				}
			}
		} */
	}
	public function addcommenthistory(){
		$data['commentid'] = $_POST['commentid'];
		$commenthistory = M("commenthistory");
		$data['userid'] = $_SESSION['eladevp']['userid'];
		$data['cate'] = 1;
		$rs = $commenthistory->add($data);
		/* if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==1){
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
		} */
		if($rs){
			return 1;
		}else{
			return 0;
		}
	}
	public function delcommenthistory(){
		$where['commentid'] = $_POST['commentid'];
		$commenthistory = M("commenthistory");
		$where['userid'] = $_SESSION['eladevp']['userid'];
		$rs = $commenthistory->where($where)->delete();
		/* if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==1){
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
		} */
		if($rs){
			return 1;
		}else{
			return 0;
		}
	}
	//消息通知列表
	public function notifylist(){
		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']!=""){
			$this->assign("logincate",$_SESSION ['eladevp']['logincate']);
			$this->assign("userheadimg",$_SESSION ['eladevp']['userheadimg']);
		}else{
			$this->assign("logincate","");
		}
		$notice = M("notice");
		$noticelist = $notice->order("addtime desc")->limit("0,10")->select();
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
		if($_SESSION ['eladevp']['lang']=="cn"){
			$this->assign("lang","cn");
		}else{
			$this->assign("lang","en");
		}
		$isread = $this->getnoreadnotify();
		$this->assign("profileinfo",$this->profileinfo());
		$this->assign("isread",$isread);
		$this->assign("pcount",$pcount);
		$this->assign("noticelist",$noticelist);
		$this->assign("curhost","https://".$_SERVER['HTTP_HOST']."/");	
		$this->display();
	}
	//获取指定数量的页面
	public function noticelimit(){
		$curp = $_POST['curp'];
		$startnum = ($curp - 1)*10;
		$notice = M("notice");
		$rslist = $notice->order("addtime desc")->limit($startnum.",10")->select();
		if($rslist){
			if($_SESSION ['eladevp']['lang']=="cn"){
				for($i=0;$i<count($rslist);$i++){
					$rslist[$i]['adddate'] = date("Y-m-d",$rslist[$i]['addtime']);
				}
			}else{
				for($i=0;$i<count($rslist);$i++){
					$rslist[$i]['adddate'] = date("M d,Y",$rslist[$i]['addtime']);
				}
			}
		}
		echo json_encode($rslist);
	}
	//新增消息通知
	public function addnotify(){
		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']!=""){
			$this->assign("logincate",$_SESSION ['eladevp']['logincate']);
			$this->assign("userheadimg",$_SESSION ['eladevp']['userheadimg']);
		}else{
			$this->assign("logincate","");
		}
		$this->assign("profileinfo",$this->profileinfo());
		//分钟
		for($i=0;$i<60;$i++){
		  if($i<=9){
			$minlist[] = "0".$i;  
		  }else{
			$minlist[] = $i;   
		  }
		}
		//小时
		for($j=0;$j<24;$j++){
		  if($j<=9){
			$hourlist[] = "0".$j;  
		  }else{
			$hourlist[] = $j;   
		  }
		}
		//日期
		for($k=1;$k<32;$k++){
		  if($k<=9){
			$daylist[] = "0".$k;  
		  }else{
			$daylist[] = $k;   
		  }
		}
		//月份
		for($l=1;$l<13;$l++){
		  if($l<=9){
			$monlist[] = "0".$l;  
		  }else{
			$monlist[] = $l;   
		  }
		}
		//年份
		for($m=2019;$m<2030;$m++){
		  $yearlist[] = $m; 
		}
		$this->assign("yearlist",$yearlist);
		$this->assign("monlist",$monlist);
		$this->assign("daylist",$daylist);
		$this->assign("hourlist",$hourlist);
		$this->assign("minlist",$minlist);
		$isread = $this->getnoreadnotify();
		$this->assign("isread",$isread);
		$this->assign("randid",$this->getRandomString(5).time());
		$this->assign("curhost","https://".$_SERVER['HTTP_HOST']."/");
		$this->display();
	}
	
	//保存到草稿
	public function editdraftnotifyfunc(){
		$where['randid'] = $_POST['randid'];
		$notice = M("notice");
		$rsa = $notice->where($where)->find();
		if($rsa){
			$data['noticetitle'] = $_POST['title'];
			$data['contents'] = $_POST['contents'];
			$data['noticetitleen'] = $_POST['titleen'];
			$data['contentsen'] = $_POST['contentsen'];
			$data['author'] = $_SESSION['eladevp']['userid'];
			$data['draft'] = 1;
			$data['ishomepage'] = $_POST['ishomepage'];
			$data['notifywho'] = "";
			$data['pushnotifyset'] = $_POST['pushnotifyset'];
			//$data['publishtime'] = $_POST['publishtime'];
			if($_POST['publishtime']!=""){
				$data['publishtime'] = substr($_POST['publishtime'],0,10);
			}else{
				$data['publishtime'] = "0";
			}
			$data['viewnum'] = 1;
			$data['edittime'] = time();
			$rs = $notice->where($where)->save($data);
			if($rs){
				echo 1;
			}else{
				echo 0;
			}
		}else{
			$data['addtime'] = time();
			$data['noticetitle'] = $_POST['title'];
			$data['contents'] = $_POST['contents'];
			$data['noticetitleen'] = $_POST['titleen'];
			$data['contentsen'] = $_POST['contentsen'];
			$data['author'] = $_SESSION['eladevp']['userid'];
			$data['draft'] = 1;
			$data['ishomepage'] = $_POST['ishomepage'];
			$data['notifywho'] = "";
			$data['pushnotifyset'] = $_POST['pushnotifyset'];
			//$data['publishtime'] = $_POST['publishtime'];
			if($_POST['publishtime']!=""){
				$data['publishtime'] = substr($_POST['publishtime'],0,10);
			}else{
				$data['publishtime'] = "0";
			}
			$data['viewnum'] = 1;
			$data['edittime'] = time();
			$data['randid'] = $_POST['randid'];
			$rs = $notice->add($data);
			if($rs){
				echo 1;
			}else{
				echo 0;
			}
		}
	}
	//获取随机数
	public function getRandomString($len, $chars=null)  {  
		if (is_null($chars)) {  
			$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
		}  
		mt_srand(10000000*(double)microtime());  
		for ($i = 0, $str = '', $lc = strlen($chars)-1; $i < $len; $i++) {  
			$str .= $chars[mt_rand(0, $lc)];  
		}  
		return $str;  
	}
	//新增消息通知
	public function addnotifyfunc(){
		/* $notice = M("notice");
		$data['addtime'] = time();
		$data['noticetitle'] = $_POST['title'];
		$data['contents'] = $_POST['contents'];
		$data['author'] = $_SESSION['eladevp']['userid'];
		$data['draft'] = $_POST['draft'];
		$data['ishomepage'] = $_POST['ishomepage'];
		$data['notifywho'] = $_POST['notifywho'];
		$data['pushnotifyset'] = $_POST['pushnotifyset'];
		$data['publishtime'] = $_POST['publishtime'];
		$data['viewnum'] = 1;
		$data['edittime'] = time();
		$data['randid'] = $_POST['randid'];
		$rs = $notice->add($data);
		if($rs){
			echo 1;
		}else{
			echo 0;
		} */
		
		$where['randid'] = $_POST['randid'];
		$notice = D("notice");
		$rsa = $notice->where($where)->find();
		if($rsa){
			$data['noticetitle'] = $_POST['title'];
			$data['contents'] = $_POST['contents'];
			$data['noticetitleen'] = $_POST['titleen'];
			$data['contentsen'] = $_POST['contentsen'];
			$data['author'] = $_SESSION['eladevp']['userid'];
			$data['draft'] = 0;
			$data['ishomepage'] = $_POST['ishomepage'];
			$data['notifywho'] = "";
			$data['pushnotifyset'] = $_POST['pushnotifyset'];
			if($_POST['publishtime']!=""){
				$data['publishtime'] = substr($_POST['publishtime'],0,10);
			}else{
				$data['publishtime'] = "0";
			}
			$data['edittime'] = time();
			$rs = $notice->where($where)->save($data);
			if($rs){
				if($_POST['pushnotifyset']==1){
					$url = "https://".$_SERVER['HTTP_HOST']."/index.php/Home/Notify/detail?id=".$rsa["id"];
					$title = $_POST['title'];
					$titleen = $_POST['titleen'];
					//var_dump($url);
					$this->sendmailfornotify($url,$title,$titleen);	
				}
				echo 1;
			}else{
				echo 0;
			}
		}else{
			$data['addtime'] = time();
			$data['noticetitle'] = $_POST['title'];
			$data['contents'] = $_POST['contents'];
			$data['noticetitleen'] = $_POST['titleen'];
			$data['contentsen'] = $_POST['contentsen'];
			$data['author'] = $_SESSION['eladevp']['userid'];
			$data['draft'] = 0;
			$data['ishomepage'] = $_POST['ishomepage'];
			$data['notifywho'] = "";
			$data['pushnotifyset'] = $_POST['pushnotifyset'];
			//$data['publishtime'] = substr($_POST['publishtime'],0,10);
			if($_POST['publishtime']!=""){
				$data['publishtime'] = substr($_POST['publishtime'],0,10);
			}else{
				$data['publishtime'] = "0";
			}
			$data['viewnum'] = 1;
			$data['edittime'] = time();
			$data['randid'] = $_POST['randid'];
			$rs = $notice->add($data);
			if($rs){
				if($_POST['pushnotifyset']==1){
					$url = "https://".$_SERVER['HTTP_HOST']."/index.php/Home/Notify/detail?id=".$rs;
					$title = $_POST['title'];
					$titleen = $_POST['titleen'];
					//var_dump($url);
					$this->sendmailfornotify($url,$title,$titleen);	
				}
				echo 1;
				
			}else{
				echo 0;
			}
		}
	}
	//编辑消息通知
	public function editnotify(){
		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']!=""){
			$this->assign("logincate",$_SESSION ['eladevp']['logincate']);
			$this->assign("userheadimg",$_SESSION ['eladevp']['userheadimg']);
		}else{
			$this->assign("logincate","");
		}
		$where['id'] = $_GET['id'];
		$notice = M("notice");
		$noticedetail = $notice->where($where)->find();
		$isread = $this->getnoreadnotify();
		$this->assign("profileinfo",$this->profileinfo());
		//分钟
		for($i=0;$i<60;$i++){
		  if($i<=9){
			$minlist[] = "0".$i;  
		  }else{
			$minlist[] = $i;   
		  }
		}
		//小时
		for($j=0;$j<24;$j++){
		  if($j<=9){
			$hourlist[] = "0".$j;  
		  }else{
			$hourlist[] = $j;   
		  }
		}
		//日期
		for($k=1;$k<32;$k++){
		  if($k<=9){
			$daylist[] = "0".$k;  
		  }else{
			$daylist[] = $k;   
		  }
		}
		//月份
		for($l=1;$l<13;$l++){
		  if($l<=9){
			$monlist[] = "0".$l;  
		  }else{
			$monlist[] = $l;   
		  }
		}
		//年份
		for($m=2019;$m<2030;$m++){
		  $yearlist[] = $m; 
		}
		$this->assign("yearlist",$yearlist);
		$this->assign("monlist",$monlist);
		$this->assign("daylist",$daylist);
		$this->assign("hourlist",$hourlist);
		$this->assign("minlist",$minlist);
		//分割推送时间
		if($noticedetail['publishtime']!="" && $noticedetail['publishtime']!=0){
			$timestr = date("Y-m-d H:i:s",$noticedetail['publishtime']);
			$timearr = explode(" ",$timestr);
			//日期
			$dataarr = explode("-",$timearr[0]);
			$year = $dataarr[0];
			$mon = $dataarr[1];
			$day = $dataarr[2];
			//时分秒
			$hourarr = explode(":",$timearr[1]);
			$hour = $hourarr[0];
			$mintue = $hourarr[1];
			$this->assign("year",$year);
			$this->assign("mon",$mon);
			$this->assign("day",$day);
			$this->assign("hour",$hour);
			$this->assign("mintue",$mintue);
			$this->assign("publishtime","1");
		}else{
			$this->assign("publishtime","");
		}
		if($noticedetail){
			$noticedetail['contents'] = str_replace(array("\n","\r"),"",$noticedetail['contents']);
		}
		//var_dump($timestr);
		$this->assign("isread",$isread);
		$this->assign("noticeinfo",$noticedetail);
		$this->assign("curhost","https://".$_SERVER['HTTP_HOST']."/");
		$this->display();
	}
	//编辑消息通知
	public function editnotifyfunc(){
		$where['id'] = $_POST['id'];
		$notice = M("notice");
		$data['addtime'] = time();
		$data['noticetitle'] = $_POST['title'];
		$data['contents'] = $_POST['contents'];
		$data['noticetitleen'] = $_POST['titleen'];
		$data['contentsen'] = $_POST['contentsen'];
		$data['author'] = $_SESSION['eladevp']['userid'];
		$data['draft'] = $_POST['draft'];
		$data['ishomepage'] = $_POST['ishomepage'];
		$data['notifywho'] = "";
		$data['pushnotifyset'] = $_POST['pushnotifyset'];
		if($_POST['publishtime']!=""){
			$data['publishtime'] = substr($_POST['publishtime'],0,10);
		}else{
			$data['publishtime'] = "0";
		}
		//$data['publishtime'] = substr($_POST['publishtime'],0,10);
		$data['edittime'] = time();
		$rs = $notice->where($where)->save($data);
		if($rs){
			echo 1;
		}else{
			echo 0;
		}
	}
	//消息详细页面
	public function noticedetail(){
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
			if($_SESSION ['eladevp']['lang']=="cn"){
				$noticedetail['lastedittime'] = date("Y-m-d",$noticedetail['edittime']);
				$noticedetail['contents'] = str_replace("<img","<img style='width:100%;height:auto;' ",$noticedetail['contents']);
			}else{
				$noticedetail['lastedittime'] = date("M d,Y",$noticedetail['edittime']);
				$noticedetail['contents'] = str_replace("<img","<img style='width:100%;height:auto;' ",$noticedetail['contents']);
			}
			$noticelist = $this->getlastten($noticedetail['id']);
		}
		if($_SESSION ['eladevp']['lang']=="cn"){
			$this->assign("lang","cn");
		}else{
			$this->assign("lang","en");
		}
		
		$isread = $this->getnoreadnotify();
		$this->assign("profileinfo",$this->profileinfo());
		$this->assign("noticelist",$noticelist);
		$this->assign("isread",$isread);
		$this->assign("noticeinfo",$noticedetail);
		$this->assign("curhost","https://".$_SERVER['HTTP_HOST']."/");
		$this->display();
	}
	//消息详细页面randid
	public function noticedetailforrandid(){
		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']!=""){
			$this->assign("logincate",$_SESSION ['eladevp']['logincate']);
			$this->assign("userheadimg",$_SESSION ['eladevp']['userheadimg']);
		}else{
			$this->assign("logincate","");
		}
		$where['randid'] = $_GET['randid'];
		$notice = M("notice");
		$noticedetail = $notice->where($where)->find();
		$rs = $notice->where($where)->setInc('viewnum');
		if($noticedetail){
			if($_SESSION ['eladevp']['lang']=="cn"){
				$noticedetail['lastedittime'] = date("Y-m-d",$noticedetail['edittime']);
				$noticedetail['contents'] = str_replace("<img","<img style='width:100%;height:auto;' ",$noticedetail['contents']);
			}else{
				$noticedetail['lastedittime'] = date("M d,Y",$noticedetail['edittime']);
				$noticedetail['contents'] = str_replace("<img","<img style='width:100%;height:auto;' ",$noticedetail['contents']);
			}
			$noticelist = $this->getlastten($noticedetail['id']);
		}
		if($_SESSION ['eladevp']['lang']=="cn"){
			$this->assign("lang","cn");
		}else{
			$this->assign("lang","en");
		}
		$isread = $this->getnoreadnotify();
		$this->assign("profileinfo",$this->profileinfo());
		$this->assign("noticelist",$noticelist);
		$this->assign("isread",$isread);
		$this->assign("noticeinfo",$noticedetail);
		$this->assign("curhost","https://".$_SERVER['HTTP_HOST']."/");
		$this->display("noticedetail");
	}
	//删除指定消息
	public function delnotifyfunc(){
		$where['id'] = $_POST['id'];
		$notice = M("notice");
		$rs = $notice->where($where)->delete();
		if($rs){
			echo 1;
		}else{
			echo 0;
		}
	}
	//发送邮件到存在邮箱的用户
	public function sendmailfornotify($url,$title,$titleen){
		$user = M("user");
		$ulist = $user->select();
		if($ulist){
			for($i=0;$i<count($ulist);$i++){
				if($ulist[$i]['email']!=""){
					//if($_SESSION ['eladevp']['lang']=="cn"){
						$rs = SendMail($ulist[$i]['email'],"[New Notification] ".$titleen." [新公告] ".$title."","<p>There is a new notification from Elastos Developer website.</p><p>".$titleen."</p><p>Click this link to view more details:</p><p><a href='".$url."'>".$url."</a></p><p>Thanks</p><p>Elastos Team</p><br><br><br><br><br><p>亦来云开发者网站有一条新公告：</p><p>".$title."</p><p>点击链接查看更多：</p><p><a href='".$url."'>".$url."</a></p><p>谢谢</p><p>亦来云团队</p>");
					//}else{
					//	$rs = SendMail($ulist[$i]['email']," [New Notification] ".$title."","<p>There is a new notification from Elastos Developer website.</p><p>".$title."</p><p>Click this link to view more details:</p><p><a href='".$url."'>".$url."</a></p><p>Thanks</p><p>Elastos Team</p>");
					//}
				}
			}
		}
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
  //发布
  public function publishnotify(){
		$where['id'] = $_POST['id'];
		$notice = M("notice");
		$data['draft'] = 0;
		$rs = $notice->where($where)->save($data);
		if($rs){
			echo 1;
		}else{
			echo 0;
		}
  }
	//获取十条信息
/* 	public function getlastten($id){
		$where['id'] = array('NEQ',$id);
		$notice = M("notice");
		$rslist = $notice->where($where)->order("addtime desc")->limit("0,10")->select();
		return $rslist;
	}
	 */
	
	
	//获取指定ID的之后五条信息
	public function getlastten($id){
		$notice = M("notice");
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
						$startnum = ($pagenum -1)*10;
					/*  $rest = $curnum%10;
					if($rest){
						
					}
					if($pagenum==1){
					}else{
						$startnum = $curnum;
					} */
				}
			}
		}
		$rslista = $notice->where($where)->order("addtime desc")->limit($startnum,10)->select();
		return $rslista;
	}
	/*****
	
		普通用户的论坛部分
		
	******/
	//论坛列表
	public function forumlistshow(){
		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']!=""){
			$this->assign("logincate",$_SESSION ['eladevp']['logincate']);
			$this->assign("userheadimg",$_SESSION ['eladevp']['userheadimg']);
		}else{
			$this->assign("logincate","");
		}
		if(isset($_GET['topiccate']) && $_GET['topiccate']=="all"){
			$this->assign("topiccate","all");
			$arr = array_unique(array_merge($this->followedforum(),$this->myforumcomment(),$this->myforumadd()));
			$where['id'] = array("in",$arr);
			$where['pid'] = 0;
		}elseif(isset($_GET['topiccate']) && $_GET['topiccate']=="added"){
			$this->assign("topiccate","added");
			$where['pid'] = 0;
			$where['sender'] = $_SESSION ['eladevp']['userid'];
		}elseif(isset($_GET['topiccate']) && $_GET['topiccate']=="followed"){
			$this->assign("topiccate","followed");
			$where['id'] =array("in", array_unique($this->followedforum()));
		}elseif(isset($_GET['topiccate']) && $_GET['topiccate']=="commented"){
			$where['id'] =array("in", array_unique($this->myforumcomment()));
			$this->assign("topiccate","commented");
		}else{
			$this->assign("topiccate","all");
			$arr = array_unique(array_merge($this->followedforum(),$this->myforumcomment(),$this->myforumadd()));
			$where['id'] = array("in",$arr);
			$where['pid'] = 0;
		}
		$order = "id desc";
		$forumlist = $this->forumlist($where,$order);
		$isread = $this->getnoreadnotify();
		$this->assign("forumlist",$forumlist);
		$this->assign("pcount",$this->getforumcount($where));
		$this->assign("isread",$isread);
		$this->assign("curhost","https://".$_SERVER['HTTP_HOST']."/");
		$this->assign("profileinfo",$this->profileinfo());
		$this->display();
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
	//获取指定主题的ID的关注
	public function followedforum(){
		$where['followeduserid'] = $_SESSION ['eladevp']['userid'];
		$articlefollowed = M("articlefollowed");
		$articlefollowedlist = $articlefollowed->where($where)->field("articleid")->select();
		//return $articlefollowedlist;
		$arra = array();
		if($articlefollowedlist){
			for($i=0;$i<count($articlefollowedlist);$i++){
				$arra[$i] = $articlefollowedlist[$i]['articleid'];
			}
		}
		return $arra;
	}
	//获取论坛内容列表
	public function forumlist($where,$order){
		$article = M("article");
		$rslist = $article->where($where)->order($order)->limit("0,10")->select();
		if($rslist){
			for($i=0;$i<count($rslist);$i++){
				if(mb_strlen($rslist[$i]['title'],"utf-8")>40){
					$rslist[$i]['title'] = mb_substr($rslist[$i]['title'],0,40,'utf-8')."...";
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
	//我创建的主题
	public function myforumadd(){
		$where['sender'] = $_SESSION ['eladevp']['userid'];
		$where['pid'] = 0;
		$article = M("article");
		$rslist = $article->where($where)->field("id")->select();
		$arra = array();
		if($rslist){
			for($i=0;$i<count($rslist);$i++){
				$arra[$i] = $rslist[$i]['id'];
			}
		}
		return $arra;
	}
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
	//获取论坛内容列表
	public function forumlistjson(){
		if(isset($_POST['topiccate']) && $_POST['topiccate']=="all"){
			$arr = array_unique(array_merge($this->followedforum(),$this->myforumcomment(),$this->myforumadd()));
			$where['id'] = array("in",$arr);
			$where['pid'] = 0;
		}elseif(isset($_POST['topiccate']) && $_POST['topiccate']=="added"){
			$where['pid'] = 0;
			$where['sender'] = $_SESSION ['eladevp']['userid'];
		}elseif(isset($_POST['topiccate']) && $_POST['topiccate']=="followed"){
			$where['id'] =array("in", array_unique($this->followedforum()));
		}elseif(isset($_POST['topiccate']) && $_POST['topiccate']=="commented"){
			$where['id'] =array("in", array_unique($this->myforumcomment()));
		}else{
			$arr = array_unique(array_merge($this->followedforum(),$this->myforumcomment(),$this->myforumadd()));
			$where['id'] = array("in",$arr);
			$where['pid'] = 0;
		}
		$order = "id desc";
		$curp = $_POST['curp'];
		$startnum = ($curp - 1)*10;
		$article = M("article");
		$rslist = $article->where($where)->order($order)->limit($startnum.",10")->select();
		if($rslist){
			for($i=0;$i<count($rslist);$i++){
				if(mb_strlen($rslist[$i]['title'],"utf-8")>40){
					$rslist[$i]['title'] = mb_substr($rslist[$i]['title'],0,40,'utf-8')."...";
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
}
?>