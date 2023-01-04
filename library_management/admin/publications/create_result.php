<?php

	$publication_name = $_GET["publication_name"];

	$city = $_GET["city"];
	
	$zip_code = $_GET["zip_code"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO publications VALUES ( NULL, '$publication_name', '$city', '$zip_code' )" )

		or die("Can not execute query");



	echo "Record inserted:
	<br><b style=color:#1194f5> Publications Name</b>= $publication_name <br> 
	<b style=color:#1194f5> City</b>= $city <br> 
	<b style=color:#1194f5> Zip Code</b>= $zip_code";



	echo "<p><a href=publications_read.php>READ all records</a>";

?>