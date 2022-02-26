<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,"pottery_db");

$name=$_POST['Username'];
$pass=md5($_POST['Password']);

$s="select * from users where Username = '$name'";

$result = mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num > 0)
{
    header("location: ../Home.php?error=UsernameExists");
}
else
{
    $role="Client";
    $reg="insert into users(Username,Password,Role) values('$name','$pass','$role');";
    mysqli_query($con,$reg);
    $_SESSION["Username"]=$name;
    header("location: ./Client.php");
}

?>