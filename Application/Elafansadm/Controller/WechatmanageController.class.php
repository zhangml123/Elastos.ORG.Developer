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
		///$data['menulist'] = "[".substr($jsonmenu,1,strlen($jsonmenu)-2)."]";
		$data['menulist'] =  $_POST['menujson'];
		$rs = $wechatmenu->where("id=1")->save($data);
		/* $appid = "wx583ffac4c5be5e11";
		$appsecret = "186f0e0c2e39ca87cc3bfe641895a349"; */
		$appid = C("WEIXIN_APP_ID");
		$appsecret = C("WEIXIN_SECRET");
		$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$appsecret";
		$output = $this->https_request($url);
		$jsoninfo = json_decode($output, true);
		$access_token = $jsoninfo["access_token"];
		
		/* $jsonmenu = '{
			  "button":[
			  {
				   "name":"天气预报",
				   "sub_button":[
					{
					   "type":"view",
					   "name":"北京天气",
						"url":"http://m.hao123.com/a/tianqi"
					},
					{
					   "type":"view",
					   "name":"上海天气",
						"url":"http://m.hao123.com/a/tianqi"
					},
					{
					   "type":"view",
					   "name":"广州天气",
						"url":"http://m.hao123.com/a/tianqi"
					},
					{
					   "type":"view",
					   "name":"深圳天气",
						"url":"http://m.hao123.com/a/tianqi"
					},
					{
						"type":"view",
						"name":"本地天气",
						"url":"http://m.hao123.com/a/tianqi"
					}]
			  

			   },
			   {
				   "name":"空特科技",
				   "sub_button":[
					{
					   "type":"view",
					   "name":"公司简介",
						"url":"http://m.hao123.com/a/tianqi"
					},
					{
					   "type":"view",
					   "name":"趣味游戏",
						"url":"http://m.hao123.com/a/tianqi"
					},
					{
						"type":"view",
						"name":"讲个笑话",
						"url":"http://m.hao123.com/a/tianqi"
					}]
			   

			   }]
		 }'; */
		/* $url = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".$access_token;
		$result = $this->https_request($url, $jsonmenu);
		$rs = json_decode($result,true);
		if($rs['errmsg']=="ok"){
			echo 1;
		}else{
			echo 0;
		} */
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