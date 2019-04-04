<?php
namespace Common\Controller;
use Think\Controller;
class AdminbaseController extends Controller{
	public function _initialize() {
		if(isset($_SESSION ['eladevp']['lang']) && $_SESSION ['eladevp']['lang']!=""){
			
		}else{
			$_SESSION ['eladevp']['lang'] = "cn";
		}
		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']!=""){
			$uinfo = $this->profileinfo();
			if($uinfo['roleid']!=1){
				$this->redirect("Error404/index");
			}
		}else{
			if(is_weixin()){
				$state = "W".time().$this->getRandomString(5);
				$_SESSION['eladevp']['wechatrand'] = $state;
				$this->add($state);
				$url = 'https://open.weixin.qq.com/connect/oauth2/authorize?appid='.C('WEIXIN_APP_ID').'&redirect_uri='.urlencode(C('WECHAT_CALLBACK_URL')).'&response_type=code&scope=snsapi_userinfo&state='.$state.'#wechat_redirect';
				header('Location: '.$url);
			}else{
				$this->redirect("Error404/index");
			}
		}
	}
	
	 public function _empty(){
		$this->redirect("Empty/index");
    }
	//获取当前个人信息功能
	public function profileinfo(){
		$where['userid'] = $_SESSION['eladevp']['userid'];
		$user = M("user");
		$userinfo = $user->where($where)->find();
		return $userinfo;
	} 
	//新增到数据库
	public function add($state){
		$data['wechatrand'] = $state;
		$staywechat = M('staywechat');
		$rs = $staywechat->add($data);
	}
	
	function is_weixin() { 
		if (strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false) {
			return true; 
		}else{
			return false;
		}
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
}
?>