<?php

    $currentpass=$_REQUEST['CPassword'];
    $newpass=$_REQUEST['NPassword'];
    $retypenewpass=$_REQUEST['RNPassword'];

    if($currentpass==""||$newpass==""||$retypenewpass=="")
    {
        if($currentpass==$newpass)
    {
        if($newpass!=$retypenewpass)
    {
        echo"New Password must match with the Retyped Password";
    }
        echo "New Password should not be same as the Current Password";
    }
        echo"Field are empty.";
    }
    else
    {
        echo"Password Changed Successfully!";
    }

?>