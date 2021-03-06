<!-- Page Content -->
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
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-products-tab" data-bs-toggle="pill" data-bs-target="#pills-products" type="button" role="tab" aria-controls="pills-products" aria-selected="true">Products</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-add-tab" data-bs-toggle="pill" data-bs-target="#pills-add" type="button" role="tab" aria-controls="pills-add" aria-selected="false">Add Product</button>
        </li>
    </ul>
        <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-products" role="tabpanel" aria-labelledby="pills-products-tab">
            <div class="container-fluid px-4">
                <div class="row my-5">
                    <h3 class="fs-4 mb-3">Your Articles</h3>
                    <div class="col">
                        <?php
                            $con=mysqli_connect('localhost','root','');
                            mysqli_select_db($con,"pottery_db");
                            echo "
                            <div class='table-responsive'>
                                <table class='table bg-white rounded shadow-sm  table-hover'>
                                <thead>
                                    <tr>
                                        <th scope='col' width='50'>#</th>
                                        <th scope='col' >Product</th>
                                        <th scope='col'>Description</th>
                                        <th scope='col'>Price</th>
                                        <th style='text-align:center;' scope='col' width='250'>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>";

                            $result=mysqli_query($con,"select * from article_demo;");
                            $i=1;
                            while($row_article=mysqli_fetch_array($result))
                            {
                                echo "
                                <tr>
                                    <th scope='row'>".$i."</th>
                                    <td>".($row_article['ArticleName'])."</td>
                                    <td>".($row_article['ArticleDescription'])."</td>
                                    <td>".($row_article['ArticlePrice'])."</td>
                                    <td>
                                    <div style='display: flex; flex-direction: row; justify-content: flex-end;'>
                                        <a href='./Admin.php?Page=Product&Delete=".$row_article['ID']."' class='btn btn-danger'>Delete</a>
                                        <a href='./Admin.php?Page=Product&Modify=".$row_article['ID']."' class='btn btn-success'>Modify</a>
                                        <a href='./Admin.php?Page=Product&Details=".$row_article['ID']."' class='btn btn-info'>Details</a>
                                    </div>
                                    </td>
                                </tr>
                                ";
                                $i++;
                            }
                            echo "
                                    </tbody>
                                </table>
                            </div>
                            ";
                        ?>
                    
                            
                            
                    </div>
                </div>
            </div>       
        </div>
        <div class="tab-pane fade" id="pills-add" role="tabpanel" aria-labelledby="pills-add-tab">
            <div class="container mt-5">
                <h3 class="fs-4 mb-3">Add Article</h3>
                <form action="./Add-Product.php" class="row g-3" method="POST">
                    <div class="col-md-6">
                        <label for="name">Article Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="price">Article Price</label>
                        <input type="number" step="any" class="form-control" id="price" name="price" required>
                    </div>
                    <div class="col-md-12">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="description"  rows="5" required></textarea>
                    </div>
                    <div class="col-md-12 d-flex justify-content-end">
                        <input type="submit" value="Add Product" class="btn btn-primary" formaction="./Add-Product.php">
                    </div>
                </form>
            </div>                
                
        </div>
    </div>
   
    <?php
        if(isset($_GET['Delete']))
        {
            $con=mysqli_connect('localhost','root','');
            mysqli_select_db($con,"pottery_db");
            $id=$_GET['Delete'];
            mysqli_query($con,"delete from article_demo where ID='$id' ;");
            echo("<script>location.href = './Admin.php?Page=Product';</script>");
        }
        if(isset($_GET['Modify']))
        {
            $_SESSION['ID']=$_GET['Modify'];
            echo("<script>location.href = './Admin.php?Page=Modify';</script>");
        }
    ?>    
</div>