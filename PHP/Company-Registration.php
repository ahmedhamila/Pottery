<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,"pottery_db");

$company=$_POST["company"];
$CodeF=$_POST["CodeF"];
$name=$_POST["name"];
$lastname=$_POST["lastname"];
$username=$_POST["username"];
$email=$_POST["email"];
$pass=md5($_POST["password"]);

$s="select * from users where Username = '$username'";

$result = mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num > 0)
{
    header("location: ./Company-Signup.php?error=UsernameTaken");
}
else
{
    if(mysqli_num_rows(mysqli_query($con,"select * from companies where CodeFiscal = '$CodeF' ;"))>0)
    {
        header("location: ./Company-Signup.php?error=CodeFiscalTaken");
    }
    else{
        $role="Admin";
        mysqli_query($con,"insert into users(Username,Password,Role) values('$username','$pass','$role');");
        $id = mysqli_fetch_row(mysqli_query($con,"select ID from Users where Username = '$username' and Password = '$pass';"))[0];

        mysqli_query($con,"insert into companies(AdminID,Company,CodeFiscal,Name,LastName,Email) values('$id','$company','$CodeF','$name','$lastname','$email');");
        
        $_SESSION['Username']=$username;
        header("location: ./Admin.php?Page=Dashboard");
    }
    
}

?>