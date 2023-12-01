<?php

require_once('db.php');

function registration($username,$password,$name)
  {
      $con= getConnection();
      $sql= "INSERT INTO admininfo (username,name,password) VALUES('{$username}','{$name}','{$password}')";
      $result= mysqli_query($con, $sql);
      if($result)
      {
          return true;
      }
      else{
          return false;
      }
   }

function adminLogin($username, $password)
{
    $con = getConnection();
    $sql = "select * from adminInfo where username='{$username}'and password='{$password}'";
    $result = mysqli_query($con, $sql);
    $cnt= mysqli_num_rows($result);

    if($cnt>0){

        $user = mysqli_fetch_assoc($result);
        if ($user)
        {
            $name = $user['name'];
            $username = $user['username'];
            setcookie('name', $name, time() + 1000, '/');
            setcookie('username', $username, time() + 1000, '/');
        }         
        return true;
    }
    else{
        return false;
    }
}



function addEmployer($name, $username, $companyName,$contactNum,$password)
  {
      $con= getConnection();
      $sql= "INSERT INTO employerinfo (employerName,CompanyName,ContactNo,username,password) VALUES('{$name}','{$companyName}','{$contactNum}' , '{$username}', '{$password}')";
      $result= mysqli_query($con, $sql);
      if($result)
      {
          return true;
      }
      else{
          return false;
      }
   }

  

?>