<!DOCTYPE html>
<html>
<head>
	<title>My Auth</title>
	<style type="text/css">
		input {
			display: block;
			margin-top: 5px; 
		}
	</style>
</head>
<body>
	<form  action="Auth.php" method="post">
		
		<label for="idEmail">Email</label>
		<input type="email" name="authEmail" id="idEmail">
		
		<label for="idPassword">Password</label>
		<input type="password" name="authPassword" id="idPassword">

		<input type="submit">
	</form>
</body>
</html>


<?php


/*$Result=$DB->query_select('select * from user_table');

	echo "<pre>";
		var_dump($Result);
		echo "</pre>";	
*/