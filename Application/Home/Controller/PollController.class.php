<?php
namespace Home\Controller;
use Think\Controller;
class PollController extends Controller {
	public function index(){
		/* if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==1){
			$wherea['userid'] = $_SESSION ['eladevp']['userid'];
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==2){
			$wherea['userid'] = $_SESSION ['eladevp']['rcuid'];
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==3){
			$wherea['userid'] = $_SESSION ['eladevp']['githubuid'];
		}elseif(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']==4){
			$wherea['userid'] = $_SESSION ['eladevp']['wechatuid'];
		}
		$applyela = M("applytestela");
		$rslist = $applyela->where($wherea)->order("addtime desc")->select();
		//http://54.64.220.165:8080/api/1/history/EcAWvPP3nMt9nz93Ep13ccyCS55uKEKQnz
		if($rslist){
			
		} */
		$wherea['userid'] = $_SESSION ['eladevp']['wechatuid'];
		$wherea['eladr'] = $_POST['eladr'];
		$wherea['id'] = $_POST['cid'];
		$applyela = M("applytestela");
		$rs = $applyela->where($wherea)->find();
		$adrs = file_get_contents("http://54.64.220.165:8080/api/1/history/".$eladr);
		
	}
}
?>