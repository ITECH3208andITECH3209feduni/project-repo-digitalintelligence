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

<style>

html,body{
	width:100%;
	height:100%;
	margin:0;
	padding:0;
	overflow-x: hidden;
}

#supportform {
	margin-bottom: 200px;
	margin-left:50%;
	width: 800px;
	height: 800px;
	color: #2C363F;
	border-radius: 30px;
	background: #ffdda6;
	align: center;
}

#textbox{
	border-radius: 10px;
	border: none;
	height: 40px;
	width: 250px;
	background: #f5f3f2;	
	margin-bottom: 30px;
}

.row {
  display: flex;
  flex-wrap: wrap;
  align: center;
}

#neumorphic-button-support {
	height: 50px;
	width: 150px;
	margin-top: 20px;
	align-items: center;
	justify-content: center;
	border: none;
	border-radius: 35px;
	background: #2C363F;
	
}

</style>

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
												<li><a href="about.php">About</a></li>
												<li><a href="contact.php">Contact</a></li>
												<li class="active"><a href="support.php">Student Support</a></li></font>
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
                <h4 class="crumb-title">Student Support Desk</h4>
            </div>
        </div>
    </div>
    <!-- crumbs area end -->
	
	
    <!-- Form Start -->
	<div class="register-neumorphic-div-body" style="background-color:#e3e2e1;">
		<div class="row">
		
		<div class="col-md-10 offset-md-1" style="margin-top:70px;">
                    <div class="cnt-title">
                        <h4><span>Student Support</span></h4>
                    </div>
        </div>
				
			<center>
			
			<form action="ticket.php" name="support" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">
			<div id="supportform" align="center">
					
					<font size="5">Type:</font>
					<select id="textbox" name="type" style=" margin-left: 85px; margin-top:80px; width:400px;">
						<option value="default">--Select type--</option>
						<option value="Miscellaneous">Student Support (Misc)</option>
						<option value="Submissions">Submissions</option>
						<option value="Special Considerations">Special Considerations</option>
					</select><br>
					<span id="msg1"></span><br>
					
					<font size="5">Subject:</font>
					<input type="input" id="textbox" name="subject" style="margin-left: 55px; width:400px;"><br>
					<span id="msg2"></span><br>
					<font size="5">Email:</font>
					<input type="input" id="textbox" name="email" style="margin-left: 75px; width:400px;"><br>
					<span id="msg3"></span><br>
					
					<font size="5">Message:</font>
					<input type="input" id="textbox" name="message" style="height: 200px; margin-left: 42px; width:400px;"><br>
					<span id="msg4"></span><br>
					
					<input type="File" name="file" style=" margin-left: 115px;"><br>
					<span id="msg5"></span><br>
					<input type ="submit" id="neumorphic-button-support" value="Raise Ticket" name="submit" style=" font-size: 18px; color:#E1E6E1;">
			</div>
			</form>
		</div>
	</div>
    <!-- Form End -->



<?php
include("footer.php");
?>