<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign in</title>
</head>

<body>
    <center>
        <form method="post" action="../Controller/signincheck.php" enctype="">
            <fieldset style="width: 50px;">
                <Table>
                    <tr>
                        <th colspan="2">
                            <h2>Sign in</h2><br>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            Email:
                        </td>
                        <td>
                            <input type="email" name="Email" value=""><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Password:
                        </td>
                        <td>
                            <input type="password" name="Password" value=""><br>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="checkbox" name="ShowPassword" value="">Show Password<br>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="Sign in">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <a href="usersignup.php"><input type="button" value="Sign up"></a>
                        </td>
                    </tr>
                </Table>
            </fieldset>

        </form>
    </center>

</body>

</html>