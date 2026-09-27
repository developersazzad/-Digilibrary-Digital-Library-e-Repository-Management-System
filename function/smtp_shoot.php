<?php
include("tamplate/tamplate.php");
include('smtp/PHPMailerAutoload.php');
function smtp_mail($to, $subject, $html, $title) {
	$smtp = SMTP_DETAILS();
	$host = $smtp['host'];
	$port = $smtp['port'];
	$user_name = $smtp['email'];
	$password = $smtp['password'];
	$server_email = $smtp['email'];
	$email_title = $title;
	$emailBody = $html;
	$reciverEmail = $to;
	//=========================
	$mail = new PHPMailer();
	// 	$mail->SMTPDebug=3;
		$mail->IsSMTP();
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'type';
		$mail->Host = "$host";
		$mail->Port = "$port";
		$mail->IsHTML(true);
		$mail->CharSet = 'UTF-8';
		$mail->Username = "$user_name";
		$mail->Password = "$password";
		$mail->SetFrom("$server_email","$email_title");
		$mail->Subject = $subject;
		$mail->Body = $emailBody;
		$mail->AddAddress($reciverEmail);
		$mail->SMTPOptions=array('ssl'=>array(
			'verify_peer'=>true,
			'verify_peer_name'=>true,
			'allow_self_signed'=>true
		));
 
		if(!$mail->Send()){
			// bounch===========
			$status = "bounch";
			$mail->ErrorInfo;
			// bounch===========
		}else{
		 $status = "done";
	 }
	 return $status;
  }
	?>
