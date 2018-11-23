<?php
namespace Elafansadm\Controller;
use Think\Controller;
class BaseController extends Controller {
	 public function _initialize()
    {
        if(isset($_SESSION['userid']) && $_SESSION['userid']!="" && $_SESSION['upwd']!=""){
			
		}else{
			$this->error();
		}
    }
}