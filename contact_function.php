<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	</head>
<body>
	<?php

	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	
	$email_from="ssdgx19@gmail.com";
	$email_subject="New form Submission";
	$email_body="User Name:$name.\n"."User Email:$email.\n"."User Message:$message.\n";
	$to="dineshdas1016@gmail.com";
	
	$headers="From: $email_from \r\n";
	$headers .="Reply-To:$email \r\n";
	mail($to,$email_subject,$email_body,$headers);
	header("Location: index.html");
?>	
</body>
</html>