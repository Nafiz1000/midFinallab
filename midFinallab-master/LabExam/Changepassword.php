<?php
	session_start();
	if(!isset($_SESSION['uname'])){
		header("location: Change.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
</head>
<body>
<form>
	<fieldset>
		<legend>Changed Password</legend>
		<table>
			<tr>
			<td>User Id</td>
		</tr>
		<tr><td><input type="text" name="" value=""  /></td></tr>
		<tr>
			<td>Password</td>
		</tr>
		<tr>
			<td> <input type="password" name="" value=""/></td>
		</tr>
		<tr>
			<td><hr></td>
		</tr>
		<tr>
		
			<td>
				<input type="submit" name="" value="Login">
				<a href="text.html">Register</a>
			</td>
		</tr>
		</table>
	</fieldset>
</form>
</body>
</html>

