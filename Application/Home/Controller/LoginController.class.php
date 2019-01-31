<?php
namespace Home\Controller;
//use Common\Controller\BaseController;
use Think\Controller;
use \ThinkPHP\Library\Org\ThinkSDK\ThinkOauth;
class LoginController extends Controller {
	public function index(){
        $this->show();
    }
	public function callback(){
		
	}
	// 第三方平台登录
	public function oauth_login(){
		$type=I('get.type');  //获取登录的方法
		//if($type=="GITHUB"){
			import("Org.ThinkSDK.ThinkOauth");  ////加载ThinkOauth类
			$sdk=\ThinkOauth::getInstance($type); //实例化一个对象
			redirect($sdk->getRequestCodeURL());  //重定向到第三方登录授权页面
		//}elseif($type=="weixin"){
			//var_dump($_REQUEST);
			
		//}
	}
	public function complateuinfo(){
		if(isset($_SESSION ['eladevp']['gituid']) && $_SESSION ['eladevp']['gituid']!=""){
			
		}
		$this->display();
	}
	
	//微信公众号登录，获取相关信息
	public function wechat(){
		$code = $_GET['code'];
		$state = explode("||",$_GET['state']);
		$appid = C("WEIXIN_APP_ID");
		$secret = C("WEIXIN_SECRET");
		//更新数据库
 		$staywechat = M("staywechat");
		$data['code'] = $code;
		$where['wechatrand'] = $state[0];
		$rs = $staywechat->where($where)->save($data);
		if($rs){
			$rsa = $this->gettoken($state[0],$state[1],$code,$appid,$secret);
			echo $rsa;
		}else{
			echo "<div style='width:100%;height:400px;line-height:400px;color:#222;text-align:center;font-weight:900;font-size:26px'>授权失败！!</div>";
		}
	}
	//换取token
	public function gettoken($statea,$stateb,$code,$appid,$secret){
		$token = file_get_contents('https://api.weixin.qq.com/sns/oauth2/access_token?appid='.$appid.'&secret='.$secret.'&code='.$code.'&grant_type=authorization_code');
		$tokeninfo = json_decode($token,true);
		$rsb = $this->getuinfo($code,$tokeninfo['access_token'],$tokeninfo['openid']);
		 if($rsb){
			 $str = substr($statea,0,1);
			 if($str=="W"){
				$this->updatewechatinfo();
				$hurl = 'https://'.$_SERVER['HTTP_HOST'].'/';
				return  "<script>window.location.href='".$stateb."';</script>";
			 }else{
				return  "<div style='width:100%;height:400px;line-height:400px;font-size:26pxcolor:red;text-align:center;font-weight:900;'>授权成功！</div><script>setTimeout(function(){window.close();},3000);</script>";
			 }
		 }else{
			 return "<div style='width:100%;height:400px;line-height:400px;color:#222;font-size:26pxtext-align:center;font-weight:900;'>授权失败！</div>";
		 }
	}
	//获取用户信息,更新数据库
	public function getuinfo($code,$token,$openid){
		$useri = file_get_contents('https://api.weixin.qq.com/sns/userinfo?access_token='.$token.'&openid='.$openid.'&lang=zh_CN');
		$userinfo = json_decode($useri,true);
	 	$staywechat = M("staywechat");
		$where['code'] = $code;
		$data['nickname'] = $userinfo['nickname'];
		$data['province'] = $userinfo['province'];
		$data['city'] = $userinfo['city'];
		$data['headimg'] = $userinfo['headimgurl'];
		$data['openid'] = $userinfo['openid'];
		$rsc = $staywechat->where($where)->save($data);
		if($rsc){
			return 1;
		}else{
			return 0;
		}
	}
	//登录
	public function login(){
		$where['userid'] = $_POST['uid'];
		$where['userpwd'] = md5($_POST['upwd']);
		$user = M("user");
		$rs = $user->where($where)->find();
		//var_dump($rs);
		if($rs){
			$_SESSION ['eladevp']['userid'] = $_POST['uid'];
			$_SESSION ['eladevp']['userheadimg'] = $_POST['headimg'];
			$_SESSION['eladevp']['logincate'] = 1;
		    echo 1;
		}else{
			$crloginrs = $this->checkcrlogin($_POST['uid'],$_POST['upwd']);
			echo $crloginrs;
		}
	}
	//判断CR登录信息
	public function checkcrlogin($uid,$upwd){
		//判断登录信息
		$url = C('CR_LOGIN_URL').'?username='.$uid.'&password='.$upwd;
		$rs = $this->curl_file_get_contents($url);
		$data = json_decode($rs,true);
		//存在
		if($data['message']=="ok"){
			$_SESSION ['eladevp']['userid'] = $uid;
			$_SESSION['eladevp']['logincate'] = 1;
			//判断是否存储了CR信息，如果存储了更新必要信息，如果没存储新增
			$rcinfo = M("rcinfo");
			$where['rcuid'] = $uid;
			$rcs = $rcinfo->where($where)->find();
			if($rcs){
				//更新内容
				return 1;
			}else{
				//新增
				$dataa['rcuid'] = $uid;
				$rcsa = $rcinfo->add($dataa);
				if($rcsa){
					return 1;
				}else{
					return 0;
				}
			}
			$_SESSION['eladevp']['rcuid'] = $uid;
			$_SESSION['eladevp']['logincate'] = 2;
			$_SESSION['eladevp']['userheadimg'] = "";
		}else{
			return 0;
		}
	}
	//新增信息到User表
	public function adduser(){
		$data['userid'] = $_POST['uid'];
		$data['userpwd'] = md5($_POST['upwd']);
		$data['logintime'] = time();
		$data['addtime'] = time();
		$user = M("user");
		$rs = $user->add($data);
		if($rs){
			$_SESSION ['eladevp']['userid'] = $_POST['uid'];
		    echo 1;
		}else{
			echo 0;
		}
	}
	//绑定账号密码到github账号
	public function upuser(){
		$where['githubid'] = $_SESSION ['eladevp']['gituid'];
		$data['userid'] = $_POST['uid'];
		$data['userpwd'] = md5($_POST['upwd']);
		$data['logintime'] = time();
		$data['addtime'] = time();
		$user = M("user");
		$rs = $user->where($where)->save($data);
		if($rs){
			$_SESSION ['eladevp']['userid'] = $_POST['uid'];
		    echo 1;
		}else{
			echo 0;
		}
	}
	public function curl_file_get_contents($durl){
        $headers = array(
            "token:111222111",
            "over_time:3223144324",
        );
        // 初始化
        $curl = curl_init();
        // 设置url路径
        curl_setopt($curl, CURLOPT_URL, $durl);
        // 将 curl_exec()获取的信息以文件流的形式返回，而不是直接输出。
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true) ;
        // 在启用 CURLOPT_RETURNTRANSFER 时候将获取数据返回
        curl_setopt($curl, CURLOPT_BINARYTRANSFER, true) ;
        // 添加头信息
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        // CURLINFO_HEADER_OUT选项可以拿到请求头信息
        curl_setopt($curl, CURLINFO_HEADER_OUT, true);
        // 不验证SSL
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
        // 执行
        $data = curl_exec($curl);
        // 关闭连接
        curl_close($curl);
        // 返回数据
        return $data;
    }
	//查询并更新
	public function updatewechatinfo(){
		if(isset($_SESSION ['eladevp']['wechatrand']) && $_SESSION ['eladevp']['wechatrand']!=""){
		//首先判断是否存在
		$where['wechatrand'] = $_SESSION['eladevp']['wechatrand'];
		$staywechat = M('staywechat');
		$wechatinfo = M('wechatinfo');
		$userrelation = M("userrelation");
		$user = M('user');
		$staychat  = $staywechat->where($where)->find();
		$dataa['wechatuid'] = $staychat['openid'];
		$dataa['wechatappid'] = $staychat['openid'];
		$dataa['nickname'] = $staychat['nickname'];
		$dataa['firstname'] = $staychat['nickname'];
		$dataa['headimg'] = $staychat['headimg'];
		$dataa['city'] = $staychat['city'];
		if($staychat['openid']!=""){
			$wherea['wechatappid'] = $staychat['openid'];
			$rsinfo = $wechatinfo->where($wherea)->find();
			if($rsinfo){
				//判断是否与User表关联
				//$whereb['wechatuid'] = $staychat['openid'];
				//$rsbinfo = $user->where($whereb)->find();
				$rsbinfo = $this->getuserrelation("","","",$staychat['openid']);
				if($rsbinfo=="0"){
					//不存在关系表，用Wechat登录
					if(isset($_SESSION['eladevp']['logincate']) && $_SESSION['eladevp']['logincate']!=""){
						//绑定主账号和微信账号
						if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==1){
							$whereb['reguserid'] = $_SESSION ['eladevp']['userid'];
							$rsa = $userrelation->where($whereb)->find();
							if($rsa){
								$datab['wechatuserid'] = $staychat['openid'];
								$rsb = $userrelation->where($whereb)->save($datab);
							}else{
								$datab['mainuser'] = $_SESSION ['eladevp']['userid'];
								$datab['reguserid'] = $_SESSION ['eladevp']['userid'];
								$datab['wechatuserid'] = $staychat['openid'];
								$datab['ustatus'] = 1;
								$this->adduserrelation($datab);
							}
						}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==2){
							$whereb['rcuserid'] = $_SESSION ['eladevp']['rcuid'];
							$rsa = $userrelation->where($whereb)->find();
							if($rsa){
								$datab['wechatuserid'] = $staychat['openid'];
								$rsb = $userrelation->where($whereb)->save($datab);
							}else{
								$datab['mainuser'] = $_SESSION ['eladevp']['rcuid'];
								$datab['rcuserid'] = $_SESSION ['eladevp']['rcuid'];
								$datab['wechatuserid'] = $staychat['openid'];
								$datab['ustatus'] = 2;
								$this->adduserrelation($datab);
							}
						}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==3){
							$whereb['githubuserid'] = $_SESSION ['eladevp']['githubuid'];
							$rsa = $userrelation->where($whereb)->find();
							if($rsa){
								$datab['wechatuserid'] = $staychat['openid'];
								$rsb = $userrelation->where($whereb)->save($datab);
							}else{
								$datab['mainuser'] = $_SESSION ['eladevp']['githubuid'];
								$datab['githubuserid'] = $_SESSION ['eladevp']['githubuid'];
								$datab['wechatuserid'] = $staychat['openid'];
								$datab['ustatus'] = 3;
								$this->adduserrelation($datab);
							}
						}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==5){
								$whereb['wechatuserid'] = $staychat['openid'];
								$rsa = $userrelation->where($whereb)->find();
								if($rsa){
									$datab['wechatuserid'] = $staychat['openid'];
									$rsb = $userrelation->where($whereb)->save($datab);
								}else{
									$datab['mainuser'] = $_SESSION ['eladevp']['diduid'];
									$datab['didid'] = $_SESSION ['eladevp']['diduid'];
									$datab['wechatuserid'] = $staychat['openid'];
									$datab['ustatus'] = 5;
									$this->adduserrelation($datab);
								}
							}
						$backrs = 1;
					}else{
						$_SESSION['eladevp']['wechatuid'] = $staychat['openid'];
						$_SESSION['eladevp']['logincate'] = 4;
						$backrs = 1;
					}
				}elseif($rsbinfo=="1"){
					if(isset($_SESSION['eladevp']['logincate']) && $_SESSION['eladevp']['logincate']!=""){
						$backrs = 2;
					}else{
						//主账号是wechat,且用wechat登录
						$_SESSION['eladevp']['wechatuid'] = $staychat['openid'];
						$_SESSION ['eladevp']['logincate'] = 4;
						$backrs = 1;
					}
				}else{
					if(isset($_SESSION['eladevp']['logincate']) && $_SESSION['eladevp']['logincate']!=""){
						$backrs = 2;
					}else{
						$urelation = json_decode($rsbinfo,true);
						if($urelation['ustatus']==1){
							//主账号是注册的Userid
							$uinfo = $this->userinfo($urelation['mainuid']);
							$_SESSION['eladevp']['userid'] = $uinfo['userid'];
							$_SESSION ['eladevp']['logincate'] = 1;
						$backrs = 1;
						}elseif($urelation['ustatus']==2){
							//主账号是注册的RCuid
							$uinfo = $this->rcinfo($urelation['mainuid']);
							$_SESSION['eladevp']['rcuid'] = $uinfo['rcuid'];
							$_SESSION['eladevp']['logincate'] = 2;
						$backrs = 1;
						}elseif($urelation['ustatus']==3){
							//主账号是注册的githuuid
							$uinfo = $this->githubinfo($urelation['mainuid']);
							$_SESSION['eladevp']['githubuid'] = $uinfo['githubuid'];
							$_SESSION['eladevp']['logincate'] = 3;
						$backrs = 1;
						}elseif($urelation['ustatus']==4){
							//主账号是注册的wechatuid
							$uinfo = $this->wechatinfo($urelation['mainuid']);
							$_SESSION['eladevp']['wechatuid'] = $uinfo['wechatuid'];
							$_SESSION['eladevp']['logincate'] = 4;
							$backrs = 1;
						}elseif($urelation['ustatus']==5){
							//主账号是注册的didid
							$uinfo = $this->didinfo($urelation['mainuid']);
							$_SESSION['eladevp']['diduid'] = $uinfo['didid'];
							$_SESSION['eladevp']['logincate'] = 5;
							$backrs = 1;
						}
					}
				}
			}else{
				//新增到wechatinfo表
				$rsainfo = $wechatinfo->add($dataa);
				$_SESSION['eladevp']['wechatuid'] = $staychat['openid'];
				$_SESSION['eladevp']['logincate'] = 4;
				$backrs = 1;
				$delrs  = $staywechat->where($where)->delete();
			}
		}else{
			$backrs = 0;
		}
		echo $backrs;
	}else{
		echo 0;
	}
  }
  //检测用户关系表中相关信息中，是否存在，存在的话是否是主账号
  public function getuserrelation($reguid,$rcuid,$gituid,$wechatuid){
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
	  $userrelation = M("userrelation");
	  $userrelationinfo = $userrelation->where($where)->find();
	  if($userrelationinfo){
		  if($userrelationinfo['mainuser']==$reguid){
			  return 1;
		  }elseif($userrelationinfo['mainuser']==$rcuid){
			  return 1;
		  }elseif($userrelationinfo['mainuser']==$gituid){
			  return 1;
		  }elseif($userrelationinfo['mainuser']==$wechatuid){
			  return 1; 
		  }else{
			  $arr['ustatus'] = $userrelationinfo['ustatus'];
			  $arr['mainuid'] = $userrelationinfo['mainuser'];
			  return json_encode($arr);
		  }
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
  //获取userinfo相关信息
  public function userinfo($uid){
	  $where['userid'] = $uid;
	  $user = M("user");
	  $info = $user->where($where)->find();
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
 //验证DID
 public function didlogin(){
	 //Callback://identity?AppID="123"&SerialNumber="123456ef"&NickName="elephantela"&DID="xxxxxxxxxxxx"&PublicKey="asdfsadfsfsdf"&Description="developerSite"&RandomNumber="1345678"&ELAAddress="0xEdfwesfffffww"&ExpirationDate="20190201"&Signature="xxxxxxsssseeee"
	 $nickname = $_GET['NickName']; 
	 $pubkey = $_GET['PublicKey'];
	 $did = $_GET['DID'];
	 $Signature = $_GET['Signature'];
	 $myfile = fopen("/home/wwwroot/devsite.matrixyz.cn/newfile.txt", "w") or die("Unable to open file!");
	 fwrite($myfile, $Signature);
	 fclose($myfile);
	/*  $url ="http://203.189.235.252:8080/trucks/verifydid.jsp";
	 $parm = "?didpubkey=".$didpubkey."&msg=".$did."&sig=".$Signature;
	 $rs = file_get_contents($url."".$parm);
	 if($rs){
		 
	 }	 */
 }
  
  
}
