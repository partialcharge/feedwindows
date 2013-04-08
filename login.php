<!DOCTYPE HTML>
<html>
<head>
	<meta charset = "UTF-8">
	<title>FeedWindows - Login</title>
	<link rel = "stylesheet" type = "text/css" href = "feedwindows_style.css">
	<link rel = "stylesheet" type = "text/css" href = "bootstrap/css/bootstrap.min.css" media = "screen">
</head>

<body>
	<div class = "container">
		<div class = "row">
			<div class = "forms span4 well">
				<h3>Existing User? Log in!</h3>
				<form class = "login_form" action="process.php" method="post">
					<input class = "process_flag" type = "hidden" name = "process_flag" value = "login" />
					<label class = "login_email" for = "login_email">Email:</label>
					<input id = "login_email" class = "login_email" type = "text" name = "login_email" /><br />
					<label class = "login_password" for = "login_password">Password:</label>
					<input id = "login_password" class = "login_password" type = "password" name = "login_password" /><br /> 
					<input class = "login_button btn btn-primary" type = "submit" value = "Log In" />
				</form>
				<h3>New User? Register here!</h3>
				<form class = "registration_form" action = "process.php" method = "post" />
					<input class = "process_flag" type = "hidden" name = "process_flag" value = "register" />
					<label class = "registration_email" for = "registration_email">Email:</label>
					<input id = "registration_email" class = "registration_email" type = "text" name = "email" /><br />
					<label class = "registration_password" for = "registration_password">Password:</label>
					<input id = "registration_password" class = "registration_password" type = "password" name = "password" /><br />
					<label class = "registration_confirm_password" for = "confirm_password">Confirm Password:</label>
					<input id = "confirm_password" class = "registration_confirm_password" type = "password" name = "confirm_password" /><br />
					<input class = "registration_button btn btn-primary" type = "submit" value = "Register" />
				</form>
			</div> <!-- end of forms -->
			<div class = "description span7 well">
				<h1>Welcome to FeedWindows!</h1>
				<p>I will ramble about FeedWindows here for a bit. I hope you like a good wall of text.</p>
			</div> <!-- end of description -->
		</div> <!-- end of row -->
	</div> <!-- end of container -->

	
	<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src = "bootstrap/js/bootstrap.min.js"></script>
</body>
</html>