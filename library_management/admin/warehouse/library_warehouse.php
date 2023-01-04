<?php

require('library_config.php');

$query = "SELECT * FROM warehouse";

if ($result = $conn->query($query)) 
{
	printf("<br>%d record(s) found!<br>", $result->num_rows);
	/* fetch associative array */
	while ($row = $result->fetch_assoc()) 
	{
		printf("<p>%s (%s)</p>", $row["address"], $row["warehouse_id"]);
	}
	$result->free(); //free result set
}
else
{
	printf("No record found!");
}

$query2 = "SELECT COUNT(warehouse_id) c FROM warehouse";
$result = $conn->query($query2);
$row = $result->fetch_assoc();
printf("<h3>There are total %d warehouses </h3>", $row['c']);
$result->free(); 

$conn->close();
?>