<?php
	function sendMail($to, $subject,$message){
		$headers = 'From: webmaster@example.com' . "\r\n" .
		'Reply-To: webmaster@example.com' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

		return mail($to, $subject, $message, $headers);
	}
?>