<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign up</title>
    <script src="../Asset/script.js"></script>
</head>

<body>
    <center>
        <form method="post" action="../Controller/coursecheck.php" enctype="">

            <fieldset style="width: 40%; ">
            <h3 id="fname"></h3>
                <Table>
                    <tr>
                        <th colspan="2">
                            <h2>Add New Course</h2><br>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            Course Name:
                        </td>
                        <td>
                            <input type="text" name="Name" id="Name" value=""><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Course Description:
                        </td>
                        <td>
                            <textarea name="Description" id="Description" cols="30" rows="10"></textarea><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <input type="submit" value="Add">
                        </td>
                    </tr>

                </Table>

            </fieldset>
        </form>

    </center>

</body>

</html>