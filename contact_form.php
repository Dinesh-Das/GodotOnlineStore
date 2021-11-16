<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Us</title>
<link rel="stylesheet" href="css/contactstyle.css">
</head>
<body>
	<div class="contact-title">
		
		<h1> Hello</h1>
		<h2> Always there to serve you</h2>
	</div>	
	<div class="contact-form">
	<form id="contact-form" method="post" action="contact_function.php">
	<input type="text" name="name" class="form-control" placeholder="Your Name" required /><br>
	<input type="email" name="email" class="form-control" placeholder="Your Email" required /><br>
	<textarea name="message" class="form-control" placeholder="Message" rows="4" required></textarea><br>
	<input type="submit" class="form-control submit" value="SEND MESSAGE"/>
	</form>
	</div>

</body>
</html>