<?php 
     session_start();
     require_once('../Model/usermodel.php');
     $email = $_REQUEST['Email'];
     $password = $_REQUEST['Password'];
 
 
     if($email == "" || $password == ""){
         echo "Null username/password!";   
     }else{
         
         $status = signin($email, $password);
         if($status){
             $_SESSION['flag'] = "true";
         }else{
             echo "invaid user!";
         }
     }
?>