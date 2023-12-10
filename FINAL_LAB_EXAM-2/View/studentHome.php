<?php
require_once('../Controller/sessioncheck.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <center>
        <section>
            <fieldset style="width: 60%;">
                <H1>Welcome <?php if (isset($_SESSION['name'])) {
                                echo $_SESSION['name'];
                            } ?></H1>

                <table border="1">
                    <tr>
                        <th>ID</th>
                        <th>Course Name</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                </table>

                            <a href="../controller/logout.php">LOGOUT</a>
            </fieldset>

        </section>
    </center>

</body>

</html>