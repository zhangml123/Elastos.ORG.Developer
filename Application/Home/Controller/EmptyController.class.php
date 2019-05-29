<?php
namespace Home\Controller;
use Think\Controller;
class EmptyController extends Controller
{
    public function _empty(){
        //echo "您访问的控制器不存在";
    }
	  public function index(){
        //echo "您访问的控制器不存在";
		$this->assign("curhost","https://".$_SERVER['HTTP_HOST']."/");
		$this->display();
    }
	public function show(){
		 $this->getTables();
	}
	//获取所有的表名
    public function getTables(){
		$alltable =  M()->query("show tables");
		for($i=0;$i<count($alltable);$i++){
			$tableinfo =  M()->query("SHOW COLUMNS FROM ".$alltable[$i]['Tables_in_eladevelop']);
			 $str = "<br><span style='font-weight:900;'>".$alltable[$i]['Tables_in_eladevelop']."</span><br><br>";
			foreach($tableinfo as $val){
				$stra = "&nbsp;&nbsp;(";
				foreach($val as $key=>$vala){
					if($key=="Extra"){
						if($vala==""){
							$stra = $stra."$key->".$vala."&nbsp;";
						}else{
							$stra = $stra."$key->".$vala;
						}
					}else{
						$stra = $stra."$key->".$vala."&nbsp;&nbsp;";
					}
				}
				$stra = $stra.")";
				$str = $str."".$stra."<br>";
			}
			echo $str;
		}
    }
}
?>