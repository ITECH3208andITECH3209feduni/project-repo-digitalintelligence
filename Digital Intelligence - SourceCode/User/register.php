<?php
include("registration.php");
?>

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
#textbox{
	border-radius: 10px;
	border: none;
	height: 40px;
	width: 250px;
	background: #f5f3f2;	
	margin-bottom: 20px;
}

.row {
  display: flex;
  flex-wrap: wrap;
  align: center;
}

#registerform {
	margin-top: 10px;
	margin-left:-30px;
	width: 600px;
	height: 680px;
	color: #2C363F;
	border-radius: 30px;
	background: #ffdda6;
	align: center;
}

#neumorphic-button-registerform {
	height: 70px;
	width:300px;
	border: none;
	border-radius: 30px;
	background: #2C363F;
	margin-top: 60px;
	margin-left: 400px;
	
#loginform {
	margin-left: 110px;
	margin-top: 100px;
	width: 600px;
	height: 500px;
	color: #2C363F;
	border-radius: 35px;
	background: linear-gradient(145deg, #ff8a22, #dd741d);
	box-shadow:  12px 12px 24px #ae5c17,
				 -12px -12px 24px #ffa629;
}
</style>

<script>
	
		function validateForm()
		{
			//Validation for Name
			var name = document.forms["register"]["name"].value;
			if(name=="")
			{
				document.getElementById("msg1").innerHTML = "*Enter Full Name";
				return false;
			}
			else
			{
				document.getElementById("msg1").innerHTML = "";
			}
			
			var letters = /^[A-Za-z ]+$/;
			if(document.register.name.value.match(letters))
			{
				document.getElementById("msg1").innerHTML = "";
			}
			else    {
				document.getElementById("msg1").innerHTML = "*Name must contain Alphabets only";
				return false;
			}
			
			//Validation for E-Mail ID
			var eid = document.forms["register"]["email"].value;
			if(eid=="")
			{
				document.getElementById("msg2").innerHTML = "*Enter Email Address";
				return false;
			}
			else
			{
				document.getElementById("msg2").innerHTML = "";
			}
			
			//Validation for Password
			var pass = document.forms["register"]["password"].value;
			if(pass=="")
			{
				document.getElementById("msg3").innerHTML = "*Enter Password";
				return false;
			}
			else
			{
				document.getElementById("msg3").innerHTML = "";
			}
			
			//Validation for Contact
			var contact = document.forms["register"]["contact"].value;
			if(contact=="")
			{
				document.getElementById("msg4").innerHTML = "*Enter Contact";
				return false;
			}
			else
			{
				document.getElementById("msg4").innerHTML = "";
			}

			if(isNaN(contact))
			{
				document.getElementById("msg4").innerHTML = "*Enter valid Number";
				return false;
			}
			else
			{
				document.getElementById("msg4").innerHTML = "";
			}
			
			//Validation for Address
			var add = document.forms["register"]["address"].value;
			if(add=="")
			{
				document.getElementById("msg5").innerHTML = "*Enter Address";
				return false;
			}
			else
			{
				document.getElementById("msg5").innerHTML = "";
			}
			//Validation for Zip Code
			var zip = document.forms["register"]["zip"].value;
			if(zip=="")
			{
				document.getElementById("msg6").innerHTML = "*Enter Zip Code";
				return false;
			}
			else
			{
				document.getElementById("msg6").innerHTML = "";
			}
			

			//Validation for Employement Status
			var emp = document.forms["register"]["empstat"].selectedIndex;
			if(emp==0)
			{
				document.getElementById("msg7").innerHTML = "*Select Employement Status";
				return false;
			}
			else
			{
				document.getElementById("msg7").innerHTML = "";
			}
			
			//Validation for Job Title
			var job = document.forms["register"]["job-title"].value;
			if(job=="")
			{
				document.getElementById("msg8").innerHTML = "*Enter Job Title";
				return false;
			}
			else
			{
				document.getElementById("msg8").innerHTML = "";
			}

			//Validation for Desired Company
			var comp = document.forms["register"]["company"].value;
			if(comp=="")
			{
				document.getElementById("msg9").innerHTML = "*Enter Job Title";
				return false;
			}
			else
			{
				document.getElementById("msg9").innerHTML = "";
			}

			//Validation for Resume Status
			var resu = document.forms["register"]["resume"].selectedIndex;
			if(resu==0)
			{
				document.getElementById("msg10").innerHTML = "*Select Resume Status";
				return false;
			}
			else
			{
				document.getElementById("msg10").innerHTML = "";
			}

			//Validation for Cover letter
			var cov = document.forms["register"]["coverletter"].selectedIndex;
			if(cov==0)
			{
				document.getElementById("msg11").innerHTML = "*Select Cover Letter Status";
				return false;
			}
			else
			{
				document.getElementById("msg11").innerHTML = "";
			}

			//Validation for LinkedIn Profile
			var link = document.forms["register"]["linkedin"].selectedIndex;
			if(link==0)
			{
				document.getElementById("msg12").innerHTML = "*Select Cover Letter Status";
				return false;
			}
			else
			{
				document.getElementById("msg12").innerHTML = "";
			}

			//Validation for Interests
			var inte = document.forms["register"]["interests"].value;
			if(inte=="")
			{
				document.getElementById("msg13").innerHTML = "*Enter Interests";
				return false;
			}
			else
			{
				document.getElementById("msg13").innerHTML = "";
			}
		}
		
		
		
		</script>




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
                <h4 class="crumb-title">Register Here</h4>
            </div>
        </div>
    </div>
    <!-- crumbs area end -->

