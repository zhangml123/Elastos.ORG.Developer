<?php 

/*
* 发送邮件
* @param $to string
* @param $title string
* @param $content string
* @return bool
* */
function sendMail($to, $title, $content) {
    Vendor('PHPMailer.PHPMailerAutoload');
    $mail = new PHPMailer(); //实例化
    $mail->IsSMTP(); // 启用SMTP
    $mail->Host=C('MAIL_HOST'); //smtp服务器的名称
    //$mail->SMTPSecure = C('MAIL_SSL'); //加密方式
    //$mail->Port = C('MAIL_PORT'); //SMTP服务器端口
    $mail->SMTPAuth = C('MAIL_SMTPAUTH'); //启用smtp认证
    $mail->Username = C('MAIL_USERNAME'); //发件人邮箱名
    $mail->Password = C('MAIL_PASSWORD') ; //邮箱发件人授权密码
    $mail->From = C('MAIL_FROM'); //发件人地址（也就是你的邮箱地址）
    $mail->FromName = C('MAIL_FROMNAME'); //发件人姓名
    $mail->AddAddress($to,"尊敬的客户");
    $mail->WordWrap = 50; //设置每行字符长度
    $mail->IsHTML(C('MAIL_ISHTML')); // 是否HTML格式邮件
    $mail->CharSet=C('MAIL_CHARSET'); //设置邮件编码
    $mail->Subject =$title; //邮件主题
    $mail->Body = $content; //邮件内容
    $mail->AltBody = "这是一个纯文本的身体在非营利的HTML电子邮件客户端"; 
	$mailrs = $mail->Send();
	//var_dump($mail);
	//var_dump($mailrs);
	return($mailrs);
}
function is_weixin() { 
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false) {
        return true; 
    }else{
		return false;
	}
}
?>