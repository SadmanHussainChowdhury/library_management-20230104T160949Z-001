<html>
	<head>
		<title>Member Details</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">	
	</head>
		<body>

			<h1>Details of the Members</h1>
			
			
		<div>
		
		
		<p><a href="../../home.php"><button class='ui labled teal button'><i class="home icon"></i></button></a></p>

		<p><a href=create_input.php><button class='ui labled olive button'>ADD NEW MEMBER</button></a></p>
		
		</div>

<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM member order by member_id ASC;" )
		or die("Can not execute query");


	echo "<table class='ui celled striped unstackable collapsing table'> \n";
	echo "<thead><tr><th>MEMBER ID</th> <th>FIRST NAME</th> 
	<th>LAST NAME</th> <th>PHONE</th> <th>MAIL</th> 
	<th>DELETE</th> <th>UPDATE</th></tr></thead><tbody> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $member_id </td>";
		echo "<td> $first_name </td>";
		echo "<td> $last_name </td>";
		echo "<td> $phone </td>";
		echo "<td> $email </td>";
		echo "<td> <a href = 'delete.php?id=$member_id'> Delete </a> </td>";
		echo "<td> <a href = 'update_input.php?
		member_id=$member_id
		&first_name=$first_name
		&last_name=$last_name
		&phone=$phone
		&email=$email'> Edit </a> </td>";
		echo "</tr> \n";
	}

	echo "</tbody></table> \n";

?>

		</body>
</html>