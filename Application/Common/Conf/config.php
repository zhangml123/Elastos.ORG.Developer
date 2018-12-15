<?php
return array(
    //'配置项'=>'配置值'
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'eladevelop',     // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'wy851521',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_DEBUG'  			=>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    'DB_PREFIX' =>  'ela_',    // 数据库表前缀
	'HTML_FILE_SUPPIX'=>'.html',
	'LOAD_EXT_CONFIG'       => 'oauth', // 加载第三方登陆密钥及回调地址
	//*************************************第三方登录****************************************
	'WEIXIN_APP_ID'         =>  'wx6bb613249b29f815',     // 微信登录APP ID
	'WEIXIN_SECRET'         =>  'ZLC4GJ7oiDJ2wU2vrZa83WHbfrRbnLY9zqmsb8gsF8',     // 微信登录SECRET
	'WECHAT_CALLBACK_URL'	=>  'https://test.eladevp.com/index.php/Home/Login/wechat',	  // 微信回调URL	
	'GITHUB_CLIENT_ID'      =>  '4dbe9cca8172ae612a5d',     // github登录API KEY
	'GITHUB_CLIENT_SECRET'  =>  'ab9c923391e46ac8a9a59af24521080309ae8cc5',     // github登录SECRET
	'GITHUB_API_UID'		=> 'yunyouming', //githu账号
	'CR_LOGIN_URL' =>'https://ebp-api-beta.elastos.org/api/user/login', //CR地址
	//*************************************测试币****************************************
	'APPLY_TESTELA_SECRET' =>'Rvybjuf1Uh@!g25W',	//申请测试币秘钥
	'APPLY_TESTELA_URL' =>'https://faucet-backend.elastos.org/ela/testCoin/issue',  //申请测试币地址	
	//*************************************邮箱设置****************************************
	'MAIL_HOST' =>'smtp.163.com',//smtp服务器的名称
	'MAIL_SMTPAUTH' =>TRUE, //启用smtp认证
	'MAIL_USERNAME' =>'bebtccn@163.com',//发件人的邮箱名
	'MAIL_PASSWORD' =>'asdqwe123',//163邮箱发件人授权密码
	'MAIL_FROM' =>'bebtccn@163.com',//发件人邮箱地址
	'MAIL_FROMNAME'=>'elastos developer',//发件人姓名
	'MAIL_CHARSET' =>'utf-8',//设置邮件编码
	'MAIL_ISHTML' =>TRUE, // 是否HTML格式邮件
);