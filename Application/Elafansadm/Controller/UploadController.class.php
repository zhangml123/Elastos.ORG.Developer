<?php
namespace Elafansadm\Controller;
use Think\Controller;  
class UploadController extends Controller{
	//上传图片
	public function uploadimg(){
		$action = $_POST['act'];
		$fname = $_POST['fname'];
		$fcate = $_POST['fcate'];
		$sid = $_POST['sid'];
		if($action=='delimg'){
			$filename = $_POST['fimagename'];
			if(!empty($filename)){
				if(!unlink($_SERVER['DOCUMENT_ROOT'].$filename)){
				}else{
					echo 1;
				}
			}else{
				echo '删除失败.';
			}
		}else{
		//有上传文件时
		$save_path = $_SERVER['DOCUMENT_ROOT'].'/Public/upload/img/'.$fcate.'/';
		$http_path = 'http://'.$_SERVER['HTTP_HOST'].'/Public/upload/img/'.$fcate.'/';
		//创建文件夹
		if ($dir_name !== '') {
			$save_path .= $dir_name . "/";
			$http_path .= $dir_name . "/";
			if (!file_exists($save_path)) {
				mkdir($save_path,0777);
			}
		}
		$ymd = date("Ymd");
		$save_path .= $ymd . "/";
		$http_path .= $ymd . "/";
		if (!file_exists($save_path)) {
			mkdir($save_path,0777);
		}
		//var_dump($_FILES);
		if (empty($_FILES) === false) {
				$picname = $_FILES[$fname]['name'];
				$picsize = $_FILES[$fname]['size'];
				$tmp_name = $_FILES[$fname]['tmp_name'];
				if(isset($_POST['usize']) && $_POST['usize']!="" && isset($_POST['uwidth']) && $_POST['uwidth']!="" && isset($_POST['uheight']) && $_POST['uheight']!=""){
					$max_width = $_POST['uwidth'];
					$max_height = $_POST['uheight'];
					$max_size = $_POST['usize'];
				}else{
					$max_width  = 50;
					$max_height = 30;
					$max_size = 40240000;
				}
				$maxmb = $max_size/(1024*1024);
				if($picname != ""){
					if ($picsize >$max_size ) {
						echo '文件大小不能超过'.$maxmb."Mb";
						exit;
					}
					$type = strstr($picname, '.');
					if ($type != ".png" && $type != ".jpg" && $type != ".gif" && $type != ".JPG") {
						echo '选择的图片格式错误！';
						exit;
					}
					$str=getimagesize($tmp_name);
					//检查图片高度与宽度
					$mode="/width=\"(.*)\" height=\"(.*)\"/";
					preg_match($mode,$str[3],$arr);
					if($arr[1]<$max_width || $arr[2] <$max_height){
						echo '图片允许最小尺寸<span style="color:red;">'.$max_width.'*'.$max_height."</span>.";
						exit;
					}
					$rand = rand(100, 999);
					$pics = date("YmdHis") . $rand . $type;
					//$pics = $userid.'-'.$sid. $type;
					//上传路径
					$pic_path = $save_path.$pics;
					move_uploaded_file($_FILES[$fname]['tmp_name'], $pic_path);
					//$waterImg = $_SERVER['DOCUMENT_ROOT'].'/Public/upload/img/logo.png';
					$size = round($picsize/1024,2);
					$arr = array(
						'name'=>$picname,
						'pic' =>$pics,
						'fpic'=>'/Public/upload/img/'.$fcate.'/'.$ymd."/".$pics,
						'dpic'=>$pic_path,
						'hpic'=>$fcate."/".$ymd."/".$pics,
						'cpic'=>$http_path.$pics,
						'size'=>$size
					);
					echo json_encode($arr);
				}
				
			}
		}
	}
	public function img_water_mark($srcImg, $waterImg, $savepath=null, $savename=null, $positon=5, $alpha=30)
	{
		$temp = pathinfo($srcImg);
		$name = $temp['basename'];
		$path = $temp['dirname'];
		$exte = $temp['extension'];
		$savename = $savename ? $savename : $name;
		$savepath = $savepath ? $savepath : $path;
		$savefile = $savepath .'/'. $savename;
		$srcinfo = @getimagesize($srcImg);
		if (!$srcinfo) {
			return -1; //原文件不存在
		}
		$waterinfo = @getimagesize($waterImg);
		if (!$waterinfo) {
			return -2; //水印图片不存在
		}
		$srcImgObj =  $this->image_create_from_ext($srcImg);
		if (!$srcImgObj) {
			return -3; //原文件图像对象建立失败
		}
		$waterImgObj = $this->image_create_from_ext($waterImg);
		if (!$waterImgObj) {
			return -4; //水印文件图像对象建立失败
		}
		switch ($positon) {
		//1顶部居左
		case 1: $x=$y=0; break;
		//2顶部居右
		case 2: $x = $srcinfo[0]-$waterinfo[0]; $y = 0; break;
		//3居中
		case 3: $x = ($srcinfo[0]-$waterinfo[0])/2; $y = ($srcinfo[1]-$waterinfo[1])/2; break;
		//4底部居左
		case 4: $x = 0; $y = $srcinfo[1]-$waterinfo[1]; break;
		//5底部居右
		case 5: $x = $srcinfo[0]-$waterinfo[0]; $y = $srcinfo[1]-$waterinfo[1]; break;
		default: $x=$y=0;
		}
		imagecopymerge($srcImgObj, $waterImgObj, $x, $y, 0, 0, $waterinfo[0], $waterinfo[1], $alpha);
		switch ($srcinfo[2]) {
		case 1: imagegif($srcImgObj, $savefile); break;
		case 2: imagejpeg($srcImgObj, $savefile); break;
		case 3: imagepng($srcImgObj, $savefile); break;
		default: return -5; //保存失败
		}
		imagedestroy($srcImgObj);
		imagedestroy($waterImgObj);
		return $savefile;
	}

	public function image_create_from_ext($imgfile)
	{
		$info = getimagesize($imgfile);
		$im = null;
		switch ($info[2]) {
		case 1: $im=imagecreatefromgif($imgfile); break;
		case 2: $im=imagecreatefromjpeg($imgfile); break;
		case 3: $im=imagecreatefrompng($imgfile); break;
		}
		return $im;
	}
}
?>