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
							<?php	
								session_start();
								if(isset($_SESSION['name']))
								{
								?>
									<a href="index2.php"><img src="assets/images/icon/employability_logo.png" alt="logo"></a>
								<?php
								}
								else
								{
								?>
									<a href="index2.php"><img src="assets/images/icon/employability_logo.png" alt="logo"></a>
								<?php
								}
								?>
                            </div>
                        </div>
						<div class="col-xl-11 col-lg-10 d-none d-lg-block">
                            <div class="main-menu" style="margin-top:-20px; font-size:50px;">
                                <nav>
                                    <ul id="m_menu_active"class="active">
									<?php	
											if(isset($_SESSION['name']))
											{
											?>
												<li><a href="index2.php">Home</a></li>
												<li><a href="course_details.php">Courses</a>
													<ul class="submenu">
														<li><a href="DI_main.php">Digital Intelligence</a></li>
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
												<li class="active"><a href="about.php">About</a></li>
												<li><a href="contact.php">Contact</a></li>
												<li><a href="support.php">Student Support</a></li></font>
												<li><a href="login.php"><img src="assets/images/icon/p1.png" style="height:40px; width:40px;"></img>Profile</a>
												<ul class="submenu">
													<li><?php echo "<a href='#'>".$_SESSION['name'];?></a></li>
													<li><a href="logout.php">Logout</a></li>
												</ul>											
											<?php
												}
												else
												{
											?>
												<li class="active"><a href="index.php">Home</a></li>
												<li><a href="course_details.php">Courses</a>
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
												<li><a class="btn btn-light btn-round" href="login.php">Log in</a></li>
												<li><a href="register.php" class="btn btn-primary btn-round" class="active">Register</a></li>
											<?php
												}
										?>
                                    </ul>
                                </nav>
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
                <h4 class="crumb-title">About Us</h4>
            </div>
        </div>
    </div>
    <!-- crumbs area end -->
	
	<!--About area starts-->
		
		<div class="feature-blog  pt--120 pb--70">
        <div class="container">	
			<div class="row">
                <div class="col-md-6">
                    <div class="section-title" style="width:1200px;">
                        <h2>Preparing learners for career success in Industry 4.0!</h2>
                    </div>
                </div>
            </div>
		</div>
		</div>
		
		<div class="about-area ptb--120" style="margin-top:-120px;">
        <div class="container">
            <div class="row" style="margin-bottom:80px;">
                <div class="col-lg-6">
                    <div class="about-left-content">
                        <div class="section-title">
                            <span class="text-uppercase">Unlike typical career services, Employability.life goes beyond the tips and tricks of getting a CV through and landing an interview.</span>
                        </div>
                        <p style="margin-top:-10px;">Instead of getting the candidates just over the finish line - somehow landing any job, whether or not it's the right one - Employability.life aims to realise the candidate's full potential. </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="abt-right-thumb" style="margin-top:-20px;">
                        <div class="abt-rt-inner">
                            <img src="assets/images/about/1.png"></img>
                        </div>
                    </div>
                </div>
            </div>
			
			<div class="row" style="margin-bottom:80px;">
                <div class="col-lg-6">
                    <div class="about-left-content">
                        <div class="section-title">
                            <span class="text-uppercase">The Employability.life experience is delivered over 24 weeks, and is divided into two levels.</span>
                        </div>
                        <p style="margin-top:-10px;">Learners go through an application and assessment process that includes a psychometric and functional skills test, as well as a structured interview to assess their Collaborative Work Aptitude (CWA). This process is to establish each candidate's initial Workplace Readiness Score (i-WRS).  </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="abt-right-thumb" style="margin-top:-20px;">
                        <div class="abt-rt-inner">
                            <img src="assets/images/about/2.png"></img>
                        </div>
                    </div>
                </div>
            </div>
			
			
			<div class="row" style="margin-bottom:80px;">
                <div class="col-lg-6">
                    <div class="about-left-content">
                        <div class="section-title">
                            <span class="text-uppercase">Employability.life is offered through our partner campuses around the world. We prepare learners for career entry and progression in digital workplaces.</span>
                        </div>
                        <p style="margin-top:-10px;">At the local level, each participating campus supports the candidates with full-time Employability.life centre coordinators. Employer engagement coordinators invite industry guests and facilitate on-campus and online structured sessions for group work and to help complete assigned projects.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="abt-right-thumb" style="margin-top:-20px;">
                        <div class="abt-rt-inner">
                            <img src="assets/images/about/3.png"></img>
                        </div>
                    </div>
                </div>
            </div>
			
			<div class="row">
                <div class="col-lg-6">
                    <div class="about-left-content">
                        <div class="section-title">
                            <span class="text-uppercase">The last mile placement</span>
                        </div>
                        <p style="margin-top:-10px;">The Employability.life approaches learner placement at scale through three strategic initiatives:<br>
Partnerships with large corporations to recruit at scale<br>
Partnerships with sector-specific (such as IT) employment agencies in individual local markets <br>
Thought-leadership activities in explaining and validating the WRS as a faithful marker of the candidate's ability to perform and lead in the digital economy workplace</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="abt-right-thumb" style="margin-top:-10px;">
                        <div class="abt-rt-inner">
                            <img src="assets/images/about/4.png"></img>
                        </div>
                    </div>
                </div>
            </div>
			
			
        </div>
    </div>
			
			
	<!--About area ends-->
	
<?php
include("footer.php");
?>