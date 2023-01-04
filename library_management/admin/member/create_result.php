<html>
<head> </head>
<body>

	<p><a href="../../home.php"><button class='ui labled teal button'><i class="home icon">Back</i></button></a></p>

<?php

	$first_name = $_GET["first_name"];

	$last_name = $_GET["last_name"];
	
	$phone = $_GET["phone"];
	
	$email = $_GET["email"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO member VALUES ( NULL, 
		'$first_name', '$last_name', '$phone', '$email' )" )

		or die("Can not execute query");



	echo "Record inserted:<br>
	<b style=color:#1194f5> First Name</b>= $first_name <br> 
	<b style=color:#1194f5> Last Name</b>= $last_name <br> 
	<b style=color:#1194f5> Phone</b>= $phone <br> 
	<b style=color:#1194f5> Email</b>= $email";


?>
</body>
</html>