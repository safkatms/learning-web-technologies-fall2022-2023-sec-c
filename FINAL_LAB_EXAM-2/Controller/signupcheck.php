<?php
session_start();
require_once "../Model/usermodel.php";

$username = $_REQUEST['Username'];
$email = $_REQUEST['Email'];
$password= $_REQUEST['Password'];
$conpassword= $_REQUEST['ConPassword'];

if (
    $username=='' ||$email=='' ||$password=='' ||$conpassword==''
) {
    echo 'All Fields must be filled.';
} elseif (!ctype_upper($username[0]) || !ctype_alpha($username)) {
    echo 'First Name should start with a capital letter and contain only alphabetic characters.';
} elseif (strpos($email, '@') === false || strpos($email, '.') === false) {
    echo 'Email should include "@" and "." symbols.';
} elseif (strlen($password) < 4 || strpbrk($password, '!@#$%^&*()+=-[]{}|:;"\'<>,.?/~`') == false ) {
    echo 'Password should be at least 4 characters with at least one special character';
} elseif ($password !== $conpassword) {
    echo 'Passwords do not match.';
} else {
   $status= signup($username,$email,$password);
   if ($status) {
    header('location:../View/signin.php');
   } else {
    echo 'Username or Email Already Taken.';
   }
}
