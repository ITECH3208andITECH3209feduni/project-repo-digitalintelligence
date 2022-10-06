
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
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <!--color css-->
    <link rel="stylesheet" id="triggerColor" href="assets/css/triggerplate/color-0.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
	<!--<script>
	
		var date= new Date();
		var tdate= date.getDate();
		var tmonth= date.getMonth()+1;
		var tyear= date.getUTCFullYear();
		if (tmonth<10)
		{
			tmonth="0"+tmonth;
		}
		if (tdate<10)
		{
			tdate="0"+tdate;
		}
		var curdate = tyear + "-" + tmonth + "-" + tdate;
		
	
	</script>-->
	
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
	width: 800px;
	height: 400px;
	color: #2C363F;
	border-radius: 30px;
	background: #ffdda6;
	align: center;
}

#textbox{
	border-radius: 10px;
	border: none;
	height: 40px;
	width: 280px;
	background: #f5f3f2;	
	margin-bottom: 30px;
}

.row {
  display: flex;
  flex-wrap: wrap;
  align: center;
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
                <h4 class="crumb-title">Book Time Slot</h4>
            </div>
        </div>
    </div>
    <!-- crumbs area end -->
	
    	
    <!-- Form Start -->
	
	<div class="register-neumorphic-div-body" style="background-color:#e3e2e1;">
		<div class="row">
			<div class="col-md-10 offset-md-1" style="margin-top:70px;">
				<div class="cnt-title">
				<?php 
				$id=$_POST['id'];
				$date=$_POST['date'];
				$time=$_POST['time'];
				$sid = $_SESSION['student_id'];	
				$email = $_SESSION['email'];
				$con=mysqli_connect("localhost","root","","digitalintelligence");
				$result=mysqli_query($con,"select * from tutors where id='$id';");
				$row=mysqli_fetch_array($result);
				
				$tid=$row['id'];
				$tname=$row['name'];
				$tpro=$row['profile_pic'];
				$tcourse=$row['course'];
				$slot1=$row['slot1'];
				$slot2=$row['slot2'];
				$slot3=$row['slot3'];
				$slot4=$row['slot4'];
				$slot5=$row['slot5'];
				$target_dir="assets/images/team/";
				$target_file=$target_dir.$tpro;
				if(file_exists($target_file))
				{
					$tpro=$row['profile_pic'];
					$target_file=$target_dir.$tpro;
				}
				else
				{
					$tpro="pro.png";
					$target_file=$target_dir.$tpro;
				}
				
				echo "<h4><span>Your Session with ".$tname."</span></h4>";
				echo "<br><img src='".$target_file."' style='width:220px; height: 200px; ' alt='image'>"; 

				?>
				</div>
			</div>	
			<div  class="col-md-10 offset-md-3" >
				<div style="margin-left:230px;">
					<div id="supportform" align="center">
							<div class="rows">
								<font color="#F58120">
								<?php
								$result2=mysqli_query($con,"select * from bookings where faculty_id='$id';");
								
								/*if(mysqli_num_rows($result2)>0)
								{
									while($row2=mysqli_fetch_array($result2))
									{
										if ($row2['timeslot']==$time && $row2['date']==$date)
										{
											echo "<br><br><br><br><h4>There is an existing booking made for</h4>";
											echo "<h4>".$time." on ".$date." you selected</h4>";
											echo "</font>";
											echo "</div><br>";
											echo "<form action='book_session.php'>";
											echo "<br><br><input type ='submit' class='btn btn-dark btn-round' value='Go Back' name='submit' style=' font-size: 18px; color:#E1E6E1;'>";
											echo "</form>";
											break;							
										}
										else
										{
											continue;
										}
									}
								}*/
								if (mysqli_num_rows($result2)<1)
								{
									$ins = "INSERT INTO `bookings` (`booking_id`, `timeslot`, `date`, `faculty_id`, `student_id`) VALUES (NULL, '$time', '$date', '$tid', '$sid');"	;
									if(mysqli_query($con,$ins))
									{
										echo "<br><br><br><br><h4>Your Session with ".$tname." has been booked successfully</h4>";
										echo "<h4>At ".$time." on ".$date." </h4>";
										echo "</font>";
										echo "</div><br>";
										echo "<form action='DI_main.php'>";
										echo "<br><br><input type ='submit' class='btn btn-dark btn-round' value='Book' name='submit' style=' font-size: 18px; color:#E1E6E1;'>";
										echo "</form>";
									}
									
								}
								
								
								?>
								
								
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- Form End -->
	<script>
	config = 
		{
			minDate: "today",
			maxDate: new Date().fp_incr(28) // 14 days from now
		}
	
		flatpickr("input[type=date]", config);
	</script>


<?php
include("footer.php");
?>