<?php
    if(isset($_POST['Gender'])) {
        $gender = $_POST['Gender'];
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gender</title>
</head>
<body>
    <form action="" method="post">
        <fieldset style="width: 200px;">
            <legend>Gender</legend>
            <input type="radio" name="Gender" value="Male" <?php if(isset($gender) && $gender == "Male") echo "checked"; ?>>Male
            <input type="radio" name="Gender" value="Female" <?php if(isset($gender) && $gender == "Female") echo "checked"; ?>>Female
            <input type="radio" name="Gender" value="Other" <?php if(isset($gender) && $gender == "Other") echo "checked"; ?>>Other
            <hr>
            <input type="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>

