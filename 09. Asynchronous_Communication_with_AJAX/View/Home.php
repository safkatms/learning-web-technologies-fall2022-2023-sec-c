<?php 
    session_start();
    if(!isset($_SESSION['flag'])){
        header('location: login.html');
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Admin Home</title>
</head>

<body>
	<center>
		<h1>Welcome <?php if (isset($_SESSION['name'])) {
						echo $_SESSION['name'];
					} ?>!</h1>
		<p>Phone: <?php if (isset($_SESSION['phone'])) {
						echo $_SESSION['phone'];
					} ?></p>
		<p>Email: <?php if (isset($_SESSION['email'])) {
						echo $_SESSION['email'];
					} ?></p>
					<a href="../Controller/logout.php">Logout</a>
	</center>
</body>

</html>