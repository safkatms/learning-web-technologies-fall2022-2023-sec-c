<?php
if(isset($_REQUEST['email'])){
    $email=$_REQUEST['email'];
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Email</title>
</head>
<body>
    <form action="" method="post" enctype="">
        <fieldset style="width: 200px;">
        <legend>Email</legend>
            <input type="email" name="email" value="<?php if(isset($email)){echo $email;} ?>"> <input type="button" value="i" title="hint:sample@example.com"> <br>
            <hr>
            <input type="submit" value="Submit">
        </fieldset>
        
    </form>
</body>
</html>