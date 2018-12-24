<?php
namespace Common\Controller;
use Think\Controller;
class BaseController extends Controller{
	public function _initialize() {
		if(isset($_SESSION ['eladevp']['lang']) && $_SESSION ['eladevp']['lang']!=""){
			
		}else{
			$_SESSION ['eladevp']['lang'] = "cn";
		}
		if(isset($_SESSION ['eladevp']['userid']) && $_SESSION ['eladevp']['userid']!=""){
		}else{
			$this->redirect("Error404/index");
		}
	}
	 public function _empty(){
       // echo "您访问的页面不存在";
			$this->redirect("Empty/index");
    } 
}
?>