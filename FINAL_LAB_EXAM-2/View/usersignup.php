<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign up</title>
    <script src="../Asset/script.js"></script>
</head>

<body>
    <center>
        <form method="post" action="../Controller/signupcheck.php" enctype="" onsubmit="return SignUp();">

            <fieldset style="width: 350px; ">
            <h3 id="fname"></h3>
                <Table>
                    <tr>
                        <th colspan="2">
                            <h2>Sign Up</h2><br>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            Username:
                        </td>
                        <td>
                            <input type="text" name="Username" id="Username" value=""><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email:
                        </td>
                        <td>
                            <input type="email" name="Email" id="Email" value=""><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Password:
                        </td>
                        <td>
                            <input type="password" name="Password" id="Password" value=""><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Confirm Password:
                        </td>
                        <td>
                            <input type="password" name="ConPassword" id="ConPassword" value=""><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="reset" value="Clear">
                        </td>
                        <td>
                            <input type="submit" value="Sign up">
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>
                            <a href="signin.php"><input type="button" value="Sign in"></a>
                        </td>
                    </tr>

                </Table>

            </fieldset>
        </form>

    </center>

</body>

</html>