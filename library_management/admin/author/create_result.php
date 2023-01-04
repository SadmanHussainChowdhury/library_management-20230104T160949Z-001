<?php

	$first_name = $_GET["first_name"];

	$last_name = $_GET["last_name"];
	
	$mail = $_GET["mail"];
	
	$author_phone = $_GET["author_phone"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO author VALUES ( NULL, '$first_name', '$last_name', '$mail' )" )

		or die("Can not execute query");



	echo "Record inserted:<br><b style=color:#1194f5> First Name</b>= $first_name 
	<br> <b style=color:#1194f5> Last Name</b>= $last_name 
	<br> <b style=color:#1194f5> Mail</b>= $mail
	<br><b style=color:#1194f5> Author Phone</b>= $author_phone";



	echo "<p><a href=author_read.php>READ all records</a>";

?>