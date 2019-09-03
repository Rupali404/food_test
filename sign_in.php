<?php include_once'sign_indetails.php'?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="sign_in.css">
	<title></title>
</head>
<body>
	<h2>Sign IN</h2>
	<div class="container">
	<form method="post" action="sign_indetails.php">

	<div class="inputs">
		<input type="text" name="user_name" placeholder="User Name" required>
	</div>
	<br>
	<div class="inputs">
		<input type="password" name="password" placeholder="Password" required>
	</div>
	<div class="inputs">
		<input type="submit" name="submit" value="Login">
		<input type="submit" name="cancel" value="Cancel">
	</div>
	

	
</form>
</div>

</body>
</html>