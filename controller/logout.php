<?php
session_start();
    session_destroy();
   // unlink($_SESSION['flag']);
    setcookie('flag', 'true', time()-10, '../view/login.php');
    header('location: ../view/login.php');
?>
