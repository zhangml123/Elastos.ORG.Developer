<?php
namespace Home\Controller;
use Common\Controller\BaseController;
use \ThinkPHP\Library\Org\ThinkSDK\ThinkOauth;
class LoginController extends BaseController {
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
		$state = $_GET['state'];
		$appid = C("WEIXIN_APP_ID");
		$secret = C("WEIXIN_SECRET");
		//更新数据库
 		$staywechat = M("staywechat");
		$data['code'] = $code;
		$where['wechatrand'] = $state;
		$rs = $staywechat->where($where)->save($data);
		if($rs){
			$rsa = $this->gettoken($state,$code,$appid,$secret);
			echo $rsa;
		}else{
			echo "<div style='width:100%;height:400px;line-height:400px;color:#222;text-align:center;font-weight:900;'>授权失败！!</div>";
		}
	}
	//换取token
	public function gettoken($state,$code,$appid,$secret){
		$token = file_get_contents('https://api.weixin.qq.com/sns/oauth2/access_token?appid='.$appid.'&secret='.$secret.'&code='.$code.'&grant_type=authorization_code');
		$tokeninfo = json_decode($token,true);
		$rsb = $this->getuinfo($code,$tokeninfo['access_token'],$tokeninfo['openid']);
		 if($rsb){
			 $str = substr($state,0,1);
			 if($str=="W"){
				$this->updatewechatinfo();
				$hurl = 'https://'.$_SERVER['HTTP_HOST'].'/';
				return  "<script>window.location.href='".$hurl."';</script>";
			 }else{
				return  "<div style='width:100%;height:400px;line-height:400px;color:red;text-align:center;font-weight:900;'>授权成功！</div><script>setTimeout(function(){window.close();},3000);</script>";
			 }
		 }else{
			 return "<div style='width:100%;height:400px;line-height:400px;color:#222;text-align:center;font-weight:900;'>授权失败！</div>";
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
		//var_dump($url);
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
				//var_dump($rcinfo->getlastsql());
				if($rcsa){
					return 1;
				}else{
					return 0;
				}
			}
			$_SESSION['eladevp']['rcuid'] = $uid;
			$_SESSION['eladevp']['logincate'] = 2;
			$_SESSION ['eladevp']['userheadimg'] = "";
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
			if($rsinfo){
				//判断是否与User表关联
				$whereb['wechatuid'] = $staychat['openid'];
				$rsbinfo = $user->where($whereb)->find();
				if($rsbinfo){
					//构造User登录
					$_SESSION['eladevp']['userid'] = $rsbinfo['userid'];
					$_SESSION ['eladevp']['logincate'] = 1;
					$backrs = 1;
				}else{
					//Wechat登录
					$_SESSION['eladevp']['wechatuid'] = $staychat['openid'];
					$_SESSION ['eladevp']['logincate'] = 4;
					$backrs = 1;
				}
			}else{
				//新增到wechatinfo表
				$rsainfo = $wechatinfo->add($dataa);
				$_SESSION['eladevp']['wechatuid'] = $staychat['openid'];
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
}