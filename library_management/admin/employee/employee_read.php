<html>
	<head>
		<title>Employee Details</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">	
	</head>
		<body>

			<h1>Details of the Employees</h1>
			
		<div>
		
		
		<p><a href="../../home.php"><button class='ui labled teal button'><i class="home icon"></i></button></a></p>

		<p><a href=create_input.php><button class='ui labled olive button'>ADD NEW EMPLOYEE</button></a></p>
		
		</div>

<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT 
	e.employee_id,e.first_name,e.last_name,e.join_date,
	e.job_type,e.salary,e.library_id
	
	FROM employee e
	join library l
	on e.library_id = l.library_id 
	
	order by employee_id ASC;" )
		or die("Can not execute query");




	echo "<table class='ui celled striped unstackable collapsing table'> \n";
	echo "<thead><tr><th>EMPLOYEE ID</th> <th>FIRST NAME</th> 
	<th>LAST NAME</th> <th>JOIN DATE</th>
    <th>JOB TYPE</th>	<th>SALARY</th> <th>LIBRARY ID</th>
	<th>DELETE</th> <th>UPDATE</th></tr></thead><tbody> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $employee_id </td>";
		echo "<td> $first_name </td>";
		echo "<td> $last_name </td>";
		echo "<td> $join_date </td>";
		echo "<td> $job_type </td>";
		echo "<td> $salary </td>";
		echo "<td> $library_id </td>";
		echo "<td> <a href = 'delete.php?id=$employee_id'> Delete </a> </td>";
		echo "<td> <a href = 'update_input.php?first_name=$first_name
		&last_name=$last_name
		&employee_id=$employee_id
		&join_date=$join_date
		&job_type=$job_type
		&salary=$salary
		&library_id=$library_id'> Edit </a> </td>";
		echo "</tr> \n";
	}

	echo "</tbody></table> \n";

?>
		</body>
</html>