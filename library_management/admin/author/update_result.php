<?php

	$author_id = $_GET["author_id"];
	
	$first_name = $_GET["first_name"];

	$last_name = $_GET["last_name"];

	$mail = $_GET["mail"];


	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");


	$query 	= "UPDATE author SET first_name='$first_name', last_name='$last_name', mail='$mail' WHERE author_id=$author_id";
	

	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p><b>Record updated:<br>
	<b style=color:#1194f5> Author ID</b>= $author_id <br>
	<b style=color:#1194f5> First Name</b>= $first_name <br>
	<b style=color:#1194f5> Last Name</b>= $last_name <br>
	<b style=color:#1194f5> Mail</b>= $mail";



	echo "<p><a href=author_read.php>READ all records</a>";

?>