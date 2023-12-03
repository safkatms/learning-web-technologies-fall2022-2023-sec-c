<?php
session_start();
require_once ("../model/personModel.php");

$name = $_REQUEST['name'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$password= $_REQUEST['password'];
$cPassword= $_REQUEST['cPassword'];



if ($name=='' ||$phone==''||$email==''||$password=='' || $cPassword=='') {
    echo 'Must fill all the fileds.';
} 
elseif (strlen($password) < 3 ) {
    echo 'Password should be at least 5 characters. ';
}
elseif ($password != $cPassword) {
    echo 'Password does not match.';
}
 else 
 {
    $status = Registration($name, $phone, $email, $password);

    if ($status) {
        header('location:../view/login.php');
    } else {
        echo 'Email Already Taken.';
    }
}

?>