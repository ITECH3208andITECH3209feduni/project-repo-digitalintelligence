<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ECOURSES - Online Courses HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/stylenew.css" rel="stylesheet">
</head>

<body>
    <!-- Header Start -->
        <div class="neumorphic-div">
			<div class="row">
				<form>
				<div class="head-bt-left">
					<input type="submit" formaction="index.php" id="head-bt" style="margin-left: 50px;" value="Home">
				</div>
				</form>
				<form>
				<div class="head-bt-left">
					<input type="submit" formaction="course.php" id="head-bt" style="margin-left: 50px;" value="Digital Intelligence">
				</div>
				</form>
				<form>
				<div class="head-bt-left">
					<input type="submit" formaction="about.php" id="head-bt" style="margin-left: 50px;" value="About">
				</div>
				</form>
				<div id="header">
					<center><img src="img/logo.png" height="75px" width="75px" style="margin-top: -2px; margin-left: 200px;"></center>
				</div>
				<form>
				<div class="head-bt-right">
					<input type="submit" formaction="events.php" id="head-bt" style="margin-left: 150px;" value="Events">
				</div>
				</form>
				<form>
				<div class="head-bt-right">
					<input type="submit" formaction="support.php" id="head-bt" style="margin-left: 50px;" value="Student Support">
				</div>
				</form>
				<form>
				<div class="head-bt-right">
					<input type="submit" formaction="blog.php" id="head-bt" style="margin-left: 50px;" value="Blogs">
				</div>
				</form>
			</div>
		</div>	
    <!-- Header End -->
	
	<!-- Account Details Start -->
        <div id ="account" class="neumorphic-div" >
			<div class="row">
				<div id="img">
					<img id="profile-pic" src="img/user1.png" width="100px" height="100px">
				</div>
					<div id="txt">
						<?php	
							session_start();
							$con=mysqli_connect("localhost","root","","digitalintelligence");
							$res=mysqli_query($con,"select * from students");
								
							if(isset($_SESSION['email']))
							{
								echo "<h1 style='color:#2C363F'>Welcome ".$_SESSION['email'];
							?>
							</h1>
					</div>
							<div>
								<form>
									<input type ="submit" formaction="logout.php" id="neumorphic-button" value="Logout" style="margin-left: 900px; margin-top: 72px; font-size: 22px; color:#E1E6E1;">
								</form>
							</div>
							<?php
							}
							else
							{
							?>
							<div>
								<h1 style="color:#2C363F">Welcome Guest!</h1>
							</div>
							<div>
								<form>
									<input type ="submit" formaction="login.html" id="neumorphic-button" value="Login" style=" margin-left: 1500px;  font-size: 22px; color:#E1E6E1;"></span>
									<input type ="submit" formaction="register.html" id="neumorphic-button" value="Register" style=" font-size: 22px; color:#E1E6E1;">
								</form>
							</div>	
							<?php
							}
							?>
			</div>
		</div>
    <!-- Account Details End -->

    <!-- Carousel Start -->
	<div class="neumorphic-div-body">
		<div>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<p id="heading">Conquer the Digital World with</p>
			<p id="heading">Digital Intelligence</p>
		</div>
	</div>
    <!-- Carousel End -->

    <!-- Footer Start -->
        <div id ="footer" class="neumorphic-div" >
			<div class="row">
				<div class="col-md-6 mb-5" id="footer-text">
                    <h5 id="footer-head" style="letter-spacing: 5px;">Get In Touch</h5>
                    <p><i class="fa fa-envelope mr-2"></i>hello@employability.life</p>
                    <div class="d-flex justify-content-start mt-4">
                        <a class="btn btn-outline-light btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-square" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
				<div class="col-lg-5 col-md-12 mb-5" id="newsletter-text">
					<h5 id="newsletter-head" style="letter-spacing: 5px;">Newsletter</h5>
					<p>To get the latest updates regarding news and events related to Digital Intelligence, enter your E-Mail Address Below and sign for our Newsletter now.</p>
					<div class="w-100">
						<div class="input-group">
							<input type="text" class="form-control border-light" id="text-box" style="padding: 30px;" placeholder="Email Address...">
							<div class="input-group-append">
								<button id="footer-neumorphic-button">Sign Up</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
    <div class="footer-neumorphic-div" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div style="margin-top: 40px; margin-left: 515px">
                <p style="margin-left: 500px; color: white;">&copy; <a href="employabilty.life">Employability.Life</a>. All Rights Reserved. Designed by <font style="color: #F58120">TechWiz</font>
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>