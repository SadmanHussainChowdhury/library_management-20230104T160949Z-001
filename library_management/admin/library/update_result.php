<?php
	$library_id = $_GET["library_id"];

	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$query 	= "UPDATE library SET 

	mysqli_query( $connect, $query )
		or die("Can not execute query");

	echo "<p>Record updated:<br>

	echo "<p><a href=library_read.php>READ all records</a>";
?>