<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Signup</title>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="../Css/Company-Signup.css">
</head>
<body>
    <div class="jumbotron vertical-center">
        <div class="container align-middle">
            <div class="row">
                <div class="col-6 ">
                    <h3>Sign up</h3>
                    <?php
                        
                        if(isset($_GET["error"]))
                        {
                            if($_GET["error"]=="CodeFiscalTaken")
                            {
                                echo "
                                <div class='alert alert-danger d-flex align-items-center' role='alert'>
                                <svg class='bi flex-shrink-0 me-2' width='24' height='12' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>
                                <div>
                                  <h4 style='text-align : center; '>Code Fiscal Already Taken<br>
                                  Please verify your information</h4>
                                </div>
                              </div>
                              ";
                            }
                            if($_GET["error"]=="UsernameTaken")
                            {
                                echo "
                                <div class='alert alert-danger d-flex align-items-center' role='alert'>
                                <svg class='bi flex-shrink-0 me-2' width='24' height='12' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>
                                <div>
                                  <h4 style='text-align : center; '>Username Already Taken<br>
                                  Please Use Another Username</h4>
                                </div>
                              </div>
                              ";
                            }
                        }
                    ?>
                    <form class="form-horizontal" action="./Company-Registration.php" method="POST">
                        <fieldset>
                            <div id="legend">
                                <legend class="text-left sub">Company Inforamtion</legend>
                            </div>
                            <div class="form-element">
                            <!-- Company name -->
                                <label for="company">Company Name</label>
                                <input  type="text" id="company" name="company" placeholder="Enter Company name" required autofocus autocomplete="off" pattern="[A-Z][A-Z a-z0-9]+" title="Should start with Uppercase letter(minimum length=2)">
                            </div>
                            <div class="form-element">
                            <!-- Code fiscal -->
                                <label for="CodeF">Company Tax Code(Code Fiscal)</label>
                                <input  type="text" id="CodeF" name="CodeF" placeholder="Enter Tax Code" pattern="[A-Z0-9]{8}" title="Should contain 8 characters(only uppercase letters and numbers)" required autocomplete="off">
                            </div>
                        </fieldset>
                        <fieldset>
                            <div id="legend">
                                <legend class="text-left sub">Admin Inforamtion</legend>
                            </div>
                            <div class="form-element">
                            <!-- Name -->
                                <label for="name">First Name</label>
                                <input  type="text" id="name" name="name" placeholder="Enter Admin First Name" pattern="[A-Z][a-z]{1,30}" title="Should start with uppercase letter(minimum length=2)" required autocomplete="off">
                                
                            </div>
                            <div class="form-element">
                            <!-- Lastname -->
                                <label for="lastname">Last Name</label>
                                <input  type="text" id="lastname" name="lastname" placeholder="Enter Admin Last Name" pattern="[A-Z][a-z]{1,30}" title="Should start with uppercase letter(minimum length=2)" required autocomplete="off">
                                
                            </div>
                            <div class="form-element">
                            <!-- Username -->
                                <label for="username">Username</label>
                                <input  type="text" id="username" name="username" placeholder="Enter Username" minlength="2" required autocomplete="off">
                                
                            </div>
                        
                            <div class="form-element">
                            <!-- E-mail -->
                                <label for="email">E-mail</label>
                                <input  type="text" id="email" name="email" placeholder="Enter Email" pattern="/^((?!\.)[\w-_.]*[^.])(@\w+)(\.\w+(\.\w+)?[^.\W])$/gim;" required autocomplete="off">
                                
                            </div>
                        
                            <div class="form-element">
                            <!-- Password-->
                                <label for="password">Password</label>
                                <input  type="password" id="password" name="password" placeholder="Enter Passsword" minlength="5" required autocomplete="off">
                                
                            </div>
                            <div class="form-element">
                            <!-- Button -->
                                <input  type="submit" class="buttn" formaction="./Company-Registration.php" value="Register" >
                            </div>
                        </fieldset>
                    </form>
                </div>
                
            </div>
            
        </div>
    </div>
    
</body>
</html>