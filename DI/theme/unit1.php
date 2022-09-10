<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Employability.life</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/atmc_logo.png">
    <!-- all css here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!--color css-->
    <link rel="stylesheet" id="triggerColor" href="assets/css/triggerplate/color-0.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- prealoader area end -->
    <!-- header area start -->
    <header id="header">
        
        <!-- header bottom area start -->
        <div class="header-bottom">
            <div class="container">
                <div class="header-bottom-inner">
                    <div class="row align-items-center" style="height:100px;">
                        <div class="col-lg-3 col-sm-9">
                            <div class="logo">
                                <a href="index.php"><img src="assets/images/icon/employability_logo.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 d-none d-lg-block">
                            <div class="main-menu" style="margin-top:-20px; font-size:50px;">
                                <nav>
                                    <ul id="m_menu_active"class="active">
                                        <li><a href="index.php">Home</a>
                                        </li>
                                        <li class="active"><a href="course_details.php">Courses</a>
                                            <ul class="submenu">
                                                <li><a href="digitalintelligence.php">Digital Intelligence</a></li>
                                                <li><a href="course_details.php">Growth Mindset</a></li>
												<li><a href="course_details.php">Career Intelligence</a></li>
												<li><a href="course_details.php">Influence</a></li>
												<li><a href="course_details.php">Cultural Intelligence</a></li>
                                            </ul>
                                        </li>
										<li><a href="team.php">Team</a></li>
										<li><a href="events.php">Events</a></li>
										<li><a href="news.php">News</a>
                                        </li>
										<li><a href="about.php">About</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
							
                        <div class="header-bottom-right-style-2" style="margin-top:-70px; margin-right:-230px;">
                            <ul>
                                <?php	
								session_start();
								if(isset($_SESSION['name']))
								{
									echo "<font color='white'>".$_SESSION['name'];
							?></font>
								<br><li><a href="logout.php" class="btn btn-light btn-round">Logout</a></li>
							<?php
								}
								else
								{
							?>
								<li><a class="btn btn-light btn-round" href="login.php">Log in</a></li>
                                <li><a href="register.php" class="btn btn-primary btn-round" class="active">Register</a></li>
							<?php
								}
							?>
                            </ul>
                        </div>
                        </div>

						
                    </div>
                </div>
            </div>
        </div>
		
        <!-- header bottom area end -->
    </header>
    <!-- header area end -->
	
	<!-- body overlay area start -->
    <div class="body_overlay"></div>
    <!-- body overlay area end -->
    <!-- crumbs area start -->
    <div class="crumbs-area">
        <div class="container">
            <div class="crumb-content">
                <h4 class="crumb-title">Digital Intelligence Course</h4>
            </div>
        </div>
    </div>
    <!-- crumbs area end -->
	
	<!-- course area start -->
    <div class="course-area  pt--120 pb--70">
        <div class="container">
			<div class="row">
                <div class="col-md-6">
                    <div class="section-title">
                        <span class="text-uppercase">DI Units</span>
                        <h2>Start Learning</h2> 
                    </div>
                </div>
            </div>
			<div class="row">
			<iframe src="https://player.vimeo.com/video/581449510?h=b8935c5a4f" style="position:absolute;width:40%;height:35%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
			</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<script src="https://player.vimeo.com/api/player.js"></script>
			<p><a href="https://vimeo.com/581449510">Meltdown in Tibet FULL VERSION = 40 mins = HD 1080p M4V</a> from <a href="https://vimeo.com/thunderhorsemedia">ThunderHorse Media</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
		</div>
	</div>
    <!-- course area end -->
	
<?php
include("footer.php");
?>