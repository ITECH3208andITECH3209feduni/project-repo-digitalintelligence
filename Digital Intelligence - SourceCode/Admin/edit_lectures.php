<?php include "header.php";
 include "left.php"; ?>
 


<?php

if(isset($_POST['btn_submit']))
{
	print_r('333');
	print_r($_GET['eid']);
	print_r($_POST);
	$id=$_GET['eid'];
	$link=$_POST['video_link'];
	echo $q="update lectures set video_link='$link' where unit_id='$id'";
	$r=mysqli_query($con,$q);
?>

<script>
alert("Video Updated Successfully!");
window.location.href="manage_lectures.php";
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
                <h2><i class="glyphicon glyphicon-edit"></i> EDIT Lecture Video Link</h2>

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
			$sel="select * from lectures where id='$id'";
			$q=mysqli_query($con,$sel);
			$row=mysqli_fetch_array($q);
			?>
                <form name="frm_pro" enctype="multipart/form-data" method="POST">
				
                    
					<div class="form-group">					
                        <label for="exampleInputEmail1">Video Link</label>
                        <input type="text" max="100" min="1" name="video_link" class="form-control" id="exampleInputEmail1" placeholder="Enter New Link" value="<?php echo $row['video_link']?>">
						<strong><span style="color:#FF0000;"></span></strong>
                    </div>
										
					
<button class="btn btn-primary btn-sm" type="submit" name="btn_submit">Update
</button>
<a class="btn btn-primary btn-sm" href="manage_lectures.php" name="btn_back">Back to List </a>
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
