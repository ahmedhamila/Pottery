<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,"global_database");

$email=$_POST['Email'];
$password=md5($_POST['Password']);

$s="select * from platform_users where mail_user = '$email' and mdp_user = '$password' ;";

$result = mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num == 1)
{
    $role=mysqli_fetch_row(mysqli_query($con,"select type_user from platform_users where mail_user ='$email' and mdp_user = '$password'; "))[0];
    if($role=="Client")
    {
        $_SESSION["Email"]=$email;
        header("location: ./Client.php");
    }
    else if($role=="Global_Admin")
    {
        $_SESSION["Email"]=$email;
        $_SESSION["Role"]=$role;
        $_SESSION["LoggedIn"]=true;
        header("location: ./GlobalAdmin.php");
    } 
    else
    {
        $_SESSION["LoggedIn"]=true;
        $_SESSION["Email"]=$email;
        header("location: ./Admin.php?Page=Dashboard");
    }
        
}
else
{
    header("location: ../Home.php?error=InvalidInfo");
}

?>