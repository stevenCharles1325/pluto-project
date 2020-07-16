<?php

if(isset($_POST['submit']))
{
	require 'database_handler.inc.php';

	$user_name = $_POST['name'];
	$password = $_POST['password'];

	if(empty($user_name) || empty($password) ) {
		header("Location: /pluto_project/index.php?error=emptyFields&username=".$user_name);
		exit();
	}
	else{
		$sql = "SELECT * FROM users WHERE username=?";
		$statement = mysqli_stmt_init($connection);

		if(!mysqli_stmt_prepare($statement, $sql)){
			header("Location: /pluto_project/index.php?error=sqlError");
			exit();
		}
		else{
			mysqli_stmt_bind_param($statement, "s", $user_name);
			mysqli_stmt_execute($statement);

			$result = mysqli_stmt_get_result($statement);

			if($row = mysqli_fetch_assoc($result) ){
				$password_check = password_verify($password, $row['upassword']);
				
				if($password_check == false){
					header("Location: /pluto_project/index.php?error=wrongpassword");
					exit();
				}
				else if($password_check == true){
					session_start();
					$_SESSION['userID'] = $row['id_user'];
					$_SESSION['userName'] = $row['username'];
					
					header("Location: /pluto_project/index.php?login=success");
					exit();
						
				}
				else{
					header("Location: /pluto_project/index.php?error=sqlError");
					exit();
				}
			}
		}
	}
}
else{
	header("Location: /pluto_project/index.php");
	exit();
}
