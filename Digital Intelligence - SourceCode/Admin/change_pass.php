<?php include "header.php";
 include "left.php"; ?>
 
<?php
$count=="";

if(isset($_POST['btn_submit']) )
{
$old=$_POST['txt_old_pass'];
if($old=="")
{
$err_old_pass="Enter Old Password";
$count++;
}
$new=$_POST['txt_new_pass'];
if($new=="")
{
$err_new_pass="Enter New Password";
$count++;
}
$conf=$_POST['txt_cpass'];
if($conf=="")
{
$err_cpass="Enter Confirm Password";
$count++;
}
if($new != $conf)
{
	
	$not ="Password And Confirm Password does not Match!!!";
	$count++;
}


}
?>
<?php 
if(isset($_POST['btn_submit'])&& $count==0 )
{
	$u=$_SESSION['user'];
	echo $sel="select admin_password from tbl_admin_login where admin_username='$u'";
	$q=mysqli_query($con,$sel);
	$row=mysqli_fetch_array($q);
	if($row['admin_password']==$old)
	{
		echo $up="update tbl_admin_login set admin_password='$new' where admin_username='$u'";
		$q1=mysqli_query($con,$up);
		?>
		<script>
		alert("sucess");
		</script>
		<?php
	}
	else
	{
	}
}
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
                <h2><i class="glyphicon glyphicon-edit"></i> Change Password</h2>

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
                        <label for="exampleInputEmail1">Old Password</label>
                        <input type="password" name="txt_old_pass" class="form-control" id="exampleInputEmail1" >
						<span style="color:#FF0000;"><?php echo $err_old_pass; ?></span>
                    </div>
										<div class="form-group">
                        <label for="exampleInputEmail1">New Password</label>
						<input type="password" class="form-control" name="txt_new_pass" id="exampleInputEmail1">
                        					   
					   <span style="color:#FF0000;"><?php echo $err_new_pass; ?></span>
					   
                    </div>
				                        <div class="form-group">
                        <label for="exampleInputEmail1">Confirm Password </label>
                        <input type="password" class="form-control" id="exampleInputEmail1" name="txt_cpass">
						<span style="color:#FF0000;"><?php echo $err_cpass; ?>
						<?php echo $not; ?>
						</span>
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
