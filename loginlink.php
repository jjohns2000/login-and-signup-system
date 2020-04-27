<?php
session_start();
if(isset($_POST['submit']))
{
 include "config.php";

 $uname = mysqli_real_escape_string($conn,$_POST['username']);
 $password = mysqli_real_escape_string($conn,$_POST['password']);
 
    if ($uname != "" && $password != "")
    {
        $sql_query = "select count(*) as cntUser from users where user_uid='".$uname."' and user_pwd='".$password."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);
        $count = $row['cntUser'];
            if($count > 0)
            {
                $_SESSION['uname'] = $uname;
                
                header('Location: welcome.php');
            }
            else
            {
                session_destroy();
                header('Location: login.php?login=failed');
            }
    }
    else
    {
        header('Location: login.php?data=incomplete'); 
    }
}
else{
    header('location:login.php?userdata=invalid');
}    
?>
