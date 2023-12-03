<?php
session_start();
require_once ("../model/personModel.php");

$email = $_REQUEST['email'];

    $status = checkEmailAvailability($email);

    if ($status) {
        echo 'Email Not Taken.';
    } else {
        echo 'Email Already Taken.';
    }

?>