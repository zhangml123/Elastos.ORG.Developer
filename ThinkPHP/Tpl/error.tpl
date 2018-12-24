<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>404</title>
<link rel="stylesheet" href="<?php echo "https://".$_SERVER['HTTP_HOST']."/";?>/Public/Home/css/404.css">
<script src="<?php echo "https://".$_SERVER['HTTP_HOST']."/";?>/Public/Home/js/international.js"></script>
<script src="<?php echo "https://".$_SERVER['HTTP_HOST']."/";?>/Public/Home/js/main.js"></script>
</head>
<body style="background-color:#f1f4f8;">
<div class="st"><img src="<?php echo "https://".$_SERVER['HTTP_HOST']."/";?>/Public/Home/images/404_03.png"></div> 
<div class="fh"><a href="{$curhost}"><img src="<?php echo "https://".$_SERVER['HTTP_HOST']."/";?>/Public/Home/images/404_06.png"></a></div>
<div class="fh"><b id="num">5</b>秒后跳转到首页</div>

<!--脚本开始--> 
<script> 
function countDown(secs){ 
	if(--secs>0) {
		document.getElementById("num").innerText=secs;
		setTimeout(function(){countDown(secs)},1000);  
	}
	else{
		window.location.href=internationalWords.hosturl;
	} 
}
countDown(5); 
</script> 
</body>
</html>
