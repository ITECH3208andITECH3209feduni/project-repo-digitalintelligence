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

	<div class="book-neumorphic-div-body" style="height:950px;">
		<center><br><br><p id="registerform-head">Digital Intelligence</p></center>
		<div class="row">
			<div id="news1" align="center" style="margin-left:750px;"><br><br><br>
				<a href="unit1.php" id="unit"><h1 id="event-head1">Unit 1</h1></a><br><br>
			</div>
			<div id="news2" align="center"><br><br><br>
				<a href="unit2.php" id="unit"><h1 id="event-head2">Unit 2</h1></a><br><br>
			</div>
			<div id="news1" align="center"><br><br><br>
				<a href="unit3.php" id="unit"><h1 id="event-head1">Unit 3</h1></a><br><br>
			</div>
		</div>
		<div class="row">
			<div id="news2" align="center" style="margin-left:750px;"><br><br><br>
				<a href="unit4.php" id="unit"><h1 id="event-head2">Unit 4</h1></a><br><br>
			</div>
			<div id="news1" align="center"><br><br><br>
				<a href="unit5.php" id="unit"><h1 id="event-head1">Unit 5</h1></a><br><br>
			</div>
			<div id="news2" align="center"><br><br><br>
				<a href="unit6.php" id="unit"><h1 id="event-head2">Unit 6</h1></a><br><br>
			</div>
		</div>
		<div class="row">
			<div id="news2" align="center" style="height: 250px; margin-left: 1112px;"><br><br><br>
				<a href="book.php" id="unit"><h1 style="color: #F58120;">Book</br>Sessions</h1></a><br><br>
			</div>
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