<?php
require_once('db.php');
function login($userName,$password)
{
    $con = getConnection();
    $sql = "SELECT * FROM userinfo WHERE userName='$userName' AND password='$password'";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);
    return $user;

}


function signup($name, $email, $userName, $password, $phone, $dob)
{
    $con = getConnection();
    $sql = "INSERT INTO userinfo (Name, Email, UserName, Password, Phone, DOB)
    VALUES ('$name', '$email', '$userName', '$password', '$phone', '$dob')";

    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}


function changePassword($newPassword,$userName)
{
    $con = getConnection();
    $sql="UPDATE userinfo SET Password ='$newPassword' WHERE UserName='$userName'";
    $result = mysqli_query($con, $sql);
    return $result;   
}

function searchUsers($userName){
    $con = getConnection();
    $sql = "select * from userinfo where userName ='$userName'";
    $result = mysqli_query($con, $sql);
    return $result;   
}

    



?>