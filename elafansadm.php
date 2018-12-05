<?php
// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');
define('APP_DEBUG',True);
define('APP_PATH','./Application/');
define('PUBLIC_F','https://'.$_SERVER['HTTP_HOST'].'/Public/');
define('ELAFANSADM','https://'.$_SERVER['HTTP_HOST'].'/elafansadm.php/');
define('BIND_MODULE','Elafansadm');
// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';
?>