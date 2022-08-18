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
    <link href="css/style.css" rel="stylesheet">
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
				<form>
				<div class="head-bt-right" style="margin-left: 50px; color: #F58120;">
				<?php	
					session_start();
					$con=mysqli_connect("localhost","root","","digitalintelligence");
					$res=mysqli_query($con,"select * from students");
						
					if(isset($_SESSION['email']))
					{
						echo $_SESSION['email'];
				?>
					(<a href="logout.php" style="color: white">Logout</a>)
				<?php
					}
					else
					{
				?>
					Welcome Guest, (<a href="login.html"><font color="white">Login</font></a>|<a href="register.html"><font color="white">Register</font></a>)
				<?php
					}
				?>
				</div>
				</form>
			</div>
		</div>	
    <!-- Header End -->

	<!-- Course Start -->

	<div class="book-neumorphic-div-body">
		<center><br><br><p id="registerform-head">Unit 1</p></center>
		<div id="booksess" style="margin-left: 250px;">
		<iframe src="https://player.vimeo.com/video/302609231?h=d92fd2f0d5" style="position:absolute;top:350px;left:780px;width:40%;height:35%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen>
		</iframe>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<center><p style="color: white;"><a href="https://vimeo.com/302609231">Sample Confidence on Video Class for Entrepreneurs</a> from 
		<a href="https://vimeo.com/brendaadelman">Brenda Adelman</a> on 
		<a href="https://vimeo.com">Vimeo</a>.</p></center>
		</div>
		<script src="https://player.vimeo.com/api/player.js"></script>
	</div>
	<div class="book-neumorphic-div-body">
		<center><br><br><p id="registerform-head">Student Quizzes and Submissions</p></center>
		<div id="booksess" style="margin-left: 250px;">
			<center><br><br><br><br><br><br><br><br><br><br>					
				<p id="event-head2" style="font-size: 80px;">Coming Soon!</p><br><br>
			</center>
		</div>
	</div>

	<!-- Course End -->

    <!-- Footer Start -->
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