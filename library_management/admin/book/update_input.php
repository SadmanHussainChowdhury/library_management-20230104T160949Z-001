<html>
	<head>
		<title>Update Book</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">	
	</head>
		<body>
			<br>

<h1 style="text-align: center;">Update Book Record</h1>

<form class="ui form" style="max-width:250; margin: auto;" method=get action=update_result.php>



<?php

	$shelf_number = $_GET["shelf_number"];
	
	$isbn = $_GET["isbn"];

	$title = $_GET["title"];

	$category = $_GET["category"];
	
	$author_id = $_GET["author_id"];
	
	$publications_id = $_GET["publications_id"];
	
	$library_id = $_GET["library_id"];
	

?>


	<input type=hidden name=author_id value='<?php echo $author_id; ?>'> 


	<div class="field">
    <label>Shelf Number</label>
    <input type=text name="shelf_number" value='<?php echo $shelf_number; ?>'> 
  </div>

  <div class="field">
    <label>ISBN</label>
    <input type=text name=isbn value='<?php echo $isbn; ?>'>
  </div>

  <div class="field">
    <label>Title</label>
    <input type=text name="title" value='<?php echo $title; ?>'>
  </div>

  <div class="field">
    <label>Category</label>
    <input type=text name="category" value='<?php echo $category; ?>'>
  </div>
  

  <div class="field">
    <label>Author ID</label>
    <input type=text name=author_id value='<?php echo $author_id; ?>'>
  </div>

  <div class="field">
    <label>Publications ID</label>
    <input type=text name=publications_id value='<?php echo $publications_id; ?>'>
  </div>

  <div class="field">
    <label>Library ID</label>
    <input type=text name=library_id value='<?php echo $library_id; ?>'>
  </div>


	<button class="ui labled olive button" type="submit">SAVE</button>

</form>

	</body>
</html>