<html>
	<head>
		<title>Author Details</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">	
	</head>
		<body>

			<h1 >Details of the Authors</h1>
			
			
			
		<div>
		
		
		<p><a href="../../home.php"><button class='ui labled teal button'><i class="home icon"></i></button></a></p>

		<p><a href=create_input.php><button class='ui labled olive button'>ADD NEW AUTHOR</button></a></p>
		
		</div>



<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT author_id, first_name, 
	last_name, mail
	
	FROM author
	
	order by author_id ASC;" )
		or die("Can not execute query");
		

	echo "<table class='ui celled striped unstackable collapsing table'> \n";
	echo "<thead><tr><th>AUTHOR ID</th> <th>FIRST NAME</th> 
	<th>LAST NAME</th> <th>MAIL</th> 
	<th>DELETE</th> <th>UPDATE</th></tr></thead><tbody> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $author_id </td>";
		echo "<td> $first_name </td>";
		echo "<td> $last_name </td>";
		echo "<td> $mail </td>";
		echo "<td> <a href = 'delete.php?id=$author_id'> Delete </a> </td>";
		echo "<td> <a href = 'update_input.php?
		author_id=$author_id
		&first_name=$first_name
		&last_name=$last_name
		&mail=$mail'> Edit </a> </td>";
		echo "</tr> \n";
	}

	echo "</tbody></table> \n";
?>

		</body>
</html>