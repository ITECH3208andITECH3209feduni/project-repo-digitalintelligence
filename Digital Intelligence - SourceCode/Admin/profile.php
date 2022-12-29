<?php include "header.php";

 include "left.php"; ?>
 
<?php

$count=="";

if(isset($_POST['btn_submit']) )
{
$name=$_POST['txt_fname'];
if($name=="")
{
$err_fname="Enter First Name";
$count++;
}
$email=$_POST['txt_email'];
if($email=="")
{
$err_email="Enter Email";
$count++;
}
$address=$_POST['txt_address'];
if($address=="")
{
$err_address="Enter Address ";
$count++;
}
}
?>
<?php 
if(isset($_POST['btn_submit'])&& $count==0 )
{
	   $update="update tbl_admin_reg set
		
		reg_fname = '$_POST[reg_fname]',
		reg_lname = '$_POST[reg_lname]',
		reg_email = '$_POST[reg_email]',
		reg_contact_no = '$_POST[reg_contact_no]',
		reg_address = '$_POST[reg_address]' where reg_id ='$_SESSION[login_user_id]'";
	//$query=mysql_query($update);
	?>
	<script>alert("Successfully Updated Profile");
	window.location.href="home.php";
	</script>
	<?php
	}
	 $select = "select * from tbl_admin_reg where reg_id = '$_SESSION[login_user_id]'";
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
                <h2><i class="glyphicon glyphicon-edit"></i> Profile</h2>

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
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="text" name="txt_fname" class="form-control" id="exampleInputEmail1" value="<?php echo $row['reg_fname']; ?>" readonly="" >
						<span style="color:#FF0000;"><?php echo $err_fname; ?></span>
                    </div>
										<div class="form-group">
                        <label for="exampleInputEmail1">Last Name</label>
						<input type="text" class="form-control" name="txt_lname" id="exampleInputEmail1" value="<?php echo $row['reg_lname']; ?>" readonly="">
                        					   </select>
					   <span style="color:#FF0000;"><?php echo $err_lname; ?></span>
					   
                    </div>
					<div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="txt_email" class="form-control" id="exampleInputEmail1" value="<?php echo $row['reg_email']; ?>" readonly="">
                    <span style="color:#FF0000;"><?php echo $err_email; ?></span>
					</div>
					<div class="form-group">
                        <label for="exampleInputEmail1">
Contact No.
</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="txt_contact_no" value="<?php echo $row['reg_contact_no']; ?>" readonly="">
						<span style="color:#FF0000;"><?php echo $err_contact; ?></span>
                    </div>
						<div class="form-group">
                        <label for="exampleInputEmail1">
Address.
</label>
                        <textarea class="form-control" id="exampleInputEmail1"  name="txt_address" readonly=""><?php echo $row['reg_address']; ?></textarea>
						<span style="color:#FF0000;"><?php echo $err_address; ?></span>
                    </div>
					
					
<a class="btn btn-primary btn-sm" name="btn_submit" href="edit_profile.php">Edit
</a>
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
