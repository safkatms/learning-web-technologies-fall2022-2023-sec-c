<?php
    if(isset($_REQUEST['Blood'])) {
        $blood = $_REQUEST['Blood'];
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Blood Group</title>
</head>
<body>
    <form action="blood.php" method="post">
        <fieldset style="width: 150px;">
            <legend>Blood Group</legend>
        
            <select name="Blood" id="">
                <option value="A+" <?php if(isset($blood) && $blood == "A+") echo "selected"; ?>>A+</option>
                <option value="B+" <?php if(isset($blood) && $blood == "B+") echo "selected"; ?>>B+</option>
                <option value="A-" <?php if(isset($blood) && $blood == "A-") echo "selected"; ?>>A-</option>
                <option value="B-" <?php if(isset($blood) && $blood == "B-") echo "selected"; ?>>B-</option>
                <option value="AB+" <?php if(isset($blood) && $blood == "AB+") echo "selected"; ?>>AB+</option>
                <option value="AB-" <?php if(isset($blood) && $blood == "AB-") echo "selected"; ?>>AB-</option>
                <option value="O+" <?php if(isset($blood) && $blood == "O+") echo "selected"; ?>>O+</option>
                <option value="O-" <?php if(isset($blood) && $blood == "O-") echo "selected"; ?>>O-</option>
            </select>
            <hr>
            <input type="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>
