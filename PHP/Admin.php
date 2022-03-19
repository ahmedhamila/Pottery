
<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="../Css/Admin.css" />
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
                <img src="../Img/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top"></i>Pottery
            </div>
            <div class="list-group list-group-flush my-3">
                <a href="./Admin.php?Page=Dashboard" class="list-group-item list-group-item-action bg-transparent second-text fw-bold <?php if($_GET["Page"]=="Dashboard")echo 'active'; ?>">
                    <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                </a>
                <a href="./Admin.php?Page=Catalog" class="list-group-item list-group-item-action bg-transparent second-text fw-bold  <?php if($_GET["Page"]=="Catalog")echo 'active'; ?>">
                    <i class="fas fa-project-diagram me-2"></i>Catalog
                </a>
                <a href="./Admin.php?Page=Product" class="list-group-item list-group-item-action bg-transparent second-text fw-bold  <?php if($_GET["Page"]=="Product")echo 'active'; ?>">
                    <i class="fas fa-chart-line me-2"></i>Product Management
                </a>
                <a href="./Admin.php?Page=Order" class="list-group-item list-group-item-action bg-transparent second-text fw-bold  <?php if($_GET["Page"]=="Order")echo 'active'; ?>">
                    <i class="fas fa-paperclip me-2"></i>Order Management
                </a>
                <a href="./Logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">
                    <i class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <?php
        if(isset($_GET["Page"]))
        {
            if($_GET["Page"]=="Dashboard")
            {
                include './Dashboard.php';
            }
            else if($_GET["Page"]=="Product")
            {
                include './Product.php';
            }
            else if($_GET["Page"]=="Modify")
            {
                include "./Modify.php";
            }
        }
        ?>
        
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