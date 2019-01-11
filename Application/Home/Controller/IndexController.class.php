<?php
namespace Home\Controller;
use Think\Controller;
use Common\Controller\BaseController;
class IndexController extends Controller {
    public function index(){
		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']!=""){
			$this->assign("logincate",$_SESSION ['eladevp']['logincate']);
			$this->assign("userheadimg",$_SESSION ['eladevp']['userheadimg']);
			
		}else{
			$this->assign("logincate","");
			if(is_weixin()){
				$state = "W".time().$this->getRandomString(5);
				$_SESSION['eladevp']['wechatrand'] = $state;
				$this->add($state);
				$url = 'https://open.weixin.qq.com/connect/oauth2/authorize?appid='.C('WEIXIN_APP_ID').'&redirect_uri='.urlencode(C('WECHAT_CALLBACK_URL')).'&response_type=code&scope=snsapi_userinfo&state='.$state.'#wechat_redirect';
				header('Location: '.$url);
			}
		}
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
			if($rsinfo){
				//判断是否与User表关联
				$whereb['wechatuid'] = $staychat['openid'];
				$rsbinfo = $user->where($whereb)->find();
				if($rsbinfo){
					//构造User登录
					$_SESSION['eladevp']['userid'] = $rsbinfo['userid'];
					$_SESSION['eladevp']['userheadimg'] = $rsbinfo['headimg'];
					$_SESSION ['eladevp']['logincate'] = 1;
					$backrs = 1;
				}else{
					//Wechat登录
					$_SESSION['eladevp']['wechatuid'] = $staychat['openid'];
					$_SESSION['eladevp']['userheadimg'] = $staychat['headimg'];
					$_SESSION ['eladevp']['logincate'] = 4;
					$backrs = 1;
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
	//退出
	public function logout(){
		session_destroy();
		echo 1;
		//redirect("http://".$_SERVER['HTTP_HOST']);
	}
}