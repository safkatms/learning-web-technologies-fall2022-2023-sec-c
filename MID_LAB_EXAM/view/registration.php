<!DOCTYPE html>
<html lang="en">
<head>
	<title>REGISTRATION</title>
</head>
<body>
	<center>
	<form action="../controller/registrationcheck.php" method="post" enctype="">
			<table border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td>
						
							<fieldset>
								<legend><h3>REGISTRATION</h3></legend>
								Id<br/><input type="text" name="id" value=""><br/>
								Password<br/><input type="password" name="password" value=""><br/>
								Confirm Password<br/><input type="password" name="cpassword" value=""><br/>
								Name<br/><input type="text" name="name"><br/>
								User Type<hr/>
								<input type="radio" name="type" value="User"/>User
								<input type="radio" name="type" value="Admin"/>Admin
								<hr/>
								<input type="submit" value="Sign Up">
								<a href="login.php">Sign In</a>
							</fieldset>
						
						
					</td>
				</tr>                                
			</table>
		</form>
		</center>
</body>
</html>

		