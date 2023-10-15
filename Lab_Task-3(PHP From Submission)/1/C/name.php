<?php
if(isset($_REQUEST['name'])){
    $name=$_REQUEST['name'];
    
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
            <input type="text" name="name" value="<?php if(isset($name)){echo $name;}?>"><br>
            <hr>
            <input type="submit" value="Submit">
        </fieldset>
        
    </form>
</body>
</html>