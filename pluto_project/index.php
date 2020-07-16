<?php
	session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="steven">
	<title>Login to Pluto</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./src/styles/login.css?id=1234">
	
</head>
<body>
	<content class="organizer">
		<div class="intro-box">
			<h1>Welcome to PLUTO</h1>
			<p>
				Pluto is the newest social networking service for everyone. We all know that no matter who you are or where you came from, we all share the love for music. A single genre bonds a different people together, it may seem to sound good but somehow it brings diversion to the listeners of other genres. Aside from being a personal playlist maker, Pluto gives you more by letting you interact with your friends and with different people. In Pluto you'll gonna meet new people who share the same music taste with you. 
			
			</p>
		</div>
		<div id="main-box">
			<img id="user-logo" src="./img/user_logo.png">
			<h1>LOGIN</h1>
			<p id="message"></p>
			<!--form-->
			<form action="./src/php/login.inc.php" class="form-box" method="post" >
				<div class="input-box">
					<i class="fa fa-user icon"></i>
					<input class="input" type="username" name="name" placeholder="Username" required>
				</div>

				<div class="input-box">
					<i class="fa fa-key icon"></i>
					<input class="input" type="password" name="password" placeholder="Password" required>	
				</div>
				
				<div class="input-box">
					<button class="input" type="submit" name="submit">LOGIN</button>
				</div>
			</form>
			<div id="bottom-box">
				<a id="resetpass-link" href="resetpass.php">FORGET PASSWORD</a>
				<a href="register.php">REGISTER</a>
			</div>
		</div>
	</content>
</body>
</html>