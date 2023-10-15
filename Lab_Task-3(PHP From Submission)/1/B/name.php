<?php
if(isset($_REQUEST['name'])){
    $name=$_REQUEST['name'];
    echo $name;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Name</title>
</head>
<body>
    <form action="" method="post" enctype="">
        <fieldset style="width:50px;">
            <legend>Name</legend>
            <input type="text" name="name" value=""><br>
            <hr>
            <input type="submit" value="Submit">
        </fieldset>
        
    </form>
</body>
</html>