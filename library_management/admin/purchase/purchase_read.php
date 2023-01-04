<html>
	<head>
		<title>Purchase Details</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">	
	</head>
		<body>

			<h1>Purchase History</h1>
			
			
		<div>
		
		
		<p><a href="../../home.php"><button class='ui labled teal button'><i class="home icon"></i></button></a></p>

		<p><a href=create_input.php><button class='ui labled olive button'>PURCHASE MORE</button></a></p>
		
		</div>


<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT p.member_id,m.first_name,
	p.isbn, b.title, p.num_of_books
	
	FROM purchase p 
	join book b 
	on p.isbn = b.isbn 
	join member m 
	on m.member_id = p.member_id
	order by p.member_id ASC;" )
		or die("Can not execute query");



	echo "<table class='ui celled striped unstackable collapsing table'>\n";
	echo "<thead><tr><th>MEMBER ID</th> <th>NAME</th> <th>ISBN</th> 
	<th>TITLE</th><th>NUMBER OF BOOKS</th>
	<th>DELETE</th> <th>UPDATE</th></tr></thead><tbody> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $member_id </td>";
		echo "<td> $first_name </td>";
		echo "<td> $isbn </td>";
		echo "<td> $title </td>";
		echo "<td> $num_of_books </td>";
		echo "<td> <a href = 'delete.php?id=$member_id'> Delete </a> </td>";
		echo "<td> <a href = 'update_input.php?
		member_id=$member_id
		&isbn=$isbn
		&num_of_books=$num_of_books'> Edit </a> </td>";
		echo "</tr> \n";
	}

	echo "</tbody></table> \n";
?>

		</body>
</html>