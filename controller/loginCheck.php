<?php
require_once('../model/userModel.php');

session_start();
    $userName = $_REQUEST['userName'];
    $password = $_REQUEST['password'];
    $_SESSION['userName'] = $userName;
    $_SESSION['password'] = $password;
    $result=searchUsers($userName);
    $check = mysqli_fetch_assoc($result);

    if($userName == "" || $password == "" ){
    
        echo "null username or password!";
    
    }
        else{
            $status = login($userName, $password);
            if($check){
        
               else if ($status) {
                $_SESSION['flag'] = 'true';
                
                if ($userName == 'admin') {
                    header('location: ../view/adminHome.php');
                }
                else if($userName !='admin') {
                    header('location: ../view/home.php');
                    //print_r($status);
                    $_SESSION['Phone']=$status['Phone'];
                }
            }
               
    
    
    
        else{
            echo "invalid user!";
            ?>
            <center>
                <h3>Not a valid user!! Don't worry register now</h3>
            <a href="../controller/signup.php">Register Now </a>
            </center>
            <?php
        }
       
        }
    }
?>
