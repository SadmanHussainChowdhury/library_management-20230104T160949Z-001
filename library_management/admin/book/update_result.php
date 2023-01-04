<?php

	$shelf_number = $_GET["shelf_number"];
	
	$isbn = $_GET["isbn"];

	$title = $_GET["title"];

	$category = $_GET["category"];
	
	$author_id = $_GET["author_id"];
	
	$publications_id = $_GET["publications_id"];
	
	$library_id = $_GET["library_id"];
	



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE book SET shelf_number='$shelf_number', isbn=$isbn, title='$title', category='$category', author_id=$author_id, publications_id=$publications_id, library_id=$library_id WHERE isbn=$isbn";



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated:<br>
	<b style=color:#1194f5> Shelf Number </b>= $shelf_number <br>
	<b style=color:#1194f5> ISBN </b>= $isbn <br>
	<b style=color:#1194f5> Title </b>= $title <br>
	<b style=color:#1194f5> Category </b>= $category <br>
	<b style=color:#1194f5> Author ID </b>= $author_id <br>
	<b style=color:#1194f5> Publications ID </b>= $publications_id <br>
	<b style=color:#1194f5> Library ID </b>= $library_id";



	echo "<p><a href=book_read.php>READ all records</a>";

?>