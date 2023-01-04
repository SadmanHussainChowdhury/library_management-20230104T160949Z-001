<html>
	<head>
		<title>Create Warehouse</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">	
	</head>
		<body>
			<br>

<h1 style="text-align: center;">Create Warehouse Record</h1>

<form class="ui form" style="max-width:250; margin: auto;" method=get action=create_result.php>


	<div class="field">
    <label>Address</label>
    <input type=text placeholder ='Type the address' name="address">
  </div>

  <div class="field">
    <label>Library ID</label>
    <input type=text placeholder ='Ex:1,2,3' name="library_id">
  </div>


  <button class="ui labled olive button" type="submit">ADD WAREHOUSE</button>

</form>

		</body>
</html>