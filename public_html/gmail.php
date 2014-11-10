<?php  
 
function smtp_mail($sendto_email, $subject, $body) {   
 
    require_once("phpmailer\class.phpmailer.php");
	require_once("phpmailer\class.smtp.php");
	//$body = eregi_replace("[\]",'',$body);
    
	//echo 2;
	
    $mail = new PHPMailer();  // telling the class to use SMTP 
	$mail->IsSMTP();
    //$mail->IsSendmail();
	//$mail->Host = "mail.localhost.com"; // SMTP server
	$mail->SMTPDebug = 1;
	
    $mail->SMTPAuth= true;  // enable SMTP authentication 
	$mail->SMTPSecure="ssl";                 // sets the prefix to the servier
	$mail->Host = "smtp.googlemail.com";      // sets GMAIL as the SMTP server
	$mail->Port = 465;                   // set the SMTP port
	
    $mail->Username = "comparestaff@gmail.com";       
    $mail->Password = "compare12345"; 
    $mail->SetFrom("comparestaff@gmail.com", 'ComparE');	
    
    $mail->AddAddress ($sendto_email, "User"); 
    $mail->AddReplyTo("comparestaff@gmail.com","ComparE");     
    $mail->IsHTML(true); // send as HTML

    $mail->Subject = $subject; // title  
 
    $mail->Body = $body;  
	
    if(!$mail->Send()) {
	    echo 'Not sent: <pre>'.print_r(error_get_last(), true).'</pre>';
		echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
		echo "Message has been sent";
	}
  }    
?>  
