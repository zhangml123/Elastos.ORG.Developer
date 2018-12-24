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
		$info = $this->relationuinfo();
		if($info!=0){
			$this->assign("info",$info);
		}else{
			$this->assign("info",0);
		}
		//var_dump($info);
		if(isset($_GET['mainuser']) && $_GET['mainuser']!=""){
			$this->assign("mainuser",$_GET['mainuser']);
		}else{
			$this->assign("mainuser","");
		}
		//var_dump($_SESSION ['eladevp']['logincate']);
		$this->assign("countrylist",$this->countrylist());
		$this->assign("uinfo",$userinfo);
		$this->assign("curhost","https://".$_SERVER['HTTP_HOST']."/");
		$this->display();
	}
	//判断关联的用户表
	public function relationuinfo(){
		$userrelation = M("userrelation");
		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==1){
			$where['reguserid'] = $_SESSION['eladevp']['userid'];
			$info = $userrelation->where($where)->find();
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==2){
			$where['rcuserid'] = $_SESSION['eladevp']['rcuid'];
			$info = $userrelation->where($where)->find();
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==3){
			$where['githubuserid'] = $_SESSION['eladevp']['githubuid'];
			$info=$userrelation->where($where)->find();
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==4){
			$where['wechatuserid'] = $_SESSION['eladevp']['wechatuid'];
			$info=$userrelation->where($where)->find();
		}
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
		//var_dump($wechatinfo->getlastsql());
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
			$this->assign("userheadimg",$_SESSION ['eladevp']['userheadimg']);
			$this->assign("logincate",$_SESSION ['eladevp']['logincate']);
		}else{
			$this->assign("logincate","");
		}
		//获取前十个测试币申请记录
		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==1){
			$wherea['userid'] = $_SESSION ['eladevp']['userid'];
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==2){
			$wherea['userid'] = $_SESSION ['eladevp']['rcuid'];
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==3){
			$wherea['userid'] = $_SESSION ['eladevp']['githubuid'];
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==4){
			$wherea['userid'] = $_SESSION ['eladevp']['wechatuid'];
		}
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
		$this->assign("pcount",$pcount);
		$this->assign("applylist",$rslist);
		$this->assign("curhost","https://".$_SERVER['HTTP_HOST']."/");
		$this->display();
	}
	//获取指定数量的页面
	public function rslimit(){
		$curp = $_POST['curp'];
		//$wherea['userid'] = $_SESSION ['eladevp']['userid'];
		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==1){
			$wherea['userid'] = $_SESSION ['eladevp']['userid'];
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==2){
			$wherea['userid'] = $_SESSION ['eladevp']['rcuid'];
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==3){
			$wherea['userid'] = $_SESSION ['eladevp']['githubuid'];
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==4){
			$wherea['userid'] = $_SESSION ['eladevp']['wechatuid'];
		}
		$startnum = ($curp - 1)*6;
		$applyela = M("applytestela");
		$rslist = $applyela->where($wherea)->order("addtime desc")->limit($startnum.",10")->select();
		if($rslist){
			if($_SESSION ['eladevp']['lang']=="cn"){
				for($i=0;$i<count($rslist);$i++){
					$rslist[$i]['adddate'] = date("Y-m-d",$rslist[$i]['addtime']);
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
					$rslist[$i]['adddate'] = date("M d,Y",$rslist[$i]['addtime']);
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
		//$wherea['userid'] = $_SESSION ['eladevp']['userid'];
		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==1){
			$data['userid'] = $_SESSION ['eladevp']['userid'];
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==2){
			$data['userid'] = $_SESSION ['eladevp']['rcuid'];
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==3){
			$data['userid'] = $_SESSION ['eladevp']['githubuid'];
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==4){
			$data['userid'] = $_SESSION ['eladevp']['wechatuid'];
		}
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
	//解绑账户
	public function removeuserrelation(){
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
			if($cate=="3"){
				$uid = $relationuinfo['githubuserid'];
			}else if($cate=="4"){
				$uid = $relationuinfo['wechatuserid'];
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
		}
	}
	public function addcommenthistory(){
		$data['commentid'] = $_POST['commentid'];
		$commenthistory = M("commenthistory");
		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==1){
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
		}
		if($rs){
			return 1;
		}else{
			return 0;
		}
	}
	public function delcommenthistory(){
		$where['commentid'] = $_POST['commentid'];
		$commenthistory = M("commenthistory");
		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==1){
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
		}
		if($rs){
			return 1;
		}else{
			return 0;
		}
	}
}
?>