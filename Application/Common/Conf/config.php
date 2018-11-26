<?php
return array(
    //'配置项'=>'配置值'
    'DB_TYPE'               =>  'mysqli',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'eladevelop',     // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',       // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_DEBUG'  			=>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    'DB_PREFIX' =>  'ela_',    // 数据库表前缀
	'HTML_FILE_SUPPIX'=>'.html',
	'LOAD_EXT_CONFIG'       => 'oauth', // 加载第三方登陆密钥及回调地址
	//*************************************第三方登录****************************************
	'WEIXIN_APP_ID'         =>  '',     // 微信登录APP ID
	'WEIXIN_SECRET'         =>  '',     // 微信登录SECRET
	'GITHUB_CLIENT_ID'      =>  '',     // github登录API KEY
	'GITHUB_CLIENT_SECRET'  =>  '',     // github登录SECRET
);