<!-- regiater form area start -->
    <div class="contact-form-area pb--120" style= "margin-top:70px;">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="cnt-title">
                        <h4><span>Lets</span> Get Started</h4>
                        <p>Please fill the below given form to get started with us</p>
                    </div>
                </div>
            </div>
            
			<div class="row">
			<div id="registerform" align="center">
				<form action="registration.php" name="register" method="post" onsubmit="return validateForm()">
				
					<font size="5">Name</font>
					<input type="input" id="textbox" name="name" style="margin-top: 80px; margin-left: 68px;"><br>
					<span id="msg1"></span><br>
					
					<font size="5">Email</font>
					<input type="email" id="textbox" name="email" style=" margin-left: 75px;"><br>
					<span id="msg2"></span><br>
					
					<font size="5">Password</font>
					<input type="password" id="textbox" name="password" style=" margin-left: 25px;"><br>
					<span id="msg3"></span><br>
					
					<font size="5">Contact</font>
					<input type="tel" id="textbox" name="contact" style=" margin-left: 43px;"><br>
					<span id="msg4"></span><br>
					
					<font size="5">Address</font>
					<input type="input" id="textbox" name="address" style="height: 110px; margin-left: 42px;"><br>
					<span id="msg5"></span><br>
					
					<font size="5">Zip Code</font>
					<input type="tel" id="textbox" name="zip" style=" margin-left: 35px;"><br>
					<span id="msg6"></span><br>
			</div>
			
			<div id="registerform" align="center">
				<font size="5">Employement Status</font>
					<select id="textbox" name="empstat" style="margin-top: 80px; margin-left: 20px;">
						<option value="default">--Select an Option--</option>
						<option value="Employed Full Time">Employed Full Time</option>
						<option value="Employed Part Time">Employed Part Time</option>
						<option value="Student">Student</option>
						<option value="Looking for job">Looking for Job</option>
						<option value="Business">Business</option>
					</select><br>
					<span id="msg7"></span><br>
					
					<font size="5">Desired Job Title</font>
					<input type="input" id="textbox" name="jobtitle" style=" margin-left: 70px;"><br>
					<span id="msg8"></span><br>
					
					<font size="5">Desired Company</font>
					<input type="input" id="textbox" name="company" style=" margin-left: 48px;"><br>
					<span id="msg9"></span><br>
					
					<font size="5">Resume Status</font>
					<select id="textbox" name="resume" style=" margin-left: 83px;">
						<option value="default">--Select an Option--</option>
						<option value="Resume is Ready">Resume is Ready</option>
						<option value="Partially Ready">Resume is Ready, but requires a little work</option>
						<option value="Not Ready">Not yet Ready</option>
					</select><br>	
					<span id="msg10"></span><br>
					
					<font size="5">Cover Letter</font>
					<select id="textbox" name="coverletter" style=" margin-left: 115px;">
						<option value="default">--Select an Option--</option>
						<option value="Ready">Cover letter is Ready</option>
						<option value="Partially Ready">Cover letter is Ready, but requires a little work</option>
						<option value="Not Ready">Not yet Ready</option>
					</select><br>
					<span id="msg11"></span><br>
					
					<font size="5">LinkedIn Profile</font>
					<select id="textbox" name="linkedin" style=" margin-left: 85px;">
						<option value="default">--Select an Option--</option>
						<option value="Have an Account">I have a LinkedIn Profile</option>
						<option value="Dont have an Account">Dont have a LinkedIn Profile</option>
					</select><br>
					<span id="msg12"></span><br>
					
					<font size="5">Interests</font>
					<input type="input" id="textbox" name="interests" style=" margin-left: 155px;"><br>
					<span id="msg13"></span><br>
			</div>
			<div class="col-md-10 offset-md-4" ><br>
				<button type ="submit" class="btn btn-primary btn-round" name="submit" style=" margin-left:35px;font-size: 20px; color:#E1E6E1;">Create Account</button>
			</div>
			</form>
		</div>
        </div>
    </div>
    <!-- contact form area end --> 
	

<?php
include("footer.php");
?>