<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Home</title>
</head>
<body>
	<center>
	<h1>Welcome <?php  if(isset($_COOKIE['name'])) {echo $_COOKIE['name'];  }?>!</h1>
		<a href="employer.php"> Add Employer </a>
		<br/>
        <a href="updateEmployer.php">Update employer information</a>
		<br/>
		<a href="deleteEmployer.php">delete employer information</a>
		<br/>
		<a href="../controller/logout.php">Logout</a>
	</center>
</body>
</html>