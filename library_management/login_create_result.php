<?php
	
	$username = $_GET["username"];
	
	$password = $_GET["password"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");




	echo "Login Successfull";



	echo "<p><a href=author_read.php>READ all records</a>";

?>