<?php
  session_start();
  if (!isset($_SESSION['userlogin'])) {
    header("location: ../userlogin.php");
  }
  if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION);
    header("location: ../userlogin.php");
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="..\style\futsal-style.css">

    <script src="https://kit.fontawesome.com/c63ef4dfe1.js" crossorigin="anonymous"></script>

    <title>Futsal Nepal</title>
  </head>
  <body>
    <header class="header">
      <div class="container-custom">
      <nav class="nav">
        
          <a href="" class="logo"> <img src="..\img\logo.png"></a>
          <div  class="hamburger-menu">
             <i class="fas fa-bars"></i>
             <i class="fas fa-times"></i>
          </div>

          <ul class="nav-list">
            <li class="nav-item">
              <a href="../html/index.php" class="nav-link"><i class="fas fa-home"></i>Home</a>
            </li>
            <li class="nav-item">
              <a href="futsal.php" class="nav-link"><i class="fas fa-futbol"></i>Futsal</a>
            </li>
            <li class="nav-item">
              <a href="contact.php" class="nav-link"><i class="fas fa-phone-alt"></i>Contact</a>
            </li>
             <li class="nav-item">
              <a href="index.php?logout=true" class="nav-link"><i class="fas fa-sign-out-alt"></i>Log Out</a>
            </li>
            
          </ul>
        </div>
      </nav>
    </header>

    <section id="slides">
      <div class="slides">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../img/team.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../img/futsal-field-at-night.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../img/kick-off.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
         <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </button>
        </div>

      </div>
    </section>

    <section id="futsal-overview" >
      <div class="container-custom">
        <div class="futsal-overview">
          <h1>Futsals</h1>
          <!-- First Row -->
          <div class="container-fluid">
            <div class="row">
              <div class="card-deck">
                <div class="card">
                  <img src="../img/download.jfif" class="card-img-top" alt="Futsal">
                  <div class="card-body">
                    <h5 class="card-title">Shankhamul Futsal</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted"><a href="shankhamulfutsal.php">View Details</a></small></p>
                  </div>
                </div>
                <div class="card">
                  <img src="..\img\images.jfif" class="card-img-top" alt="Futsal">
                  <div class="card-body">
                    <h5 class="card-title">Buddhanagar Futsal</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                     <p class="card-text"><small class="text-muted"><a href="#shankhamul">View Details</a></small></p>
                  </div>
                </div>
                <div class="card">
                  <img src="../img/istockphoto-921045790-170667a.jpg" class="card-img-top" alt="Futsal">
                  <div class="card-body">
                    <h5 class="card-title">Hardik Futsal </h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted"><a href="#shankhamul">View Details</a></small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Second Row -->
          <div class="container-fluid">
            <div class="row">
              <div class="card-deck">
                <div class="card">
                  <img src="../img/download.jfif" class="card-img-top" alt="Futsal">
                  <div class="card-body">
                    <h5 class="card-title">Kick Futsal</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted"><a href="#shankhamul">View Details</a></small></p>
                  </div>
                </div>
                <div class="card">
                  <img src="..\img\images.jfif" class="card-img-top" alt="Futsal">
                  <div class="card-body">
                    <h5 class="card-title">Baneshwor Futsal</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                     <p class="card-text"><small class="text-muted"><a href="#shankhamul">View Details</a></small></p>
                  </div>
                </div>
                <div class="card">
                  <img src="../img/istockphoto-921045790-170667a.jpg" class="card-img-top" alt="Futsal">
                  <div class="card-body">
                    <h5 class="card-title">Wembly Futsal </h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted"><a href="#shankhamul">View Details</a></small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!--Footer-->
    <footer id="footer">
        <div class="container">
          <div class="row fot-up">
            <div class="col-md-6 col-xs-12">
              <div><img src=""></div>
            </div>
            <div class="col-md-6 col-xs-12">
              <div class="fot-ico">
                <a href="#facebook"><i class="fab fa-facebook pad-ico"></i></a>
                <a href="#instagram"><i class="fab fa-instagram pad-ico"></i></a>
                <a href="#twitter"><i class="fab fa-twitter pad-ico"></i></a>
                <a href="#github"><i class="fab fa-github pad-ico"></i></a>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-3 ">
              <h5>OUR COMPANY</h5>
              <p>HOW WE WORK</p>
              <p>WHY INSURE</p>
              <p>VIEW PLANS</p>
              <p>REVIEWS</p>
            </div>
            <div class="col-md-3">
              <h5>HELP ME</h5>
              <p>FAQ</p>
              <p>TERMS OF USE</p>
              <p>PRIVACY POLICY</p>
              <p>COOKIES</p>
            </div>
            <div class="col-md-3 ">
              <h5>CONTACT</h5>
              <p>SALES</p>
              <p>SUPPORT</p>
              <p>LIVE CHAT</p>
              
            </div>
            <div class="col-md-3">
              <h5>OTHERS</h5>
              <p>CARRERS</p>
              <p>PRESS</p>
              <p>LICENSES</p>
              
            </div>
          </div>

        </div>
  
    </footer>


     <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script type="text/javascript" src="..\js\webpagenav.js"></script>
 </html>
