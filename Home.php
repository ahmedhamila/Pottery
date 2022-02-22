<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/Css/Home.css" rel="stylesheet">
    <link href="/Css/footer.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="./Css/Home.css">
    <link rel="stylesheet" href="./Css/footer.css">
    <title>Pottery Plateform</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg fixed-top activate-menu navbar-light bg-light" style="visibility:visible;">
        <div class="container-fluid">
            <div class="container-sm" id="brand-con">
                <a class="navbar-brand" href="Home.html">
                  <img src="Img/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                  Pottery
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav " id="navitems">
                    <li>
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">Espace entreprise</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">Nos produits</a>
                    </li>
                    
                    <li>
                        <a class="nav-link" href="#">L'équipe</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#Contact">Contact</a>
                    </li>
                    
                </ul>
                
                <div class="navbar-nav ml-auto " id="log-sign">
                    <div class="nav-item ">
                        <button type="button" class="btn" id="login" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                        
                    </div>
                    <div class="nav-item" >
                        <button type="button" class="btn" id="signup" data-bs-toggle="modal" data-bs-target="#signupModal">Sign up</button>
                        
                    </div>
                </div>
            </div>
        </div>
        
    </nav>
    <br>
    <br>
    <br>
  
  <!-- Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h5 class="modal-title w-100" >Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="./PHP/Validation.php" method="post">
                <div class="form-element">
                <div class="form-element">
                    <label for="Username">Username</label>
                    <input type="text" id="Username" name="Username" placeholder="Enter Username" title="Must Contain at least 2 characters(starts with uppercase letter)" pattern="[A-Z][a-zA-Z0-9]+" required>
                </div>
                </div>
                <div class="form-element">
                    <label for="Password">Password</label>
                    <input type="password" id="Password" name="Password" placeholder="Enter Password" required>
                </div>
                <div class="form-element">
                    <div class="modal-footer">
                        <input type="submit" class="btn" formaction="./PHP/Validation.php" value="Log in">
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModal" aria-hidden="true"> 
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h5 class="modal-title w-100" >Sign up</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="./PHP/Registration.php" method="post">
                <div class="form-element">
                    <label for="Username">Username</label>
                    <input type="text" id="Username" name="Username" placeholder="Enter Username" required>
                </div>
                <div class="form-element">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="Password" placeholder="Enter password" required>
                </div>
                <div class="form-element">
                    <a href="./PHP/Company-Signup.php">Are you and entrepreneur ? sign up here</a>
                </div>
                <div class="form-element">
                    <div class="modal-footer">
                        <input type="submit" class="btn" formaction="./PHP/Registration.php" value="Sign up">
                    </div>
                </div>
            </form>
        </div>
        
      </div>
    </div>
  </div>
    <div class="page-wrapper" >
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./Img/carousel-img2.jpg" class="d-block w-100 fixed-height" alt="...">
                    <div class="carousel-caption d-none d-md-block topleft">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./Img/carousel-img1.jpg" class="d-block w-100 fixed-height" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./Img/carousel-img3.jpg" class="d-block w-100 fixed-height" alt="...">
                    <div class="carousel-caption d-none d-md-block topright">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <hr id="footer-hr">
    <div class="footer">
        <section id="Contact">
            <div class="footer-content">
                <div class="footer-section about">
                    <h1 class="logo-text">Pottery</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, eum. Hic quaerat, illo architecto dolor velit sed? Sed tenetur repudiandae a fuga eveniet reprehenderit earum vitae sunt, vel alias dolorem.</p>
                </div>
                <div class="footer-section contact-details">
                    <h2>Contact</h2>
                    <br>
                    <div class="contacts">
                        <span><i class="fas fa-phone"></i> &nbsp;88 888 888</span>
                        <span><i class="fas fa-envelope"></i> &nbsp;lorem@gmail.com</span>
                    </div>
                    <div class="socials">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
               &copy; Designed By H.Ahmed
            </div>
        </section>
        
    </div> 
      <script src="./Javascript/Home.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
  </body>
  
</html>