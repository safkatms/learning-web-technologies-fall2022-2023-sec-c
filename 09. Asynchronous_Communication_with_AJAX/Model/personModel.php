<?php

require_once('db.php');

function Registration($name, $phone, $email, $password)
{
    $con = getConnection();
    $sql1 = "INSERT INTO persons (name,phone,email,password) VALUES('{$name}','{$phone}','{$email}','{$password}')";
    $result1 = mysqli_query($con, $sql1);
    if ($result1) {
        return true;
    } else {
        return false;
    }
}

function checkEmailAvailability($email)
{
    $con = getConnection();
    $sql = "SELECT * FROM persons where email='{$email}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        return false;
    } else {
        return true;
    }
}

function Login($email, $password)
{
    $con = getConnection();
    $sql = "select * from persons where email='{$email}'and password='{$password}'";
    $result = mysqli_query($con, $sql);
    $cnt = mysqli_num_rows($result);

    if ($cnt > 0) {

        $row = mysqli_fetch_assoc($result);
        if ($row) {
            $pName = $row['name'];
            $pEmail = $row['email'];
            $pPhone = $row['phone'];

            $_SESSION['name'] = $pName;
            $_SESSION['email'] = $pEmail;
            $_SESSION['phone'] = $pPhone;
        }
        return true;
    } else {
        return false;
    }
}


?>