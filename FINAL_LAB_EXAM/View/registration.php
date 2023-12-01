<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
    <script src="../Asset/validation.js"></script>
</head>
<body>
    <center>
    <form action="../controller/registrationCheck.php" method="post" onsubmit="return registration();">
        <table border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td>
                    <fieldset>
                    <legend><h3>REGISTRATION</h3></legend>
                        Username<br/><input type="text" name="username" id="username" value=""><br/>
                        Name<br/><input type="text" name="name" id="name" value=""><br/> 
                        Password<br/><input type="password" name="password" id="password" value=""><br/>
                        Confirm Password<br/><input type="password" name="cPassword" id="cPassword" value=""><br/>
                        <hr>
                        <input type="submit" value="Sign Up">
                        <a href="login.php">Login</a>
                    </fieldset>
                </td>
            </tr>                                
        </table>
    </form>
    </center>
</body>
</html>
