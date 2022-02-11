<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Services - Kongan Studios</title>
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
    <!-- Preloader 
    <div class="preloader"><div class="icon"></div></div>-->
    <!-- Header Style Two -->
   <header class="main-header header-style-two">


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
                                    <li><a href="games.php">Games</a></li>
                                    <li class="current"><a href="services.php">Services</a></li>
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
    <!--Page Title-->
    <section class="page-banner page-banner-sm" style="background-image:url(images/background/services.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Services</h1>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    <!-- Welcome Section -->
    <section class="welcome-section-one bg-white">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title-black centered wow fadeInLeft">
                
                <h2>Game Development</h2>
            </div>
            
            
            <!-- Lower Box -->
            <div class="lower-box">
                <div class="text">Kongan Studios opens its doors for mobile game development collaboration. Let us know how we can work together by clicking the button below. </div>
                <a href="contactus.php" class="theme-btn btn-style-one"><span class="btn-title">contact us</span></a>
            </div>
            
        </div>
    </section>
    <!-- End Welcome Section -->
    <!-- Welcome Section -->
    <section class="welcome-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered wow fadeInRight">
                
                <h2>2D AND 3D GAME ASSET CREATION</h2>
            </div>
            
            
            <!-- Lower Box -->
            <div class="lower-box">
                <div class="text">Do you need help in your game’s character design, inventory asset design and other 2D and 3D related projects? Kongan Studios offers their service in this field too! </div>
                <a href="contactus.php" class="theme-btn btn-style-one"><span class="btn-title">Contact us</span></a>
            </div>
            
        </div>
    </section>
    <!-- End Welcome Section -->
        <!-- Welcome Section -->
    <section class="welcome-section-one bg-white">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title-black centered wow fadeInLeft">
                
                <h2 >2D AND 3D ANIMATION AND MOTION GRAPHICS COLLABORATION </h2>
            </div>
            
            
            <!-- Lower Box -->
            <div class="lower-box">
                <div class="text">We also offer 2D and 3D animation for TV ads and full length animation. </div>
                <a href="contactus.php" class="theme-btn btn-style-one"><span class="btn-title">Contact us</span></a>
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