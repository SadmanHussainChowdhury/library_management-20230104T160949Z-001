<?php

	$first_name = $_GET["first_name"];

	$last_name = $_GET["last_name"];
	
	$join_date = $_GET["join_date"];
	
	$job_type = $_GET["job_type"];
	
	$salary = $_GET["salary"];
	
	$library_id = $_GET["library_id"];
	



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO employee VALUES 
		('$first_name', '$last_name', NULL, '$join_date', 
			'$job_type', '$salary', '$library_id' )" )

		or die("Can not execute query");



	echo "Record inserted:
	<br><b style=color:#1194f5> First Name</b>= $first_name <br> 
	<b style=color:#1194f5> Last Name</b>= $last_name <br> 
	<b style=color:#1194f5> Join Date</b>= $join_date<br>
	<b style=color:#1194f5> Job Type</b>= $job_type <br>
	<b style=color:#1194f5> Salary</b>= $salary <br>
	<b style=color:#1194f5> Library ID</b>= $library_id";



	echo "<p><a href=employee_read.php>READ all records</a>";

?>