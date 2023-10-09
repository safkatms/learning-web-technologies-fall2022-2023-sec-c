<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["UserName"];
    $password = $_POST["Password"];

    if (empty($username) || empty($password)) {
        echo "Both username and password are required.";
    } else {
        if (
            isset($_COOKIE['Name']) &&
            isset($_COOKIE['Email']) &&
            isset($_COOKIE['UserName']) &&
            isset($_COOKIE['Gender']) &&
            isset($_COOKIE['DOB']) &&
            isset($_COOKIE['Password'])
        ) {
            $name = $_COOKIE['Name'];
            $email = $_COOKIE['Email'];
            $storedUsername = $_COOKIE['UserName'];
            $gender = $_COOKIE['Gender'];
            $dob = $_COOKIE['DOB'];
            $storedPassword = $_COOKIE['Password'];

            if ($username === $storedUsername && $password === $storedPassword) {
                header("Location: dashboard.php");
                exit;
            } 
        } 
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <header>
        <img src="logo.png" alt="x company" width="100px" height="100%">
        <section style="text-align: right;">
        <a href="publicHome.php">Home</a>|
        <a href="login.php">Login</a>|
        <a href="registration.php">Registration</a>
        </section>
        
    </header>
    <form action="" method="Post" enctype="" style=" justify-content: center; align-items: center; display: flex; ">
        <fieldset style="width: 40%;" >
            <legend>LOGIN</legend>
            <table style="width: 100%;">
                <tr>
                    <td>
                        UserName
                    </td>
                    <td>
                        : <input type="text" name="UserName" id="">
                    </td>
                </tr>
                <tr>
                    <td>
                        Password
                    </td>
                    <td>
                        : <input type="text" name="Password" id="">
                    </td>
                </tr>
            </table>
            <input type="checkbox" name="Remember" id="">Remember Me
            <hr>
            <input type="submit" value="Submit">
            <a href="forgotPasswprd.php">Forgot Password?</a>
        </fieldset>
    </form>
    <footer>
        <p style="text-align: center;">Copyright©2023</p>
    </footer>
</body>
</html>