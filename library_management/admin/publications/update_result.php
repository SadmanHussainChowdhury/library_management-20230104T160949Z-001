<?php

	$publications_id = $_GET["publications_id"];
	
	$publication_name = $_GET["publication_name"];

	$city = $_GET["city"];

	$zip_code = $_GET["zip_code"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE publications SET publication_name='$publication_name',
	city='$city', zip_code=$zip_code WHERE publications_id = $publications_id";


	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated:<br>
	<b style=color:#1194f5> Publications ID</b>= $publications_id <br>
	<b style=color:#1194f5> Publication Name</b>= $publication_name <br>
	<b style=color:#1194f5> City</b>= $city <br>
	<b style=color:#1194f5> zip_code</b>= $zip_code";



	echo "<p><a href=publications_read.php>READ all records</a>";

?>