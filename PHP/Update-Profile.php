<?php 

session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,"global_database");



$mail=$_SESSION["Email"];

$adress=str_replace("'", "\'", htmlspecialchars($_POST['adress']));
$phone=$_POST["phone"];
$newmail=$_POST["mail"];


if(strlen($adress)!=0)
{
    mysqli_query($con,"update platform_users set adresse_user = '$adress' where mail_user='$mail'"); 
}
if(strlen($phone)!=0)
{
    mysqli_query($con,"update platform_users set telephone_user='$phone' where mail_user='$mail'");
}
if(strlen($newmail)!=0)
{
    if(mysqli_num_rows(mysqli_query($con,"select * from platform_users where mail_user = '$newmail'")) ==0)
    {
        mysqli_query($con,"update platform_users set mail_user='$newmail' where mail_user='$mail'");
        $_SESSION["Email"]=$newmail;
        
    }
    else
    {
        header("location: ./GlobalAdminProfile.php?error=EmailExists");
    }
    
}


?>