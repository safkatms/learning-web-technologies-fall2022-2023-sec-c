<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
    <script src="../Asset/validation.js"></script>
</head>
<body>
    <center>
    <form action="../controller/registrationCheck.php" method="post" onsubmit="registration()">
        <table border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td>
                    <fieldset>
                    <legend><h3>REGISTRATION</h3></legend>
                        Name <br><input type="text" name="name" id="name" value=""><br/>
                        Phone <br><input type="text" name="phone" id="phone" value=""><br/> 
                        Email <br><input type="email" name="email" id="email" value="" onblur="checkEmailAvailability()"><h6 id="h6"></h6><br/> 
                        Password <br><input type="password" name="password" id="password" value=""><br/>
                        Confirm Password <br><input type="password" name="cPassword" id="cPassword" value=""><br/>
                        <hr>
                        <input type="submit" value="Sign Up">
                    </fieldset>
                </td>
            </tr>                                
        </table>
    </form>
    </center>
</body>
</html>
