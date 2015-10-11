<?php
	include "connection.php";

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$dob = $_POST['dob'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	if(!$_POST){
		echo "Please fill all fields";
		header('Location: ../signup.php');
	} else {
		mysql_query("INSERT INTO users (id,first_name,last_name,email,gender,dob,username,password,remember,created)
			VALUES(NULL,'$firstname','$lastname','$email','$gender','$dob','$username','$password',0,NULL)") or die(mysql_error());

		echo "User added Thank You";
		header('Location: ../signup.php');
	}

?>