<?php 
	$username = $_POST['username'];
	$password = $_POST['password'];
	$remember = $_POST['remember'];

	if(!$_POST){
		echo "Please fill all fields";
		header('Location: ajapp/index.html');
	} else {
		mysql_query("INSERT INTO users (id,first_name,last_name,email,gender,dob,username,password,remember,created)
			VALUES(NULL,'$firstname','$lastname','$email','$gender','$dob','$username','$password',0,NULL)");

		echo "User added Thank You";
		header('Location: ajapp/index.html');
	}
?>