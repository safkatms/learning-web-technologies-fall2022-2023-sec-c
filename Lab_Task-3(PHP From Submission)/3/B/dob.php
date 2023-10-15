<?php

    if(isset($_REQUEST['dob']))
    {
        $Dob=$_REQUEST['dob'];
        echo $Dob;
    }

    


?>
<!DOCTYPE html>
<html>
<head>
    <title>DOB</title>
</head>
<body>
    <form action="" method="post" enctype="">
        <fieldset style="width: 100px;">
            <legend><h5>Date of Birth </h5></legend>
            <input type="date" name="dob" id="">
            <hr>
            <input type="submit" value="Submit">
        </fieldset>
        <br>
    </form>
</body>
</html>