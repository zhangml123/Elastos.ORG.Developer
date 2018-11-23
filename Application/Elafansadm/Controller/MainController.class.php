<?php
namespace Elafansadm\Controller;
use Elafansadm\Model\ColumnModel;
use Think\Controller;
class MainController extends Controller {
    public function index(){
		if(isset($_SESSION ['ela']['role']) && $_SESSION ['ela']['role']!="" && isset($_SESSION ['ela']['userid']) && $_SESSION ['ela']['userid']!=""){
			$column = new ColumnModel();
			if($_SESSION ['ela']['role']==1){
				$where['id'] =array("neq",8);
				$where['yn'] =1;
			}else{
				$where['id'] =array("not in",array(11,8));
				$where['yn'] =1;
			}
			$columnlist = $column->mainmenulists($where);
			$menuarr = array();
			$menuarra = array();
			if($columnlist){
				for($i=0;$i<count($columnlist);$i++){
					$menuarr[] = $columnlist[$i]['columnlist'];
				}
			}
			$this->assign("roleid",$_SESSION ['ela']['role']);
			$this->assign("menulist",$columnlist);
			$this->assign("menuarr",json_encode($menuarr));
			$this->assign("curusername",$_SESSION ['ela']['username']);
			$this->assign("columnlist",$columnlist);
			$this->display();
		}else{
			$html = "<div style='width:700px;height:197px;color:red;font-size:20px;font-weight:900;margin:0px auto;margin-top:150px;'><img src='http://".$_SERVER['HTTP_HOST']."/Public/financeadm/images/404.png' style='border:0px;margin:0px auto;'></div><div style='width:100%;height:50px;margin-top:60px;'><div style='width:400px;height:40px;margin:0px auto;'><a href='http://".$_SERVER['HTTP_HOST']."' style='border-radius:4px 4px;display:block;width:100px;height:40px;background-color:#226193;color:#fff;line-height:40px;text-align:center;float:left;margin-left:30px;text-decoration:none;'>返回首页</a><a href='http://".$_SERVER['HTTP_HOST']."/financeadm.php'  style='border-radius:4px 4px;float:left;margin-left:135px;display:block;width:100px;height:40px;background-color:#e5e5e5;color:#333;line-height:40px;text-align:center;cursor:pointer;text-decoration:none;'>重新登录</a></div></div>";
			$this->show($html);
		}
	}
    public function workbench(){
		//获取登录信息
		$logininfo = $this->logininfo();
		$logininfo['lastloginip'] = $this->getip();
		$logininfo['logindatetime'] = date("Y-m-d H:i:s",$logininfo['logintime']);
		$this->assign("logininfo",$logininfo);
		$this->assign("serverhost",$_SERVER['SERVER_NAME']);
		$this->assign("serversys",PHP_OS);
		$this->assign("sysversion", php_uname('r'));
		$this->assign("phpversion",PHP_VERSION);
		$this->assign("droot",$_SERVER['DOCUMENT_ROOT']);
		$this->assign("browser",substr($_SERVER['HTTP_USER_AGENT'], 0, 40));
		$this->display();
	}
	//获取登录信息
	public function logininfo(){
		$logininfo = M("logininfo");
		$where['userid'] = $_SESSION ['gz']['userid'];
		$count = $logininfo->where($where)->count();
		if($count>1){
			$info = $logininfo->where($where)->limit(1,1)->order("id desc")->select();
			$infoa = $info[0];
		}else{
			$infoa = $logininfo->where($where)->find();
		}
		return $infoa;
	}
	//获取当前客户端IP地址
	function getip()
	{
		global $ip;
		if (getenv("HTTP_CLIENT_IP")){
			$ip = getenv("HTTP_CLIENT_IP");
		}else if(getenv("HTTP_X_FORWARDED_FOR")){
			$ip = getenv("HTTP_X_FORWARDED_FOR");
		}else if(getenv("REMOTE_ADDR")){
			$ip = getenv("REMOTE_ADDR");
		}else{
			$ip = "未知";
		}
		return $ip;
	}
	
}