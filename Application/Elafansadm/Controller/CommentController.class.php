<?php
namespace Elafansadm\Controller;
use Elafansadm\Model\CommentModel;
use Think\Controller;
class CommentController extends Controller {
	public function index(){
		if(isset($_GET['p']) && $_GET['p']!="" && $_GET['p']>0){
			$p = $_GET['p'];
		}else{
			$p = 1;
		}
		$where['id'] = array("neq",0);
		$comment = new CommentModel();
		$ucount = $comment->commentcount($where);
		$pageinfo = $this->pagefuncna($ucount,10,$where,$p);
		$commentlist = $comment->commentlist($where,$pageinfo['start'],10);
		if($commentlist){
			for($i=0;$i<count($commentlist);$i++){
				if(isset($_GET['p']) && $_GET['p']!="" && $_GET['p']>0){
					$p = $_GET['p'];
				}else{
					$p = 1;
				}
				$commentlist[$i]['sortid'] = 10*($p-1)+$i+1;
			}
		}		
		
		$this->assign("commentlist",$commentlist);
		$this->assign("ucount",$ucount);
		$this->assign("pageinfo",$pageinfo);
		$this->assign("curhost","https://".$_SERVER['HTTP_HOST']."/elafansadm.php/Comment/index");
		$this->display();
	}
	
	//更改评论状态
	public function setcstatus(){
		$where['id'] = $_POST['id'];
		$data['status'] = $_POST['status'];
		$comment = new CommentModel();
		$rs = $comment->edit($where,$data);
		if($rs){
			echo 1;
		}else{
			echo 0;
		}
	}
	//删除指定评论
	public function delcomment(){
		$where['id'] = $_POST['id'];
		$comment = new CommentModel();
		$rs = $comment->del($where);
		if($rs){
			echo 1;
		}else{
			echo 0;
		}
	}
	//批量删除评论
	public function batchdel(){
		$arr = explode(";",trim($_POST['idlist'],";"));
		$comment = new CommentModel();
		$flag = true;
		for($i=0;$i<count($arr);$i++){
			$where['id'] = $arr[$i];
			$rs = $comment->del($where);
			if($rs){
				$flag = true;
			}else{
				$flag = false;
			}
		}
		if($flag){
			echo 1;
		}else{
			echo 0;
		}
	}
	//分页方法
	public function pagefuncna($allnum,$num,$where,$p){
		$arr = array();
		$pagesize = ceil($allnum/$num);
		$arr['allnum'] = $allnum;
		$arr['num'] = $num;
		$arr['pagesize'] = $pagesize;
		if(($p>0) && ($p<$pagesize)){
			$arr['curpage'] = $p;
			$arr['start'] = ($p-1)*$num;
			$urla = "?p=1";
			$urlb = "?p=".($p-1);
			$urlc = "?p=".($p+1);
			$urld = "?p=".$pagesize;
			$arr['urla'] = $urla;
			$arr['urlb'] = $urlb;
			$arr['urlc'] = $urlc;
			$arr['urld'] = $urld;
		}elseif($p<0){
			$arr['curpage'] = 1;
			$arr['start'] = 0;
			$urla = "?p=1";
			$urlb = "?p=1";
			$urlc = "?p=2";
			$urld = "?p=".$pagesize;
			$arr['urla'] = $urla;
			$arr['urlb'] = $urlb;
			$arr['urlc'] = $urlc;
			$arr['urld'] = $urld;
		}elseif($p>=$pagesize){
			$arr['curpage'] = $pagesize;
			$arr['start'] = ($pagesize-1)*$num;
			$urla = "?p=1";
			$urlb = "?p=".($pagesize-1);
			$urlc = "?p=".$pagesize;
			$urld = "?p=".$pagesize;
			$arr['urla'] = $urla;
			$arr['urlb'] = $urlb;
			$arr['urlc'] = $urlc;
			$arr['urld'] = $urld;
		}
		return $arr;
	}
	//分页方法
	public function pagefuncn($allnum,$num,$where,$p){
		$arr = array();
		$pagesize = ceil($allnum/$num);
		$arr['allnum'] = $allnum;
		$arr['num'] = $num;
		$arr['pagesize'] = $pagesize;
		if(($p>0) && ($p<$pagesize)){
			$arr['curpage'] = $p;
			$arr['start'] = ($p-1)*$num;
			$urla = "?p=1";
			$urlb = "?p=".($p-1);
			$urlc = "?p=".($p+1);
			$urld = "?p=".$pagesize;
			$arr['urla'] = $urla;
			$arr['urlb'] = $urlb;
			$arr['urlc'] = $urlc;
			$arr['urld'] = $urld;
		}elseif($p<0){
			$arr['curpage'] = 1;
			$arr['start'] = 0;
			$urla = "?p=1";
			$urlb = "?p=1";
			$urlc = "?p=2";
			$urld = "?p=".$pagesize;
			$arr['urla'] = $urla;
			$arr['urlb'] = $urlb;
			$arr['urlc'] = $urlc;
			$arr['urld'] = $urld;
		}elseif($p>=$pagesize){
			$arr['curpage'] = $pagesize;
			$arr['start'] = ($pagesize-1)*$num;
			$urla = "?p=1";
			$urlb = "?p=".($pagesize-1);
			$urlc = "?p=".$pagesize;
			$urld = "?p=".$pagesize;
			$arr['urla'] = $urla;
			$arr['urlb'] = $urlb;
			$arr['urlc'] = $urlc;
			$arr['urld'] = $urld;
		}
		return $arr;
	}
}
?>
