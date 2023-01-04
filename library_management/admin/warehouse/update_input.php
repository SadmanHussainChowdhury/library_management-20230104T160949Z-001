<html>
	<head>
		<title>Update Author</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">	
	</head>
		<body>
			<br>

<h1 style="text-align: center;">Update Author Record</h1>

<form class="ui form" style="max-width:250; margin: auto;" method=get action=update_result.php>


<?php

	$address = $_GET["address"];
	
	$warehouse_id = $_GET["warehouse_id"];

	$library_id = $_GET["library_id"];


?>


	<input type=hidden name=warehouse_id value='<?php echo $warehouse_id; ?>'> 


	<div class="field">
    <label>Address</label>
    <input type=text name="address" value='<?php echo $address; ?>'>
  </div>

  <div class="field">
    <label>Library ID</label>
    <input type=text name=library_id value='<?php echo $library_id; ?>'>
  </div>




	<button class="ui labled olive button" type="submit">SAVE</button>

</form>

	</body>
</html>