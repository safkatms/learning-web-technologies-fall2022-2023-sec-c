<?php

    $name=$_REQUEST['Name'];
    $email=$_REQUEST['Email'];
    $username=$_REQUEST['UserName'];
    $pass=$_REQUEST['Password'];
    $cpass=$_REQUEST['ConfirmPassword'];
    if(isset($_REQUEST['Gender']))
    {
        $gender=$_REQUEST['Gender'];
    }
    $dob=$_REQUEST['dob'];



    if($name==""||$email==""||$username==""||$pass==""||$cpass==""||$gender==""||$dob=="")
    {
        echo "Fields are empty.";
    }
    else if($pass!=$cpass)
    {
        echo"Password and Cofirm Password should be same.";
    }
    else if(strlen($pass)>=8)
    {
        echo"Password Should Atleast 8 Digit.";
    }
   


?>