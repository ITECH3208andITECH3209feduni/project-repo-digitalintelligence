<?php include "header.php";
 include "left.php"; ?>
 


<?php

if(isset($_POST['btn_submit']))
{
	print_r('333');
	print_r($_GET['eid']);
	print_r($_POST);
	$id=$_GET['eid'];
	$nm=$_POST['txt_name'];
	$email=$_POST['txt_email'];
	$add=$_POST['txt_address'];
	$mob=$_POST['txt_mobile'];
	echo $q="update students set sname='$nm',email='$email',address='$add',mobile='$mob' where student_id='$id'";
	$r=mysqli_query($con,$q);
?>

<script>
alert("Details Updated Successfully!");
window.location.href="manage_registrations.php";
</script>

<?php
}
?>


<div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> EDIT Registration</h2>

                <div class="box-icon">
                    
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
			<?php
			$id=$_GET['eid'];
			$sel="select * from students where student_id='$id'";
			$q=mysqli_query($con,$sel);
			$row=mysqli_fetch_array($q);
			?>
                <form name="frm_pro" enctype="multipart/form-data" method="POST">
				
                    
					<div class="form-group">
					<h5><?php echo $err_name;?></h5>
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" max="100" min="1" name="txt_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" value="<?php echo $row['sname'];?>">
						<strong><span style="color:#FF0000;"></span></strong>
                    </div>
					
					<div class="form-group">
					<h5><?php echo $err_email;?></h5>
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" max="100" min="1" name="txt_email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email" value="<?php echo $row['email'];?>">
						<strong><span style="color:#FF0000;"></span></strong>
                    </div>
					
					<div class="form-group">
					<h5><?php echo $err_add;?></h5>
                        <label for="exampleInputEmail1">Address</label>
                        <input type="text" max="100" min="1" name="txt_address" class="form-control" id="exampleInputEmail1" placeholder="Enter Address"value=" <?php echo $row['address'];?>">
						<strong><span style="color:#FF0000;"></span></strong>
                    </div>
					
					<div class="form-group">
					<h5><?php echo $err_mob;?></h5>
                        <label for="exampleInputEmail1">Mobile</label>
                        <input type="integer" max="10" min="1" name="txt_mobile" class="form-control" id="exampleInputEmail1" placeholder="Enter Mobile" value="<?php echo $row['mobile'];?>">
						<strong><span style="color:#FF0000;"></span></strong>
                    </div>
										
					
<button class="btn btn-primary btn-sm" type="submit" name="btn_submit">Update
</button>
<a class="btn btn-primary btn-sm" href="manage_registrations.php" name="btn_back">Back to List </a>
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
<style>
.select
{
	border:#D6D6D6 solid 2px;
	border-radius:3px;
}
</style>

    <?php include "footer.php"; ?>
