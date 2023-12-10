<?php
session_start();
require_once "../Model/adminmodel.php";

$name = $_REQUEST['Name'];
$description = $_REQUEST['Description'];

if (
    $name=='' ||$description==''
) {
    echo 'All Fields must be filled.';
} else {
   $status= addCourse($name, $description);
   if ($status) {
    header('location:../View/adminHome.php');
   } else {
    echo 'Error';
   }
}
