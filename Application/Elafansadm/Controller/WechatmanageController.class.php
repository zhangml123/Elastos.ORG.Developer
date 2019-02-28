<?php
namespace Elafansadm\Controller;
use Common\Controller\ElabaseController;
use Think\Controller;
class WechatmanageController extends ElabaseController {
    public function index(){
		$wechatmenu = M("wechatmenu");
		$wechatmenuinfo = $wechatmenu->where("id=1")->find();
		$arr = json_decode($wechatmenuinfo['menulist'],true);
		$this->assign("menulist",$arr['button']);
		$this->display();
	}
	public function setmenu(){
		$jsonmenu = $_POST['menujson'];
		$wechatmenu = M("wechatmenu");
		$data['menulist'] =  $_POST['menujson'];
		$rs = $wechatmenu->where("id=1")->save($data);
		$appid = C("WEIXIN_APP_ID");
		$appsecret = C("WEIXIN_SECRET");
		$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$appsecret";
		$output = $this->https_request($url);
		$jsoninfo = json_decode($output, true);
		$access_token = $jsoninfo["access_token"];
		$url = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".$access_token;
		$result = $this->https_request($url, $jsonmenu);
		$rs = json_decode($result,true);
		if($rs['errmsg']=="ok"){
			echo 1;
		}else{
			echo 0;
		}
	}
	public function https_request($url,$data = null){
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
		if (!empty($data)){
			curl_setopt($curl, CURLOPT_POST, 1);
			curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		}
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		$output = curl_exec($curl);
		curl_close($curl);
		return $output;
	}
}
