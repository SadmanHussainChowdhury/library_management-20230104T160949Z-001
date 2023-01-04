<?php

	$address = $_GET["address"];

	$library_id = $_GET["library_id"];
	


	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO warehouse VALUES ('$address', NULL, '$library_id')" )

		or die("Can not execute query");



	echo "Record inserted:
	<br><b style=color:#1194f5> Address</b>= $address <br> 
	<b style=color:#1194f5> Library ID</b>= $library_id";



	echo "<p><a href=warehouse_read.php>READ all records</a>";

?>