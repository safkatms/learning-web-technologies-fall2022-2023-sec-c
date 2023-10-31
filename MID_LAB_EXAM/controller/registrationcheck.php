<?php
session_start();
require_once ("../model/usersmodel.php");

$id = $_REQUEST['id'];
$password= $_REQUEST['password'];
$cpassword= $_REQUEST['cpassword'];
$name = $_REQUEST['name'];
$usertype = (isset($_REQUEST['type'])) ? $_REQUEST['type'] : '';



if ($id=='' ||$password=='' || $cpassword=='' ||$name=='' ||$usertype==''   ) {
    echo 'All Fields must be filled.';
} elseif (strlen($password) < 4 ) {
    echo 'Password should be at least 4 characters. ';
} elseif ($password !== $cpassword) {
    echo 'Passwords do not match.';
} else {
   $status= registration($id,$password,$name,$usertype);
   if ($status) {
    header('location:../view/login.php');
   } else {
    echo 'ID Already Taken.';
   }
}