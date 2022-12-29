<?php include "header.php";
 include "left.php"; ?>

<?php

if(isset($_POST['btn_submit']))
{
	$count==0;
	$reply=$_POST['txt_reply'];
	if($reply=="")
	{
		$err_reply="Enter Your Reply";
		$count++;
	}
}
?>

<?php

$eid=$_GET['eid'];
$res_id=$_POST['resolver'];
if(isset($_POST['btn_submit']) and $count==0)
{
	echo $q="INSERT INTO `ticket_reply` (`id`, `reply`, `ticket_id`, `resolver_id`, `attachments`) VALUES (NULL,'$reply','$eid','$res_id',NULL);";
	$r=mysqli_query($con,$q);
	echo $s="UPDATE `tickets` set `ticket_status`='In Process' WHERE `ticket_id`='$eid';";
	$t=mysqli_query($con,$s);
?>

<script>
alert("Reply Added Successfully!");
window.location.href="manage_tickets.php";
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
                <h2><i class="glyphicon glyphicon-edit"></i> Add Reply To Tickets</h2>

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
			$sel="select * from tickets where ticket_id='$id'";
			$q=mysqli_query($con,$sel);
			$row=mysqli_fetch_array($q);
			$rid=$row['resolver_id'];
			?>
                <form name="frm_pro" enctype="multipart/form-data" method="POST">
				
                    
					<div class="form-group">					
                        <label for="exampleInputEmail1">Query</label>
                        <input type="text" max="1000" min="1" name="query" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Reply" value="<?php echo $row['query']?>">
                        <input type="hidden" name="resolver"  id="exampleInputEmail1"  value="<?php echo $rid?>">
						<strong><span style="color:#FF0000;"></span></strong>
                    </div>
					
					<div class="form-group">
					<h5><?php echo $err_reply;?></h5>				
                        <label for="exampleInputEmail1">Add Reply</label>
                        <textarea type="text" max="1000" min="1" style="height:80px;" name="txt_reply" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Reply"></textarea>
						<strong><span style="color:#FF0000;"></span></strong>
                    </div>
					
					<div class="form-group">					
                        <label for="exampleInputEmail1">Attachments</label>
                        <input type="file" max="100" min="1" name="attachments" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Reply">
						<strong><span style="color:#FF0000;"></span></strong>
                    </div>
					
<button class="btn btn-primary btn-sm" type="submit" name="btn_submit">Add Reply
</button>
<a class="btn btn-primary btn-sm" href="manage_tickets.php" name="btn_back">Back to List </a>
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