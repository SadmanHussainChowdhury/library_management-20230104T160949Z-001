<html>
	<head>
		<title>Update Publications</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">	
	</head>
		<body>
			<br>

<h1 style="text-align: center;">Update Publications Record</h1>

<form class="ui form" style="max-width:250; margin: auto;" method=get action=update_result.php>



<?php

	$publications_id = $_GET["publications_id"];
	
	$publication_name = $_GET["publication_name"];

	$city = $_GET["city"];

	$zip_code = $_GET["zip_code"];

?>


<input type=hidden name=publications_id value='<?php echo $publications_id; ?>'>


<div class="field">
    <label>Publication Name</label>
    <input type=text name="publication_name" value='<?php echo $publication_name; ?>'>
  </div>

  <div class="field">
    <label>City</label>
    <input type=text name="city" value='<?php echo $city; ?>'>
  </div>

  <div class="field">
    <label>Zip Code</label>
    <input type=text name="zip_code" value='<?php echo $zip_code; ?>'>
  </div>

	

		<button class="ui labled olive button" type="submit">SAVE</button>

</form>

	</body>
</html>