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
												<li ><a href="index2.php">Home</a></li>
												<li><a href="course_details.php">Courses</a>
													<ul class="submenu">
														<li><a href="DI_main.php">Digital Intelligence</a></li>
														<li><a href="course_details.php">Growth Mindset</a></li>
														<li><a href="course_details.php">Career Intelligence</a></li>
														<li><a href="course_details.php">Influence</a></li>
														<li><a href="course_details.php">Cultural Intelligence</a></li>
													</ul>
												</li>
												<li class="active"><a href="team.php">Team</a></li>
												<li><a href="events.php">Events</a></li>
												<li><a href="news.php">News</a>
												</li>
												<li><a href="about.php">About</a></li>
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
                <h4 class="crumb-title">Our teachers</h4>
            </div>
        </div>
    </div>
    <!-- crumbs area end -->
    <!-- teacher area start -->
    <div class="all-teachers  pt--120 pb--70">
        <div class="container">
		<div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="section-title">
                        <span class="text-uppercase">Learn from best</span>
                        <h2>Our Team</h2> 
                    </div>
                </div>
            </div>
            <div class="row">  
                <div class="col-lg-4 col-md-6">
                  <div class="card mb-5" style="height:380px; width:290px;"> 
                    <img src="assets/images/team/manish.jpg" alt="image"> 
                    <div class="card-body teacher-content p-25">  
                      <h4 class="card-title mb-1">Manish Malhotra</h4>
                      <span class="primary-color d-block mb-4">Chairman & CEO</span> 
                    </div>
                  </div><!-- card -->    
                </div><!-- teacher single end -->

                <!-- teacher single start -->
                <div class="col-lg-4 col-md-6">
                  <div class="card mb-5" style="height:380px; width:290px;"> 
                    <img src="assets/images/team/supriyo.jpg" alt="image"> 
                    <div class="card-body teacher-content p-25">  
                      <h4 class="card-title mb-1">Supriyo Chaudhuri</h4>
                      <span class="primary-color d-block mb-4">President</span>
                    </div>
                  </div><!-- card --> 
                </div><!-- teacher single end -->
                
                <!-- teacher single start -->
                <div class="col-lg-4 col-md-6"> 
                  <div class="card mb-5" style="height:380px; width:290px;"> 
                    <img src="assets/images/team/brenda.jpg" alt="image"> 
                    <div class="card-body teacher-content p-25">  
                      <h4 class="card-title mb-1">Brenda Eade</h4>
                      <span class="primary-color d-block mb-4">Quality Assurance</span>
                    </div>
                  </div><!-- card -->  
                </div><!-- teacher single end --> 

                <!-- teacher single start -->
                <div class="col-lg-4 col-md-6"> 
                  <div class="card mb-5" style="height:380px; width:290px;"> 
                    <img src="assets/images/team/raja.jpg" alt="image"> 
                    <div class="card-body teacher-content p-25">  
                      <h4 class="card-title mb-1">Raja Dasgupta</h4>
                      <span class="primary-color d-block mb-4">EVP South Asia</span>
                    </div>
                  </div><!-- card --> 
                </div><!-- teacher single end -->

                <!-- teacher single start -->
                <div class="col-lg-4 col-md-6"> 
                  <div class="card mb-5" style="height:380px; width:290px;"> 
                    <img src="assets/images/team/marketa.jpg" alt="image">
                    <div class="card-body teacher-content p-25">  
                      <h4 class="card-title mb-1">Marketa Mojzisova</h4>
                      <span class="primary-color d-block mb-3">VP Products and Experiences</span>
                    </div>
                  </div><!-- card --> 
                </div><!-- teacher single end -->

                <!-- teacher single start -->
                <div class="col-lg-4 col-md-6"> 
                  <div class="card mb-5" style="height:380px; width:290px;"> 
                    <img src="assets/images/team/anirudh.jpg" alt="image"> 
                    <div class="card-body teacher-content p-25">  
                      <h4 class="card-title mb-1">Anirudh Phadke</h4>
                      <span class="primary-color d-block mb-4">Head of Digital Content</span>
                    </div>
                  </div><!-- card --> 
                </div><!-- teacher single end --> 
				
				<!-- teacher single start -->
                <div class="col-lg-4 col-md-6"> 
                  <div class="card mb-5" style="height:380px; width:290px;"> 
                    <img src="assets/images/team/ruchika.jpg" alt="image"> 
                    <div class="card-body teacher-content p-25">  
                      <h4 class="card-title mb-1">Ruchika Sharma</h4>
                      <span class="primary-color d-block mb-4">Director, Academic Partnerships</span>
                    </div>
                  </div><!-- card --> 
                </div><!-- teacher single end -->
				
				<!-- teacher single start -->
                <div class="col-lg-4 col-md-6"> 
                  <div class="card mb-5" style="height:380px; width:290px;"> 
                    <img src="assets/images/team/rena.jpg" alt="image"> 
                    <div class="card-body teacher-content p-25">  
                      <h4 class="card-title mb-1">Rena Chen</h4>
                      <span class="primary-color d-block mb-4">Operations Executive</span>
                    </div>
                  </div><!-- card --> 
                </div><!-- teacher single end --> 
				
				<!-- teacher single start -->
                <div class="col-lg-4 col-md-6"> 
                  <div class="card mb-5" style="height:380px; width:290px;"> 
                    <img src="assets/images/team/pradipti.jpg" alt="image"> 
                    <div class="card-body teacher-content p-25">  
                      <h4 class="card-title mb-1">Pradipti Acharya</h4>
                      <span class="primary-color d-block mb-4">Brand Experience Executive</span>
                    </div>
                  </div><!-- card --> 
                </div><!-- teacher single end --> 
				
				<!-- teacher single start -->
                <div class="col-lg-4 col-md-6"> 
                  <div class="card mb-5" style="height:380px; width:290px;"> 
                    <img src="assets/images/team/ivana.jpg" alt="image"> 
                    <div class="card-body teacher-content p-25">  
                      <h4 class="card-title mb-1">Ivana Hornakova</h4>
                      <span class="primary-color d-block mb-4">Graphic Design</span>
                    </div>
                  </div><!-- card --> 
                </div><!-- teacher single end --> 
				
				<!-- teacher single start -->
                <div class="col-lg-4 col-md-6"> 
                  <div class="card mb-5" style="height:380px; width:290px;"> 
                    <img src="assets/images/team/sharmistha.jpg" alt="image">
                    <div class="card-body teacher-content p-25">  
                      <h4 class="card-title mb-1">Sharmistha Chatterjee</h4>
                      <span class="primary-color d-block mb-4">Master Coach</span>
                    </div>
                  </div><!-- card --> 
                </div><!-- teacher single end --> 
				
				<!-- teacher single start -->
                <div class="col-lg-4 col-md-6"> 
                  <div class="card mb-5" style="height:380px; width:290px;"> 
                    <img src="assets/images/team/kirk.jpg" alt="image"> 
                    <div class="card-body teacher-content p-25">  
                      <h4 class="card-title mb-1">Kirk Perris</h4>
                      <span class="primary-color d-block mb-4">Master Coach</span>
                    </div>
                  </div><!-- card --> 
                </div><!-- teacher single end --> 
				
				<!-- teacher single start -->
                <div class="col-lg-4 col-md-6"> 
                  <div class="card mb-5" style="height:380px; width:290px;"> 
                    <img src="assets/images/team/ashok.jpg" alt="image"> 
                    <div class="card-body teacher-content p-25">  
                      <h4 class="card-title mb-1">Ashok Selladurai</h4>
                      <span class="primary-color d-block mb-4">Master Coach</span>
                    </div>
                  </div><!-- card --> 
                </div><!-- teacher single end --> 
				
				<!-- teacher single start -->
                <div class="col-lg-4 col-md-6"> 
                  <div class="card mb-5" style="height:380px; width:290px;"> 
                    <img src="assets/images/team/desta.jpg" alt="image"> 
                    <div class="card-body teacher-content p-25">  
                      <h4 class="card-title mb-1">Desta Haile</h4>
                      <span class="primary-color d-block mb-4">Master Coach</span>
                    </div>
                  </div><!-- card --> 
                </div><!-- teacher single end --> 
				
				<!-- teacher single start -->
                <div class="col-lg-4 col-md-6"> 
                  <div class="card mb-5" style="height:380px; width:290px;"> 
                    <img src="assets/images/team/ana.jpg" alt="image"> 
                    <div class="card-body teacher-content p-25">  
                      <h4 class="card-title mb-1">Ana Vreca</h4>
                      <span class="primary-color d-block mb-4">Master Coach</span>
                    </div>
                  </div><!-- card --> 
                </div><!-- teacher single end --> 
				
				<!-- teacher single start -->
                <div class="col-lg-4 col-md-6"> 
                  <div class="card mb-5" style="height:380px; width:290px;"> 
                    <img src="assets/images/team/melvin.jpg" alt="image"> 
                    <div class="card-body teacher-content p-25">  
                      <h4 class="card-title mb-1">Melvin Tan</h4>
                      <span class="primary-color d-block mb-4">Master Coach</span>
                    </div>
                  </div><!-- card --> 
                </div><!-- teacher single end --> 
				
				<!-- teacher single start -->
                <div class="col-lg-4 col-md-6"> 
                  <div class="card mb-5" style="height:380px; width:290px;"> 
                    <img src="assets/images/team/ashish.jpg" alt="image"> 
                    <div class="card-body teacher-content p-25">  
                      <h4 class="card-title mb-1">Ashish Sahasrabudhe</h4>
                      <span class="primary-color d-block mb-4">Director, Skills Training</span>
                    </div>
                  </div><!-- card --> 
                </div><!-- teacher single end --> 
				
				<!-- teacher single start -->
                <div class="col-lg-4 col-md-6"> 
                  <div class="card mb-5" style="height:380px; width:290px;"> 
                    <img src="assets/images/team/anindita.jpg" alt="image"> 
                    <div class="card-body teacher-content p-25">  
                      <h4 class="card-title mb-1">Anindita Das</h4>
                      <span class="primary-color d-block mb-4">Director, Partner Engagement</span>
                    </div>
                  </div><!-- card --> 
                </div><!-- teacher single end -->
				
				<!-- teacher single start -->
                <div class="col-lg-4 col-md-6"> 
                  <div class="card mb-5" style="height:380px; width:290px;"> 
                    <img src="assets/images/team/suparna.jpg" alt="image"> 
                    <div class="card-body teacher-content p-25">  
                      <h4 class="card-title mb-1">Suparna Biswas</h4>
                      <span class="primary-color d-block mb-4">HR & Admin</span>
                    </div>
                  </div><!-- card --> 
                </div><!-- teacher single end -->
				
				<!-- teacher single start -->
                <div class="col-lg-4 col-md-6"> 
                  <div class="card mb-5" style="height:380px; width:290px;"> 
                    <img src="assets/images/team/mezjan.jpg" alt="image"> 
                    <div class="card-body teacher-content p-25">  
                      <h4 class="card-title mb-1">Mezjan Dallas</h4>
                      <span class="primary-color d-block mb-4">Convenor, Industry Council</span>
                    </div>
                  </div><!-- card --> 
                </div><!-- teacher single end -->
				
				<!-- teacher single start -->
                <div class="col-lg-4 col-md-6"> 
                  <div class="card mb-5" style="height:380px; width:290px;"> 
                    <img src="assets/images/team/manpreet.jpg" alt="image"> 
                    <div class="card-body teacher-content p-25">  
                      <h4 class="card-title mb-1">Manpreet Singh Manna</h4>
                      <span class="primary-color d-block mb-4">Academic Council</span>
                    </div>
                  </div><!-- card --> 
                </div><!-- teacher single end -->
				
				
            </div>
        </div>
    </div>
    <!-- teacher area end -->

    

    <!-- cta area start -->
    <div class="cta-area secondary-bg has-color ptb--50"> 
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-9">
                    <div class="cta-content">
                        <p class="mb-2">Click to Join the Advance Workshop</p>
                        <h2>Training in advance networking</h2>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cta-btn">
                        <a class="btn btn-light btn-round" href="#">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cta area end -->

<?php
include("footer.php");
?>