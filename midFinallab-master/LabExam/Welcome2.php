<?php
	session_start();
	if(!isset($_SESSION['uname'])){
		header("location: Change.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
	<center><h1>
	Welcome Anne!</h1></center>
	
<CENTER>
	<a href="Welcome2.html">Profile</a><br>
	<a href="Change password.html">Change Password</a><br>
	
	<a href="Login.html">Logout</a>
</CENTER>
</body>
</html>