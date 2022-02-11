<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Sitnalta: Surface - Kongan Studios</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/konganstudioslogo.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"><div class="icon"></div></div>
    <!-- Header Style Two -->
   <header class="main-header header-style-two">
        <!-- Header Top -->

        <!-- Header Lower -->
        <div class="header-lower">
            <div class="auto-container">
                <div class="clearfix">
                    <!--Info-->
                    <div class="logo-outer">
                        <div class="logo"><a href="index.php"><img src="images/ks2.png" alt="" title=""></a></div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>
                        
                         <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li class="current"><a href="games.php">Games</a></li>
                                    <li><a href="services.php">Services</a></li>
                                    <li class="dropdown"><a href="#">Gallery</a>
                                        <ul>
                                            <li><a href="videotrailers.php">Video Trailers</a></li>
                                            <li><a href="illustrations.php">Illustrations</a></li>
                                            <li><a href="2dportfolio.php">2D Portfolio</a></li>
                                            <li><a href="3dportfolio.php">3D Portfolio</a></li>
                                            <li><a href="storyboards.php">Storyboards</a></li>
                                            
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Blog</a>
                                        <ul>
                                            <li><a href="#">Events</a></li>
                                            <li><a href="#">Photos</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contactus.php">Contacts</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                        
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!-- Sticky Header and Mobile Menu -->
        <?php include('header-nav.php')?>
        <!-- End Mobile Menu -->
    </header>
    <!-- End Main Header -->


 
	<section class="player-info-section bg-white">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Text Column-->
                <div class="text-column col-lg-6 col-md-6 col-sm-12">
                    <div class="inner2 wow fadeInRight">
                          <!-- Sec Title -->
                        <div class="sec-title-black">
                            <h2>Sitnalta: Surface</h2>
                            <div class="title-b">Endless Running Game. Hyper Casual Game</div>
                        </div>
                        <div class="text-b">Surfs up! It’s always time for surfing on the wondrous island of Siargao! <br><br>Help Regan surf on the waters surrounding Siargao and experience the never-ending summer the island brings. Collect coins, pearls and crystal as you enjoy the cool tropical breeze of summer in the island! Surf to your left and surf to your right to avoid barrels, crates, mines and rocks to maintain the speed of your incredible surfing. Thinking this game can’t get any cooler? That’s where you’re wrong! You have to watch out for our friendly Bantay Tubig that would give you boosters to make your surfing even  more amazing! <br><br>Whoops, did we forget to mention about the collectibles? Don’t think it’s all for nothing! Collecting coins, pearls and crystals will allow you to unlock stunning surfboards that will make you feel like a pro surfer in Siargao! You have to watch out for limited time only surfboards, you don’t wanna miss these ones, do you? Magical world awaits you in Sitnalta and will surely turn your world upside down! Getting more and more curious, eh? Watch Sitnalta’s game play at www.youtube.com/boguslinkofthegameplay .  Enjoy surfing! </div>
                        <!--<ul class="social-icons">
                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                        </ul> -->
                         <!-- Lower Box -->
            
                    </div>
                </div>
                <!--Image Column-->
                <div class="image-column col-lg-6 col-md-6 col-sm-12">
                    <div class="inner wow fadeInLeft">
                        <figure class="image"><img src="images/resource/sitnaltasurface.jpg" alt=""></figure>
                    </div>
                </div>
            </div>

        </div>
    </section>
   
    <!-- Call To Action Section -->
    <section class="call-to-action-section" style="background-image: url(images/background/trailer.jpg)">
        <div class="auto-container">
            <div class="content">
                <a href="#" class="lightbox-image play-box"><span class="flaticon-play-button"><i class="ripple"></i></span></a>
                <h2>Game Trailer</h2>
            </div>
        </div>
    </section>
    <!-- End Call To Action Section -->
     <!-- Welcome Section -->
    <section class="welcome-section-one bg-white">
        <div class="auto-container">
         
            <!-- Lower Box -->
            <div class="lower-box">
                <a href="#" class="theme-btn btn-style-one"><span class="btn-title">App Store</span></a>
                <br><br>
                 <h2>SOON ON IOS.</h2>
            </div>
            
        </div>
    </section>
    <!-- End Welcome Section -->
	<!-- Main Footer -->
   <?php include('footer.php')?>
   <!-- Main Footer End  -->
</div>
<!--End pagewrapper-->

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/appear.js"></script>
<script src="js/wow.js"></script>
<script src="js/scrollbar.js"></script>
<script src="js/script.js"></script>

</body>
</html>