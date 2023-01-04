<?php

	$first_name = $_GET["first_name"];

	$last_name = $_GET["last_name"];
	
	$employee_id = $_GET["employee_id"];
	
	$join_date = $_GET["join_date"];
	
	$job_type = $_GET["job_type"];
	
	$salary = $_GET["salary"];

	$library_id = $_GET["library_id"];




	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE employee SET 
	
	first_name='$first_name', 
	last_name='$last_name', 
	employee_id=$employee_id, 
	join_date='$join_date', 
	job_type='$job_type', 
	salary=$salary, 
	library_id=$library_id
	WHERE employee_id = $employee_id";

	//echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated:<br>
	<b style=color:#1194f5> First Name</b>= $first_name <br>
	<b style=color:#1194f5> Last Name</b>= $last_name <br>
	<b style=color:#1194f5> Employee ID</b>= $employee_id <br>
	<b style=color:#1194f5> Join Date</b>= $join_date <br>
	<b style=color:#1194f5> Job Type</b>= $job_type <br>
	<b style=color:#1194f5> Salary</b>= $salary <br>
	<b style=color:#1194f5> Library ID</b>= $library_id <br>
	<b style=color:#1194f5> Mail</b>= $employee_id";



	echo "<p><a href=employee_read.php>READ all records</a>";

?>