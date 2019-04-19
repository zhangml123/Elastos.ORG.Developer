<?php
namespace Home\Controller;
use Think\Controller;
use Common\Controller\CommonbaseController;
use Home\Model\CommentModel;
class DocumentationController extends CommonbaseController {
    public function index(){

		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']!=""){
			$this->assign("logincate",$_SESSION ['eladevp']['logincate']);
			$this->assign("userheadimg",$_SESSION ['eladevp']['userheadimg']);
			$this->assign("profileinfo",$this->profileinfo());
		}else{
			$this->assign("logincate","");
			/* if(is_weixin()){
				$state = "W".time().$this->getRandomString(5);
				$_SESSION['eladevp']['wechatrand'] = $state;
				$cururl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
				$this->add($state);
				$url = 'https://open.weixin.qq.com/connect/oauth2/authorize?appid='.C('WEIXIN_APP_ID').'&redirect_uri='.urlencode(C('WECHAT_CALLBACK_URL')).'&response_type=code&scope=snsapi_userinfo&state='.$state.'||'.urlencode($cururl).'#wechat_redirect';
				//header('Location: '.$url);
				echo "<script>window.location.href='".$url."';</script>";
			} */
		}
		if(isset($_GET['doc']) && $_GET['doc']!=""){
			if($_SESSION ['eladevp']['lang']=="en"){
				$doc = "EN/".$_GET['doc'].".md";
			}else{
				$doc = "CN/".$_GET['doc'].".md";
			}
			//var_dump($doc);
			$where['githuburl'] = "https://github.com/elastos/Elastos.Developer.Doc/tree/master/".$doc;
			$where['commentid'] = array('exp','is null');
			$commentlist = $this->initcommentlist($where);
				
			$contents = file_get_contents($_SERVER['DOCUMENT_ROOT']."/Public/developerdoc/".$doc);
			$stra = '<svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg>';
			$contents = str_replace($stra,"",$contents);
			$contents = str_replace('<img src="','<img src="https://github.com',$contents);
			 //$contents = str_replace($stra,"",$contents);
			 $contents = str_replace('href="/elastos/Elastos.Developer.Doc/blob/master/Ignore/','target="__blank" href="https://github.com/elastos/Elastos.Developer.Doc/blob/master/Ignore/',$contents);
			 $this->assign("commentlist",$commentlist);
			 
			$isread = $this->getnoreadnotify();
			$this->assign("isread",$isread);
			$this->assign("commentnum",count($commentlist));
			$this->assign("firstc",$contents);
			$this->assign("firstgiturl","https://github.com/elastos/Elastos.Developer.Doc/tree/master/".$doc);
			$this->assign("curlang",$_SESSION ['eladevp']['lang']);
			$this->assign("localdirfile",$this->getlocalfile());
			$this->assign("curhost","https://".$_SERVER['HTTP_HOST']."/");
			$this->assign("curf",$_SERVER['DOCUMENT_ROOT']."/Public/developerdoc/".$doc);
			$this->assign("dirdocname",str_replace("/","|",$doc));
			$this->display();
		}else{
			//var_dump($_SESSION ['eladevp']['lang']);
			 if($_SESSION ['eladevp']['lang']=="en"){
				$doc = "EN/1.Before you start/1.Contribute and earn ELA.md";
			}else{
				$doc = "CN/1.开始之前/1.做贡献赢取ELA.md";
			}
			//var_dump($doc);
			$where['githuburl'] = "https://github.com/elastos/Elastos.Developer.Doc/tree/master/".$doc;
			$where['commentid'] = array('exp','is null');
			$commentlist = $this->initcommentlist($where);
			$stra = '<svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg>';
			$contents = file_get_contents($_SERVER['DOCUMENT_ROOT']."/Public/developerdoc/".$doc);
			$contents = str_replace($stra,"",$contents);
			$contents = str_replace('<img src="','<img src="https://github.com',$contents);
			$contents = str_replace('href="/elastos/Elastos.Developer.Doc/blob/master/Ignore/','target="__blank" href="https://github.com/elastos/Elastos.Developer.Doc/blob/master/Ignore/',$contents);
			
			$isread = $this->getnoreadnotify();
			$this->assign("isread",$isread);
			$this->assign("commentlist",$commentlist);
			$this->assign("commentnum",count($commentlist));
			//$this->assign("allcommentnum",count($allcommentlist));
			$this->assign("firstc",$contents);
			$this->assign("firstgiturl","https://github.com/elastos/Elastos.Developer.Doc/tree/master/".$doc);
			$this->assign("curlang",$_SESSION ['eladevp']['lang']);
			$this->assign("localdirfile",$this->getlocalfile());
			$this->assign("curhost","https://".$_SERVER['HTTP_HOST']."/");
			$this->assign("curf",$_SERVER['DOCUMENT_ROOT']."/Public/developerdoc/".$doc);
			$this->assign("dirdocname",str_replace("/","|",$doc));
			$this->display();
		}
	}
	//获取初始评论列表
	public function commentlistlimit(){
		$where['githuburl'] = $_POST['githuburl'];;
		$where['commentid'] = array('exp','is null');
		$start = $_POST['start'];
		$comment = new CommentModel;
		$commentlist = $comment->commentlist($where,$start,10);
		if($commentlist){
			for($i=0;$i<count($commentlist);$i++){
				$commentlist[$i]['subcommentlist'] = $this->subcommentlist($commentlist[$i]['id']);
				if($_SESSION ['eladevp']['lang']=="cn"){
					$commentlist[$i]['adddatetime'] = date("Y-m-d H:i:s",$commentlist[$i]['addtime']);
				}else{
					$commentlist[$i]['adddatetime'] = date("M d Y h:i A",$commentlist[$i]['addtime']);
				}
			}
		}
		echo json_encode($commentlist);
	}
	
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
	//搜索页面
	public function search(){
		
		if(isset($_SESSION ['eladevp']['logincate']) && $_SESSION ['eladevp']['logincate']!=""){
			$this->assign("logincate",$_SESSION ['eladevp']['logincate']);
			$this->assign("userheadimg",$_SESSION ['eladevp']['userheadimg']);
			$this->assign("profileinfo",$this->profileinfo());
		}else{
			$this->assign("logincate","");
			/* if(is_weixin()){
				$state = "W".time().$this->getRandomString(5);
				$_SESSION['eladevp']['wechatrand'] = $state;
				$cururl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
				$this->add($state);
				$url = 'https://open.weixin.qq.com/connect/oauth2/authorize?appid='.C('WEIXIN_APP_ID').'&redirect_uri='.urlencode(C('WECHAT_CALLBACK_URL')).'&response_type=code&scope=snsapi_userinfo&state='.$state.'||'.urlencode($cururl).'#wechat_redirect';
				header('Location: '.$url);
			} */
		}
		$searchword = $_GET['sw'];
		$searchrs = $this->searchfilecontents($searchword);
		if(count($searchrs)!=0){
			$pcount = ceil(count($searchrs)/6);
		}else{
			$pcount = 0;
		}
		if(count($searchrs)<=6){
			$this->assign("rslist",$searchrs);
		}else{
			for($j=0;$j<count($searchrs);$j++){
				if($j<=6){
					$nrs[$j] = $searchrs[$j];
				}else{
					break;
				}
			}
			
			$this->assign("rslist",$nrs);
		}
		$isread = $this->getnoreadnotify();
		$this->assign("isread",$isread);
		$this->assign("searchcontents",$_GET['sw']);
		$this->assign("pcount",$pcount);
		$this->assign("rsnum",count($searchrs));
		$this->assign("curhost","https://".$_SERVER['HTTP_HOST']."/");
		$this->display();
	}
	//新增到数据库
	public function add($state){
		$data['wechatrand'] = $state;
		$staywechat = M('staywechat');
		$rs = $staywechat->add($data);
	}
	//获取指定页面的列表
	public function searchlimit(){
		$searchword = $_POST['sw'];
		$curp = $_POST['curp'];
		$searchrs = $this->searchfilecontents($searchword);
		
		$startnum = ($curp - 1)*6;
		if(count($searchrs)>=($curp*6)){
			for($k=$startnum;$k<$curp*6;$k++){
				$arrn[] = $searchrs[$k];
			}
		}elseif(count($searchrs)<=($curp*6) && count($searchrs)>$startnum){
			for($k=$startnum;$k<$curp*6;$k++){
				$arrn[] = $searchrs[$k];
			}
			///var_dump($arrn);
		}else{
			$arrn = "";
		}
		echo json_encode($arrn);
	}
	//循环查询指定目录下所有文件的内容
	public function searchfilecontents($sw){
		if($_SESSION ['eladevp']['lang']=="en"){
			$rootdir =$_SERVER['DOCUMENT_ROOT']."/Public/developerdoc/EN";
		}else{
			$rootdir =$_SERVER['DOCUMENT_ROOT']."/Public/developerdoc/CN";
		}
		$arr_files = array();
		$this->trees($arr_files, $rootdir);
		$j = 0;
		$arr = array();
		//获取指定目录内容构建新的二维数组
		for($i=0;$i<count($arr_files);$i++){
			$contents = file_get_contents($rootdir.$arr_files[$i]);
			$stra = '<svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg>';
			$contents = str_replace($stra,"",$contents);
			$reststr = strstr(strip_tags($contents),$sw);
			//var_dump($reststr);
			if($reststr!=false){
				$searcword = str_replace(".md","",$arr_files[$i]);
				$docname = explode("/",$searcword);
				$arr[$j]['contents'] = str_replace($sw,"<span style='color:#000;background-color:#FFFCAB;display:inline;height:30px;font-size:16px;font-weight:600;'>&nbsp;".$sw."&nbsp;</span>",mb_substr($reststr,0,210,'utf-8'));
				$arr[$j]['searchurl'] = "http://".$_SERVER['HTTP_HOST']."/index.php/Home/Documentation/index.html?doc=".substr($searcword,1);
				$arr[$j]['docname'] = $docname[count($docname)-1];
				$j = $j+1;
			}
		}
		return $arr;
	}
	public function trees(&$arr_file, $directory,$dir_name=''){
		$mydir = dir($directory);
		while($file = $mydir->read())
		{
			if((is_dir("$directory/$file")) AND ($file != ".") AND ($file != ".."))
			{
				//$arr_file[] = "$file";
				$this->trees($arr_file, "$directory/$file", "$dir_name/$file");
			}
			else if(($file != ".") AND ($file != ".."))
			{
				$arr_file[] = "$dir_name/$file";
			}
		}
		$mydir->close();
	}
	public function listDir($dir){
		if(is_dir($dir))
		{
			if ($dh = opendir($dir))
			{
				while (($file = readdir($dh)) !== false)
				{
					if((is_dir($dir."/".$file)) && $file!="." && $file!="..")
					{
						//echo "<b>",$file,"/</b>";
						//输出文件名
						$this->listDir($dir."/".$file."/");
					}
					else
					{
						if($file!="." && $file!="..")
						{
							//输出入文件名称
							//echo '<h3>'.$file."</h3><br>";
							
							//逐行读取数据
							$file = fopen($dir.''.$file,"r");
							while(! feof($file))
							  {
							  //获取内容
							  //echo '<xmp>'.fgets($file). "</xmp>";
							  }
							fclose($file);
						}
					}
					 
				}
				closedir($dh);
			}
		}
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
					$commentlist[$i]['adddatetime'] = date("M d Y h:i A",$commentlist[$i]['addtime']);
				}
			}
		}
		return $commentlist;
	}
	public function getlocalfiles(){
		//取得当前文件所在目录
		if($_SESSION ['eladevp']['lang']=="en"){
			$path  = $_SERVER['DOCUMENT_ROOT']."/Public/developerdoc/EN/";
		}else{
			$path  = $_SERVER['DOCUMENT_ROOT']."/Public/developerdoc/CN/";
		}
		$result = glob($path.'/*');
		$arra = array();
		for($i=0;$i<count($result);$i++){
			if(is_dir($result[$i])){
				$arr = explode("/",$result[$i]);
				$arra[$i]['filename'] = $arr[count($arr)-1];
				$arra[$i]['localdir'] = $result[$i];
				$arra[$i]['hostfile'] = "https://".$_SERVER['HTTP_HOST']."/eladevp/developerdoc/Doc/".$arr[count($arr)-1];
				$arra[$i]['type'] = "dir";
				$arra[$i]['githuburl'] = "https://github.com/elastos/Elastos.Developer.Doc/tree/master/".$arr[count($arr)-1];
				$arra[$i]['shortname'] = "";
				
				$fpath = $path."/".$arr[count($arr)-1];
				$results = glob($fpath.'/*');
				//$arrb = array();
				for($j=0;$j<count($results);$j++){
					$arr = explode("/",$results[$j]);
					$arrw = explode(".",$arr[count($arr)-1]);
					$arra[$i]['filename'] = $arr[count($arr)-1];
					$arra[$i]['localdir'] = $result[$i];
					$arra[$i]['hostfile'] = "https://".$_SERVER['HTTP_HOST']."/eladevp/developerdoc/Doc/".$arr[count($arr)-1];
					$arra[$i]['type'] = "file";
					$arra[$i]['githuburl'] = "https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/".$arr[count($arr)-1];
					$arra[$i]['shortname'] = $arrw[0];
					if(substr($arra[$i]['shortname'],-3)=="_CN"){
						$arra[$i]['filelang'] = "CN";
					}else{
						$arra[$i]['filelang'] = "EN";
					}
				}
			}else{
				$arr = explode("/",$result[$i]);
				$arrw = explode(".",$arr[count($arr)-1]);
				$arra[$i]['filename'] = $arr[count($arr)-1];
				$arra[$i]['localdir'] = $result[$i];
				$arra[$i]['hostfile'] = "https://".$_SERVER['HTTP_HOST']."/eladevp/developerdoc/Doc/".$arr[count($arr)-1];
				$arra[$i]['type'] = "file";
				$arra[$i]['githuburl'] = "https://github.com/elastos/Elastos.Developer.Doc/blob/master/Doc/".$arr[count($arr)-1];
				$arra[$i]['shortname'] = $arrw[0];
				if(substr($arra[$i]['shortname'],-3)=="_CN"){
					$arra[$i]['filelang'] = "CN";
				}else{
					$arra[$i]['filelang'] = "EN";
				}
			}
		}
		//var_dump($arra);
		array_multisort($arra,SORT_DESC,SORT_NUMERIC);//按名字排序
		return $arra;
	}
	public function getlocalfile(){
		//取得当前文件所在目录
		if($_SESSION ['eladevp']['lang']=="en"){
			$path  = $_SERVER['DOCUMENT_ROOT']."/Public/developerdoc/EN";
			$lang = "EN";
		}else{
			$path  = $_SERVER['DOCUMENT_ROOT']."/Public/developerdoc/CN";
			$lang = "CN";
		}
		$arr_file = array();
		$this->tree($arr_file, $path);
		//var_dump($arr_file);
		//return $arr_file;
		$arra = array();
		for($i=0;$i<count($arr_file);$i++){
			if($_SESSION ['eladevp']['lang']=="en"){
				$patharr = explode("/EN/",$path."/".$arr_file[$i]);
			}else{
				$patharr = explode("/CN/",$path."/".$arr_file[$i]);
			}
			if(is_dir($path."/".$arr_file[$i])){
				$arr = explode("/",$arr_file[$i]);
				$arrw = explode(".",$arr[count($arr)-1]);
				//$arra[$i]['filecname'] = $path."/".$arr_file[$i];
				$arra[$i]['filecname'] =str_replace("/","|||",$patharr[1]);
				$arra[$i]['filename'] = $patharr[1];
				$arra[$i]['pai'] = $this->pjnum($arrw[0],0);
				$arra[$i]['localdir'] = $path."/".$arr_file[$i];
				//$arra[$i]['localdir'] = str_replace("/","|||",$arr_file[$i]);
				$arra[$i]['hostfile'] = "https://".$_SERVER['HTTP_HOST']."/Public/developerdoc/".$arr[count($arr)-1];
				$arra[$i]['type'] = "dir";
				$arra[$i]['githuburl'] = "https://github.com/elastos/Elastos.Developer.Doc/tree/master/".$arr[count($arr)-1];
				$arra[$i]['shortname'] = "";
				//if(substr($arra[$i]['shortname'],-3)=="_CN"){
					//$arra[$i]['filelang'] = "CN";
				//}else{
				//	$arra[$i]['filelang'] = "EN";
				//}
			}else{
				$arr = explode("/",$arr_file[$i]);
				$arrw = explode(".",$arr[count($arr)-1]);
				$arrya = explode(".",$patharr[1]);
				$arra[$i]['filecname'] = str_replace("/","|||",$patharr[1]);
				//$arra[$i]['filecname'] = $path.$arr_file[$i];
				$arra[$i]['filename'] = $patharr[1];
				//$arra[$i]['localdir'] = str_replace("/","|||",$arr_file[$i]);
				//$arra[$i]['pai'] = substr($patharr[1],1);
				$arra[$i]['pai'] = $this->pjnum(substr($arrya[0],1),$arrw[0]);
				$arra[$i]['localdir'] = $path.$arr_file[$i];
				$arra[$i]['hostfile'] = "https://".$_SERVER['HTTP_HOST']."/eladevp/developerdoc/".$arr[count($arr)-1];
				$arra[$i]['type'] = "file";
				$arra[$i]['githuburl'] = "https://github.com/elastos/Elastos.Developer.Doc/tree/master/".$lang.$arr_file[$i];
				$arra[$i]['shortname'] = $arrw[0].".".$arrw[1];
				////if(substr($arra[$i]['shortname'],-3)=="_CN"){
				//	$arra[$i]['filelang'] = "CN";
				//}else{
				//	$arra[$i]['filelang'] = "EN";
				//}
			}
		}
		//var_dump($arra);
		$arra = $this->my_sort($arra,"pai",SORT_ASC,SORT_NUMERIC);
		return $arra;
	}
	//拼接两个字符串
	public function pjnum($stra,$strb){
		if(strlen($stra)==1){
			$straa = $stra."000";
		}elseif(strlen($stra)==2){
			$straa = $stra."00";
		}elseif(strlen($stra)==3){
			$straa = $stra."0";
		}elseif(strlen($stra)==4){
			$straa = $stra;
		}
		 return (int)$straa+(int)$strb;
	}
	
    function my_sort($arrays,$sort_key,$sort_order=SORT_ASC,$sort_type=SORT_NUMERIC ){  
        if(is_array($arrays)){  
            foreach ($arrays as $array){  
                if(is_array($array)){  
                    $key_arrays[] = $array[$sort_key];  
                }else{  
                    return false;  
                }  
            }  
        }else{  
            return false;  
        } 
        array_multisort($key_arrays,$sort_order,$sort_type,$arrays);  
        return $arrays;  
    } 
	function tree(&$arr_file, $directory, $dir_name=''){
		$mydir = dir($directory);
		while($file = $mydir->read())
		{
			if((is_dir("$directory/$file")) AND ($file != ".") AND ($file != ".."))
			{
				$arr_file[] = "$file";
				$this->tree($arr_file, "$directory/$file", "$dir_name/$file");
			}
			else if(($file != ".") AND ($file != ".."))
			{
				$arr_file[] = "$dir_name/$file";
			}
		}
		$mydir->close();
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
				//取得当前文件所在目录
				if($_SESSION ['eladevp']['lang']=="en"){
					$path  = $_SERVER['DOCUMENT_ROOT']."/Public/developerdoc/EN";
					$lang = "EN";
				}else{
					$path  = $_SERVER['DOCUMENT_ROOT']."/Public/developerdoc/CN";
					$lang = "CN";
				}
			 $str = file_get_contents($path.str_replace("|||","/",$_POST['fname']));
			 $stra = '<svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg>';
			 $contents = str_replace('<img src="','<img src="https://github.com',$str);
			 $contents = str_replace($stra,"",$contents);
			 $contents = str_replace('href="/elastos/Elastos.Developer.Doc/blob/master/Ignore/','target="__blank" href="https://github.com/elastos/Elastos.Developer.Doc/blob/master/Ignore/',$contents);
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
		$comment = new CommentModel;
		$commentlist = $comment->commentlist($where,0,10);
		if($commentlist){
			for($i=0;$i<count($commentlist);$i++){
				$commentlist[$i]['subcommentlist'] = $this->subcommentlist($commentlist[$i]['id']);
				if($_SESSION ['eladevp']['lang']=="cn"){
					$commentlist[$i]['adddatetime'] = date("Y-m-d H:i:s",$commentlist[$i]['addtime']);
				}else{
					$commentlist[$i]['adddatetime'] = date("M d Y h:i A",$commentlist[$i]['addtime']);
				}
			}
		}
		return $commentlist;
	}
	//获取初始评论列表
	public function morecommentlist(){
		$where['githuburl'] = "https://github.com/elastos/Elastos.Developer.Doc/tree/master/".str_replace("|","/",$_POST['dirdocname']);
		$where['commentid'] = array('exp','is null');
		$comment = new CommentModel;
		$commentlist = $comment->commentlist($where,$_POST['startn'],10);
		if($commentlist){
			for($i=0;$i<count($commentlist);$i++){
				$commentlist[$i]['subcommentlist'] = $this->subcommentlist($commentlist[$i]['id']);
				if($_SESSION ['eladevp']['lang']=="cn"){
					$commentlist[$i]['adddatetime'] = date("Y-m-d H:i:s",$commentlist[$i]['addtime']);
				}else{
					$commentlist[$i]['adddatetime'] = date("M d Y h:i A",$commentlist[$i]['addtime']);
				}
			}
			echo json_encode($commentlist);
		}else{
			echo 0;
		}
	}
	//获取子评论列表
	public function moresubcommentlist(){
		$where['commentid'] = $_POST['curcommentid'];
		$comment = new CommentModel;
		$commentlist = $comment->commentlist($where,$_POST['startn'],10);
		if($commentlist){
			for($i=0;$i<count($commentlist);$i++){
				$commentlist[$i]['subcommentlist'] = $this->subcommentlist($commentlist[$i]['id']);
				if($_SESSION ['eladevp']['lang']=="cn"){
					$commentlist[$i]['adddatetime'] = date("Y-m-d H:i:s",$commentlist[$i]['addtime']);
				}else{
					$commentlist[$i]['adddatetime'] = date("M d Y h:i A",$commentlist[$i]['addtime']);
				}
			}
			echo json_encode($commentlist);
		}else{
			echo 0;
		}
	}
  //获取当前消息是否读取
  public function getnoreadnotify(){
	  $where['ishomepage'] = 1;
	  $where['publishtime'] = array("ELT",time());
	  $where['edittime'] = array("EGT",strtotime("-3 day"));
	  $notice = M("notice");
	  $noticeinfo = $notice->where($where)->order("id desc")->find();
	  if($noticeinfo){
		  if(isset($_COOKIE['readnoticeifyid']) && $_COOKIE['readnoticeifyid']==$noticeinfo['id']){
			  return 0;
		  }else{
			  return $noticeinfo;
		  }
	  }else{
		  return 0;
	  }
  }
	//获取当前个人信息功能
	public function profileinfo(){
		$where['userid'] = $_SESSION['eladevp']['userid'];
		$user = M("user");
		$userinfo = $user->where($where)->find();
		return $userinfo;
	}
}