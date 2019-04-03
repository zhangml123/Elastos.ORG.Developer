<?php
namespace Home\Controller;
use Think\Controller;
use Common\Controller\BaseController;
class OauthController extends Controller{
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
    public function oauth(){
        $type=I('get.type');
        $code=I('get.code');
        //加载ThinkOauth类并实例化一个对象
        import("Org.ThinkSDK.ThinkOauth");
        $sns  = \ThinkOauth::getInstance($type);
        //腾讯微博需传递的额外参数
        $extend = null;
        if($type == 'tencent'){
            $extend = array('openid' => $this->_get('openid'), 'openkey' => $this->_get('openkey'));
        }
        $token = $sns->getAccessToken($code , $extend);
        $user_info = $this->$type($token);
		//var_dump($token);
		//var_dump($user_info);
        //获取当前登录用户信息
		if(is_array($token)){
               // 获取第三方账号数据
				//$userrelation = M("userrelation");
				//判断关联表是否有关联
				//$rsbinfo = $this->getuserrelation("",$user_info['name'],"","");
				//var_dump($rsbinfo);
				/* if($rsbinfo=="0"){
				//var_dump($rsbinfo);
					//没有绑定，则直接绑定,判断当前是否是登录状态
					if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate'] != ""){
						if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==1){
							$whereb['reguserid'] = $_SESSION ['eladevp']['userid'];
							$rsa = $userrelation->where($whereb)->find();
							if($rsa){
								$datab['githubuserid'] = $user_info['name'];
								$rsb = $userrelation->where($whereb)->save($datab);
							}else{
								$datab['mainuser'] = $_SESSION ['eladevp']['userid'];
								$datab['reguserid'] = $_SESSION ['eladevp']['userid'];
								$datab['githubuserid'] = $user_info['name'];
								$datab['ustatus'] = 1;
								$this->adduserrelation($datab);
							}
						}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==2){
							$whereb['rcuserid'] = $_SESSION ['eladevp']['rcuid'];
							$rsa = $userrelation->where($whereb)->find();
							if($rsa){
								$datab['githubuserid'] = $user_info['name'];
								$rsb = $userrelation->where($whereb)->save($datab);
							}else{
								$datab['mainuser'] = $_SESSION ['eladevp']['rcuid'];
								$datab['rcuserid'] = $_SESSION ['eladevp']['rcuid'];
								$datab['githubuserid'] = $user_info['name'];
								$datab['ustatus'] = 2;
								$this->adduserrelation($datab);
							}
						}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==4){
							$whereb['wechatuserid'] = $_SESSION ['eladevp']['wechatuid'];
							$rsa = $userrelation->where($whereb)->find();
							if($rsa){
								$datab['githubuserid'] =$user_info['name'];
								$rsb = $userrelation->where($whereb)->save($datab);
							}else{
								$datab['mainuser'] = $_SESSION ['eladevp']['wechatuid'];
								$datab['wechatuserid'] = $_SESSION ['eladevp']['wechatuid'];
								$datab['githubuserid'] = $user_info['name'];
								$datab['ustatus'] = 4;
								$this->adduserrelation($datab);
							}
						}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==5){
							$whereb['didid'] = $_SESSION ['eladevp']['didid'];
							$rsa = $userrelation->where($whereb)->find();
							if($rsa){
								$datab['githubuserid'] =$user_info['name'];
								$rsb = $userrelation->where($whereb)->save($datab);
							}else{
								$datab['mainuser'] = $_SESSION ['eladevp']['didid'];
								$datab['didid'] = $_SESSION ['eladevp']['didid'];
								$datab['githubuserid'] = $user_info['name'];
								$datab['ustatus'] = 5;
								$this->adduserrelation($datab);
							}
						}
						redirect("https://".$_SERVER['HTTP_HOST']."/index.php/Home/Pcenter/index.html");
					}else{
						$githubinfo = M("githubinfo");
						$whereb['githubuid'] = $user_info['name'];
						$rsb=$githubinfo->where($whereb)->find();
						if($rsb){
							
						}else{
							$datagit['githubuid'] = $user_info['name'];
							$datagit['githubappid'] = $token['openid'];
							$datagit['githubtoken'] = $token['access_token'];
							$datagit['headimg'] = $user_info['head_img'];
							$datagit['nickname'] = $user_info['name'];
							$datagit['firstname'] = $user_info['name'];
							$datagit['company'] = $user_info['company'];
							$datagit['bio'] = $user_info['bio'];
							$datagit['moreurl'] = $user_info['moreurl'];
							$datagit['email'] = $user_info['email'];
							$rsb = $githubinfo->add($datagit);
							//var_dump($githubinfo->getlastsql());
						}
						$_SESSION ['eladevp']['githubuid'] = $user_info['name'];
						$_SESSION ['eladevp']['userheadimg'] = $user_info['head_img'];
						$_SESSION ['eladevp']['logincate'] = 3;
						redirect("https://".$_SERVER['HTTP_HOST']."/index.php/Home/Pcenter/index.html");
					}
				}elseif($rsbinfo=="1"){
					//主账号
					if(isset($_SESSION['eladevp']['logincate']) && $_SESSION['eladevp']['logincate']!=""){
						//返回JSON：arr['mainuser'] = $user_info['name'] ;
						//echo $user_info['name'];
						//授权 让用户判断是解除绑定还是怎么处理？
						
					}else{
						//主账号是wechat,且用wechat登录
						$_SESSION ['eladevp']['githubuid'] = $user_info['name'];
						$_SESSION ['eladevp']['userheadimg'] = $user_info['head_img'];
						$_SESSION ['eladevp']['logincate'] = 3;
						$backrs = 1;
					}
					redirect("https://".$_SERVER['HTTP_HOST']."/index.php/Home/Pcenter/index.html?mainuser=".$user_info['name']);
				}else{
					$urelation = json_decode($rsbinfo,true);
					if(isset($_SESSION['eladevp']['logincate']) && $_SESSION['eladevp']['logincate']!=""){
						redirect("https://".$_SERVER['HTTP_HOST']."/index.php/Home/Pcenter/index.html?mainuser=".$urelation['mainuid']);
					}else{
						if($urelation['ustatus']==1){
							//主账号是注册的Userid
							$uinfo = $this->userinfo($urelation['mainuid']);
							$_SESSION['eladevp']['userid'] = $uinfo['userid'];
							$_SESSION ['eladevp']['logincate'] = 1;
						//$backrs = 1;
						}elseif($urelation['ustatus']==2){
							//主账号是注册的RCuid
							$uinfo = $this->rcinfo($urelation['mainuid']);
							$_SESSION['eladevp']['rcuid'] = $uinfo['rcuid'];
							$_SESSION['eladevp']['logincate'] = 2;
						//$backrs = 1;
						}elseif($urelation['ustatus']==3){
							//主账号是注册的githuuid
							$uinfo = $this->githubinfo($urelation['mainuid']);
							$_SESSION['eladevp']['githubuid'] = $uinfo['githubuid'];
							$_SESSION['eladevp']['logincate'] = 3;
						//$backrs = 1;
						}elseif($urelation['ustatus']==4){
							//主账号是注册的wechatuid
							$uinfo = $this->wechatinfo($urelation['mainuid']);
							$_SESSION['eladevp']['wechatuid'] = $uinfo['wechatuid'];
							$_SESSION['eladevp']['logincate'] = 4;
							//$backrs = 1;
						}elseif($urelation['ustatus']==5){
							//主账号是注册的wechatuid
							$uinfo = $this->didinfo($urelation['mainuid']);
							$_SESSION['eladevp']['didid'] = $uinfo['didid'];
							$_SESSION['eladevp']['logincate'] = 5;
							//$backrs = 1;
						}
						redirect("https://".$_SERVER['HTTP_HOST']."/index.php/Home/Pcenter/index.html");
					}
				}
	  }*/
				if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']!=""){
					 //if($user_info['name']!=""){
						 $rsa = $this->getuserrelation("",$user_info['name'],"","","");
						 if($rsa!="0"){
							 //已经使用返回重复
							 echo 2;
						 }else{
							 //构建User表数据，插入到User表，并构建User表与关系表联系
							$where['mainuser'] = $_SESSION ['eladevp']['userid'];
							$dataa['githubuserid'] = $user_info['name'];
							$userrelation = M("userrelation");
							//if($rsb){
								$rsc = $userrelation->where($where)->save($dataa);
								if($rsc){
									redirect("https://".$_SERVER['HTTP_HOST']."/index.php/Home/Pcenter/index.html");
								}else{
									redirect("https://".$_SERVER['HTTP_HOST']."/index.php/Home/Pcenter/index.html");
								}
							//}else{
								//	redirect("https://".$_SERVER['HTTP_HOST']."/index.php/Home/Pcenter/index.html");
							//}
						 }
					// }else{
					//	 echo 0;
					 //}
				}else{
					 $rsa = $this->getuserrelation("",$user_info['name'],"","","");
					 if($rsa!="0"){
						 //找出User表的信息
						 //$wherea['userid'] = $rsa['mainuser'];
						 $uinfo = $this->userinfo($rsa['mainuser']);
						 if($uinfo!="0"){
							$_SESSION['eladevp']['userid'] = $uinfo['userid'];
							$_SESSION['eladevp']['logincate'] = $uinfo['subucate'];
							$_SESSION['eladevp']['userheadimg'] = $uinfo['headimg'];
							redirect("https://".$_SERVER['HTTP_HOST']."/index.php/Home/Pcenter/index.html");
						 }else{
							redirect("https://".$_SERVER['HTTP_HOST']);
						 }
					 }else{
						 //构建User表数据，插入到User表，并构建User表与关系表联系
						$userid = "GIT".time().$this->getRandomString(5);
						$data['userid'] = $userid;
						$data['userpwd'] = md5($userid);
						$data['addtime'] = time();
						$data['githubuid'] = $user_info['name'];
						$data['nickname'] = $user_info['name'];;
						$data['firstname'] = $user_info['name'];;
						$data['roleid'] = 2;
						$data['subucate'] = 3;
						$data['headimg'] = $user_info['head_img'];
						$data['company'] = $user_info['company'];
						$data['bio'] = $user_info['bio'];
						$data['moreurl'] = $user_info['moreurl'];
						if(isset($user_info['email']) && $user_info['email']!=""){
							$data['email'] = $user_info['email'];
						}else{
							$data['email'] = "";
						}
						$dataa['mainuser'] = $userid;
						$dataa['githubuserid'] = $user_info['name'];
						$dataa['ustatus'] = 3;
						$user = M("user");
						$userrelation = M("userrelation");
						$rsb = $user->add($data);
						if($rsb){
							$rsc = $userrelation->add($dataa);
							if($rsc){
								$_SESSION['eladevp']['userid'] = $userid;
								$_SESSION['eladevp']['logincate'] = 3;
								$_SESSION['eladevp']['userheadimg'] = $user_info['head_img'];
								redirect("https://".$_SERVER['HTTP_HOST']."/index.php/Home/Pcenter/index.html");
							}else{
								redirect("https://".$_SERVER['HTTP_HOST']);
							}
						}else{
							redirect("https://".$_SERVER['HTTP_HOST']);
						}
					 }
				}
	   }
	}
    //登录成功，获取腾讯QQ用户信息
    public function qq($token){
        import("Org.ThinkSDK.ThinkOauth");
        $qq   = \ThinkOauth::getInstance('qq', $token);
        $data = $qq->call('user/get_user_info');
        if($data['ret'] == 0){
            $userInfo['type'] = 1;
            $userInfo['name'] = $data['nickname'];
            $userInfo['nickname'] = $data['nickname'];
            $userInfo['head_img'] = $data['figureurl_2'];
            return $userInfo;
        } else {
            throw_exception("获取腾讯QQ用户信息失败：{$data['msg']}");
        }
    }
    //登录成功，获取微信用户信息
    public function weixin($token){
        import("Org.ThinkSDK.ThinkOauth");
        $tencent = \ThinkOauth::getInstance('weixin', $token);
        $data    = $tencent->call('sns/userinfo');
        // dump($data);
        if($data['ret'] == 0){
            $userInfo['type'] = 'weixin';
            $userInfo['name'] = $data['nickname'];
            $userInfo['nickname'] = $data['nickname'];
            $userInfo['head_img'] = $data['headimgurl'];
            return $userInfo;
        } else {
            throw_exception("获取腾讯微博用户信息失败：{$data['msg']}");
        }
    }

    //登录成功，获取腾讯微博用户信息
    public function tencent($token){
        import("Org.ThinkSDK.ThinkOauth");
        $tencent = \ThinkOauth::getInstance('tencent', $token);
        $data    = $tencent->call('user/info');
        if($data['ret'] == 0){
            $userInfo['type'] = 'TENCENT';
            $userInfo['name'] = $data['data']['name'];
            $userInfo['nickname'] = $data['data']['nick'];
            $userInfo['head_img'] = $data['data']['head'];
            return $userInfo;
        } else {
            throw_exception("获取腾讯微博用户信息失败：{$data['msg']}");
        }
    }

    //登录成功，获取新浪微博用户信息
    public function sina($token){
        $sina = \ThinkOauth::getInstance('sina', $token);
        $data = $sina->call('users/show', "uid={$sina->openid()}");
        if($data['error_code'] == 0){
            $userInfo['type'] = 2;
            $userInfo['name'] = $data['name'];
            $userInfo['nickname'] = $data['screen_name'];
            $userInfo['head_img'] = $data['avatar_large'];
            return $userInfo;
        } else {
            throw_exception("获取新浪微博用户信息失败：{$data['error']}");
        }
    }

    //登录成功，获取网易微博用户信息
    public function t163($token){
        $t163 = \ThinkOauth::getInstance('t163', $token);
        $data = $t163->call('users/show');
        if($data['error_code'] == 0){
            $userInfo['type'] = 'T163';
            $userInfo['name'] = $data['name'];
            $userInfo['nickname'] = $data['screen_name'];
            $userInfo['head_img'] = str_replace('w=48&h=48', 'w=180&h=180', $data['profile_image_url']);
            return $userInfo;
        } else {
            throw_exception("获取网易微博用户信息失败：{$data['error']}");
        }
    }

    //登录成功，获取人人网用户信息
    public function renren($token){
        $renren = \ThinkOauth::getInstance('renren', $token);
        $data   = $renren->call('user/get');
        if(!isset($data['error'])){
            $userInfo['type'] = 4;
            $userInfo['name'] = $data['response']['name'];
            $userInfo['nickname'] = $data['response']['name'];
            $userInfo['head_img'] = $data['response']['avatar'][3]['url'];
            return $userInfo;
        } else {
            throw_exception("获取人人网用户信息失败：{$data['error_msg']}");
        }
    }

    //登录成功，获取360用户信息
    public function x360($token){
        $x360 = \ThinkOauth::getInstance('x360', $token);
        $data = $x360->call('user/me');
        if($data['error_code'] == 0){
            $userInfo['type'] = 'X360';
            $userInfo['name'] = $data['name'];
            $userInfo['nickname'] = $data['name'];
            $userInfo['head_img'] = $data['avatar'];
            return $userInfo;
        } else {
            throw_exception("获取360用户信息失败：{$data['error']}");
        }
    }

    //登录成功，获取豆瓣用户信息
    public function douban($token){
        $douban = \ThinkOauth::getInstance('douban', $token);
        $data   = $douban->call('user/~me');
        if(empty($data['code'])){
            $userInfo['type'] = 3;
            $userInfo['name'] = $data['name'];
            $userInfo['nickname'] = $data['name'];
            $userInfo['head_img'] = $data['avatar'];
            return $userInfo;
        } else {
            throw_exception("获取豆瓣用户信息失败：{$data['msg']}");
        }
    }

    //登录成功，获取Github用户信息
    public function github($token){
		//var_dump($token);
        $github = \ThinkOauth::getInstance('github', $token);
		//var_dump($github);
        $data   = $github->call('user');
		//var_dump($data);
        if(empty($data['code'])){
            $userInfo['type'] = 'GITHUB';
            $userInfo['name'] = $data['login'];
            $userInfo['nickname'] = $data['name'];
            $userInfo['head_img'] = $data['avatar_url'];
            $userInfo['company'] = $data['company'];
            $userInfo['bio'] = $data['bio'];
            $userInfo['moreurl'] = $data['blog'];
            $userInfo['email'] = $data['email'];
			//var_dump($userinfo);
            return $userInfo;
        } else {
            throw_exception("获取Github用户信息失败：{$data}");
        }
    }

    //登录成功，获取Google用户信息
    public function google($token){
        $google = \ThinkOauth::getInstance('google', $token);
        $data   = $google->call('userinfo');
        if(!empty($data['id'])){
            $userInfo['type'] = 'GOOGLE';
            $userInfo['name'] = $data['name'];
            $userInfo['nickname'] = $data['name'];
            $userInfo['head_img'] = $data['picture'];
            return $userInfo;
        } else {
            throw_exception("获取Google用户信息失败：{$data}");
        }
    }

    //登录成功，获取Google用户信息
    public function msn($token){
        $msn  = \ThinkOauth::getInstance('msn', $token);
        $data = $msn->call('me');
        if(!empty($data['id'])){
            $userInfo['type'] = 'MSN';
            $userInfo['name'] = $data['name'];
            $userInfo['nickname'] = $data['name'];
            $userInfo['head_img'] = '微软暂未提供头像URL，请通过 me/picture 接口下载';
            return $userInfo;
        } else {
            throw_exception("获取msn用户信息失败：{$data}");
        }
    }

    //登录成功，获取点点用户信息
    public function diandian($token){
        $diandian  = \ThinkOauth::getInstance('diandian', $token);
        $data      = $diandian->call('user/info');
        if(!empty($data['meta']['status']) && $data['meta']['status'] == 200){
            $userInfo['type'] = 'DIANDIAN';
            $userInfo['name'] = $data['response']['name'];
            $userInfo['nickname'] = $data['response']['name'];
            $userInfo['head_img'] = "https://api.diandian.com/v1/blog/{$data['response']['blogs'][0]['blogUuid']}/avatar/144";
            return $userInfo;
        } else {
            throw_exception("获取点点用户信息失败：{$data}");
        }
    }

    //登录成功，获取淘宝网用户信息
    public function taobao($token){
        $taobao = \ThinkOauth::getInstance('taobao', $token);
        $fields = 'user_id,nick,sex,buyer_credit,avatar,has_shop,vip_info';
        $data   = $taobao->call('taobao.user.buyer.get', "fields={$fields}");
        if(!empty($data['user_buyer_get_response']['user'])){
            $user = $data['user_buyer_get_response']['user'];
            $userInfo['type'] = 'TAOBAO';
            $userInfo['name'] = $user['user_id'];
            $userInfo['nickname'] = $user['nick'];
            $userInfo['head_img'] = $user['avatar'];
            return $userInfo;
        } else {
            throw_exception("获取淘宝网用户信息失败：{$data['error_response']['msg']}");
        }
    }

    //登录成功，获取百度用户信息
    public function baidu($token){
        $baidu = \ThinkOauth::getInstance('baidu', $token);
        $data  = $baidu->call('passport/users/getLoggedInUser');
        if(!empty($data['uid'])){
            $userInfo['type'] = 'BAIDU';
            $userInfo['name'] = $data['uid'];
            $userInfo['nickname'] = $data['uname'];
            $userInfo['head_img'] = "http://tb.himg.baidu.com/sys/portrait/item/{$data['portrait']}";
            return $userInfo;
        } else {
            throw_exception("获取百度用户信息失败：{$data['error_msg']}");
        }
    }

    //登录成功，获取开心网用户信息
    public function kaixin($token){
        $kaixin = \ThinkOauth::getInstance('kaixin', $token);
        $data   = $kaixin->call('users/me');
        if(!empty($data['uid'])){
            $userInfo['type'] = 5;
            $userInfo['name'] = $data['uid'];
            $userInfo['nickname'] = $data['name'];
            $userInfo['head_img'] = $data['logo50'];
            return $userInfo;
        } else {
            throw_exception("获取开心网用户信息失败：{$data['error']}");
        }
    }

    //登录成功，获取搜狐用户信息
    public function sohu($token){
        $sohu = \ThinkOauth::getInstance('sohu', $token);
        $data = $sohu->call('user/get_info');
        if('success' == $data['message'] && !empty($data['data'])){
            $userInfo['type'] = 'SOHU';
            $userInfo['name'] = $data['data']['open_id'];
            $userInfo['nickname'] = $data['data']['nick'];
            $userInfo['head_img'] = $data['data']['icon'];
            return $userInfo;
        } else {
            throw_exception("获取搜狐用户信息失败：{$data['message']}");
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
	 // var_dump($userrelationinfo);
	  if($userrelationinfo){
		  return $userrelationinfo;
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
  //获取wechat相关信息
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


}
