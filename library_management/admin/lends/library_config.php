<?php
$servername= "localhost";
$username = "root";
$password = "";
$dbname="smart_library";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_errno) {
	printf("Connect failed: %s\n", $conn->connect_error);
	exit();
	}

?>