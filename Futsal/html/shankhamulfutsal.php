<?php
include('../userbookings.php');
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
    <link rel="stylesheet" type="text/css" href="..\style\individiualfutsal.css">

    <script src="https://kit.fontawesome.com/c63ef4dfe1.js" crossorigin="anonymous"></script>

    <title>Shankhamul Futsal</title>
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

    <section id="main-content">
      <h1>Shankhamul Futsal</h1>
      <div class="about-us container">
        <div class="row">
        <div class="left-content col-md-6">
          <h2>About US</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed laoreet nisl. Donec auctor tortor mauris, vitae hendrerit elit venenatis non. Sed finibus venenatis nibh, a feugiat mauris. Etiam rutrum in lectus tincidunt efficitur. Fusce sollicitudin tristique pharetra. Donec facilisis sem nisl, eu porta libero maximus eget. Praesent aliquam ipsum nunc, non interdum leo dictum a. Praesent nisl velit, ornare quis accumsan eget, posuere ut eros. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
          
        </div>
        <div class="right-content col-md-6">
          <h2>Details</h2>
            <table class="table table-hover">
                <thead>
                  <tr>
                    
                    <th scope="col">Days</th>
                    <th scope="col">Time</th>
                    <th scope="col">Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    
                    <td>Monday-Friday</td>
                    <td>5 a.m. to 9 p.m.</td>
                    <td>Rs.1500</td>
                  </tr>
                  <tr>
                    
                    <td>Sunday and Saturday</td>
                    <td>5 a.m. to 9 p.m.</td>
                    <td>Rs.1800</td>
                  </tr>
                  <tr>
                    
                    <td>Public Holiday</td>
                    <td>5 a.m. to 9 p.m.</td>
                    <td>Rs.1800</td>
                  </tr>
                </tbody>
            </table>
        </div>
      </div>
    </div>

    </section>

    <section id="book-now">
      <h1>Book Now</h1>

      <div class="book-form">

            <form method="POST" action="shankhamulfutsal.php" class="container">
              <?php include('../registration/error.php')?>
              <div class="row">
              <div class="col-md-6">
                <input type="text" name="username" placeholder = "Name" class="form-control">
              </div>

              <div class="col-md-6">
                <input type="text" name="lastname" placeholder="Last Name" class="form-control">
              </div>

              <div class="col-md-12">
                <input type="tel" name="phonenum" placeholder="Phone Number" class="form-control" required>
              </div>

              <div class="col-md-12">
                <input type="email" name="email" placeholder="abc@gamil.com" class="form-control">
              </div>

              <div class="col-md-3">
                <input type="time" name="time" class="form-control" required>
              </div>

              <div class="col-md-3">
                <input type="time" name="endtime" class="form-control" required>
              </div>


              <div class="col-md-6">
                <input type="date" name="date" class="form-control" required>
              </div>

               <div class="col-md-12">
                <input type="text" name="futsalname" class="form-control" value="shankhamul futsal">
              </div>



              </div>

              <button class="btn btn-primary" type="submit" value="submit"> Submit</button>

            </form>
          
       </div>

    </section>


    <footer id="footer">
        <div class="container">
          <div class="row fot-up">
            <div class="col-md-6 col-xs-12">
              <div><img src="">Footsal</div>
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

  </body>
</html>