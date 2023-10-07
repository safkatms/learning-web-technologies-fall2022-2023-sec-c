<?php
    if(isset($_REQUEST['Blood']))
    {
        $blood=$_REQUEST['Blood'];
        echo $blood;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Blood Group</title>
</head>
<body>
    <form action="blood.php" method="" enctype="">
        <fieldset style="width: 150px;">
            <legend>Blood Group </legend>
        
        <select name="Blood" id="">
            <option value="A+">A+</option>
            <option value="B+">B+</option>
            <option value="A-">A-</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select>
        <hr>
        <input type="submit" value="Submit">
    </fieldset>
    </form>
</body>
</html>