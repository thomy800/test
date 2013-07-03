<?php
	$to      = isset($_REQUEST['to'])?$_REQUEST['to']:'webmaster@example.com';
	$subject = isset($_REQUEST['subject'])?$_REQUEST['subject']:'the subject';
	$message = isset($_REQUEST['message'])?$_REQUEST['message']:'hello';
	$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>

<form name="input" action="email.php" method="post">
	<p>To: <input type="text" name="to" value="<?=$to?>"></p>
	<p>Subject: <input type="text" name="subject" value="<?=$subject?>"></p>
	<p>Message: <textarea name="message" rows="4" cols="50"><?=$message?></textarea> 
	<input type="submit" value="Submit">
</form> 