<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="loginverify.php">
	<table>
		<tr><td>Login to Account</td></tr>
		<tr><td>Username:</td><td><input type="text" name="username"></td></tr>

		<tr><td>Password:</td><td><input type="password" name="password"></td></tr>

		<tr><td><input type="submit" name="login"></td></tr>

		<tr><td><?php 
		if (isset($_GET['invalid']))
			echo $_GET['invalid'];

		if (isset($_GET['logout']))
			echo $_GET['logout'];
		 ?>	
		 </td>
		</tr>
	</table>
</form>
</body>
</html>