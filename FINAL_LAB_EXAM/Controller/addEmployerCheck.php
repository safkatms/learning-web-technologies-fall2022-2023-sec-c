<?php

    session_start();
    require_once ("../model/adminModel.php");

    $name = $_REQUEST['name'];
    $username = $_REQUEST['username'];
    $companyName = $_REQUEST['companyName'];
    $contactNum= $_REQUEST['contactNum'];
    $password= $_REQUEST['password'];

    if($name==''||$username==''||$companyName==''||$contactNum==''||$password=='')
    {
        echo "Must fill all the fileds.";
    }
    else{

        $addEmployer = addEmployer($name, $username,$companyName,$contactNum,$password);

        if ($addEmployer)
        {
            header('location:../views/adminHome.php');
        }
        else 
        {
            echo "Error.";
        }
    }


?>