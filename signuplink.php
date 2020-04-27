<?php

if(isset($_POST['submit']))
{  
    include_once 'dblink.php';
    $first=mysqli_real_escape_string($conn,$_POST['first']);
    $last=mysqli_real_escape_string($conn,$_POST['last']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $uid=mysqli_real_escape_string($conn,$_POST['uid']);
    $pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
        if(empty($first)||empty($last)||empty($email)||empty($uid)||empty($pwd))
        {
            header("location: signup.php?signup=failed");  
        }
        else   
        {
            $_SESSION['user']=$uid;
            if(!filter_var($email,FILTER_VALIDATE_EMAIL))
            {
                header("location: signup.php?signup=invalidemail"); 
            }
            
            else
            {
                $sql="INSERT INTO users(user_first,user_last,user_email,user_uid,user_pwd)
                VALUES ('$first','$last','$email','$uid','$pwd');";
                mysqli_query($conn,$sql);
                header("location: login.php?signup=successfull");
            }    
        }
}
else
{
    header("location: signup.php?signup=failed");  
}    
?>
<!-- NOTE:This is a simple project on Signup and Login System.
            You can search the web for more error handlers to prevent problems.-->

