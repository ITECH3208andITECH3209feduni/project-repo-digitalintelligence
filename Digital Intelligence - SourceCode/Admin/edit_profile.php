<?php include "header.php";
 include "left.php"; ?>
 
<?php
$count=="";

if(isset($_POST['btn_submit']) )
{
$email=$_POST['txt_email'];
if($email=="")
{
$err_email="Enter email";
$count++;
}

$pass=$_POST['txt_password'];
if($pass=="")
{
$err_password="Enter password";
$count++;
}

}
?>
<?php 
if(isset($_POST['btn_submit'])&& $count==0 )
{
	$id=$_SESSION['login_user_id'];
	   $update="update tbl_admin set
	
		admin_email = '$_POST[txt_email]',
		admin_password = '$_POST[txt_password]'
		
		where admin_id ='$id'";
	$query=mysqli_query($connection,$update) or die('error->'.mysqli_error($connection));
	?>
	<script>alert("Profile Is Successfully Updated.");
	window.location.href="home.php";
	</script>
	<?php
	}

?>
<?php
$select = "select * from tbl_admin where admin_id =".$_SESSION['login_user_id'];
	$sel = mysqli_query($connection,$select);
	$row = mysqli_fetch_array($sel);
?>
        <!--/span-->
        <!-- left menu ends --><noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
           


<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Edit Profile</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form role="form" method="post" enctype="multipart/form-data">
                    
						
					<div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="txt_email" class="form-control" id="exampleInputEmail1" value="<?php echo $row['admin_email']; ?>">
                    <span style="color:#FF0000;"><?php echo $err_email; ?></span>
					</div>
					<div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" class="form-control" id="exampleInputEmail1" name="txt_password" value="<?php echo $row['admin_password']; ?>" autocompleted="off">
						<span style="color:#FF0000;"><?php echo $err_password; ?></span>
                    </div>
						
					
<button class="btn btn-primary btn-sm" type="submit" name="btn_submit">Change
</button>
<a class="btn btn-primary btn-sm" href="home.php" name="btn_back">Back to List </a>
</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->

    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

    <!-- Ad, you can remove it -->
    
    <!-- Ad ends -->

    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>


    <?php include "footer.php"; ?>
