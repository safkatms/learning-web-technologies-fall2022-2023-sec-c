<?php require_once('../Controller/sessioncheck.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>profile</title>
</head>
<body>
	<center>
		<table border="1" cellpadding="5" cellspacing="0">
			<tr><td colspan="2" align="CENTER">Profile</td></tr>
			<tr><td>ID</td><td><?php  if(isset($_COOKIE['id'])) {echo $_COOKIE['id'];  }?></tr>
			<tr><td>NAME</td><td><?php  if(isset($_COOKIE['name'])) {echo $_COOKIE['name'];  }?></td></tr>	
			<tr><td>USER TYPE</td><td>Admin</td></tr>
			<tr><td colspan="2" align="right"><a href="home.php">Go Home</a></td></tr>
		</table>			
	</center>
</body>
</html>