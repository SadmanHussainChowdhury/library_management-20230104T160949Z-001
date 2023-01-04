<html>
	<head>
		<title>Publications Details</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">	
	</head>
		<body>

			<h1>Details of the Publications</h1>
			
			
		<div>
		
		
		<p><a href="../../home.php"><button class='ui labled teal button'><i class="home icon"></i></button></a></p>

		<p><a href=create_input.php><button class='ui labled olive button'>ADD NEW PUBLICATIONS</button></a></p>
		
		</div>


<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM publications order by publications_id ASC;" )
		or die("Can not execute query");

	

	echo "<table class='ui celled striped unstackable collapsing table'> \n";
	echo "<thead><tr><th>PUBLICATIONS ID</th> <th>PUBLICATIONS NAME</th> 
	<th>CITY</th> <th>ZIP CODE</th> 
	<th>DELETE</th> <th>UPDATE</th> </tr></thead><tbody>\n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $publications_id </td>";
		echo "<td> $publication_name </td>";
		echo "<td> $city </td>";
		echo "<td> $zip_code </td>";
		echo "<td> <a href = 'delete.php?id=$publications_id'> Delete </a> </td>";
		echo "<td> <a href = 'update_input.php?
		publications_id=$publications_id
		&publication_name=$publication_name
		&city=$city
		&zip_code=$zip_code'> Edit </a> </td>";
		echo "</tr> \n";
	}

	echo "</tbody></table> \n";
?>

		</body>
</html>