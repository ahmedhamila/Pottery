<?php

session_start();

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"pottery_db");

$name=str_replace("'", "\'", htmlspecialchars($_POST['name']));
$price=htmlspecialchars($_POST['price']);
$description=str_replace("'", "\'", htmlspecialchars($_POST['description']));

mysqli_query($con,"insert into article_demo(ArticleName,ArticlePrice,ArticleDescription) values('$name','$price','$description');");

header("location: ./Admin.php?Page=Product");

?>