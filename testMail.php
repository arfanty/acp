<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>
<?php	
		  
require 'PHPMailer-master/PHPMailerAutoload.php';		  
echo "somthing";	
$mail = new PHPMailer();
//Tell PHPMailer to use SMTP
$mail->isMail();

//$mail->Host = 'box921.bluehost.com';
//$mail->SMTPAuth = true;                               // Enable SMTP authentication
//$mail->Username = 'registration@acp-conf.org';                 // SMTP username
//$mail->Password = 'regmail0826'; 
//$mail->SMTPSecure = 'tls'; 

$mail->CharSet     = 'UTF-8';
$mail->Encoding    = '8bit';
$mail->setFrom('acpconf1@box921.bluehost.com', 'acpconf1');
$mail->addAddress('arfanty2000@126.com');
//$mail->addAddress('registration@acp-conf.org');
$mail->Subject = 'ACP注册确认邮件(编号：)';

$mail->msgHTML('


<p>您好！</p>

<p>非常感谢您对ACP 2014的支持。您的注册信息已经提交到系统了，请在2014年10月1日之前将注册费元汇款或转账至下述会议账户，以完成注册手续：</p>
<p>（注：为了能够及时、准确地统计您的汇款明细，请务必在转账汇款时的 “用途”或“附言”栏，写上系统生成的附言。）</p>

<p>账户名称：上海交通大学</p>
<p>银行账号：439059226890</p>
<p>开户银行：中国银行上海市交通大学支行</p>
<p>附言注明：</p>
', dirname(__FILE__));
//$mail->addAttachment('./Invitation Letters/Invitation Letter For '.$Title.' '.$Name.'.pdf');

if(!$mail->send()) 
{
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} 
else 
{
    echo 'Message has been sent';
}

  ?>
  </body>