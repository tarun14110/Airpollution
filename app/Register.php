<?php
	$con=mysqli_connect("http://mysql9.000webhost.com/","a7502343_mukesh","mg7532684","a7502343_mukesh");
	
	$name=$_POST["name"];
	$age=$_POST["age"];
	$password=$_POST["password"];
	$username=$_POST["username"];
	$statement=mysqli_prepare($con, "INSERT INTO User (name, age, username, password) VALUES (?, ?, ?, ?)");
	mysqli_stmt_bind_param($statement, "siss", $name, $age, $username, $password);
	mysqli_stmt_execute($statement);
	mysqli_close($con);

	
?>
