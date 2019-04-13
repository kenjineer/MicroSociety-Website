<!doctype html>
<html lang="en">
  <head>
    <title>MicroSociety Official</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,900" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="images/cpe_microsoc_eP7_icon.ico" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nivo-slider-theme.css">
    <link rel="stylesheet" href="css/responsive.css">
  </head>
  <body>
    
    <header role="banner">
     
      <nav class="navbar navbar-expand-md navbar-dark bg-light">
        <div class="container">
          <a class="navbar-brand absolute" href="indexlogin.php">Micro-Society</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" href="indexlogin.php">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="courses.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Events</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="regcpega.php">CpE General Assembly</a>
                  <a class="dropdown-item" href="regcpesem.php">CpE Technology Enrichment Seminar</a>
                  <a class="dropdown-item" href="regcpedays.php">CpE Days</a>
                  <a class="dropdown-item" href="regedays.php">Engineering Days</a>
                </div>

              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ICpEP</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="icpepmem.php">Membership</a>
                  <a class="dropdown-item" href="icpeptb.php">Team Building</a>
                  <a class="dropdown-item" href="icpepga.php">General Assembly</a>
                  <a class="dropdown-item" href="icpepchal.php">CpE Challenge</a>
                  <a class="dropdown-item" href="icpepnatcon.php">National Convention</a>
                  <a class="dropdown-item" href="icpeplympics.php">CpElympics</a>
                  <a class="dropdown-item" href="icpepcon.php">Research Conference</a>
                </div>

              </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutlogin.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contactlogin.php">Contact</a>
              </li>
            </ul>
            <ul class="navbar-nav absolute-right">
              <li class="nav-item">
                <a href="#" class="nav-link"><?php session_start(); echo $_SESSION["u_name"];?></a>
              </li>
              <li class="nav-item">
                <a href="index.html" class="nav-link" action="includes/logout-inc.php">Logout</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_11.jpg);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-8 text-center">

            <div class="mb-5 element-animate">
              <br><br><br><br><br><br>
              <h1>Computer Engineering</h1>
              <p class="lead">University of Perpetual Help System Laguna<br>Binan Campus</p>
              <br><br>
            </div>

            
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
  
    <section class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2>Upcoming Events</h2>
          </div>
        </div>
        <div class="row top-course">
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="icpepmem.php" class="course">
              <img src="images/member.jpg" alt="Image placeholder">
              <h2>Membership for ICpEP Region4-A '18-'19</h2>
              <p>Register Now!</p>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="icpepga.php" class="course">
              <img src="images/Cpeyesta.jpg" alt="Image placeholder">
              <h2>ICpEP.SE-R4A General Assembly and CpEyesta</h2>
              <p>Register Now!</p>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="icpeptb.php" class="course">
              <img src="images/TB.jpg" alt="Image placeholder">
              <h2>ICpEP.SE-R4A Team Building</h2>
              <p>Register Now!</p>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="icpeplympics.php" class="course">
              <img src="images/Cpelympics.jpg" alt="Image placeholder">
              <h2>ICpEP.SE-R4A CpElympics 2018</h2>
              <p>Register Now!</p>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="regcpega.php" class="course">
              <img src="images/GA.jpg" alt="Image placeholder">
              <h2>UPHSL-MicroSociety General Assembly</h2>
              <p>Register Now!</p>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="icpepchal.php" class="course">
              <img src="images/Cpechal.jpg" alt="Image placeholder">
              <h2>ICpEP.SE-R4A 3rd CpE Challenge</h2>
              <p>Register Now!</p>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    
  
    <footer class="site-footer" style="background-image: url(images/big_image_3.jpg);">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
            <h3>About</h3>
            <p>This is the Official Website of University of Perpetual Help System - Laguna MicroSociety.</p>
          </div>
          <div class="col-md-6 ml-auto">
            <div class="row">
              <div class="col-md-4">
                <ul class="list-unstyled">
                  <li><a href="aboutlogin.html">About Us</a></li>
                  <li><a href="contactlogin.html">Contact Us</a></li>
                  <li><a href="index.html" action="includes/logout-inc.php">Logout</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | MicroSociety
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>

    
    <script src="js/main.js"></script>
  </body>
</html>