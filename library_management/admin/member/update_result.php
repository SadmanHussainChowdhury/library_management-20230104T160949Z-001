<?php

	$member_id = $_GET["member_id"];
	
	$first_name = $_GET["first_name"];

	$last_name = $_GET["last_name"];
	
	$phone = $_GET["phone"];

	$email = $_GET["email"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE member SET first_name='$first_name',
	last_name='$last_name',phone=$phone, email='$email'
	WHERE member_id = $member_id";




	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated:<br>
	<b style=color:#1194f5> Member ID</b>= $member_id <br>
	<b style=color:#1194f5> First Name</b>= $first_name <br>
	<b style=color:#1194f5> Last Name</b>= $last_name <br>
	<b style=color:#1194f5> phone</b>= $phone <br>
	<b style=color:#1194f5> Email</b>= $email";



	echo "<p><a href=member_read.php>READ all records</a>";

?>