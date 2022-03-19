<div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
        <div class="d-flex align-items-center">
            <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
            <h2 class="fs-2 m-0">Dashboard</h2>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user me-2"></i><?php echo $_SESSION['Username']; ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="./Logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <?php
        $con=mysqli_connect('localhost','root','');
        mysqli_select_db($con,"pottery_db");
        $id=$_SESSION['ID'];
        $result=mysqli_query($con,"select * from article_demo where ID = '$id';");
        $row=mysqli_fetch_array($result);
    ?>
    <div class="container mt-5">
        <h3 class="fs-4 mb-3">Add Article</h3>
        <form action="./Update-Product.php" class="row g-3" method="POST">
            <div class="col-md-6">
                <label for="name">Article Name</label>
                <input type="text" class="form-control" id="name" name="name" required value="<?php echo $row["ArticleName"] ?>">
            </div>
            <div class="col-md-6">
                <label for="price">Article Price</label>
                <input type="number" step="any" class="form-control" id="price" name="price" required value="<?php echo $row["ArticlePrice"] ?>">
            </div>
            <div class="col-md-12">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description"  rows="5" required><?php echo $row["ArticleDescription"] ?></textarea>
            </div>
            <div class="col-md-12 d-flex justify-content-end">
                <input type="submit" value="Update" class="btn btn-primary" formaction="./Update-Product.php">
            </div>
        </form>
    </div>                
</div>