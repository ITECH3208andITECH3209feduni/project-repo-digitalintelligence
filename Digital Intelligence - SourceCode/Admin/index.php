<?php
ob_start();
error_reporting(0);
include"connect.php";
session_start();
 ?>
 <?php
 if(isset($_POST['btn_submit']))
 {
	 $count=0;
	 $em=$_POST['txt_email'];
	 $pass=$_POST['txt_password'];
	 if($em=="")
	 {
		 $err_unm="Enter email";
		 $count++;
	 }
	 if($pass=="")
	 {
		 $err_pass="Enter password";
		 $count++;
	 }
 }
 ?>
 <?php
 if(isset($_POST['btn_submit']) && $count==0)
 {
	 echo $s="select *from admin_login where admin_username='$em' and admin_password='$pass';";
	 $q=mysqli_query($con,$s);
	 $r=mysqli_fetch_array($q);
	 if($em==$r['admin_username'] && $pass==$r['admin_password'])
	 {
		 $_SESSION['user']=$r['admin_username'];
		 ?>
		 <script>
		 window.location.href="home.php";
		 </script>
	 <?php
	 }
	 else
	 {
		 $err_msg="hi";
	 }
 }
 ?>
	 
 
 
<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body style="background-color:#f0f0f0">
<div class="ch-container">
    <div class="row" style="margin: 0px ;">
        
    <div class="row">
        <div class="col-md-12 center login-header">
            <h2>Welcome to Admin Panel</h2>
        </div>
        <!--/span-->
    </div><!--/row-->

    <div class="row">
        <div class="well col-md-5 center login-box">
            
            <?php
            	if($err_msg!='')
            	{
            		?>
            		<div class="alert alert-danger" style="font-weight: bolder;">
		                Please Enter Correct Username and Password.
		            </div>
            		<?php
            	}
            	else
            	{
            		?>
            		<div class="alert alert-info" style="font-weight: bolder;">
		                LOGIN with Username and Password
		            </div>
            		<?php
            	}

            ?>
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <fieldset>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="email" name="txt_email" class="form-control" placeholder="Enter E-mail Id">
						
                    </div>
					<span style="color:#FF0000"><?php echo $err_uname ; ?></span>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        <input type="password" name="txt_password" class="form-control" placeholder="Enter Password">
                    </div>
					<span style="color:#FF0000"><?php echo $err_pass ; ?></span>
                    <div class="clearfix"></div>

                    
                    <div class="clearfix"></div>

                    <p class="center col-md-5">
                     <div class="col-md-6">  
					    <button type="submit" name="btn_submit" class="btn btn-primary">Login</button>
						</div>
						<div class="col-md-6">
						<button type="submit" name="btn_reset" class="btn btn-primary">Clear</button>
						</div>
                    </p>
                </fieldset>
            </form>
        </div>
        <!--/span-->
    </div><!--/row-->
</div><!--/fluid-row-->

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>


</body>
</html>
