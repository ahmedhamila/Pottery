
<?php
    session_start();
    if(!(isset($_SESSION["LoggedIn"] )&& $_SESSION["LoggedIn"]==true))
    {
        header('Location: ../Home.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<link rel="stylesheet" href="../Css/GlobalAdmin.css" />
<title>Admin Dashboard</title>
</head>

<body>
<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div style="background-color: #272C4A;" id="sidebar-wrapper">
        <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
            <img src="../Img/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top"></i>Pottery
        </div>
        <div class="list-group list-group-flush my-3">
            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold active">
                <i class="fas fa-tachometer-alt me-2"></i>Dashboard
            </a>
            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold ">
                <i class="fa fa-users me-2"></i>Customers
            </a>
            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold ">
                <i class="fa fa-briefcase me-2"></i>Companies
            </a>
            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold ">
                <i class="fa fa-shopping-bag me-2"></i>Order Management
            </a>
            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold ">
                <i class="fa fa-user me-2"></i>Admin Management
            </a>
            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold ">
                <i class="fa fa-tasks me-2"></i>Tasks
            </a>
            <a href="./Logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">
                <i class="fas fa-power-off me-2"></i>Logout</a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
            <div class="d-flex align-items-center">
                <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                <h2 class="fs-2 m-0" style="color: white;">Dashboard</h2>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        
                        <a class="nav-link dropdown-toggle fw-bold" href="#" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                            <img src="<?php 
                    
                            $con=mysqli_connect('localhost','root','');
                            mysqli_select_db($con,"global_database");
                            $mail=$_SESSION['Email'];
                            echo "../Uploads/"."'".mysqli_fetch_row(mysqli_query($con,"select identifiant_user from platform_users where mail_user ='$mail' ; "))[0]."'"."/".mysqli_fetch_row(mysqli_query($con,"select photo_user from platform_users where mail_user ='$mail' ; "))[0];

                            ?>" class="pro-img" />
                            <?php echo $_SESSION['Email']; ?>
                            
                        </a>
                        
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #272C4A;">
                            <li><a class="dropdown-item" href="./GlobalAdminProfile.php" >Profile</a></li>
                            <li><a class="dropdown-item" href="./Logout.php" >Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container-fluid px-4">
            <div class="row g-3 my-2">
                <div class="col-md-3">
                    <div class="p-3 box shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                            <h3 class="fs-2">0</h3>
                            <p class="fs-5">Customers</p>
                        </div>
                        <i class="fa fa-users fs-1 box-icon"></i>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="p-3 box shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                            <h3 class="fs-2">0</h3>
                            <p class="fs-5">Companies</p>
                        </div>
                        <i class="fa fa-briefcase fs-1 box-icon"></i>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="p-3 box shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                            <h3 class="fs-2">0</h3>
                            <p class="fs-5">Orders</p>
                        </div>
                        <i class="fa fa-shopping-bag fs-1 box-icon"></i>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="p-3 box shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                            <h3 class="fs-2">1</h3>
                            <p class="fs-5">Admins</p>
                        </div>
                        <i class="fa fa-user fs-1 box-icon"></i>
                    </div>
                </div>

            </div>
            <div class="clearfix"></div>
            <div class="row my-5">
                <div class="col-md-7 box-col" >
                        
                </div>
                <div class="col-md-4  box-col" >
                    
                </div>
            </div>

        </div>
    </div>
</div>
    
<!-- /#page-content-wrapper -->
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    var el = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function () {
        el.classList.toggle("toggled");
    };
</script>
</body>

</html>