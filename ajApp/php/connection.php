<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = 'gue55me';
	$db = 'totodb';

	$conn = mysql_connect($dbhost,$dbuser,$dbpass);
	mysql_select_db($db);

	if($conn) {
  		echo '<h1>Connected to MySQL</h1>';
	} else {
   		echo '<h1>MySQL Server is not connected</h1>';
	}

	$query = "select * from users";
	$result = mysql_query($query);

	while($person = mysql_fetch_array($result)){
		echo "<h3>" . $person["username"] . "</h3>";
		echo "<h3>" . $person["first_name"] ." ". $person["last_name"]. "</h3>";
		echo "<h3>" . $person["dob"] . "</h3>";
		echo "<h3>" . $person["email"] . "</h3>";
		echo "<h3>" . $person["gender"] . "</h3>";
	}

?> 