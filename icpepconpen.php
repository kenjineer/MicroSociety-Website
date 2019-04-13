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
    <?php
      session_start(); // para tumakbo sa buong site
      include_once 'includes/dbmain.php';

      $sql = "SELECT * FROM users_cpe WHERE stud_sname='$_SESSION[u_name]'";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);
      if ($row = mysqli_fetch_assoc($result))
      {
          $_SESSION['u_icpepcon']= $row['icpepcon'];
      }
    ?>
    <script> reg = "<?php echo $_SESSION['u_icpepcon']; ?>";</script>
    <header role="banner">
     <section>
      <style>
        .alert {
            padding: 20px;
            background-color: #f44336;
            color: white;
            opacity: 1;
            transition: opacity 0.6s;
            margin-bottom: 15px;
        }

        .alert.success {background-color: #4CAF50;}
        .alert.info {background-color: #2196F3;}
        .alert.warning {background-color: #ff9800;}

        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .closebtn:hover {
            color: black;
        }
      </style>
      <div class="alert info">
          <span class="closebtn">&times;</span>  
          <strong>Pending.</strong> Come back when your requirements had been submitted.
      </div>
    </section>
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
                <a href="#" class="nav-link"><?php echo $_SESSION["u_name"];?></a>
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

    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_11.jpg);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-8 text-center">

            <div class="mb-5 element-animate">
              <h1>ICpEP Research Conference</h1><br><br><br>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->


    <section class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-5 box">
            <h2 class="mb-5">Register to ICpEP Research Conference</h2>
            <form action="includes/register-inc.php" method="post">
                  <div class="row">
                    <div class="col-md-10 form-group">
                      <p>Registration Status: <?php echo $_SESSION["u_icpepcon"];?></p>
                      <button type="submit" name="icpepcon_submit" class="btn btn-primary" id="register">Register</button>
                    </div>
                  </div>
                </form>
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
    <script src="js/registerbutton.js"></script>

    
    <script src="js/main.js"></script>
  </body>
</html>