<?php
include_once 'config.php';
function user_log($username,$password){
    $admin_username=$username;
    $admin_password=$password;
$connection=config();
$sql="SELECT * FROM admin_tbl WHERE username='$admin_username'";
$res=mysqli_query($connection,$sql);
$row=mysqli_fetch_assoc($res);

    if($row['password']==$admin_password){
        session_start();
        $_SESSION['username']=$row['username'];
      header("location:dashbord.php?m=index&p=index");
    }
}
