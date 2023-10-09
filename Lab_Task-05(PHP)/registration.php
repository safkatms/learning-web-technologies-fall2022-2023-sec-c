<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $username = $_POST["UserName"];
    $password = $_POST["Password"];
    $confirmPassword = $_POST["ConfirmPassword"];
    $gender = isset($_POST["Gender"]) ? $_POST["Gender"] : "";
    $dob = $_POST["dob"];

    // Perform basic validation
    if ($password != $confirmPassword) {
        echo "Password and Confirm Password do not match.";
    } else {
        setcookie('Name', $name, time() + 3600); 
        setcookie('Email', $email, time() + 3600);
        setcookie('UserName', $username, time() + 3600);
        setcookie('Gender', $gender, time() + 3600);
        setcookie('DOB', $dob, time() + 3600);
        setcookie('Password',$password,time() + 3600);

        header("Location: login.php");
        exit;
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
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
            <legend>REGISTRATION</legend>
            <table style="width: 100%;">
                <tr >
                    <td>
                        Name
                    </td>
                    <td>
                        : <input type="text" name="Name" id="">
                    </td>
                </tr>
                <tr>
                    <td>
                        Email
                    </td>
                    <td>
                        : <input type="text" name="Email" id="">
                    </td>
                </tr>
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
                        : <input type="password" name="Password" id="">
                    </td>
                </tr>
                <tr>
                    <td>
                        Confirm Password
                    </td>
                    <td>
                        : <input type="password" name="ConfirmPassword" id="">
                    </td>
                </tr>
            </table>
            <fieldset>
                <legend>Gender</legend>
                <input type="radio" name="Gender" value="Male">Male
                <input type="radio" name="Gender" value="Female">Female
                <input type="radio" name="Gender" value="Other">Other
            </fieldset>
            <fieldset>
                <legend>Date of Birth</legend>
                <input type="date" name="dob" id="">
            </fieldset>
            <hr>
            <input type="Submit" value="Submit">
            <input type="reset" value="Reset">
        </fieldset>
    </form>
    <footer>
        <p style="text-align: center;">Copyright©2023</p>
    </footer>
</body>
</html>