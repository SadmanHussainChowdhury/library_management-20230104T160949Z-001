<?php
	$library_id = $_GET["library_id"];		$city = $_GET["city"];	$zip_code= $_GET["zip_code"];

	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$query 	= "UPDATE library SET 	library_id=$library_id, 	city='$city', 	zip_code=$zip_code 	WHERE library_id= $library_id";

	mysqli_query( $connect, $query )
		or die("Can not execute query");

	echo "<p>Record updated:<br>	<b style=color:#1194f5> Library ID</b>= $library_id <br>	<b style=color:#1194f5> City</b>= $city <br>	<b style=color:#1194f5> Zip Code</b>= $zip_code";

	echo "<p><a href=library_read.php>READ all records</a>";
?>