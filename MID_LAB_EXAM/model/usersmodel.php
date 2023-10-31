<?php
require_once 'db.php';
function registration($id, $password, $name, $usertype)
{

    $con = getConnection();
    $sql = "SELECT * FROM users where id='{$id}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        return false;
    } else {
        $sql2 = "INSERT INTO users (id,password,name,type) VALUES('{$id}','{$password}','{$name}' , '{$usertype}')";
        $result2 = mysqli_query($con, $sql2);
        if ($result2) {
            return true;
        } else {
            return false;
        }
    }
}

function loginAdmin($id, $password)
{
    $usertype = "Admin";
    $con = getConnection();
    $sql = "SELECT * FROM users WHERE id='{$id}' AND password='{$password}' AND type='{$usertype}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $userData = mysqli_fetch_assoc($result);

        if ($userData) {

            $name = $userData['name'];
            $id = $userData['id'];
            setcookie('name', $name, time() + 3600, '/');
            setcookie('id', $id, time() + 3600, '/');
        }
        return true;
    } else {
        return false;
    }
}
function loginUser($id, $password)
{
    $usertype = "User";
    $con = getConnection();
    $sql = "SELECT * FROM users WHERE id='{$id}' AND password='{$password}' AND type='{$usertype}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $userData = mysqli_fetch_assoc($result);

        if ($userData) {

            $name = $userData['name'];
            $id = $userData['id'];
            $type = $userData['type'];
            setcookie('name', $name, time() + 3600, '/');
            setcookie('id', $id, time() + 3600, '/');
            setcookie('type', $type, time() + 3600, '/');
        }
        return true;
    } else {
        return false;
    }
}

function changeUserPassword($currentpassword, $password)
{
    $currentUser = $_COOKIE["id"];
    $con = getConnection();
    $sql = "SELECT * FROM users WHERE id='{$currentUser}' AND password='{$currentpassword}' ";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count==1) {
        $sql1 = "UPDATE users SET password='{$password}' WHERE id='{$currentUser}'";
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