<?php

require_once('db.php');
function addCourse($name, $description)
{
    $con = getConnection();
    $sql2 = "INSERT INTO course (name,description) VALUES('{$name}' , '{$description}')";
    $result2 = mysqli_query($con, $sql2);
    if ($result2) {
        return true;
    } else {
        return false;
    }
}
