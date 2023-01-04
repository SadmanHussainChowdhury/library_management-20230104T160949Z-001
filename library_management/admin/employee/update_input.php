<html>
	<head>
		<title>Update Employee</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">	
	</head>
		<body>
			<br>

<h1 style="text-align: center;">Update Employee Record</h1>

<form class="ui form" style="max-width:250; margin: auto;" method=get action=update_result.php>



<?php
	
	$first_name = $_GET["first_name"];

	$last_name = $_GET["last_name"];
	
	$employee_id = $_GET["employee_id"];
	
	$join_date = $_GET["join_date"];
	
	$job_type = $_GET["job_type"];
	
	$salary = $_GET["salary"];

	$library_id = $_GET["library_id"];
	

?>


	<div class="field">
    <label>First Name</label>
    <input type=text name="first_name" value='<?php echo $first_name; ?>'>
  </div>


  <div class="field">
    <label>Last Name</label>
    <input type=text name="last_name" value='<?php echo $last_name; ?>'>
  </div>


  <input type=hidden name=employee_id value='<?php echo $employee_id; ?>'>


  <div class="field">
    <label>Join Date</label>
    <input type=date name="join_date" value='<?php echo $join_date; ?>'>
  </div>


  <div class="field">
    <label>Job Type</label>
    <input type=text name="job_type" value='<?php echo $job_type; ?>'>
  </div>


  <div class="field">
    <label>Salary</label>
    <input type=text name=salary value='<?php echo $salary; ?>'>
  </div>


  <div class="field">
    <label>Library ID</label>
    <input type=text name=library_id value='<?php echo $library_id; ?>'>
  </div>




	<button class="ui labled olive button" type="submit">SAVE</button>

</form>

	</body>
</html>