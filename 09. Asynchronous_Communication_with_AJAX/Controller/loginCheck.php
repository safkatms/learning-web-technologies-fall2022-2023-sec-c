<?php 
     session_start();
     require_once('../model/personModel.php');
     $email = $_REQUEST['email'];
     $password = $_REQUEST['password'];

     if($email == "" || $password == ""){
         echo "Must fill all the fileds.";   
     }else{
         
         $status1 = Login($email, $password);
         if($status1){
             $_SESSION['flag'] = "true";
             header("location:../view/Home.php");
         }else{
            header("location:../view/registration.php");
         }
     }
?>