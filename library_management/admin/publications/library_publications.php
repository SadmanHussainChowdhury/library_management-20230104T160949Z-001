<?php

require('library_config.php');

$query = "SELECT * FROM publications";

if ($result = $conn->query($query)) 
{
	printf("<br>%d record(s) found!<br>", $result->num_rows);
	/* fetch associative array */
	while ($row = $result->fetch_assoc()) 
	{
		printf("<p>%s (%s)</p>", $row["name"], $row["publication_id"]);
	}
	$result->free(); //free result set
}
else
{
	printf("No record found!");
}

$query2 = "SELECT COUNT(name) c FROM publications";
$result = $conn->query($query2);
$row = $result->fetch_assoc();
printf("<h3>There are total %d publications </h3>", $row['c']);
$result->free(); 

$conn->close();
?>