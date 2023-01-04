<html>
	<head>
		<title>Login Page</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">	
	</head>
		<body>
		<input type="button" value="Go back!" onclick="history.back()">
			<br>
			<h1 style="text-align:center">Input Username & Password</h1>

<h1 style="text-align: center;"></h1>

<form class="ui form" style="max-width:250; margin: auto;" method=post action=login_create_result.php>

	
  <div class="field">
    <label style="text-align: center;">Username</label>
    <input type=text placeholder ='Ex:acb2' name="username">
  </div>

  <div class="field">
    <label style="text-align: center;">Password</label>
    <input type=password placeholder ='Type password' name="password">
  </div>

	
	<button class="ui labled olive button" type="submit">Login</button>
	
	</form>

		</body>
</html>