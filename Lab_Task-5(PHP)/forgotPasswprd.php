<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
</head>
<body>
    <header >
        <img src="logo.png" alt="x company" width="100px" height="100%">
        <section style="text-align: right;">
        <a href="publicHome.php"><?php echo $_COOKIE['Name']; ?></a>|
        <a href="login.php">Login</a>|
        <a href="registration.php">Registration</a>
        </section>
        
    </header>
    <form action="" method="" enctype="" style=" justify-content: center; align-items: center; display: flex; ">
        <fieldset style="width: 40%;" >
            <legend>FORGOT PASSWORD</legend>
            <table style="width: 100%;">
                <tr>
                    <td>
                        Enter Email
                    </td>
                    <td>
                        : <input type="text" name="Email" id="">
                    </td>
                </tr>
            </table>
            
            <hr>
            <input type="submit" value="Submit">
            
        </fieldset>
    </form>
    <footer>
        <p style="text-align: center;">Copyright©2023</p>
    </footer>
</body>
</html>