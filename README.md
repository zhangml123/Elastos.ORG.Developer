Elastos开发者网站  
该代码是亦来云开发者网站源码  
部署：  
1 系统环境  
  Linux操作系统或者window操作系统  
2	web环境  
  采用NMPA（nginx+mysql+php+apache）构架  
3	系统框架  
  Thinkphp3.2、boostrap3  
4	部署站点  
  4.1	创建站点，配置nginx、apache，解析域名。  
  4.2	导入数据库文件eladevelop.sql（仓库目录下）,shell命令或者工具（例如:phpmyadmin进行导入），数据库名为：eladevelop  
  4.3	将源码拷贝到站点目录，须修改以下几处：  
    (1)	Application\Common\Conf目录下config.php文件  
      设置DB_PWD =>’’，将数据库密码完善（搭建WEB环境时初始化的数据库密码）；  
      WEIXIN_APP_ID    =>  '',    设置微信登录APP ID  
      WEIXIN_SECRET   =>  ‘’,     设置SECRET  
      GITHUB_CLIENT_ID   =>  '',     设置github APIKEY  
      GITHUB_CLIENT_SECRET   =>  '',  设置 github登录SECRET 
      'GITHUB_API_UID'		=> '', //githu账号  
      'MAILGUN_KEY'			=> '', //mailgun对应KEY_API  
      'MAIlGUN_DOMAIN'		=> '', //mailgun对应域名  
      'FROM_MAIlGUN_DOMAIN'		=> '', //mailgun对应发送邮件地址  
       'SENDGRID_KEY'			=> '', //sendgrid对应KEY_API  
       'FROM_SENDGRID_MAIL'		=> '', //sendgrid对应发送邮件地址  
       'CR_LOGIN_URL' =>'https://ebp-api-beta.elastos.org/api/user/login', //CR登录URL  
       'APPLY_TESTELA_SECRET' =>'',//申请测试币的密码  
       'APPLY_TESTELA_URL' =>'https://faucet-backend.elastos.org/ela/testCoin/issue',    //申请测试币地址   
    (2) Public\Home\js 目录下：international.js文件  
		  ![image text](https://github.com/yunyouming/Elastos.ORG.Developer/blob/master/docs/inter.png)  
      修改上图红色方框中为当前站点对应域名。  
