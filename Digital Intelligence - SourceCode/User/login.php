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

#loginform {
	margin-bottom: 70px;
	margin-left:185px;
	margin-right:100px;
	width: 600px;
	height: 500px;
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
	margin-bottom: 50px;
}

.row {
  display: flex;
  flex-wrap: wrap;
  align: center;
}

#neumorphic-button-register {
	height: 80px;
	width:350px;
	border: none;
	border-radius: 35px;
	background: #2C363F;
	box-shadow:  10px 10px 20px #b86118,
             -10px -10px 20px #ffa128;
	margin-top: 60px;
	margin-left:25px;
	font-size: 18px; 
	color:#E1E6E1;
}

#neumorphic-button-login {
	height: 50px;
	width: 150px;
	align-items: center;
	justify-content: center;
	border: none;
	border-radius: 35px;
	background: #2C363F;
	box-shadow:  10px 10px 20px #b86118,
             -10px -10px 20px #ffa128;
	margin-top: 35px;
	margin-left:25px;
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
                                <a href="index.php"><img src="assets/images/icon/employability_logo.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 d-none d-lg-block">
                            <div class="main-menu" style="margin-top:-20px; font-size:50px;">
                                <nav>
                                    <ul id="m_menu_active"class="active">
                                        <li><a href="index.php">Home</a>
                                        </li>
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
                <h4 class="crumb-title">Login Here</h4>
            </div>
        </div>
    </div>
    <!-- crumbs area end -->

   <!-- Form Start -->
	<div class="login-neumorphic-div-body" style="background-color:#e3e2e1;">
	<div class="row">
                <div class="col-md-10 offset-md-1" style="margin-top:70px;">
                    <div class="cnt-title">
                        <h4><span>Account Sign In</span></h4>
                        <p>Sign in to your account to access your profile, history, and any private pages you've been granted access to.</p>
                    </div>
                </div>
            </div>
				<div class="row">
					<div id="loginform" align="center"><br><br><br>
						<h1 id="login-head" style="margin-bottom:-30px; margin-top:-20px; margin-left:25px;">Login</h1>
						<form action="logg.php" method="post">
							<font size="5">Email:</font>
							<input type="input" id="textbox" name="email" style="margin-top: 80px; margin-left: 68px;" required><br>
							<font size="5">Password:</font>
							<input type="password" id="textbox" name="password" style=" margin-left: 18px;" required><br>
							<button type ="submit" name="submit" class="btn btn-primary btn-round" style=" font-size: 22px; color:#E1E6E1;">Login</button><br><br>
							<a href="reset.php">Forgot password? Reset Password</a>
					</div>
						</form>
					<div id="register" align="center" ><br><br><br>
						<h1 id="register-head" style="margin-top:-20px; font-size:20px;">If you don't have an account then please register</h1>
						<form>
							<button type ="submit" href="#" class="btn btn-primary btn-round" style=" font-size: 18px; color:#E1E6E1;">Register with ATMC Credentials</button><br>
							<br><a href="register.php" class="btn btn-primary btn-round" style=" font-size: 18px; color:#E1E6E1;">Register a New Account</a>
						</form>
					</div>
				</div>
	</div>
    <!-- Form End -->
	

<?php
include("footer.php");
?>