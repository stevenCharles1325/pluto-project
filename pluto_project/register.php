<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="steven">
	<title>Login to Pluto</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./src/styles/login.css?nocache={timestamp}">
	
</head>
<body>
	<content class="organizer">
		<div class="intro-box">
			<h1>Welcome to PLUTO</h1>
			<p>
				In Pluto, you can create your very own customized playlist and your friends can see it. You can share your playlists, favorite artists, albums, and covers on your timeline. Pluto is also a great opportunity for aspiring artists to share their talent with the whole world because you can upload your own covers.The best thing about Pluto is it's more than just music, it's about opportunity and interaction. 
			</p>
		</div>
		<div id="main-box">
			<img id="user-logo" src="./img/user_logo.png">
			<h1>SIGNUP</h1>
			<p id="message"></p>
			<!--form-->
			<form action="./src/php/signup.inc.php" class="form-box" method="post" >
				<div class="input-box">
					<i class="fa fa-user icon"></i>
					<input class="input" type="username" name="name" placeholder="Username" required>
				</div>

				<div class="input-box">
					<i class="fa fa-key icon"></i>
					<input class="input" type="password" name="password" placeholder="Password" required>	
				</div>

				<div class="input-box">
					<i class="fa fa-key icon"></i>
					<input class="input" type="password" name="password-repeat" placeholder="Repeat password" required>	
				</div>
				
				<div class="input-box">
					<button class="input" type="submit" name="register-submit">REGISTER</button>
				</div>
			</form>
			<div id="bottom-box" style="text-align: center; margin: 0px;">
				<a href="index.php">LOGIN</a>
			</div>
		</div>
	</content>
</body>
</html>