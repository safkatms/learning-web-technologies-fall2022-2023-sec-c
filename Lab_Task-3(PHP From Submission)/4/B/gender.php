<?php
    if(isset($_REQUEST['Gender']))
    {
        $gender=$_REQUEST['Gender'];
        echo $gender;
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Gender</title>
</head>
<body>
    <form action="" method="post" enctype="">
        <fieldset style="width: 200px;">
            <legend>Gender</legend>
            <input type="radio" name="Gender" value="Male">Male
            <input type="radio" name="Gender" value="Female">Female
            <input type="radio" name="Gender" value="Other">Other
            <hr>
            <input type="submit" value="Submit">
        </fieldset>
        
    </form>
</body>
</html>