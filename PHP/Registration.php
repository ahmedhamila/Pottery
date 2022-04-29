<?php

function photoManagement($photo,$ID)
{
    $photoName=$photo['name'];
    $photoSize=$photo['size'];
    $photoError=$photo['error'];
    $photoTmp=$photo['tmp_name'];
    $photoArr=explode('.',$photoName);
    $photoExt=strtolower(end($photoArr));
    if($photoError!=0)
    {
        header("location: ../Home.php?error=PhotoError");
    }
    if($photoSize>500000)//500mb
    {
        header("location: ../Home.php?error=PhotoTooBig");
    }

    $photoNewName=uniqid('',true).".".$photoExt;
    print_r($photoNewName."\n");
    $photoDestination="../Uploads/'$ID'/".$photoNewName;
    print_r($photoDestination."\n");
    if (!file_exists("../Uploads/'$ID'")) {
        mkdir("../Uploads/'$ID'", 0777, true);
    }

    move_uploaded_file($photoTmp,$photoDestination);

    return $photoNewName;
}


session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,"global_database");

$email=$_POST['Email'];
$adresse=str_replace("'", "\'", htmlspecialchars($_POST['Adresse']));
$phone=$_POST['Phone'];
$password=md5($_POST['Password']);
$ID=uniqid(rand(),true);

$s="select * from platform_users where mail_user = '$email'";

$result = mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num > 0)
{
    header("location: ../Home.php?error=EmailExists");
}
else
{
    $role="Client";
    $dest="NULL";
    if(isset($_FILES['Photo']))
    {
        echo "in";
        $photo=$_FILES['Photo'];
        $dest=photoManagement($photo,$ID);
    }
    $reg="insert into platform_users(identifiant_user,mdp_user,type_user,mail_user,adresse_user,telephone_user,photo_user) values('$ID','$password','$role','$email','$adresse','$phone','$dest');";
    $rs=mysqli_query($con,$reg);
    $_SESSION["Email"]=$email;
    //header("location: ./Client.php");
}

?>