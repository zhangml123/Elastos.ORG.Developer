<?php
namespace Elafansadm\Controller;
use Elafansadm\Model\CateModel;
use Elafansadm\Model\ArticleModel;
use Think\Controller;
class ArticleController extends Controller {
	//文章列表
    public function index(){
		$where['catepid'] = 3;
		if(isset($_GET['p']) && $_GET['p']!="" && $_GET['p']>0){
			$p = $_GET['p'];
		}else{
			$p = 1;
		}
		if(isset($_GET['keyword']) && $_GET['keyword']!=""){
			//$where['title'] = array("like","%".$_GET['keyword']."%");
			
			$where["_string"]="title like '%".$_GET['keyword']."%' or author in(select userid from gz_user where username like '%".$_GET['keyword']."%')";
			$wherea['keyword'] = $_GET['keyword'];
			$this->assign("keyword",$_GET['keyword']);
		}
		if(isset($_GET['homeid']) && $_GET['homeid']!=""){
			$where['homeid'] = $_GET['homeid'];
			$wherea['homeid'] = $_GET['homeid'];
			$this->assign("homeid",$_GET['homeid']);
		}
		if(isset($_GET['catepid']) && $_GET['catepid']!=""){
			$where['catepid'] = $_GET['catepid'];
			$wherea['catepid'] = $_GET['catepid'];
			$this->assign("catepid",$_GET['catepid']);
		}
		if(isset($_GET['cid']) && $_GET['cid']!=""){
			$wherea['cateid'] = $_GET['cid'];
			$wherew['catepid'] = $_GET['cid'];
			if($this->checksubexists($wherew)!=0){
				$where['catelist'] = array("like","%,".$_GET['cid']."%");
			}else{
				$where['cateid'] = $_GET['cid'];
			}
			$this->assign("cid",$_GET['cid']);
		}
		if(isset($_GET['status']) && $_GET['status']!=""){
			$where['status'] = $_GET['status'];
			$wherea['status'] = $_GET['status'];
			$this->assign("status",$_GET['status']);
		}else{
			$where['status'] = array("in",array(0,1));
		}
		
		$cate = new CateModel();
		$article = new ArticleModel();
		$ucount = $article->articlecount($where);
		$pageinfo = $this->pagefuncn($ucount,10,$wherea,$p);
		$articlelist = $article->articlelist($where,$pageinfo['start'],10);
		
		if($articlelist){
			for($i=0;$i<count($articlelist);$i++){
				$articlelist[$i]['adddatetime'] = date("Y-m-d",$articlelist[$i]['addtime']);
				$articlelist[$i]['editdatetime'] = date("Y-m-d",$articlelist[$i]['edittime']);
				$whereb['id'] = $articlelist[$i]['cateid'];
				$cateinfo = $cate->cateinfo($whereb);
				$articlelist[$i]['catename'] =$cateinfo['catename'];
				if(isset($_GET['p']) && $_GET['p']!="" && $_GET['p']>0){
					$p = $_GET['p'];
				}else{
					$p = 1;
				}
				$articlelist[$i]['sortid'] = 10*($p-1)+$i+1;
			}
		}
		$this->assign("articlelist",$articlelist);
		$this->assign("pageinfo",$pageinfo);
		$this->assign("cateid",$_GET['cid']);
		$this->assign("curhost","http://".$_SERVER['HTTP_HOST']."/Elafansadm.php/News/index");
		$this->display();
	}
	//模糊查询编辑账户
	public function userinfobyusername($keyword){
		$user = M("user");
		$userinfo = $user->where("username like %$keyword%")->field("userid")->select();
		if($userinfo){
			return $userinfo;
		}else{
			return 0;
		}
	}
	//获取未停用的账户信息列表
	public function userlist(){
		$where['status'] = 1;
		$user = M("user");
		$userlist = $user->where($where)->select();
		//var_dump($userlist);
		if($userlist){
			return $userlist;
		}else{
			return 0;
		}
	}
	//判断指定分类是不是有子类
	public  function checksubexists($where){
		$cate = new CateModel();
		$rs = $cate->cateinfo($where);
		if($rs){
			return 1;
		}else{
			return 0;
		}
	}
	//新增界面
	public function addshow(){
		$wherea['catepid'] = $_GET['cateid'];
		$cate = new CateModel();
		$subcatelist = $cate->catealllist($wherea);
		if($subcatelist){
			$this->assign("singlecate","1");
			$this->assign("subcatelist",$subcatelist);
		}else{
			$this->assign("singlecate","2");
		}
		$userlist = $this->userlist();
		$this->assign("userlist",$userlist);
		$this->assign("cateid",$_GET['cateid']);
		$this->display();
	}
	public function getpcate($cid){
		$cate = M('cate');
		$cateinfo = $cate->where('id='.$cid)->find();
		return $cateinfo['pid'];
	}
	//新增文章功能
	public function add(){
		$samecateidf = time()."-".rand(222,999);
		$article = new articleModel();
		if($_POST['singleyn']=="1"){
			$data['title'] = $_POST['title'];
			$data['shorttitle'] = $_POST['shorttitle'];
			$data['author'] =  $_POST['author'];
			$data['summary'] = $_POST['summary'];
			$data['contents'] = $_POST['contents'];
			$data['addtime'] = time();
			$data['edittime'] = time();
			$data['catepid'] = $this->getpcate($_POST['cateid']);
			$data['catelist'] = $_POST['catelist'];
			$data['cateid'] = $_POST['cateid'];
			$data['imgurl'] = $_POST['imgurl'];
			$data['videourl'] = $_POST['videourl'];
			$data['fileurl'] = $_POST['fileurl'];
			$data['source'] = $_POST['source'];
			$data['homeid'] = $_POST['homeid'];
			$data['subhomeid'] = $_POST['subhomeid'];
			$data['draft'] = $_POST['draft'];
			$data['samecateidf'] = $samecateidf;
			$rs = $article->add($data);
			if($rs){
				echo 1;
			}else{
				echo 0;
			}
			//var_dump($data);
		}else{
			$arra = explode("|",$_POST['catepid']);
			$arrb = explode("|",$_POST['cateid']);
			$arrc = explode("|",$_POST['catelist']);
			$model = M();
			$model->startTrans();
			$flag = false;
			for($k=0;$k<count($arra);$k++){
				$data['title'] = $_POST['title'];
				$data['shorttitle'] = $_POST['shorttitle'];
				$data['author'] = $_POST['author'];
				$data['summary'] = $_POST['summary'];
				$data['contents'] = $_POST['contents'];
				$data['addtime'] = time();
				$data['edittime'] = time();
				$data['catepid'] = $arra[$k];
				$data['catelist'] = $arrc[$k];
				$data['cateid'] = $arrb[$k];
				$data['imgurl'] = $_POST['imgurl'];
				$data['videourl'] = $_POST['videourl'];
				$data['fileurl'] = $_POST['fileurl'];
				$data['source'] = $_POST['source'];
				$data['homeid'] = $_POST['homeid'];
				$data['subhomeid'] = $_POST['subhomeid'];
				$data['samecateidf'] = $samecateidf;
				$rs = $model->table("gz_article")->add($data);
				if($rs){
					$flag = true;
				}else{
					$flag = false;
					break;
				}
			}
			if($flag){
				$model->commit();
				echo 1;
			}else{
				$model->rollback();
				echo 0;
			}
		}
	}
	//编辑功能界面
	public function editshow(){
/* 		$where['id'] = $_GET['articleid'];
		$whereb['catepid'] = 1;
		$cate = new CateModel();
		$advthomemenu = $cate->catealllist($whereb);
		$advt = new articleModel();
		$advtinfo = $advt->articleinfo($where);
		$optionlist = $this->careatoption($advtinfo['catepid'],$advtinfo['catemid'],$advtinfo['cateid']);
		$this->assign("optionlist",$optionlist);
		$this->assign("cid","1");
		$this->assign("advtinfo",$advtinfo);
		$this->assign("advthomemenu",$advthomemenu);
		$this->assign("articleid",$_GET['articleid']);
		$this->display(); */
		
 		$where['id'] = $_GET['articleid'];
		$article = new articleModel();
		$articleinfo = $article->articleinfo($where);
		$wherea['catepid'] = $_GET['cateid'];
		$cate = new CateModel();
		$subcatelist = $cate->catealllist($wherea);
		if($subcatelist){
			$this->assign("singlecate","1");
			$this->assign("subcatelist",$subcatelist);
		}else{
			$this->assign("singlecate","2");
		}
		$userlist = $this->userlist();
		$this->assign("userlist",$userlist);
		$this->assign("articleinfo",$articleinfo);
		$this->assign("cateid",$_GET['cateid']);
		$this->display();
	}
	//编辑功能
	public function edit(){
		$article = new ArticleModel();
		$where['id'] = $_POST['articleid'];
		$data['title'] = $_POST['title'];
		$data['shorttitle'] = $_POST['shorttitle'];
		$data['author'] = $_POST['author'];
		$data['summary'] = $_POST['summary'];
		$data['contents'] = $_POST['contents'];
		$data['edittime'] = time();
		$data['catepid'] = 3;
		$data['catelist'] = $_POST['catelist'];
		$data['cateid'] = $_POST['cateid'];
		$data['imgurl'] = $_POST['imgurl'];
		$data['videourl'] = $_POST['videourl'];
		$data['fileurl'] = $_POST['fileurl'];
		$data['source'] = $_POST['source'];
		$data['homeid'] = $_POST['homeid'];
		$data['subhomeid'] = $_POST['subhomeid'];
		$data['draft'] = $_POST['draft'];
		//$data['samecateidf'] = $samecateidf;
		$rs = $article->edit($where,$data);
		if($rs){
			echo 1;
		}else{
			echo 0;
		}
	}
	//更改指定文章状态
	public function updatestatus(){
		$where['id'] = $_POST['articleid'];
		$data['status'] = $_POST['status'];
		$article = M("article");
		$rs = $article->where($where)->save($data);
		if($rs){
			echo 1;
		}else{
			echo 0;
		}
	}
	//更改指定文章状态
	public function updatehomestatus(){
		$where['id'] = $_POST['articleid'];
		$data['homeid'] = $_POST['homeid'];
		$article = M("article");
		$rs = $article->where($where)->save($data);
		if($rs){
			echo 1;
		}else{
			echo 0;
		}
	}
	//更改指定文章状态
	public function updatesubhomstatus(){
		$where['id'] = $_POST['articleid'];
		$data['subhomeid'] = $_POST['subhome'];
		$article = M("article");
		$rs = $article->where($where)->save($data);
		if($rs){
			echo 1;
		}else{
			echo 0;
		}
	}
	//删除指定文章
	public function del(){
		$where['id'] = $_POST['articleid'];
		$article = M("article");
		$rs = $article->where($where)->delete();
		if($rs){
			echo 1;
		}else{
			echo 0;
		}
	}
	//获取分类
	public function getsubcate(){
		$cate = new CateModel();
		$where['catepid'] = $_POST['cid'];
		$subcatelist = $cate->catealllist($where);
		if($subcatelist){
			echo json_encode($subcatelist);
		}else{
			echo 0;
		}
	}
	//分页方法
	public function pagefuncn($allnum,$num,$where,$p){
		if(isset($where['catepid']) && $where['catepid']!=""){
			$catepid = $where['catepid'];
		}else{
			$catepid="";
		}
		if(isset($where['cateid']) && $where['cateid']!=""){
			$cateid = $where['cateid'];
		}else{
			$cateid="";
		}
		if(isset($where['status']) && $where['status']!=""){
			$status = $where['status'];
		}else{
			$status="";
		}
		if(isset($where['homeid']) && $where['homeid']!=""){
			$homeid = $where['homeid'];
		}else{
			$homeid="";
		}
		if(isset($where['keyword']) && $where['keyword']!=""){
			$keyword = $where['keyword'];
		}else{
			$keyword="";
		}
		$arr = array();
		$pagesize = ceil($allnum/$num);
		$arr['allnum'] = $allnum;
		$arr['num'] = $num;
		$arr['pagesize'] = $pagesize;
		if(($p>0) && ($p<$pagesize)){
			$arr['curpage'] = $p;
			$arr['start'] = ($p-1)*$num;
			$urla = "?p=1&status=".$status."&cid=".$cateid."&catepid=".$catepid."&homeid=".$homeid."&keyword=".$keyword;
			$urlb = "?p=".($p-1)."&status=".$status."&cid=".$cateid."&catepid=".$catepid."&homeid=".$homeid."&keyword=".$keyword;
			$urlc = "?p=".($p+1)."&status=".$status."&cid=".$cateid."&catepid=".$catepid."&homeid=".$homeid."&keyword=".$keyword;
			$urld = "?p=".$pagesize."&status=".$status."&cid=".$cateid."&catepid=".$catepid."&homeid=".$homeid."&keyword=".$keyword;
			$arr['urla'] = $urla;
			$arr['urlb'] = $urlb;
			$arr['urlc'] = $urlc;
			$arr['urld'] = $urld;
		}elseif($p<0){
			$arr['curpage'] = 1;
			$arr['start'] = 0;
			$urla = "?p=1&status=".$status."&cid=".$cateid."&catepid=".$catepid."&homeid=".$homeid."&keyword=".$keyword;
			$urlb = "?p=1&status=".$status."&cid=".$cateid."&catepid=".$catepid."&homeid=".$homeid."&keyword=".$keyword;
			$urlc = "?p=2&status=".$status."&cid=".$cateid."&catepid=".$catepid."&homeid=".$homeid."&keyword=".$keyword;
			$urld = "?p=".$pagesize."&status=".$status."&cid=".$cateid."&catepid=".$catepid."&homeid=".$homeid."&keyword=".$keyword;
			$arr['urla'] = $urla;
			$arr['urlb'] = $urlb;
			$arr['urlc'] = $urlc;
			$arr['urld'] = $urld;
		}elseif($p>=$pagesize){
			$arr['curpage'] = $pagesize;
			$arr['start'] = ($pagesize-1)*$num;
			$urla = "?p=1&status=".$status."&cid=".$cateid."&catepid=".$catepid."&homeid=".$homeid."&keyword=".$keyword;
			$urlb = "?p=".($pagesize-1)."&status=".$status."&cid=".$cateid."&catepid=".$catepid."&homeid=".$homeid."&keyword=".$keyword;
			$urlc = "?p=".$pagesize."&status=".$status."&cid=".$cateid."&catepid=".$catepid."&homeid=".$homeid."&keyword=".$keyword;
			$urld = "?p=".$pagesize."&status=".$status."&cid=".$cateid."&catepid=".$catepid."&homeid=".$homeid."&keyword=".$keyword;
			$arr['urla'] = $urla;
			$arr['urlb'] = $urlb;
			$arr['urlc'] = $urlc;
			$arr['urld'] = $urld;
		}
		return $arr;
	}
}