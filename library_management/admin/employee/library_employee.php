<?php

require('library_config.php');

$query = "SELECT * FROM employee";

if ($result = $conn->query($query)) 
{
	printf("<br>%d record(s) found!<br>", $result->num_rows);
	/* fetch associative array */
	while ($row = $result->fetch_assoc()) 
	{
		printf("<p>%s (%s)</p>", $row["first_name"], $row["employee_id"]);
	}
	$result->free(); //free result set
}
else
{
	printf("No record found!");
}

$query2 = "SELECT COUNT(first_name) c FROM employee";
$result = $conn->query($query2);
$row = $result->fetch_assoc();
printf("<h3>There are total %d employees </h3>", $row['c']);
$result->free(); 

$conn->close();
?>