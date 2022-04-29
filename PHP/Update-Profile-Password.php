<?php 

session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,"global_database");


$password=md5($_POST['Password']);

$mail=$_SESSION["Email"];

if(mysqli_num_rows(mysqli_query($con,"select * from platform_users where mail_user='$mail' and mdp_user = '$password'"))==1)
{
    $newpassword=md5($_POST['NewPassword']);
    $newpasswordconfirm=md5($_POST['NewPasswordConfirm']);
    if($newpassword==$newpasswordconfirm)
    {
        mysqli_query($con,"update platform_users set mdp_user = '$newpassword' where mail_user='$mail' and mdp_user = '$password'");
        header("location: ./GlobalAdminProfile.php?status=success2");
    }
    else
    {
        header("location: ./GlobalAdminProfile.php?error=confirmPassword");
    }
}
else
{
    header("location: ./GlobalAdminProfile.php?error=wrongPassword");
}

?>