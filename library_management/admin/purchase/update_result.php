<?php
	$num_of_books = $_GET["num_of_books"];

	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$query 	= "UPDATE purchase SET num_of_books=$num_of_books, isbn=$isbn, member_id=$member_id WHERE isbn = $isbn";
	mysqli_query( $connect, $query )
		or die("Can not execute query");

	echo "<p>Record updated:<br>

	echo "<p><a href=purchase_read.php>READ all records</a>";
?>