<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Employability.life</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place atmc_logo in the root directory -->
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
                <h4 class="crumb-title">Digital Intelligence Course</h4>
            </div>
        </div>
    </div>
    <!-- crumbs area end -->
	
<!--course area starts-->
		
		<div class="feature-blog  pt--120 pb--70">
        <div class="container">	
			<div class="row">
                <div class="col-md-6">
                    <div class="section-title" style="width:1200px;">
                        <h2>Digital Intelligence can be broken down as such:</h2>
                    </div>
                </div>
            </div>
		</div>
		</div>
		
		<div class="about-area ptb--120" style="margin-top:-150px;">
        <div class="container">
		
		<div class="col-lg-6">
                    <div class="abt-right-thumb" style="margin-top:-20px; width:1200px; margin-left:-50px;">
                        <div class="abt-rt-inner">
                            <img src="assets/images/course/DI_Profile.png"></img>
                        </div>
                    </div>
                </div>
		
            <div class="row">
			
                <div class="col-lg-6">
                    <div class="about-left-content">
                        <div class="section-title" style="width:1000px;">
                            <span class="text-uppercase">In this fast-paced digital age, having the skills to navigate the digital world is key to career success!</span>
                        </div>
                        <p style="margin-top:-10px; width:1150px;">Developing your Digital Intelligence is key to finding success in a 21st-century workplace. There is currently a massive gap in digital skills within workplaces, so having the knowledge of how to be successful digitally can give you a massive edge in the hiring process. <br>
						Building Digital Intelligence isn’t just knowing how to use software, which is important too, but also how to navigate virtual spaces as a whole.<br><br>
						
						<b>Attention and Distractions:</b> Modern life is constantly throwing things at you in order to steal your attention away. Building digital intelligence helps us realise what those distractions are, and how we can use both digital and analogue tools and techniques to keep our focus (and our sanity) from impacting our work..<br><br>
						
						<b>Participation:</b> how actively involved you can be in a digital society using the proper tools. We can use virtual tools to help us get more opportunities to participate in new forms of social, civic, learning, and working activities. With the rise of technologies such as Zoom, Microsoft Office, Slack, Adobe, etc.– it is crucial to understand how to use these softwares and know the hardware behind them.<br><br>
						
						<b>Collaboration:</b> much like participation, digital tools and services can help us collaborate with people across the globe much more easily. Knowing how to best use these tools to better collaborate is crucial to finding your digital success. Building digital collaboration skills is critical, especially in the COVID/post-COVID world.<br><br>
						
						<b>Critical Content Consumption:</b> in the age of misinformation, it’s important to know where our content comes from and how we can critically evaluate it in order to avoid fake, misleading, and dubious content. This may be learning how to avoid scams, how to best use social media, and how to avoid being lied to.<br><br> 
						
						By building these <b>“Net Smarts”</b>, you can navigate the digital world much more easily, and can protect yourself from scams or misinformation, participate better, collaborate more robustly, and best work in the digital professional world. Many of the digital tools out there can vastly improve our chances of career success, and being able to best use those will give you an unbeatable edge!
						</p>
                    </div>
                </div>
            </div>			
        </div>
		</div>
			
			
	<!--course area ends-->

	
<?php
include("footer.php");
?>