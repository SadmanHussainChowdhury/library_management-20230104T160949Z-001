<html>
	<head>
		<title>Warehouse Details</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">	
	</head>
		<body>

			<h1>Details of the Warehouse</h1>
			
		<div>
		
		
		<p><a href="../../home.php"><button class='ui labled teal button'><i class="home icon"></i></button></a></p>

		<p><a href=create_input.php><button class='ui labled olive button'>ADD NEW WAREHOUSE</button></a></p>
		
		</div>


<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT
	w.warehouse_id, w.address,w.library_id,l.city
	
	FROM warehouse w 
	join library l 
	on w.library_id = l.library_id
	
	order by warehouse_id ASC;" )
		or die("Can not execute query");


	

	echo "<table class='ui celled striped unstackable collapsing table'>\n";
	echo "<thead><tr><th>WAREHOUSE ID</th> <th>ADDRESS</th> 
	<th>LIBRARY ID</th> <th>LIBRARY LOCATION</th>
	<th>DELETE</th> <th>UPDATE</th></tr></thead><tbody> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $warehouse_id </td>";
		echo "<td> $address </td>";
		echo "<td> $library_id </td>";
		echo "<td> $city </td>";
		echo "<td> <a href = 'delete.php?id=$warehouse_id'> Delete </a> </td>";
		echo "<td> <a href = 'update_input.php?
		warehouse_id=$warehouse_id
		&address=$address
		&library_id=$library_id'> Edit </a> </td>";
		echo "</tr> \n";
	}

	echo "</tbody></table> \n";
?>

		</body>
</html>