<?php 
require_once('../model/userModel.php');
require_once('../controller/sessionCheck.php');
?>


<!-- <?php
$currentPassword =$_REQUEST['password'];
$newPassword=$_REQUEST['newPassword'];
$rePassword=$_REQUEST['rePassword'];

if($currentPassword ==$newPassword  ){
    
    echo "Password can't be same";

}
else{
    changePassword($_SESSION['userName'],$newPassword);

}
?> -->
<?php


    if (isset($_REQUEST['password']) && isset($_REQUEST['newPassword']) && isset($_REQUEST['rePassword']) ) {
        $currentPassword = $_REQUEST['password'];
        $newPassword = $_REQUEST['newPassword'];
        $rePassword = $_REQUEST['rePassword'];

        if ($currentPassword == $newPassword) {
            echo "Password can't be the same";
        } 
        else if($currentPassword!= $_SESSION['password'])
        {
            echo"Enter correct Password";
        }
        else if($newPassword!=$rePassword){
            echo"Password didn't Match";
        }
        else {
            changePassword( $newPassword,$_SESSION['userName'],);
            echo"Password Hasbeen changed";
            $_SESSION['password'] =$newPassword;
            header('location: ../view/adminHome.php');
            
        }
    }

?>

