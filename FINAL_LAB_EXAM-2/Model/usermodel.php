<?php
require_once('db.php');


function signup($username, $email,$password)
{

    $con = getConnection();
    $sql = "SELECT * FROM users where email='{$email}'";
    $result = mysqli_query($con, $sql);
    $count =  mysqli_num_rows($result);

    if ($count == 1) {
        return false;
    } else {
        $sql2 = "INSERT INTO users (name,email,password) VALUES('{$username}' , '{$email}' ,'{$password}')";
        $result2 = mysqli_query($con, $sql2);
        if ($result2) {
            return true;
        } else {
            return false;
        }
    }
}
function signin($email, $password)
{
    $con = getConnection();
    $sql = "SELECT * FROM users WHERE email='{$email}' AND password='{$password}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $userData = mysqli_fetch_assoc($result);

        if ($userData) {
            $username = $userData['name'];
            $userEmail = $userData['email'];
            $userType = $userData['usertype'];

            $_SESSION['name']=$username;
            $_SESSION['email']=$userEmail;
            $_SESSION['usertype']=$userType;
        }
        if($_SESSION['usertype']=='student'){
            header("location: ../view/studentHome.php");
        }else if($_SESSION['usertype']=='admin'){
            header("location: ../view/adminHome.php");
        }
        return true;
    } else {
        return false;
    }
}



function getUserInfo()
{
    $currentUser = $_COOKIE['username'];
    $con = getConnection();
    $sql = "SELECT * FROM usersinfo WHERE username='{$currentUser}' ";
    $result = mysqli_query($con, $sql);
    $users = [];
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($users, $row);
    }

    return $users;
}

function editUserInfo($firstname, $lastname, $username, $email, $mobile)
{
    $currentUser = $_COOKIE["username"];
    $con = getConnection();
    $sql = "UPDATE usersinfo SET firstname='{$firstname}', lastname='{$lastname}',username='{$username}',email='{$email}',mobile='{$mobile}' WHERE username='{$currentUser}'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        setcookie('firstname', $firstname, time() + 3600, '/');
        return true;
    } else {
        return false;
    }
}

function changeUserPassword($currentpassword, $password)
{
    $currentUser = $_COOKIE["username"];
    $con = getConnection();
    $sql = "SELECT * FROM usersinfo WHERE username='{$currentUser}' AND password='{$currentpassword}' ";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count==1) {
        $sql1 = "UPDATE usersinfo SET password='{$password}' WHERE username='{$currentUser}'";
        $result1 = mysqli_query($con, $sql1);
            if ($result1) {

                return true;
            } 
        return true;
    } else {
        return false;
    }
}
?>