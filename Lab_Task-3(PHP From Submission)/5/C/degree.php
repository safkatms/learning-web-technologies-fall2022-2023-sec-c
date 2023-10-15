<?php
    if(isset($_POST['SSC'])) {
        $SSC = $_POST['SSC'];
    }
    if(isset($_POST['HSC'])) {
        $HSC = $_POST['HSC'];
    }
    if(isset($_POST['BSc'])) {
        $BSc = $_POST['BSc'];
    }
    if(isset($_POST['MSc'])) {
        $MSc = $_POST['MSc'];
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Degree</title>
</head>
<body>
    <form action="" method="post">
        <fieldset style="width: 250px;">
            <legend>Degree</legend>
            <input type="checkbox" name="SSC" value="SSC" <?php if(isset($SSC) && $SSC == "SSC") echo "checked"; ?>>SSC
            <input type="checkbox" name="HSC" value="HSC" <?php if(isset($HSC) && $HSC == "HSC") echo "checked"; ?>>HSC
            <input type="checkbox" name="BSc" value="BSc" <?php if(isset($BSc) && $BSc == "BSc") echo "checked"; ?>>BSc
            <input type="checkbox" name="MSc" value="MSc" <?php if(isset($MSc) && $MSc == "MSc") echo "checked"; ?>>MSc
            <hr>
            <input type="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>
