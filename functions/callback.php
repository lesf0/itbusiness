<?
if(isset($data)){
	$mail_to = 'info@itbns.ru';
	$subject = 'Сообщение с сайта lp.milan-design.ru';
	$message = '';
	foreach ($data as $key => $value) {
		$message .= '<p><b>' . htmlspecialchars($key) . '</b> ' . htmlspecialchars($value) . '</p>';
	}

	require(ROOT.'/classes/PHPMailer-master/PHPMailerAutoload.php');

	$mail = new PHPMailer;

	/*$mail->isSMTP();
	$mail->Host = 'smtp.mail.ru';
	$mail->SMTPAuth = true;

	$mail->Username = '';
	$mail->Password = '';

	$mail->SMTPSecure = 'tls';
	$mail->port = 465;*/

	$mail->setFrom('noreply@itbns.ru');
	$mail->addAddress($mail_to);
	
	$mail->isHTML(true);
	$mail->CharSet = 'utf8';

	$mail->Subject = $subject;
	$mail->Body = $message;
	$mail->AltBody = $message;

	if($mail->send()){
		$res['success']=1;
	}else{
		$res['error']=array(101,'phpmailer error',$mail->ErrorInfo);
	}
}else{
	$res['error']=array(100,'incorrect data');
}
?>