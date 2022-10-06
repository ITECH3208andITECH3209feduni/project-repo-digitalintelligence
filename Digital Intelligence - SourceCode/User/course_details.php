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
                <h4 class="crumb-title">Course DetailS</h4>
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
                        <span class="text-uppercase">Our Courses</span>
                        <h2>Start Learning</h2> 
                    </div>
                </div>
        </div>
            <div class="row">  
                <!-- course single start -->
                <div class="col-lg-4 col-md-6">
                    <div class="card mb-5">
                        <div class="course-thumb">
                            <img src="assets/images/course/cs-img3.jpg" alt="image">
                        </div>
                        <div class="card-body  p-25"> 
                            <div class="course-meta-title mb-4">
                                <div class="course-meta-text">
								<?php	
									if(isset($_SESSION['name']))
									{
								?>
                                    <h4><a href="DI_main.php">Digital Intelligence</a></h4>
								<?php
									}
									else
									{
								?>
									<h4><a href="digitalintelligence.php">Digital Intelligence</a></h4>
								<?php
									}
								?>
                                </div> 
                            </div>
                            <p>Developing your Digital Intelligence is key to finding success in 21st Century. So, having the knowledge of how to be successful digitally can give you a massive edge in the hiring process. </p>  
                            <ul class="course-meta-details list-inline  w-100">
                                <li> 
                                 <p>Course</p>
                                 <span>2 Months</span>
                                </li> 
                                <li>
                                 <p>Duration</p>
                                  <span>15 hours</span>
                                </li>      
                            </ul>  
                      </div><!-- card-body -->
                    </div><!-- card -->
                </div>
				
				<!-- course single start -->
                <div class="col-lg-4 col-md-6">
                    <div class="card mb-5">
                        <div class="course-thumb">
                            <img src="assets/images/course/cs-img2.jpg" alt="image">
                        </div>
                        <div class="card-body  p-25"> 
                            <div class="course-meta-title mb-4">
                                <div class="course-meta-text">
                                    <h4><a href="course_details.php">Growth Mindset</a></h4>
                                </div> 
                            </div>
                           <p>People with a growth mindset are willing to embrace difficulties, stay strong, and take on the risk of 'failure' as they see it as an opportunity to learn and grow.</p> 
                            <ul class="course-meta-details list-inline  w-100">
                                <li> 
                                 <p>Course</p>
                                 <span>2 Months</span>
                                </li> 
                                <li>
                                 <p>Duration</p>
                                  <span>10 hours</span>
                                </li>      
                            </ul>  
                      </div><!-- card-body -->
                    </div><!-- card -->
                </div>
				
				<!-- course single start -->
                <div class="col-lg-4 col-md-6">
                    <div class="card mb-5">
                        <div class="course-thumb">
                            <img src="assets/images/course/study-group.jpg" alt="image" style="height:198px; width:348px;">
                        </div>
                        <div class="card-body  p-25"> 
                            <div class="course-meta-title mb-4">
                                <div class="course-meta-text">
                                    <h4><a href="course_details.php">Career Intelligence</a></h4>
                                </div> 
                            </div>
                            <p>Building Career Intelligence is a crucial skill to build when applying for jobs today, and we at Employability.life are here to assist you to get your foot into the door, and get that job!</p> 
                            <ul class="course-meta-details list-inline  w-100">
                                <li> 
                                 <p>Course</p>
                                 <span>2 Months</span>
                                </li> 
                                <li>
                                 <p>Duration</p>
                                  <span>18 hours</span>
                                </li>      
                            </ul>  
                      </div><!-- card-body -->
                    </div><!-- card -->
                </div>
				
				<!-- course single start -->
                <div class="col-lg-4 col-md-6" style="margin-left:190px;">
                    <div class="card mb-5">
                        <div class="course-thumb">
                            <img src="assets/images/course/cs-img5.jpg" alt="image">
                        </div>
                        <div class="card-body  p-25"> 
                            <div class="course-meta-title mb-4">
                                <div class="course-meta-text">
                                    <h4><a href="course_details.php">Influence</a></h4>
                                </div> 
                            </div>
                             <p>Building your influence is a great way to get ahead of the competition, and make sure you can jump-start your career goals by getting people to realise the things you already know! </p> 
                            <ul class="course-meta-details list-inline  w-100">
                                <li> 
                                 <p>Course</p>
                                 <span>2 Months</span>
                                </li> 
                                <li>
                                 <p>Duration</p>
                                  <span>17 hours</span>
                                </li>      
                            </ul>  
                      </div><!-- card-body -->
                    </div><!-- card -->
                </div>
				
				<!-- course single start -->
                <div class="col-lg-4 col-md-6">
                    <div class="card mb-5">
                        <div class="course-thumb">
                            <img src="assets/images/course/cs-img1.jpg" alt="image">
                        </div>
                        <div class="card-body  p-25"> 
                            <div class="course-meta-title mb-4">
                                <div class="course-meta-text">
                                    <h4><a href="course_details.php">Cultural Intelligence</a></h4>
                                </div> 
                            </div>
                            <p>Remember to build trust, listen, and be flexible. Recognise that all cultures aren't the same and that different cultures have different business practices as a result.</p> 
                            <ul class="course-meta-details list-inline  w-100">
                                <li> 
                                 <p>Course</p>
                                 <span>2 Months</span>
                                </li>  
                                <li>
                                 <p>Duration</p>
                                  <span>13 hours</span>
                                </li>      
                            </ul>  
                      </div><!-- card-body -->
                    </div><!-- card -->
                </div>
			</div>
		</div>
	</div>
    <!-- course area end -->

<?php
include("footer.php");
?>