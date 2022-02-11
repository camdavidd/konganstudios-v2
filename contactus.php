<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Contact Us - Kongan Studios</title>
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
                                    <li><a href="games.php">Games</a></li>
                                    <li><a href="services.php">Services</a></li>
                                    <li  class="dropdown"><a href="#">Gallery</a>
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
                                    <li class="current"><a href="contactus.php">Contacts</a></li>
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
       
    
    <!-- Contact Form Section -->
    <section class="contact-form-section bg-white">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!-- Title Column -->
                <div class="title-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <!-- Sec Title -->
                        <div class="sec-title-black">
                            <div class="title-b">Contact Us</div>
                            <h2>we’re here to help you</h2>
                        </div>
                        <div class="text-b">Fill out the form and click the send button.</div>
                        <ul class="social-icons">
                            <li><a href="https://www.facebook.com/konganstudios/" target="_blank"><span class="fab fa-facebook-square"></span></a></li>
                            <li><a href="https://twitter.com/konganstudios" target="_blank"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="http://instagram.com/kongan_studios" target="_blank"><span class="fab fa-instagram"></span></a></li>
                            <li><a href="https://www.youtube.com/channel/UCobybYKH-ivYOFZ1uDfvG0A" target="_blank" ><span class="fab fa-youtube"></span></a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- Form Column -->
                <div class="form-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        
                        <!--Default Form-->
                        <div class="default-form contact-form">

                            <form method="post" action="sendemail.php" id="contact-form">
                                <div class="row clearfix">                                    
                                    <div class="col-md-6 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="Full name" required="">
                                    </div>
                                    
                                    <div class="col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Email address" required="">
                                    </div>

                                    <div class="col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Write a Message"></textarea>
                                    </div>

                                    <div class="col-md-12 col-sm-12 form-group">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="btn-title">Send Message</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
        <br>
    </section>
  
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
<script src="js/validate.js"></script>
<script src="js/scrollbar.js"></script>
<script src="js/script.js"></script>

</body>
</html>