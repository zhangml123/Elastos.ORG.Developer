先构建tomcat的web环境  
安装java,测试环境java版本：java version "1.8.0_201"  
配置Tocmat版本：Tomcat7  
测试环境Tomcat目录为：/usr/tomcat7  
将trucks.war拷贝到：/usr/tomcat7  
修改/usr/tomcat7/conf中的server.xml文件，注意修改端口和 toBase="trucks.war"  
启动tomcat  
修改IndexController.class.php 中的did相关配置。  
