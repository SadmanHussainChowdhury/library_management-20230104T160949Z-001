<html>
	<head>
		<title>Create Employee</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">	
	</head>
		<body>
			<br>

<h1 style="text-align: center;">Create Employee Record</h1>

<form class="ui form" style="max-width:250; margin: auto;" method=get action=create_result.php>

	<form class="ui form">
  <div class="field">
    <label>First Name</label>
    <input type=text placeholder ='Type the first name' name="first_name">
  </div>

  <div class="field">
    <label>Last Name</label>
    <input type=text placeholder ='Type the last name' name="last_name">
  </div>

  <div class="field">
    <label>Join Date</label>
    <input type=date placeholder ='Ex:2021-11-26' name="join_date">
  </div>

  <div class="field">
    <label>Job Type</label>
    <input type=text placeholder ='Ex:Manager,janitor' name="job_type">
  </div>

  <div class="field">
    <label>Salary</label>
   <input type=text placeholder ='Ex:$15750' name="salary">
  </div>

  <div class="field">
    <label>Library ID</label>
    <input type=text placeholder ='Ex:1,2,3' name="library_id">
  </div>



  </div>
  <button class="ui labled olive button" type="submit">ADD EMPLOYEE</button>
</form>


		</body>
</html>