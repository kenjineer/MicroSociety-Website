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
                  <a class="dropdown-item" href="regcpega.html">CpE General Assembly</a>
                  <a class="dropdown-item" href="regcpesem.html">CpE Technology Enrichment Seminar</a>
                  <a class="dropdown-item" href="regcpedays.html">CpE Days</a>
                  <a class="dropdown-item" href="regedays.html">Engineering Days</a>
                </div>

              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ICpEP</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="icpepmem.html">Membership</a>
                  <a class="dropdown-item" href="icpeptb.html">Team Building</a>
                  <a class="dropdown-item" href="icpepga.html">General Assembly</a>
                  <a class="dropdown-item" href="icpepchal.html">CpE Challenge</a>
                  <a class="dropdown-item" href="icpepnatcon.html">National Convention</a>
                  <a class="dropdown-item" href="icpeplympics.html">CpElympics</a>
                  <a class="dropdown-item" href="icpepcon.html">Research Conference</a>
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

    <section class="site-hero site-hero-innerpage overlay"  data-stellar-background-ratio="0.5" style="background-image: url(images/off1.jpg);background-size: cover; background-repeat: no-repeat; background-position: 200% 50%;">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-8 text-center">	

            <div class="mb-5 element-animate">
			<h1>MicroSociety Officers '18-'19</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2>Meet Your Micro-Society Officers</h2>
          </div>
        </div>
        <section class="school-features text-dark d-flex">

          <div class="inner">
            <div class="media d-block feature text-center">
              <img src="officers/Pres.jpg" alt="Image placeholder" class="mb-3" >
              <div class="media-body">
                <h3 class="mt-0">Kenneth C. Karamihan</h3>
                <p class="instructor-meta">President</p>
				<p> Contact: 09398456478</p>
				<p> E-mail: kennethckaramihan@gmail.com</p>
              </div>
            </div>

            <div class="media d-block feature text-center">
              <img src="officers/VPI.jpg" alt="Image placeholder" class="mb-3">
              <div class="media-body">
                <h3 class="mt-0">Anicia Coleen S. Reyes</h3>
                <p class="instructor-meta">Vice President-Internal</p>
				<p> Contact: 09398456478</p>
				<p> E-mail: aniciasalvania@gmail.com</p>
              </div>
            </div>

            <div class="media d-block feature text-center">
              <img src="officers/VPE.jpg" alt="Image placeholder" class="mb-3">
              <div class="media-body">
                <h3 class="mt-0">Ana Mikaela A. Alonzo</h3>
                <p class="instructor-meta">Vice President-External</p>
				<p> Contact: 09398456478</p>
				<p> E-mail: anamikaelaalonzo@gmail.com</p>
              </div>
            </div>


            <div class="media d-block feature text-center">
              <img src="officers/sec.jpg" alt="Image placeholder" class="mb-3">
              <div class="media-body">
                <h3 class="mt-0">Melchiezedhieck J. Bongao</h3>
                <p class="instructor-meta">Secretary</p>
				<p> Contact: 09398456478</p>
				<p> E-mail: zedhieckjasmine@gmail.com</p>
              </div>
            </div>
          </div>
        </section>


        <section class="school-features text-dark d-flex">

          <div class="inner">
            <div class="media d-block feature text-center">
              <img src="officers/tres.jpg" alt="Image placeholder" class="mb-3">
              <div class="media-body">
                <h3 class="mt-0">Wendel T. Gilbuena</h3>
                <p class="instructor-meta">Overall Treasurer</p>
				<p> Contact: 09398456478</p>
				<p> E-mail: wendeltemprosa@rocketmail.com</p>
              </div>
            </div>

            <div class="media d-block feature text-center">
              <img src="officers/FAT.jpg" alt="Image placeholder" class="mb-3">
              <div class="media-body">
                <h3 class="mt-0">Arvin F. Almadin</h3>
                <p class="instructor-meta">5th Year Assistant Treasurer</p>
				<p> Contact: 09398456478</p>
				<p> E-mail: arvinpontampilya@gmail.com</p>
              </div>
            </div>

            <div class="media d-block feature text-center">
              <img src="officers/FOAT.jpg" alt="Image placeholder" class="mb-3">
              <div class="media-body">
                <h3 class="mt-0">Mark Ezykiel B. Nillo</h3>
                <p class="instructor-meta">4th Year Assistant Treasurer</p>
				<p> Contact: 09398456478</p>
				<p> E-mail: babynilloezykiel@gmail.com</p>
              </div>
            </div>


            <div class="media d-block feature text-center">
              <img src="officers/Aud.jpg" alt="Image placeholder" class="mb-3">
              <div class="media-body">
                <h3 class="mt-0">Carl Justine L. Oyales</h3>
                <p class="instructor-meta">Auditor</p>
				<p> Contact: 09398456478</p>
				<p> E-mail: cjoyales21@gmail.com</p>
              </div>
            </div>
          </div>


        </section>
		
    <section class="school-features text-dark d-flex">

          <div class="inner">
            <div class="media d-block feature text-center">
              <img src="officers/BME.jpg" alt="Image placeholder" class="mb-3">
              <div class="media-body">
                <h3 class="mt-0">Ivan Dave F. Agustino</h3>
                <p class="instructor-meta">Business Manager-External Affairs</p>
				<p> Contact: 09398456478</p>
				<p> E-mail: titoivandavefajardo@gmail.com</p>
              </div>
            </div>

            <div class="media d-block feature text-center">
              <img src="officers/BMI.jpg" alt="Image placeholder" class="mb-3">
              <div class="media-body">
                <h3 class="mt-0">Jessa Mae P. Espiña</h3>
                <p class="instructor-meta">Business Manager-Internal Affairs</p>
				<p> Contact: 09398456478</p>
				<p> E-mail: jessamaeespiña@gmail.com</p>
              </div>
            </div>

            <div class="media d-block feature text-center">
              <img src="officers/PROE.jpg" alt="Image placeholder" class="mb-3">
              <div class="media-body">
                <h3 class="mt-0">Juan Carlo F. Greganda</h3>
                <p class="instructor-meta">PRO-External Affairs</p>
				<p> Contact: 09398456478</p>
				<p> E-mail: gregandajuancarlo@gmail.com</p>
              </div>
            </div>


            <div class="media d-block feature text-center">
              <img src="officers/PROI.jpg" alt="Image placeholder" class="mb-3">
              <div class="media-body">
                <h3 class="mt-0">John Russel D. Reyes</h3>
                <p class="instructor-meta">PRO-Internal Affairs</p>
				<p> Contact: 09398456478</p>
				<p> E-mail: rusellszxc@gmail.com</p>
              </div>
            </div>
          </div>


        </section>
		<section class="school-features text-dark d-flex">

          <div class="inner">
            <div class="media d-block feature text-center">
              <img src="officers/FY.jpg" alt="Image placeholder" class="mb-3" >
              <div class="media-body">
                <h3 class="mt-0">Ferangelo C. Tuason</h3>
                <p class="instructor-meta">5th Yr. Board Member</p>
				<p> Contact: 09398456478</p>
				<p> E-mail: pangangelo@gmail.com</p>
              </div>
            </div>

            <div class="media d-block feature text-center">
              <img src="officers/blank.png" alt="Image placeholder" class="mb-3">
              <div class="media-body">
                <h3 class="mt-0">Rojell Saine O. Arojado</h3>
                <p class="instructor-meta">4th Yr. Board Member</p>
				<p> Contact: 09398456478</p>
				<p> E-mail: rojeliosaine@gmail.com</p>
              </div>
            </div>

            <div class="media d-block feature text-center ">
              <img src="officers/first.jpg" alt="Image placeholder" class="mb-3">
              <div class="media-body">
                <h3 class="mt-0">Christine Rose C. Baltazar</h3>
                <p class="instructor-meta"></p>
				<p> Contact: 09398456478</p>
				<p> E-mail: baltazarchristine@gmail.com</p>
              </div>
            </div>


            <div class="media d-block feature text-center">
              <img src="officers/adv.jpg" alt="Image placeholder" class="mb-3">
              <div class="media-body">
                <h3 class="mt-0">Engr. Leilani Avecilla-Gonzales</h3>
                <p class="instructor-meta">Computer Engineering Adviser</p>
				<p> Contact: 09398456478</p>
				<p> E-mail: lheigonzales@gmail.com</p>
              </div>
            </div>
          </div>
        </section>


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
            <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
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