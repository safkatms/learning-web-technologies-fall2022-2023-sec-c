<?php 
     session_start();
     require_once('../model/usersmodel.php');
     $id = $_REQUEST['id'];
     $password = $_REQUEST['password'];
 
 
     if($id == "" || $password == ""){
         echo "null username/password!";   
     }else{
         
         $status = loginAdmin($id, $password);
         $status2 = loginUser($id, $password);
         if($status){
             $_SESSION['flag'] = "true";
             header("location: ../view/admin_home.php");
         }elseif($status2){
            $_SESSION["flag"] = "true";
            header("location: ../view/user_home.php");
         }else{
             echo "invaid user!";
         }
     }
?>