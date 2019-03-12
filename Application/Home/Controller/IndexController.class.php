<?php
namespace Home\Controller;
use Think\Controller;
use Common\Controller\CommonbaseController;
class IndexController extends CommonbaseController {
    public function index(){
		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']!=""){
			$this->assign("logincate",$_SESSION ['eladevp']['logincate']);
			$this->assign("userheadimg",$_SESSION ['eladevp']['userheadimg']);
			$this->assign("profileinfo",$this->profileinfo());
		}else{
			$this->assign("logincate","");
			/* if(is_weixin()){
				$state = "W".time().$this->getRandomString(5);
				$_SESSION['eladevp']['wechatrand'] = $state;
				$cururl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
				$this->add($state);
				$url = 'https://open.weixin.qq.com/connect/oauth2/authorize?appid='.C('WEIXIN_APP_ID').'&redirect_uri='.urlencode(C('WECHAT_CALLBACK_URL')).'&response_type=code&scope=snsapi_userinfo&state='.$state.'||'.urlencode($cururl).'#wechat_redirect';
				header('Location: '.$url);
			} */
		}
		$isread = $this->getnoreadnotify();
		$this->assign("isread",$isread);
		$isreadrs = $this->getnoreadnotifyrs();
		$this->assign("isreadrs",$isreadrs);
		$this->assign("curhost","https://".$_SERVER['HTTP_HOST']."/");
		$this->display();
	}
	//顶部导航
	public function topnav(){
		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']!=""){
			$this->assign("logincate",$_SESSION ['eladevp']['logincate']);
		}else{
			$this->assign("logincate","");
		}
		$this->display();
	}
	//右侧
	public function resendtip(){
		$this->display();
	}
	//底部
	public function footer(){
		$this->display();
	}
	//右侧
	public function rasid(){
		$this->display();
	}
	//登录
	public function loginsid(){
		$this->display();
	}
	//注册
	public function signup(){
		$this->display();
	}
	//邮箱认证
	public function emailsid(){
		$this->display();
	}
	//忘记密码  发送邮件
	public function forgetpwd(){
		$this->display();
	}
	//确认邮件
	public function confirmemailcode(){
		$this->display();
	}
	//修改密码
	public function resetpwd(){
		$this->display();
	}
	//
	public function loginoutscuff(){
		$this->display();
	}
	//
	public function loginoutfail(){
		$this->display();
	}
	//移动端登录页面
	public function weblogin(){
		$this->display();
	}
	//移动端注册页面
	public function webreg(){
		$this->display();
	}
	//移动端注册验证码
	public function regcheckmailcode(){
		$this->display();
	}
	//移动端忘记密码邮箱webresetpwd
	public function webforgetpwdone(){
		$this->display();
	}
	//移动端重置密码验证码
	public function webforgetpwdtow(){
		$this->display();
	}
	//移动端重置密码
	public function webresetpwd(){
		$this->display();
	}
	//设置语言
	public function setlang(){
		if($_POST['lang']==1){
			$_SESSION ['eladevp']['lang'] = "cn";
		}else{
			$_SESSION ['eladevp']['lang'] = "en";
		}
	}
	public function qrcode(){
        Vendor('phpqrcode.phpqrcode');
        $object = new \QRcode();
		$state = time().$this->getRandomString(5);
		$_SESSION['eladevp']['wechatrand'] = $state;
		//$cururl = 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		$this->add($state);
		$url = 'https://open.weixin.qq.com/connect/oauth2/authorize?appid='.C('WEIXIN_APP_ID').'&redirect_uri='.urlencode(C('WECHAT_CALLBACK_URL')).'&response_type=code&scope=snsapi_userinfo&state='.$state.'#wechat_redirect';
        
 		$level=3;
        $size=3;
        $errorCorrectionLevel =intval($level) ;//容错级别
        $matrixPointSize = intval($size);//生成图片大小
        $object->png($url, false, $errorCorrectionLevel, $matrixPointSize, 2);
    }
	public function getRandomString($len, $chars=null)  {  
		if (is_null($chars)) {  
			$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		}  
		mt_srand(10000000*(double)microtime());  
		for ($i = 0, $str = '', $lc = strlen($chars)-1; $i < $len; $i++) {  
			$str .= $chars[mt_rand(0, $lc)];  
		}  
		return $str;  
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
	
	//新增到数据库
	public function add($state){
		$data['wechatrand'] = $state;
		$data['addtime'] = time();
		$staywechat = M('staywechat');
		$rs = $staywechat->add($data);
	}
	//查询并更新
	public function updatewechatinfo(){
		if(isset($_SESSION ['eladevp']['wechatrand']) && $_SESSION ['eladevp']['wechatrand']!=""){
		//首先判断是否存在
		$where['wechatrand'] = $_SESSION['eladevp']['wechatrand'];
		$staywechat = M('staywechat');
		$wechatinfo = M('wechatinfo');
		$user = M('user');
		$staychat  = $staywechat->where($where)->find();
		$dataa['wechatuid'] = $staychat['openid'];
		$dataa['wechatappid'] = $staychat['openid'];
		$dataa['nickname'] = $staychat['nickname'];
		$dataa['headimg'] = $staychat['headimg'];
		$dataa['city'] = $staychat['city'];
		//var_dump($staychat);
		if($staychat['openid']!=""){
			$wherea['wechatappid'] = $staychat['openid'];
			$rsinfo = $wechatinfo->where($wherea)->find();
			$rsa = $this->getuserrelation("","","",$staychat['openid'],"");
			if($rsinfo){
				//判断是否与User表关联
				//$whereb['wechatuid'] = $staychat['openid'];
				//$rsbinfo = $user->where($whereb)->find();
				//if($rsa){
					//构造User登录
					/* $_SESSION['eladevp']['userid'] = $rsbinfo['userid'];
					$_SESSION['eladevp']['userheadimg'] = $rsbinfo['headimg'];
					$_SESSION ['eladevp']['logincate'] = 1;
						$backrs = 1; */
					if($rsa=="0"){
						$_SESSION['eladevp']['wechatuid'] = $staychat['openid'];
						$_SESSION['eladevp']['userheadimg'] = $staychat['headimg'];
						$_SESSION ['eladevp']['logincate'] = 4;
						$backrs = 1;
					}else{
						$urelation = json_decode($rsa,true);
						if($urelation['ustatus']==1){
							//主账号是注册的Userid
							$uinfo = $this->userinfo($urelation['mainuid']);
							$_SESSION['eladevp']['userid'] = $uinfo['userid'];
							$_SESSION['eladevp']['userheadimg'] = $uinfo['headimg'];
							$_SESSION ['eladevp']['logincate'] = 1;
						$backrs = 1;
						}elseif($urelation['ustatus']==2){
							//主账号是注册的RCuid
							$uinfo = $this->rcinfo($urelation['mainuid']);
							$_SESSION['eladevp']['rcuid'] = $uinfo['rcuid'];
							$_SESSION['eladevp']['userheadimg'] = $uinfo['headimg'];
							$_SESSION['eladevp']['logincate'] = 2;
						$backrs = 1;
						}elseif($urelation['ustatus']==3){
							//主账号是注册的githuuid
							$uinfo = $this->githubinfo($urelation['mainuid']);
							$_SESSION['eladevp']['githubuid'] = $uinfo['githubuid'];
							$_SESSION['eladevp']['userheadimg'] = $uinfo['headimg'];
							$_SESSION['eladevp']['logincate'] = 3;
						$backrs = 1;
						}elseif($urelation['ustatus']==4){
							//主账号是注册的wechatuid
							$uinfo = $this->wechatinfo($urelation['mainuid']);
							$_SESSION['eladevp']['wechatuid'] = $uinfo['wechatuid'];
							$_SESSION['eladevp']['userheadimg'] = $uinfo['headimg'];
							$_SESSION['eladevp']['logincate'] = 4;
							$backrs = 1;
						}elseif($urelation['ustatus']==5){
							//主账号是注册的didid
							$uinfo = $this->didinfo($urelation['mainuid']);
							$_SESSION['eladevp']['didid'] = $uinfo['didid'];
							$_SESSION['eladevp']['userheadimg'] = $uinfo['headimg'];
							$_SESSION['eladevp']['logincate'] = 5;
							$backrs = 1;
						}else{
							$_SESSION['eladevp']['wechatuid'] = $staychat['openid'];
							$_SESSION['eladevp']['userheadimg'] = $staychat['headimg'];
							$_SESSION ['eladevp']['logincate'] = 4;
							$backrs = 1;
						}
					}
			}else{
				//新增到wechatinfo表
				$rsainfo = $wechatinfo->add($dataa);
				$_SESSION['eladevp']['wechatuid'] = $staychat['openid'];
				$_SESSION['eladevp']['userheadimg'] = $staychat['headimg'];
				$_SESSION ['eladevp']['logincate'] = 4;
				$backrs = 1;
			}
		}else{
			$backrs = 0;
		}
		echo $backrs;
	}else{
		echo 0;
	}
  }
   public function jumpnew(){
		$this->display();
   }
	public function newqrcode(){
        Vendor('phpqrcode.phpqrcode');
        $object = new \QRcode();
		$state = $_GET['lang'];
		//$_SESSION['eladevp']['wechatrand'] = $state;
		$jumpa = "https://".$_SERVER['HTTP_HOST']."/index.php/Home/Index/wechat";
		$url = 'https://open.weixin.qq.com/connect/oauth2/authorize?appid='.C('WEIXIN_APP_ID').'&redirect_uri='.urlencode($jumpa).'&response_type=code&scope=snsapi_userinfo&state='.$state.'#wechat_redirect';
       
		$level=3;
        $size=3;
        $errorCorrectionLevel =intval($level) ;//容错级别
        $matrixPointSize = intval($size);//生成图片大小
        $object->png($url, false, $errorCorrectionLevel, $matrixPointSize, 2);
    }

	//微信公众号登录，获取相关信息
	public function wechat(){
		$code = $_GET['code'];
		$state = $_GET['state'];
		$appid = C("WEIXIN_APP_ID");
		$secret = C("WEIXIN_SECRET");	
		$token = file_get_contents('https://api.weixin.qq.com/sns/oauth2/access_token?appid='.$appid.'&secret='.$secret.'&code='.$code.'&grant_type=authorization_code');
		$tokeninfo = json_decode($token,true);
 		$useri = file_get_contents('https://api.weixin.qq.com/sns/userinfo?access_token='.$tokeninfo['access_token'].'&openid='.$tokeninfo['openid'].'&lang=zh_CN');
		$userinfo = json_decode($useri,true);
		$userinfo['headimgurl'];
		$userinfo['nickname'];
		$tokeninfo['openid'];
		$url = "http://red-packet.elastos.org/wechat?headimgurl=".$userinfo['headimgurl']."&openid=".$tokeninfo['openid']."&nickname=".$userinfo['nickname']."&_locale=en_US";
		//var_dump($url);
		echo "<script>window.location.href='".$url."';</script>"; 
	}
	//退出
	public function logout(){
		session_destroy();
		echo 1;
		//redirect("http://".$_SERVER['HTTP_HOST']);
	}
	//构建一个DID扫码请求
	public function showdidreq(){
        Vendor('phpqrcode.phpqrcode');
		$state = time().$this->getRandomNum(5);
		$_SESSION['eladevp']['didstaterand'] = $state;
        $object = new \QRcode();
		$appid = C("DID_APPID");
		$didprvkey = C("DID_PRVKEY");
		$didpubkey = C("DID_PUBKEY");
		$did = C("DID_DID");
		$_SESSION['eladevp']['didstaterand'] =$state;
		$this->adddid($state);
		$payaddress="";
		$amount="0";
		$url ="http://203.189.235.252:8080/trucks/signdid.jsp";
		$parms = "?didprvkey=".$didprvkey."&msg=".$appid;
		$sign = trim(file_get_contents($url."".$parms));
		$random ="111";
 		$ReturnUrl = urlencode("https://".$_SERVER['HTTP_HOST']."/a.php?ida=1");
 		$callbackurl = urlencode("https://".$_SERVER['HTTP_HOST']."/index.php/Home/Index/didcallback?state=".$state);
		$qurl = "elaphant://identity?CallbackUrl=".$callbackurl."&ReturnUrl=".$ReturnUrl."&Description=Elastos Developer Website&AppID=".$appid."&PublicKey=".$didpubkey."&Signature=".$sign."&DID=".$did."&RandomNumber=".$random."&AppName=Elastos Developer Website";		
		//var_dump($qurl);
		$level=3;
        $size=3;
        $errorCorrectionLevel =intval($level) ;//容错级别
        $matrixPointSize = intval($size);//生成图片大小
        $object->png($qurl, false, $errorCorrectionLevel, $matrixPointSize, 2);
	}
	//构建一个临时的DID数据
	public function adddid($state){
		$data['didrandom'] = $state;
		$data['addtime'] = time();
		$staydid = M("staydid");
		$rs = $staydid->add($data);
	}
	//处理DID回调值
	public function didcallback(){
		 $rs = file_get_contents("php://input");
		 $jsona = json_decode($rs,true);
		 $njson = json_decode($jsona['Data'],true);
		 //$where['didrandom'] = $njson['RandomNumber'];
		 $where['didrandom'] = $_GET['state'];
		 $didpubkey = $jsona['PublicKey'];
		 $url ="http://203.189.235.252:8080/trucks/getdidfrompubkey.jsp";
		 $parms = "?didpubkey=".$didpubkey;
		 $did = trim(file_get_contents($url."".$parms));
	     $data['didid'] = $did;
		 $data['nickname'] = $njson['NickName'];
		 $staydid = M("staydid");
		 $rs = $staydid->where($where)->save($data);
	}
	public function judgedid(){
		 $wherea['didrandom'] = $_SESSION['eladevp']['didstaterand'];
		 $staydid = M("staydid");
		 $staydidinfo = $staydid->where($wherea)->find();
		 if($staydidinfo['didid']!=""){
			 //判断关联表有无信息，如果有关联，则找出User表信息，标明登录类型，如果没有登录信息，则构建User新信息，并构建关联
			 $rsa = $this->getuserrelation("","","","",$staydidinfo['didid']);
			 //var_dump($rsa);
			 if($rsa!="0"){
				 //找出User表的信息
				 //$wherea['userid'] = $rsa['mainuid'];
				 $uinfo = $this->userinfo($rsa['mainuser']);
				 //var_dump($uinfo);
				 if($uinfo!="0"){
					$_SESSION['eladevp']['userid'] = $uinfo['userid'];
					$_SESSION['eladevp']['logincate'] = $uinfo['subucate'];
					$_SESSION['eladevp']['userheadimg'] = $uinfo['headimg'];
					echo 1;
				 }else{
					echo 0;
				 }
			 }else{
				 //构建User表数据，插入到User表，并构建User表与关系表联系
				$userid = "DID".time().$this->getRandomString(5);
				$data['userid'] = $userid;
				$data['userpwd'] = md5($userid);
				$data['addtime'] = time();
				$data['didid'] = $staydidinfo['didid'];
				$data['nickname'] = $staydidinfo['nickname'];
				$data['firstname'] = $staydidinfo['nickname'];
				$data['roleid'] = 2;
				$data['subucate'] = 5;
				
				$dataa['mainuser'] = $userid;
				$dataa['didid'] = $staydidinfo['didid'];
				$dataa['ustatus'] = 5;
				$user = M("user");
				$userrelation = M("userrelation");
				$rsb = $user->add($data);
				if($rsb){
					$rsc = $userrelation->add($dataa);
					if($rsc){
						$_SESSION['eladevp']['userid'] = $userid;
						$_SESSION['eladevp']['logincate'] = 5;
						$_SESSION['eladevp']['userheadimg'] = "";
						echo 1;
					}else{
						echo 0;
					}
				}else{
					echo 0;
				}
			 }
		 }else{
			 echo 0;
		 }
	}
	public function pjudgedid(){
		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']!=""){
		 $wherea['didrandom'] = $_SESSION['eladevp']['didstaterand'];
		 $staydid = M("staydid");
		 $staydidinfo = $staydid->where($wherea)->find();
		 if($staydidinfo['didid']!=""){
			 $rsa = $this->getuserrelation("","","","",$staydidinfo['didid']);
			 if($rsa!="0"){
				 //已经使用返回重复
				 echo 2;
			 }else{
				 //构建User表数据，插入到User表，并构建User表与关系表联系
				$where['mainuser'] = $rsa['mainuser'];
				$dataa['didid'] = $staydidinfo['didid'];
				$userrelation = M("userrelation");
				$rsc = $userrelation->where($where)->save($dataa);
				if($rsc){
					echo 1;
				}else{
					echo 0;
				}
			 }
		 }else{
			 echo 0;
		 }
			
		}else{
			echo 0;
		}
	}
	
	//判断是否存在，并且判断是否登录状态，如果登录状态，绑定
	public function judgedids(){
		 $wherea['didrandom'] = $_SESSION['eladevp']['didstaterand'];
		 $staydid = M("staydid");
		 $staydidinfo = $staydid->where($wherea)->find();
		 if($staydidinfo['didid']!=""){
			$where['didid'] = $staydidinfo['didid'];
			$didinfo = M("didinfo");
			$didiinfo = $didinfo->where($where)->find();
			$rsa = $this->getuserrelation("","","","",$staydidinfo['didid']);
			if($didiinfo){
				if($rsa=="0"){
					$_SESSION['eladevp']['diduid'] = $staydidinfo['didid'];
					$_SESSION['eladevp']['logincate'] = 5;
					$_SESSION['eladevp']['userheadimg'] = "";
					$backrs = 1;
				}else{
					$urelation = json_decode($rsa,true);
					if($urelation['ustatus']==1){
						//主账号是注册的Userid
						$uinfo = $this->userinfo($urelation['mainuid']);
						$_SESSION['eladevp']['userid'] = $uinfo['userid'];
						$_SESSION['eladevp']['userheadimg'] = $uinfo['headimg'];
						$_SESSION ['eladevp']['logincate'] = 1;
					$backrs = 1;
					}elseif($urelation['ustatus']==2){
						//主账号是注册的RCuid
						$uinfo = $this->rcinfo($urelation['mainuid']);
						$_SESSION['eladevp']['rcuid'] = $uinfo['rcuid'];
						$_SESSION['eladevp']['userheadimg'] = $uinfo['headimg'];
						$_SESSION['eladevp']['logincate'] = 2;
					$backrs = 1;
					}elseif($urelation['ustatus']==3){
						//主账号是注册的githuuid
						$uinfo = $this->githubinfo($urelation['mainuid']);
						$_SESSION['eladevp']['githubuid'] = $uinfo['githubuid'];
						$_SESSION['eladevp']['userheadimg'] = $uinfo['headimg'];
						$_SESSION['eladevp']['logincate'] = 3;
					$backrs = 1;
					}elseif($urelation['ustatus']==4){
						//主账号是注册的wechatuid
						$uinfo = $this->wechatinfo($urelation['mainuid']);
						$_SESSION['eladevp']['wechatuid'] = $uinfo['wechatuid'];
						$_SESSION['eladevp']['userheadimg'] = $uinfo['headimg'];
						$_SESSION['eladevp']['logincate'] = 4;
						$backrs = 1;
					}elseif($urelation['ustatus']==5){
						//主账号是注册的didid
						$uinfo = $this->didinfo($urelation['mainuid']);
						$_SESSION['eladevp']['diduid'] = $uinfo['didid'];
						$_SESSION['eladevp']['userheadimg'] = $uinfo['headimg'];
						$_SESSION['eladevp']['logincate'] = 5;
						$backrs = 1;
					}else{
						$_SESSION['eladevp']['diduid'] = $staydidinfo['didid'];
						$_SESSION['eladevp']['logincate'] = 5;
						$_SESSION['eladevp']['userheadimg'] = "";
						$backrs = 1;
					}
				}
			}else{
				//更新didinfo
				$data['didid'] = $staydidinfo['didid'];
				$data['nickname'] = $staydidinfo['nickname'];
				$data['firstname'] = $staydidinfo['nickname'];
				$didinfo = M("didinfo");
				$rs = $didinfo->add($data);
				$delrs  = $staydidinfo->where($wherea)->delete();
				unset($_SESSION['eladevp']['didstaterand']);
				$backrs = 1;
			}
			echo $backrs;
		}else{
			echo 0;
		}
	}
	//判断是否存在，并且判断是否登录状态，如果登录状态，绑定
	public function pjudgedids(){
		 $wherea['didrandom'] = $_SESSION['eladevp']['didstaterand'];
		 $staydid = M("staydid");
		 $staydidinfo = $staydid->where($wherea)->find();
		 if($staydidinfo['didid']!=""){
			//查询是否绑定了关系表，如果绑定了直接登录，如果没有绑定更新didinfo表
			$where['didid'] = $staydidinfo['didid'];
			$didinfo = M("didinfo");
			$didiinfo = $didinfo->where($where)->find();
			$userrelation = M("userrelation");
			$rsa = $this->getuserrelation("","","","",$staydidinfo['didid']);
			if($didiinfo){
				//判断是否处于登录状态
				//没有建立相互关系，判断是否处于登录状态，如果处于登录状态，判断是否是存在主账号
				if($rsa=="0"){
					if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==1){
						$whereb['reguserid'] = $_SESSION ['eladevp']['userid'];
						$rsa = $userrelation->where($whereb)->find();
						if($rsa){
							$datab['didid'] = $staydidinfo['didid'];
							$rsb = $userrelation->where($whereb)->save($datab);
						}else{
							$datab['mainuser'] = $_SESSION ['eladevp']['userid'];
							$datab['reguserid'] = $_SESSION ['eladevp']['userid'];
							$datab['didid'] = $staydidinfo['didid'];
							$datab['ustatus'] = 1;
							$this->adduserrelation($datab);
						}
					}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==2){
						$whereb['rcuserid'] = $_SESSION ['eladevp']['rcuid'];
						$rsa = $userrelation->where($whereb)->find();
						if($rsa){
							$datab['didid'] = $staydidinfo['didid'];
							$rsb = $userrelation->where($whereb)->save($datab);
						}else{
							$datab['mainuser'] = $_SESSION ['eladevp']['rcuid'];
							$datab['rcuserid'] = $_SESSION ['eladevp']['rcuid'];
							$datab['didid'] = $staydidinfo['didid'];
							$datab['ustatus'] = 2;
							$this->adduserrelation($datab);
						}
					}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==3){
						$whereb['githubuserid'] = $_SESSION ['eladevp']['githubuid'];
						$rsa = $userrelation->where($whereb)->find();
						if($rsa){
							$datab['didid'] = $staydidinfo['didid'];
							$rsb = $userrelation->where($whereb)->save($datab);
						}else{
							$datab['mainuser'] = $_SESSION ['eladevp']['githubuid'];
							$datab['githubuserid'] = $_SESSION ['eladevp']['githubuid'];
							$datab['didid'] = $staydidinfo['didid'];
							$datab['ustatus'] = 3;
							$this->adduserrelation($datab);
						}
					}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==4){
						$whereb['wechatuserid'] = $_SESSION ['eladevp']['wechatuid'];
						$rsa = $userrelation->where($whereb)->find();
						if($rsa){
							$datab['didid'] = $staydidinfo['didid'];
							$rsb = $userrelation->where($whereb)->save($datab);
						}else{
							$datab['mainuser'] = $_SESSION ['eladevp']['wechatuid'];
							$datab['wechatuserid'] = $_SESSION ['eladevp']['wechatuid'];
							$datab['didid'] = $staydidinfo['didid'];
							$datab['ustatus'] = 4;
							$this->adduserrelation($datab);
						}
					}
					$backrs = 1;
				}elseif($rsa=="1"){
					
				}else{
					
				}
			}else{
					//更新didinfo
					$data['didid'] = $staydidinfo['didid'];
					$data['nickname'] = $staydidinfo['nickname'];
					$data['firstname'] = $staydidinfo['nickname'];
					$didinfo = M("didinfo");
					$rs = $didinfo->add($data);
					if($rsa=="0"){
						if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==1){
							$whereb['reguserid'] = $_SESSION ['eladevp']['userid'];
							$rsa = $userrelation->where($whereb)->find();
							if($rsa){
								$datab['didid'] = $staydidinfo['didid'];
								$rsb = $userrelation->where($whereb)->save($datab);
							}else{
								$datab['mainuser'] = $_SESSION ['eladevp']['userid'];
								$datab['reguserid'] = $_SESSION ['eladevp']['userid'];
								$datab['didid'] = $staydidinfo['didid'];
								$datab['ustatus'] = 1;
								$this->adduserrelation($datab);
							}
						}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==2){
							$whereb['rcuserid'] = $_SESSION ['eladevp']['rcuid'];
							$rsa = $userrelation->where($whereb)->find();
							if($rsa){
								$datab['didid'] = $staydidinfo['didid'];
								$rsb = $userrelation->where($whereb)->save($datab);
							}else{
								$datab['mainuser'] = $_SESSION ['eladevp']['rcuid'];
								$datab['rcuserid'] = $_SESSION ['eladevp']['rcuid'];
								$datab['didid'] = $staydidinfo['didid'];
								$datab['ustatus'] = 2;
								$this->adduserrelation($datab);
							}
						}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==3){
							$whereb['githubuserid'] = $_SESSION ['eladevp']['githubuid'];
							$rsa = $userrelation->where($whereb)->find();
							if($rsa){
								$datab['didid'] = $staydidinfo['didid'];
								$rsb = $userrelation->where($whereb)->save($datab);
							}else{
								$datab['mainuser'] = $_SESSION ['eladevp']['githubuid'];
								$datab['githubuserid'] = $_SESSION ['eladevp']['githubuid'];
								$datab['didid'] = $staydidinfo['didid'];
								$datab['ustatus'] = 3;
								$this->adduserrelation($datab);
							}
						}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==4){
							$whereb['wechatuserid'] = $_SESSION ['eladevp']['wechatuid'];
							$rsa = $userrelation->where($whereb)->find();
							if($rsa){
								$datab['didid'] = $staydidinfo['didid'];
								$rsb = $userrelation->where($whereb)->save($datab);
							}else{
								$datab['mainuser'] = $_SESSION ['eladevp']['wechatuid'];
								$datab['wechatuserid'] = $_SESSION ['eladevp']['wechatuid'];
								$datab['didid'] = $staydidinfo['didid'];
								$datab['ustatus'] = 4;
								$this->adduserrelation($datab);
							}
						}
						$delrs  = $staydidinfo->where($wherea)->delete();
						unset($_SESSION['eladevp']['didstaterand']);
						$backrs = 1;
					}
			}
			echo $backrs;
		}else{
			echo 0;
		}
	}
  //检测用户关系表中相关信息中，是否存在，存在的话是否是主账号
  public function getuserrelation($reguid,$rcuid,$gituid,$wechatuid,$didid){
	  if($reguid!=""){
		  $where['reguid'] = $reguid;
	  }
	  if($rcuid!=""){
		  $where['rcuserid'] = $rcuid;
	  }
	  if($gituid!=""){
		  $where['githubuserid'] = $gituid;
	  }
	  if($wechatuid!=""){
		  $where['wechatuserid'] = $wechatuid;
	  }
	  if($didid!=""){
		  $where['didid'] = $didid;
	  }
	  $userrelation = M("userrelation");
	  $userrelationinfo = $userrelation->where($where)->find();
	  if($userrelationinfo){
		 return $userrelationinfo;
	  }else{
		  return 0;
	  }
  }
  //获取userinfo相关信息
  public function userinfo($uid){
	  $where['userid'] = $uid;
	  $user = M("user");
	  $info = $user->where($where)->find();
	  //var_dump($user->getlastsql());
	  if($info){
		  return $info;
	  }else{
		  return 0;
	  }
  }
  
  //获取rcinfo相关信息
  public function rcinfo($uid){
	  $where['rcuid'] = $uid;
	  $rcinfo = M("rcinfo");
	  $info = $rcinfo->where($where)->find();
	  if($info){
		  return $info;
	  }else{
		  return 0;
	  }
  }
  //获取githuinfo相关信息
  public function githubinfo($githubuid){
	  $where['githubuid'] = $githubuid;
	  $githubinfo = M("githubinfo");
	  $info = $githubinfo->where($where)->find();
	  if($info){
		  return $info;
	  }else{
		  return 0;
	  }
  }
  
  //获取wechat相关信息
  public function wechatinfo($uid){
	  $where['wechatuid'] = $uid;
	  $wechatinfo = M("wechatinfo");
	  $info = $wechatinfo->where($where)->find();
	  if($info){
		  return $info;
	  }else{
		  return 0;
	  }
  }
  //获取didinfo相关信息
  public function didinfo($uid){
	  $where['didid'] = $uid;
	  $didinfo = M("didinfo");
	  $info = $didinfo->where($where)->find();
	  if($info){
		  return $info;
	  }else{
		  return 0;
	  }
  }
  //新增用户关系表
  public function adduserrelation($data){
	  $userrelation = M("userrelation");
	  $rs = $userrelation->add($data);
	  if($rs){
		  return 1;
	  }else{
		  return 0;
	  }
  }
  //获取当前消息是否读取
  public function getnoreadnotify(){
	  $where['ishomepage'] = 1;
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
  //获取当前消息是否读取
  public function getnoreadnotifyrs(){
	  $where['ishomepage'] = 1;
	  $where['edittime'] = array("EGT",strtotime("-3 day"));
	  $notice = M("notice");
	  $noticeinfo = $notice->where($where)->order("id desc")->find();
	  if($noticeinfo){
		  return $noticeinfo;
	  }else{
		  return 0;
	  }
  }
  //设置COOKIE
  public function setnotifycookie(){
	  //echo var_dump($_POST);
	  cookie("readnoticeifyid",$_POST['id'], time()+3600*24*300);
  }
	//获取当前个人信息功能
	public function profileinfo(){
		$where['userid'] = $_SESSION['eladevp']['userid'];
		$user = M("user");
		$userinfo = $user->where($where)->find();
		return $userinfo;
	}
}