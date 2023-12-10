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
                <a href="addcourse.php">ADD COURSE</a><br><br>
                <a href="../controller/logout.php">Logout</a>
            </fieldset>

        </section>
    </center>

</body>

</html>