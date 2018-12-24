<?php
namespace Home\Controller;
use Think\Controller;
class Error404Controller extends Controller
{

	  public function index(){
        //echo "您访问的控制器不存在";
		$this->assign("curhost","https://".$_SERVER['HTTP_HOST']."/");
		$this->display();
    }
}
?>