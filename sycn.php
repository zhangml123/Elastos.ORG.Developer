<?php
ignore_user_abort();//关掉浏览器，PHP脚本也可以继续执行.
set_time_limit(0);// 通过set_time_limit(0)可以让程序无限制的执行下去
ini_set('memory_limit','512M'); // 设置内存限制
$interval=60*120;// 每隔两个小时运行
do{
    getper();
    sleep($interval);// 等待5分钟
}
while(true);
	function viewsite($url){
		 $ch = curl_init();
		 curl_setopt($ch,CURLOPT_URL,$url);
		 curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		 curl_setopt($ch,CURLOPT_SSL_VERIFYPEER ,false);
		 curl_setopt($ch,CURLOPT_SSL_VERIFYHOST ,false);
		 curl_setopt($ch,CURLOPT_USERAGENT, "elastos");
		 curl_setopt($ch,CURLOPT_HEADER,0);
		 $output = curl_exec($ch);
		 if($output === FALSE ){
			echo "CURL Error:".curl_error($ch);
		 }
		 curl_close($ch);
		 return $output;
   }
	function getper(){
	   getpers("");
   }
   //从Github上同步数据
    function getpers($ndir){
	   if(strpos($ndir,'/CN') !== false){ 
			 $jsonstr =  viewsite("https://api.github.com/repos/elastos/Elastos.Developer.Doc/contents".urlencode($ndir));
		}else{
			 $jsonstr =  viewsite("https://api.github.com/repos/elastos/Elastos.Developer.Doc/contents".rawurlencode($ndir));
		}
	    $arr = json_decode($jsonstr,true);
		$j = 0;
		$k = 0;
		for($i=0;$i<count($arr);$i++){
			if($arr[$i]['type']=="dir"){
				$arrall1[$j]['name'] = $arr[$i]['name'];
				$arrall1[$j]['html_url'] = $arr[$i]['html_url'];
				$arrall1[$j]['dirpath'] = $arr[$i]['path'];
				$dir = $_SERVER['DOCUMENT_ROOT']."/Public/developerdoc/".$arrall1[$j]['dirpath'];
				if (is_dir($dir)){
					echo "[".date("Y-m-d H:i:s")."]对不起！目录 " . $dir . " 已经存在！<br>";
				}else{
					$res=mkdir($dir,0777,true); 
					if ($res){
						echo "[".date("Y-m-d H:i:s")."]创建目录: $dir !<br>";
						getpers("/".$arrall1[$j]['dirpath']);
					}else{
						echo "[".date("Y-m-d H:i:s")."]目录: $dir 创建失败!<br>";
					}
				}
				$j = $j+1;
			}elseif($arr[$i]['type']=="file"){
				$arrall2[$k]['name'] = $arr[$i]['name'];
				$arrall2[$k]['html_url'] = $arr[$i]['html_url'];
				$arrall2[$k]['dirpath'] = $arr[$i]['path'];
				$lastarr = explode(".",$arr[$i]['name']);
				if($lastarr[count($lastarr)-1]=="md"){
					$stra = file_get_contents($arrall2[$k]['html_url']);
					$preg= '/<article class="markdown-body entry-content" itemprop="text">[\s\S]*?<\/article>/i';
					preg_match_all($preg,$stra,$res);
					$myfile = fopen($_SERVER['DOCUMENT_ROOT']."/Public/developerdoc/".$arrall2[$k]['dirpath'], "w") or die("Unable to open file!");
					fwrite($myfile, $res[0][0]);
					fclose($myfile);
					echo "[".date('Y-m-d H:i:s')."]创建文件: ".$arrall2[$k]['dirpath']." !<br>";
				}else{
					set_time_limit (24 * 60 * 60);
					$file = fopen ($arr[$i]['html_url']."?raw=true", "rb");
					if ($file) {
						$newf = fopen ($_SERVER['DOCUMENT_ROOT']."/Public/developerdoc/".str_replace("/".$arr[$i]['name'],"",$arr[$i]['path'])."/".$arr[$i]['name'], "wb");
						if ($newf)
						while(!feof($file)) {
							fwrite($newf, fread($file, 1024 * 8 ), 1024 * 8 );
						}
					}
					echo "[".date('Y-m-d H:i:s')."]创建文件: ".$arr[$i]['path']."/".$arr[$i]['name']." !<br>";
					if ($file) {
						fclose($file);
					}
					if ($newf) {
						fclose($newf);
					}
				}
				$k = $k+1;
			}
		}
   }
?>