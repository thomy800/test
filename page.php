<?php
	include_once 'include/email.php';
	$to      = isset($_REQUEST['to'])?$_REQUEST['to']:'';
	$subject = 'Sign up';
	$message = 'Hey, you signed up!';

	$error = '';
	if(!empty($to) && !sendMail($to, $subject, $message)){
		$error = "Please check your email address!";
	}else{
		//redirect
	}
	
?>


<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Build a responsive, one-page, landing page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="logo">
	</div>
	<div content>
		<iframe width="420" height="315" src="//www.youtube.com/embed/qDO6HV6xTmI" frameborder="0" allowfullscreen></iframe>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in feugiat sapien. Pellentesque eget tincidunt lacus, sit amet laoreet nulla. Proin et urna vulputate, varius augue ac, venenatis quam. Sed laoreet posuere metus ut sodales. Sed vestibulum enim eget purus luctus, eu dignissim tortor consequat. Aliquam dignissim, nibh in molestie imperdiet, erat odio pharetra arcu, vel luctus neque orci vel urna. Praesent eleifend eros ut rutrum viverra. Nunc sed pulvinar nibh.

			Etiam viverra metus ante, non cursus libero consequat non. Integer non fermentum lacus, vitae gravida libero. Nulla tincidunt magna id viverra commodo. Suspendisse tincidunt, urna sit amet mattis aliquet, elit mi lobortis turpis, quis congue lacus odio a diam. Aliquam erat volutpat. Morbi elementum eros a dui accumsan volutpat. Duis accumsan libero eget dolor commodo fringilla. Maecenas quis eros ligula.

			Nam sodales lorem ac lobortis tincidunt. Integer pretium dolor quis lectus vehicula rhoncus. Fusce ac rutrum nisl. Fusce dictum arcu dignissim augue feugiat auctor. Praesent blandit massa risus, in sodales felis feugiat sed. Integer sed elit in enim gravida rhoncus in in dui. Duis aliquam elit mi, ac eleifend tortor interdum at.

			Nunc molestie auctor magna sed ultrices. Phasellus non magna venenatis, laoreet leo eget, condimentum neque. Fusce feugiat laoreet mauris, scelerisque tempus nulla lacinia ut. Nulla mollis rhoncus luctus. Morbi a vulputate tortor, vel porttitor odio. Curabitur vitae mollis lectus, vel vestibulum risus. Etiam sit amet laoreet nisi, in ultrices sem. Etiam libero nulla, mattis quis imperdiet ut, faucibus tincidunt libero. Cras arcu neque, vestibulum nec ante sit amet, aliquam volutpat leo. Praesent lobortis, lorem sit amet varius dictum, nibh orci lacinia orci, egestas varius mi lectus bibendum est. Donec adipiscing eros sit amet accumsan consequat.

			Pellentesque pellentesque varius ipsum non tempor. Donec sed cursus ante. Mauris a nisi sem. Pellentesque accumsan turpis nisl, sit amet interdum arcu tincidunt sed. Integer in lorem non erat feugiat dictum. Phasellus ut rhoncus arcu, eu vestibulum massa. Ut velit lorem, lacinia ut malesuada convallis, tristique a neque. Nam dignissim tellus id justo egestas, eget volutpat neque dapibus. In urna libero, tempus et tincidunt et, facilisis at tellus. 
		</p>
		<ul>
			<li>Coffee</li>
			<li>Milk</li>
			<li>Sugar</li>
			<li>Vodka</li>
			<li>Fat</li>
		</ul> 
		<div id="signup">
			<div id="error">	
				<?=$error?>
			</div>
			<form name="input" action="" method="post">
				<p>Email: <input type="text" name="to" value="<?=$to?>"></p>
				<input type="submit" value="Sign up">
			</form> 
		</div>
	</div>
</body>