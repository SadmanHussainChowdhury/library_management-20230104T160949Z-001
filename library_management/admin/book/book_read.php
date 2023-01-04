<html>
	<head>
		<title>Book Details</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">	
	</head>
		<body>

			<h1>Details of the Books</h1>
			
			
		<div>
		
		
		<p><a href="../../home.php"><button class='ui labled teal button'><i class="home icon"></i></button></a></p>

		<p><a href=create_input.php><button class='ui labled olive button'>ADD NEW BOOK</button></a></p>
		
		</div>

<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT b.isbn,b.title, b.category, b.shelf_number, b.publications_id,
	b.author_id, l.library_id
	
	FROM book b
	join publications p
	on b.publications_id= p.publications_id
	join author a
	on a.author_id=b.author_id
	join library l 
	on b.library_id = l.library_id
	
	order by ISBN ASC;" )
		or die("Can not execute query");



	echo "<table class='ui celled striped unstackable collapsing table'> \n";
	echo "<thead><tr> <th>ISBN</th> <th>TITLE</th> <th>CATEGORY</th> 
	<th>SHELF NUMBER</th>
    <th>PUBLICATIONS ID</th>
	<th>AUTHOR ID</th>
	<th>LIBRARY ID</th>
	<th>DELETE</th> <th>UPDATE</th> </tr></thead><tbody>\n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $isbn </td>";
		echo "<td> $title </td>";
		echo "<td> $category </td>";
		echo "<td> $shelf_number </td>";
		echo "<td> $publications_id </td>";
		echo "<td> $library_id </td>";
		echo "<td> $author_id </td>";
		echo "<td> <a href = 'delete.php?id=$isbn'> Delete </a> </td>";
		echo "<td> <a href = 'update_input.php?shelf_number=$shelf_number
		&isbn=$isbn 
		&title=$title
		&category=$category
		&shelf_number=$shelf_number
		&author_id=$author_id
		&publications_id=$publications_id
		&library_id=$library_id'> Edit </a> </td>";
		echo "</tr> \n";
	}

	echo "</tbody></table> \n";


?>

		</body>
</html>