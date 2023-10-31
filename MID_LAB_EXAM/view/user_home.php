
<?php require_once('../Controller/sessioncheck.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>USER HOME</title>
</head>
<body>
	<center>
		<h1>Welcome <?php  if(isset($_COOKIE['name'])) {echo $_COOKIE['name'];  }?>!</h1>
		<a href="profile.html">Profile</a>
		<br/>
		<a href="change_password.html">Change Password</a>
		<br/>
		<a href="../controller/logoutcheck.php">Logout</a>
	</center>
</body>
</html>