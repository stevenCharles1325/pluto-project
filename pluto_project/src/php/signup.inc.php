<?php

if(isset($_POST['register-submit'])){

	require 'database_handler.inc.php';

	$user_name = $_POST['name'];
	$password = $_POST['password'];
	$repeat_password = $_POST['password-repeat'];

	if(empty($user_name) || empty($password) || empty($repeat_password)){
		header("Location: /pluto_project/register.php?error=emptyfields&name=".$user_name);
		exit();
	}
	else if(!preg_match("/^[a-zA-Z0-9]*$/", $user_name))
	{
		header("Location: /pluto_project/register.php?error=invalidUsername&name=".$user_name);
		exit();
	}
	else if($password !== $repeat_password){
		header("Location: /pluto_project/register.php?error=passwordCheck&name=".$user_name);
		exit();
	}
	else{
		$sql = "SELECT username from users WHERE username=?";
		$statement = mysqli_stmt_init($connection);
		if(!mysqli_stmt_prepare($statement, $sql))
		{
			header("Location: /pluto_project/register.php?error=sqlError");
			exit();
		}
		else{
			mysqli_stmt_bind_param($statement, "s", $user_name);
			mysqli_stmt_execute($statement);
			mysqli_stmt_store_result($statement);

			$results = mysqli_stmt_num_rows($statement);

			if($results > 0){
				header("Location: /pluto_project/register.php?error=usernameTaken&name=".$user_name);
				exit();
			}
			else{
				$sql = "INSERT INTO users (username, upassword) values(?, ?)";
				$statement = mysqli_stmt_init($connection);
				if(!mysqli_stmt_prepare($statement, $sql))
				{
					header("Location: /pluto_project/register.php?error=sqlError");
					exit();
				}
				else{
					$password_hash = password_hash($password, PASSWORD_DEFAULT);
					mysqli_stmt_bind_param($statement, "ss", $user_name, $password_hash);
					mysqli_stmt_execute($statement);
					header("Location: /pluto_project/index.php?login=success");
					exit();
				}
			}
		}
	}
	mysqli_stmt_close($statement);
	mysqli_close($connection);

}
else{
	header("Location: /pluto_project/register.php");
	exit();
}	

