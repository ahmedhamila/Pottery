<?php
    session_start();
    if(!(isset($_SESSION["LoggedIn"] )&& $_SESSION["LoggedIn"]==true))
    {
        header('Location: ../Home.php');
        exit();
    }
    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,"global_database");
    $mail=$_SESSION['Email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="../Css/GlobalAdminProfile.css">
    <title>Profile</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
</head>
<body>
    <div class="container rounded bg-white mt-5 mb-5 ">
        <div class="row">
            <div class="col-md-3 border-right">
            <div class="mt-5 text-left"><a href="./GlobalAdmin.php" class="btn btn-primary profile-button" type="button">< Back to Dashboard</a></div>
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="<?php 
                    echo "../Uploads/"."'".mysqli_fetch_row(mysqli_query($con,"select identifiant_user from platform_users where mail_user ='$mail' ; "))[0]."'"."/".mysqli_fetch_row(mysqli_query($con,"select photo_user from platform_users where mail_user ='$mail' ; "))[0];

                    ?>">
                    <span class="font-weight-bold"><?php echo $_SESSION["Email"]; ?></span><span> </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <?php if (isset($_GET['error']) && $_GET['error']=="EmailExists"){ ?>
                        <div class='alert alert-danger d-flex align-items-center' role='alert'>
                            <h6 style='text-align : center; '>Email Used Already</h6>
                        </div>
                    <?php } ?>
                    <?php if (isset($_GET['status']) && $_GET['status']=="success1"){ ?>
                        <div class='alert alert-success d-flex align-items-center' role='alert' id="success">
                            <h6 style='text-align : center; '>Profile Information Updated Successfully</h6>
                        </div>
                        <!--<script type="text/javascript">
                            $(document).ready(function(){
                                $("#success").fadeOut("slow");
                            });
                        </script>-->
                        
                    <?php  } ?>
                    <form   id="formProfile">
                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels">First Name</label><input type="text" class="form-control" placeholder="First name" value=""></div>
                            <div class="col-md-6"><label class="labels">Last Name</label><input type="text" class="form-control" value="" placeholder="Last name"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="labels">Phone Number</label>
                                <div class="valid1"></div>
                                <input type="text" class="form-control" id="phone" placeholder="<?php echo mysqli_fetch_row(mysqli_query($con,"select telephone_user from platform_users where mail_user ='$mail' ; "))[0];?>" name="phone">
                                
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Address</label>
                                <div class="valid2"></div>
                                <input type="text" class="form-control" id="adresse" placeholder="<?php echo mysqli_fetch_row(mysqli_query($con,"select adresse_user from platform_users where mail_user ='$mail' ; "))[0];?>" name="adress">
                                
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Email</label>
                                <div class="valid3"></div>
                                <input type="text" class="form-control" id="email" placeholder="<?php echo $mail ?>" name="mail">
                                
                            </div>
                            
                        </div>
                        <div class="mt-5 text-center"><input class="btn btn-primary profile-button" type="submit" value="Save Profile"></div>
                    </form>
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center"><span><h4>Modify Password</h4></span></div><br>
                    <?php if (isset($_GET['error']) && $_GET['error']=="wrongPassword"){ ?>
                        <div class='alert alert-danger d-flex align-items-center' role='alert'>
                            <h6 style='text-align : center; '>Password is incorrect</h6>
                        </div>
                    <?php } ?>

                    <?php if (isset($_GET['error']) && $_GET['error']=="confirmPassword"){ ?>
                        <div class='alert alert-danger d-flex align-items-center' role='alert'>
                            <h6 style='text-align : center; '>New Password Is Not Compatible With Confirmation Password</h6>
                        </div>
                    <?php } ?>
                    <?php if (isset($_GET['status']) && $_GET['status']=="success3"){ ?>
                        <div class='alert alert-success d-flex align-items-center' role='alert' id="success">
                            <h6 style='text-align : center; '>Password Changed Successfully</h6>
                        </div>
                        <!--<script type="text/javascript">
                            $(document).ready(function(){
                                $("#success").fadeOut("slow");
                            });
                        </script>-->
                        
                    <?php } ?>
                    <form action="./Update-Profile-Password.php" method="POST">
                        <div class="col-md-12"><label class="labels">Current Password</label><input type="password" class="form-control" placeholder="Current Password" name="Password" required></div> <br>
                        <div class="col-md-12"><label class="labels">New Password</label><input type="password" class="form-control" placeholder="New Password" name="NewPassword" required></div><br>
                        <div class="col-md-12"><label class="labels">Confirm New Password</label><input type="password" class="form-control" placeholder="Confirm New Password" name="NewPasswordConfirm" required></div>
                        <div class="mt-5 text-center"><input type="submit" class="btn btn-primary profile-button" value="Save Password"></div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    <script src="../Javascript/Update-Profile.js"></script>
</body>
</html>