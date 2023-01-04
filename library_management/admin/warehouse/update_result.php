<?php

	$address = $_GET["address"];
	
	$warehouse_id = $_GET["warehouse_id"];

	$library_id = $_GET["library_id"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE warehouse SET address='$address', library_id=$library_id WHERE warehouse_id = $warehouse_id";


	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated:<br>
	<b style=color:#1194f5> Warehouse ID</b>= $warehouse_id <br>
	<b style=color:#1194f5> Address</b>= $address <br>
	<b style=color:#1194f5> Library ID</b>= $library_id";



	echo "<p><a href=warehouse_read.php>READ all records</a>";

?>