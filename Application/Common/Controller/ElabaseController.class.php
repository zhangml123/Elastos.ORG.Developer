<?php
namespace Common\Controller;
use Think\Controller;
class ElabaseController extends Controller{
	public function _initialize() {
		if(isset($_SESSION ['ela']['userid']) && $_SESSION ['ela']['userid']!=""){
			
		}else{
			$this->redirect("Error404/index");
		}
	}
	 public function _empty(){
		$this->redirect("Empty/index");
    } 
}
?>