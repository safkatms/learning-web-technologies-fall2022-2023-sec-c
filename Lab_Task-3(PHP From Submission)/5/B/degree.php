<?php
    if(isset($_POST['Degree']))
    {
        $degree=$_REQUEST['Degree'];
        echo $degree;
    }
    

?>

<!DOCTYPE html>
<html>
<head>
    <title>Degree</title>
</head>
<body>
    <form action="" method="post" enctype="">
        <fieldset style="width: 250px;">
            <legend>Degree</legend>
            <input type="checkbox" name="Degree" value="SSC">SSC
            <input type="checkbox" name="Degree" value="HSC">HSC
            <input type="checkbox" name="Degree" value="BSc">BSc
            <input type="checkbox" name="Degree" value="MSc">MSc
            <hr>
            <input type="submit" value="Submit">
        </fieldset>
        
    </form>
</body>
</html>