<?php
session_start();

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"pottery_db");

$name=str_replace("'", "\'", htmlspecialchars($_POST['name']));
$price=htmlspecialchars($_POST['price']);
$description=str_replace("'", "\'", htmlspecialchars($_POST['description']));
$id=$_SESSION['ID'];
mysqli_query($con,"update article_demo set ArticleName = '$name',ArticlePrice = '$price',ArticleDescription='$description' where ID='$id';");

header("location: ./Admin.php?Page=Product");

?>