<!DOCTYPE html>
<html>
<head>
<meta charset="utf8">
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<title>授权成功</title>
</head>
<body style="margin:0px;">
	<div style="width:100%;height:400px;text-align:center;">
	<img style="width:50px;height:50px;margin-top:90px;" src="<?php echo "https://".$_SERVER['HTTP_HOST']."/Public/Home/images/author_succful.png";?>" />
	<div style="width:100%;height:40px;line-height:40px;text-align:center;font-family:'微软雅黑';">授权成功</div>
	<div style="width:100%;height:40px;line-height:40px;text-align:center;margin-top:60px;font-family:'微软雅黑';">DID：<?php if(isset($_GET['did']) && $_GET['did']!=""){echo $_GET['did'];}?></div>
	</div>
</body>
</html>