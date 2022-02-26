<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,"pottery_db");

$name=$_POST['Username'];
$pass=md5($_POST['Password']);

$s="select * from users where Username = '$name' and Password = '$pass' ;";

$result = mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num == 1)
{
    $role=mysqli_fetch_row(mysqli_query($con,"select Role from users where Username ='$name' and Password = '$pass'; "))[0];
    echo $role;
    if($role=="Client")
    {
        $_SESSION["Username"]=$name;
        header("location: ./Client.php");
    }
        
    else
    {
        $_SESSION["Username"]=$name;
        header("location: ./Admin.php?Page=Dashboard");
    }
        
}
else
{
    header("location: ../Home.php?error=InvalidInfo");
}

?>