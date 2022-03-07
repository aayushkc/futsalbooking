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

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../style/contact.css">
	<title>Contact</title>
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
  <section id="contact">
		  <h1>CONTACT US</h1>
		  <div class="container">
		  	<div class="row">
				  <div class="col-md-6">
					  <address>
						  <div>
						  	<i class="fas fa-map-marker-alt">
						  	</i>
						  </div>
						  <div> 321 Awesome Street
						</div>
						  
						  <div>
						  	<i class="far fa-envelope"></i>info@companyname.com
						  </div>
						  	
						  <div>
						  	<i class="fas fa-phone" style="transform: rotate(120deg)"></i>+1 800 123 1234
						  </div>
					  </address>
					  
				  </div>
				  <div class="col-md-6">
					  <form>
						  <div class="form-group">
					  <input type="text" placeholder="Your Name">
						  </div>
						   <div class="form-group">
					  <input type="text" placeholder="Your Email">
						  </div>
						   <div class="form-group">
				      <input type="text" placeholder="Subject">
						  </div>
						   <div class="form-group">
				      <textarea placeholder="Message"></textarea>
						  
						  </div>
						   <div class="form-group">
					          <button type="submit" class="btn">Submit</button>
						  </div>
					  </form>
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

</body>
</html>