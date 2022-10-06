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
								if(isset($_SESSION['sname']))
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
											if(isset($_SESSION['sname']))
											{
											?>
												<li><a href="index2.php">Home</a></li>
												<li  class="active"><a href="course_details.php">Courses</a>
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
												<li><a href="about.php">About</a></li>
												<li><a href="support.php" >Student Support</a></li></font>
												<li><a href="login.php"><img src="assets/images/icon/p1.png" style="height:40px; width:40px;"></img>Profile</a>
												<ul class="submenu">
													<li><?php echo "<a href='#'>".$_SESSION['sname'];?></a></li>
													<li><a href="ticket_reply.php">My Tickets</a></li>
													<li><a href="mybookings.php">My Bookings</a></li>
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
                <h4 class="crumb-title">Digital Intelligence</h4>
            </div>
        </div>
    </div>
    <!-- crumbs area end -->
	
<!-- DI Course area start -->
    <div class="take-toure-area ptb--120" style="height:1850px;">
        <div class="container">
		
		<div class="row" style="margin-top:50px;">
                <div class="col-md-8 offset-md-2" style="margin-top:-50px;">
                    <div class="section-title sec-style-two" >
                        <h2>Welcome to Digital Intelligence</h2>
                    </div>
				</div>
		</div>
				
				
	<!-- course area start -->
    <div class="course-area  pt--120 pb--70" style="margin-top:-80px;">
        <div class="container">
			<div class="row">  
                <!-- course single start -->
                <div class="col-lg-4 col-md-6">
                    <div class="card mb-5">
                        <div class="course-thumb">
                            <img src="assets/images/course/unit1.png" alt="image">
                        </div>
                        <div class="card-body  p-25"> 
                            <div class="course-meta-title mb-4">
                                <div class="course-meta-text">
                                    <h4><a href="unit_content.php">UNIT 1</a></h4>
                                </div> 
                            </div>
							<ul class="course-meta-details list-inline  w-100">
                                <p>Duration: <span>1 hour<span></p> 
                            </ul>
                        </div><!-- card-body -->
                    </div><!-- card -->
                </div>
				
				<!-- course single start -->
                <div class="col-lg-4 col-md-6">
                    <div class="card mb-5">
                        <div class="course-thumb">
                            <img src="assets/images/course/unit2.png" alt="image">
                        </div>
                        <div class="card-body  p-25"> 
                            <div class="course-meta-title mb-4">
                                <div class="course-meta-text">
                                    <h4><a href="unit_content.php">UNIT 2</a></h4>
                                </div> 
                            </div>
                            <ul class="course-meta-details list-inline  w-100">
                                <p>Duration: <span>1 hour<span></p> 
                            </ul>  
                      </div><!-- card-body -->
                    </div><!-- card -->
                </div>
				
				<!-- course single start -->
                <div class="col-lg-4 col-md-6">
                    <div class="card mb-5">
                        <div class="course-thumb">
                            <img src="assets/images/course/unit3.png" alt="image">
                        </div>
                        <div class="card-body  p-25"> 
                            <div class="course-meta-title mb-4">
                                <div class="course-meta-text">
                                    <h4><a href="unit_content.php">UNIT 3</a></h4>
                                </div> 
                            </div>
                            <ul class="course-meta-details list-inline  w-100">
                                <p>Duration: <span>1 hour<span></p> 
                            </ul> 
                      </div><!-- card-body -->
                    </div><!-- card -->
                </div>
				
				<!-- course single start -->
                <div class="col-lg-4 col-md-6">
                    <div class="card mb-5">
                        <div class="course-thumb">
                            <img src="assets/images/course/unit4.png" alt="image">
                        </div>
                        <div class="card-body  p-25"> 
                            <div class="course-meta-title mb-4">
                                <div class="course-meta-text">
                                    <h4><a href="unit_content.php">UNIT 4</a></h4>
                                </div> 
                            </div>
                            <ul class="course-meta-details list-inline  w-100">
                                <p>Duration: <span>1 hour<span></p> 
                            </ul> 
                      </div><!-- card-body -->
                    </div><!-- card -->
                </div>
				
				<!-- course single start -->
                <div class="col-lg-4 col-md-6">
                    <div class="card mb-5">
                        <div class="course-thumb">
                            <img src="assets/images/course/unit5.png" alt="image">
                        </div>
                        <div class="card-body  p-25"> 
                            <div class="course-meta-title mb-4">
                                <div class="course-meta-text">
                                    <h4><a href="unit_content.php">UNIT 5</a></h4>
                                </div> 
                            </div>
                            <ul class="course-meta-details list-inline  w-100">
                                <p>Duration: <span>1 hour<span></p> 
                            </ul>  
                      </div><!-- card-body -->
                    </div><!-- card -->
                </div>
				
				<!-- course single start -->
                <div class="col-lg-4 col-md-6">
                    <div class="card mb-5">
                        <div class="course-thumb">
                            <img src="assets/images/course/unit6.png" alt="image">
                        </div>
                        <div class="card-body  p-25"> 
                            <div class="course-meta-title mb-4">
                                <div class="course-meta-text">
                                    <h4><a href="unit_content.php">UNIT 6</a></h4>
                                </div> 
                            </div>
                            <ul class="course-meta-details list-inline  w-100">
                                <p>Duration: <span>1 hour<span></p> 
                            </ul> 
                      </div><!-- card-body -->
                    </div><!-- card -->
                </div>
				
				<!-- course single start -->
                <div class="col-lg-4 col-md-6">
                    <div class="card mb-5">
                        <div class="course-thumb">
                            <img src="assets/images/course/unit7.png" alt="image">
                        </div>
                        <div class="card-body  p-25"> 
                            <div class="course-meta-title mb-4">
                                <div class="course-meta-text">
                                    <h4><a href="unit_content.php">UNIT 7</a></h4>
                                </div> 
                            </div>
                            <ul class="course-meta-details list-inline  w-100">
                                <p>Duration: <span>1 hour<span></p> 
                            </ul> 
                      </div><!-- card-body -->
                    </div><!-- card -->
                </div>
				
				<!-- course single start -->
                <div class="col-lg-4 col-md-6">
                    <div class="card mb-5">
                        <div class="course-thumb">
                            <img src="assets/images/course/unit8.png" alt="image">
                        </div>
                        <div class="card-body  p-25"> 
                            <div class="course-meta-title mb-4">
                                <div class="course-meta-text">
                                    <h4><a href="unit_content.php">UNIT 8</a></h4>
                                </div> 
                            </div>
                            <ul class="course-meta-details list-inline  w-100">
                                <p>Duration: <span>1 hour<span></p> 
                            </ul> 
                      </div><!-- card-body -->
                    </div><!-- card -->
                </div>
				
				<!-- course single start -->
                <div class="col-lg-4 col-md-6">
                    <div class="card mb-5">
                        <div class="course-thumb">
                            <img src="assets/images/course/unit9.png" alt="image">
                        </div>
                        <div class="card-body  p-25"> 
                            <div class="course-meta-title mb-4">
                                <div class="course-meta-text">
                                    <h4><a href="unit_content.php">UNIT 9</a></h4>
                                </div> 
                            </div>
                            <ul class="course-meta-details list-inline  w-100">
                                <p>Duration: <span>1 hour<span></p> 
                            </ul> 
                      </div><!-- card-body -->
                    </div><!-- card -->
                </div>
				
				<!-- course single start -->
                <div class="col-lg-4 col-md-6">
                    <div class="card mb-5">
                        <div class="course-thumb">
                            <img src="assets/images/course/unit10.png" alt="image">
                        </div>
                        <div class="card-body  p-25"> 
                            <div class="course-meta-title mb-4">
                                <div class="course-meta-text">
                                    <h4><a href="unit_content.php">UNIT 10</a></h4>
                                </div> 
                            </div>
                            <ul class="course-meta-details list-inline  w-100">
                                <p>Duration: <span>1 hour<span></p> 
                            </ul> 
                      </div><!-- card-body -->
                    </div><!-- card -->
                </div>
				
				
				<!-- course single start -->
                <div class="col-lg-4 col-md-6">
                    <div class="card mb-5">
                        <div class="course-thumb">
                            <img src="assets/images/course/quiz.png" alt="image" style="height:85px; width: 500px;">
                        </div>
                        <div class="card-body  p-25"> 
                            <div class="course-meta-title mb-4">
                                <div class="course-meta-text">
                                    <h4><a href="quiz.php">Final Task</a></h4>
                                </div> 
                            </div>
                            <ul class="course-meta-details list-inline  w-100">
                                <p>Duration: <span>30 Minutes<span></p> 
                            </ul> 
                      </div><!-- card-body -->
                    </div><!-- card -->
                </div>
				
				

            </div>
		</div>
	</div>
    <!-- course area end -->
	
	<div class="container" style="margin-top:550px; margin-left:-710px; margin-bottom:100px;">
			<div class="about-left-content" style="margin-left:750px; margin-top:-400px;">
                        <div class="section-title">
                            <h2 style="width:1100px;"><span>Have any doubts? Please book your session with us</span><h2>
							<a class="btn btn-primary btn-round" href="book_session.php" style="margin-top: 30px; margin-left: 410px;">Book Session</a>
                        </div>
			</div>
	</div>
	
	</div>
	

	
<!-- DI Course area end -->
	
	
<?php
include("footer.php");
?>