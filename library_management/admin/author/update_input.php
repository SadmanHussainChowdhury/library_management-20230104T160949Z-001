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

	$author_id = $_GET["author_id"];
	
	$first_name = $_GET["first_name"];

	$last_name = $_GET["last_name"];

	$mail = $_GET["mail"];

?>

	<input type=hidden name=author_id value='<?php echo $author_id; ?>'> 


	<div class="field">
    <label>First Name</label>
    <input type=text name="first_name" value='<?php echo $first_name; ?>'>
  </div>

  <div class="field">
    <label>Last Name</label>
    <input type=text name="last_name" value='<?php echo $last_name; ?>'>
  </div>

  <div class="field">
    <label>Mail</label>
    <input type=text name="mail" value='<?php echo $mail; ?>'>
  </div>




	<button class="ui labled olive button" type="submit">SAVE</button>

</form>

	</body>
</html>