<!doctype html>
<html class="no-js" lang="en">

<head>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" ></script>
  
<script>
    $.ajax({
        headers: {
            "Accept": "application/json",//depends on your api
            "Authorization": "fce65f45310e42179e35918215c9e31b",

        }, url: "https://newsapi.org/v2/top-headlines?country=au&apiKey=fce65f45310e42179e35918215c9e31b",
        success: function (response) {
            let size = 6;
            let oldnews = response.articles;
            let news = oldnews.sort(() => Math.random() - Math.random()).slice(0, size)

            var table = document.getElementById("list");

            console.log(news);
            let divstr = ""
            for (let i = 0; i < news.length; i++) {
                let newsimage = news[i].urlToImage;
                let newstitle = news[i].title;
                let newsdesc = news[i].description;
                let newsurl=news[i].url;
                divstr = divstr + `<div class='card mb-5'>
                            <img class='card-img-top' src="${newsimage}"alt='image' height='50' width='50'/>
                            <div class='card-body p-25'>
                            <h4 class='card-title mb-4'><a href="${newsurl}">${newstitle}</a></h4>
                            <p class='card-text'>${newsdesc}</p>
                            <a class='btn btn-primary btn-round btn-sm' href="${newsurl}"> Read More </a>
                            </div>
                        </div>`;
            }

            $("#news").html(divstr);

        }
    });

</script>


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
												<li class="active"><a href="news.php">News</a>
												</li>
												<li><a href="about.php">About</a></li>
												<li><a href="support.php">Student Support</a></li></font>
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
                <h4 class="crumb-title">Recent Updates</h4>
            </div>
        </div>
    </div>
    <!-- crumbs area end -->

 <!-- news area start -->
    <div class="feature-blog  pt--120 pb--70">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-title">
                        <span class="text-uppercase">Top stories</span>
                        <h2>News</h2> 
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog-carousel owl-carousel card-deck" id="news">                     
                                 
                    
                </div><!-- blog-carousel -->
            </div><!-- blog-carousel -->
        </div>
    </div> <!-- blog area end -->
	
<?php
include("footer.php"); 
?>
