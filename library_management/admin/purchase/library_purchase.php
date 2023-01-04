<?php

require('library_config.php');

$query = "SELECT * FROM purchase";

if ($result = $conn->query($query)) 
{
	printf("<br>%d record(s) found!<br>", $result->num_rows);
	/* fetch associative array */
	while ($row = $result->fetch_assoc()) 
	{
		printf("<p>%s (%s)</p>", $row["member_id"], $row["num_of_books"]);
	}
	$result->free(); //free result set
}
else
{
	printf("No record found!");
}

$query2 = "SELECT COUNT(member_id) c FROM purchase";
$result = $conn->query($query2);
$row = $result->fetch_assoc();
printf("<h3>There are total %d puchases done </h3>", $row['c']);
$result->free(); 

$conn->close();
?>