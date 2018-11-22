<?php
namespace Home\Controller;
use Common\Controller\BaseController;
use Home\Model\CommentModel;
class DocumentationController extends BaseController {
    public function index(){
		$where['githuburl'] = "https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/Build_test_Chain.md";
		$where['commentid'] = array('exp','is null');
		$commentlist = $this->initcommentlist($where);
		$contents = file_get_contents($_SERVER['DOCUMENT_ROOT']."/Public/developerdoc/Doc/Build_test_Chain.md");
		$stra = '<svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg>';
		$contents = str_replace($stra,"",$contents);
		$this->assign("commentlist",$commentlist);
		$this->assign("firstc",$contents);
		$this->assign("firstgiturl","https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/Build_test_Chain.md");
		$this->assign("curlang",$_SESSION ['eladevp']['lang']);
		$this->assign("localdirfile",$this->getlocalfile());
		$this->assign("curhost","http://".$_SERVER['HTTP_HOST']."/");
		$this->display();
	}
	//初始子评论列表
	public function subcommentlist($commentid){
		$where['commentid'] = $commentid;
		$comment = new CommentModel;
		$commentlist = $comment->commentlist($where,0,5);
		if($commentlist){
			for($i=0;$i<count($commentlist);$i++){
				if($_SESSION ['eladevp']['lang']=="cn"){
					$commentlist[$i]['adddatetime'] = date("Y-m-d H:i:s",$commentlist[$i]['addtime']);
				}else{
					$commentlist[$i]['adddatetime'] = date("M d - h:i A",$commentlist[$i]['addtime']);
				}
			}
		}
		return $commentlist;
	}
	public function getlocalfile(){
		//取得当前文件所在目录
		$path  = $_SERVER['DOCUMENT_ROOT']."/Public/developerdoc/Doc";
		$result = glob($path.'/*');
		$arra = array();
		for($i=0;$i<count($result);$i++){
			$arr = explode("/",$result[$i]);
			$arrw = explode(".",$arr[count($arr)-1]);
			$arra[$i]['filename'] = $arr[count($arr)-1];
			$arra[$i]['localdir'] = $result[$i];
			$arra[$i]['hostfile'] = "http://ela.chat/eladevp/developerdoc/Doc/".$arr[count($arr)-1];
			$arra[$i]['type'] = "file";
			$arra[$i]['githuburl'] = "https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/".$arr[count($arr)-1];
			$arra[$i]['shortname'] = $arrw[0];
			if(substr($arra[$i]['shortname'],-3)=="_CN"){
				$arra[$i]['filelang'] = "CN";
			}else{
				$arra[$i]['filelang'] = "EN";
			}
		}
		return $arra;
	}
	public function getfirstlangfile($arr){
		/* $narr = array();
		for($a=0;$a<count($arr);$a++){
			if($arr[$a]['type']=="file" && $arr[$a]['filelang']=="CN"){
				$narr[0]['filedir'] = $_SERVER['DOCUMENT_ROOT']."/eladevp/developerdoc/Doc/".$arr[$a]['filename'];
				$narr[0]['githuburl'] = $arr[$a]['githuburl'];
				if($a==1){
					$narr[1]['filedir'] = $_SERVER['DOCUMENT_ROOT']."/eladevp/developerdoc/Doc/".$arr[0]['filename'];
					$narr[1]['githuburl'] = $arr[0]['githuburl'];
				}
			}else($arr[$a]['type']=="file" ){
				$narr[0]['filedir'] = $_SERVER['DOCUMENT_ROOT']."/eladevp/developerdoc/Doc/".$arr[$a]['filename'];
				$narr[0]['githuburl'] = $arr[$a]['githuburl'];
			}
		} */
	}
	public function getcontents(){
		if($_POST['fname']!="" ){
			 $str = file_get_contents($_SERVER['DOCUMENT_ROOT']."/Public/developerdoc/Doc/".$_POST['fname']);
			 $stra = '<svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg>';
			 $contents = str_replace('<img src="','<img src="https://github.com',$str);
			 $contents = str_replace($stra,"",$contents);
			 $where['githuburl'] = "https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/".$_POST['fname'];
			 $where['commentid'] = array('exp','is null');
			 $commentlist[] = $contents;
			 $commentlist[] = $this->initcommentlist($where);
			 echo json_encode($commentlist);
		}else{
			 echo "";
		}
	}
	//获取初始评论列表
	public function initcommentlist($where){
		//$where['githuburl'] = "https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/Build_test_Chain.md";
		//$where['commentid'] = array('exp','is null');
		$comment = new CommentModel;
		$commentlist = $comment->commentlist($where,0,10);
		if($commentlist){
			for($i=0;$i<count($commentlist);$i++){
				$commentlist[$i]['subcommentlist'] = $this->subcommentlist($commentlist[$i]['id']);
				if($_SESSION ['eladevp']['lang']=="cn"){
					$commentlist[$i]['adddatetime'] = date("Y-m-d H:i:s",$commentlist[$i]['addtime']);
				}else{
					$commentlist[$i]['adddatetime'] = date("M d - h:i A",$commentlist[$i]['addtime']);
				}
			}
		}
		return $commentlist;
	}
}